<?php
$tdatahoje = array();
$tdatahoje[".searchableFields"] = array();
$tdatahoje[".ShortName"] = "hoje";
$tdatahoje[".OwnerID"] = "";
$tdatahoje[".OriginalTable"] = "hoje";


$tdatahoje[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatahoje[".originalPagesByType"] = $tdatahoje[".pagesByType"];
$tdatahoje[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatahoje[".originalPages"] = $tdatahoje[".pages"];
$tdatahoje[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatahoje[".originalDefaultPages"] = $tdatahoje[".defaultPages"];

//	field labels
$fieldLabelshoje = array();
$fieldToolTipshoje = array();
$pageTitleshoje = array();
$placeHoldershoje = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelshoje["Portuguese(Brazil)"] = array();
	$fieldToolTipshoje["Portuguese(Brazil)"] = array();
	$placeHoldershoje["Portuguese(Brazil)"] = array();
	$pageTitleshoje["Portuguese(Brazil)"] = array();
	$fieldLabelshoje["Portuguese(Brazil)"]["MON_ID"] = "MON ID";
	$fieldToolTipshoje["Portuguese(Brazil)"]["MON_ID"] = "";
	$placeHoldershoje["Portuguese(Brazil)"]["MON_ID"] = "";
	$fieldLabelshoje["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTipshoje["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHoldershoje["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabelshoje["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTipshoje["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHoldershoje["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTipshoje["Portuguese(Brazil)"]))
		$tdatahoje[".isUseToolTips"] = true;
}


	$tdatahoje[".NCSearch"] = true;



$tdatahoje[".shortTableName"] = "hoje";
$tdatahoje[".nSecOptions"] = 0;

$tdatahoje[".mainTableOwnerID"] = "";
$tdatahoje[".entityType"] = 0;
$tdatahoje[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatahoje[".strOriginalTableName"] = "hoje";

	



$tdatahoje[".showAddInPopup"] = false;

$tdatahoje[".showEditInPopup"] = false;

$tdatahoje[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoje[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoje[".listAjax"] = false;
//	temporary
$tdatahoje[".listAjax"] = false;

	$tdatahoje[".audit"] = true;

	$tdatahoje[".locking"] = false;


$pages = $tdatahoje[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoje[".edit"] = true;
	$tdatahoje[".afterEditAction"] = 1;
	$tdatahoje[".closePopupAfterEdit"] = 1;
	$tdatahoje[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoje[".add"] = true;
$tdatahoje[".afterAddAction"] = 1;
$tdatahoje[".closePopupAfterAdd"] = 1;
$tdatahoje[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoje[".list"] = true;
}



$tdatahoje[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoje[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoje[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoje[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoje[".printFriendly"] = true;
}



$tdatahoje[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoje[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoje[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoje[".isUseAjaxSuggest"] = true;

$tdatahoje[".rowHighlite"] = true;





$tdatahoje[".ajaxCodeSnippetAdded"] = false;

$tdatahoje[".buttonsAdded"] = false;

$tdatahoje[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoje[".isUseTimeForSearch"] = false;


$tdatahoje[".badgeColor"] = "DB7093";


$tdatahoje[".allSearchFields"] = array();
$tdatahoje[".filterFields"] = array();
$tdatahoje[".requiredSearchFields"] = array();

$tdatahoje[".googleLikeFields"] = array();
$tdatahoje[".googleLikeFields"][] = "MON_ID";
$tdatahoje[".googleLikeFields"][] = "MON_TEMP";
$tdatahoje[".googleLikeFields"][] = "MON_UMID";



$tdatahoje[".tableType"] = "list";

$tdatahoje[".printerPageOrientation"] = 0;
$tdatahoje[".nPrinterPageScale"] = 100;

$tdatahoje[".nPrinterSplitRecords"] = 40;

$tdatahoje[".geocodingEnabled"] = false;










$tdatahoje[".pageSize"] = 20;

$tdatahoje[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoje[".strOrderBy"] = $tstrOrderBy;

$tdatahoje[".orderindexes"] = array();


$tdatahoje[".sqlHead"] = "SELECT MON_ID,  	MON_TEMP,  	MON_UMID";
$tdatahoje[".sqlFrom"] = "FROM hoje";
$tdatahoje[".sqlWhereExpr"] = "";
$tdatahoje[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoje[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoje[".arrGroupsPerPage"] = $arrGPP;

$tdatahoje[".highlightSearchResults"] = true;

$tableKeyshoje = array();
$tdatahoje[".Keys"] = $tableKeyshoje;


$tdatahoje[".hideMobileList"] = array();




//	MON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MON_ID";
	$fdata["GoodName"] = "MON_ID";
	$fdata["ownerTable"] = "hoje";
	$fdata["Label"] = GetFieldLabel("hoje","MON_ID");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "MON_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_ID";

	
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatahoje["MON_ID"] = $fdata;
		$tdatahoje[".searchableFields"][] = "MON_ID";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "hoje";
	$fdata["Label"] = GetFieldLabel("hoje","MON_TEMP");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_TEMP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_TEMP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatahoje["MON_TEMP"] = $fdata;
		$tdatahoje[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "hoje";
	$fdata["Label"] = GetFieldLabel("hoje","MON_UMID");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_UMID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_UMID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		
	
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
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


	$tdatahoje["MON_UMID"] = $fdata;
		$tdatahoje[".searchableFields"][] = "MON_UMID";


$tables_data["hoje"]=&$tdatahoje;
$field_labels["hoje"] = &$fieldLabelshoje;
$fieldToolTips["hoje"] = &$fieldToolTipshoje;
$placeHolders["hoje"] = &$placeHoldershoje;
$page_titles["hoje"] = &$pageTitleshoje;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hoje"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hoje"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hoje()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MON_ID,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM hoje";
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
	"m_strName" => "MON_ID",
	"m_strTable" => "hoje",
	"m_srcTableName" => "hoje"
));

$proto6["m_sql"] = "MON_ID";
$proto6["m_srcTableName"] = "hoje";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "hoje",
	"m_srcTableName" => "hoje"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "hoje";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "hoje",
	"m_srcTableName" => "hoje"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "hoje";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "hoje";
$proto13["m_srcTableName"] = "hoje";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "MON_ID";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "hoje";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "hoje";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hoje";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoje = createSqlQuery_hoje();


	
		;

			

$tdatahoje[".sqlquery"] = $queryData_hoje;



$tableEvents["hoje"] = new eventsBase;
$tdatahoje[".hasEvents"] = false;

?>