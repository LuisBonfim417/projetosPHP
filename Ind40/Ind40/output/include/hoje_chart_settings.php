<?php
$tdatahoje_chart = array();
$tdatahoje_chart[".searchableFields"] = array();
$tdatahoje_chart[".ShortName"] = "hoje_chart";
$tdatahoje_chart[".OwnerID"] = "";
$tdatahoje_chart[".OriginalTable"] = "hoje";


$tdatahoje_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdatahoje_chart[".originalPagesByType"] = $tdatahoje_chart[".pagesByType"];
$tdatahoje_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdatahoje_chart[".originalPages"] = $tdatahoje_chart[".pages"];
$tdatahoje_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdatahoje_chart[".originalDefaultPages"] = $tdatahoje_chart[".defaultPages"];

//	field labels
$fieldLabelshoje_chart = array();
$fieldToolTipshoje_chart = array();
$pageTitleshoje_chart = array();
$placeHoldershoje_chart = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelshoje_chart["Portuguese(Brazil)"] = array();
	$fieldToolTipshoje_chart["Portuguese(Brazil)"] = array();
	$placeHoldershoje_chart["Portuguese(Brazil)"] = array();
	$pageTitleshoje_chart["Portuguese(Brazil)"] = array();
	$fieldLabelshoje_chart["Portuguese(Brazil)"]["MON_ID"] = "MON ID";
	$fieldToolTipshoje_chart["Portuguese(Brazil)"]["MON_ID"] = "";
	$placeHoldershoje_chart["Portuguese(Brazil)"]["MON_ID"] = "";
	$fieldLabelshoje_chart["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTipshoje_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHoldershoje_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabelshoje_chart["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTipshoje_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHoldershoje_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTipshoje_chart["Portuguese(Brazil)"]))
		$tdatahoje_chart[".isUseToolTips"] = true;
}


	$tdatahoje_chart[".NCSearch"] = true;

	$tdatahoje_chart[".ChartRefreshTime"] = 0;


$tdatahoje_chart[".shortTableName"] = "hoje_chart";
$tdatahoje_chart[".nSecOptions"] = 0;

$tdatahoje_chart[".mainTableOwnerID"] = "";
$tdatahoje_chart[".entityType"] = 3;
$tdatahoje_chart[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdatahoje_chart[".strOriginalTableName"] = "hoje";

	



$tdatahoje_chart[".showAddInPopup"] = false;

$tdatahoje_chart[".showEditInPopup"] = false;

$tdatahoje_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatahoje_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatahoje_chart[".listAjax"] = false;
//	temporary
$tdatahoje_chart[".listAjax"] = false;

	$tdatahoje_chart[".audit"] = false;

	$tdatahoje_chart[".locking"] = false;


$pages = $tdatahoje_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatahoje_chart[".edit"] = true;
	$tdatahoje_chart[".afterEditAction"] = 1;
	$tdatahoje_chart[".closePopupAfterEdit"] = 1;
	$tdatahoje_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatahoje_chart[".add"] = true;
$tdatahoje_chart[".afterAddAction"] = 1;
$tdatahoje_chart[".closePopupAfterAdd"] = 1;
$tdatahoje_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatahoje_chart[".list"] = true;
}



$tdatahoje_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatahoje_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatahoje_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatahoje_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatahoje_chart[".printFriendly"] = true;
}



$tdatahoje_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatahoje_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatahoje_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatahoje_chart[".isUseAjaxSuggest"] = true;






$tdatahoje_chart[".ajaxCodeSnippetAdded"] = false;

$tdatahoje_chart[".buttonsAdded"] = false;

$tdatahoje_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdatahoje_chart[".isUseTimeForSearch"] = false;


$tdatahoje_chart[".badgeColor"] = "DB7093";


$tdatahoje_chart[".allSearchFields"] = array();
$tdatahoje_chart[".filterFields"] = array();
$tdatahoje_chart[".requiredSearchFields"] = array();

$tdatahoje_chart[".googleLikeFields"] = array();
$tdatahoje_chart[".googleLikeFields"][] = "MON_ID";
$tdatahoje_chart[".googleLikeFields"][] = "MON_TEMP";
$tdatahoje_chart[".googleLikeFields"][] = "MON_UMID";



