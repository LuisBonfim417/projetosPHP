<?php
			$optionsArray = array( 'list' => array( 'inlineAdd' => false,
'detailsAdd' => true,
'inlineEdit' => false,
'delete' => true,
'updateSelected' => false,
'clickSort' => true,
'sortDropdown' => false,
'showHideFields' => false,
'reorderFields' => false ),
'master' => array( 'tb_reference' => array( 'preview' => true ) ),
'listSearch' => array( 'alwaysOnPanelFields' => array(  ),
'searchPanel' => true,
'fixedSearchPanel' => false,
'simpleSearchOptions' => false,
'searchSaving' => false ),
'totals' => array( 'TIC_TICKET' => array( 'totalsType' => '' ),
'TIC_PARENT' => array( 'totalsType' => '' ),
'TIC_DATE' => array( 'totalsType' => '' ),
'TIC_DATE_LAST_UPDATE' => array( 'totalsType' => '' ),
'TIC_SUBJECT' => array( 'totalsType' => '' ),
'TIC_SITUATION' => array( 'totalsType' => '' ),
'TIC_DESCRIPTION' => array( 'totalsType' => '' ),
'TIC_ATTACHMENT' => array( 'totalsType' => '' ),
'REF_REFERENCE' => array( 'totalsType' => '' ),
'TIC_COMMENT' => array( 'totalsType' => '' ),
'CLA_CLASSIFICATION' => array( 'totalsType' => '' ),
'LOGIN_USER_NAME' => array( 'totalsType' => '' ),
'LOGIN_USER_ID' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'TIC_TICKET',
'TIC_PARENT',
'TIC_DATE',
'TIC_DATE_LAST_UPDATE',
'TIC_SUBJECT',
'TIC_SITUATION',
'TIC_DESCRIPTION',
'TIC_ATTACHMENT',
'REF_REFERENCE',
'TIC_COMMENT',
'CLA_CLASSIFICATION',
'LOGIN_USER_NAME',
'LOGIN_USER_ID' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array( 'CLA_CLASSIFICATION',
'TIC_TICKET',
'TIC_SUBJECT',
'TIC_SITUATION',
'TIC_PARENT',
'TIC_DESCRIPTION',
'TIC_DATE_LAST_UPDATE',
'TIC_DATE',
'TIC_COMMENT',
'REF_REFERENCE',
'LOGIN_USER_NAME',
'LOGIN_USER_ID' ),
'filterFields' => array(  ),
'inlineAddFields' => array(  ),
'inlineEditFields' => array(  ),
'fieldItems' => array( 'TIC_TICKET' => array( 'simple_grid_field',
'simple_grid_field13' ),
'TIC_PARENT' => array( 'simple_grid_field1',
'simple_grid_field14' ),
'TIC_DATE' => array( 'simple_grid_field2',
'simple_grid_field15' ),
'TIC_DATE_LAST_UPDATE' => array( 'simple_grid_field3',
'simple_grid_field16' ),
'TIC_SUBJECT' => array( 'simple_grid_field4',
'simple_grid_field17' ),
'TIC_SITUATION' => array( 'simple_grid_field5',
'simple_grid_field18' ),
'TIC_DESCRIPTION' => array( 'simple_grid_field6',
'simple_grid_field19' ),
'TIC_ATTACHMENT' => array( 'simple_grid_field7',
'simple_grid_field20' ),
'REF_REFERENCE' => array( 'simple_grid_field8',
'simple_grid_field21' ),
'TIC_COMMENT' => array( 'simple_grid_field9',
'simple_grid_field22' ),
'CLA_CLASSIFICATION' => array( 'simple_grid_field10',
'simple_grid_field23' ),
'LOGIN_USER_NAME' => array( 'simple_grid_field11',
'simple_grid_field24' ),
'LOGIN_USER_ID' => array( 'simple_grid_field12',
'simple_grid_field25' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => true,
'add' => true,
'view' => true,
'print' => true ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'left' => array( 'logo1',
'expand_button',
'menu',
'search_panel' ),
'supertop' => array( 'collapse_button',
'breadcrumb',
'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'above-grid' => array( 'add',
'inline_add',
'delete',
'details_found',
'page_size',
'print_panel' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'master_info' ),
'grid' => array( 'simple_grid_field13',
'simple_grid_field',
'simple_grid_field14',
'simple_grid_field1',
'simple_grid_field15',
'simple_grid_field2',
'simple_grid_field16',
'simple_grid_field3',
'simple_grid_field17',
'simple_grid_field4',
'simple_grid_field18',
'simple_grid_field5',
'simple_grid_field19',
'simple_grid_field6',
'simple_grid_field20',
'simple_grid_field7',
'simple_grid_field21',
'simple_grid_field8',
'simple_grid_field22',
'simple_grid_field9',
'simple_grid_field23',
'simple_grid_field10',
'simple_grid_field24',
'simple_grid_field11',
'simple_grid_field25',
'simple_grid_field12',
'grid_edit',
'grid_inline_cancel',
'grid_view',
'grid_checkbox_head',
'grid_checkbox' ) ),
'formXtTags' => array( 'above-grid' => array( 'add_link',
'inlineadd_link',
'deleteselected_link',
'details_found',
'recsPerPage',
'print_friendly' ),
'below-grid' => array( 'pagination' ),
'top' => array( 'mastertable_block' ) ),
'itemForms' => array( 'logo1' => 'left',
'expand_button' => 'left',
'menu' => 'left',
'search_panel' => 'left',
'collapse_button' => 'supertop',
'breadcrumb' => 'supertop',
'simple_search' => 'supertop',
'list_options' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'add' => 'above-grid',
'inline_add' => 'above-grid',
'delete' => 'above-grid',
'details_found' => 'above-grid',
'page_size' => 'above-grid',
'print_panel' => 'above-grid',
'pagination' => 'below-grid',
'master_info' => 'top',
'simple_grid_field13' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field14' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field15' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field12' => 'grid',
'grid_edit' => 'grid',
'grid_inline_cancel' => 'grid',
'grid_view' => 'grid',
'grid_checkbox_head' => 'grid',
'grid_checkbox' => 'grid' ),
'itemLocations' => array( 'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'grid_edit' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_inline_cancel' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_view' => array( 'location' => 'grid',
'cellId' => 'cell_icons' ),
'grid_checkbox_head' => array( 'location' => 'grid',
'cellId' => 'headcell_checkbox' ),
'grid_checkbox' => array( 'location' => 'grid',
'cellId' => 'cell_checkbox' ) ),
'itemVisiblity' => array( 'expand_button' => 5,
'menu' => 3,
'search_panel' => 5,
'collapse_button' => 5,
'simple_search' => 3,
'list_options' => 3,
'loginform_login' => 3,
'username_button' => 3,
'print_panel' => 5 ) ),
'itemsByType' => array( 'page_size' => array( 'page_size' ),
'details_found' => array( 'details_found' ),
'breadcrumb' => array( 'breadcrumb' ),
'menu' => array( 'menu' ),
'simple_search' => array( 'simple_search' ),
'pagination' => array( 'pagination' ),
'search_panel' => array( 'search_panel' ),
'list_options' => array( 'list_options' ),
'show_search_panel' => array( 'show_search_panel' ),
'hide_search_panel' => array( 'hide_search_panel' ),
'search_panel_field' => array( 'search_panel_field',
'search_panel_field1',
'search_panel_field2',
'search_panel_field3',
'search_panel_field4',
'search_panel_field5',
'search_panel_field6',
'search_panel_field7',
'search_panel_field8',
'search_panel_field9',
'search_panel_field10',
'search_panel_field11' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'collapse_button' => array( 'collapse_button' ),
'add' => array( 'add' ),
'print_panel' => array( 'print_panel' ),
'print_scope' => array( 'print_scope' ),
'print_button' => array( 'print_button' ),
'print_records' => array( 'print_records' ),
'export' => array( 'export' ),
'-' => array( '-',
'-1',
'-2',
'-3' ),
'export_selected' => array( 'export_selected' ),
'import' => array( 'import' ),
'delete' => array( 'delete' ),
'delete_selected' => array( 'delete_selected' ),
'advsearch_link' => array( 'advsearch_link' ),
'master_info' => array( 'master_info' ),
'logo' => array( 'logo1' ),
'adminarea_link' => array( 'adminarea_link' ),
'grid_field' => array( 'simple_grid_field',
'simple_grid_field1',
'simple_grid_field2',
'simple_grid_field3',
'simple_grid_field4',
'simple_grid_field5',
'simple_grid_field6',
'simple_grid_field7',
'simple_grid_field8',
'simple_grid_field9',
'simple_grid_field10',
'simple_grid_field11',
'simple_grid_field12' ),
'grid_field_label' => array( 'simple_grid_field13',
'simple_grid_field14',
'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field24',
'simple_grid_field25' ),
'grid_edit' => array( 'grid_edit' ),
'grid_view' => array( 'grid_view' ),
'grid_checkbox' => array( 'grid_checkbox' ),
'grid_checkbox_head' => array( 'grid_checkbox_head' ),
'expand_button' => array( 'expand_button' ),
'inline_add' => array( 'inline_add' ),
'grid_inline_cancel' => array( 'grid_inline_cancel' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox_head' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_TICKET_fieldheadercolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_PARENT_fieldheadercolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_DATE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_DATE_LAST_UPDATE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_SUBJECT_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_SITUATION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_DESCRIPTION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_ATTACHMENT_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'REF_REFERENCE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'TIC_COMMENT_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'CLA_CLASSIFICATION_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'LOGIN_USER_NAME_fieldheadercolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 14 ),
'rows' => array( 0 ),
'tags' => array( 'LOGIN_USER_ID_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'edit_column',
'inline_cancel',
'view_column' ),
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'checkbox_column' ),
'items' => array( 'grid_checkbox' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_TICKET_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_PARENT_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_DATE_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_DATE_LAST_UPDATE_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_SUBJECT_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_SITUATION_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_DESCRIPTION_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_ATTACHMENT_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'REF_REFERENCE_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'TIC_COMMENT_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'CLA_CLASSIFICATION_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'LOGIN_USER_NAME_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 14 ),
'rows' => array( 1 ),
'tags' => array( 'LOGIN_USER_ID_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_icons' => array( 'cols' => array( 0 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_checkbox' => array( 'cols' => array( 1 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 2 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 3 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 4 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 5 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 6 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 7 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 8 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 9 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 10 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 11 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 12 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 13 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 14 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 15,
'height' => 3 ) ) ),
'loginForm' => array( 'loginForm' => 1 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array( 'details_found' => array( 'tag' => 'DISPLAYING',
'type' => 2 ) ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'list',
'breadcrumb' => true ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'list',
'type' => 'list',
'layoutId' => 'leftbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'left' => array( 'modelId' => 'leftbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c0' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c0' => array( 'model' => 'c0',
'items' => array( 'logo1',
'expand_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'menu',
'search_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'supertop' => array( 'modelId' => 'leftbar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'collapse_button',
'breadcrumb' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'simple_search',
'list_options',
'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'list-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'add',
'inline_add',
'delete' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'details_found',
'page_size',
'print_panel' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'list-below-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'pagination' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'top' => array( 'modelId' => 'list-sidebar-top',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'master_info' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_icons' ),
array( 'cell' => 'headcell_checkbox' ),
array( 'cell' => 'headcell_field' ),
array( 'cell' => 'headcell_field1' ),
array( 'cell' => 'headcell_field2' ),
array( 'cell' => 'headcell_field3' ),
array( 'cell' => 'headcell_field4' ),
array( 'cell' => 'headcell_field5' ),
array( 'cell' => 'headcell_field6' ),
array( 'cell' => 'headcell_field7' ),
array( 'cell' => 'headcell_field8' ),
array( 'cell' => 'headcell_field9' ),
array( 'cell' => 'headcell_field10' ),
array( 'cell' => 'headcell_field11' ),
array( 'cell' => 'headcell_field12' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_icons' ),
array( 'cell' => 'cell_checkbox' ),
array( 'cell' => 'cell_field' ),
array( 'cell' => 'cell_field1' ),
array( 'cell' => 'cell_field2' ),
array( 'cell' => 'cell_field3' ),
array( 'cell' => 'cell_field4' ),
array( 'cell' => 'cell_field5' ),
array( 'cell' => 'cell_field6' ),
array( 'cell' => 'cell_field7' ),
array( 'cell' => 'cell_field8' ),
array( 'cell' => 'cell_field9' ),
array( 'cell' => 'cell_field10' ),
array( 'cell' => 'cell_field11' ),
array( 'cell' => 'cell_field12' ) ) ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_icons' ),
array( 'cell' => 'footcell_checkbox' ),
array( 'cell' => 'footcell_field' ),
array( 'cell' => 'footcell_field1' ),
array( 'cell' => 'footcell_field2' ),
array( 'cell' => 'footcell_field3' ),
array( 'cell' => 'footcell_field4' ),
array( 'cell' => 'footcell_field5' ),
array( 'cell' => 'footcell_field6' ),
array( 'cell' => 'footcell_field7' ),
array( 'cell' => 'footcell_field8' ),
array( 'cell' => 'footcell_field9' ),
array( 'cell' => 'footcell_field10' ),
array( 'cell' => 'footcell_field11' ),
array( 'cell' => 'footcell_field12' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'TIC_TICKET',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'TIC_TICKET',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'TIC_PARENT',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'TIC_PARENT',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'TIC_DATE',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'TIC_DATE',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'TIC_DATE_LAST_UPDATE',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'TIC_DATE_LAST_UPDATE',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'TIC_SUBJECT',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'TIC_SUBJECT',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'TIC_SITUATION',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'TIC_SITUATION',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'TIC_DESCRIPTION',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'TIC_DESCRIPTION',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'TIC_ATTACHMENT',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'TIC_ATTACHMENT',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'REF_REFERENCE',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'REF_REFERENCE',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'TIC_COMMENT',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'TIC_COMMENT',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'CLA_CLASSIFICATION',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'CLA_CLASSIFICATION',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'LOGIN_USER_NAME',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'LOGIN_USER_NAME',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'LOGIN_USER_ID',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'LOGIN_USER_ID',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_icons' => array( 'model' => 'headcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'cell_icons' => array( 'model' => 'cell_icons',
'items' => array( 'grid_edit',
'grid_inline_cancel',
'grid_view' ),
'columnName' => 'list-icons' ),
'footcell_icons' => array( 'model' => 'footcell_icons',
'items' => array(  ),
'columnName' => 'list-icons' ),
'headcell_checkbox' => array( 'model' => 'headcell_checkbox',
'items' => array( 'grid_checkbox_head' ),
'columnName' => 'checkbox' ),
'cell_checkbox' => array( 'model' => 'cell_checkbox',
'items' => array( 'grid_checkbox' ),
'columnName' => 'checkbox' ),
'footcell_checkbox' => array( 'model' => 'footcell_checkbox',
'items' => array(  ),
'columnName' => 'checkbox' ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'page_size' => array( 'type' => 'page_size' ),
'details_found' => array( 'type' => 'details_found' ),
'breadcrumb' => array( 'type' => 'breadcrumb' ),
'menu' => array( 'type' => 'menu' ),
'simple_search' => array( 'type' => 'simple_search' ),
'pagination' => array( 'type' => 'pagination' ),
'search_panel' => array( 'type' => 'search_panel',
'items' => array( 'search_panel_field',
'search_panel_field11',
'search_panel_field10',
'search_panel_field9',
'search_panel_field8',
'search_panel_field7',
'search_panel_field6',
'search_panel_field5',
'search_panel_field4',
'search_panel_field3',
'search_panel_field2',
'search_panel_field1' ) ),
'list_options' => array( 'type' => 'list_options',
'items' => array( 'export_selected',
'delete_selected',
'-3',
'advsearch_link',
'show_search_panel',
'hide_search_panel',
'-1',
'export',
'-2',
'import' ) ),
'show_search_panel' => array( 'type' => 'show_search_panel' ),
'hide_search_panel' => array( 'type' => 'hide_search_panel' ),
'search_panel_field' => array( 'field' => 'CLA_CLASSIFICATION',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field1' => array( 'field' => 'LOGIN_USER_ID',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field2' => array( 'field' => 'LOGIN_USER_NAME',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field3' => array( 'field' => 'REF_REFERENCE',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field4' => array( 'field' => 'TIC_COMMENT',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field5' => array( 'field' => 'TIC_DATE',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field6' => array( 'field' => 'TIC_DATE_LAST_UPDATE',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field7' => array( 'field' => 'TIC_DESCRIPTION',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field8' => array( 'field' => 'TIC_PARENT',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field9' => array( 'field' => 'TIC_SITUATION',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field10' => array( 'field' => 'TIC_SUBJECT',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'search_panel_field11' => array( 'field' => 'TIC_TICKET',
'type' => 'search_panel_field',
'required' => false,
'alwaysOnPanel' => false ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => true ),
'logout_link' => array( 'type' => 'logout_link' ),
'collapse_button' => array( 'type' => 'collapse_button' ),
'add' => array( 'type' => 'add' ),
'print_panel' => array( 'type' => 'print_panel',
'items' => array( 'print_scope',
'print_records',
'print_button' ) ),
'print_scope' => array( 'type' => 'print_scope' ),
'print_button' => array( 'type' => 'print_button' ),
'print_records' => array( 'type' => 'print_records' ),
'export' => array( 'type' => 'export' ),
'-' => array( 'type' => '-' ),
'export_selected' => array( 'type' => 'export_selected' ),
'-1' => array( 'type' => '-' ),
'import' => array( 'type' => 'import' ),
'-2' => array( 'type' => '-' ),
'delete' => array( 'type' => 'delete' ),
'delete_selected' => array( 'type' => 'delete_selected' ),
'advsearch_link' => array( 'type' => 'advsearch_link' ),
'-3' => array( 'type' => '-' ),
'master_info' => array( 'type' => 'master_info',
'tables' => array( 'tb_reference' => 'true' ) ),
'logo1' => array( 'type' => 'logo' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'simple_grid_field' => array( 'field' => 'TIC_TICKET',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field13' => array( 'type' => 'grid_field_label',
'field' => 'TIC_TICKET' ),
'simple_grid_field1' => array( 'field' => 'TIC_PARENT',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field14' => array( 'type' => 'grid_field_label',
'field' => 'TIC_PARENT' ),
'simple_grid_field2' => array( 'field' => 'TIC_DATE',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'TIC_DATE' ),
'simple_grid_field3' => array( 'field' => 'TIC_DATE_LAST_UPDATE',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'TIC_DATE_LAST_UPDATE' ),
'simple_grid_field4' => array( 'field' => 'TIC_SUBJECT',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'TIC_SUBJECT' ),
'simple_grid_field5' => array( 'field' => 'TIC_SITUATION',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'TIC_SITUATION' ),
'simple_grid_field6' => array( 'field' => 'TIC_DESCRIPTION',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'TIC_DESCRIPTION' ),
'simple_grid_field7' => array( 'field' => 'TIC_ATTACHMENT',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'TIC_ATTACHMENT' ),
'simple_grid_field8' => array( 'field' => 'REF_REFERENCE',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'REF_REFERENCE' ),
'simple_grid_field9' => array( 'field' => 'TIC_COMMENT',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'TIC_COMMENT' ),
'simple_grid_field10' => array( 'field' => 'CLA_CLASSIFICATION',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'CLA_CLASSIFICATION' ),
'simple_grid_field11' => array( 'field' => 'LOGIN_USER_NAME',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field24' => array( 'type' => 'grid_field_label',
'field' => 'LOGIN_USER_NAME' ),
'simple_grid_field12' => array( 'field' => 'LOGIN_USER_ID',
'type' => 'grid_field',
'inlineAdd' => false,
'inlineEdit' => false ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 'LOGIN_USER_ID' ),
'grid_edit' => array( 'type' => 'grid_edit' ),
'grid_view' => array( 'type' => 'grid_view' ),
'grid_checkbox' => array( 'type' => 'grid_checkbox' ),
'grid_checkbox_head' => array( 'type' => 'grid_checkbox_head' ),
'expand_button' => array( 'type' => 'expand_button' ),
'inline_add' => array( 'type' => 'inline_add',
'detailsOnly' => true ),
'grid_inline_cancel' => array( 'type' => 'grid_inline_cancel' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>