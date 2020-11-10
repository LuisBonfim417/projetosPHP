<?php
$tdataind40_users = array();
$tdataind40_users[".searchableFields"] = array();
$tdataind40_users[".ShortName"] = "ind40_users";
$tdataind40_users[".OwnerID"] = "";
$tdataind40_users[".OriginalTable"] = "ind40_users";


$tdataind40_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataind40_users[".originalPagesByType"] = $tdataind40_users[".pagesByType"];
$tdataind40_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataind40_users[".originalPages"] = $tdataind40_users[".pages"];
$tdataind40_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataind40_users[".originalDefaultPages"] = $tdataind40_users[".defaultPages"];

//	field labels
$fieldLabelsind40_users = array();
$fieldToolTipsind40_users = array();
$pageTitlesind40_users = array();
$placeHoldersind40_users = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsind40_users["Portuguese(Brazil)"] = array();
	$fieldToolTipsind40_users["Portuguese(Brazil)"] = array();
	$placeHoldersind40_users["Portuguese(Brazil)"] = array();
	$pageTitlesind40_users["Portuguese(Brazil)"] = array();
	$fieldLabelsind40_users["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsind40_users["Portuguese(Brazil)"]["username"] = "Username";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["username"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["username"] = "";
	$fieldLabelsind40_users["Portuguese(Brazil)"]["password"] = "Password";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["password"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["password"] = "";
	$fieldLabelsind40_users["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["email"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsind40_users["Portuguese(Brazil)"]["fullname"] = "Fullname";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["fullname"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["fullname"] = "";
	$fieldLabelsind40_users["Portuguese(Brazil)"]["groupid"] = "Groupid";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["groupid"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["groupid"] = "";
	$fieldLabelsind40_users["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["active"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["active"] = "";
	$fieldLabelsind40_users["Portuguese(Brazil)"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsind40_users["Portuguese(Brazil)"]["ext_security_id"] = "";
	$placeHoldersind40_users["Portuguese(Brazil)"]["ext_security_id"] = "";
	if (count($fieldToolTipsind40_users["Portuguese(Brazil)"]))
		$tdataind40_users[".isUseToolTips"] = true;
}


	$tdataind40_users[".NCSearch"] = true;



$tdataind40_users[".shortTableName"] = "ind40_users";
$tdataind40_users[".nSecOptions"] = 0;

$tdataind40_users[".mainTableOwnerID"] = "";
$tdataind40_users[".entityType"] = 0;
$tdataind40_users[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdataind40_users[".strOriginalTableName"] = "ind40_users";

	



$tdataind40_users[".showAddInPopup"] = false;

$tdataind40_users[".showEditInPopup"] = false;

$tdataind40_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataind40_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataind40_users[".listAjax"] = false;
//	temporary
$tdataind40_users[".listAjax"] = false;

	$tdataind40_users[".audit"] = true;

	$tdataind40_users[".locking"] = false;


$pages = $tdataind40_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataind40_users[".edit"] = true;
	$tdataind40_users[".afterEditAction"] = 1;
	$tdataind40_users[".closePopupAfterEdit"] = 1;
	$tdataind40_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataind40_users[".add"] = true;
$tdataind40_users[".afterAddAction"] = 1;
$tdataind40_users[".closePopupAfterAdd"] = 1;
$tdataind40_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataind40_users[".list"] = true;
}



$tdataind40_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataind40_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataind40_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataind40_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataind40_users[".printFriendly"] = true;
}



$tdataind40_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataind40_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataind40_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataind40_users[".isUseAjaxSuggest"] = true;

$tdataind40_users[".rowHighlite"] = true;





$tdataind40_users[".ajaxCodeSnippetAdded"] = false;

$tdataind40_users[".buttonsAdded"] = false;

$tdataind40_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataind40_users[".isUseTimeForSearch"] = false;


$tdataind40_users[".badgeColor"] = "5F9EA0";


$tdataind40_users[".allSearchFields"] = array();
$tdataind40_users[".filterFields"] = array();
$tdataind40_users[".requiredSearchFields"] = array();

$tdataind40_users[".googleLikeFields"] = array();
$tdataind40_users[".googleLikeFields"][] = "ID";
$tdataind40_users[".googleLikeFields"][] = "username";
$tdataind40_users[".googleLikeFields"][] = "password";
$tdataind40_users[".googleLikeFields"][] = "email";
$tdataind40_users[".googleLikeFields"][] = "fullname";
$tdataind40_users[".googleLikeFields"][] = "groupid";
$tdataind40_users[".googleLikeFields"][] = "active";
$tdataind40_users[".googleLikeFields"][] = "ext_security_id";



$tdataind40_users[".tableType"] = "list";

$tdataind40_users[".printerPageOrientation"] = 0;
$tdataind40_users[".nPrinterPageScale"] = 100;

$tdataind40_users[".nPrinterSplitRecords"] = 40;

$tdataind40_users[".geocodingEnabled"] = false;










$tdataind40_users[".pageSize"] = 20;

$tdataind40_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataind40_users[".strOrderBy"] = $tstrOrderBy;

$tdataind40_users[".orderindexes"] = array();


$tdataind40_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdataind40_users[".sqlFrom"] = "FROM ind40_users";
$tdataind40_users[".sqlWhereExpr"] = "";
$tdataind40_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataind40_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataind40_users[".arrGroupsPerPage"] = $arrGPP;

$tdataind40_users[".highlightSearchResults"] = true;

$tableKeysind40_users = array();
$tableKeysind40_users[] = "ID";
$tdataind40_users[".Keys"] = $tableKeysind40_users;


$tdataind40_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdataind40_users["ID"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","username");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "username";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataind40_users["username"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","password");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "password";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
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

	$edata = array("EditFormat" => "Password");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";
		$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

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


	$tdataind40_users["password"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","email");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "email";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataind40_users["email"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "fullname";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataind40_users["fullname"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "groupid";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdataind40_users["groupid"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","active");
	$fdata["FieldType"] = 3;

	
	
	
			

		$fdata["strField"] = "active";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdataind40_users["active"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "ind40_users";
	$fdata["Label"] = GetFieldLabel("ind40_users","ext_security_id");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "ext_security_id";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ext_security_id";

	
	
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


	$tdataind40_users["ext_security_id"] = $fdata;
		$tdataind40_users[".searchableFields"][] = "ext_security_id";


$tables_data["ind40_users"]=&$tdataind40_users;
$field_labels["ind40_users"] = &$fieldLabelsind40_users;
$fieldToolTips["ind40_users"] = &$fieldToolTipsind40_users;
$placeHolders["ind40_users"] = &$placeHoldersind40_users;
$page_titles["ind40_users"] = &$pageTitlesind40_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["ind40_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["ind40_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_ind40_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM ind40_users";
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
	"m_strName" => "ID",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "ind40_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "ind40_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "ind40_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "ind40_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "ind40_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "ind40_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "ind40_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "ind40_users",
	"m_srcTableName" => "ind40_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "ind40_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "ind40_users";
$proto23["m_srcTableName"] = "ind40_users";
$proto23["m_columns"] = array();
$proto23["m_columns"][] = "ID";
$proto23["m_columns"][] = "username";
$proto23["m_columns"][] = "password";
$proto23["m_columns"][] = "email";
$proto23["m_columns"][] = "fullname";
$proto23["m_columns"][] = "groupid";
$proto23["m_columns"][] = "active";
$proto23["m_columns"][] = "ext_security_id";
$obj = new SQLTable($proto23);

$proto22["m_table"] = $obj;
$proto22["m_sql"] = "ind40_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "ind40_users";
$proto24=array();
$proto24["m_sql"] = "";
$proto24["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto24["m_column"]=$obj;
$proto24["m_contained"] = array();
$proto24["m_strCase"] = "";
$proto24["m_havingmode"] = false;
$proto24["m_inBrackets"] = false;
$proto24["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto24);

$proto22["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto22);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="ind40_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_ind40_users = createSqlQuery_ind40_users();


	
		;

								

$tdataind40_users[".sqlquery"] = $queryData_ind40_users;



$tableEvents["ind40_users"] = new eventsBase;
$tdataind40_users[".hasEvents"] = false;

?>