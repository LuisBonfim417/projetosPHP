<?php
ini_set("display_errors","1");
ini_set("display_startup_errors","1");
include("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

include("include/reportfunctions.php");

if(!trim(@$_SESSION["UserID"]))
{
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
	header("Location: ".GetTableLink("login", "", "message=expired"));
	return;
}

if(isLoggedAsGuest())
{
	$_SESSION["MyURL"]=$_SERVER["SCRIPT_NAME"]."?".$_SERVER["QUERY_STRING"];
}


$cMaxTitleLength=30;

$_SESSION["back_to_menu"]="true";
$_SESSION['webreports_oldname']="";
include('include/xtempl.php');
$xt = new Xtempl();

$h_includes = "";
$b_includes = "";

$h_includes .= '
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/jquery-ui.css").'" type="text/css">
	<link rel="stylesheet" href="'.GetRootPathForResources("include/css/dstyle.css").'" type="text/css">
	
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.min.js").'"></script>
	<script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery.dimensions.pack.js").'"></script>
    <script type="text/javascript" src="'.GetRootPathForResources("include/js/jquery-ui.js").'"></script>
'."\r\n";

$xt->assign("h_includes", $h_includes);
$arr_UserGroups = GetUserGroup();

$b_includes .= '<script type="text/javascript">'."\r\n";
$b_includes .= '
$(document).ready(function(){
	$("#alert").dialog({
		title: "Message",
		draggable: false,
		resizable: false,
		bgiframe: true,
		autoOpen: false,
		modal: true,
		buttons: {
			Ok: function() {
				$(this).dialog("close");
			}
		}
	});

	$(".view").each(function(){
		var type = $(this).attr("type");
		var scriptName = (type == "report") ? "'.GetTableLink("dreport").'?rname=" : "'.GetTableLink("dchart").'?cname=";
		var name = $(this).parent("span").attr("id");
		this.href = scriptName + name;
	});
	
	
	$(".del").click(function(){
		var type = $(this).attr("type"),
			scriptName = (type == "report") ? "dreport" : "dchart",
			name = $(this).parent("span").attr("id"),
			title = $(this).parent("span").attr("title");
			
		var mess = (type == "report") ? "'."Você deseja realmente eliminar o relatório %s?".'" : "'."Você deseja realmente eliminar o gráfico %s?".'";
		mess=mess.replace("%s",title);
		$("#alert")
			.html("<p>"+mess+"</p>")
			.dialog("option", "buttons", {
				"'."Não".'": function() { $(this).dialog("close"); },
				"'."Elimina Selecionados".'": function() {
					$.ajax({
						type: "POST",
						url: "'.GetTableLink("save-state").'",
						data: {
							del: 1,
							web: "web"+type+"s",
							name: ""+name,
							owner: (type == "report") ? reportsList[name]["owner"] : chartsList[name]["owner"],
							rnd: (new Date().getTime())
						},
						success: function(msg){
							if ( msg == "OK" ) {
								window.location.reload();
							} else {
								$("#alert").html("<p>"+msg+"</p>").dialog("open");
							}
						},
						error: function() {
							$("#alert").html("<p>'."Tente de novo mais tarde".'</p>").dialog("open");
						}
					});				
				}
			})
			.dialog("open");		
	});
	
	$("#return_app").click(function(){
		window.location = "'.GetTableLink("menu").'";
    });';
	
	if(!count($arr_UserGroups))
	{
		$b_includes .= '$("#admin_sql").click(function(){
			$("#alert").dialog("option","title","'."Entre com a senha".'");
			$("#alert")
				.html("'."Senha".':&nbsp;<input type=password id=admin_password size=30 value=\"\">")
				.dialog("option", "buttons", {
					"'."Cancela".'": function() { $(this).dialog("close"); },
					"'."OK".'": function() {
						$.ajax({
							type: "POST",
							url: "'.GetTableLink("save-admin").'",
							data: {
								name: "password",
								password: $("#admin_password").val(),
								rnd: (new Date().getTime())
							},
							success: function(msg){
								if ( msg == "OK" ) {
									window.location="'.GetTableLink("webreport_sql").'";
								} else {
									$("#alert").dialog("option", "buttons", {"'."Cancela".'": function() { $(this).dialog("close");}});
									$("#alert").html("<p>'."Senha inválida".'</p>").dialog("open");
								}
							}
						});				
					}
				})
				.dialog("open");	
		});';
	}
	else
	{
		$b_includes .= '$("#admin_sql").click(function(){
			window.location = "'.GetTableLink("webreport_sql").'";
		});';
	}
	
	if($wr_is_standalone)
		$b_includes .= '$("#users_list").click(function(){
			window.location = "'.GetTableLink("webreport_users_list").'";
		});';

	if(!count($arr_UserGroups))
	{
		$b_includes .= '$("#admin_page").click(function(){
			$("#alert").dialog("option","title","'."Entre com a senha".'");
			$("#alert")
				.html("'."Senha".':&nbsp;<input type=password id=admin_password size=30 value=\"\">")
				.dialog("option", "buttons", {
					"'."Cancela".'": function() { $(this).dialog("close"); },
					"'."OK".'": function() {
						$.ajax({
							type: "POST",
							url: "'.GetTableLink("save-admin").'",
							data: {
								name: "password",
								password: $("#admin_password").val(),
								rnd: (new Date().getTime())
							},
							success: function(msg){
								if ( msg == "OK" ) {
									window.location="'.GetTableLink("webreport_admin").'";
								} else {
									$("#alert").dialog("option", "buttons", {"'."Cancela".'": function() { $(this).dialog("close");}});
									$("#alert").html("<p>'."Senha inválida".'</p>").dialog("open");
								}
							}
						});				
					}
				})
				.dialog("open");	
		});';
	}
	else
	{
		$b_includes .= '$("#admin_page").click(function(){
		window.location = "'.GetTableLink("webreport_admin").'";});';
	}

	$b_includes .= '$(".edit").click(function(){
		var type = $(this).attr("type");
		var scriptName = (type == "report") ? "'.GetTableLink("webreport0").'" : "'.GetTableLink("webchart0").'";
		
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("get-state").'",
			data: {
				type: "open",
				web: "web"+type+"s",
				name: $(this).parent("span").attr("id"),
				rnd: (new Date().getTime())
			},
			success: function(msg){
				if ( msg == "OK" ) {
					window.location = scriptName;
				} else {
					$("#alert").html("<p>"+msg+"</p>").dialog("open");
				}
			},
			error: function() {
				$("#alert").html("<p>'."Tente de novo mais tarde".'</p>").dialog("open");
			}
		});
	});

	$("#report_createbtn, #chart_createbtn").click(function(){
		var type = $(this).attr("wtype");
		var scriptName = (type == "report") ? "'.GetTableLink("webreport0").'" : "'.GetTableLink("webchart0").'";
	
		$.ajax({
			type: "POST",
			url: "'.GetTableLink("get-state").'",
			data: {
				type: "new",
				web: "web"+type+"s",
				rnd: (new Date().getTime())
			},
			success: function(msg){
				if ( msg == "OK" ) {
					window.location = scriptName;
				} else {
					$("#alert").html("<p>"+msg+"</p>").dialog("open");					
				}
			},
			error: function() {
				$("#alert").html("<p>'."Tente de novo mais tarde".'</p>").dialog("open");				
			}
		});
	});
});'."\r\n";

