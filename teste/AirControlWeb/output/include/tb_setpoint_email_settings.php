<?php
$tdatatb_setpoint_email = array();
$tdatatb_setpoint_email[".searchableFields"] = array();
$tdatatb_setpoint_email[".ShortName"] = "tb_setpoint_email";
$tdatatb_setpoint_email[".OwnerID"] = "";
$tdatatb_setpoint_email[".OriginalTable"] = "tb_setpoint_email";


$tdatatb_setpoint_email[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_setpoint_email[".originalPagesByType"] = $tdatatb_setpoint_email[".pagesByType"];
$tdatatb_setpoint_email[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_setpoint_email[".originalPages"] = $tdatatb_setpoint_email[".pages"];
$tdatatb_setpoint_email[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_setpoint_email[".originalDefaultPages"] = $tdatatb_setpoint_email[".defaultPages"];

//	field labels
$fieldLabelstb_setpoint_email = array();
$fieldToolTipstb_setpoint_email = array();
$pageTitlestb_setpoint_email = array();
$placeHolderstb_setpoint_email = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_setpoint_email["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_setpoint_email["Portuguese(Brazil)"] = array();
	$placeHolderstb_setpoint_email["Portuguese(Brazil)"] = array();
	$pageTitlestb_setpoint_email["Portuguese(Brazil)"] = array();
	$fieldLabelstb_setpoint_email["Portuguese(Brazil)"]["MON_TAG"] = "TAG";
	$fieldToolTipstb_setpoint_email["Portuguese(Brazil)"]["MON_TAG"] = "";
	$placeHolderstb_setpoint_email["Portuguese(Brazil)"]["MON_TAG"] = "";
	$fieldLabelstb_setpoint_email["Portuguese(Brazil)"]["SET_EMAIL"] = "Email de Notificação";
	$fieldToolTipstb_setpoint_email["Portuguese(Brazil)"]["SET_EMAIL"] = "";
	$placeHolderstb_setpoint_email["Portuguese(Brazil)"]["SET_EMAIL"] = "";
	if (count($fieldToolTipstb_setpoint_email["Portuguese(Brazil)"]))
		$tdatatb_setpoint_email[".isUseToolTips"] = true;
}


	$tdatatb_setpoint_email[".NCSearch"] = true;



$tdatatb_setpoint_email[".shortTableName"] = "tb_setpoint_email";
$tdatatb_setpoint_email[".nSecOptions"] = 0;

$tdatatb_setpoint_email[".mainTableOwnerID"] = "";
$tdatatb_setpoint_email[".entityType"] = 0;
$tdatatb_setpoint_email[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_setpoint_email[".strOriginalTableName"] = "tb_setpoint_email";

	



$tdatatb_setpoint_email[".showAddInPopup"] = false;

$tdatatb_setpoint_email[".showEditInPopup"] = false;

$tdatatb_setpoint_email[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_setpoint_email[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_setpoint_email[".listAjax"] = false;
//	temporary
$tdatatb_setpoint_email[".listAjax"] = false;

	$tdatatb_setpoint_email[".audit"] = true;

	$tdatatb_setpoint_email[".locking"] = true;


$pages = $tdatatb_setpoint_email[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_setpoint_email[".edit"] = true;
	$tdatatb_setpoint_email[".afterEditAction"] = 1;
	$tdatatb_setpoint_email[".closePopupAfterEdit"] = 1;
	$tdatatb_setpoint_email[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_setpoint_email[".add"] = true;
$tdatatb_setpoint_email[".afterAddAction"] = 1;
$tdatatb_setpoint_email[".closePopupAfterAdd"] = 1;
$tdatatb_setpoint_email[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_setpoint_email[".list"] = true;
}



$tdatatb_setpoint_email[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_setpoint_email[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_setpoint_email[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_setpoint_email[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_setpoint_email[".printFriendly"] = true;
}



$tdatatb_setpoint_email[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_setpoint_email[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_setpoint_email[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_setpoint_email[".isUseAjaxSuggest"] = true;

$tdatatb_setpoint_email[".rowHighlite"] = true;





$tdatatb_setpoint_email[".ajaxCodeSnippetAdded"] = false;

$tdatatb_setpoint_email[".buttonsAdded"] = false;

$tdatatb_setpoint_email[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_setpoint_email[".isUseTimeForSearch"] = false;


$tdatatb_setpoint_email[".badgeColor"] = "3cb371";


$tdatatb_setpoint_email[".allSearchFields"] = array();
$tdatatb_setpoint_email[".filterFields"] = array();
$tdatatb_setpoint_email[".requiredSearchFields"] = array();

$tdatatb_setpoint_email[".googleLikeFields"] = array();
$tdatatb_setpoint_email[".googleLikeFields"][] = "MON_TAG";
$tdatatb_setpoint_email[".googleLikeFields"][] = "SET_EMAIL";



$tdatatb_setpoint_email[".tableType"] = "list";

$tdatatb_setpoint_email[".printerPageOrientation"] = 0;
$tdatatb_setpoint_email[".nPrinterPageScale"] = 100;

$tdatatb_setpoint_email[".nPrinterSplitRecords"] = 40;

$tdatatb_setpoint_email[".geocodingEnabled"] = false;










$tdatatb_setpoint_email[".pageSize"] = 20;

$tdatatb_setpoint_email[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_setpoint_email[".strOrderBy"] = $tstrOrderBy;

$tdatatb_setpoint_email[".orderindexes"] = array();


$tdatatb_setpoint_email[".sqlHead"] = "SELECT MON_TAG,  	SET_EMAIL";
$tdatatb_setpoint_email[".sqlFrom"] = "FROM tb_setpoint_email";
$tdatatb_setpoint_email[".sqlWhereExpr"] = "";
$tdatatb_setpoint_email[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_setpoint_email[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_setpoint_email[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_setpoint_email[".highlightSearchResults"] = true;

$tableKeystb_setpoint_email = array();
$tableKeystb_setpoint_email[] = "MON_TAG";
$tableKeystb_setpoint_email[] = "SET_EMAIL";
$tdatatb_setpoint_email[".Keys"] = $tableKeystb_setpoint_email;


$tdatatb_setpoint_email[".hideMobileList"] = array();




//	MON_TAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MON_TAG";
	$fdata["GoodName"] = "MON_TAG";
	$fdata["ownerTable"] = "tb_setpoint_email";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_email","MON_TAG");
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


	$tdatatb_setpoint_email["MON_TAG"] = $fdata;
		$tdatatb_setpoint_email[".searchableFields"][] = "MON_TAG";
//	SET_EMAIL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SET_EMAIL";
	$fdata["GoodName"] = "SET_EMAIL";
	$fdata["ownerTable"] = "tb_setpoint_email";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_email","SET_EMAIL");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SET_EMAIL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_EMAIL";

	
	
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
			$edata["EditParams"].= " maxlength=70";

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


	$tdatatb_setpoint_email["SET_EMAIL"] = $fdata;
		$tdatatb_setpoint_email[".searchableFields"][] = "SET_EMAIL";


$tables_data["tb_setpoint_email"]=&$tdatatb_setpoint_email;
$field_labels["tb_setpoint_email"] = &$fieldLabelstb_setpoint_email;
$fieldToolTips["tb_setpoint_email"] = &$fieldToolTipstb_setpoint_email;
$placeHolders["tb_setpoint_email"] = &$placeHolderstb_setpoint_email;
$page_titles["tb_setpoint_email"] = &$pageTitlestb_setpoint_email;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_setpoint_email"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_setpoint_email"] = array();



	
				$strOriginalDetailsTable="tb_setpoing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_setpoing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_setpoing";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_setpoint_email"][0] = $masterParams;
				$masterTablesData["tb_setpoint_email"][0]["masterKeys"] = array();
	$masterTablesData["tb_setpoint_email"][0]["masterKeys"][]="MON_TAG";
				$masterTablesData["tb_setpoint_email"][0]["detailKeys"] = array();
	$masterTablesData["tb_setpoint_email"][0]["detailKeys"][]="MON_TAG";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_setpoint_email()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MON_TAG,  	SET_EMAIL";
$proto0["m_strFrom"] = "FROM tb_setpoint_email";
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
	"m_strTable" => "tb_setpoint_email",
	"m_srcTableName" => "tb_setpoint_email"
));

$proto6["m_sql"] = "MON_TAG";
$proto6["m_srcTableName"] = "tb_setpoint_email";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_EMAIL",
	"m_strTable" => "tb_setpoint_email",
	"m_srcTableName" => "tb_setpoint_email"
));

$proto8["m_sql"] = "SET_EMAIL";
$proto8["m_srcTableName"] = "tb_setpoint_email";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "tb_setpoint_email";
$proto11["m_srcTableName"] = "tb_setpoint_email";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "MON_TAG";
$proto11["m_columns"][] = "SET_EMAIL";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "tb_setpoint_email";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "tb_setpoint_email";
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
$proto0["m_srcTableName"]="tb_setpoint_email";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_setpoint_email = createSqlQuery_tb_setpoint_email();


	
		;

		

$tdatatb_setpoint_email[".sqlquery"] = $queryData_tb_setpoint_email;



$tableEvents["tb_setpoint_email"] = new eventsBase;
$tdatatb_setpoint_email[".hasEvents"] = false;

?>