<?php
$tdata9horas = array();
$tdata9horas[".searchableFields"] = array();
$tdata9horas[".ShortName"] = "9horas";
$tdata9horas[".OwnerID"] = "";
$tdata9horas[".OriginalTable"] = "9horas";


$tdata9horas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdata9horas[".originalPagesByType"] = $tdata9horas[".pagesByType"];
$tdata9horas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdata9horas[".originalPages"] = $tdata9horas[".pages"];
$tdata9horas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdata9horas[".originalDefaultPages"] = $tdata9horas[".defaultPages"];

//	field labels
$fieldLabels9horas = array();
$fieldToolTips9horas = array();
$pageTitles9horas = array();
$placeHolders9horas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels9horas["Portuguese(Brazil)"] = array();
	$fieldToolTips9horas["Portuguese(Brazil)"] = array();
	$placeHolders9horas["Portuguese(Brazil)"] = array();
	$pageTitles9horas["Portuguese(Brazil)"] = array();
	$fieldLabels9horas["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips9horas["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders9horas["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels9horas["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips9horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders9horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels9horas["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips9horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders9horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips9horas["Portuguese(Brazil)"]))
		$tdata9horas[".isUseToolTips"] = true;
}


	$tdata9horas[".NCSearch"] = true;



$tdata9horas[".shortTableName"] = "9horas";
$tdata9horas[".nSecOptions"] = 0;

$tdata9horas[".mainTableOwnerID"] = "";
$tdata9horas[".entityType"] = 0;
$tdata9horas[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata9horas[".strOriginalTableName"] = "9horas";

	



$tdata9horas[".showAddInPopup"] = false;

$tdata9horas[".showEditInPopup"] = false;

$tdata9horas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata9horas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata9horas[".listAjax"] = false;
//	temporary
$tdata9horas[".listAjax"] = false;

	$tdata9horas[".audit"] = true;

	$tdata9horas[".locking"] = false;


$pages = $tdata9horas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata9horas[".edit"] = true;
	$tdata9horas[".afterEditAction"] = 1;
	$tdata9horas[".closePopupAfterEdit"] = 1;
	$tdata9horas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata9horas[".add"] = true;
$tdata9horas[".afterAddAction"] = 1;
$tdata9horas[".closePopupAfterAdd"] = 1;
$tdata9horas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata9horas[".list"] = true;
}



$tdata9horas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata9horas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata9horas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata9horas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata9horas[".printFriendly"] = true;
}



$tdata9horas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata9horas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata9horas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata9horas[".isUseAjaxSuggest"] = true;

$tdata9horas[".rowHighlite"] = true;





$tdata9horas[".ajaxCodeSnippetAdded"] = false;

$tdata9horas[".buttonsAdded"] = false;

$tdata9horas[".addPageEvents"] = false;

// use timepicker for search panel
$tdata9horas[".isUseTimeForSearch"] = false;


$tdata9horas[".badgeColor"] = "CD853F";


$tdata9horas[".allSearchFields"] = array();
$tdata9horas[".filterFields"] = array();
$tdata9horas[".requiredSearchFields"] = array();

$tdata9horas[".googleLikeFields"] = array();
$tdata9horas[".googleLikeFields"][] = "HORA";
$tdata9horas[".googleLikeFields"][] = "MON_TEMP";
$tdata9horas[".googleLikeFields"][] = "MON_UMID";



$tdata9horas[".tableType"] = "list";

$tdata9horas[".printerPageOrientation"] = 0;
$tdata9horas[".nPrinterPageScale"] = 100;

$tdata9horas[".nPrinterSplitRecords"] = 40;

$tdata9horas[".geocodingEnabled"] = false;










$tdata9horas[".pageSize"] = 20;

$tdata9horas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata9horas[".strOrderBy"] = $tstrOrderBy;

$tdata9horas[".orderindexes"] = array();


$tdata9horas[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata9horas[".sqlFrom"] = "FROM `9horas`";
$tdata9horas[".sqlWhereExpr"] = "";
$tdata9horas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata9horas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata9horas[".arrGroupsPerPage"] = $arrGPP;

$tdata9horas[".highlightSearchResults"] = true;

$tableKeys9horas = array();
$tdata9horas[".Keys"] = $tableKeys9horas;


$tdata9horas[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "9horas";
	$fdata["Label"] = GetFieldLabel("9horas","HORA");
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


	$tdata9horas["HORA"] = $fdata;
		$tdata9horas[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "9horas";
	$fdata["Label"] = GetFieldLabel("9horas","MON_TEMP");
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


	$tdata9horas["MON_TEMP"] = $fdata;
		$tdata9horas[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "9horas";
	$fdata["Label"] = GetFieldLabel("9horas","MON_UMID");
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


	$tdata9horas["MON_UMID"] = $fdata;
		$tdata9horas[".searchableFields"][] = "MON_UMID";


$tables_data["9horas"]=&$tdata9horas;
$field_labels["9horas"] = &$fieldLabels9horas;
$fieldToolTips["9horas"] = &$fieldToolTips9horas;
$placeHolders["9horas"] = &$placeHolders9horas;
$page_titles["9horas"] = &$pageTitles9horas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["9horas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["9horas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_9horas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `9horas`";
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
	"m_strTable" => "9horas",
	"m_srcTableName" => "9horas"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "9horas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "9horas",
	"m_srcTableName" => "9horas"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "9horas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "9horas",
	"m_srcTableName" => "9horas"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "9horas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "9horas";
$proto13["m_srcTableName"] = "9horas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`9horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "9horas";
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
$proto0["m_srcTableName"]="9horas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_9horas = createSqlQuery_9horas();


	
		;

			

$tdata9horas[".sqlquery"] = $queryData_9horas;



$tableEvents["9horas"] = new eventsBase;
$tdata9horas[".hasEvents"] = false;

?>