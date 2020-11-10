<?php
$tdataaircontrolweb_users = array();
$tdataaircontrolweb_users[".searchableFields"] = array();
$tdataaircontrolweb_users[".ShortName"] = "aircontrolweb_users";
$tdataaircontrolweb_users[".OwnerID"] = "";
$tdataaircontrolweb_users[".OriginalTable"] = "aircontrolweb_users";


$tdataaircontrolweb_users[".pagesByType"] = my_json_decode( "{\"search\":[\"search\"]}" );
$tdataaircontrolweb_users[".originalPagesByType"] = $tdataaircontrolweb_users[".pagesByType"];
$tdataaircontrolweb_users[".pages"] = types2pages( my_json_decode( "{\"search\":[\"search\"]}" ) );
$tdataaircontrolweb_users[".originalPages"] = $tdataaircontrolweb_users[".pages"];
$tdataaircontrolweb_users[".defaultPages"] = my_json_decode( "{\"search\":\"search\"}" );
$tdataaircontrolweb_users[".originalDefaultPages"] = $tdataaircontrolweb_users[".defaultPages"];

//	field labels
$fieldLabelsaircontrolweb_users = array();
$fieldToolTipsaircontrolweb_users = array();
$pageTitlesaircontrolweb_users = array();
$placeHoldersaircontrolweb_users = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"] = array();
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"] = array();
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"] = array();
	$pageTitlesaircontrolweb_users["Portuguese(Brazil)"] = array();
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["ID"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["username"] = "Username";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["username"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["username"] = "";
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["password"] = "Password";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["password"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["password"] = "";
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["email"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["fullname"] = "Fullname";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["fullname"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["fullname"] = "";
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["groupid"] = "Groupid";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["groupid"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["groupid"] = "";
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["active"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["active"] = "";
	$fieldLabelsaircontrolweb_users["Portuguese(Brazil)"]["ext_security_id"] = "Ext Security Id";
	$fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]["ext_security_id"] = "";
	$placeHoldersaircontrolweb_users["Portuguese(Brazil)"]["ext_security_id"] = "";
	if (count($fieldToolTipsaircontrolweb_users["Portuguese(Brazil)"]))
		$tdataaircontrolweb_users[".isUseToolTips"] = true;
}


	$tdataaircontrolweb_users[".NCSearch"] = true;



$tdataaircontrolweb_users[".shortTableName"] = "aircontrolweb_users";
$tdataaircontrolweb_users[".nSecOptions"] = 0;

$tdataaircontrolweb_users[".mainTableOwnerID"] = "";
$tdataaircontrolweb_users[".entityType"] = 0;
$tdataaircontrolweb_users[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdataaircontrolweb_users[".strOriginalTableName"] = "aircontrolweb_users";

	



$tdataaircontrolweb_users[".showAddInPopup"] = false;

$tdataaircontrolweb_users[".showEditInPopup"] = false;

$tdataaircontrolweb_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataaircontrolweb_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataaircontrolweb_users[".listAjax"] = false;
//	temporary
$tdataaircontrolweb_users[".listAjax"] = false;

	$tdataaircontrolweb_users[".audit"] = true;

	$tdataaircontrolweb_users[".locking"] = true;


$pages = $tdataaircontrolweb_users[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaircontrolweb_users[".edit"] = true;
	$tdataaircontrolweb_users[".afterEditAction"] = 1;
	$tdataaircontrolweb_users[".closePopupAfterEdit"] = 1;
	$tdataaircontrolweb_users[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaircontrolweb_users[".add"] = true;
$tdataaircontrolweb_users[".afterAddAction"] = 1;
$tdataaircontrolweb_users[".closePopupAfterAdd"] = 1;
$tdataaircontrolweb_users[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaircontrolweb_users[".list"] = true;
}



$tdataaircontrolweb_users[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaircontrolweb_users[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaircontrolweb_users[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaircontrolweb_users[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaircontrolweb_users[".printFriendly"] = true;
}



$tdataaircontrolweb_users[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaircontrolweb_users[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaircontrolweb_users[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaircontrolweb_users[".isUseAjaxSuggest"] = true;

$tdataaircontrolweb_users[".rowHighlite"] = true;





$tdataaircontrolweb_users[".ajaxCodeSnippetAdded"] = false;

$tdataaircontrolweb_users[".buttonsAdded"] = false;

$tdataaircontrolweb_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaircontrolweb_users[".isUseTimeForSearch"] = false;


$tdataaircontrolweb_users[".badgeColor"] = "778899";


$tdataaircontrolweb_users[".allSearchFields"] = array();
$tdataaircontrolweb_users[".filterFields"] = array();
$tdataaircontrolweb_users[".requiredSearchFields"] = array();

$tdataaircontrolweb_users[".googleLikeFields"] = array();
$tdataaircontrolweb_users[".googleLikeFields"][] = "ID";
$tdataaircontrolweb_users[".googleLikeFields"][] = "username";
$tdataaircontrolweb_users[".googleLikeFields"][] = "password";
$tdataaircontrolweb_users[".googleLikeFields"][] = "email";
$tdataaircontrolweb_users[".googleLikeFields"][] = "fullname";
$tdataaircontrolweb_users[".googleLikeFields"][] = "groupid";
$tdataaircontrolweb_users[".googleLikeFields"][] = "active";
$tdataaircontrolweb_users[".googleLikeFields"][] = "ext_security_id";



$tdataaircontrolweb_users[".tableType"] = "list";

$tdataaircontrolweb_users[".printerPageOrientation"] = 0;
$tdataaircontrolweb_users[".nPrinterPageScale"] = 100;

$tdataaircontrolweb_users[".nPrinterSplitRecords"] = 40;

$tdataaircontrolweb_users[".geocodingEnabled"] = false;










$tdataaircontrolweb_users[".pageSize"] = 20;

$tdataaircontrolweb_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataaircontrolweb_users[".strOrderBy"] = $tstrOrderBy;

$tdataaircontrolweb_users[".orderindexes"] = array();


$tdataaircontrolweb_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$tdataaircontrolweb_users[".sqlFrom"] = "FROM aircontrolweb_users";
$tdataaircontrolweb_users[".sqlWhereExpr"] = "";
$tdataaircontrolweb_users[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaircontrolweb_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaircontrolweb_users[".arrGroupsPerPage"] = $arrGPP;

$tdataaircontrolweb_users[".highlightSearchResults"] = true;

$tableKeysaircontrolweb_users = array();
$tableKeysaircontrolweb_users[] = "ID";
$tdataaircontrolweb_users[".Keys"] = $tableKeysaircontrolweb_users;


$tdataaircontrolweb_users[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","ID");
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


	$tdataaircontrolweb_users["ID"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "ID";
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","username");
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


	$tdataaircontrolweb_users["username"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "username";
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","password");
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


	$tdataaircontrolweb_users["password"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "password";
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","email");
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


	$tdataaircontrolweb_users["email"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "email";
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","fullname");
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


	$tdataaircontrolweb_users["fullname"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "fullname";
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","groupid");
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


	$tdataaircontrolweb_users["groupid"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "groupid";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","active");
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


	$tdataaircontrolweb_users["active"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "active";
//	ext_security_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "ext_security_id";
	$fdata["GoodName"] = "ext_security_id";
	$fdata["ownerTable"] = "aircontrolweb_users";
	$fdata["Label"] = GetFieldLabel("aircontrolweb_users","ext_security_id");
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


	$tdataaircontrolweb_users["ext_security_id"] = $fdata;
		$tdataaircontrolweb_users[".searchableFields"][] = "ext_security_id";


$tables_data["aircontrolweb_users"]=&$tdataaircontrolweb_users;
$field_labels["aircontrolweb_users"] = &$fieldLabelsaircontrolweb_users;
$fieldToolTips["aircontrolweb_users"] = &$fieldToolTipsaircontrolweb_users;
$placeHolders["aircontrolweb_users"] = &$placeHoldersaircontrolweb_users;
$page_titles["aircontrolweb_users"] = &$pageTitlesaircontrolweb_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["aircontrolweb_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["aircontrolweb_users"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_aircontrolweb_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active,  	ext_security_id";
$proto0["m_strFrom"] = "FROM aircontrolweb_users";
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
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "aircontrolweb_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "aircontrolweb_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "aircontrolweb_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "aircontrolweb_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "aircontrolweb_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "aircontrolweb_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "aircontrolweb_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "ext_security_id",
	"m_strTable" => "aircontrolweb_users",
	"m_srcTableName" => "aircontrolweb_users"
));

$proto20["m_sql"] = "ext_security_id";
$proto20["m_srcTableName"] = "aircontrolweb_users";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto22=array();
$proto22["m_link"] = "SQLL_MAIN";
			$proto23=array();
$proto23["m_strName"] = "aircontrolweb_users";
$proto23["m_srcTableName"] = "aircontrolweb_users";
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
$proto22["m_sql"] = "aircontrolweb_users";
$proto22["m_alias"] = "";
$proto22["m_srcTableName"] = "aircontrolweb_users";
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
$proto0["m_srcTableName"]="aircontrolweb_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_aircontrolweb_users = createSqlQuery_aircontrolweb_users();


	
		;

								

$tdataaircontrolweb_users[".sqlquery"] = $queryData_aircontrolweb_users;



$tableEvents["aircontrolweb_users"] = new eventsBase;
$tdataaircontrolweb_users[".hasEvents"] = false;

?>