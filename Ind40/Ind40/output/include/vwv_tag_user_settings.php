<?php
$tdatavwv_tag_user = array();
$tdatavwv_tag_user[".searchableFields"] = array();
$tdatavwv_tag_user[".ShortName"] = "vwv_tag_user";
$tdatavwv_tag_user[".OwnerID"] = "";
$tdatavwv_tag_user[".OriginalTable"] = "vwv_tag_user";


$tdatavwv_tag_user[".pagesByType"] = my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" );
$tdatavwv_tag_user[".originalPagesByType"] = $tdatavwv_tag_user[".pagesByType"];
$tdatavwv_tag_user[".pages"] = types2pages( my_json_decode( "{\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"]}" ) );
$tdatavwv_tag_user[".originalPages"] = $tdatavwv_tag_user[".pages"];
$tdatavwv_tag_user[".defaultPages"] = my_json_decode( "{\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\"}" );
$tdatavwv_tag_user[".originalDefaultPages"] = $tdatavwv_tag_user[".defaultPages"];

//	field labels
$fieldLabelsvwv_tag_user = array();
$fieldToolTipsvwv_tag_user = array();
$pageTitlesvwv_tag_user = array();
$placeHoldersvwv_tag_user = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsvwv_tag_user["Portuguese(Brazil)"] = array();
	$fieldToolTipsvwv_tag_user["Portuguese(Brazil)"] = array();
	$placeHoldersvwv_tag_user["Portuguese(Brazil)"] = array();
	$pageTitlesvwv_tag_user["Portuguese(Brazil)"] = array();
	$fieldLabelsvwv_tag_user["Portuguese(Brazil)"]["Nome_do_Equipamento"] = "Nome do Equipamento";
	$fieldToolTipsvwv_tag_user["Portuguese(Brazil)"]["Nome_do_Equipamento"] = "";
	$placeHoldersvwv_tag_user["Portuguese(Brazil)"]["Nome_do_Equipamento"] = "";
	$fieldLabelsvwv_tag_user["Portuguese(Brazil)"]["Nome_do_usu_rio"] = "Nome do usuário";
	$fieldToolTipsvwv_tag_user["Portuguese(Brazil)"]["Nome_do_usu_rio"] = "";
	$placeHoldersvwv_tag_user["Portuguese(Brazil)"]["Nome_do_usu_rio"] = "";
	if (count($fieldToolTipsvwv_tag_user["Portuguese(Brazil)"]))
		$tdatavwv_tag_user[".isUseToolTips"] = true;
}


	$tdatavwv_tag_user[".NCSearch"] = true;



$tdatavwv_tag_user[".shortTableName"] = "vwv_tag_user";
$tdatavwv_tag_user[".nSecOptions"] = 0;

