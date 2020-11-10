<?php
$tdatatb_agendamento = array();
$tdatatb_agendamento[".searchableFields"] = array();
$tdatatb_agendamento[".ShortName"] = "tb_agendamento";
$tdatatb_agendamento[".OwnerID"] = "";
$tdatatb_agendamento[".OriginalTable"] = "tb_agendamento";


$tdatatb_agendamento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_agendamento[".originalPagesByType"] = $tdatatb_agendamento[".pagesByType"];
$tdatatb_agendamento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_agendamento[".originalPages"] = $tdatatb_agendamento[".pages"];
$tdatatb_agendamento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_agendamento[".originalDefaultPages"] = $tdatatb_agendamento[".defaultPages"];

//	field labels
$fieldLabelstb_agendamento = array();
$fieldToolTipstb_agendamento = array();
$pageTitlestb_agendamento = array();
$placeHolderstb_agendamento = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_agendamento["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_agendamento["Portuguese(Brazil)"] = array();
	$placeHolderstb_agendamento["Portuguese(Brazil)"] = array();
	$pageTitlestb_agendamento["Portuguese(Brazil)"] = array();
	$fieldLabelstb_agendamento["Portuguese(Brazil)"]["AGE_ID"] = "ID";
	$fieldToolTipstb_agendamento["Portuguese(Brazil)"]["AGE_ID"] = "";
	$placeHolderstb_agendamento["Portuguese(Brazil)"]["AGE_ID"] = "";
	$fieldLabelstb_agendamento["Portuguese(Brazil)"]["AGE_DESCRICAO"] = "Descrição";
	$fieldToolTipstb_agendamento["Portuguese(Brazil)"]["AGE_DESCRICAO"] = "";
	$placeHolderstb_agendamento["Portuguese(Brazil)"]["AGE_DESCRICAO"] = "";
	$fieldLabelstb_agendamento["Portuguese(Brazil)"]["AGE_ASSUNTO"] = "Assunto";
	$fieldToolTipstb_agendamento["Portuguese(Brazil)"]["AGE_ASSUNTO"] = "";
	$placeHolderstb_agendamento["Portuguese(Brazil)"]["AGE_ASSUNTO"] = "";
	$fieldLabelstb_agendamento["Portuguese(Brazil)"]["AGE_DATA_INICIAL"] = "Data Inicial";
	$fieldToolTipstb_agendamento["Portuguese(Brazil)"]["AGE_DATA_INICIAL"] = "";
	$placeHolderstb_agendamento["Portuguese(Brazil)"]["AGE_DATA_INICIAL"] = "";
	$fieldLabelstb_agendamento["Portuguese(Brazil)"]["AGE_DATA_FINAL"] = "Data Final";
	$fieldToolTipstb_agendamento["Portuguese(Brazil)"]["AGE_DATA_FINAL"] = "";
	$placeHolderstb_agendamento["Portuguese(Brazil)"]["AGE_DATA_FINAL"] = "";
	if (count($fieldToolTipstb_agendamento["Portuguese(Brazil)"]))
		$tdatatb_agendamento[".isUseToolTips"] = true;
}


	$tdatatb_agendamento[".NCSearch"] = true;



$tdatatb_agendamento[".shortTableName"] = "tb_agendamento";
$tdatatb_agendamento[".nSecOptions"] = 0;

$tdatatb_agendamento[".mainTableOwnerID"] = "";
$tdatatb_agendamento[".entityType"] = 0;
$tdatatb_agendamento[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_agendamento[".strOriginalTableName"] = "tb_agendamento";

	



$tdatatb_agendamento[".showAddInPopup"] = false;

$tdatatb_agendamento[".showEditInPopup"] = false;

$tdatatb_agendamento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_agendamento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_agendamento[".listAjax"] = false;
//	temporary
$tdatatb_agendamento[".listAjax"] = false;

	$tdatatb_agendamento[".audit"] = true;

	$tdatatb_agendamento[".locking"] = true;


$pages = $tdatatb_agendamento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_agendamento[".edit"] = true;
	$tdatatb_agendamento[".afterEditAction"] = 1;
	$tdatatb_agendamento[".closePopupAfterEdit"] = 1;
	$tdatatb_agendamento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_agendamento[".add"] = true;
$tdatatb_agendamento[".afterAddAction"] = 1;
$tdatatb_agendamento[".closePopupAfterAdd"] = 1;
$tdatatb_agendamento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_agendamento[".list"] = true;
}