$tdatahoje_chart[".tableType"] = "chart";

$tdatahoje_chart[".printerPageOrientation"] = 0;
$tdatahoje_chart[".nPrinterPageScale"] = 100;

$tdatahoje_chart[".nPrinterSplitRecords"] = 40;

$tdatahoje_chart[".geocodingEnabled"] = false;



// chart settings
$tdatahoje_chart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatahoje_chart[".strOrderBy"] = $tstrOrderBy;

$tdatahoje_chart[".orderindexes"] = array();


$tdatahoje_chart[".sqlHead"] = "SELECT MON_ID,  	MON_TEMP,  	MON_UMID";
$tdatahoje_chart[".sqlFrom"] = "FROM hoje";
$tdatahoje_chart[".sqlWhereExpr"] = "";
$tdatahoje_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatahoje_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatahoje_chart[".arrGroupsPerPage"] = $arrGPP;

$tdatahoje_chart[".highlightSearchResults"] = true;

$tableKeyshoje_chart = array();
$tdatahoje_chart[".Keys"] = $tableKeyshoje_chart;


$tdatahoje_chart[".hideMobileList"] = array();




//	MON_ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "MON_ID";
	$fdata["GoodName"] = "MON_ID";
	$fdata["ownerTable"] = "hoje";
	$fdata["Label"] = GetFieldLabel("hoje_Chart","MON_ID");
	$fdata["FieldType"] = 20;

	
	
	
			

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatahoje_chart["MON_ID"] = $fdata;
		$tdatahoje_chart[".searchableFields"][] = "MON_ID";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "hoje";
	$fdata["Label"] = GetFieldLabel("hoje_Chart","MON_TEMP");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatahoje_chart["MON_TEMP"] = $fdata;
		$tdatahoje_chart[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "hoje";
	$fdata["Label"] = GetFieldLabel("hoje_Chart","MON_UMID");
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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
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


	$tdatahoje_chart["MON_UMID"] = $fdata;
		$tdatahoje_chart[".searchableFields"][] = "MON_UMID";

$tdatahoje_chart[".chartLabelField"] = "MON_ID";
$tdatahoje_chart[".chartSeries"] = array();
$tdatahoje_chart[".chartSeries"][] = array( 
	"field" => "MON_ID",
	"total" => ""
);
	$tdatahoje_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">hoje Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdatahoje_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">MON_ID</attr>';
	$tdatahoje_chart[".chartXml"] .= '</attr>';
	$tdatahoje_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">MON_ID</attr>
	</attr>';
	$tdatahoje_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdatahoje_chart[".chartXml"] .= '<attr value="head">'.xmlencode("hoje Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("MON_ID").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdatahoje_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatahoje_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">MON_ID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hoje_Chart","MON_ID")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahoje_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">MON_TEMP</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hoje_Chart","MON_TEMP")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatahoje_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">MON_UMID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("hoje_Chart","MON_UMID")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatahoje_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">hoje Chart</attr>
<attr value="short_table_name">hoje_chart</attr>
</attr>

</chart>';

$tables_data["hoje Chart"]=&$tdatahoje_chart;
$field_labels["hoje_Chart"] = &$fieldLabelshoje_chart;
$fieldToolTips["hoje_Chart"] = &$fieldToolTipshoje_chart;
$placeHolders["hoje_Chart"] = &$placeHoldershoje_chart;
$page_titles["hoje_Chart"] = &$pageTitleshoje_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["hoje Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["hoje Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_hoje_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "MON_ID,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM hoje";
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
	"m_strTable" => "hoje",
	"m_srcTableName" => "hoje Chart"
));

$proto6["m_sql"] = "MON_ID";
$proto6["m_srcTableName"] = "hoje Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "hoje",
	"m_srcTableName" => "hoje Chart"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "hoje Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "hoje",
	"m_srcTableName" => "hoje Chart"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "hoje Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "hoje";
$proto13["m_srcTableName"] = "hoje Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "MON_ID";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "hoje";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "hoje Chart";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="hoje Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_hoje_chart = createSqlQuery_hoje_chart();


	
		;

			

$tdatahoje_chart[".sqlquery"] = $queryData_hoje_chart;



$tableEvents["hoje Chart"] = new eventsBase;
$tdatahoje_chart[".hasEvents"] = false;

?>