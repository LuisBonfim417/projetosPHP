<?php
$tdata12horas_chart = array();
$tdata12horas_chart[".searchableFields"] = array();
$tdata12horas_chart[".ShortName"] = "12horas_chart";
$tdata12horas_chart[".OwnerID"] = "";
$tdata12horas_chart[".OriginalTable"] = "12horas";


$tdata12horas_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdata12horas_chart[".originalPagesByType"] = $tdata12horas_chart[".pagesByType"];
$tdata12horas_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdata12horas_chart[".originalPages"] = $tdata12horas_chart[".pages"];
$tdata12horas_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdata12horas_chart[".originalDefaultPages"] = $tdata12horas_chart[".defaultPages"];

//	field labels
$fieldLabels12horas_chart = array();
$fieldToolTips12horas_chart = array();
$pageTitles12horas_chart = array();
$placeHolders12horas_chart = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels12horas_chart["Portuguese(Brazil)"] = array();
	$fieldToolTips12horas_chart["Portuguese(Brazil)"] = array();
	$placeHolders12horas_chart["Portuguese(Brazil)"] = array();
	$pageTitles12horas_chart["Portuguese(Brazil)"] = array();
	$fieldLabels12horas_chart["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips12horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders12horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels12horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips12horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders12horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels12horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips12horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders12horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips12horas_chart["Portuguese(Brazil)"]))
		$tdata12horas_chart[".isUseToolTips"] = true;
}


	$tdata12horas_chart[".NCSearch"] = true;

	$tdata12horas_chart[".ChartRefreshTime"] = 0;


$tdata12horas_chart[".shortTableName"] = "12horas_chart";
$tdata12horas_chart[".nSecOptions"] = 0;

$tdata12horas_chart[".mainTableOwnerID"] = "";
$tdata12horas_chart[".entityType"] = 3;
$tdata12horas_chart[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata12horas_chart[".strOriginalTableName"] = "12horas";

	



$tdata12horas_chart[".showAddInPopup"] = false;

$tdata12horas_chart[".showEditInPopup"] = false;

$tdata12horas_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata12horas_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata12horas_chart[".listAjax"] = false;
//	temporary
$tdata12horas_chart[".listAjax"] = false;

	$tdata12horas_chart[".audit"] = false;

	$tdata12horas_chart[".locking"] = false;


$pages = $tdata12horas_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata12horas_chart[".edit"] = true;
	$tdata12horas_chart[".afterEditAction"] = 1;
	$tdata12horas_chart[".closePopupAfterEdit"] = 1;
	$tdata12horas_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata12horas_chart[".add"] = true;
$tdata12horas_chart[".afterAddAction"] = 1;
$tdata12horas_chart[".closePopupAfterAdd"] = 1;
$tdata12horas_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata12horas_chart[".list"] = true;
}



$tdata12horas_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata12horas_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata12horas_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata12horas_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata12horas_chart[".printFriendly"] = true;
}



$tdata12horas_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata12horas_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata12horas_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata12horas_chart[".isUseAjaxSuggest"] = true;






$tdata12horas_chart[".ajaxCodeSnippetAdded"] = false;

$tdata12horas_chart[".buttonsAdded"] = false;

$tdata12horas_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdata12horas_chart[".isUseTimeForSearch"] = false;


$tdata12horas_chart[".badgeColor"] = "008B8B";


$tdata12horas_chart[".allSearchFields"] = array();
$tdata12horas_chart[".filterFields"] = array();
$tdata12horas_chart[".requiredSearchFields"] = array();

$tdata12horas_chart[".googleLikeFields"] = array();
$tdata12horas_chart[".googleLikeFields"][] = "HORA";
$tdata12horas_chart[".googleLikeFields"][] = "MON_TEMP";
$tdata12horas_chart[".googleLikeFields"][] = "MON_UMID";



$tdata12horas_chart[".tableType"] = "chart";

$tdata12horas_chart[".printerPageOrientation"] = 0;
$tdata12horas_chart[".nPrinterPageScale"] = 100;

$tdata12horas_chart[".nPrinterSplitRecords"] = 40;

$tdata12horas_chart[".geocodingEnabled"] = false;