$tdatavwv_tag_user[".mainTableOwnerID"] = "";
$tdatavwv_tag_user[".entityType"] = 0;
$tdatavwv_tag_user[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatavwv_tag_user[".strOriginalTableName"] = "vwv_tag_user";

	



$tdatavwv_tag_user[".showAddInPopup"] = false;

$tdatavwv_tag_user[".showEditInPopup"] = false;

$tdatavwv_tag_user[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatavwv_tag_user[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatavwv_tag_user[".listAjax"] = false;
//	temporary
$tdatavwv_tag_user[".listAjax"] = false;

	$tdatavwv_tag_user[".audit"] = true;

	$tdatavwv_tag_user[".locking"] = false;


$pages = $tdatavwv_tag_user[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatavwv_tag_user[".edit"] = true;
	$tdatavwv_tag_user[".afterEditAction"] = 1;
	$tdatavwv_tag_user[".closePopupAfterEdit"] = 1;
	$tdatavwv_tag_user[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatavwv_tag_user[".add"] = true;
$tdatavwv_tag_user[".afterAddAction"] = 1;
$tdatavwv_tag_user[".closePopupAfterAdd"] = 1;
$tdatavwv_tag_user[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatavwv_tag_user[".list"] = true;
}



$tdatavwv_tag_user[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatavwv_tag_user[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatavwv_tag_user[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatavwv_tag_user[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatavwv_tag_user[".printFriendly"] = true;
}



$tdatavwv_tag_user[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatavwv_tag_user[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatavwv_tag_user[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatavwv_tag_user[".isUseAjaxSuggest"] = true;

$tdatavwv_tag_user[".rowHighlite"] = true;





$tdatavwv_tag_user[".ajaxCodeSnippetAdded"] = false;

$tdatavwv_tag_user[".buttonsAdded"] = false;

$tdatavwv_tag_user[".addPageEvents"] = false;

// use timepicker for search panel
$tdatavwv_tag_user[".isUseTimeForSearch"] = false;


$tdatavwv_tag_user[".badgeColor"] = "D2691E";


$tdatavwv_tag_user[".allSearchFields"] = array();
$tdatavwv_tag_user[".filterFields"] = array();
$tdatavwv_tag_user[".requiredSearchFields"] = array();

$tdatavwv_tag_user[".googleLikeFields"] = array();
$tdatavwv_tag_user[".googleLikeFields"][] = "Nome do Equipamento";
$tdatavwv_tag_user[".googleLikeFields"][] = "Nome do usuário";



$tdatavwv_tag_user[".tableType"] = "list";

$tdatavwv_tag_user[".printerPageOrientation"] = 0;
$tdatavwv_tag_user[".nPrinterPageScale"] = 100;

$tdatavwv_tag_user[".nPrinterSplitRecords"] = 40;

$tdatavwv_tag_user[".geocodingEnabled"] = false;










$tdatavwv_tag_user[".pageSize"] = 20;

$tdatavwv_tag_user[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatavwv_tag_user[".strOrderBy"] = $tstrOrderBy;

$tdatavwv_tag_user[".orderindexes"] = array();


$tdatavwv_tag_user[".sqlHead"] = "SELECT `Nome do Equipamento`,  	`Nome do usuário`";
$tdatavwv_tag_user[".sqlFrom"] = "FROM vwv_tag_user";
$tdatavwv_tag_user[".sqlWhereExpr"] = "";
$tdatavwv_tag_user[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatavwv_tag_user[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatavwv_tag_user[".arrGroupsPerPage"] = $arrGPP;

$tdatavwv_tag_user[".highlightSearchResults"] = true;

$tableKeysvwv_tag_user = array();
$tdatavwv_tag_user[".Keys"] = $tableKeysvwv_tag_user;


$tdatavwv_tag_user[".hideMobileList"] = array();




//	Nome do Equipamento
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Nome do Equipamento";
	$fdata["GoodName"] = "Nome_do_Equipamento";
	$fdata["ownerTable"] = "vwv_tag_user";
	$fdata["Label"] = GetFieldLabel("vwv_tag_user","Nome_do_Equipamento");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nome do Equipamento";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nome do Equipamento`";

	
	
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
			$edata["EditParams"].= " maxlength=55";

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


	$tdatavwv_tag_user["Nome do Equipamento"] = $fdata;
		$tdatavwv_tag_user[".searchableFields"][] = "Nome do Equipamento";
//	Nome do usuário
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Nome do usuário";
	$fdata["GoodName"] = "Nome_do_usu_rio";
	$fdata["ownerTable"] = "vwv_tag_user";
	$fdata["Label"] = GetFieldLabel("vwv_tag_user","Nome_do_usu_rio");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "Nome do usuário";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Nome do usuário`";

	
	
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


	$tdatavwv_tag_user["Nome do usuário"] = $fdata;
		$tdatavwv_tag_user[".searchableFields"][] = "Nome do usuário";


$tables_data["vwv_tag_user"]=&$tdatavwv_tag_user;
$field_labels["vwv_tag_user"] = &$fieldLabelsvwv_tag_user;
$fieldToolTips["vwv_tag_user"] = &$fieldToolTipsvwv_tag_user;
$placeHolders["vwv_tag_user"] = &$placeHoldersvwv_tag_user;
$page_titles["vwv_tag_user"] = &$pageTitlesvwv_tag_user;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["vwv_tag_user"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["vwv_tag_user"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_vwv_tag_user()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "`Nome do Equipamento`,  	`Nome do usuário`";
$proto0["m_strFrom"] = "FROM vwv_tag_user";
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
	"m_strName" => "Nome do Equipamento",
	"m_strTable" => "vwv_tag_user",
	"m_srcTableName" => "vwv_tag_user"
));

$proto6["m_sql"] = "`Nome do Equipamento`";
$proto6["m_srcTableName"] = "vwv_tag_user";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Nome do usuário",
	"m_strTable" => "vwv_tag_user",
	"m_srcTableName" => "vwv_tag_user"
));

$proto8["m_sql"] = "`Nome do usuário`";
$proto8["m_srcTableName"] = "vwv_tag_user";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "vwv_tag_user";
$proto11["m_srcTableName"] = "vwv_tag_user";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "Nome do Equipamento";
$proto11["m_columns"][] = "Nome do usuário";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "vwv_tag_user";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "vwv_tag_user";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="vwv_tag_user";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_vwv_tag_user = createSqlQuery_vwv_tag_user();


	
		;

		

$tdatavwv_tag_user[".sqlquery"] = $queryData_vwv_tag_user;



$tableEvents["vwv_tag_user"] = new eventsBase;
$tdatavwv_tag_user[".hasEvents"] = false;

?>