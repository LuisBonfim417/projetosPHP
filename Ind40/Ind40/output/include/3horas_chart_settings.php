<?php
$tdata3horas_chart = array();
$tdata3horas_chart[".searchableFields"] = array();
$tdata3horas_chart[".ShortName"] = "3horas_chart";
$tdata3horas_chart[".OwnerID"] = "";
$tdata3horas_chart[".OriginalTable"] = "3horas";


$tdata3horas_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdata3horas_chart[".originalPagesByType"] = $tdata3horas_chart[".pagesByType"];
$tdata3horas_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdata3horas_chart[".originalPages"] = $tdata3horas_chart[".pages"];
$tdata3horas_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdata3horas_chart[".originalDefaultPages"] = $tdata3horas_chart[".defaultPages"];

//	field labels
$fieldLabels3horas_chart = array();
$fieldToolTips3horas_chart = array();
$pageTitles3horas_chart = array();
$placeHolders3horas_chart = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels3horas_chart["Portuguese(Brazil)"] = array();
	$fieldToolTips3horas_chart["Portuguese(Brazil)"] = array();
	$placeHolders3horas_chart["Portuguese(Brazil)"] = array();
	$pageTitles3horas_chart["Portuguese(Brazil)"] = array();
	$fieldLabels3horas_chart["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips3horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders3horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels3horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips3horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders3horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels3horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips3horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders3horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips3horas_chart["Portuguese(Brazil)"]))
		$tdata3horas_chart[".isUseToolTips"] = true;
}


	$tdata3horas_chart[".NCSearch"] = true;

	$tdata3horas_chart[".ChartRefreshTime"] = 0;


$tdata3horas_chart[".shortTableName"] = "3horas_chart";
$tdata3horas_chart[".nSecOptions"] = 0;

$tdata3horas_chart[".mainTableOwnerID"] = "";
$tdata3horas_chart[".entityType"] = 3;
$tdata3horas_chart[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata3horas_chart[".strOriginalTableName"] = "3horas";

	



$tdata3horas_chart[".showAddInPopup"] = false;

$tdata3horas_chart[".showEditInPopup"] = false;

$tdata3horas_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata3horas_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata3horas_chart[".listAjax"] = false;
//	temporary
$tdata3horas_chart[".listAjax"] = false;

	$tdata3horas_chart[".audit"] = false;

	$tdata3horas_chart[".locking"] = false;


$pages = $tdata3horas_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata3horas_chart[".edit"] = true;
	$tdata3horas_chart[".afterEditAction"] = 1;
	$tdata3horas_chart[".closePopupAfterEdit"] = 1;
	$tdata3horas_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata3horas_chart[".add"] = true;
$tdata3horas_chart[".afterAddAction"] = 1;
$tdata3horas_chart[".closePopupAfterAdd"] = 1;
$tdata3horas_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata3horas_chart[".list"] = true;
}



$tdata3horas_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata3horas_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata3horas_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata3horas_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata3horas_chart[".printFriendly"] = true;
}



$tdata3horas_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata3horas_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata3horas_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata3horas_chart[".isUseAjaxSuggest"] = true;






$tdata3horas_chart[".ajaxCodeSnippetAdded"] = false;

$tdata3horas_chart[".buttonsAdded"] = false;

$tdata3horas_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdata3horas_chart[".isUseTimeForSearch"] = false;


$tdata3horas_chart[".badgeColor"] = "E67349";


$tdata3horas_chart[".allSearchFields"] = array();
$tdata3horas_chart[".filterFields"] = array();
$tdata3horas_chart[".requiredSearchFields"] = array();

$tdata3horas_chart[".googleLikeFields"] = array();
$tdata3horas_chart[".googleLikeFields"][] = "HORA";
$tdata3horas_chart[".googleLikeFields"][] = "MON_TEMP";
$tdata3horas_chart[".googleLikeFields"][] = "MON_UMID";



