<?php
$tdata24horas_chart = array();
$tdata24horas_chart[".searchableFields"] = array();
$tdata24horas_chart[".ShortName"] = "24horas_chart";
$tdata24horas_chart[".OwnerID"] = "";
$tdata24horas_chart[".OriginalTable"] = "24horas";


$tdata24horas_chart[".pagesByType"] = my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" );
$tdata24horas_chart[".originalPagesByType"] = $tdata24horas_chart[".pagesByType"];
$tdata24horas_chart[".pages"] = types2pages( my_json_decode( "{\"chart\":[\"chart\"],\"search\":[\"search\"]}" ) );
$tdata24horas_chart[".originalPages"] = $tdata24horas_chart[".pages"];
$tdata24horas_chart[".defaultPages"] = my_json_decode( "{\"chart\":\"chart\",\"search\":\"search\"}" );
$tdata24horas_chart[".originalDefaultPages"] = $tdata24horas_chart[".defaultPages"];

//	field labels
$fieldLabels24horas_chart = array();
$fieldToolTips24horas_chart = array();
$pageTitles24horas_chart = array();
$placeHolders24horas_chart = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabels24horas_chart["Portuguese(Brazil)"] = array();
	$fieldToolTips24horas_chart["Portuguese(Brazil)"] = array();
	$placeHolders24horas_chart["Portuguese(Brazil)"] = array();
	$pageTitles24horas_chart["Portuguese(Brazil)"] = array();
	$fieldLabels24horas_chart["Portuguese(Brazil)"]["HORA"] = "HORA";
	$fieldToolTips24horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$placeHolders24horas_chart["Portuguese(Brazil)"]["HORA"] = "";
	$fieldLabels24horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "MON TEMP";
	$fieldToolTips24horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$placeHolders24horas_chart["Portuguese(Brazil)"]["MON_TEMP"] = "";
	$fieldLabels24horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "MON UMID";
	$fieldToolTips24horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	$placeHolders24horas_chart["Portuguese(Brazil)"]["MON_UMID"] = "";
	if (count($fieldToolTips24horas_chart["Portuguese(Brazil)"]))
		$tdata24horas_chart[".isUseToolTips"] = true;
}


	$tdata24horas_chart[".NCSearch"] = true;

	$tdata24horas_chart[".ChartRefreshTime"] = 0;


$tdata24horas_chart[".shortTableName"] = "24horas_chart";
$tdata24horas_chart[".nSecOptions"] = 0;

$tdata24horas_chart[".mainTableOwnerID"] = "";
$tdata24horas_chart[".entityType"] = 3;
$tdata24horas_chart[".connId"] = "db9f9deaairwebatMYSQL5014site4";


$tdata24horas_chart[".strOriginalTableName"] = "24horas";

	



$tdata24horas_chart[".showAddInPopup"] = false;

$tdata24horas_chart[".showEditInPopup"] = false;

