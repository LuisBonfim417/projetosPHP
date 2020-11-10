<?php
@ini_set("display_errors","1");
@ini_set("display_startup_errors","1");

require_once("include/dbcommon.php");
header("Expires: Thu, 01 Jan 1970 00:00:01 GMT");

require_once("include/admin_rights_variables.php");

if( !Security::processAdminPageSecurity( false ) )
	return;


$tables = array();
$pageMask = array();
$table = "tb_setpoing";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_setpoing", " " . "Tb Setpoing");
$table = "tb_setpoint_email";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_setpoint_email", " " . "Tb Setpoint Email");
$table = "aircontrolweb_users";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("aircontrolweb_users", " " . "Aircontrolweb Users");
$table = "tb_monitoramento";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";
$mask .= "M";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_monitoramento", " " . "Tb Monitoramento");
$table = "tb_reference";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_reference", " " . "Tb Reference");
$table = "tb_setpoint_bloqueia";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_setpoint_bloqueia", " " . "Tb Setpoint Bloqueia");
$table = "tb_setpoint_sms";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_setpoint_sms", " " . "Tb Setpoint Sms");
$table = "tb_status";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_status", " " . "Tb Status");
$table = "tb_ticket";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_ticket", " " . "Tb Ticket");
$table = "tb_controle";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_controle", " " . "Tb Controle");
$table = "tb_agendamento";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("tb_agendamento", " " . "Tb Agendamento");
$table = "24horas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("24horas", " " . "24horas");
$table = "12horas Chart";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("12horas_chart", " " . "12horas Chart");
$table = "24horas Chart";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";

$pageMask[$table] = $mask;
$tables[$table] = array("24horas_chart", " " . "24horas Chart");
$table = "9horas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("9horas", " " . "9horas");
$table = "6horas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("6horas", " " . "6horas");
$table = "3horas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("3horas", " " . "3horas");
$table = "12horas";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("12horas", " " . "12horas");
$table = "hoje";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("hoje", " " . "Hoje");
$table = "vwv_analise_temp_maximo_acima";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vwv_analise_temp_maximo_acima", " " . "Vwv Analise Temp Maximo Acima");
$table = "vwv_analise_temp_minima_abaixo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vwv_analise_temp_minima_abaixo", " " . "Vwv Analise Temp Minima Abaixo");
$table = "vwv_monitoramento_por_periodo";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vwv_monitoramento_por_periodo", " " . "Vwv Monitoramento Por Periodo");
$table = "vwv_monitoramento_por_periodo_leitura_max_min_med";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vwv_monitoramento_por_periodo_leitura_max_min_med", " " . "Vwv Monitoramento Por Periodo Leitura Max Min Med");
$table = "vwv_monitoramento_por_periodo_leitura_maxima";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vwv_monitoramento_por_periodo_leitura_maxima", " " . "Vwv Monitoramento Por Periodo Leitura Maxima");
$table = "vwv_monitoramento_por_periodo_leitura_minima";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vwv_monitoramento_por_periodo_leitura_minima", " " . "Vwv Monitoramento Por Periodo Leitura Minima");
$table = "vwv_tag_user";
$mask="";
if( pageEnabled($table, 'add') || pageEnabled($table, 'inline_add') )
	$mask .= "A";
if( pageEnabled($table, 'edit') || pageEnabled($table, 'inline_edit') )
	$mask .= "E";
if( pageEnabled($table, 'delete') )
	$mask .= "D";
if( pageEnabled($table, 'import') )
	$mask .= "I";
if( pageEnabled($table, 'view') || pageEnabled($table, 'list') || pageEnabled($table, 'chart') || pageEnabled($table, 'report') || pageEnabled($table, 'dashboard') )
	$mask .= "S";
if( pageEnabled($table, 'print') || pageEnabled($table, 'rprint') || pageEnabled($table, 'export')  )
	$mask .= "P";

$pageMask[$table] = $mask;
$tables[$table] = array("vwv_tag_user", " " . "Vwv Tag User");

require_once('include/xtempl.php');
require_once('classes/listpage.php');
require_once('classes/rightspage.php');

$xt = new Xtempl();

$options = array();
$options["pageType"] = "admin_rights_list";
$options["pageTable"] = GLOBAL_PAGES;
$options["id"] = postvalue_number("id") ? postvalue_number("id") : 1;
$options["mode"] = RIGHTS_PAGE;
$options['xt'] = &$xt;


$options["tables"] = $tables;
$options["pageMasks"] = $pageMask;

$pageObject = ListPage::createListPage($strTableName, $options);

if( postvalue("a") == "saveRights" )
{
	$modifiedRights = my_json_decode(postvalue('data'));
	$pageObject->saveRights( $modifiedRights );
	return;
}


// add buttons if exist

// prepare code for build page
$pageObject->prepareForBuildPage();

// show page depends of mode
$pageObject->showPage();



?>
