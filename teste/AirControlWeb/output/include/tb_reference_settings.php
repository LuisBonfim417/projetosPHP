<?php
$tdatatb_reference = array();
$tdatatb_reference[".searchableFields"] = array();
$tdatatb_reference[".ShortName"] = "tb_reference";
$tdatatb_reference[".OwnerID"] = "";
$tdatatb_reference[".OriginalTable"] = "tb_reference";


$tdatatb_reference[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_reference[".originalPagesByType"] = $tdatatb_reference[".pagesByType"];
$tdatatb_reference[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_reference[".originalPages"] = $tdatatb_reference[".pages"];
$tdatatb_reference[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_reference[".originalDefaultPages"] = $tdatatb_reference[".defaultPages"];

//	field labels
$fieldLabelstb_reference = array();
$fieldToolTipstb_reference = array();
$pageTitlestb_reference = array();
$placeHolderstb_reference = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_reference["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_reference["Portuguese(Brazil)"] = array();
	$placeHolderstb_reference["Portuguese(Brazil)"] = array();
	$pageTitlestb_reference["Portuguese(Brazil)"] = array();
	$fieldLabelstb_reference["Portuguese(Brazil)"]["REF_REFERENCE"] = "REF REFERENCE";
	$fieldToolTipstb_reference["Portuguese(Brazil)"]["REF_REFERENCE"] = "";
	$placeHolderstb_reference["Portuguese(Brazil)"]["REF_REFERENCE"] = "";
	if (count($fieldToolTipstb_reference["Portuguese(Brazil)"]))
		$tdatatb_reference[".isUseToolTips"] = true;
}


	$tdatatb_reference[".NCSearch"] = true;



$tdatatb_reference[".shortTableName"] = "tb_reference";
$tdatatb_reference[".nSecOptions"] = 0;

$tdatatb_reference[".mainTableOwnerID"] = "";
$tdatatb_reference[".entityType"] = 0;
$tdatatb_reference[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_reference[".strOriginalTableName"] = "tb_reference";

	



$tdatatb_reference[".showAddInPopup"] = false;

$tdatatb_reference[".showEditInPopup"] = false;

$tdatatb_reference[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_reference[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_reference[".listAjax"] = false;
//	temporary
$tdatatb_reference[".listAjax"] = false;

	$tdatatb_reference[".audit"] = true;

	$tdatatb_reference[".locking"] = true;


$pages = $tdatatb_reference[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_reference[".edit"] = true;
	$tdatatb_reference[".afterEditAction"] = 1;
	$tdatatb_reference[".closePopupAfterEdit"] = 1;
	$tdatatb_reference[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_reference[".add"] = true;
$tdatatb_reference[".afterAddAction"] = 1;
$tdatatb_reference[".closePopupAfterAdd"] = 1;
$tdatatb_reference[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_reference[".list"] = true;
}



$tdatatb_reference[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_reference[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_reference[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_reference[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_reference[".printFriendly"] = true;
}



$tdatatb_reference[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_reference[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_reference[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_reference[".isUseAjaxSuggest"] = true;

$tdatatb_reference[".rowHighlite"] = true;





$tdatatb_reference[".ajaxCodeSnippetAdded"] = false;

$tdatatb_reference[".buttonsAdded"] = false;

$tdatatb_reference[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_reference[".isUseTimeForSearch"] = false;


$tdatatb_reference[".badgeColor"] = "DAA520";


$tdatatb_reference[".allSearchFields"] = array();
$tdatatb_reference[".filterFields"] = array();
$tdatatb_reference[".requiredSearchFields"] = array();

$tdatatb_reference[".googleLikeFields"] = array();
$tdatatb_reference[".googleLikeFields"][] = "REF_REFERENCE";



$tdatatb_reference[".tableType"] = "list";

$tdatatb_reference[".printerPageOrientation"] = 0;
$tdatatb_reference[".nPrinterPageScale"] = 100;

$tdatatb_reference[".nPrinterSplitRecords"] = 40;

$tdatatb_reference[".geocodingEnabled"] = false;










$tdatatb_reference[".pageSize"] = 20;

$tdatatb_reference[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_reference[".strOrderBy"] = $tstrOrderBy;

$tdatatb_reference[".orderindexes"] = array();


$tdatatb_reference[".sqlHead"] = "SELECT REF_REFERENCE";
$tdatatb_reference[".sqlFrom"] = "FROM tb_reference";
$tdatatb_reference[".sqlWhereExpr"] = "";
$tdatatb_reference[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_reference[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_reference[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_reference[".highlightSearchResults"] = true;

$tableKeystb_reference = array();
$tableKeystb_reference[] = "REF_REFERENCE";
$tdatatb_reference[".Keys"] = $tableKeystb_reference;


$tdatatb_reference[".hideMobileList"] = array();




//	REF_REFERENCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "REF_REFERENCE";
	$fdata["GoodName"] = "REF_REFERENCE";
	$fdata["ownerTable"] = "tb_reference";
	$fdata["Label"] = GetFieldLabel("tb_reference","REF_REFERENCE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "REF_REFERENCE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "REF_REFERENCE";

	
	
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
			$edata["EditParams"].= " maxlength=25";

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


	$tdatatb_reference["REF_REFERENCE"] = $fdata;
		$tdatatb_reference[".searchableFields"][] = "REF_REFERENCE";


$tables_data["tb_reference"]=&$tdatatb_reference;
$field_labels["tb_reference"] = &$fieldLabelstb_reference;
$fieldToolTips["tb_reference"] = &$fieldToolTipstb_reference;
$placeHolders["tb_reference"] = &$placeHolderstb_reference;
$page_titles["tb_reference"] = &$pageTitlestb_reference;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_reference"] = array();
//	tb_ticket
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_ticket";
		$detailsParam["dOriginalTable"] = "tb_ticket";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_ticket";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_ticket");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_reference"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_reference"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_reference"][$dIndex]["masterKeys"][]="REF_REFERENCE";

				$detailsTablesData["tb_reference"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_reference"][$dIndex]["detailKeys"][]="REF_REFERENCE";

// tables which are master tables for current table (detail)
$masterTablesData["tb_reference"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_reference()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "REF_REFERENCE";
$proto0["m_strFrom"] = "FROM tb_reference";
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
	"m_strName" => "REF_REFERENCE",
	"m_strTable" => "tb_reference",
	"m_srcTableName" => "tb_reference"
));

$proto6["m_sql"] = "REF_REFERENCE";
$proto6["m_srcTableName"] = "tb_reference";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "tb_reference";
$proto9["m_srcTableName"] = "tb_reference";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "REF_REFERENCE";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "tb_reference";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "tb_reference";
$proto10=array();
$proto10["m_sql"] = "";
$proto10["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto10["m_column"]=$obj;
$proto10["m_contained"] = array();
$proto10["m_strCase"] = "";
$proto10["m_havingmode"] = false;
$proto10["m_inBrackets"] = false;
$proto10["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto10);

$proto8["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto8);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_reference";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_reference = createSqlQuery_tb_reference();


	
		;

	

$tdatatb_reference[".sqlquery"] = $queryData_tb_reference;



$tableEvents["tb_reference"] = new eventsBase;
$tdatatb_reference[".hasEvents"] = false;

?>