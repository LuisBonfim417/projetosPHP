<?php
$tdatatb_monitoramento = array();
$tdatatb_monitoramento[".searchableFields"] = array();
$tdatatb_monitoramento[".ShortName"] = "tb_monitoramento";
$tdatatb_monitoramento[".OwnerID"] = "";
$tdatatb_monitoramento[".OriginalTable"] = "tb_monitoramento";


$tdatatb_monitoramento[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_monitoramento[".originalPagesByType"] = $tdatatb_monitoramento[".pagesByType"];
$tdatatb_monitoramento[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_monitoramento[".originalPages"] = $tdatatb_monitoramento[".pages"];
$tdatatb_monitoramento[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_monitoramento[".originalDefaultPages"] = $tdatatb_monitoramento[".defaultPages"];

//	field labels
$fieldLabelstb_monitoramento = array();
$fieldToolTipstb_monitoramento = array();
$pageTitlestb_monitoramento = array();
$placeHolderstb_monitoramento = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"] = array();
	$placeHolderstb_monitoramento["Portuguese(Brazil)"] = array();
	$pageTitlestb_monitoramento["Portuguese(Brazil)"] = array();
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_ID"] = "MON ID";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_ID"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_ID"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_DATA"] = "MON DATA";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_DATA"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_DATA"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_HORA"] = "MON HORA";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_HORA"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_HORA"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_TAG"] = "MON TAG";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_TAG"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_TAG"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_USER"] = "MON USER";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_USER"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_USER"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_LOCAL"] = "MON LOCAL";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_LOCAL"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_LOCAL"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_UMID"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_CONT_EVENTO"] = "MON CONT EVENTO";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_CONT_EVENTO"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_CONT_EVENTO"] = "";
	$fieldLabelstb_monitoramento["Portuguese(Brazil)"]["MON_PAG"] = "MON PAG";
	$fieldToolTipstb_monitoramento["Portuguese(Brazil)"]["MON_PAG"] = "";
	$placeHolderstb_monitoramento["Portuguese(Brazil)"]["MON_PAG"] = "";
	if (count($fieldToolTipstb_monitoramento["Portuguese(Brazil)"]))
		$tdatatb_monitoramento[".isUseToolTips"] = true;
}


	$tdatatb_monitoramento[".NCSearch"] = true;



$tdatatb_monitoramento[".shortTableName"] = "tb_monitoramento";
$tdatatb_monitoramento[".nSecOptions"] = 0;

