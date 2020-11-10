<?php
$strTableName="vwv_monitoramento_por_periodo_leitura_max_min_med Chart";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vwv_monitoramento_por_periodo_leitura_max_min_med";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vwv_monitoramento_por_periodo_leitura_max_min_med Chart");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vwv_monitoramento_por_periodo_leitura_max_min_med Chart"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>