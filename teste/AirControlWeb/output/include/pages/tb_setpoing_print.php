<?php
			$optionsArray = array( 'pdf' => array( 'pdfView' => true,
'orientation' => 'portrait',
'scale' => 100 ),
'details' => array( 'tb_setpoint_email' => array( 'displayPreview' => 1 ),
'tb_setpoint_bloqueia' => array( 'displayPreview' => 1 ),
'tb_setpoint_sms' => array( 'displayPreview' => 1 ) ),
'totals' => array( 'MON_TAG' => array( 'totalsType' => '' ),
'MON_USER' => array( 'totalsType' => '' ),
'SET_DATA_DE_CADASTRO' => array( 'totalsType' => '' ),
'SET_MAX_T' => array( 'totalsType' => '' ),
'SET_MIN_T' => array( 'totalsType' => '' ),
'SET_MAX_U' => array( 'totalsType' => '' ),
'SET_MIN_U' => array( 'totalsType' => '' ),
'SET_LIGAR' => array( 'totalsType' => '' ),
'SET_DESLIGAR' => array( 'totalsType' => '' ),
'SET_TIPO_DE_CONTROLE' => array( 'totalsType' => '' ),
'SET_IP' => array( 'totalsType' => '' ),
'SET_NOME_DA_REDE' => array( 'totalsType' => '' ),
'SET_PASSWORD_DA_REDE' => array( 'totalsType' => '' ),
'SET_BLOQUEADO' => array( 'totalsType' => '' ),
'SET_OBS' => array( 'totalsType' => '' ) ),
'fields' => array( 'gridFields' => array( 'MON_TAG',
'MON_USER',
'SET_DATA_DE_CADASTRO',
'SET_MAX_T',
'SET_MIN_T',
'SET_MAX_U',
'SET_MIN_U',
'SET_LIGAR',
'SET_DESLIGAR',
'SET_TIPO_DE_CONTROLE',
'SET_IP',
'SET_NOME_DA_REDE',
'SET_PASSWORD_DA_REDE',
'SET_BLOQUEADO',
'SET_OBS' ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array( 'MON_TAG' => array( 'simple_grid_field',
'simple_grid_field15' ),
'MON_USER' => array( 'simple_grid_field1',
'simple_grid_field16' ),
'SET_DATA_DE_CADASTRO' => array( 'simple_grid_field2',
'simple_grid_field17' ),
'SET_MAX_T' => array( 'simple_grid_field3',
'simple_grid_field18' ),
'SET_MIN_T' => array( 'simple_grid_field4',
'simple_grid_field19' ),
'SET_MAX_U' => array( 'simple_grid_field5',
'simple_grid_field20' ),
'SET_MIN_U' => array( 'simple_grid_field6',
'simple_grid_field21' ),
'SET_LIGAR' => array( 'simple_grid_field7',
'simple_grid_field22' ),
'SET_DESLIGAR' => array( 'simple_grid_field8',
'simple_grid_field23' ),
'SET_TIPO_DE_CONTROLE' => array( 'simple_grid_field9',
'simple_grid_field24' ),
'SET_IP' => array( 'simple_grid_field10',
'simple_grid_field25' ),
'SET_NOME_DA_REDE' => array( 'simple_grid_field11',
'simple_grid_field26' ),
'SET_PASSWORD_DA_REDE' => array( 'simple_grid_field12',
'simple_grid_field27' ),
'SET_BLOQUEADO' => array( 'simple_grid_field13',
'simple_grid_field28' ),
'SET_OBS' => array( 'simple_grid_field14',
'simple_grid_field29' ) ),
'hideEmptyFields' => array(  ) ),
'pageLinks' => array( 'edit' => false,
'add' => false,
'view' => false,
'print' => false ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'top' => array( 'print_header',
'print_subheader',
'print_pdf' ),
'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ),
'grid' => array( 'simple_grid_field15',
'simple_grid_field',
'simple_grid_field16',
'simple_grid_field1',
'simple_grid_field17',
'simple_grid_field2',
'simple_grid_field18',
'simple_grid_field3',
'simple_grid_field19',
'simple_grid_field4',
'simple_grid_field20',
'simple_grid_field5',
'simple_grid_field21',
'simple_grid_field6',
'simple_grid_field22',
'simple_grid_field7',
'simple_grid_field23',
'simple_grid_field8',
'simple_grid_field24',
'simple_grid_field9',
'simple_grid_field25',
'simple_grid_field10',
'simple_grid_field26',
'simple_grid_field11',
'simple_grid_field27',
'simple_grid_field12',
'simple_grid_field28',
'simple_grid_field13',
'simple_grid_field29',
'simple_grid_field14',
'details_preview',
'details_preview1',
'details_preview2' ) ),
'formXtTags' => array( 'above-grid' => array( 'print_pages' ),
'below-grid' => array(  ) ),
'itemForms' => array( 'print_header' => 'top',
'print_subheader' => 'top',
'print_pdf' => 'top',
'print_pages' => 'above-grid',
'simple_grid_field15' => 'grid',
'simple_grid_field' => 'grid',
'simple_grid_field16' => 'grid',
'simple_grid_field1' => 'grid',
'simple_grid_field17' => 'grid',
'simple_grid_field2' => 'grid',
'simple_grid_field18' => 'grid',
'simple_grid_field3' => 'grid',
'simple_grid_field19' => 'grid',
'simple_grid_field4' => 'grid',
'simple_grid_field20' => 'grid',
'simple_grid_field5' => 'grid',
'simple_grid_field21' => 'grid',
'simple_grid_field6' => 'grid',
'simple_grid_field22' => 'grid',
'simple_grid_field7' => 'grid',
'simple_grid_field23' => 'grid',
'simple_grid_field8' => 'grid',
'simple_grid_field24' => 'grid',
'simple_grid_field9' => 'grid',
'simple_grid_field25' => 'grid',
'simple_grid_field10' => 'grid',
'simple_grid_field26' => 'grid',
'simple_grid_field11' => 'grid',
'simple_grid_field27' => 'grid',
'simple_grid_field12' => 'grid',
'simple_grid_field28' => 'grid',
'simple_grid_field13' => 'grid',
'simple_grid_field29' => 'grid',
'simple_grid_field14' => 'grid',
'details_preview' => 'grid',
'details_preview1' => 'grid',
'details_preview2' => 'grid' ),
'itemLocations' => array( 'simple_grid_field15' => array( 'location' => 'grid',
'cellId' => 'headcell_field' ),
'simple_grid_field' => array( 'location' => 'grid',
'cellId' => 'cell_field' ),
'simple_grid_field16' => array( 'location' => 'grid',
'cellId' => 'headcell_field1' ),
'simple_grid_field1' => array( 'location' => 'grid',
'cellId' => 'cell_field1' ),
'simple_grid_field17' => array( 'location' => 'grid',
'cellId' => 'headcell_field2' ),
'simple_grid_field2' => array( 'location' => 'grid',
'cellId' => 'cell_field2' ),
'simple_grid_field18' => array( 'location' => 'grid',
'cellId' => 'headcell_field3' ),
'simple_grid_field3' => array( 'location' => 'grid',
'cellId' => 'cell_field3' ),
'simple_grid_field19' => array( 'location' => 'grid',
'cellId' => 'headcell_field4' ),
'simple_grid_field4' => array( 'location' => 'grid',
'cellId' => 'cell_field4' ),
'simple_grid_field20' => array( 'location' => 'grid',
'cellId' => 'headcell_field5' ),
'simple_grid_field5' => array( 'location' => 'grid',
'cellId' => 'cell_field5' ),
'simple_grid_field21' => array( 'location' => 'grid',
'cellId' => 'headcell_field6' ),
'simple_grid_field6' => array( 'location' => 'grid',
'cellId' => 'cell_field6' ),
'simple_grid_field22' => array( 'location' => 'grid',
'cellId' => 'headcell_field7' ),
'simple_grid_field7' => array( 'location' => 'grid',
'cellId' => 'cell_field7' ),
'simple_grid_field23' => array( 'location' => 'grid',
'cellId' => 'headcell_field8' ),
'simple_grid_field8' => array( 'location' => 'grid',
'cellId' => 'cell_field8' ),
'simple_grid_field24' => array( 'location' => 'grid',
'cellId' => 'headcell_field9' ),
'simple_grid_field9' => array( 'location' => 'grid',
'cellId' => 'cell_field9' ),
'simple_grid_field25' => array( 'location' => 'grid',
'cellId' => 'headcell_field10' ),
'simple_grid_field10' => array( 'location' => 'grid',
'cellId' => 'cell_field10' ),
'simple_grid_field26' => array( 'location' => 'grid',
'cellId' => 'headcell_field11' ),
'simple_grid_field11' => array( 'location' => 'grid',
'cellId' => 'cell_field11' ),
'simple_grid_field27' => array( 'location' => 'grid',
'cellId' => 'headcell_field12' ),
'simple_grid_field12' => array( 'location' => 'grid',
'cellId' => 'cell_field12' ),
'simple_grid_field28' => array( 'location' => 'grid',
'cellId' => 'headcell_field13' ),
'simple_grid_field13' => array( 'location' => 'grid',
'cellId' => 'cell_field13' ),
'simple_grid_field29' => array( 'location' => 'grid',
'cellId' => 'headcell_field14' ),
'simple_grid_field14' => array( 'location' => 'grid',
'cellId' => 'cell_field14' ),
'details_preview' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview1' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ),
'details_preview2' => array( 'location' => 'grid',
'cellId' => 'cell_dpreview' ) ),
'itemVisiblity' => array(  ) ),
'itemsByType' => array( 'print_header' => array( 'print_header' ),
'print_subheader' => array( 'print_subheader' ),
'print_pages' => array( 'print_pages' ),
'print_pdf' => array( 'print_pdf' ),
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
'simple_grid_field12',
'simple_grid_field13',
'simple_grid_field14' ),
'grid_field_label' => array( 'simple_grid_field15',
'simple_grid_field16',
'simple_grid_field17',
'simple_grid_field18',
'simple_grid_field19',
'simple_grid_field20',
'simple_grid_field21',
'simple_grid_field22',
'simple_grid_field23',
'simple_grid_field24',
'simple_grid_field25',
'simple_grid_field26',
'simple_grid_field27',
'simple_grid_field28',
'simple_grid_field29' ),
'details_preview' => array( 'details_preview',
'details_preview1',
'details_preview2' ) ),
'cellMaps' => array( 'grid' => array( 'cells' => array( 'headcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 0 ),
'tags' => array( 'MON_TAG_fieldheadercolumn' ),
'items' => array( 'simple_grid_field15' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 0 ),
'tags' => array( 'MON_USER_fieldheadercolumn' ),
'items' => array( 'simple_grid_field16' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 0 ),
'tags' => array( 'SET_DATA_DE_CADASTRO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field17' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 0 ),
'tags' => array( 'SET_MAX_T_fieldheadercolumn' ),
'items' => array( 'simple_grid_field18' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 0 ),
'tags' => array( 'SET_MIN_T_fieldheadercolumn' ),
'items' => array( 'simple_grid_field19' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 0 ),
'tags' => array( 'SET_MAX_U_fieldheadercolumn' ),
'items' => array( 'simple_grid_field20' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 0 ),
'tags' => array( 'SET_MIN_U_fieldheadercolumn' ),
'items' => array( 'simple_grid_field21' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 0 ),
'tags' => array( 'SET_LIGAR_fieldheadercolumn' ),
'items' => array( 'simple_grid_field22' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 0 ),
'tags' => array( 'SET_DESLIGAR_fieldheadercolumn' ),
'items' => array( 'simple_grid_field23' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 0 ),
'tags' => array( 'SET_TIPO_DE_CONTROLE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field24' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 0 ),
'tags' => array( 'SET_IP_fieldheadercolumn' ),
'items' => array( 'simple_grid_field25' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 0 ),
'tags' => array( 'SET_NOME_DA_REDE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field26' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 0 ),
'tags' => array( 'SET_PASSWORD_DA_REDE_fieldheadercolumn' ),
'items' => array( 'simple_grid_field27' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 0 ),
'tags' => array( 'SET_BLOQUEADO_fieldheadercolumn' ),
'items' => array( 'simple_grid_field28' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'headcell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 0 ),
'tags' => array( 'SET_OBS_fieldheadercolumn' ),
'items' => array( 'simple_grid_field29' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field' => array( 'cols' => array( 0 ),
'rows' => array( 1 ),
'tags' => array( 'MON_TAG_fieldcolumn' ),
'items' => array( 'simple_grid_field' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 1 ),
'tags' => array( 'MON_USER_fieldcolumn' ),
'items' => array( 'simple_grid_field1' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 1 ),
'tags' => array( 'SET_DATA_DE_CADASTRO_fieldcolumn' ),
'items' => array( 'simple_grid_field2' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 1 ),
'tags' => array( 'SET_MAX_T_fieldcolumn' ),
'items' => array( 'simple_grid_field3' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 1 ),
'tags' => array( 'SET_MIN_T_fieldcolumn' ),
'items' => array( 'simple_grid_field4' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 1 ),
'tags' => array( 'SET_MAX_U_fieldcolumn' ),
'items' => array( 'simple_grid_field5' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 1 ),
'tags' => array( 'SET_MIN_U_fieldcolumn' ),
'items' => array( 'simple_grid_field6' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 1 ),
'tags' => array( 'SET_LIGAR_fieldcolumn' ),
'items' => array( 'simple_grid_field7' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 1 ),
'tags' => array( 'SET_DESLIGAR_fieldcolumn' ),
'items' => array( 'simple_grid_field8' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 1 ),
'tags' => array( 'SET_TIPO_DE_CONTROLE_fieldcolumn' ),
'items' => array( 'simple_grid_field9' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 1 ),
'tags' => array( 'SET_IP_fieldcolumn' ),
'items' => array( 'simple_grid_field10' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 1 ),
'tags' => array( 'SET_NOME_DA_REDE_fieldcolumn' ),
'items' => array( 'simple_grid_field11' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 1 ),
'tags' => array( 'SET_PASSWORD_DA_REDE_fieldcolumn' ),
'items' => array( 'simple_grid_field12' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 1 ),
'tags' => array( 'SET_BLOQUEADO_fieldcolumn' ),
'items' => array( 'simple_grid_field13' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 1 ),
'tags' => array( 'SET_OBS_fieldcolumn' ),
'items' => array( 'simple_grid_field14' ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'cell_dpreview' => array( 'cols' => array( 0,
1,
2,
3,
4,
5,
6,
7,
8,
9,
10,
11,
12,
13,
14 ),
'rows' => array( 2 ),
'tags' => array(  ),
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ),
'fixedAtServer' => true,
'fixedAtClient' => false ),
'footcell_field' => array( 'cols' => array( 0 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field1' => array( 'cols' => array( 1 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field2' => array( 'cols' => array( 2 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field3' => array( 'cols' => array( 3 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field4' => array( 'cols' => array( 4 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field5' => array( 'cols' => array( 5 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field6' => array( 'cols' => array( 6 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field7' => array( 'cols' => array( 7 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field8' => array( 'cols' => array( 8 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field9' => array( 'cols' => array( 9 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field10' => array( 'cols' => array( 10 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field11' => array( 'cols' => array( 11 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field12' => array( 'cols' => array( 12 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field13' => array( 'cols' => array( 13 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ),
'footcell_field14' => array( 'cols' => array( 14 ),
'rows' => array( 3 ),
'tags' => array(  ),
'items' => array(  ),
'fixedAtServer' => false,
'fixedAtClient' => false ) ),
'width' => 15,
'height' => 4 ) ) ),
'loginForm' => array( 'loginForm' => 3 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array( 'print_pages' => array( 'tag' => 'PRINT_PAGES',
'type' => 2 ) ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'gridType' => 0,
'recsPerRow' => 1,
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'misc' => array( 'type' => 'print',
'breadcrumb' => false ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ),
'dataGrid' => array( 'groupFields' => array(  ) ) );
			$pageArray = array( 'id' => 'print',
'type' => 'print',
'layoutId' => 'basic',
'disabled' => 0,
'default' => 0,
'forms' => array( 'top' => array( 'modelId' => 'print-header',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ),
array( 'cells' => array( array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c2' => array( 'model' => 'c2',
'items' => array( 'print_header',
'print_subheader' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c1' => array( 'model' => 'c1',
'items' => array( 'print_pdf' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'print-above-grid',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'print_pages' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'below-grid' => array( 'modelId' => 'print-below-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'horizontal-grid',
'grid' => array( array( 'section' => 'head',
'cells' => array( array( 'cell' => 'headcell_field' ),
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
array( 'cell' => 'headcell_field12' ),
array( 'cell' => 'headcell_field13' ),
array( 'cell' => 'headcell_field14' ) ) ),
array( 'section' => 'body',
'cells' => array( array( 'cell' => 'cell_field' ),
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
array( 'cell' => 'cell_field12' ),
array( 'cell' => 'cell_field13' ),
array( 'cell' => 'cell_field14' ) ) ),
array( 'cells' => array( array( 'cell' => 'cell_dpreview',
'colspan' => 15 ) ),
'section' => 'body' ),
array( 'section' => 'foot',
'cells' => array( array( 'cell' => 'footcell_field' ),
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
array( 'cell' => 'footcell_field12' ),
array( 'cell' => 'footcell_field13' ),
array( 'cell' => 'footcell_field14' ) ) ) ),
'cells' => array( 'headcell_field' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field15' ),
'field' => 'MON_TAG',
'columnName' => 'field' ),
'cell_field' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field' ),
'field' => 'MON_TAG',
'columnName' => 'field' ),
'footcell_field' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field1' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field16' ),
'field' => 'MON_USER',
'columnName' => 'field' ),
'cell_field1' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field1' ),
'field' => 'MON_USER',
'columnName' => 'field' ),
'footcell_field1' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field2' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field17' ),
'field' => 'SET_DATA_DE_CADASTRO',
'columnName' => 'field' ),
'cell_field2' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field2' ),
'field' => 'SET_DATA_DE_CADASTRO',
'columnName' => 'field' ),
'footcell_field2' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field3' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field18' ),
'field' => 'SET_MAX_T',
'columnName' => 'field' ),
'cell_field3' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field3' ),
'field' => 'SET_MAX_T',
'columnName' => 'field' ),
'footcell_field3' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field4' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field19' ),
'field' => 'SET_MIN_T',
'columnName' => 'field' ),
'cell_field4' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field4' ),
'field' => 'SET_MIN_T',
'columnName' => 'field' ),
'footcell_field4' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field5' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field20' ),
'field' => 'SET_MAX_U',
'columnName' => 'field' ),
'cell_field5' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field5' ),
'field' => 'SET_MAX_U',
'columnName' => 'field' ),
'footcell_field5' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field6' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field21' ),
'field' => 'SET_MIN_U',
'columnName' => 'field' ),
'cell_field6' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field6' ),
'field' => 'SET_MIN_U',
'columnName' => 'field' ),
'footcell_field6' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field7' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field22' ),
'field' => 'SET_LIGAR',
'columnName' => 'field' ),
'cell_field7' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field7' ),
'field' => 'SET_LIGAR',
'columnName' => 'field' ),
'footcell_field7' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field8' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field23' ),
'field' => 'SET_DESLIGAR',
'columnName' => 'field' ),
'cell_field8' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field8' ),
'field' => 'SET_DESLIGAR',
'columnName' => 'field' ),
'footcell_field8' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field9' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field24' ),
'field' => 'SET_TIPO_DE_CONTROLE',
'columnName' => 'field' ),
'cell_field9' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field9' ),
'field' => 'SET_TIPO_DE_CONTROLE',
'columnName' => 'field' ),
'footcell_field9' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field10' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field25' ),
'field' => 'SET_IP',
'columnName' => 'field' ),
'cell_field10' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field10' ),
'field' => 'SET_IP',
'columnName' => 'field' ),
'footcell_field10' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field11' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field26' ),
'field' => 'SET_NOME_DA_REDE',
'columnName' => 'field' ),
'cell_field11' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field11' ),
'field' => 'SET_NOME_DA_REDE',
'columnName' => 'field' ),
'footcell_field11' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field12' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field27' ),
'field' => 'SET_PASSWORD_DA_REDE',
'columnName' => 'field' ),
'cell_field12' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field12' ),
'field' => 'SET_PASSWORD_DA_REDE',
'columnName' => 'field' ),
'footcell_field12' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field13' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field28' ),
'field' => 'SET_BLOQUEADO',
'columnName' => 'field' ),
'cell_field13' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field13' ),
'field' => 'SET_BLOQUEADO',
'columnName' => 'field' ),
'footcell_field13' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'headcell_field14' => array( 'model' => 'headcell_field',
'items' => array( 'simple_grid_field29' ),
'field' => 'SET_OBS',
'columnName' => 'field' ),
'cell_field14' => array( 'model' => 'cell_field',
'items' => array( 'simple_grid_field14' ),
'field' => 'SET_OBS',
'columnName' => 'field' ),
'footcell_field14' => array( 'model' => 'footcell_field',
'items' => array(  ) ),
'cell_dpreview' => array( 'model' => 'cell_dpreview',
'items' => array( 'details_preview',
'details_preview1',
'details_preview2' ) ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'print_header' => array( 'type' => 'print_header' ),
'print_subheader' => array( 'type' => 'print_subheader' ),
'print_pages' => array( 'type' => 'print_pages' ),
'print_pdf' => array( 'type' => 'print_pdf',
'targetPages' => array(  ),
'splitModes' => array(  ),
'scopes' => array(  ) ),
'simple_grid_field' => array( 'field' => 'MON_TAG',
'type' => 'grid_field' ),
'simple_grid_field15' => array( 'type' => 'grid_field_label',
'field' => 'MON_TAG' ),
'simple_grid_field1' => array( 'field' => 'MON_USER',
'type' => 'grid_field' ),
'simple_grid_field16' => array( 'type' => 'grid_field_label',
'field' => 'MON_USER' ),
'simple_grid_field2' => array( 'field' => 'SET_DATA_DE_CADASTRO',
'type' => 'grid_field' ),
'simple_grid_field17' => array( 'type' => 'grid_field_label',
'field' => 'SET_DATA_DE_CADASTRO' ),
'simple_grid_field3' => array( 'field' => 'SET_MAX_T',
'type' => 'grid_field' ),
'simple_grid_field18' => array( 'type' => 'grid_field_label',
'field' => 'SET_MAX_T' ),
'simple_grid_field4' => array( 'field' => 'SET_MIN_T',
'type' => 'grid_field' ),
'simple_grid_field19' => array( 'type' => 'grid_field_label',
'field' => 'SET_MIN_T' ),
'simple_grid_field5' => array( 'field' => 'SET_MAX_U',
'type' => 'grid_field' ),
'simple_grid_field20' => array( 'type' => 'grid_field_label',
'field' => 'SET_MAX_U' ),
'simple_grid_field6' => array( 'field' => 'SET_MIN_U',
'type' => 'grid_field' ),
'simple_grid_field21' => array( 'type' => 'grid_field_label',
'field' => 'SET_MIN_U' ),
'simple_grid_field7' => array( 'field' => 'SET_LIGAR',
'type' => 'grid_field' ),
'simple_grid_field22' => array( 'type' => 'grid_field_label',
'field' => 'SET_LIGAR' ),
'simple_grid_field8' => array( 'field' => 'SET_DESLIGAR',
'type' => 'grid_field' ),
'simple_grid_field23' => array( 'type' => 'grid_field_label',
'field' => 'SET_DESLIGAR' ),
'simple_grid_field9' => array( 'field' => 'SET_TIPO_DE_CONTROLE',
'type' => 'grid_field' ),
'simple_grid_field24' => array( 'type' => 'grid_field_label',
'field' => 'SET_TIPO_DE_CONTROLE' ),
'simple_grid_field10' => array( 'field' => 'SET_IP',
'type' => 'grid_field' ),
'simple_grid_field25' => array( 'type' => 'grid_field_label',
'field' => 'SET_IP' ),
'simple_grid_field11' => array( 'field' => 'SET_NOME_DA_REDE',
'type' => 'grid_field' ),
'simple_grid_field26' => array( 'type' => 'grid_field_label',
'field' => 'SET_NOME_DA_REDE' ),
'simple_grid_field12' => array( 'field' => 'SET_PASSWORD_DA_REDE',
'type' => 'grid_field' ),
'simple_grid_field27' => array( 'type' => 'grid_field_label',
'field' => 'SET_PASSWORD_DA_REDE' ),
'simple_grid_field13' => array( 'field' => 'SET_BLOQUEADO',
'type' => 'grid_field' ),
'simple_grid_field28' => array( 'type' => 'grid_field_label',
'field' => 'SET_BLOQUEADO' ),
'simple_grid_field14' => array( 'field' => 'SET_OBS',
'type' => 'grid_field' ),
'simple_grid_field29' => array( 'type' => 'grid_field_label',
'field' => 'SET_OBS' ),
'details_preview' => array( 'type' => 'details_preview',
'table' => 'tb_setpoint_email',
'items' => array(  ),
'popup' => false ),
'details_preview1' => array( 'type' => 'details_preview',
'table' => 'tb_setpoint_bloqueia',
'items' => array(  ),
'popup' => false ),
'details_preview2' => array( 'type' => 'details_preview',
'table' => 'tb_setpoint_sms',
'items' => array(  ),
'popup' => false ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>