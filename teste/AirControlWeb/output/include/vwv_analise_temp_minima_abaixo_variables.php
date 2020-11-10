<?php
$strTableName="vwv_analise_temp_minima_abaixo";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vwv_analise_temp_minima_abaixo";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vwv_analise_temp_minima_abaixo");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vwv_analise_temp_minima_abaixo"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>