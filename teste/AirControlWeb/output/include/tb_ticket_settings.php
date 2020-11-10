<?php
$tdatatb_ticket = array();
$tdatatb_ticket[".searchableFields"] = array();
$tdatatb_ticket[".ShortName"] = "tb_ticket";
$tdatatb_ticket[".OwnerID"] = "";
$tdatatb_ticket[".OriginalTable"] = "tb_ticket";


$tdatatb_ticket[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_ticket[".originalPagesByType"] = $tdatatb_ticket[".pagesByType"];
$tdatatb_ticket[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_ticket[".originalPages"] = $tdatatb_ticket[".pages"];
$tdatatb_ticket[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_ticket[".originalDefaultPages"] = $tdatatb_ticket[".defaultPages"];

//	field labels
$fieldLabelstb_ticket = array();
$fieldToolTipstb_ticket = array();
$pageTitlestb_ticket = array();
$placeHolderstb_ticket = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_ticket["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_ticket["Portuguese(Brazil)"] = array();
	$placeHolderstb_ticket["Portuguese(Brazil)"] = array();
	$pageTitlestb_ticket["Portuguese(Brazil)"] = array();
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_TICKET"] = "TIC TICKET";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_TICKET"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_TICKET"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_PARENT"] = "TIC PARENT";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_PARENT"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_PARENT"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_DATE"] = "TIC DATE";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_DATE"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_DATE"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_DATE_LAST_UPDATE"] = "TIC DATE LAST UPDATE";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_DATE_LAST_UPDATE"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_DATE_LAST_UPDATE"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_SUBJECT"] = "TIC SUBJECT";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_SUBJECT"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_SUBJECT"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_SITUATION"] = "TIC SITUATION";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_SITUATION"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_SITUATION"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_DESCRIPTION"] = "TIC DESCRIPTION";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_DESCRIPTION"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_DESCRIPTION"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_ATTACHMENT"] = "TIC ATTACHMENT";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_ATTACHMENT"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_ATTACHMENT"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["REF_REFERENCE"] = "REF REFERENCE";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["REF_REFERENCE"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["REF_REFERENCE"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["TIC_COMMENT"] = "TIC COMMENT";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["TIC_COMMENT"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["TIC_COMMENT"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["CLA_CLASSIFICATION"] = "CLA CLASSIFICATION";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["CLA_CLASSIFICATION"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["CLA_CLASSIFICATION"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["LOGIN_USER_NAME"] = "LOGIN USER NAME";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["LOGIN_USER_NAME"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["LOGIN_USER_NAME"] = "";
	$fieldLabelstb_ticket["Portuguese(Brazil)"]["LOGIN_USER_ID"] = "LOGIN USER ID";
	$fieldToolTipstb_ticket["Portuguese(Brazil)"]["LOGIN_USER_ID"] = "";
	$placeHolderstb_ticket["Portuguese(Brazil)"]["LOGIN_USER_ID"] = "";
	if (count($fieldToolTipstb_ticket["Portuguese(Brazil)"]))
		$tdatatb_ticket[".isUseToolTips"] = true;
}


	$tdatatb_ticket[".NCSearch"] = true;



$tdatatb_ticket[".shortTableName"] = "tb_ticket";
$tdatatb_ticket[".nSecOptions"] = 0;

$tdatatb_ticket[".mainTableOwnerID"] = "";
$tdatatb_ticket[".entityType"] = 0;
$tdatatb_ticket[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_ticket[".strOriginalTableName"] = "tb_ticket";

	



$tdatatb_ticket[".showAddInPopup"] = false;

$tdatatb_ticket[".showEditInPopup"] = false;

$tdatatb_ticket[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_ticket[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_ticket[".listAjax"] = false;
//	temporary
$tdatatb_ticket[".listAjax"] = false;

	$tdatatb_ticket[".audit"] = true;

	$tdatatb_ticket[".locking"] = true;


$pages = $tdatatb_ticket[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_ticket[".edit"] = true;
	$tdatatb_ticket[".afterEditAction"] = 1;
	$tdatatb_ticket[".closePopupAfterEdit"] = 1;
	$tdatatb_ticket[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_ticket[".add"] = true;
$tdatatb_ticket[".afterAddAction"] = 1;
$tdatatb_ticket[".closePopupAfterAdd"] = 1;
$tdatatb_ticket[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_ticket[".list"] = true;
}



$tdatatb_ticket[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_ticket[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_ticket[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_ticket[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_ticket[".printFriendly"] = true;
}



$tdatatb_ticket[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_ticket[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_ticket[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_ticket[".isUseAjaxSuggest"] = true;

$tdatatb_ticket[".rowHighlite"] = true;





$tdatatb_ticket[".ajaxCodeSnippetAdded"] = false;

$tdatatb_ticket[".buttonsAdded"] = false;

$tdatatb_ticket[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_ticket[".isUseTimeForSearch"] = false;


$tdatatb_ticket[".badgeColor"] = "1E90FF";


$tdatatb_ticket[".allSearchFields"] = array();
$tdatatb_ticket[".filterFields"] = array();
$tdatatb_ticket[".requiredSearchFields"] = array();

$tdatatb_ticket[".googleLikeFields"] = array();
$tdatatb_ticket[".googleLikeFields"][] = "TIC_TICKET";
$tdatatb_ticket[".googleLikeFields"][] = "TIC_PARENT";
$tdatatb_ticket[".googleLikeFields"][] = "TIC_DATE";
$tdatatb_ticket[".googleLikeFields"][] = "TIC_DATE_LAST_UPDATE";
$tdatatb_ticket[".googleLikeFields"][] = "TIC_SUBJECT";
$tdatatb_ticket[".googleLikeFields"][] = "TIC_SITUATION";
$tdatatb_ticket[".googleLikeFields"][] = "TIC_DESCRIPTION";
$tdatatb_ticket[".googleLikeFields"][] = "REF_REFERENCE";
$tdatatb_ticket[".googleLikeFields"][] = "TIC_COMMENT";
$tdatatb_ticket[".googleLikeFields"][] = "CLA_CLASSIFICATION";
$tdatatb_ticket[".googleLikeFields"][] = "LOGIN_USER_NAME";
$tdatatb_ticket[".googleLikeFields"][] = "LOGIN_USER_ID";



$tdatatb_ticket[".tableType"] = "list";

$tdatatb_ticket[".printerPageOrientation"] = 0;
$tdatatb_ticket[".nPrinterPageScale"] = 100;

$tdatatb_ticket[".nPrinterSplitRecords"] = 40;

$tdatatb_ticket[".geocodingEnabled"] = false;










$tdatatb_ticket[".pageSize"] = 20;

$tdatatb_ticket[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_ticket[".strOrderBy"] = $tstrOrderBy;

$tdatatb_ticket[".orderindexes"] = array();


$tdatatb_ticket[".sqlHead"] = "SELECT TIC_TICKET,  	TIC_PARENT,  	TIC_DATE,  	TIC_DATE_LAST_UPDATE,  	TIC_SUBJECT,  	TIC_SITUATION,  	TIC_DESCRIPTION,  	TIC_ATTACHMENT,  	REF_REFERENCE,  	TIC_COMMENT,  	CLA_CLASSIFICATION,  	LOGIN_USER_NAME,  	LOGIN_USER_ID";
$tdatatb_ticket[".sqlFrom"] = "FROM tb_ticket";
$tdatatb_ticket[".sqlWhereExpr"] = "";
$tdatatb_ticket[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_ticket[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_ticket[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_ticket[".highlightSearchResults"] = true;

$tableKeystb_ticket = array();
$tableKeystb_ticket[] = "TIC_TICKET";
$tdatatb_ticket[".Keys"] = $tableKeystb_ticket;


$tdatatb_ticket[".hideMobileList"] = array();




//	TIC_TICKET
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TIC_TICKET";
	$fdata["GoodName"] = "TIC_TICKET";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_TICKET");
	$fdata["FieldType"] = 20;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "TIC_TICKET";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_TICKET";

	
	
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


	$tdatatb_ticket["TIC_TICKET"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_TICKET";
//	TIC_PARENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "TIC_PARENT";
	$fdata["GoodName"] = "TIC_PARENT";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_PARENT");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "TIC_PARENT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_PARENT";

	
	
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
	$edata["LookupTable"] = "tb_ticket";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "TIC_TICKET";
	$edata["LinkFieldType"] = 20;
	$edata["DisplayField"] = "TIC_SUBJECT";

	

	
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


	$tdatatb_ticket["TIC_PARENT"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_PARENT";
//	TIC_DATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TIC_DATE";
	$fdata["GoodName"] = "TIC_DATE";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_DATE");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "TIC_DATE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_DATE";

	
	
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


	$tdatatb_ticket["TIC_DATE"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_DATE";
//	TIC_DATE_LAST_UPDATE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "TIC_DATE_LAST_UPDATE";
	$fdata["GoodName"] = "TIC_DATE_LAST_UPDATE";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_DATE_LAST_UPDATE");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "TIC_DATE_LAST_UPDATE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_DATE_LAST_UPDATE";

	
	
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


	$tdatatb_ticket["TIC_DATE_LAST_UPDATE"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_DATE_LAST_UPDATE";
//	TIC_SUBJECT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "TIC_SUBJECT";
	$fdata["GoodName"] = "TIC_SUBJECT";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_SUBJECT");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TIC_SUBJECT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_SUBJECT";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatatb_ticket["TIC_SUBJECT"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_SUBJECT";
//	TIC_SITUATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "TIC_SITUATION";
	$fdata["GoodName"] = "TIC_SITUATION";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_SITUATION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "TIC_SITUATION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_SITUATION";

	
	
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
			$edata["EditParams"].= " maxlength=20";

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


	$tdatatb_ticket["TIC_SITUATION"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_SITUATION";
//	TIC_DESCRIPTION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TIC_DESCRIPTION";
	$fdata["GoodName"] = "TIC_DESCRIPTION";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_DESCRIPTION");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "TIC_DESCRIPTION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_DESCRIPTION";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatatb_ticket["TIC_DESCRIPTION"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_DESCRIPTION";
//	TIC_ATTACHMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "TIC_ATTACHMENT";
	$fdata["GoodName"] = "TIC_ATTACHMENT";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_ATTACHMENT");
	$fdata["FieldType"] = 128;

	
	
	
			

		$fdata["strField"] = "TIC_ATTACHMENT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_ATTACHMENT";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
		
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatatb_ticket["TIC_ATTACHMENT"] = $fdata;
	//	REF_REFERENCE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "REF_REFERENCE";
	$fdata["GoodName"] = "REF_REFERENCE";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","REF_REFERENCE");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "tb_reference";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "REF_REFERENCE";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "REF_REFERENCE";

	

	
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


	$tdatatb_ticket["REF_REFERENCE"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "REF_REFERENCE";
//	TIC_COMMENT
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TIC_COMMENT";
	$fdata["GoodName"] = "TIC_COMMENT";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","TIC_COMMENT");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "TIC_COMMENT";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TIC_COMMENT";

	
	
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


	$tdatatb_ticket["TIC_COMMENT"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "TIC_COMMENT";
//	CLA_CLASSIFICATION
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CLA_CLASSIFICATION";
	$fdata["GoodName"] = "CLA_CLASSIFICATION";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","CLA_CLASSIFICATION");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "CLA_CLASSIFICATION";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CLA_CLASSIFICATION";

	
	
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
				$edata["LookupType"] = 1;
	$edata["LookupTable"] = "tb_classification";
	$edata["LookupConnId"] = "db9f9deaairwebatMYSQL5014site4";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "CLA_CLASSIFICATION";
	$edata["LinkFieldType"] = 200;
	$edata["DisplayField"] = "CLA_CLASSIFICATION";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
		$edata["SimpleAdd"] = true;


	
	
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


	$tdatatb_ticket["CLA_CLASSIFICATION"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "CLA_CLASSIFICATION";
//	LOGIN_USER_NAME
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "LOGIN_USER_NAME";
	$fdata["GoodName"] = "LOGIN_USER_NAME";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","LOGIN_USER_NAME");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "LOGIN_USER_NAME";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOGIN_USER_NAME";

	
	
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
			$edata["EditParams"].= " maxlength=60";

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


	$tdatatb_ticket["LOGIN_USER_NAME"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "LOGIN_USER_NAME";
//	LOGIN_USER_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "LOGIN_USER_ID";
	$fdata["GoodName"] = "LOGIN_USER_ID";
	$fdata["ownerTable"] = "tb_ticket";
	$fdata["Label"] = GetFieldLabel("tb_ticket","LOGIN_USER_ID");
	$fdata["FieldType"] = 20;

	
	
	
			

		$fdata["strField"] = "LOGIN_USER_ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LOGIN_USER_ID";

	
	
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


	$tdatatb_ticket["LOGIN_USER_ID"] = $fdata;
		$tdatatb_ticket[".searchableFields"][] = "LOGIN_USER_ID";


$tables_data["tb_ticket"]=&$tdatatb_ticket;
$field_labels["tb_ticket"] = &$fieldLabelstb_ticket;
$fieldToolTips["tb_ticket"] = &$fieldToolTipstb_ticket;
$placeHolders["tb_ticket"] = &$placeHolderstb_ticket;
$page_titles["tb_ticket"] = &$pageTitlestb_ticket;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_ticket"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["tb_ticket"] = array();



	
				$strOriginalDetailsTable="tb_reference";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="tb_reference";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "tb_reference";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["tb_ticket"][0] = $masterParams;
				$masterTablesData["tb_ticket"][0]["masterKeys"] = array();
	$masterTablesData["tb_ticket"][0]["masterKeys"][]="REF_REFERENCE";
				$masterTablesData["tb_ticket"][0]["detailKeys"] = array();
	$masterTablesData["tb_ticket"][0]["detailKeys"][]="REF_REFERENCE";
		
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_ticket()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TIC_TICKET,  	TIC_PARENT,  	TIC_DATE,  	TIC_DATE_LAST_UPDATE,  	TIC_SUBJECT,  	TIC_SITUATION,  	TIC_DESCRIPTION,  	TIC_ATTACHMENT,  	REF_REFERENCE,  	TIC_COMMENT,  	CLA_CLASSIFICATION,  	LOGIN_USER_NAME,  	LOGIN_USER_ID";
$proto0["m_strFrom"] = "FROM tb_ticket";
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
	"m_strName" => "TIC_TICKET",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto6["m_sql"] = "TIC_TICKET";
$proto6["m_srcTableName"] = "tb_ticket";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_PARENT",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto8["m_sql"] = "TIC_PARENT";
$proto8["m_srcTableName"] = "tb_ticket";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_DATE",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto10["m_sql"] = "TIC_DATE";
$proto10["m_srcTableName"] = "tb_ticket";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_DATE_LAST_UPDATE",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto12["m_sql"] = "TIC_DATE_LAST_UPDATE";
$proto12["m_srcTableName"] = "tb_ticket";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_SUBJECT",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto14["m_sql"] = "TIC_SUBJECT";
$proto14["m_srcTableName"] = "tb_ticket";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_SITUATION",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto16["m_sql"] = "TIC_SITUATION";
$proto16["m_srcTableName"] = "tb_ticket";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_DESCRIPTION",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto18["m_sql"] = "TIC_DESCRIPTION";
$proto18["m_srcTableName"] = "tb_ticket";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_ATTACHMENT",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto20["m_sql"] = "TIC_ATTACHMENT";
$proto20["m_srcTableName"] = "tb_ticket";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "REF_REFERENCE",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto22["m_sql"] = "REF_REFERENCE";
$proto22["m_srcTableName"] = "tb_ticket";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TIC_COMMENT",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto24["m_sql"] = "TIC_COMMENT";
$proto24["m_srcTableName"] = "tb_ticket";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CLA_CLASSIFICATION",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto26["m_sql"] = "CLA_CLASSIFICATION";
$proto26["m_srcTableName"] = "tb_ticket";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "LOGIN_USER_NAME",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto28["m_sql"] = "LOGIN_USER_NAME";
$proto28["m_srcTableName"] = "tb_ticket";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "LOGIN_USER_ID",
	"m_strTable" => "tb_ticket",
	"m_srcTableName" => "tb_ticket"
));

$proto30["m_sql"] = "LOGIN_USER_ID";
$proto30["m_srcTableName"] = "tb_ticket";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "tb_ticket";
$proto33["m_srcTableName"] = "tb_ticket";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "TIC_TICKET";
$proto33["m_columns"][] = "TIC_PARENT";
$proto33["m_columns"][] = "TIC_DATE";
$proto33["m_columns"][] = "TIC_DATE_LAST_UPDATE";
$proto33["m_columns"][] = "TIC_SUBJECT";
$proto33["m_columns"][] = "TIC_SITUATION";
$proto33["m_columns"][] = "TIC_DESCRIPTION";
$proto33["m_columns"][] = "TIC_ATTACHMENT";
$proto33["m_columns"][] = "REF_REFERENCE";
$proto33["m_columns"][] = "TIC_COMMENT";
$proto33["m_columns"][] = "CLA_CLASSIFICATION";
$proto33["m_columns"][] = "LOGIN_USER_NAME";
$proto33["m_columns"][] = "LOGIN_USER_ID";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "tb_ticket";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "tb_ticket";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_ticket";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_ticket = createSqlQuery_tb_ticket();


	
		;

													

$tdatatb_ticket[".sqlquery"] = $queryData_tb_ticket;



$tableEvents["tb_ticket"] = new eventsBase;
$tdatatb_ticket[".hasEvents"] = false;

?>