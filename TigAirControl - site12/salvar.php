<?php
    date_default_timezone_set("America/Sao_Paulo");
    require 'PHPMailer/PHPMailerAutoload.php';
    include 'conexao.php';

    function enviaEmail($array_temp, $titulo, $mensagem) {

        $mail = new PHPMailer();
        $mail->CharSet = 'UTF-8';
        $mail->isSMTP();
        $mail->Host = 'mail.tigtecno.com.br';
        $mail->SMTPAuth = true;
        //$mail->SMTPSecure = 'tls';
        $mail->Username = 'monitoramento@tigtecno.com.br';
        $mail->Password = 'Mon*123';
        $mail->Port = '25';

        $mail->setFrom('monitoramento@tigtecno.com.br');

        foreach($array_temp as $e) {
            //echo "<br>Email: " . $e['email'];
            $mail->addAddress($e['email']);
        }

        $mail->isHTML(true);
        $mail->Subject = $titulo;
        $mail->Body    = nl2br($mensagem);

        if(!$mail->send()) {
            echo '<br>Não foi possível enviar a mensagem.<br>';
            echo 'Erro: ' . $mail->ErrorInfo;
        } else {
            echo '<br>Mensagem enviada.';
        }
    }

    $tag = $_GET['tag'];
    $user = $_GET['user'];
    $local = $_GET['local'];
    $temp = $_GET['temp'];
    $umid = $_GET['umid'];

    $data = date("Y-m-d");
    //$hora = date("H:i:s");
    $data_hora = date("Y-m-d H:i:s");

    $array_email = array();

    $MAX_Temperatura = 0;
    $MIN_Temperatura = 0;
    $MAX_Umidade = 0;
    $MIN_Umidade = 0;

    $select_setpoint = "SELECT * FROM tb_setpoing WHERE MON_TAG = :tag";
    $stmt_setpoint = $PDO->prepare($select_setpoint);
    $stmt_setpoint->bindParam(':tag', $tag);
    $stmt_setpoint->execute();
    if($stmt_setpoint->rowCount() > 0) {
        $setpoint = $stmt_setpoint->fetch(PDO::FETCH_OBJ);
        
        $MAX_Temperatura = $setpoint->SET_MAX_T;
        $MIN_Temperatura = $setpoint->SET_MIN_T;

        $MAX_Umidade = $setpoint->SET_MAX_U;
        $MIN_Umidade = $setpoint->SET_MIN_U;

        //echo "<br>Temp Max: " . $MAX_Temperatura . " Temp Min: " . $MIN_Temperatura . " <br>Umid Max: " . $MAX_Umidade . " Umid Min: " . $MIN_Umidade;
    } else {
        echo "Tag não encontrada";
        exit;
    }

    $select_email = "SELECT * FROM tb_setpoint_email WHERE MON_TAG = :tag";
    $stmt_email = $PDO->prepare($select_email);
    $stmt_email->bindParam(':tag', $tag);
    $stmt_email->execute();

    if($stmt_email->rowCount() > 0) {
        while($email = $stmt_email->fetch(PDO::FETCH_OBJ)) {
            $array_email[] = array("email"=>$email->SET_EMAIL);
        }
    }

    $sql_mon = "INSERT INTO tb_monitoramento (MON_DATA, MON_HORA, MON_TAG, MON_USER, MON_LOCAL, MON_TEMP, MON_UMID)"; 
    $sql_mon .= "values (:mon_data, :mon_hora, :mon_tag, :mon_user, :mon_local, :mon_temp, :mon_umid)";
    $stmt_mon = $PDO->prepare($sql_mon);

    $stmt_mon->bindParam(':mon_data', $data);
    $stmt_mon->bindParam(':mon_hora', $data_hora);
    $stmt_mon->bindParam(':mon_tag', $tag);
    $stmt_mon->bindParam(':mon_user', $user);
    $stmt_mon->bindParam(':mon_local', $local);
    $stmt_mon->bindParam(':mon_temp', $temp);
    $stmt_mon->bindParam(':mon_umid', $umid);

    if($stmt_mon->execute()) {
        //echo "Salvo com sucesso";
        if($temp > $MAX_Temperatura || $umid > $MAX_Umidade) {
            $tit = "Dados acima do SetPoint / \n" . $local . " / " . $tag;
            $msg = "O Sistema detectou uma leitura acima do permitido, segue as medidas capturadas:\n" . "Temperatura: " . $temp . "\nUmidade: " . $umid;
            enviaEmail($array_email, $tit, $msg);
        } else if($temp < $MIN_Temperatura || $umid < $MIN_Umidade) {
            $tit = "Dados abaixo do SetPoint / \n" . $local . " / " . $tag;
            $msg = "O Sistema detectou uma leitura abaixo do permitido, segue as medidas capturadas:\n" . "Temperatura: " . $temp . "\nUmidade: " . $umid;
            enviaEmail($array_email, $tit, $msg);
        }
        echo "<br>Salvo com sucesso";
    } else {
        echo "Ocorreu um erro";
    }

?>