$tdata3horas_chart[".tableType"] = "chart";

$tdata3horas_chart[".printerPageOrientation"] = 0;
$tdata3horas_chart[".nPrinterPageScale"] = 100;

$tdata3horas_chart[".nPrinterSplitRecords"] = 40;

$tdata3horas_chart[".geocodingEnabled"] = false;



// chart settings
$tdata3horas_chart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata3horas_chart[".strOrderBy"] = $tstrOrderBy;

$tdata3horas_chart[".orderindexes"] = array();


$tdata3horas_chart[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata3horas_chart[".sqlFrom"] = "FROM `3horas`";
$tdata3horas_chart[".sqlWhereExpr"] = "";
$tdata3horas_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata3horas_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata3horas_chart[".arrGroupsPerPage"] = $arrGPP;

$tdata3horas_chart[".highlightSearchResults"] = true;

$tableKeys3horas_chart = array();
$tdata3horas_chart[".Keys"] = $tableKeys3horas_chart;


$tdata3horas_chart[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "3horas";
	$fdata["Label"] = GetFieldLabel("3horas_Chart","HORA");
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


	$tdata3horas_chart["HORA"] = $fdata;
		$tdata3horas_chart[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "3horas";
	$fdata["Label"] = GetFieldLabel("3horas_Chart","MON_TEMP");
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


	$tdata3horas_chart["MON_TEMP"] = $fdata;
		$tdata3horas_chart[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "3horas";
	$fdata["Label"] = GetFieldLabel("3horas_Chart","MON_UMID");
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


	$tdata3horas_chart["MON_UMID"] = $fdata;
		$tdata3horas_chart[".searchableFields"][] = "MON_UMID";

$tdata3horas_chart[".chartLabelField"] = "HORA";
$tdata3horas_chart[".chartSeries"] = array();
$tdata3horas_chart[".chartSeries"][] = array( 
	"field" => "MON_TEMP",
	"total" => ""
);
	$tdata3horas_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">3horas Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdata3horas_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">MON_TEMP</attr>';
	$tdata3horas_chart[".chartXml"] .= '</attr>';
	$tdata3horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">HORA</attr>
	</attr>';
	$tdata3horas_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdata3horas_chart[".chartXml"] .= '<attr value="head">'.xmlencode("3horas Chart").'</attr>
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
$tdata3horas_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdata3horas_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">HORA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("3horas_Chart","HORA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata3horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">MON_TEMP</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("3horas_Chart","MON_TEMP")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata3horas_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">MON_UMID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("3horas_Chart","MON_UMID")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdata3horas_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">3horas Chart</attr>
<attr value="short_table_name">3horas_chart</attr>
</attr>

</chart>';

$tables_data["3horas Chart"]=&$tdata3horas_chart;
$field_labels["3horas_Chart"] = &$fieldLabels3horas_chart;
$fieldToolTips["3horas_Chart"] = &$fieldToolTips3horas_chart;
$placeHolders["3horas_Chart"] = &$placeHolders3horas_chart;
$page_titles["3horas_Chart"] = &$pageTitles3horas_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["3horas Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["3horas Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_3horas_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `3horas`";
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
	"m_strTable" => "3horas",
	"m_srcTableName" => "3horas Chart"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "3horas Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "3horas",
	"m_srcTableName" => "3horas Chart"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "3horas Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "3horas",
	"m_srcTableName" => "3horas Chart"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "3horas Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "3horas";
$proto13["m_srcTableName"] = "3horas Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`3horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "3horas Chart";
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
$proto0["m_srcTableName"]="3horas Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_3horas_chart = createSqlQuery_3horas_chart();


	
		;

			

$tdata3horas_chart[".sqlquery"] = $queryData_3horas_chart;



$tableEvents["3horas Chart"] = new eventsBase;
$tdata3horas_chart[".hasEvents"] = false;

?>