$shared_reports = "";
$private_reports = "";
$shared_charts = "";
$private_charts = "";

$arr_reports = array();
$arrPrivateReports = array();
$arrSharedReports = array();
$arr_charts = array();
$arrPrivateCharts = array();
$arrSharedCharts = array();

$arr_reports = GetReportsList();
foreach ( $arr_reports as $rpt ) {
	if ( (trim($rpt["owner"]) != trim(@$_SESSION["UserID"]) || trim($rpt["owner"]) == "") && $rpt["status"]=="public") {
		$arrSharedReports[] = $rpt;
	} elseif ( trim($rpt["owner"]) == trim(@$_SESSION["UserID"]) ) {
		$arrPrivateReports[] = $rpt;
	}
}

$arr_charts = GetChartsList();
foreach ( $arr_charts as $chart ) {
	if (( trim($chart["owner"]) != trim(@$_SESSION["UserID"]) || trim($chart["owner"]) == "" ) && $chart["status"]=="public") {
		$arrSharedCharts[] = $chart;
	} elseif ( trim($chart["owner"]) == trim(@$_SESSION["UserID"]) ) {
		$arrPrivateCharts[] = $chart;
	}
}

$arr_tables_db = DBGetTablesListByGroup("db");
$arr_tables_project = DBGetTablesListByGroup("project");
$arr_tables_custom = DBGetTablesListByGroup("custom");
	foreach ( $arrSharedReports as $rpt ) {
		if ( $rpt["status"] == "public" && ($rpt['view'] || $rpt['edit'])) {
			$shared_reports .= '<div style="margin-bottom:5px;">';
			$shared_reports .= '<span class="ritem" id="' . $rpt['name'] . '" title="'.runner_htmlspecialchars($rpt['title']).'">';
			$shared_reports .= ( strlen( $rpt['title'] ) > $cMaxTitleLength+5 ) ? substr( $rpt['title'], 0, $cMaxTitleLength  ) . "..." : $rpt['title'];
		// if @BUILDER.bDynamicPermissions
			if ( $rpt['view'] ) {
				$shared_reports .= '<a class="action view" type="report" href="#">['."Exibir".']</a>';
			}
			if ( $rpt['edit'] ) {
				if(count($arr_tables_db) || count($arr_tables_project) || count($arr_tables_custom))	
					$shared_reports .= '<a class="action edit" type="report" href="#">['."Editar".']</a>';
				$shared_reports .= '<a class="action del" type="report" href="#">['."Elimina Selecionados".']</a>';
			}
			$shared_reports .= '</span>';
			$shared_reports .= '</div>'."\r\n";
		}
	}
	foreach ( $arrSharedCharts as $chart ) {
		if ( $chart["status"] == "public" && ($chart['view'] || $chart['edit']) ) {
			$shared_charts .= '<div style="margin-bottom:5px;">';
			$shared_charts .= '<span class="ritem" id="' . $chart['name'] . '" title="'.runner_htmlspecialchars($chart['title']).'">';
			$shared_charts .= ( strlen( $chart['title'] ) > $cMaxTitleLength+5 ) ? substr( $chart['title'], 0, $cMaxTitleLength  ) . "..." : $chart['title'];
		// if @BUILDER.bDynamicPermissions
			if ( $chart['view'] ) {
				$shared_charts .= '<a class="action view" type="chart" href="#">['."Exibir".']</a>';
			}
			if ( $chart['edit'] ) {
				if(count($arr_tables_db) || count($arr_tables_project) || count($arr_tables_custom))	
					$shared_charts .= '<a class="action edit" type="chart" href="#">['."Editar".']</a>';
				$shared_charts .= '<a class="action del" type="chart" href="#">['."Elimina Selecionados".']</a>';
			}
			$shared_charts .= '</span>';		
			$shared_charts .= '</div>'."\r\n";
		}
	}

