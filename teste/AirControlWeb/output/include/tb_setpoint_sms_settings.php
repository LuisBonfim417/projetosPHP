<?php
$tdatatb_setpoint_sms = array();
$tdatatb_setpoint_sms[".searchableFields"] = array();
$tdatatb_setpoint_sms[".ShortName"] = "tb_setpoint_sms";
$tdatatb_setpoint_sms[".OwnerID"] = "";
$tdatatb_setpoint_sms[".OriginalTable"] = "tb_setpoint_sms";


$tdatatb_setpoint_sms[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_setpoint_sms[".originalPagesByType"] = $tdatatb_setpoint_sms[".pagesByType"];
$tdatatb_setpoint_sms[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_setpoint_sms[".originalPages"] = $tdatatb_setpoint_sms[".pages"];
$tdatatb_setpoint_sms[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_setpoint_sms[".originalDefaultPages"] = $tdatatb_setpoint_sms[".defaultPages"];

//	field labels
$fieldLabelstb_setpoint_sms = array();
$fieldToolTipstb_setpoint_sms = array();
$pageTitlestb_setpoint_sms = array();
$placeHolderstb_setpoint_sms = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_setpoint_sms["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_setpoint_sms["Portuguese(Brazil)"] = array();
	$placeHolderstb_setpoint_sms["Portuguese(Brazil)"] = array();
	$pageTitlestb_setpoint_sms["Portuguese(Brazil)"] = array();
	$fieldLabelstb_setpoint_sms["Portuguese(Brazil)"]["MON_TAG"] = "TAG";
	$fieldToolTipstb_setpoint_sms["Portuguese(Brazil)"]["MON_TAG"] = "";
	$placeHolderstb_setpoint_sms["Portuguese(Brazil)"]["MON_TAG"] = "";
	$fieldLabelstb_setpoint_sms["Portuguese(Brazil)"]["SET_SMS"] = "Celular para SMS";
	$fieldToolTipstb_setpoint_sms["Portuguese(Brazil)"]["SET_SMS"] = "";
	$placeHolderstb_setpoint_sms["Portuguese(Brazil)"]["SET_SMS"] = "";
	if (count($fieldToolTipstb_setpoint_sms["Portuguese(Brazil)"]))
		$tdatatb_setpoint_sms[".isUseToolTips"] = true;
}


	$tdatatb_setpoint_sms[".NCSearch"] = true;



$tdatatb_setpoint_sms[".shortTableName"] = "tb_setpoint_sms";
$tdatatb_setpoint_sms[".nSecOptions"] = 0;

$tdatatb_setpoint_sms[".mainTableOwnerID"] = "";
$tdatatb_setpoint_sms[".entityType"] = 0;
$tdatatb_setpoint_sms[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_setpoint_sms[".strOriginalTableName"] = "tb_setpoint_sms";

	



$tdatatb_setpoint_sms[".showAddInPopup"] = false;

$tdatatb_setpoint_sms[".showEditInPopup"] = false;

$tdatatb_setpoint_sms[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_setpoint_sms[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_setpoint_sms[".listAjax"] = false;
//	temporary
$tdatatb_setpoint_sms[".listAjax"] = false;

	$tdatatb_setpoint_sms[".audit"] = true;

	$tdatatb_setpoint_sms[".locking"] = true;


$pages = $tdatatb_setpoint_sms[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_setpoint_sms[".edit"] = true;
	$tdatatb_setpoint_sms[".afterEditAction"] = 1;
	$tdatatb_setpoint_sms[".closePopupAfterEdit"] = 1;
	$tdatatb_setpoint_sms[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_setpoint_sms[".add"] = true;
$tdatatb_setpoint_sms[".afterAddAction"] = 1;
$tdatatb_setpoint_sms[".closePopupAfterAdd"] = 1;
$tdatatb_setpoint_sms[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_setpoint_sms[".list"] = true;
}



$tdatatb_setpoint_sms[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_setpoint_sms[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_setpoint_sms[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_setpoint_sms[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_setpoint_sms[".printFriendly"] = true;
}



$tdatatb_setpoint_sms[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_setpoint_sms[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_setpoint_sms[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_setpoint_sms[".isUseAjaxSuggest"] = true;

$tdatatb_setpoint_sms[".rowHighlite"] = true;





$tdatatb_setpoint_sms[".ajaxCodeSnippetAdded"] = false;

$tdatatb_setpoint_sms[".buttonsAdded"] = false;

$tdatatb_setpoint_sms[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_setpoint_sms[".isUseTimeForSearch"] = false;


$tdatatb_setpoint_sms[".badgeColor"] = "CD5C5C";


$tdatatb_setpoint_sms[".allSearchFields"] = array();
$tdatatb_setpoint_sms[".filterFields"] = array();
$tdatatb_setpoint_sms[".requiredSearchFields"] = array();

$tdatatb_setpoint_sms[".googleLikeFields"] = array();
$tdatatb_setpoint_sms[".googleLikeFields"][] = "MON_TAG";
$tdatatb_setpoint_sms[".googleLikeFields"][] = "SET_SMS";



$tdatatb_setpoint_sms[".tableType"] = "list";

$tdatatb_setpoint_sms[".printerPageOrientation"] = 0;
$tdatatb_setpoint_sms[".nPrinterPageScale"] = 100;

$tdatatb_setpoint_sms[".nPrinterSplitRecords"] = 40;

$tdatatb_setpoint_sms[".geocodingEnabled"] = false;










$tdatatb_setpoint_sms[".pageSize"] = 20;

$tdatatb_setpoint_sms[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_setpoint_sms[".strOrderBy"] = $tstrOrderBy;

$tdatatb_setpoint_sms[".orderindexes"] = array();


$tdatatb_setpoint_sms[".sqlHead"] = "SELECT MON_TAG,  	SET_SMS";
$tdatatb_setpoint_sms[".sqlFrom"] = "FROM tb_setpoint_sms";
$tdatatb_setpoint_sms[".sqlWhereExpr"] = "";
$tdatatb_setpoint_sms[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_setpoint_sms[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_setpoint_sms[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_setpoint_sms[".highlightSearchResults"] = true;

$tableKeystb_setpoint_sms = array();
$tableKeystb_setpoint_sms[] = "MON_TAG";
$tableKeystb_setpoint_sms[] = "SET_SMS";
$tdatatb_setpoint_sms[".Keys"] = $tableKeystb_setpoint_sms;


$tdatatb_setpoint_sms[".hideMobileList"] = array();




//	MON_TAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MON_TAG";
	$fdata["GoodName"] = "MON_TAG";
	$fdata["ownerTable"] = "tb_setpoint_sms";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_sms","MON_TAG");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "MON_TAG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_TAG";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_setpoing";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MON_TAG";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "MON_TAG";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_setpoint_sms["MON_TAG"] = $fdata;
		$tdatatb_setpoint_sms[".searchableFields"][] = "MON_TAG";
//	SET_SMS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SET_SMS";
	$fdata["GoodName"] = "SET_SMS";
	$fdata["ownerTable"] = "tb_setpoint_sms";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_sms","SET_SMS");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SET_SMS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_SMS";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatatb_setpoint_sms["SET_SMS"] = $fdata;
		$tdatatb_setpoint_sms[".searchableFields"][] = "SET_SMS";


$tables_data["tb_setpoint_sms"]=&$tdatatb_setpoint_sms;
$field_labels["tb_setpoint_sms"] = &$fieldLabelstb_setpoint_sms;
$fieldToolTips["tb_setpoint_sms"] = &$fieldToolTipstb_setpoint_sms;
$placeHolders["tb_setpoint_sms"] = &$placeHolderstb_setpoint_sms;
$page_titles["tb_setpoint_sms"] = &$pageTitlestb_setpoint_sms;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_setpoint_sms"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_setpoint_sms"] = array();



	
				$strOriginalDetailsTable="tb_setpoing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_setpoing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_setpoing";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_setpoint_sms"][0] = $masterParams;
				$masterTablesData["tb_setpoint_sms"][0]["masterKeys"] = array();
	$masterTablesData["tb_setpoint_sms"][0]["masterKeys"][]="MON_TAG";
				$masterTablesData["tb_setpoint_sms"][0]["detailKeys"] = array();
	$masterTablesData["tb_setpoint_sms"][0]["detailKeys"][]="MON_TAG";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_setpoint_sms()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MON_TAG,  	SET_SMS";
$proto0["m_strFrom"] = "FROM tb_setpoint_sms";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TAG",
	"m_strTable" => "tb_setpoint_sms",
	"m_srcTableName" => "tb_setpoint_sms"
));

$proto6["m_sql"] = "MON_TAG";
$proto6["m_srcTableName"] = "tb_setpoint_sms";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_SMS",
	"m_strTable" => "tb_setpoint_sms",
	"m_srcTableName" => "tb_setpoint_sms"
));

$proto8["m_sql"] = "SET_SMS";
$proto8["m_srcTableName"] = "tb_setpoint_sms";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tb_setpoint_sms";
$proto11["m_srcTableName"] = "tb_setpoint_sms";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "MON_TAG";
$proto11["m_columns"][] = "SET_SMS";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tb_setpoint_sms";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tb_setpoint_sms";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_setpoint_sms";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_setpoint_sms = createSqlQuery_tb_setpoint_sms();


	
		;

		

$tdatatb_setpoint_sms[".sqlquery"] = $queryData_tb_setpoint_sms;



$tableEvents["tb_setpoint_sms"] = new eventsBase;
$tdatatb_setpoint_sms[".hasEvents"] = false;

?>