$tdatatb_agendamento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_agendamento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_agendamento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_agendamento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_agendamento[".printFriendly"] = true;
}



$tdatatb_agendamento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_agendamento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_agendamento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_agendamento[".isUseAjaxSuggest"] = true;

$tdatatb_agendamento[".rowHighlite"] = true;





$tdatatb_agendamento[".ajaxCodeSnippetAdded"] = false;

$tdatatb_agendamento[".buttonsAdded"] = false;

$tdatatb_agendamento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_agendamento[".isUseTimeForSearch"] = false;


$tdatatb_agendamento[".badgeColor"] = "9ACD32";


$tdatatb_agendamento[".allSearchFields"] = array();
$tdatatb_agendamento[".filterFields"] = array();
$tdatatb_agendamento[".requiredSearchFields"] = array();

$tdatatb_agendamento[".googleLikeFields"] = array();
$tdatatb_agendamento[".googleLikeFields"][] = "AGE_ID";
$tdatatb_agendamento[".googleLikeFields"][] = "AGE_DESCRICAO";
$tdatatb_agendamento[".googleLikeFields"][] = "AGE_ASSUNTO";
$tdatatb_agendamento[".googleLikeFields"][] = "AGE_DATA_INICIAL";
$tdatatb_agendamento[".googleLikeFields"][] = "AGE_DATA_FINAL";



$tdatatb_agendamento[".tableType"] = "list";

$tdatatb_agendamento[".printerPageOrientation"] = 0;
$tdatatb_agendamento[".nPrinterPageScale"] = 100;

$tdatatb_agendamento[".nPrinterSplitRecords"] = 40;

$tdatatb_agendamento[".geocodingEnabled"] = false;










$tdatatb_agendamento[".pageSize"] = 20;

$tdatatb_agendamento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_agendamento[".strOrderBy"] = $tstrOrderBy;

$tdatatb_agendamento[".orderindexes"] = array();