foreach ( $arrPrivateReports as $rpt ) {
	if ( $rpt["status"] == "public" ) {
		$private_reports .= '<div style="margin-bottom:5px;">';
		$private_reports .= '<span class="ritem" id="' . $rpt['name'] . '" title="'.runner_htmlspecialchars($rpt['title']).'">';
				$private_reports .= '<img src="images/unlock16.png" title="'."Relatório público".'"/>';
		$private_reports .= ( strlen( $rpt['title'] ) > $cMaxTitleLength+5 ) ? substr( $rpt['title'], 0, $cMaxTitleLength  ) . "..." : $rpt['title'];
		$private_reports .= '<a class="action view" type="report" href="#">['."Exibir".']</a>';
		if(count($arr_tables_db) || count($arr_tables_project) || count($arr_tables_custom))	
			$private_reports .= '<a class="action edit" type="report" href="#">['."Editar".']</a>';
		$private_reports .= '<a class="action del" type="report" href="#">['."Elimina Selecionados".']</a>';
		$private_reports .= '</span>';
		$private_reports .= '</div>'."\r\n";
	} else {
		$private_reports .= '<div style="margin-bottom:5px;">';
		$private_reports .= '<span class="ritem" id="' . $rpt['name'] . '" title="'.runner_htmlspecialchars($rpt['title']).'">';
				$private_reports .= '<img src="images/lock16.png" title="'."Relatório privativo".'"/>';
		$private_reports .= ( strlen( $rpt['title'] ) > $cMaxTitleLength+5 ) ? substr( $rpt['title'], 0, $cMaxTitleLength  ) . "..." : $rpt['title'];
		$private_reports .= '<a class="action view" type="report" href="#">['."Exibir".']</a>';
		if(count($arr_tables_db) || count($arr_tables_project) || count($arr_tables_custom))	
			$private_reports .= '<a class="action edit" type="report" href="#">['."Editar".']</a>';
		$private_reports .= '<a class="action del" type="report" href="#">['."Elimina Selecionados".']</a>';
		$private_reports .= '</span>';
		$private_reports .= '</div>'."\r\n";
	}
}

