<?php
$tdatavwv_monitoramento_por_periodo_leitura_minima = array();
$tdatavwv_monitoramento_por_periodo_leitura_minima[".searchableFields"] = array();
$tdatavwv_monitoramento_por_periodo_leitura_minima[".ShortName"] = "vwv_monitoramento_por_periodo_leitura_minima";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".OwnerID"] = "";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".OriginalTable"] = "vwv_monitoramento_por_periodo_leitura_minima";


$tdatavwv_monitoramento_por_periodo_leitura_minima[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatavwv_monitoramento_por_periodo_leitura_minima[".originalPagesByType"] = $tdatavwv_monitoramento_por_periodo_leitura_minima[".pagesByType"];
$tdatavwv_monitoramento_por_periodo_leitura_minima[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatavwv_monitoramento_por_periodo_leitura_minima[".originalPages"] = $tdatavwv_monitoramento_por_periodo_leitura_minima[".pages"];
$tdatavwv_monitoramento_por_periodo_leitura_minima[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatavwv_monitoramento_por_periodo_leitura_minima[".originalDefaultPages"] = $tdatavwv_monitoramento_por_periodo_leitura_minima[".defaultPages"];

//	field labels
$fieldLabelsvwv_monitoramento_por_periodo_leitura_minima = array();
$fieldToolTipsvwv_monitoramento_por_periodo_leitura_minima = array();
$pageTitlesvwv_monitoramento_por_periodo_leitura_minima = array();
$placeHoldersvwv_monitoramento_por_periodo_leitura_minima = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"] = array();
	$fieldToolTipsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"] = array();
	$placeHoldersvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"] = array();
	$pageTitlesvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"] = array();
	$fieldLabelsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Data"] = "Data";
	$fieldToolTipsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Data"] = "";
	$placeHoldersvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Data"] = "";
	$fieldLabelsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Umidade"] = "Umidade";
	$fieldToolTipsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Umidade"] = "";
	$placeHoldersvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Umidade"] = "";
	$fieldLabelsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Temperatura"] = "Temperatura";
	$fieldToolTipsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Temperatura"] = "";
	$placeHoldersvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]["Temperatura"] = "";
	if (count($fieldToolTipsvwv_monitoramento_por_periodo_leitura_minima["Portuguese(Brazil)"]))
		$tdatavwv_monitoramento_por_periodo_leitura_minima[".isUseToolTips"] = true;
}


	$tdatavwv_monitoramento_por_periodo_leitura_minima[".NCSearch"] = true;



$tdatavwv_monitoramento_por_periodo_leitura_minima[".shortTableName"] = "vwv_monitoramento_por_periodo_leitura_minima";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".nSecOptions"] = 0;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".mainTableOwnerID"] = "";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".entityType"] = 0;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatavwv_monitoramento_por_periodo_leitura_minima[".strOriginalTableName"] = "vwv_monitoramento_por_periodo_leitura_minima";

	



$tdatavwv_monitoramento_por_periodo_leitura_minima[".showAddInPopup"] = false;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".showEditInPopup"] = false;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavwv_monitoramento_por_periodo_leitura_minima[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavwv_monitoramento_por_periodo_leitura_minima[".listAjax"] = false;
//	temporary
$tdatavwv_monitoramento_por_periodo_leitura_minima[".listAjax"] = false;

	$tdatavwv_monitoramento_por_periodo_leitura_minima[".audit"] = false;

	$tdatavwv_monitoramento_por_periodo_leitura_minima[".locking"] = false;


$pages = $tdatavwv_monitoramento_por_periodo_leitura_minima[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavwv_monitoramento_por_periodo_leitura_minima[".edit"] = true;
	$tdatavwv_monitoramento_por_periodo_leitura_minima[".afterEditAction"] = 1;
	$tdatavwv_monitoramento_por_periodo_leitura_minima[".closePopupAfterEdit"] = 1;
	$tdatavwv_monitoramento_por_periodo_leitura_minima[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavwv_monitoramento_por_periodo_leitura_minima[".add"] = true;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".afterAddAction"] = 1;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".closePopupAfterAdd"] = 1;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavwv_monitoramento_por_periodo_leitura_minima[".list"] = true;
}



