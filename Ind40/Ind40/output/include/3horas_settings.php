<?php
$tdata3horas = array();
$tdata3horas[".searchableFields"] = array();
$tdata3horas[".ShortName"] = "3horas";
$tdata3horas[".OwnerID"] = "";
$tdata3horas[".OriginalTable"] = "3horas";


$tdata3horas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdata3horas[".originalPagesByType"] = $tdata3horas[".pagesByType"];
$tdata3horas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdata3horas[".originalPages"] = $tdata3horas[".pages"];
$tdata3horas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdata3horas[".originalDefaultPages"] = $tdata3horas[".defaultPages"];

//	field labels
$fieldLabels3horas = array();
$fieldToolTips3horas = array();
$pageTitles3horas = array();
$placeHolders3horas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels3horas["Portuguese(Brazil)"] = array();
	$fieldToolTips3horas["Portuguese(Brazil)"] = array();
	$placeHolders3horas["Portuguese(Brazil)"] = array();
	$pageTitles3horas["Portuguese(Brazil)"] = array();
	$fieldLabels3horas["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips3horas["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders3horas["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels3horas["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips3horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders3horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels3horas["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips3horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders3horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips3horas["Portuguese(Brazil)"]))
		$tdata3horas[".isUseToolTips"] = true;
}


	$tdata3horas[".NCSearch"] = true;



$tdata3horas[".shortTableName"] = "3horas";
$tdata3horas[".nSecOptions"] = 0;

$tdata3horas[".mainTableOwnerID"] = "";
$tdata3horas[".entityType"] = 0;
$tdata3horas[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata3horas[".strOriginalTableName"] = "3horas";

	



$tdata3horas[".showAddInPopup"] = false;

$tdata3horas[".showEditInPopup"] = false;

$tdata3horas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata3horas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata3horas[".listAjax"] = false;
//	temporary
$tdata3horas[".listAjax"] = false;

	$tdata3horas[".audit"] = true;

	$tdata3horas[".locking"] = false;


$pages = $tdata3horas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata3horas[".edit"] = true;
	$tdata3horas[".afterEditAction"] = 1;
	$tdata3horas[".closePopupAfterEdit"] = 1;
	$tdata3horas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata3horas[".add"] = true;
$tdata3horas[".afterAddAction"] = 1;
$tdata3horas[".closePopupAfterAdd"] = 1;
$tdata3horas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata3horas[".list"] = true;
}



$tdata3horas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata3horas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata3horas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata3horas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata3horas[".printFriendly"] = true;
}



$tdata3horas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata3horas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata3horas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata3horas[".isUseAjaxSuggest"] = true;

$tdata3horas[".rowHighlite"] = true;





$tdata3horas[".ajaxCodeSnippetAdded"] = false;

$tdata3horas[".buttonsAdded"] = false;

$tdata3horas[".addPageEvents"] = false;

// use timepicker for search panel
$tdata3horas[".isUseTimeForSearch"] = false;


$tdata3horas[".badgeColor"] = "6B8E23";


$tdata3horas[".allSearchFields"] = array();
$tdata3horas[".filterFields"] = array();
$tdata3horas[".requiredSearchFields"] = array();

$tdata3horas[".googleLikeFields"] = array();
$tdata3horas[".googleLikeFields"][] = "HORA";
$tdata3horas[".googleLikeFields"][] = "MON_TEMP";
$tdata3horas[".googleLikeFields"][] = "MON_UMID";



$tdata3horas[".tableType"] = "list";

$tdata3horas[".printerPageOrientation"] = 0;
$tdata3horas[".nPrinterPageScale"] = 100;

$tdata3horas[".nPrinterSplitRecords"] = 40;

$tdata3horas[".geocodingEnabled"] = false;










$tdata3horas[".pageSize"] = 20;

$tdata3horas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata3horas[".strOrderBy"] = $tstrOrderBy;

$tdata3horas[".orderindexes"] = array();


$tdata3horas[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata3horas[".sqlFrom"] = "FROM `3horas`";
$tdata3horas[".sqlWhereExpr"] = "";
$tdata3horas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata3horas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata3horas[".arrGroupsPerPage"] = $arrGPP;

$tdata3horas[".highlightSearchResults"] = true;

$tableKeys3horas = array();
$tdata3horas[".Keys"] = $tableKeys3horas;


$tdata3horas[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "3horas";
	$fdata["Label"] = GetFieldLabel("3horas","HORA");
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


	$tdata3horas["HORA"] = $fdata;
		$tdata3horas[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "3horas";
	$fdata["Label"] = GetFieldLabel("3horas","MON_TEMP");
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


	$tdata3horas["MON_TEMP"] = $fdata;
		$tdata3horas[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "3horas";
	$fdata["Label"] = GetFieldLabel("3horas","MON_UMID");
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


	$tdata3horas["MON_UMID"] = $fdata;
		$tdata3horas[".searchableFields"][] = "MON_UMID";


$tables_data["3horas"]=&$tdata3horas;
$field_labels["3horas"] = &$fieldLabels3horas;
$fieldToolTips["3horas"] = &$fieldToolTips3horas;
$placeHolders["3horas"] = &$placeHolders3horas;
$page_titles["3horas"] = &$pageTitles3horas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["3horas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["3horas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_3horas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `3horas`";
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
	"m_strTable" => "3horas",
	"m_srcTableName" => "3horas"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "3horas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "3horas",
	"m_srcTableName" => "3horas"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "3horas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "3horas",
	"m_srcTableName" => "3horas"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "3horas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "3horas";
$proto13["m_srcTableName"] = "3horas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`3horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "3horas";
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
$proto0["m_srcTableName"]="3horas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_3horas = createSqlQuery_3horas();


	
		;

			

$tdata3horas[".sqlquery"] = $queryData_3horas;



$tableEvents["3horas"] = new eventsBase;
$tdata3horas[".hasEvents"] = false;

?>