$tdata24horas_chart[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdata24horas_chart[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdata24horas_chart[".listAjax"] = false;
//	temporary
$tdata24horas_chart[".listAjax"] = false;

	$tdata24horas_chart[".audit"] = false;

	$tdata24horas_chart[".locking"] = false;


$pages = $tdata24horas_chart[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdata24horas_chart[".edit"] = true;
	$tdata24horas_chart[".afterEditAction"] = 1;
	$tdata24horas_chart[".closePopupAfterEdit"] = 1;
	$tdata24horas_chart[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdata24horas_chart[".add"] = true;
$tdata24horas_chart[".afterAddAction"] = 1;
$tdata24horas_chart[".closePopupAfterAdd"] = 1;
$tdata24horas_chart[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdata24horas_chart[".list"] = true;
}



$tdata24horas_chart[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdata24horas_chart[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdata24horas_chart[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdata24horas_chart[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdata24horas_chart[".printFriendly"] = true;
}



$tdata24horas_chart[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdata24horas_chart[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdata24horas_chart[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdata24horas_chart[".isUseAjaxSuggest"] = true;






$tdata24horas_chart[".ajaxCodeSnippetAdded"] = false;

$tdata24horas_chart[".buttonsAdded"] = false;

$tdata24horas_chart[".addPageEvents"] = false;

// use timepicker for search panel
$tdata24horas_chart[".isUseTimeForSearch"] = false;


$tdata24horas_chart[".badgeColor"] = "8FBC8B";


$tdata24horas_chart[".allSearchFields"] = array();
$tdata24horas_chart[".filterFields"] = array();
$tdata24horas_chart[".requiredSearchFields"] = array();

$tdata24horas_chart[".googleLikeFields"] = array();
$tdata24horas_chart[".googleLikeFields"][] = "HORA";
$tdata24horas_chart[".googleLikeFields"][] = "MON_TEMP";
$tdata24horas_chart[".googleLikeFields"][] = "MON_UMID";



$tdata24horas_chart[".tableType"] = "chart";

$tdata24horas_chart[".printerPageOrientation"] = 0;
$tdata24horas_chart[".nPrinterPageScale"] = 100;

$tdata24horas_chart[".nPrinterSplitRecords"] = 40;

$tdata24horas_chart[".geocodingEnabled"] = false;



// chart settings
$tdata24horas_chart[".chartType"] = "Line";
// end of chart settings








$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdata24horas_chart[".strOrderBy"] = $tstrOrderBy;

$tdata24horas_chart[".orderindexes"] = array();


$tdata24horas_chart[".sqlHead"] = "SELECT HORA,  	MON_TEMP,  	MON_UMID";
$tdata24horas_chart[".sqlFrom"] = "FROM `24horas`";
$tdata24horas_chart[".sqlWhereExpr"] = "";
$tdata24horas_chart[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdata24horas_chart[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdata24horas_chart[".arrGroupsPerPage"] = $arrGPP;

$tdata24horas_chart[".highlightSearchResults"] = true;

$tableKeys24horas_chart = array();
$tdata24horas_chart[".Keys"] = $tableKeys24horas_chart;


$tdata24horas_chart[".hideMobileList"] = array();




//	HORA
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "HORA";
	$fdata["GoodName"] = "HORA";
	$fdata["ownerTable"] = "24horas";
	$fdata["Label"] = GetFieldLabel("24horas_Chart","HORA");
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


	$tdata24horas_chart["HORA"] = $fdata;
		$tdata24horas_chart[".searchableFields"][] = "HORA";
//	MON_TEMP
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "MON_TEMP";
	$fdata["GoodName"] = "MON_TEMP";
	$fdata["ownerTable"] = "24horas";
	$fdata["Label"] = GetFieldLabel("24horas_Chart","MON_TEMP");
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


	$tdata24horas_chart["MON_TEMP"] = $fdata;
		$tdata24horas_chart[".searchableFields"][] = "MON_TEMP";
//	MON_UMID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "MON_UMID";
	$fdata["GoodName"] = "MON_UMID";
	$fdata["ownerTable"] = "24horas";
	$fdata["Label"] = GetFieldLabel("24horas_Chart","MON_UMID");
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


	$tdata24horas_chart["MON_UMID"] = $fdata;
		$tdata24horas_chart[".searchableFields"][] = "MON_UMID";

$tdata24horas_chart[".chartLabelField"] = "HORA";
$tdata24horas_chart[".chartSeries"] = array();
$tdata24horas_chart[".chartSeries"][] = array( 
	"field" => "MON_TEMP",
	"total" => ""
);
	$tdata24horas_chart[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">24horas Chart</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">line</attr>
		</attr>

		<attr value="parameters">';
	$tdata24horas_chart[".chartXml"] .= '<attr value="0">
			<attr value="name">MON_TEMP</attr>';
	$tdata24horas_chart[".chartXml"] .= '</attr>';
	$tdata24horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">HORA</attr>
	</attr>';
	$tdata24horas_chart[".chartXml"] .= '</attr>
			<attr value="appearance">';


	$tdata24horas_chart[".chartXml"] .= '<attr value="head">'.xmlencode("24horas Chart").'</attr>
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
$tdata24horas_chart[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdata24horas_chart[".chartXml"] .= '<attr value="0">
		<attr value="name">HORA</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("24horas_Chart","HORA")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata24horas_chart[".chartXml"] .= '<attr value="1">
		<attr value="name">MON_TEMP</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("24horas_Chart","MON_TEMP")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdata24horas_chart[".chartXml"] .= '<attr value="2">
		<attr value="name">MON_UMID</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("24horas_Chart","MON_UMID")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdata24horas_chart[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">24horas Chart</attr>
<attr value="short_table_name">24horas_chart</attr>
</attr>

</chart>';

$tables_data["24horas Chart"]=&$tdata24horas_chart;
$field_labels["24horas_Chart"] = &$fieldLabels24horas_chart;
$fieldToolTips["24horas_Chart"] = &$fieldToolTips24horas_chart;
$placeHolders["24horas_Chart"] = &$placeHolders24horas_chart;
$page_titles["24horas_Chart"] = &$pageTitles24horas_chart;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["24horas Chart"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["24horas Chart"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_24horas_chart()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "HORA,  	MON_TEMP,  	MON_UMID";
$proto0["m_strFrom"] = "FROM `24horas`";
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
	"m_strTable" => "24horas",
	"m_srcTableName" => "24horas Chart"
));

$proto6["m_sql"] = "HORA";
$proto6["m_srcTableName"] = "24horas Chart";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_TEMP",
	"m_strTable" => "24horas",
	"m_srcTableName" => "24horas Chart"
));

$proto8["m_sql"] = "MON_TEMP";
$proto8["m_srcTableName"] = "24horas Chart";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "MON_UMID",
	"m_strTable" => "24horas",
	"m_srcTableName" => "24horas Chart"
));

$proto10["m_sql"] = "MON_UMID";
$proto10["m_srcTableName"] = "24horas Chart";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "24horas";
$proto13["m_srcTableName"] = "24horas Chart";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "HORA";
$proto13["m_columns"][] = "MON_TEMP";
$proto13["m_columns"][] = "MON_UMID";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "`24horas`";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "24horas Chart";
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
$proto0["m_srcTableName"]="24horas Chart";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_24horas_chart = createSqlQuery_24horas_chart();


	
		;

			

$tdata24horas_chart[".sqlquery"] = $queryData_24horas_chart;



$tableEvents["24horas Chart"] = new eventsBase;
$tdata24horas_chart[".hasEvents"] = false;

?>