$tdatatb_monitoramento[".mainTableOwnerID"] = "";
$tdatatb_monitoramento[".entityType"] = 0;
$tdatatb_monitoramento[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_monitoramento[".strOriginalTableName"] = "tb_monitoramento";

	



$tdatatb_monitoramento[".showAddInPopup"] = false;

$tdatatb_monitoramento[".showEditInPopup"] = false;

$tdatatb_monitoramento[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_monitoramento[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_monitoramento[".listAjax"] = false;
//	temporary
$tdatatb_monitoramento[".listAjax"] = false;

	$tdatatb_monitoramento[".audit"] = true;

	$tdatatb_monitoramento[".locking"] = false;


$pages = $tdatatb_monitoramento[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_monitoramento[".edit"] = true;
	$tdatatb_monitoramento[".afterEditAction"] = 1;
	$tdatatb_monitoramento[".closePopupAfterEdit"] = 1;
	$tdatatb_monitoramento[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_monitoramento[".add"] = true;
$tdatatb_monitoramento[".afterAddAction"] = 1;
$tdatatb_monitoramento[".closePopupAfterAdd"] = 1;
$tdatatb_monitoramento[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_monitoramento[".list"] = true;
}



$tdatatb_monitoramento[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_monitoramento[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_monitoramento[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_monitoramento[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_monitoramento[".printFriendly"] = true;
}



$tdatatb_monitoramento[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_monitoramento[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_monitoramento[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_monitoramento[".isUseAjaxSuggest"] = true;

$tdatatb_monitoramento[".rowHighlite"] = true;





$tdatatb_monitoramento[".ajaxCodeSnippetAdded"] = false;

$tdatatb_monitoramento[".buttonsAdded"] = false;

$tdatatb_monitoramento[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_monitoramento[".isUseTimeForSearch"] = false;


$tdatatb_monitoramento[".badgeColor"] = "dc143c";


$tdatatb_monitoramento[".allSearchFields"] = array();
$tdatatb_monitoramento[".filterFields"] = array();
$tdatatb_monitoramento[".requiredSearchFields"] = array();

$tdatatb_monitoramento[".googleLikeFields"] = array();
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_ID";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_DATA";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_HORA";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_TAG";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_USER";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_LOCAL";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_TEMP";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_UMID";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_CONT_EVENTO";
$tdatatb_monitoramento[".googleLikeFields"][] = "MON_PAG";



$tdatatb_monitoramento[".tableType"] = "list";

$tdatatb_monitoramento[".printerPageOrientation"] = 0;
$tdatatb_monitoramento[".nPrinterPageScale"] = 100;

$tdatatb_monitoramento[".nPrinterSplitRecords"] = 40;

$tdatatb_monitoramento[".geocodingEnabled"] = false;










$tdatatb_monitoramento[".pageSize"] = 20;

$tdatatb_monitoramento[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_monitoramento[".strOrderBy"] = $tstrOrderBy;

$tdatatb_monitoramento[".orderindexes"] = array();


$tdatatb_monitoramento[".sqlHead"] = "SELECT MON_ID,  	MON_DATA,  	MON_HORA,  	MON_TAG,  	MON_USER,  	MON_LOCAL,  	MON_TEMP,  	MON_UMID,  	MON_CONT_EVENTO,  	MON_PAG";
$tdatatb_monitoramento[".sqlFrom"] = "FROM tb_monitoramento";
$tdatatb_monitoramento[".sqlWhereExpr"] = "";
$tdatatb_monitoramento[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_monitoramento[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_monitoramento[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_monitoramento[".highlightSearchResults"] = true;

$tableKeystb_monitoramento = array();
$tableKeystb_monitoramento[] = "MON_ID";
$tdatatb_monitoramento[".Keys"] = $tableKeystb_monitoramento;


$tdatatb_monitoramento[".hideMobileList"] = array();




//	MON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MON_ID";
	$fdata["GoodName"] = "MON_ID";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_ID");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "MON_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_ID";

	
	
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


	$tdatatb_monitoramento["MON_ID"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_ID";
//	MON_DATA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_DATA";
	$fdata["GoodName"] = "MON_DATA";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_DATA");
	$fdata["FieldType"] = 7;

	
	
	
			

		$fdata["strField"] = "MON_DATA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_DATA";

	
	
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


	$tdatatb_monitoramento["MON_DATA"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_DATA";
//	MON_HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_HORA";
	$fdata["GoodName"] = "MON_HORA";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_HORA");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "MON_HORA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_HORA";

	
	
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


	$tdatatb_monitoramento["MON_HORA"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_HORA";
//	MON_TAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "MON_TAG";
	$fdata["GoodName"] = "MON_TAG";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_TAG");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "MON_TAG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_TAG";

	
	
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


	$tdatatb_monitoramento["MON_TAG"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_TAG";
//	MON_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MON_USER";
	$fdata["GoodName"] = "MON_USER";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_USER");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "MON_USER";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_USER";

	
	
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


	$tdatatb_monitoramento["MON_USER"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_USER";
//	MON_LOCAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "MON_LOCAL";
	$fdata["GoodName"] = "MON_LOCAL";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_LOCAL");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "MON_LOCAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_LOCAL";

	
	
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


	$tdatatb_monitoramento["MON_LOCAL"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_LOCAL";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_TEMP");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_TEMP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_TEMP";

	
	
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


	$tdatatb_monitoramento["MON_TEMP"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_UMID");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_UMID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_UMID";

	
	
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


	$tdatatb_monitoramento["MON_UMID"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_UMID";
//	MON_CONT_EVENTO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MON_CONT_EVENTO";
	$fdata["GoodName"] = "MON_CONT_EVENTO";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_CONT_EVENTO");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "MON_CONT_EVENTO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_CONT_EVENTO";

	
	
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


	$tdatatb_monitoramento["MON_CONT_EVENTO"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_CONT_EVENTO";
//	MON_PAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "MON_PAG";
	$fdata["GoodName"] = "MON_PAG";
	$fdata["ownerTable"] = "tb_monitoramento";
	$fdata["Label"] = GetFieldLabel("tb_monitoramento","MON_PAG");
	$fdata["FieldType"] = 2;

	
	
	
			

		$fdata["strField"] = "MON_PAG";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_PAG";

	
	
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


	$tdatatb_monitoramento["MON_PAG"] = $fdata;
		$tdatatb_monitoramento[".searchableFields"][] = "MON_PAG";


$tables_data["tb_monitoramento"]=&$tdatatb_monitoramento;
$field_labels["tb_monitoramento"] = &$fieldLabelstb_monitoramento;
$fieldToolTips["tb_monitoramento"] = &$fieldToolTipstb_monitoramento;
$placeHolders["tb_monitoramento"] = &$placeHolderstb_monitoramento;
$page_titles["tb_monitoramento"] = &$pageTitlestb_monitoramento;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_monitoramento"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_monitoramento"] = array();



	
				$strOriginalDetailsTable="tb_setpoing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_setpoing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_setpoing";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_monitoramento"][0] = $masterParams;
				$masterTablesData["tb_monitoramento"][0]["masterKeys"] = array();
	$masterTablesData["tb_monitoramento"][0]["masterKeys"][]="MON_TAG";
				$masterTablesData["tb_monitoramento"][0]["detailKeys"] = array();
	$masterTablesData["tb_monitoramento"][0]["detailKeys"][]="MON_TAG";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_monitoramento()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MON_ID,  	MON_DATA,  	MON_HORA,  	MON_TAG,  	MON_USER,  	MON_LOCAL,  	MON_TEMP,  	MON_UMID,  	MON_CONT_EVENTO,  	MON_PAG";
$proto0["m_strFrom"] = "FROM tb_monitoramento";
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
	"m_strName" => "MON_ID",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto6["m_sql"] = "MON_ID";
$proto6["m_srcTableName"] = "tb_monitoramento";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_DATA",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto8["m_sql"] = "MON_DATA";
$proto8["m_srcTableName"] = "tb_monitoramento";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_HORA",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto10["m_sql"] = "MON_HORA";
$proto10["m_srcTableName"] = "tb_monitoramento";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TAG",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto12["m_sql"] = "MON_TAG";
$proto12["m_srcTableName"] = "tb_monitoramento";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_USER",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto14["m_sql"] = "MON_USER";
$proto14["m_srcTableName"] = "tb_monitoramento";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_LOCAL",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto16["m_sql"] = "MON_LOCAL";
$proto16["m_srcTableName"] = "tb_monitoramento";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto18["m_sql"] = "MON_TEMP";
$proto18["m_srcTableName"] = "tb_monitoramento";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto20["m_sql"] = "MON_UMID";
$proto20["m_srcTableName"] = "tb_monitoramento";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_CONT_EVENTO",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto22["m_sql"] = "MON_CONT_EVENTO";
$proto22["m_srcTableName"] = "tb_monitoramento";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_PAG",
	"m_strTable" => "tb_monitoramento",
	"m_srcTableName" => "tb_monitoramento"
));

$proto24["m_sql"] = "MON_PAG";
$proto24["m_srcTableName"] = "tb_monitoramento";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto26=array();
$proto26["m_link"] = "SQLL_MAIN";
			$proto27=array();
$proto27["m_strName"] = "tb_monitoramento";
$proto27["m_srcTableName"] = "tb_monitoramento";
$proto27["m_columns"] = array();
$proto27["m_columns"][] = "MON_ID";
$proto27["m_columns"][] = "MON_DATA";
$proto27["m_columns"][] = "MON_HORA";
$proto27["m_columns"][] = "MON_TAG";
$proto27["m_columns"][] = "MON_USER";
$proto27["m_columns"][] = "MON_LOCAL";
$proto27["m_columns"][] = "MON_TEMP";
$proto27["m_columns"][] = "MON_UMID";
$proto27["m_columns"][] = "MON_CONT_EVENTO";
$proto27["m_columns"][] = "MON_PAG";
$obj = new SQLTable($proto27);

$proto26["m_table"] = $obj;
$proto26["m_sql"] = "tb_monitoramento";
$proto26["m_alias"] = "";
$proto26["m_srcTableName"] = "tb_monitoramento";
$proto28=array();
$proto28["m_sql"] = "";
$proto28["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto28["m_column"]=$obj;
$proto28["m_contained"] = array();
$proto28["m_strCase"] = "";
$proto28["m_havingmode"] = false;
$proto28["m_inBrackets"] = false;
$proto28["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto28);

$proto26["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto26);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_monitoramento";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_monitoramento = createSqlQuery_tb_monitoramento();


	
		;

										

$tdatatb_monitoramento[".sqlquery"] = $queryData_tb_monitoramento;



$tableEvents["tb_monitoramento"] = new eventsBase;
$tdatatb_monitoramento[".hasEvents"] = false;

?>