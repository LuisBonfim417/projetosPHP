<?php
$tdata12horas = array();
$tdata12horas[".searchableFields"] = array();
$tdata12horas[".ShortName"] = "12horas";
$tdata12horas[".OwnerID"] = "";
$tdata12horas[".OriginalTable"] = "12horas";


$tdata12horas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdata12horas[".originalPagesByType"] = $tdata12horas[".pagesByType"];
$tdata12horas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdata12horas[".originalPages"] = $tdata12horas[".pages"];
$tdata12horas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdata12horas[".originalDefaultPages"] = $tdata12horas[".defaultPages"];

//	field labels
$fieldLabels12horas = array();
$fieldToolTips12horas = array();
$pageTitles12horas = array();
$placeHolders12horas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels12horas["Portuguese(Brazil)"] = array();
	$fieldToolTips12horas["Portuguese(Brazil)"] = array();
	$placeHolders12horas["Portuguese(Brazil)"] = array();
	$pageTitles12horas["Portuguese(Brazil)"] = array();
	$fieldLabels12horas["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips12horas["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders12horas["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels12horas["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips12horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders12horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels12horas["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips12horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders12horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips12horas["Portuguese(Brazil)"]))
		$tdata12horas[".isUseToolTips"] = true;
}


	$tdata12horas[".NCSearch"] = true;



$tdata12horas[".shortTableName"] = "12horas";
$tdata12horas[".nSecOptions"] = 0;

$tdata12horas[".mainTableOwnerID"] = "";
$tdata12horas[".entityType"] = 0;
$tdata12horas[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata12horas[".strOriginalTableName"] = "12horas";

	



$tdata12horas[".showAddInPopup"] = false;

$tdata12horas[".showEditInPopup"] = false;

$tdata12horas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata12horas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata12horas[".listAjax"] = false;
//	temporary
$tdata12horas[".listAjax"] = false;

	$tdata12horas[".audit"] = false;

	$tdata12horas[".locking"] = false;


$pages = $tdata12horas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata12horas[".edit"] = true;
	$tdata12horas[".afterEditAction"] = 1;
	$tdata12horas[".closePopupAfterEdit"] = 1;
	$tdata12horas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata12horas[".add"] = true;
$tdata12horas[".afterAddAction"] = 1;
$tdata12horas[".closePopupAfterAdd"] = 1;
$tdata12horas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata12horas[".list"] = true;
}



$tdata12horas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata12horas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata12horas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata12horas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata12horas[".printFriendly"] = true;
}



$tdata12horas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata12horas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata12horas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata12horas[".isUseAjaxSuggest"] = true;

$tdata12horas[".rowHighlite"] = true;





$tdata12horas[".ajaxCodeSnippetAdded"] = false;

$tdata12horas[".buttonsAdded"] = false;

$tdata12horas[".addPageEvents"] = false;

// use timepicker for search panel
$tdata12horas[".isUseTimeForSearch"] = false;


$tdata12horas[".badgeColor"] = "4169E1";


$tdata12horas[".allSearchFields"] = array();
$tdata12horas[".filterFields"] = array();
$tdata12horas[".requiredSearchFields"] = array();

$tdata12horas[".googleLikeFields"] = array();
$tdata12horas[".googleLikeFields"][] = "HORA";
$tdata12horas[".googleLikeFields"][] = "MON_TEMP";
$tdata12horas[".googleLikeFields"][] = "MON_UMID";



$tdata12horas[".tableType"] = "list";

$tdata12horas[".printerPageOrientation"] = 0;
$tdata12horas[".nPrinterPageScale"] = 100;

$tdata12horas[".nPrinterSplitRecords"] = 40;

$tdata12horas[".geocodingEnabled"] = false;










$tdata12horas[".pageSize"] = 20;

$tdata12horas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata12horas[".strOrderBy"] = $tstrOrderBy;

$tdata12horas[".orderindexes"] = array();


$tdata12horas[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata12horas[".sqlFrom"] = "FROM `12horas`";
$tdata12horas[".sqlWhereExpr"] = "";
$tdata12horas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata12horas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata12horas[".arrGroupsPerPage"] = $arrGPP;

$tdata12horas[".highlightSearchResults"] = true;

$tableKeys12horas = array();
$tdata12horas[".Keys"] = $tableKeys12horas;


$tdata12horas[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "12horas";
	$fdata["Label"] = GetFieldLabel("12horas","HORA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "HORA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HORA";

	
	
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
			$edata["EditParams"].= " maxlength=7";

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


	$tdata12horas["HORA"] = $fdata;
		$tdata12horas[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "12horas";
	$fdata["Label"] = GetFieldLabel("12horas","MON_TEMP");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_TEMP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_TEMP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 6;

	
	
	
	
		
	
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


	$tdata12horas["MON_TEMP"] = $fdata;
		$tdata12horas[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "12horas";
	$fdata["Label"] = GetFieldLabel("12horas","MON_UMID");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_UMID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_UMID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 6;

	
	
	
	
		
	
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


	$tdata12horas["MON_UMID"] = $fdata;
		$tdata12horas[".searchableFields"][] = "MON_UMID";


$tables_data["12horas"]=&$tdata12horas;
$field_labels["12horas"] = &$fieldLabels12horas;
$fieldToolTips["12horas"] = &$fieldToolTips12horas;
$placeHolders["12horas"] = &$placeHolders12horas;
$page_titles["12horas"] = &$pageTitles12horas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["12horas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["12horas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_12horas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `12horas`";
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
	"m_strName" => "HORA",
	"m_strTable" => "12horas",
	"m_srcTableName" => "12horas"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "12horas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "12horas",
	"m_srcTableName" => "12horas"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "12horas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "12horas",
	"m_srcTableName" => "12horas"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "12horas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "12horas";
$proto13["m_srcTableName"] = "12horas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`12horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "12horas";
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
$proto0["m_srcTableName"]="12horas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_12horas = createSqlQuery_12horas();


	
		;

			

$tdata12horas[".sqlquery"] = $queryData_12horas;



$tableEvents["12horas"] = new eventsBase;
$tdata12horas[".hasEvents"] = false;

?>