<?php
$tdatatb_setpoing = array();
$tdatatb_setpoing[".searchableFields"] = array();
$tdatatb_setpoing[".ShortName"] = "tb_setpoing";
$tdatatb_setpoing[".OwnerID"] = "";
$tdatatb_setpoing[".OriginalTable"] = "tb_setpoing";


$tdatatb_setpoing[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatatb_setpoing[".originalPagesByType"] = $tdatatb_setpoing[".pagesByType"];
$tdatatb_setpoing[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatatb_setpoing[".originalPages"] = $tdatatb_setpoing[".pages"];
$tdatatb_setpoing[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatatb_setpoing[".originalDefaultPages"] = $tdatatb_setpoing[".defaultPages"];

//	field labels
$fieldLabelstb_setpoing = array();
$fieldToolTipstb_setpoing = array();
$pageTitlestb_setpoing = array();
$placeHolderstb_setpoing = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelstb_setpoing["Portuguese(Brazil)"] = array();
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"] = array();
	$placeHolderstb_setpoing["Portuguese(Brazil)"] = array();
	$pageTitlestb_setpoing["Portuguese(Brazil)"] = array();
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["MON_TAG"] = "TAG";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["MON_TAG"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["MON_TAG"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["MON_USER"] = "Usuário";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["MON_USER"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["MON_USER"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_DATA_DE_CADASTRO"] = "Cadastrado em";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_DATA_DE_CADASTRO"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_DATA_DE_CADASTRO"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_MAX_T"] = "Temperatura Máxima";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_MAX_T"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_MAX_T"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_MIN_T"] = "Temperatura Mínima";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_MIN_T"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_MIN_T"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_MAX_U"] = "Umidade Máxima";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_MAX_U"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_MAX_U"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_MIN_U"] = "Umidade Mínima";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_MIN_U"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_MIN_U"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_LIGAR"] = "Ligar o Sensor";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_LIGAR"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_LIGAR"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_DESLIGAR"] = "Desligar o sensor";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_DESLIGAR"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_DESLIGAR"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_TIPO_DE_CONTROLE"] = "Tipo de Monitoramento";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_TIPO_DE_CONTROLE"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_TIPO_DE_CONTROLE"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_IP"] = "IP";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_IP"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_IP"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_NOME_DA_REDE"] = "nome da rede";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_NOME_DA_REDE"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_NOME_DA_REDE"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_PASSWORD_DA_REDE"] = "Senha da rede";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_PASSWORD_DA_REDE"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_PASSWORD_DA_REDE"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_BLOQUEADO"] = "Bloqueado";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_BLOQUEADO"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_BLOQUEADO"] = "";
	$fieldLabelstb_setpoing["Portuguese(Brazil)"]["SET_OBS"] = "Obs";
	$fieldToolTipstb_setpoing["Portuguese(Brazil)"]["SET_OBS"] = "";
	$placeHolderstb_setpoing["Portuguese(Brazil)"]["SET_OBS"] = "";
	if (count($fieldToolTipstb_setpoing["Portuguese(Brazil)"]))
		$tdatatb_setpoing[".isUseToolTips"] = true;
}


	$tdatatb_setpoing[".NCSearch"] = true;



$tdatatb_setpoing[".shortTableName"] = "tb_setpoing";
$tdatatb_setpoing[".nSecOptions"] = 0;

