<?php
			$optionsArray = array( 'welcome' => array( 'welcomeItems' => array( 'logo' => array( 'menutItem' => false ),
'menu' => array( 'menutItem' => false ),
'loginform_login' => array( 'menutItem' => false ),
'username_button' => array( 'menutItem' => false ),
'welcome_item' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'tb_setpoing',
'page' => 'list' ),
'welcome_item1' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'tb_setpoint_bloqueia',
'page' => 'list' ),
'welcome_item2' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'tb_setpoint_email',
'page' => 'list' ),
'welcome_item3' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'tb_setpoint_sms',
'page' => 'list' ),
'welcome_item4' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'tb_monitoramento',
'page' => 'list' ),
'welcome_item5' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_analise_temp_maximo_acima',
'page' => 'list' ),
'welcome_item6' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_analise_temp_minima_abaixo',
'page' => 'list' ),
'welcome_item7' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_monitoramento_por_periodo',
'page' => 'list' ),
'welcome_item8' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_monitoramento_por_periodo_leitura_max_min_med',
'page' => 'list' ),
'welcome_item9' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_monitoramento_por_periodo_leitura_maxima',
'page' => 'list' ),
'welcome_item10' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_monitoramento_por_periodo_leitura_minima',
'page' => 'list' ),
'welcome_item11' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_tag_user',
'page' => 'list' ),
'welcome_item12' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '12horas',
'page' => 'list' ),
'welcome_item13' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '24horas',
'page' => 'list' ),
'welcome_item14' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '3horas',
'page' => 'list' ),
'welcome_item15' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '6horas',
'page' => 'list' ),
'welcome_item16' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '9horas',
'page' => 'list' ),
'welcome_item17' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'hoje',
'page' => 'list' ),
'welcome_item18' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'hoje Chart',
'page' => 'chart' ),
'welcome_item19' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '9horas Chart',
'page' => 'chart' ),
'welcome_item20' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '6horas Chart',
'page' => 'chart' ),
'welcome_item21' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '3horas Chart',
'page' => 'chart' ),
'welcome_item22' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '12horas Chart',
'page' => 'chart' ),
'welcome_item23' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => '24horas Chart',
'page' => 'chart' ),
'welcome_item24' => array( 'menutItem' => true,
'group' => false,
'items' => null,
'table' => 'vwv_monitoramento_por_periodo_leitura_max_min_med Chart',
'page' => 'chart' ) ) ),
'fields' => array( 'gridFields' => array(  ),
'searchRequiredFields' => array(  ),
'searchPanelFields' => array(  ),
'fieldItems' => array(  ) ),
'layoutHelper' => array( 'formItems' => array( 'formItems' => array( 'supertop' => array( 'logo',
'menu',
'loginform_login',
'username_button' ),
'above-grid' => array(  ),
'grid' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5',
'welcome_item6',
'welcome_item7',
'welcome_item8',
'welcome_item9',
'welcome_item10',
'welcome_item11',
'welcome_item12',
'welcome_item13',
'welcome_item14',
'welcome_item15',
'welcome_item16',
'welcome_item17',
'welcome_item18',
'welcome_item19',
'welcome_item20',
'welcome_item21',
'welcome_item22',
'welcome_item23',
'welcome_item24' ) ),
'formXtTags' => array( 'above-grid' => array(  ) ),
'itemForms' => array( 'logo' => 'supertop',
'menu' => 'supertop',
'loginform_login' => 'supertop',
'username_button' => 'supertop',
'welcome_item' => 'grid',
'welcome_item1' => 'grid',
'welcome_item2' => 'grid',
'welcome_item3' => 'grid',
'welcome_item4' => 'grid',
'welcome_item5' => 'grid',
'welcome_item6' => 'grid',
'welcome_item7' => 'grid',
'welcome_item8' => 'grid',
'welcome_item9' => 'grid',
'welcome_item10' => 'grid',
'welcome_item11' => 'grid',
'welcome_item12' => 'grid',
'welcome_item13' => 'grid',
'welcome_item14' => 'grid',
'welcome_item15' => 'grid',
'welcome_item16' => 'grid',
'welcome_item17' => 'grid',
'welcome_item18' => 'grid',
'welcome_item19' => 'grid',
'welcome_item20' => 'grid',
'welcome_item21' => 'grid',
'welcome_item22' => 'grid',
'welcome_item23' => 'grid',
'welcome_item24' => 'grid' ),
'itemLocations' => array(  ),
'itemVisiblity' => array( 'menu' => 3,
'loginform_login' => 3,
'username_button' => 3 ) ),
'itemsByType' => array( 'logo' => array( 'logo' ),
'menu' => array( 'menu' ),
'welcome_item' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5',
'welcome_item6',
'welcome_item7',
'welcome_item8',
'welcome_item9',
'welcome_item10',
'welcome_item11',
'welcome_item12',
'welcome_item13',
'welcome_item14',
'welcome_item15',
'welcome_item16',
'welcome_item17',
'welcome_item18',
'welcome_item19',
'welcome_item20',
'welcome_item21',
'welcome_item22',
'welcome_item23',
'welcome_item24' ),
'username_button' => array( 'username_button' ),
'loginform_login' => array( 'loginform_login' ),
'logout_link' => array( 'logout_link' ),
'adminarea_link' => array( 'adminarea_link' ) ),
'cellMaps' => array(  ) ),
'loginForm' => array( 'loginForm' => 0 ),
'page' => array( 'labeledButtons' => array( 'update_records' => array(  ),
'print_pages' => array(  ),
'register_activate_message' => array(  ),
'details_found' => array(  ) ),
'hasCustomButtons' => false,
'customButtons' => array(  ) ),
'events' => array( 'maps' => array(  ),
'mapsData' => array(  ),
'buttons' => array(  ) ) );
			$pageArray = array( 'id' => 'menu',
'type' => 'menu',
'layoutId' => 'topbar',
'disabled' => 0,
'default' => 0,
'forms' => array( 'supertop' => array( 'modelId' => 'menu-topbar-menu',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ),
array( 'cell' => 'c2' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'logo',
'menu' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ),
'c2' => array( 'model' => 'c2',
'items' => array( 'loginform_login',
'username_button' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'above-grid' => array( 'modelId' => 'empty-above-grid',
'grid' => array(  ),
'cells' => array(  ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ),
'grid' => array( 'modelId' => 'welcome',
'grid' => array( array( 'cells' => array( array( 'cell' => 'c1' ) ),
'section' => '' ) ),
'cells' => array( 'c1' => array( 'model' => 'c1',
'items' => array( 'welcome_item',
'welcome_item1',
'welcome_item2',
'welcome_item3',
'welcome_item4',
'welcome_item5',
'welcome_item6',
'welcome_item7',
'welcome_item8',
'welcome_item9',
'welcome_item10',
'welcome_item11',
'welcome_item12',
'welcome_item13',
'welcome_item14',
'welcome_item15',
'welcome_item16',
'welcome_item17',
'welcome_item18',
'welcome_item19',
'welcome_item20',
'welcome_item21',
'welcome_item22',
'welcome_item23',
'welcome_item24' ),
'_t' => 'Map',
'_i' => array(  ),
'_s' => 0 ) ),
'deferredItems' => array(  ),
'recsPerRow' => 1 ) ),
'items' => array( 'logo' => array( 'type' => 'logo' ),
'menu' => array( 'type' => 'menu' ),
'welcome_item' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'tb_setpoing',
'linkPage' => 'list',
'linkText' => array( 'table' => 'tb_setpoing',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'barcode' ),
'linkComments' => array( 'text' => 'Tb Setpoing description',
'type' => 0 ),
'background' => '#6DA5C8' ),
'welcome_item1' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'tb_setpoint_bloqueia',
'linkPage' => 'list',
'linkText' => array( 'table' => 'tb_setpoint_bloqueia',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Tb Setpoint Bloqueia description',
'type' => 0 ),
'background' => '#6B8E23' ),
'welcome_item2' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'tb_setpoint_email',
'linkPage' => 'list',
'linkText' => array( 'table' => 'tb_setpoint_email',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'linkComments' => array( 'text' => 'Tb Setpoint Email description',
'type' => 0 ),
'background' => '#8FBC8B' ),
'welcome_item3' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'tb_setpoint_sms',
'linkPage' => 'list',
'linkText' => array( 'table' => 'tb_setpoint_sms',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'headphones' ),
'linkComments' => array( 'text' => 'Tb Setpoint Sms description',
'type' => 0 ),
'background' => '#9ACD32' ),
'welcome_item4' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'tb_monitoramento',
'linkPage' => 'list',
'linkText' => array( 'table' => 'tb_monitoramento',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'camera' ),
'linkComments' => array( 'text' => 'Tb Monitoramento description',
'type' => 0 ),
'background' => '#DC143C' ),
'welcome_item5' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_analise_temp_maximo_acima',
'linkPage' => 'list',
'linkText' => array( 'table' => 'vwv_analise_temp_maximo_acima',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'calendar' ),
'background' => '#D2691E' ),
'welcome_item6' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_analise_temp_minima_abaixo',
'linkPage' => 'list',
'linkText' => array( 'table' => 'vwv_analise_temp_minima_abaixo',
'type' => 6 ),
'linkIcon' => array( 'glyph' => 'earphone' ),
'background' => '#2F4F4F' ),
'welcome_item7' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_monitoramento_por_periodo',
'linkPage' => 'list',
'linkText' => array( 'table' => 'vwv_monitoramento_por_periodo',
'type' => 6 ),
'background' => '#E8926F' ),
'welcome_item8' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_monitoramento_por_periodo_leitura_max_min_med',
'linkPage' => 'list',
'linkText' => array( 'table' => 'vwv_monitoramento_por_periodo_leitura_max_min_med',
'type' => 6 ),
'background' => '#00C2C5' ),
'welcome_item9' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_monitoramento_por_periodo_leitura_maxima',
'linkPage' => 'list',
'linkText' => array( 'table' => 'vwv_monitoramento_por_periodo_leitura_maxima',
'type' => 6 ),
'background' => '#9ACD32' ),
'welcome_item10' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_monitoramento_por_periodo_leitura_minima',
'linkPage' => 'list',
'linkText' => array( 'table' => 'vwv_monitoramento_por_periodo_leitura_minima',
'type' => 6 ),
'background' => '#D2AF80' ),
'welcome_item11' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_tag_user',
'linkPage' => 'list',
'linkText' => array( 'table' => 'vwv_tag_user',
'type' => 6 ),
'background' => '#D2691E' ),
'welcome_item12' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '12horas',
'linkPage' => 'list',
'linkText' => array( 'table' => '12horas',
'type' => 6 ),
'background' => '#7B68EE' ),
'welcome_item13' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '24horas',
'linkPage' => 'list',
'linkText' => array( 'table' => '24horas',
'type' => 6 ),
'background' => '#00C2C5' ),
'welcome_item14' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '3horas',
'linkPage' => 'list',
'linkText' => array( 'table' => '3horas',
'type' => 6 ),
'background' => '#6B8E23' ),
'welcome_item15' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '6horas',
'linkPage' => 'list',
'linkText' => array( 'table' => '6horas',
'type' => 6 ),
'background' => '#CD853F' ),
'welcome_item16' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '9horas',
'linkPage' => 'list',
'linkText' => array( 'table' => '9horas',
'type' => 6 ),
'background' => '#CD853F' ),
'welcome_item17' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'hoje',
'linkPage' => 'list',
'linkText' => array( 'table' => 'hoje',
'type' => 6 ),
'background' => '#DB7093' ),
'username_button' => array( 'type' => 'username_button',
'items' => array( 'logout_link',
'adminarea_link' ) ),
'loginform_login' => array( 'type' => 'loginform_login',
'popup' => false ),
'logout_link' => array( 'type' => 'logout_link' ),
'welcome_item18' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'hoje Chart',
'linkPage' => 'chart',
'linkText' => array( 'table' => 'hoje Chart',
'type' => 6 ),
'background' => '#DB7093' ),
'adminarea_link' => array( 'type' => 'adminarea_link' ),
'welcome_item19' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '9horas Chart',
'linkPage' => 'chart',
'linkText' => array( 'table' => '9horas Chart',
'type' => 6 ),
'background' => '#E67349' ),
'welcome_item20' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '6horas Chart',
'linkPage' => 'chart',
'linkText' => array( 'table' => '6horas Chart',
'type' => 6 ),
'background' => '#3CB371' ),
'welcome_item21' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '3horas Chart',
'linkPage' => 'chart',
'linkText' => array( 'table' => '3horas Chart',
'type' => 6 ),
'background' => '#E67349' ),
'welcome_item22' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '12horas Chart',
'linkPage' => 'chart',
'linkText' => array( 'table' => '12horas Chart',
'type' => 6 ),
'background' => '#008B8B' ),
'welcome_item23' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => '24horas Chart',
'linkPage' => 'chart',
'linkText' => array( 'table' => '24horas Chart',
'type' => 6 ),
'background' => '#4169E1' ),
'welcome_item24' => array( 'type' => 'welcome_item',
'linkUrl' => '',
'linkTable' => 'vwv_monitoramento_por_periodo_leitura_max_min_med Chart',
'linkPage' => 'chart',
'linkText' => array( 'table' => 'vwv_monitoramento_por_periodo_leitura_max_min_med Chart',
'type' => 6 ),
'background' => '#1E90FF' ) ),
'dbProps' => array(  ),
'version' => 4 );
		?>