foreach ( $arrPrivateCharts as $chart ) {
	if ( $chart["status"] == "public" ) {
		$private_charts .= '<div style="margin-bottom:5px;">';
		$private_charts .= '<span class="ritem" id="' . $chart['name'] . '" title="'.runner_htmlspecialchars($chart['title']).'">';
				$private_charts .= '<img src="images/unlock16.png" title="'."Gráfico público".'"/>';
		$private_charts .= ( strlen( $chart['title'] ) > $cMaxTitleLength+5 ) ? substr( $chart['title'], 0, $cMaxTitleLength  ) . "..." : $chart['title'];
		$private_charts .= '<a class="action view" type="chart" href="#">['."Exibir".']</a>';
		if(count($arr_tables_db) || count($arr_tables_project) || count($arr_tables_custom))	
			$private_charts .= '<a class="action edit" type="chart" href="#">['."Editar".']</a>';
		$private_charts .= '<a class="action del" type="chart" href="#">['."Elimina Selecionados".']</a>';
		$private_charts .= '</span>';		
		$private_charts .= '</div>'."\r\n";
	} else {
		$private_charts .= '<div style="margin-bottom:5px;">';
		$private_charts .= '<span class="ritem" id="' . $chart['name'] . '" title="'.runner_htmlspecialchars($chart['title']).'">';
				$private_charts .= '<img src="images/lock16.png" title="'."Gráfico privativo".'"/>';
		$private_charts .= ( strlen( $chart['title'] ) > $cMaxTitleLength+5 ) ? substr( $chart['title'], 0, $cMaxTitleLength  ) . "..." : $chart['title'];
		$private_charts .= '<a class="action view" type="chart" href="#">['."Exibir".']</a>';
		if(count($arr_tables_db) || count($arr_tables_project) || count($arr_tables_custom))	
			$private_charts .= '<a class="action edit" type="chart" href="#">['."Editar".']</a>';
		$private_charts .= '<a class="action del" type="chart" href="#">['."Elimina Selecionados".']</a>';
		$private_charts .= '</span>';		
		$private_charts .= '</div>'."\r\n";
	}
}

$xt->assign("css_height_report","height:100px;");
$xt->assign("css_height_chart","height:100px;");
if ((count($arrPrivateReports)>6 || count($arrSharedReports)>6) || (count($arrPrivateCharts)>6 || count ($arrSharedCharts)>6)) {
	$xt->assign("css_height_report","height:200px;");
	$xt->assign("css_height_chart","height:200px;");
}

$b_includes .= 'var reportsList = new Array();'."\r\n";
$b_includes .= 'var chartsList = new Array();'."\r\n";