$tdatavwv_monitoramento_por_periodo_leitura_minima[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavwv_monitoramento_por_periodo_leitura_minima[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavwv_monitoramento_por_periodo_leitura_minima[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavwv_monitoramento_por_periodo_leitura_minima[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavwv_monitoramento_por_periodo_leitura_minima[".printFriendly"] = true;
}



$tdatavwv_monitoramento_por_periodo_leitura_minima[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavwv_monitoramento_por_periodo_leitura_minima[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavwv_monitoramento_por_periodo_leitura_minima[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavwv_monitoramento_por_periodo_leitura_minima[".isUseAjaxSuggest"] = true;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".rowHighlite"] = true;





$tdatavwv_monitoramento_por_periodo_leitura_minima[".ajaxCodeSnippetAdded"] = false;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".buttonsAdded"] = false;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavwv_monitoramento_por_periodo_leitura_minima[".isUseTimeForSearch"] = false;


$tdatavwv_monitoramento_por_periodo_leitura_minima[".badgeColor"] = "CD5C5C";


$tdatavwv_monitoramento_por_periodo_leitura_minima[".allSearchFields"] = array();
$tdatavwv_monitoramento_por_periodo_leitura_minima[".filterFields"] = array();
$tdatavwv_monitoramento_por_periodo_leitura_minima[".requiredSearchFields"] = array();

$tdatavwv_monitoramento_por_periodo_leitura_minima[".googleLikeFields"] = array();
$tdatavwv_monitoramento_por_periodo_leitura_minima[".googleLikeFields"][] = "Data";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".googleLikeFields"][] = "Umidade";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".googleLikeFields"][] = "Temperatura";



$tdatavwv_monitoramento_por_periodo_leitura_minima[".tableType"] = "list";

$tdatavwv_monitoramento_por_periodo_leitura_minima[".printerPageOrientation"] = 0;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".nPrinterPageScale"] = 100;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".nPrinterSplitRecords"] = 40;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".geocodingEnabled"] = false;










$tdatavwv_monitoramento_por_periodo_leitura_minima[".pageSize"] = 20;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".strOrderBy"] = $tstrOrderBy;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".orderindexes"] = array();


$tdatavwv_monitoramento_por_periodo_leitura_minima[".sqlHead"] = "SELECT `Data`,  	Umidade,  	Temperatura";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".sqlFrom"] = "FROM vwv_monitoramento_por_periodo_leitura_minima";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".sqlWhereExpr"] = "";
$tdatavwv_monitoramento_por_periodo_leitura_minima[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".arrGroupsPerPage"] = $arrGPP;

$tdatavwv_monitoramento_por_periodo_leitura_minima[".highlightSearchResults"] = true;

$tableKeysvwv_monitoramento_por_periodo_leitura_minima = array();
$tdatavwv_monitoramento_por_periodo_leitura_minima[".Keys"] = $tableKeysvwv_monitoramento_por_periodo_leitura_minima;


$tdatavwv_monitoramento_por_periodo_leitura_minima[".hideMobileList"] = array();