$tdatatb_agendamento[".sqlHead"] = "SELECT AGE_ID,  	AGE_DESCRICAO,  	AGE_ASSUNTO,  	AGE_DATA_INICIAL,  	AGE_DATA_FINAL";
$tdatatb_agendamento[".sqlFrom"] = "FROM tb_agendamento";
$tdatatb_agendamento[".sqlWhereExpr"] = "";
$tdatatb_agendamento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_agendamento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_agendamento[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_agendamento[".highlightSearchResults"] = true;

$tableKeystb_agendamento = array();
$tableKeystb_agendamento[] = "AGE_ID";
$tdatatb_agendamento[".Keys"] = $tableKeystb_agendamento;


$tdatatb_agendamento[".hideMobileList"] = array();




//	AGE_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "AGE_ID";
	$fdata["GoodName"] = "AGE_ID";
	$fdata["ownerTable"] = "tb_agendamento";
	$fdata["Label"] = GetFieldLabel("tb_agendamento","AGE_ID");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "AGE_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AGE_ID";

	
	
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatatb_agendamento["AGE_ID"] = $fdata;
		$tdatatb_agendamento[".searchableFields"][] = "AGE_ID";
//	AGE_DESCRICAO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "AGE_DESCRICAO";
	$fdata["GoodName"] = "AGE_DESCRICAO";
	$fdata["ownerTable"] = "tb_agendamento";
	$fdata["Label"] = GetFieldLabel("tb_agendamento","AGE_DESCRICAO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AGE_DESCRICAO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AGE_DESCRICAO";

	
	
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
			$edata["EditParams"].= " maxlength=250";

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


	$tdatatb_agendamento["AGE_DESCRICAO"] = $fdata;
		$tdatatb_agendamento[".searchableFields"][] = "AGE_DESCRICAO";
//	AGE_ASSUNTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AGE_ASSUNTO";
	$fdata["GoodName"] = "AGE_ASSUNTO";
	$fdata["ownerTable"] = "tb_agendamento";
	$fdata["Label"] = GetFieldLabel("tb_agendamento","AGE_ASSUNTO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "AGE_ASSUNTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AGE_ASSUNTO";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdatatb_agendamento["AGE_ASSUNTO"] = $fdata;
		$tdatatb_agendamento[".searchableFields"][] = "AGE_ASSUNTO";
//	AGE_DATA_INICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AGE_DATA_INICIAL";
	$fdata["GoodName"] = "AGE_DATA_INICIAL";
	$fdata["ownerTable"] = "tb_agendamento";
	$fdata["Label"] = GetFieldLabel("tb_agendamento","AGE_DATA_INICIAL");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "AGE_DATA_INICIAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AGE_DATA_INICIAL";

	
	
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


	$tdatatb_agendamento["AGE_DATA_INICIAL"] = $fdata;
		$tdatatb_agendamento[".searchableFields"][] = "AGE_DATA_INICIAL";
//	AGE_DATA_FINAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "AGE_DATA_FINAL";
	$fdata["GoodName"] = "AGE_DATA_FINAL";
	$fdata["ownerTable"] = "tb_agendamento";
	$fdata["Label"] = GetFieldLabel("tb_agendamento","AGE_DATA_FINAL");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "AGE_DATA_FINAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AGE_DATA_FINAL";

	
	
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


	$tdatatb_agendamento["AGE_DATA_FINAL"] = $fdata;
		$tdatatb_agendamento[".searchableFields"][] = "AGE_DATA_FINAL";


$tables_data["tb_agendamento"]=&$tdatatb_agendamento;
$field_labels["tb_agendamento"] = &$fieldLabelstb_agendamento;
$fieldToolTips["tb_agendamento"] = &$fieldToolTipstb_agendamento;
$placeHolders["tb_agendamento"] = &$placeHolderstb_agendamento;
$page_titles["tb_agendamento"] = &$pageTitlestb_agendamento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_agendamento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_agendamento"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_agendamento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "AGE_ID,  	AGE_DESCRICAO,  	AGE_ASSUNTO,  	AGE_DATA_INICIAL,  	AGE_DATA_FINAL";
$proto0["m_strFrom"] = "FROM tb_agendamento";
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
	"m_strName" => "AGE_ID",
	"m_strTable" => "tb_agendamento",
	"m_srcTableName" => "tb_agendamento"
));

$proto6["m_sql"] = "AGE_ID";
$proto6["m_srcTableName"] = "tb_agendamento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "AGE_DESCRICAO",
	"m_strTable" => "tb_agendamento",
	"m_srcTableName" => "tb_agendamento"
));

$proto8["m_sql"] = "AGE_DESCRICAO";
$proto8["m_srcTableName"] = "tb_agendamento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AGE_ASSUNTO",
	"m_strTable" => "tb_agendamento",
	"m_srcTableName" => "tb_agendamento"
));

$proto10["m_sql"] = "AGE_ASSUNTO";
$proto10["m_srcTableName"] = "tb_agendamento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AGE_DATA_INICIAL",
	"m_strTable" => "tb_agendamento",
	"m_srcTableName" => "tb_agendamento"
));

$proto12["m_sql"] = "AGE_DATA_INICIAL";
$proto12["m_srcTableName"] = "tb_agendamento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "AGE_DATA_FINAL",
	"m_strTable" => "tb_agendamento",
	"m_srcTableName" => "tb_agendamento"
));

$proto14["m_sql"] = "AGE_DATA_FINAL";
$proto14["m_srcTableName"] = "tb_agendamento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tb_agendamento";
$proto17["m_srcTableName"] = "tb_agendamento";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "AGE_ID";
$proto17["m_columns"][] = "AGE_DESCRICAO";
$proto17["m_columns"][] = "AGE_ASSUNTO";
$proto17["m_columns"][] = "AGE_DATA_INICIAL";
$proto17["m_columns"][] = "AGE_DATA_FINAL";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tb_agendamento";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tb_agendamento";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_agendamento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_agendamento = createSqlQuery_tb_agendamento();


	
		;

					

$tdatatb_agendamento[".sqlquery"] = $queryData_tb_agendamento;



$tableEvents["tb_agendamento"] = new eventsBase;
$tdatatb_agendamento[".hasEvents"] = false;

?>