foreach ($arr_reports as $rpt) {
	$b_includes .= 'reportsList["' . $rpt['name'] . '"] = new Array();'."\r\n";
	$b_includes .= 'reportsList["' . $rpt['name'] . '"]["status"] = "' . $rpt['status'] . '";'."\r\n";
	$b_includes .= 'reportsList["' . $rpt['name'] . '"]["owner"] = "' . $rpt['owner'] . '";'."\r\n";
}

foreach ($arr_charts as $chart) {
	$b_includes .= 'chartsList["' . $chart['name'] . '"] = new Array();'."\r\n";
	$b_includes .= 'chartsList["' . $chart['name'] . '"]["status"] = "' . $chart['status'] . '";'."\r\n";
	$b_includes .= 'chartsList["' . $chart['name'] . '"]["owner"] = "' . $chart['owner'] . '";'."\r\n";
}

$b_includes .= '</script>'."\r\n";
$xt->assign("b_includes", $b_includes);

if(isWRAdmin() || !count($arr_UserGroups))
{
	$create_butt="<a id=\"admin_page\" class=\"rnr-button\" onmouseover=\"this.focus();\" name=\"admin_page\" href=\"#\">"."Área  Admin"."</a>";
	$xt->assign("admin_page", $create_butt);
}
if(!$wr_is_standalone)
{
	$create_butt="<a id=\"return_app\" class=\"rnr-button\" onmouseover=\"this.focus();\" name=\"return_app\" href=\"#\">"."Voltar ao aplicativo"."</a>";
	$xt->assign("back_to_app", $create_butt);
}
if($wr_is_standalone && isWRAdmin())	
{
	$create_butt="<a id=\"users_list\" class=\"rnr-button\" onmouseover=\"this.focus();\" name=\"users_list\" href=\"#\">"."Lista de usuários"."</a>";
	$xt->assign("users_list_page", $create_butt);
}

if(isLoggedAsGuest())
{
	$strLogin="<A class=tablelinks href=\"".GetTableLink("login")."\">Log in</A>";
} 
else 
{
	$strLogin="Logado Como"." <b>".$_SESSION["UserName"]."</b>&nbsp;&nbsp;&nbsp;<A class=tablelinks href=\"".GetTableLink("login")."?a=logout\">"."Log Out"."</A>";
}

$xt->assign("login_mess",$strLogin);		

if(isWRAdmin() || !count($arr_UserGroups))
{
	$create_butt="<a id=\"admin_sql\" class=\"rnr-button\" onmouseover=\"this.focus();\" name=\"admin_sql\" href=\"#\">"."SQL customizado"."</a>";
	$xt->assign("admin_sql", $create_butt);
}	
else	
	$xt->assign("admin_sql",false);
	
if(count($arr_tables_db) || count($arr_tables_project) || count($arr_tables_custom))	
{                 
	$create_butt="<a id=\"report_createbtn\" class=\"rnr-button\" onmouseover=\"this.focus();\" name=\"report_createbtn\" wtype=\"report\" href=\"#\">"."Criar relatório"."</a>";
    $create_butt.="<a id=\"chart_createbtn\" class=\"rnr-button\" onmouseover=\"this.focus();\" name=\"chart_createbtn\" wtype=\"chart\" href=\"#\">"."Criar gráfico"."</a>";
	$xt->assign("create_report_chart", $create_butt);
}
else
{	
	if($wr_is_standalone && !isWRAdmin())
		$xt->assign("create_report_chart", "<b>"."Você não possui permissão para criar relatórios e gráficos. Contacte o administrador."."</b>");
}

if($_SESSION["UserID"]=="Guest" && $wr_is_standalone)
	$xt->assign("create_report_chart", "<b>"."Você não possui permissão para criar relatórios e gráficos. Contacte o administrador."."</b>");


	
$xt->assign("wr_pagestylepath", $wr_pagestylepath);
$xt->assign("shared_reports", $shared_reports);
$xt->assign("private_reports", $private_reports);
$xt->assign("shared_charts", $shared_charts);
$xt->assign("private_charts", $private_charts);

$templatefile = GetTemplateName("", "webreport");
$xt->display($templatefile);
?>