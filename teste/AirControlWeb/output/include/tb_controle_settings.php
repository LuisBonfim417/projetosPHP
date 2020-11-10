<?php
$tdatatb_controle = array();
$tdatatb_controle[".searchableFields"] = array();
$tdatatb_controle[".ShortName"] = "tb_controle";
$tdatatb_controle[".OwnerID"] = "";
$tdatatb_controle[".OriginalTable"] = "tb_controle";


$tdatatb_controle[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_controle[".originalPagesByType"] = $tdatatb_controle[".pagesByType"];
$tdatatb_controle[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_controle[".originalPages"] = $tdatatb_controle[".pages"];
$tdatatb_controle[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_controle[".originalDefaultPages"] = $tdatatb_controle[".defaultPages"];

//	field labels
$fieldLabelstb_controle = array();
$fieldToolTipstb_controle = array();
$pageTitlestb_controle = array();
$placeHolderstb_controle = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_controle["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_controle["Portuguese(Brazil)"] = array();
	$placeHolderstb_controle["Portuguese(Brazil)"] = array();
	$pageTitlestb_controle["Portuguese(Brazil)"] = array();
	$fieldLabelstb_controle["Portuguese(Brazil)"]["CON_TIPO_SENSOR"] = "Tipo de Sensor";
	$fieldToolTipstb_controle["Portuguese(Brazil)"]["CON_TIPO_SENSOR"] = "";
	$placeHolderstb_controle["Portuguese(Brazil)"]["CON_TIPO_SENSOR"] = "";
	if (count($fieldToolTipstb_controle["Portuguese(Brazil)"]))
		$tdatatb_controle[".isUseToolTips"] = true;
}


	$tdatatb_controle[".NCSearch"] = true;



$tdatatb_controle[".shortTableName"] = "tb_controle";
$tdatatb_controle[".nSecOptions"] = 0;

$tdatatb_controle[".mainTableOwnerID"] = "";
$tdatatb_controle[".entityType"] = 0;
$tdatatb_controle[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_controle[".strOriginalTableName"] = "tb_controle";

	



$tdatatb_controle[".showAddInPopup"] = false;

$tdatatb_controle[".showEditInPopup"] = false;

$tdatatb_controle[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_controle[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_controle[".listAjax"] = false;
//	temporary
$tdatatb_controle[".listAjax"] = false;

	$tdatatb_controle[".audit"] = true;

	$tdatatb_controle[".locking"] = true;


$pages = $tdatatb_controle[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_controle[".edit"] = true;
	$tdatatb_controle[".afterEditAction"] = 1;
	$tdatatb_controle[".closePopupAfterEdit"] = 1;
	$tdatatb_controle[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_controle[".add"] = true;
$tdatatb_controle[".afterAddAction"] = 1;
$tdatatb_controle[".closePopupAfterAdd"] = 1;
$tdatatb_controle[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_controle[".list"] = true;
}



$tdatatb_controle[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_controle[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_controle[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_controle[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_controle[".printFriendly"] = true;
}



$tdatatb_controle[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_controle[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_controle[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_controle[".isUseAjaxSuggest"] = true;

$tdatatb_controle[".rowHighlite"] = true;





$tdatatb_controle[".ajaxCodeSnippetAdded"] = false;

$tdatatb_controle[".buttonsAdded"] = false;

$tdatatb_controle[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_controle[".isUseTimeForSearch"] = false;


$tdatatb_controle[".badgeColor"] = "CFAE83";


$tdatatb_controle[".allSearchFields"] = array();
$tdatatb_controle[".filterFields"] = array();
$tdatatb_controle[".requiredSearchFields"] = array();

$tdatatb_controle[".googleLikeFields"] = array();
$tdatatb_controle[".googleLikeFields"][] = "CON_TIPO_SENSOR";



$tdatatb_controle[".tableType"] = "list";

$tdatatb_controle[".printerPageOrientation"] = 0;
$tdatatb_controle[".nPrinterPageScale"] = 100;

$tdatatb_controle[".nPrinterSplitRecords"] = 40;

$tdatatb_controle[".geocodingEnabled"] = false;










$tdatatb_controle[".pageSize"] = 20;

$tdatatb_controle[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_controle[".strOrderBy"] = $tstrOrderBy;

$tdatatb_controle[".orderindexes"] = array();


$tdatatb_controle[".sqlHead"] = "SELECT CON_TIPO_SENSOR";
$tdatatb_controle[".sqlFrom"] = "FROM tb_controle";
$tdatatb_controle[".sqlWhereExpr"] = "";
$tdatatb_controle[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_controle[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_controle[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_controle[".highlightSearchResults"] = true;

$tableKeystb_controle = array();
$tableKeystb_controle[] = "CON_TIPO_SENSOR";
$tdatatb_controle[".Keys"] = $tableKeystb_controle;


$tdatatb_controle[".hideMobileList"] = array();




//	CON_TIPO_SENSOR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "CON_TIPO_SENSOR";
	$fdata["GoodName"] = "CON_TIPO_SENSOR";
	$fdata["ownerTable"] = "tb_controle";
	$fdata["Label"] = GetFieldLabel("tb_controle","CON_TIPO_SENSOR");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CON_TIPO_SENSOR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CON_TIPO_SENSOR";

	
	
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


	$tdatatb_controle["CON_TIPO_SENSOR"] = $fdata;
		$tdatatb_controle[".searchableFields"][] = "CON_TIPO_SENSOR";


$tables_data["tb_controle"]=&$tdatatb_controle;
$field_labels["tb_controle"] = &$fieldLabelstb_controle;
$fieldToolTips["tb_controle"] = &$fieldToolTipstb_controle;
$placeHolders["tb_controle"] = &$placeHolderstb_controle;
$page_titles["tb_controle"] = &$pageTitlestb_controle;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_controle"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_controle"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_controle()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "CON_TIPO_SENSOR";
$proto0["m_strFrom"] = "FROM tb_controle";
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
	"m_strName" => "CON_TIPO_SENSOR",
	"m_strTable" => "tb_controle",
	"m_srcTableName" => "tb_controle"
));

$proto6["m_sql"] = "CON_TIPO_SENSOR";
$proto6["m_srcTableName"] = "tb_controle";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto8=array();
$proto8["m_link"] = "SQLL_MAIN";
			$proto9=array();
$proto9["m_strName"] = "tb_controle";
$proto9["m_srcTableName"] = "tb_controle";
$proto9["m_columns"] = array();
$proto9["m_columns"][] = "CON_TIPO_SENSOR";
$obj = new SQLTable($proto9);

$proto8["m_table"] = $obj;
$proto8["m_sql"] = "tb_controle";
$proto8["m_alias"] = "";
$proto8["m_srcTableName"] = "tb_controle";
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
$proto0["m_srcTableName"]="tb_controle";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_controle = createSqlQuery_tb_controle();


	
		;

	

$tdatatb_controle[".sqlquery"] = $queryData_tb_controle;



$tableEvents["tb_controle"] = new eventsBase;
$tdatatb_controle[".hasEvents"] = false;

?>