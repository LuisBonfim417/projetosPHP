<?php
$tdata6horas_chart = array();
$tdata6horas_chart[".searchableFields"] = array();
$tdata6horas_chart[".ShortName"] = "6horas_chart";
$tdata6horas_chart[".OwnerID"] = "";
$tdata6horas_chart[".OriginalTable"] = "6horas";


$tdata6horas_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdata6horas_chart[".originalPagesByType"] = $tdata6horas_chart[".pagesByType"];
$tdata6horas_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdata6horas_chart[".originalPages"] = $tdata6horas_chart[".pages"];
$tdata6horas_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdata6horas_chart[".originalDefaultPages"] = $tdata6horas_chart[".defaultPages"];

//	field labels
$fieldLabels6horas_chart = array();
$fieldToolTips6horas_chart = array();
$pageTitles6horas_chart = array();
$placeHolders6horas_chart = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels6horas_chart["Portuguese(Brazil)"] = array();
	$fieldToolTips6horas_chart["Portuguese(Brazil)"] = array();
	$placeHolders6horas_chart["Portuguese(Brazil)"] = array();
	$pageTitles6horas_chart["Portuguese(Brazil)"] = array();
	$fieldLabels6horas_chart["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips6horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders6horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels6horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips6horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders6horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels6horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips6horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders6horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips6horas_chart["Portuguese(Brazil)"]))
		$tdata6horas_chart[".isUseToolTips"] = true;
}


	$tdata6horas_chart[".NCSearch"] = true;

	$tdata6horas_chart[".ChartRefreshTime"] = 0;


$tdata6horas_chart[".shortTableName"] = "6horas_chart";
$tdata6horas_chart[".nSecOptions"] = 0;

$tdata6horas_chart[".mainTableOwnerID"] = "";
$tdata6horas_chart[".entityType"] = 3;
$tdata6horas_chart[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata6horas_chart[".strOriginalTableName"] = "6horas";

	



$tdata6horas_chart[".showAddInPopup"] = false;

$tdata6horas_chart[".showEditInPopup"] = false;

$tdata6horas_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata6horas_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata6horas_chart[".listAjax"] = false;
//	temporary
$tdata6horas_chart[".listAjax"] = false;

	$tdata6horas_chart[".audit"] = false;

	$tdata6horas_chart[".locking"] = false;


$pages = $tdata6horas_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata6horas_chart[".edit"] = true;
	$tdata6horas_chart[".afterEditAction"] = 1;
	$tdata6horas_chart[".closePopupAfterEdit"] = 1;
	$tdata6horas_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata6horas_chart[".add"] = true;
$tdata6horas_chart[".afterAddAction"] = 1;
$tdata6horas_chart[".closePopupAfterAdd"] = 1;
$tdata6horas_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata6horas_chart[".list"] = true;
}



$tdata6horas_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata6horas_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata6horas_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata6horas_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata6horas_chart[".printFriendly"] = true;
}



$tdata6horas_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata6horas_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata6horas_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata6horas_chart[".isUseAjaxSuggest"] = true;






$tdata6horas_chart[".ajaxCodeSnippetAdded"] = false;

$tdata6horas_chart[".buttonsAdded"] = false;

$tdata6horas_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdata6horas_chart[".isUseTimeForSearch"] = false;


$tdata6horas_chart[".badgeColor"] = "3CB371";


$tdata6horas_chart[".allSearchFields"] = array();
$tdata6horas_chart[".filterFields"] = array();
$tdata6horas_chart[".requiredSearchFields"] = array();

$tdata6horas_chart[".googleLikeFields"] = array();
$tdata6horas_chart[".googleLikeFields"][] = "HORA";
$tdata6horas_chart[".googleLikeFields"][] = "MON_TEMP";
$tdata6horas_chart[".googleLikeFields"][] = "MON_UMID";



$tdata6horas_chart[".tableType"] = "chart";

$tdata6horas_chart[".printerPageOrientation"] = 0;
$tdata6horas_chart[".nPrinterPageScale"] = 100;

$tdata6horas_chart[".nPrinterSplitRecords"] = 40;

$tdata6horas_chart[".geocodingEnabled"] = false;



// chart settings
$tdata6horas_chart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata6horas_chart[".strOrderBy"] = $tstrOrderBy;

$tdata6horas_chart[".orderindexes"] = array();


$tdata6horas_chart[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata6horas_chart[".sqlFrom"] = "FROM `6horas`";
$tdata6horas_chart[".sqlWhereExpr"] = "";
$tdata6horas_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata6horas_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata6horas_chart[".arrGroupsPerPage"] = $arrGPP;

$tdata6horas_chart[".highlightSearchResults"] = true;

$tableKeys6horas_chart = array();
$tdata6horas_chart[".Keys"] = $tableKeys6horas_chart;


$tdata6horas_chart[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "6horas";
	$fdata["Label"] = GetFieldLabel("6horas_Chart","HORA");
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


	$tdata6horas_chart["HORA"] = $fdata;
		$tdata6horas_chart[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "6horas";
	$fdata["Label"] = GetFieldLabel("6horas_Chart","MON_TEMP");
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


	$tdata6horas_chart["MON_TEMP"] = $fdata;
		$tdata6horas_chart[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "6horas";
	$fdata["Label"] = GetFieldLabel("6horas_Chart","MON_UMID");
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


	$tdata6horas_chart["MON_UMID"] = $fdata;
		$tdata6horas_chart[".searchableFields"][] = "MON_UMID";

$tdata6horas_chart[".chartLabelField"] = "HORA";
$tdata6horas_chart[".chartSeries"] = array();
$tdata6horas_chart[".chartSeries"][] = array( 
	"field" => "MON_TEMP",
	"total" => ""
);
	$tdata6horas_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">6horas Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdata6horas_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">MON_TEMP</attr>';
	$tdata6horas_chart[".chartXml"] .= '</attr>';
	$tdata6horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">HORA</attr>
	</attr>';
	$tdata6horas_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdata6horas_chart[".chartXml"] .= '<attr value="head">'.xmlencode("6horas Chart").'</attr>
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
$tdata6horas_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdata6horas_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">HORA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("6horas_Chart","HORA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata6horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">MON_TEMP</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("6horas_Chart","MON_TEMP")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata6horas_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">MON_UMID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("6horas_Chart","MON_UMID")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdata6horas_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">6horas Chart</attr>
<attr value="short_table_name">6horas_chart</attr>
</attr>

</chart>';

$tables_data["6horas Chart"]=&$tdata6horas_chart;
$field_labels["6horas_Chart"] = &$fieldLabels6horas_chart;
$fieldToolTips["6horas_Chart"] = &$fieldToolTips6horas_chart;
$placeHolders["6horas_Chart"] = &$placeHolders6horas_chart;
$page_titles["6horas_Chart"] = &$pageTitles6horas_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["6horas Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["6horas Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_6horas_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `6horas`";
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
	"m_strTable" => "6horas",
	"m_srcTableName" => "6horas Chart"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "6horas Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "6horas",
	"m_srcTableName" => "6horas Chart"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "6horas Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "6horas",
	"m_srcTableName" => "6horas Chart"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "6horas Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "6horas";
$proto13["m_srcTableName"] = "6horas Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`6horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "6horas Chart";
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
$proto0["m_srcTableName"]="6horas Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_6horas_chart = createSqlQuery_6horas_chart();


	
		;

			

$tdata6horas_chart[".sqlquery"] = $queryData_6horas_chart;



$tableEvents["6horas Chart"] = new eventsBase;
$tdata6horas_chart[".hasEvents"] = false;

?>