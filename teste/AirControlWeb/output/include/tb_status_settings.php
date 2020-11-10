<?php
$tdatatb_status = array();
$tdatatb_status[".searchableFields"] = array();
$tdatatb_status[".ShortName"] = "tb_status";
$tdatatb_status[".OwnerID"] = "";
$tdatatb_status[".OriginalTable"] = "tb_status";


$tdatatb_status[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_status[".originalPagesByType"] = $tdatatb_status[".pagesByType"];
$tdatatb_status[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_status[".originalPages"] = $tdatatb_status[".pages"];
$tdatatb_status[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_status[".originalDefaultPages"] = $tdatatb_status[".defaultPages"];

//	field labels
$fieldLabelstb_status = array();
$fieldToolTipstb_status = array();
$pageTitlestb_status = array();
$placeHolderstb_status = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_status["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_status["Portuguese(Brazil)"] = array();
	$placeHolderstb_status["Portuguese(Brazil)"] = array();
	$pageTitlestb_status["Portuguese(Brazil)"] = array();
	$fieldLabelstb_status["Portuguese(Brazil)"]["STATUS"] = "STATUS";
	$fieldToolTipstb_status["Portuguese(Brazil)"]["STATUS"] = "";
	$placeHolderstb_status["Portuguese(Brazil)"]["STATUS"] = "";
	if (count($fieldToolTipstb_status["Portuguese(Brazil)"]))
		$tdatatb_status[".isUseToolTips"] = true;
}


	$tdatatb_status[".NCSearch"] = true;



$tdatatb_status[".shortTableName"] = "tb_status";
$tdatatb_status[".nSecOptions"] = 0;

$tdatatb_status[".mainTableOwnerID"] = "";
$tdatatb_status[".entityType"] = 0;
$tdatatb_status[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_status[".strOriginalTableName"] = "tb_status";

	



$tdatatb_status[".showAddInPopup"] = false;

$tdatatb_status[".showEditInPopup"] = false;

$tdatatb_status[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_status[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_status[".listAjax"] = false;
//	temporary
$tdatatb_status[".listAjax"] = false;

	$tdatatb_status[".audit"] = true;

	$tdatatb_status[".locking"] = true;


$pages = $tdatatb_status[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_status[".edit"] = true;
	$tdatatb_status[".afterEditAction"] = 1;
	$tdatatb_status[".closePopupAfterEdit"] = 1;
	$tdatatb_status[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_status[".add"] = true;
$tdatatb_status[".afterAddAction"] = 1;
$tdatatb_status[".closePopupAfterAdd"] = 1;
$tdatatb_status[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_status[".list"] = true;
}



$tdatatb_status[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_status[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_status[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_status[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_status[".printFriendly"] = true;
}



$tdatatb_status[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_status[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_status[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_status[".isUseAjaxSuggest"] = true;

$tdatatb_status[".rowHighlite"] = true;





$tdatatb_status[".ajaxCodeSnippetAdded"] = false;

$tdatatb_status[".buttonsAdded"] = false;

$tdatatb_status[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_status[".isUseTimeForSearch"] = false;


$tdatatb_status[".badgeColor"] = "008B8B";


$tdatatb_status[".allSearchFields"] = array();
$tdatatb_status[".filterFields"] = array();
$tdatatb_status[".requiredSearchFields"] = array();

$tdatatb_status[".googleLikeFields"] = array();
$tdatatb_status[".googleLikeFields"][] = "STATUS";



$tdatatb_status[".tableType"] = "list";

$tdatatb_status[".printerPageOrientation"] = 0;
$tdatatb_status[".nPrinterPageScale"] = 100;

$tdatatb_status[".nPrinterSplitRecords"] = 40;

$tdatatb_status[".geocodingEnabled"] = false;










$tdatatb_status[".pageSize"] = 20;

$tdatatb_status[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_status[".strOrderBy"] = $tstrOrderBy;

$tdatatb_status[".orderindexes"] = array();


$tdatatb_status[".sqlHead"] = "SELECT STATUS";
$tdatatb_status[".sqlFrom"] = "FROM tb_status";
$tdatatb_status[".sqlWhereExpr"] = "";
$tdatatb_status[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_status[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_status[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_status[".highlightSearchResults"] = true;

$tableKeystb_status = array();
$tableKeystb_status[] = "STATUS";
$tdatatb_status[".Keys"] = $tableKeystb_status;


$tdatatb_status[".hideMobileList"] = array();




//	STATUS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "STATUS";
	$fdata["GoodName"] = "STATUS";
	$fdata["ownerTable"] = "tb_status";
	$fdata["Label"] = GetFieldLabel("tb_status","STATUS");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "STATUS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "STATUS";

	
	
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


	$tdatatb_status["STATUS"] = $fdata;
		$tdatatb_status[".searchableFields"][] = "STATUS";


$tables_data["tb_status"]=&$tdatatb_status;
$field_labels["tb_status"] = &$fieldLabelstb_status;
$fieldToolTips["tb_status"] = &$fieldToolTipstb_status;
$placeHolders["tb_status"] = &$placeHolderstb_status;
$page_titles["tb_status"] = &$pageTitlestb_status;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_status"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_status"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_status()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "STATUS";
$proto0["m_strFrom"] = "FROM tb_status";
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
	"m_strName" => "STATUS",
	"m_strTable" => "tb_status",
	"m_srcTableName" => "tb_status"
));

$proto6["m_sql"] = "STATUS";
$proto6["m_srcTableName"] = "tb_status";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "tb_status";
$proto9["m_srcTableName"] = "tb_status";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "STATUS";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "tb_status";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "tb_status";
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
$proto0["m_srcTableName"]="tb_status";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_status = createSqlQuery_tb_status();


	
		;

	

$tdatatb_status[".sqlquery"] = $queryData_tb_status;



$tableEvents["tb_status"] = new eventsBase;
$tdatatb_status[".hasEvents"] = false;

?>