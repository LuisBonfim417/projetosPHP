<?php
$strTableName="vwv_monitoramento_por_periodo";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vwv_monitoramento_por_periodo";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vwv_monitoramento_por_periodo");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vwv_monitoramento_por_periodo"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>