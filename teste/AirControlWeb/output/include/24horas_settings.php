<?php
$tdata24horas = array();
$tdata24horas[".searchableFields"] = array();
$tdata24horas[".ShortName"] = "24horas";
$tdata24horas[".OwnerID"] = "";
$tdata24horas[".OriginalTable"] = "24horas";


$tdata24horas[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdata24horas[".originalPagesByType"] = $tdata24horas[".pagesByType"];
$tdata24horas[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdata24horas[".originalPages"] = $tdata24horas[".pages"];
$tdata24horas[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdata24horas[".originalDefaultPages"] = $tdata24horas[".defaultPages"];

//	field labels
$fieldLabels24horas = array();
$fieldToolTips24horas = array();
$pageTitles24horas = array();
$placeHolders24horas = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels24horas["Portuguese(Brazil)"] = array();
	$fieldToolTips24horas["Portuguese(Brazil)"] = array();
	$placeHolders24horas["Portuguese(Brazil)"] = array();
	$pageTitles24horas["Portuguese(Brazil)"] = array();
	$fieldLabels24horas["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips24horas["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders24horas["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels24horas["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips24horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders24horas["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels24horas["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips24horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders24horas["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips24horas["Portuguese(Brazil)"]))
		$tdata24horas[".isUseToolTips"] = true;
}


	$tdata24horas[".NCSearch"] = true;



$tdata24horas[".shortTableName"] = "24horas";
$tdata24horas[".nSecOptions"] = 0;

$tdata24horas[".mainTableOwnerID"] = "";
$tdata24horas[".entityType"] = 0;
$tdata24horas[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata24horas[".strOriginalTableName"] = "24horas";

	



$tdata24horas[".showAddInPopup"] = false;

$tdata24horas[".showEditInPopup"] = false;

$tdata24horas[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata24horas[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata24horas[".listAjax"] = false;
//	temporary
$tdata24horas[".listAjax"] = false;

	$tdata24horas[".audit"] = false;

	$tdata24horas[".locking"] = false;


$pages = $tdata24horas[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata24horas[".edit"] = true;
	$tdata24horas[".afterEditAction"] = 1;
	$tdata24horas[".closePopupAfterEdit"] = 1;
	$tdata24horas[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata24horas[".add"] = true;
$tdata24horas[".afterAddAction"] = 1;
$tdata24horas[".closePopupAfterAdd"] = 1;
$tdata24horas[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata24horas[".list"] = true;
}



$tdata24horas[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata24horas[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata24horas[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata24horas[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata24horas[".printFriendly"] = true;
}



$tdata24horas[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata24horas[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata24horas[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata24horas[".isUseAjaxSuggest"] = true;

$tdata24horas[".rowHighlite"] = true;





$tdata24horas[".ajaxCodeSnippetAdded"] = false;

$tdata24horas[".buttonsAdded"] = false;

$tdata24horas[".addPageEvents"] = false;

// use timepicker for search panel
$tdata24horas[".isUseTimeForSearch"] = false;


$tdata24horas[".badgeColor"] = "DAA520";


$tdata24horas[".allSearchFields"] = array();
$tdata24horas[".filterFields"] = array();
$tdata24horas[".requiredSearchFields"] = array();

$tdata24horas[".googleLikeFields"] = array();
$tdata24horas[".googleLikeFields"][] = "HORA";
$tdata24horas[".googleLikeFields"][] = "MON_TEMP";
$tdata24horas[".googleLikeFields"][] = "MON_UMID";



$tdata24horas[".tableType"] = "list";

$tdata24horas[".printerPageOrientation"] = 0;
$tdata24horas[".nPrinterPageScale"] = 100;

$tdata24horas[".nPrinterSplitRecords"] = 40;

$tdata24horas[".geocodingEnabled"] = false;










$tdata24horas[".pageSize"] = 20;

$tdata24horas[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata24horas[".strOrderBy"] = $tstrOrderBy;

$tdata24horas[".orderindexes"] = array();


$tdata24horas[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata24horas[".sqlFrom"] = "FROM `24horas`";
$tdata24horas[".sqlWhereExpr"] = "";
$tdata24horas[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata24horas[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata24horas[".arrGroupsPerPage"] = $arrGPP;

$tdata24horas[".highlightSearchResults"] = true;

$tableKeys24horas = array();
$tdata24horas[".Keys"] = $tableKeys24horas;


$tdata24horas[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "24horas";
	$fdata["Label"] = GetFieldLabel("24horas","HORA");
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


	$tdata24horas["HORA"] = $fdata;
		$tdata24horas[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "24horas";
	$fdata["Label"] = GetFieldLabel("24horas","MON_TEMP");
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


	$tdata24horas["MON_TEMP"] = $fdata;
		$tdata24horas[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "24horas";
	$fdata["Label"] = GetFieldLabel("24horas","MON_UMID");
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


	$tdata24horas["MON_UMID"] = $fdata;
		$tdata24horas[".searchableFields"][] = "MON_UMID";


$tables_data["24horas"]=&$tdata24horas;
$field_labels["24horas"] = &$fieldLabels24horas;
$fieldToolTips["24horas"] = &$fieldToolTips24horas;
$placeHolders["24horas"] = &$placeHolders24horas;
$page_titles["24horas"] = &$pageTitles24horas;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["24horas"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["24horas"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_24horas()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `24horas`";
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
	"m_strTable" => "24horas",
	"m_srcTableName" => "24horas"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "24horas";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "24horas",
	"m_srcTableName" => "24horas"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "24horas";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "24horas",
	"m_srcTableName" => "24horas"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "24horas";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "24horas";
$proto13["m_srcTableName"] = "24horas";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`24horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "24horas";
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
$proto0["m_srcTableName"]="24horas";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_24horas = createSqlQuery_24horas();


	
		;

			

$tdata24horas[".sqlquery"] = $queryData_24horas;



$tableEvents["24horas"] = new eventsBase;
$tdata24horas[".hasEvents"] = false;

?>