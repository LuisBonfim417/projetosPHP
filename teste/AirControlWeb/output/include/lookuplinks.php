<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["tb_setpoing"] ) ) {
			$lookupTableLinks["tb_setpoing"] = array();
		}
		if( !isset( $lookupTableLinks["tb_setpoing"]["tb_setpoint_email.MON_TAG"] )) {
			$lookupTableLinks["tb_setpoing"]["tb_setpoint_email.MON_TAG"] = array();
		}
		$lookupTableLinks["tb_setpoing"]["tb_setpoint_email.MON_TAG"]["edit"] = array("table" => "tb_setpoint_email", "field" => "MON_TAG", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_setpoing"] ) ) {
			$lookupTableLinks["tb_setpoing"] = array();
		}
		if( !isset( $lookupTableLinks["tb_setpoing"]["tb_setpoint_bloqueia.MON_TAG"] )) {
			$lookupTableLinks["tb_setpoing"]["tb_setpoint_bloqueia.MON_TAG"] = array();
		}
		$lookupTableLinks["tb_setpoing"]["tb_setpoint_bloqueia.MON_TAG"]["edit"] = array("table" => "tb_setpoint_bloqueia", "field" => "MON_TAG", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_setpoing"] ) ) {
			$lookupTableLinks["tb_setpoing"] = array();
		}
		if( !isset( $lookupTableLinks["tb_setpoing"]["tb_setpoint_sms.MON_TAG"] )) {
			$lookupTableLinks["tb_setpoing"]["tb_setpoint_sms.MON_TAG"] = array();
		}
		$lookupTableLinks["tb_setpoing"]["tb_setpoint_sms.MON_TAG"]["edit"] = array("table" => "tb_setpoint_sms", "field" => "MON_TAG", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_ticket"] ) ) {
			$lookupTableLinks["tb_ticket"] = array();
		}
		if( !isset( $lookupTableLinks["tb_ticket"]["tb_ticket.TIC_PARENT"] )) {
			$lookupTableLinks["tb_ticket"]["tb_ticket.TIC_PARENT"] = array();
		}
		$lookupTableLinks["tb_ticket"]["tb_ticket.TIC_PARENT"]["edit"] = array("table" => "tb_ticket", "field" => "TIC_PARENT", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_reference"] ) ) {
			$lookupTableLinks["tb_reference"] = array();
		}
		if( !isset( $lookupTableLinks["tb_reference"]["tb_ticket.REF_REFERENCE"] )) {
			$lookupTableLinks["tb_reference"]["tb_ticket.REF_REFERENCE"] = array();
		}
		$lookupTableLinks["tb_reference"]["tb_ticket.REF_REFERENCE"]["edit"] = array("table" => "tb_ticket", "field" => "REF_REFERENCE", "page" => "edit");
		if( !isset( $lookupTableLinks["tb_classification"] ) ) {
			$lookupTableLinks["tb_classification"] = array();
		}
		if( !isset( $lookupTableLinks["tb_classification"]["tb_ticket.CLA_CLASSIFICATION"] )) {
			$lookupTableLinks["tb_classification"]["tb_ticket.CLA_CLASSIFICATION"] = array();
		}
		$lookupTableLinks["tb_classification"]["tb_ticket.CLA_CLASSIFICATION"]["edit"] = array("table" => "tb_ticket", "field" => "CLA_CLASSIFICATION", "page" => "edit");
}

?>