$tdatatb_setpoing[".mainTableOwnerID"] = "";
$tdatatb_setpoing[".entityType"] = 0;
$tdatatb_setpoing[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatatb_setpoing[".strOriginalTableName"] = "tb_setpoing";

	



$tdatatb_setpoing[".showAddInPopup"] = false;

$tdatatb_setpoing[".showEditInPopup"] = false;

$tdatatb_setpoing[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatatb_setpoing[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatatb_setpoing[".listAjax"] = false;
//	temporary
$tdatatb_setpoing[".listAjax"] = false;

	$tdatatb_setpoing[".audit"] = true;

	$tdatatb_setpoing[".locking"] = true;


$pages = $tdatatb_setpoing[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatatb_setpoing[".edit"] = true;
	$tdatatb_setpoing[".afterEditAction"] = 1;
	$tdatatb_setpoing[".closePopupAfterEdit"] = 1;
	$tdatatb_setpoing[".afterEditActionDetTable"] = "tb_setpoint_email";
}

if( $pages[PAGE_ADD] ) {
$tdatatb_setpoing[".add"] = true;
$tdatatb_setpoing[".afterAddAction"] = 1;
$tdatatb_setpoing[".closePopupAfterAdd"] = 1;
$tdatatb_setpoing[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatatb_setpoing[".list"] = true;
}



$tdatatb_setpoing[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatatb_setpoing[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatatb_setpoing[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatatb_setpoing[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatatb_setpoing[".printFriendly"] = true;
}



$tdatatb_setpoing[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatatb_setpoing[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatatb_setpoing[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatatb_setpoing[".isUseAjaxSuggest"] = true;

$tdatatb_setpoing[".rowHighlite"] = true;





$tdatatb_setpoing[".ajaxCodeSnippetAdded"] = false;

$tdatatb_setpoing[".buttonsAdded"] = false;

$tdatatb_setpoing[".addPageEvents"] = false;

// use timepicker for search panel
$tdatatb_setpoing[".isUseTimeForSearch"] = false;


$tdatatb_setpoing[".badgeColor"] = "D2691E";


$tdatatb_setpoing[".allSearchFields"] = array();
$tdatatb_setpoing[".filterFields"] = array();
$tdatatb_setpoing[".requiredSearchFields"] = array();

$tdatatb_setpoing[".googleLikeFields"] = array();
$tdatatb_setpoing[".googleLikeFields"][] = "MON_TAG";
$tdatatb_setpoing[".googleLikeFields"][] = "MON_USER";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_DATA_DE_CADASTRO";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_MAX_T";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_MIN_T";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_MAX_U";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_MIN_U";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_LIGAR";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_DESLIGAR";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_TIPO_DE_CONTROLE";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_IP";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_NOME_DA_REDE";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_PASSWORD_DA_REDE";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_BLOQUEADO";
$tdatatb_setpoing[".googleLikeFields"][] = "SET_OBS";



$tdatatb_setpoing[".tableType"] = "list";

$tdatatb_setpoing[".printerPageOrientation"] = 0;
$tdatatb_setpoing[".nPrinterPageScale"] = 100;

$tdatatb_setpoing[".nPrinterSplitRecords"] = 40;

$tdatatb_setpoing[".geocodingEnabled"] = false;










$tdatatb_setpoing[".pageSize"] = 20;

$tdatatb_setpoing[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatatb_setpoing[".strOrderBy"] = $tstrOrderBy;

$tdatatb_setpoing[".orderindexes"] = array();


$tdatatb_setpoing[".sqlHead"] = "SELECT MON_TAG,  	MON_USER,  	SET_DATA_DE_CADASTRO,  	SET_MAX_T,  	SET_MIN_T,  	SET_MAX_U,  	SET_MIN_U,  	SET_LIGAR,  	SET_DESLIGAR,  	SET_TIPO_DE_CONTROLE,  	SET_IP,  	SET_NOME_DA_REDE,  	SET_PASSWORD_DA_REDE,  	SET_BLOQUEADO,  	SET_OBS";
$tdatatb_setpoing[".sqlFrom"] = "FROM tb_setpoing";
$tdatatb_setpoing[".sqlWhereExpr"] = "";
$tdatatb_setpoing[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatatb_setpoing[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatatb_setpoing[".arrGroupsPerPage"] = $arrGPP;

$tdatatb_setpoing[".highlightSearchResults"] = true;

$tableKeystb_setpoing = array();
$tableKeystb_setpoing[] = "MON_TAG";
$tdatatb_setpoing[".Keys"] = $tableKeystb_setpoing;


$tdatatb_setpoing[".hideMobileList"] = array();




//	MON_TAG
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MON_TAG";
	$fdata["GoodName"] = "MON_TAG";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","MON_TAG");
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


	$tdatatb_setpoing["MON_TAG"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "MON_TAG";
//	MON_USER
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_USER";
	$fdata["GoodName"] = "MON_USER";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","MON_USER");
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


	$tdatatb_setpoing["MON_USER"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "MON_USER";
//	SET_DATA_DE_CADASTRO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "SET_DATA_DE_CADASTRO";
	$fdata["GoodName"] = "SET_DATA_DE_CADASTRO";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_DATA_DE_CADASTRO");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SET_DATA_DE_CADASTRO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_DATA_DE_CADASTRO";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatatb_setpoing["SET_DATA_DE_CADASTRO"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_DATA_DE_CADASTRO";
//	SET_MAX_T
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "SET_MAX_T";
	$fdata["GoodName"] = "SET_MAX_T";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_MAX_T");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "SET_MAX_T";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_MAX_T";

	
	
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


	$tdatatb_setpoing["SET_MAX_T"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_MAX_T";
//	SET_MIN_T
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "SET_MIN_T";
	$fdata["GoodName"] = "SET_MIN_T";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_MIN_T");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "SET_MIN_T";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_MIN_T";

	
	
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


	$tdatatb_setpoing["SET_MIN_T"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_MIN_T";
//	SET_MAX_U
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "SET_MAX_U";
	$fdata["GoodName"] = "SET_MAX_U";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_MAX_U");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "SET_MAX_U";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_MAX_U";

	
	
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


	$tdatatb_setpoing["SET_MAX_U"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_MAX_U";
//	SET_MIN_U
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "SET_MIN_U";
	$fdata["GoodName"] = "SET_MIN_U";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_MIN_U");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "SET_MIN_U";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_MIN_U";

	
	
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


	$tdatatb_setpoing["SET_MIN_U"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_MIN_U";
//	SET_LIGAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "SET_LIGAR";
	$fdata["GoodName"] = "SET_LIGAR";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_LIGAR");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SET_LIGAR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_LIGAR";

	
	
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


	$tdatatb_setpoing["SET_LIGAR"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_LIGAR";
//	SET_DESLIGAR
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SET_DESLIGAR";
	$fdata["GoodName"] = "SET_DESLIGAR";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_DESLIGAR");
	$fdata["FieldType"] = 135;

	
	
	
			

		$fdata["strField"] = "SET_DESLIGAR";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_DESLIGAR";

	
	
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


	$tdatatb_setpoing["SET_DESLIGAR"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_DESLIGAR";
//	SET_TIPO_DE_CONTROLE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "SET_TIPO_DE_CONTROLE";
	$fdata["GoodName"] = "SET_TIPO_DE_CONTROLE";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_TIPO_DE_CONTROLE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SET_TIPO_DE_CONTROLE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_TIPO_DE_CONTROLE";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatatb_setpoing["SET_TIPO_DE_CONTROLE"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_TIPO_DE_CONTROLE";
//	SET_IP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "SET_IP";
	$fdata["GoodName"] = "SET_IP";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_IP");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SET_IP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_IP";

	
	
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
			$edata["EditParams"].= " maxlength=15";

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


	$tdatatb_setpoing["SET_IP"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_IP";
//	SET_NOME_DA_REDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "SET_NOME_DA_REDE";
	$fdata["GoodName"] = "SET_NOME_DA_REDE";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_NOME_DA_REDE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SET_NOME_DA_REDE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_NOME_DA_REDE";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdatatb_setpoing["SET_NOME_DA_REDE"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_NOME_DA_REDE";
//	SET_PASSWORD_DA_REDE
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "SET_PASSWORD_DA_REDE";
	$fdata["GoodName"] = "SET_PASSWORD_DA_REDE";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_PASSWORD_DA_REDE");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "SET_PASSWORD_DA_REDE";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_PASSWORD_DA_REDE";

	
	
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
			$edata["EditParams"].= " maxlength=35";

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


	$tdatatb_setpoing["SET_PASSWORD_DA_REDE"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_PASSWORD_DA_REDE";
//	SET_BLOQUEADO
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "SET_BLOQUEADO";
	$fdata["GoodName"] = "SET_BLOQUEADO";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_BLOQUEADO");
	$fdata["FieldType"] = 16;

	
	
	
			

		$fdata["strField"] = "SET_BLOQUEADO";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_BLOQUEADO";

	
	
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


	$tdatatb_setpoing["SET_BLOQUEADO"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_BLOQUEADO";
//	SET_OBS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "SET_OBS";
	$fdata["GoodName"] = "SET_OBS";
	$fdata["ownerTable"] = "tb_setpoing";
	$fdata["Label"] = GetFieldLabel("tb_setpoing","SET_OBS");
	$fdata["FieldType"] = 201;

	
	
	
			

		$fdata["strField"] = "SET_OBS";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SET_OBS";

	
	
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


	$tdatatb_setpoing["SET_OBS"] = $fdata;
		$tdatatb_setpoing[".searchableFields"][] = "SET_OBS";


$tables_data["tb_setpoing"]=&$tdatatb_setpoing;
$field_labels["tb_setpoing"] = &$fieldLabelstb_setpoing;
$fieldToolTips["tb_setpoing"] = &$fieldToolTipstb_setpoing;
$placeHolders["tb_setpoing"] = &$placeHolderstb_setpoing;
$page_titles["tb_setpoing"] = &$pageTitlestb_setpoing;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["tb_setpoing"] = array();
//	tb_setpoint_email
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_setpoint_email";
		$detailsParam["dOriginalTable"] = "tb_setpoint_email";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_setpoint_email";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_setpoint_email");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_setpoing"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_setpoing"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_setpoing"][$dIndex]["masterKeys"][]="MON_TAG";

				$detailsTablesData["tb_setpoing"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_setpoing"][$dIndex]["detailKeys"][]="MON_TAG";
//	tb_setpoint_bloqueia
	
	

		$dIndex = 1;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_setpoint_bloqueia";
		$detailsParam["dOriginalTable"] = "tb_setpoint_bloqueia";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_setpoint_bloqueia";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_setpoint_bloqueia");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_setpoing"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_setpoing"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_setpoing"][$dIndex]["masterKeys"][]="MON_TAG";

				$detailsTablesData["tb_setpoing"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_setpoing"][$dIndex]["detailKeys"][]="MON_TAG";
//	tb_setpoint_sms
	
	

		$dIndex = 2;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="tb_setpoint_sms";
		$detailsParam["dOriginalTable"] = "tb_setpoint_sms";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "tb_setpoint_sms";
	$detailsParam["dCaptionTable"] = GetTableCaption("tb_setpoint_sms");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["tb_setpoing"][$dIndex] = $detailsParam;

	
		$detailsTablesData["tb_setpoing"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["tb_setpoing"][$dIndex]["masterKeys"][]="MON_TAG";

				$detailsTablesData["tb_setpoing"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["tb_setpoing"][$dIndex]["detailKeys"][]="MON_TAG";

// tables which are master tables for current table (detail)
$masterTablesData["tb_setpoing"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_tb_setpoing()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MON_TAG,  	MON_USER,  	SET_DATA_DE_CADASTRO,  	SET_MAX_T,  	SET_MIN_T,  	SET_MAX_U,  	SET_MIN_U,  	SET_LIGAR,  	SET_DESLIGAR,  	SET_TIPO_DE_CONTROLE,  	SET_IP,  	SET_NOME_DA_REDE,  	SET_PASSWORD_DA_REDE,  	SET_BLOQUEADO,  	SET_OBS";
$proto0["m_strFrom"] = "FROM tb_setpoing";
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
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto6["m_sql"] = "MON_TAG";
$proto6["m_srcTableName"] = "tb_setpoing";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_USER",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto8["m_sql"] = "MON_USER";
$proto8["m_srcTableName"] = "tb_setpoing";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_DATA_DE_CADASTRO",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto10["m_sql"] = "SET_DATA_DE_CADASTRO";
$proto10["m_srcTableName"] = "tb_setpoing";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_MAX_T",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto12["m_sql"] = "SET_MAX_T";
$proto12["m_srcTableName"] = "tb_setpoing";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_MIN_T",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto14["m_sql"] = "SET_MIN_T";
$proto14["m_srcTableName"] = "tb_setpoing";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_MAX_U",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto16["m_sql"] = "SET_MAX_U";
$proto16["m_srcTableName"] = "tb_setpoing";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_MIN_U",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto18["m_sql"] = "SET_MIN_U";
$proto18["m_srcTableName"] = "tb_setpoing";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_LIGAR",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto20["m_sql"] = "SET_LIGAR";
$proto20["m_srcTableName"] = "tb_setpoing";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_DESLIGAR",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto22["m_sql"] = "SET_DESLIGAR";
$proto22["m_srcTableName"] = "tb_setpoing";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_TIPO_DE_CONTROLE",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto24["m_sql"] = "SET_TIPO_DE_CONTROLE";
$proto24["m_srcTableName"] = "tb_setpoing";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_IP",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto26["m_sql"] = "SET_IP";
$proto26["m_srcTableName"] = "tb_setpoing";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_NOME_DA_REDE",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto28["m_sql"] = "SET_NOME_DA_REDE";
$proto28["m_srcTableName"] = "tb_setpoing";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_PASSWORD_DA_REDE",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto30["m_sql"] = "SET_PASSWORD_DA_REDE";
$proto30["m_srcTableName"] = "tb_setpoing";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_BLOQUEADO",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto32["m_sql"] = "SET_BLOQUEADO";
$proto32["m_srcTableName"] = "tb_setpoing";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "SET_OBS",
	"m_strTable" => "tb_setpoing",
	"m_srcTableName" => "tb_setpoing"
));

$proto34["m_sql"] = "SET_OBS";
$proto34["m_srcTableName"] = "tb_setpoing";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "tb_setpoing";
$proto37["m_srcTableName"] = "tb_setpoing";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "MON_TAG";
$proto37["m_columns"][] = "MON_USER";
$proto37["m_columns"][] = "SET_DATA_DE_CADASTRO";
$proto37["m_columns"][] = "SET_MAX_T";
$proto37["m_columns"][] = "SET_MIN_T";
$proto37["m_columns"][] = "SET_MAX_U";
$proto37["m_columns"][] = "SET_MIN_U";
$proto37["m_columns"][] = "SET_LIGAR";
$proto37["m_columns"][] = "SET_DESLIGAR";
$proto37["m_columns"][] = "SET_TIPO_DE_CONTROLE";
$proto37["m_columns"][] = "SET_IP";
$proto37["m_columns"][] = "SET_NOME_DA_REDE";
$proto37["m_columns"][] = "SET_PASSWORD_DA_REDE";
$proto37["m_columns"][] = "SET_BLOQUEADO";
$proto37["m_columns"][] = "SET_OBS";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "tb_setpoing";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "tb_setpoing";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="tb_setpoing";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_tb_setpoing = createSqlQuery_tb_setpoing();


	
		;

															

$tdatatb_setpoing[".sqlquery"] = $queryData_tb_setpoing;



$tableEvents["tb_setpoing"] = new eventsBase;
$tdatatb_setpoing[".hasEvents"] = false;

?>