//	Data
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Data";
	$fdata["GoodName"] = "Data";
	$fdata["ownerTable"] = "vwv_monitoramento_por_periodo_leitura_minima";
	$fdata["Label"] = GetFieldLabel("vwv_monitoramento_por_periodo_leitura_minima","Data");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "Data";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Data`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatavwv_monitoramento_por_periodo_leitura_minima["Data"] = $fdata;
		$tdatavwv_monitoramento_por_periodo_leitura_minima[".searchableFields"][] = "Data";
//	Umidade
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Umidade";
	$fdata["GoodName"] = "Umidade";
	$fdata["ownerTable"] = "vwv_monitoramento_por_periodo_leitura_minima";
	$fdata["Label"] = GetFieldLabel("vwv_monitoramento_por_periodo_leitura_minima","Umidade");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Umidade";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Umidade";

	
	
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


	$tdatavwv_monitoramento_por_periodo_leitura_minima["Umidade"] = $fdata;
		$tdatavwv_monitoramento_por_periodo_leitura_minima[".searchableFields"][] = "Umidade";
//	Temperatura
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Temperatura";
	$fdata["GoodName"] = "Temperatura";
	$fdata["ownerTable"] = "vwv_monitoramento_por_periodo_leitura_minima";
	$fdata["Label"] = GetFieldLabel("vwv_monitoramento_por_periodo_leitura_minima","Temperatura");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "Temperatura";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Temperatura";

	
	
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


	$tdatavwv_monitoramento_por_periodo_leitura_minima["Temperatura"] = $fdata;
		$tdatavwv_monitoramento_por_periodo_leitura_minima[".searchableFields"][] = "Temperatura";


$tables_data["vwv_monitoramento_por_periodo_leitura_minima"]=&$tdatavwv_monitoramento_por_periodo_leitura_minima;
$field_labels["vwv_monitoramento_por_periodo_leitura_minima"] = &$fieldLabelsvwv_monitoramento_por_periodo_leitura_minima;
$fieldToolTips["vwv_monitoramento_por_periodo_leitura_minima"] = &$fieldToolTipsvwv_monitoramento_por_periodo_leitura_minima;
$placeHolders["vwv_monitoramento_por_periodo_leitura_minima"] = &$placeHoldersvwv_monitoramento_por_periodo_leitura_minima;
$page_titles["vwv_monitoramento_por_periodo_leitura_minima"] = &$pageTitlesvwv_monitoramento_por_periodo_leitura_minima;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vwv_monitoramento_por_periodo_leitura_minima"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vwv_monitoramento_por_periodo_leitura_minima"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vwv_monitoramento_por_periodo_leitura_minima()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Data`,  	Umidade,  	Temperatura";
$proto0["m_strFrom"] = "FROM vwv_monitoramento_por_periodo_leitura_minima";
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
	"m_strName" => "Data",
	"m_strTable" => "vwv_monitoramento_por_periodo_leitura_minima",
	"m_srcTableName" => "vwv_monitoramento_por_periodo_leitura_minima"
));

$proto6["m_sql"] = "`Data`";
$proto6["m_srcTableName"] = "vwv_monitoramento_por_periodo_leitura_minima";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Umidade",
	"m_strTable" => "vwv_monitoramento_por_periodo_leitura_minima",
	"m_srcTableName" => "vwv_monitoramento_por_periodo_leitura_minima"
));

$proto8["m_sql"] = "Umidade";
$proto8["m_srcTableName"] = "vwv_monitoramento_por_periodo_leitura_minima";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Temperatura",
	"m_strTable" => "vwv_monitoramento_por_periodo_leitura_minima",
	"m_srcTableName" => "vwv_monitoramento_por_periodo_leitura_minima"
));

$proto10["m_sql"] = "Temperatura";
$proto10["m_srcTableName"] = "vwv_monitoramento_por_periodo_leitura_minima";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "vwv_monitoramento_por_periodo_leitura_minima";
$proto13["m_srcTableName"] = "vwv_monitoramento_por_periodo_leitura_minima";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "Data";
$proto13["m_columns"][] = "Umidade";
$proto13["m_columns"][] = "Temperatura";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "vwv_monitoramento_por_periodo_leitura_minima";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "vwv_monitoramento_por_periodo_leitura_minima";
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
$proto0["m_srcTableName"]="vwv_monitoramento_por_periodo_leitura_minima";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vwv_monitoramento_por_periodo_leitura_minima = createSqlQuery_vwv_monitoramento_por_periodo_leitura_minima();


	
		;

			

$tdatavwv_monitoramento_por_periodo_leitura_minima[".sqlquery"] = $queryData_vwv_monitoramento_por_periodo_leitura_minima;



$tableEvents["vwv_monitoramento_por_periodo_leitura_minima"] = new eventsBase;
$tdatavwv_monitoramento_por_periodo_leitura_minima[".hasEvents"] = false;

?>