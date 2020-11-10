<?php
$tdatatb_setpoint_bloqueia = array();
$tdatatb_setpoint_bloqueia[".searchableFields"] = array();
$tdatatb_setpoint_bloqueia[".ShortName"] = "tb_setpoint_bloqueia";
$tdatatb_setpoint_bloqueia[".OwnerID"] = "";
$tdatatb_setpoint_bloqueia[".OriginalTable"] = "tb_setpoint_bloqueia";


$tdatatb_setpoint_bloqueia[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_setpoint_bloqueia[".originalPagesByType"] = $tdatatb_setpoint_bloqueia[".pagesByType"];
$tdatatb_setpoint_bloqueia[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_setpoint_bloqueia[".originalPages"] = $tdatatb_setpoint_bloqueia[".pages"];
$tdatatb_setpoint_bloqueia[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_setpoint_bloqueia[".originalDefaultPages"] = $tdatatb_setpoint_bloqueia[".defaultPages"];

//	field labels
$fieldLabelstb_setpoint_bloqueia = array();
$fieldToolTipstb_setpoint_bloqueia = array();
$pageTitlestb_setpoint_bloqueia = array();
$placeHolderstb_setpoint_bloqueia = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_setpoint_bloqueia["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_setpoint_bloqueia["Portuguese(Brazil)"] = array();
	$placeHolderstb_setpoint_bloqueia["Portuguese(Brazil)"] = array();
	$pageTitlestb_setpoint_bloqueia["Portuguese(Brazil)"] = array();
	$fieldLabelstb_setpoint_bloqueia["Portuguese(Brazil)"]["MON_TAG"] = "MON TAG";
	$fieldToolTipstb_setpoint_bloqueia["Portuguese(Brazil)"]["MON_TAG"] = "";
	$placeHolderstb_setpoint_bloqueia["Portuguese(Brazil)"]["MON_TAG"] = "";
	$fieldLabelstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_DATA_INICAL"] = "SET BLOQUEADO DATA INICAL";
	$fieldToolTipstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_DATA_INICAL"] = "";
	$placeHolderstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_DATA_INICAL"] = "";
	$fieldLabelstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_HORA_INICIAL"] = "SET BLOQUEADO HORA INICIAL";
	$fieldToolTipstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_HORA_INICIAL"] = "";
	$placeHolderstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_HORA_INICIAL"] = "";
	$fieldLabelstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_DATA_FINAL"] = "SET BLOQUEADO DATA FINAL";
	$fieldToolTipstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_DATA_FINAL"] = "";
	$placeHolderstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_DATA_FINAL"] = "";
	$fieldLabelstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_HORA_FINAL"] = "SET BLOQUEADO HORA FINAL";
	$fieldToolTipstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_HORA_FINAL"] = "";
	$placeHolderstb_setpoint_bloqueia["Portuguese(Brazil)"]["SET_BLOQUEADO_HORA_FINAL"] = "";
	if (count($fieldToolTipstb_setpoint_bloqueia["Portuguese(Brazil)"]))
		$tdatatb_setpoint_bloqueia[".isUseToolTips"] = true;
}


	$tdatatb_setpoint_bloqueia[".NCSearch"] = true;



$tdatatb_setpoint_bloqueia[".shortTableName"] = "tb_setpoint_bloqueia";
$tdatatb_setpoint_bloqueia[".nSecOptions"] = 0;

$tdatatb_setpoint_bloqueia[".mainTableOwnerID"] = "";
$tdatatb_setpoint_bloqueia[".entityType"] = 0;
$tdatatb_setpoint_bloqueia[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_setpoint_bloqueia[".strOriginalTableName"] = "tb_setpoint_bloqueia";

	



$tdatatb_setpoint_bloqueia[".showAddInPopup"] = false;

$tdatatb_setpoint_bloqueia[".showEditInPopup"] = false;

$tdatatb_setpoint_bloqueia[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_setpoint_bloqueia[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_setpoint_bloqueia[".listAjax"] = false;
//	temporary
$tdatatb_setpoint_bloqueia[".listAjax"] = false;

	$tdatatb_setpoint_bloqueia[".audit"] = true;

	$tdatatb_setpoint_bloqueia[".locking"] = false;


$pages = $tdatatb_setpoint_bloqueia[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_setpoint_bloqueia[".edit"] = true;
	$tdatatb_setpoint_bloqueia[".afterEditAction"] = 1;
	$tdatatb_setpoint_bloqueia[".closePopupAfterEdit"] = 1;
	$tdatatb_setpoint_bloqueia[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_setpoint_bloqueia[".add"] = true;
$tdatatb_setpoint_bloqueia[".afterAddAction"] = 1;
$tdatatb_setpoint_bloqueia[".closePopupAfterAdd"] = 1;
$tdatatb_setpoint_bloqueia[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_setpoint_bloqueia[".list"] = true;
}



$tdatatb_setpoint_bloqueia[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_setpoint_bloqueia[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_setpoint_bloqueia[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_setpoint_bloqueia[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_setpoint_bloqueia[".printFriendly"] = true;
}



$tdatatb_setpoint_bloqueia[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_setpoint_bloqueia[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_setpoint_bloqueia[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_setpoint_bloqueia[".isUseAjaxSuggest"] = true;

$tdatatb_setpoint_bloqueia[".rowHighlite"] = true;





$tdatatb_setpoint_bloqueia[".ajaxCodeSnippetAdded"] = false;

$tdatatb_setpoint_bloqueia[".buttonsAdded"] = false;

$tdatatb_setpoint_bloqueia[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_setpoint_bloqueia[".isUseTimeForSearch"] = false;


$tdatatb_setpoint_bloqueia[".badgeColor"] = "6B8E23";


$tdatatb_setpoint_bloqueia[".allSearchFields"] = array();
$tdatatb_setpoint_bloqueia[".filterFields"] = array();
$tdatatb_setpoint_bloqueia[".requiredSearchFields"] = array();

$tdatatb_setpoint_bloqueia[".googleLikeFields"] = array();
$tdatatb_setpoint_bloqueia[".googleLikeFields"][] = "MON_TAG";
$tdatatb_setpoint_bloqueia[".googleLikeFields"][] = "SET_BLOQUEADO_DATA_INICAL";
$tdatatb_setpoint_bloqueia[".googleLikeFields"][] = "SET_BLOQUEADO_HORA_INICIAL";
$tdatatb_setpoint_bloqueia[".googleLikeFields"][] = "SET_BLOQUEADO_DATA_FINAL";
$tdatatb_setpoint_bloqueia[".googleLikeFields"][] = "SET_BLOQUEADO_HORA_FINAL";



$tdatatb_setpoint_bloqueia[".tableType"] = "list";

$tdatatb_setpoint_bloqueia[".printerPageOrientation"] = 0;
$tdatatb_setpoint_bloqueia[".nPrinterPageScale"] = 100;

$tdatatb_setpoint_bloqueia[".nPrinterSplitRecords"] = 40;

$tdatatb_setpoint_bloqueia[".geocodingEnabled"] = false;










$tdatatb_setpoint_bloqueia[".pageSize"] = 20;

$tdatatb_setpoint_bloqueia[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_setpoint_bloqueia[".strOrderBy"] = $tstrOrderBy;

$tdatatb_setpoint_bloqueia[".orderindexes"] = array();


$tdatatb_setpoint_bloqueia[".sqlHead"] = "SELECT MON_TAG,  	SET_BLOQUEADO_DATA_INICAL,  	SET_BLOQUEADO_HORA_INICIAL,  	SET_BLOQUEADO_DATA_FINAL,  	SET_BLOQUEADO_HORA_FINAL";
$tdatatb_setpoint_bloqueia[".sqlFrom"] = "FROM tb_setpoint_bloqueia";
$tdatatb_setpoint_bloqueia[".sqlWhereExpr"] = "";
$tdatatb_setpoint_bloqueia[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_setpoint_bloqueia[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_setpoint_bloqueia[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_setpoint_bloqueia[".highlightSearchResults"] = true;

$tableKeystb_setpoint_bloqueia = array();
$tableKeystb_setpoint_bloqueia[] = "MON_TAG";
$tableKeystb_setpoint_bloqueia[] = "SET_BLOQUEADO_DATA_INICAL";
$tdatatb_setpoint_bloqueia[".Keys"] = $tableKeystb_setpoint_bloqueia;


$tdatatb_setpoint_bloqueia[".hideMobileList"] = array();




//	MON_TAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MON_TAG";
	$fdata["GoodName"] = "MON_TAG";
	$fdata["ownerTable"] = "tb_setpoint_bloqueia";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_bloqueia","MON_TAG");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_setpoing";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "MON_TAG";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "MON_TAG";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatatb_setpoint_bloqueia["MON_TAG"] = $fdata;
		$tdatatb_setpoint_bloqueia[".searchableFields"][] = "MON_TAG";
//	SET_BLOQUEADO_DATA_INICAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "SET_BLOQUEADO_DATA_INICAL";
	$fdata["GoodName"] = "SET_BLOQUEADO_DATA_INICAL";
	$fdata["ownerTable"] = "tb_setpoint_bloqueia";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_bloqueia","SET_BLOQUEADO_DATA_INICAL");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SET_BLOQUEADO_DATA_INICAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_BLOQUEADO_DATA_INICAL";

	
	
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


	$tdatatb_setpoint_bloqueia["SET_BLOQUEADO_DATA_INICAL"] = $fdata;
		$tdatatb_setpoint_bloqueia[".searchableFields"][] = "SET_BLOQUEADO_DATA_INICAL";
//	SET_BLOQUEADO_HORA_INICIAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SET_BLOQUEADO_HORA_INICIAL";
	$fdata["GoodName"] = "SET_BLOQUEADO_HORA_INICIAL";
	$fdata["ownerTable"] = "tb_setpoint_bloqueia";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_bloqueia","SET_BLOQUEADO_HORA_INICIAL");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SET_BLOQUEADO_HORA_INICIAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_BLOQUEADO_HORA_INICIAL";

	
	
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


	$tdatatb_setpoint_bloqueia["SET_BLOQUEADO_HORA_INICIAL"] = $fdata;
		$tdatatb_setpoint_bloqueia[".searchableFields"][] = "SET_BLOQUEADO_HORA_INICIAL";
//	SET_BLOQUEADO_DATA_FINAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SET_BLOQUEADO_DATA_FINAL";
	$fdata["GoodName"] = "SET_BLOQUEADO_DATA_FINAL";
	$fdata["ownerTable"] = "tb_setpoint_bloqueia";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_bloqueia","SET_BLOQUEADO_DATA_FINAL");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SET_BLOQUEADO_DATA_FINAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_BLOQUEADO_DATA_FINAL";

	
	
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


	$tdatatb_setpoint_bloqueia["SET_BLOQUEADO_DATA_FINAL"] = $fdata;
		$tdatatb_setpoint_bloqueia[".searchableFields"][] = "SET_BLOQUEADO_DATA_FINAL";
//	SET_BLOQUEADO_HORA_FINAL
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SET_BLOQUEADO_HORA_FINAL";
	$fdata["GoodName"] = "SET_BLOQUEADO_HORA_FINAL";
	$fdata["ownerTable"] = "tb_setpoint_bloqueia";
	$fdata["Label"] = GetFieldLabel("tb_setpoint_bloqueia","SET_BLOQUEADO_HORA_FINAL");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SET_BLOQUEADO_HORA_FINAL";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_BLOQUEADO_HORA_FINAL";

	
	
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


	$tdatatb_setpoint_bloqueia["SET_BLOQUEADO_HORA_FINAL"] = $fdata;
		$tdatatb_setpoint_bloqueia[".searchableFields"][] = "SET_BLOQUEADO_HORA_FINAL";


$tables_data["tb_setpoint_bloqueia"]=&$tdatatb_setpoint_bloqueia;
$field_labels["tb_setpoint_bloqueia"] = &$fieldLabelstb_setpoint_bloqueia;
$fieldToolTips["tb_setpoint_bloqueia"] = &$fieldToolTipstb_setpoint_bloqueia;
$placeHolders["tb_setpoint_bloqueia"] = &$placeHolderstb_setpoint_bloqueia;
$page_titles["tb_setpoint_bloqueia"] = &$pageTitlestb_setpoint_bloqueia;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_setpoint_bloqueia"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_setpoint_bloqueia"] = array();



	
				$strOriginalDetailsTable="tb_setpoing";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_setpoing";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_setpoing";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_setpoint_bloqueia"][0] = $masterParams;
				$masterTablesData["tb_setpoint_bloqueia"][0]["masterKeys"] = array();
	$masterTablesData["tb_setpoint_bloqueia"][0]["masterKeys"][]="MON_TAG";
				$masterTablesData["tb_setpoint_bloqueia"][0]["detailKeys"] = array();
	$masterTablesData["tb_setpoint_bloqueia"][0]["detailKeys"][]="MON_TAG";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_setpoint_bloqueia()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MON_TAG,  	SET_BLOQUEADO_DATA_INICAL,  	SET_BLOQUEADO_HORA_INICIAL,  	SET_BLOQUEADO_DATA_FINAL,  	SET_BLOQUEADO_HORA_FINAL";
$proto0["m_strFrom"] = "FROM tb_setpoint_bloqueia";
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
	"m_strName" => "MON_TAG",
	"m_strTable" => "tb_setpoint_bloqueia",
	"m_srcTableName" => "tb_setpoint_bloqueia"
));

$proto6["m_sql"] = "MON_TAG";
$proto6["m_srcTableName"] = "tb_setpoint_bloqueia";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_BLOQUEADO_DATA_INICAL",
	"m_strTable" => "tb_setpoint_bloqueia",
	"m_srcTableName" => "tb_setpoint_bloqueia"
));

$proto8["m_sql"] = "SET_BLOQUEADO_DATA_INICAL";
$proto8["m_srcTableName"] = "tb_setpoint_bloqueia";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_BLOQUEADO_HORA_INICIAL",
	"m_strTable" => "tb_setpoint_bloqueia",
	"m_srcTableName" => "tb_setpoint_bloqueia"
));

$proto10["m_sql"] = "SET_BLOQUEADO_HORA_INICIAL";
$proto10["m_srcTableName"] = "tb_setpoint_bloqueia";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_BLOQUEADO_DATA_FINAL",
	"m_strTable" => "tb_setpoint_bloqueia",
	"m_srcTableName" => "tb_setpoint_bloqueia"
));

$proto12["m_sql"] = "SET_BLOQUEADO_DATA_FINAL";
$proto12["m_srcTableName"] = "tb_setpoint_bloqueia";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_BLOQUEADO_HORA_FINAL",
	"m_strTable" => "tb_setpoint_bloqueia",
	"m_srcTableName" => "tb_setpoint_bloqueia"
));

$proto14["m_sql"] = "SET_BLOQUEADO_HORA_FINAL";
$proto14["m_srcTableName"] = "tb_setpoint_bloqueia";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "tb_setpoint_bloqueia";
$proto17["m_srcTableName"] = "tb_setpoint_bloqueia";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "MON_TAG";
$proto17["m_columns"][] = "SET_BLOQUEADO_DATA_INICAL";
$proto17["m_columns"][] = "SET_BLOQUEADO_HORA_INICIAL";
$proto17["m_columns"][] = "SET_BLOQUEADO_DATA_FINAL";
$proto17["m_columns"][] = "SET_BLOQUEADO_HORA_FINAL";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "tb_setpoint_bloqueia";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "tb_setpoint_bloqueia";
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
$proto0["m_srcTableName"]="tb_setpoint_bloqueia";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_setpoint_bloqueia = createSqlQuery_tb_setpoint_bloqueia();


	
		;

					

$tdatatb_setpoint_bloqueia[".sqlquery"] = $queryData_tb_setpoint_bloqueia;



$tableEvents["tb_setpoint_bloqueia"] = new eventsBase;
$tdatatb_setpoint_bloqueia[".hasEvents"] = false;

?>