// chart settings
$tdata12horas_chart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata12horas_chart[".strOrderBy"] = $tstrOrderBy;

$tdata12horas_chart[".orderindexes"] = array();


$tdata12horas_chart[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata12horas_chart[".sqlFrom"] = "FROM `12horas`";
$tdata12horas_chart[".sqlWhereExpr"] = "";
$tdata12horas_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata12horas_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata12horas_chart[".arrGroupsPerPage"] = $arrGPP;

$tdata12horas_chart[".highlightSearchResults"] = true;

$tableKeys12horas_chart = array();
$tdata12horas_chart[".Keys"] = $tableKeys12horas_chart;


$tdata12horas_chart[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "12horas";
	$fdata["Label"] = GetFieldLabel("12horas_Chart","HORA");
	$fdata["FieldType"] = 200;

	
	
	
			

		$fdata["strField"] = "HORA";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "HORA";

	
	
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
			$edata["EditParams"].= " maxlength=7";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
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


	$tdata12horas_chart["HORA"] = $fdata;
		$tdata12horas_chart[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "12horas";
	$fdata["Label"] = GetFieldLabel("12horas_Chart","MON_TEMP");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_TEMP";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_TEMP";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 6;

	
	
	
	
		
	
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


	$tdata12horas_chart["MON_TEMP"] = $fdata;
		$tdata12horas_chart[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "12horas";
	$fdata["Label"] = GetFieldLabel("12horas_Chart","MON_UMID");
	$fdata["FieldType"] = 14;

	
	
	
			

		$fdata["strField"] = "MON_UMID";

	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MON_UMID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 6;

	
	
	
	
		
	
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


	$tdata12horas_chart["MON_UMID"] = $fdata;
		$tdata12horas_chart[".searchableFields"][] = "MON_UMID";

$tdata12horas_chart[".chartLabelField"] = "HORA";
$tdata12horas_chart[".chartSeries"] = array();
$tdata12horas_chart[".chartSeries"][] = array( 
	"field" => "MON_TEMP",
	"total" => ""
);
	$tdata12horas_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">12horas Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdata12horas_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">MON_TEMP</attr>';
	$tdata12horas_chart[".chartXml"] .= '</attr>';
	$tdata12horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">HORA</attr>
	</attr>';
	$tdata12horas_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdata12horas_chart[".chartXml"] .= '<attr value="head">'.xmlencode("12horas Chart").'</attr>
<attr value="foot">'.xmlencode("Legend Title").'</attr>
<attr value="y_axis_label">'.xmlencode("MON_TEMP").'</attr>


<attr value="slegend">true</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">None</attr>
<attr value="cview">Column</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">0</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>';
$tdata12horas_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdata12horas_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">HORA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("12horas_Chart","HORA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata12horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">MON_TEMP</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("12horas_Chart","MON_TEMP")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata12horas_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">MON_UMID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("12horas_Chart","MON_UMID")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdata12horas_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">12horas Chart</attr>
<attr value="short_table_name">12horas_chart</attr>
</attr>

</chart>';

$tables_data["12horas Chart"]=&$tdata12horas_chart;
$field_labels["12horas_Chart"] = &$fieldLabels12horas_chart;
$fieldToolTips["12horas_Chart"] = &$fieldToolTips12horas_chart;
$placeHolders["12horas_Chart"] = &$placeHolders12horas_chart;
$page_titles["12horas_Chart"] = &$pageTitles12horas_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["12horas Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["12horas Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_12horas_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `12horas`";
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
	"m_strName" => "HORA",
	"m_strTable" => "12horas",
	"m_srcTableName" => "12horas Chart"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "12horas Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "12horas",
	"m_srcTableName" => "12horas Chart"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "12horas Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "12horas",
	"m_srcTableName" => "12horas Chart"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "12horas Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "12horas";
$proto13["m_srcTableName"] = "12horas Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`12horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "12horas Chart";
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
$proto0["m_srcTableName"]="12horas Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_12horas_chart = createSqlQuery_12horas_chart();


	
		;

			

$tdata12horas_chart[".sqlquery"] = $queryData_12horas_chart;



$tableEvents["12horas Chart"] = new eventsBase;
$tdata12horas_chart[".hasEvents"] = false;

?>