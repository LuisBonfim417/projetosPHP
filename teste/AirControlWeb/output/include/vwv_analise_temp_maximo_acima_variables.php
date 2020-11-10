<?php
$strTableName="vwv_analise_temp_maximo_acima";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="vwv_analise_temp_maximo_acima";

$gstrOrderBy="";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("vwv_analise_temp_maximo_acima");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["vwv_analise_temp_maximo_acima"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");
?>