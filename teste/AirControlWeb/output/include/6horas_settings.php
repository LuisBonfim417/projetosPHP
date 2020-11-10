<?php
$tdata6horas = array();
$tdata6horas[".searchableFields"] = array();
$tdata6horas[".ShortName"] = "6horas";
$tdata6horas[".OwnerID"] = "";
$tdata6horas[".OriginalTable"] = "6horas";


$tdata6horas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdata6horas[".originalPagesByType"] = $tdata6horas[".pagesByType"];
$tdata6horas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdata6horas[".originalPages"] = $tdata6horas[".pages"];
$tdata6horas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdata6horas[".originalDefaultPages"] = $tdata6horas[".defaultPages"];

//	field labels
$fieldLabels6horas = array();
$fieldToolTips6horas = array();
$pageTitles6horas = array();
$placeHolders6horas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels6horas["Portuguese(Brazil)"] = array();
	$fieldToolTips6horas["Portuguese(Brazil)"] = array();
	$placeHolders6horas["Portuguese(Brazil)"] = array();
	$pageTitles6horas["Portuguese(Brazil)"] = array();
	$fieldLabels6horas["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips6horas["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders6horas["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels6horas["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips6horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders6horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels6horas["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips6horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders6horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips6horas["Portuguese(Brazil)"]))
		$tdata6horas[".isUseToolTips"] = true;
}


	$tdata6horas[".NCSearch"] = true;



$tdata6horas[".shortTableName"] = "6horas";
$tdata6horas[".nSecOptions"] = 0;

$tdata6horas[".mainTableOwnerID"] = "";
$tdata6horas[".entityType"] = 0;
$tdata6horas[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata6horas[".strOriginalTableName"] = "6horas";

	



$tdata6horas[".showAddInPopup"] = false;

$tdata6horas[".showEditInPopup"] = false;

$tdata6horas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata6horas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata6horas[".listAjax"] = false;
//	temporary
$tdata6horas[".listAjax"] = false;

	$tdata6horas[".audit"] = false;

	$tdata6horas[".locking"] = false;


$pages = $tdata6horas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata6horas[".edit"] = true;
	$tdata6horas[".afterEditAction"] = 1;
	$tdata6horas[".closePopupAfterEdit"] = 1;
	$tdata6horas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata6horas[".add"] = true;
$tdata6horas[".afterAddAction"] = 1;
$tdata6horas[".closePopupAfterAdd"] = 1;
$tdata6horas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata6horas[".list"] = true;
}



$tdata6horas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata6horas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata6horas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata6horas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata6horas[".printFriendly"] = true;
}



$tdata6horas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata6horas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata6horas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata6horas[".isUseAjaxSuggest"] = true;

$tdata6horas[".rowHighlite"] = true;





$tdata6horas[".ajaxCodeSnippetAdded"] = false;

$tdata6horas[".buttonsAdded"] = false;

$tdata6horas[".addPageEvents"] = false;

// use timepicker for search panel
$tdata6horas[".isUseTimeForSearch"] = false;


$tdata6horas[".badgeColor"] = "9ACD32";


$tdata6horas[".allSearchFields"] = array();
$tdata6horas[".filterFields"] = array();
$tdata6horas[".requiredSearchFields"] = array();

$tdata6horas[".googleLikeFields"] = array();
$tdata6horas[".googleLikeFields"][] = "HORA";
$tdata6horas[".googleLikeFields"][] = "MON_TEMP";
$tdata6horas[".googleLikeFields"][] = "MON_UMID";



$tdata6horas[".tableType"] = "list";

$tdata6horas[".printerPageOrientation"] = 0;
$tdata6horas[".nPrinterPageScale"] = 100;

$tdata6horas[".nPrinterSplitRecords"] = 40;

$tdata6horas[".geocodingEnabled"] = false;










$tdata6horas[".pageSize"] = 20;

$tdata6horas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata6horas[".strOrderBy"] = $tstrOrderBy;

$tdata6horas[".orderindexes"] = array();


$tdata6horas[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata6horas[".sqlFrom"] = "FROM `6horas`";
$tdata6horas[".sqlWhereExpr"] = "";
$tdata6horas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata6horas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata6horas[".arrGroupsPerPage"] = $arrGPP;

$tdata6horas[".highlightSearchResults"] = true;

$tableKeys6horas = array();
$tdata6horas[".Keys"] = $tableKeys6horas;


$tdata6horas[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "6horas";
	$fdata["Label"] = GetFieldLabel("6horas","HORA");
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


	$tdata6horas["HORA"] = $fdata;
		$tdata6horas[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "6horas";
	$fdata["Label"] = GetFieldLabel("6horas","MON_TEMP");
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


	$tdata6horas["MON_TEMP"] = $fdata;
		$tdata6horas[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "6horas";
	$fdata["Label"] = GetFieldLabel("6horas","MON_UMID");
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


	$tdata6horas["MON_UMID"] = $fdata;
		$tdata6horas[".searchableFields"][] = "MON_UMID";


$tables_data["6horas"]=&$tdata6horas;
$field_labels["6horas"] = &$fieldLabels6horas;
$fieldToolTips["6horas"] = &$fieldToolTips6horas;
$placeHolders["6horas"] = &$placeHolders6horas;
$page_titles["6horas"] = &$pageTitles6horas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["6horas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["6horas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_6horas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `6horas`";
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
	"m_strTable" => "6horas",
	"m_srcTableName" => "6horas"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "6horas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "6horas",
	"m_srcTableName" => "6horas"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "6horas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "6horas",
	"m_srcTableName" => "6horas"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "6horas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "6horas";
$proto13["m_srcTableName"] = "6horas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`6horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "6horas";
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
$proto0["m_srcTableName"]="6horas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_6horas = createSqlQuery_6horas();


	
		;

			

$tdata6horas[".sqlquery"] = $queryData_6horas;



$tableEvents["6horas"] = new eventsBase;
$tdata6horas[".hasEvents"] = false;

?>