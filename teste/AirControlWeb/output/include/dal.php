<?php

$dal_info = array();

/**
 * User API function
 * @param String sql
 */
function UsersTableName()
{
	global $cman;
	$connection = $cman->getForLogin();
	return $connection->addTableWrappers("aircontrolweb_users");
}

/**
 * User API function
 * It uses the default db connection
 * @param String dalSQL
 */
function CustomQuery($dalSQL)
{
	$connection = getDefaultConnection();
	$result = $connection->query( $dalSQL );
	if($result)
		return $result;
}

/**
 * User API function
 * It uses the default db connection 
 * @param String sql
 */
function DBLookup($sql)
{
	$connection = getDefaultConnection();
	$data = $connection->query( $sql )->fetchAssoc();

	if( $data )
		return reset($data);
	  
	return null;
}

/**
  * Data Access Layer.
  */
class tDAL
{
	var $tbldb9f9deaairwebatMYSQL5014site4__tbl12horas;
	var $tbldb9f9deaairwebatMYSQL5014site4__tbl24horas;
	var $tbldb9f9deaairwebatMYSQL5014site4__tbl3horas;
	var $tbldb9f9deaairwebatMYSQL5014site4__tbl6horas;
	var $tbldb9f9deaairwebatMYSQL5014site4__tbl9horas;
	var $tbldb9f9deaairwebatMYSQL5014site4__aircontrolweb_audit;
	var $tbldb9f9deaairwebatMYSQL5014site4__aircontrolweb_dyperuggroups;
	var $tbldb9f9deaairwebatMYSQL5014site4__aircontrolweb_dyperugmembers;
	var $tbldb9f9deaairwebatMYSQL5014site4__aircontrolweb_dyperugrights;
	var $tbldb9f9deaairwebatMYSQL5014site4__aircontrolweb_locking;
	var $tbldb9f9deaairwebatMYSQL5014site4__aircontrolweb_users;
	var $tbldb9f9deaairwebatMYSQL5014site4__hoje;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_agendamento;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_classification;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_controle;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_monitoramento;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_reference;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_setpoing;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_setpoint_bloqueia;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_setpoint_email;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_setpoint_sms;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_status;
	var $tbldb9f9deaairwebatMYSQL5014site4__tb_ticket;
	var $tbldb9f9deaairwebatMYSQL5014site4__vwv_analise_temp_maximo_acima;
	var $tbldb9f9deaairwebatMYSQL5014site4__vwv_analise_temp_minima_abaixo;
	var $tbldb9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo;
	var $tbldb9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo_leitura_max_min_med;
	var $tbldb9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo_leitura_maxima;
	var $tbldb9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo_leitura_minima;
	var $tbldb9f9deaairwebatMYSQL5014site4__vwv_tag_user;
	var $tbldb9f9deaairwebatMYSQL5014site4__webreport_admin;
	var $tbldb9f9deaairwebatMYSQL5014site4__webreport_style;
	var $tbldb9f9deaairwebatMYSQL5014site4__webreports;
	var $lstTables;
	var $Table = array();

	function FillTablesList()
	{
		if($this->lstTables)
			return;
		$this->lstTables[] = array("name" => "12horas", "varname" => "db9f9deaairwebatMYSQL5014site4__tbl12horas", "altvarname" => "tbl12horas", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "24horas", "varname" => "db9f9deaairwebatMYSQL5014site4__tbl24horas", "altvarname" => "tbl24horas", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "3horas", "varname" => "db9f9deaairwebatMYSQL5014site4__tbl3horas", "altvarname" => "tbl3horas", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "6horas", "varname" => "db9f9deaairwebatMYSQL5014site4__tbl6horas", "altvarname" => "tbl6horas", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "9horas", "varname" => "db9f9deaairwebatMYSQL5014site4__tbl9horas", "altvarname" => "tbl9horas", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "aircontrolweb_audit", "varname" => "db9f9deaairwebatMYSQL5014site4__aircontrolweb_audit", "altvarname" => "aircontrolweb_audit", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "aircontrolweb_dyperuggroups", "varname" => "db9f9deaairwebatMYSQL5014site4__aircontrolweb_dyperuggroups", "altvarname" => "aircontrolweb_dyperuggroups", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "aircontrolweb_dyperugmembers", "varname" => "db9f9deaairwebatMYSQL5014site4__aircontrolweb_dyperugmembers", "altvarname" => "aircontrolweb_dyperugmembers", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "aircontrolweb_dyperugrights", "varname" => "db9f9deaairwebatMYSQL5014site4__aircontrolweb_dyperugrights", "altvarname" => "aircontrolweb_dyperugrights", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "aircontrolweb_locking", "varname" => "db9f9deaairwebatMYSQL5014site4__aircontrolweb_locking", "altvarname" => "aircontrolweb_locking", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "aircontrolweb_users", "varname" => "db9f9deaairwebatMYSQL5014site4__aircontrolweb_users", "altvarname" => "aircontrolweb_users", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "hoje", "varname" => "db9f9deaairwebatMYSQL5014site4__hoje", "altvarname" => "hoje", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_agendamento", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_agendamento", "altvarname" => "tb_agendamento", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_classification", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_classification", "altvarname" => "tb_classification", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_controle", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_controle", "altvarname" => "tb_controle", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_monitoramento", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_monitoramento", "altvarname" => "tb_monitoramento", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_reference", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_reference", "altvarname" => "tb_reference", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_setpoing", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_setpoing", "altvarname" => "tb_setpoing", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_setpoint_bloqueia", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_setpoint_bloqueia", "altvarname" => "tb_setpoint_bloqueia", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_setpoint_email", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_setpoint_email", "altvarname" => "tb_setpoint_email", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_setpoint_sms", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_setpoint_sms", "altvarname" => "tb_setpoint_sms", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_status", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_status", "altvarname" => "tb_status", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "tb_ticket", "varname" => "db9f9deaairwebatMYSQL5014site4__tb_ticket", "altvarname" => "tb_ticket", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "vwv_analise_temp_maximo_acima", "varname" => "db9f9deaairwebatMYSQL5014site4__vwv_analise_temp_maximo_acima", "altvarname" => "vwv_analise_temp_maximo_acima", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "vwv_analise_temp_minima_abaixo", "varname" => "db9f9deaairwebatMYSQL5014site4__vwv_analise_temp_minima_abaixo", "altvarname" => "vwv_analise_temp_minima_abaixo", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "vwv_monitoramento_por_periodo", "varname" => "db9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo", "altvarname" => "vwv_monitoramento_por_periodo", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "vwv_monitoramento_por_periodo_leitura_max_min_med", "varname" => "db9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo_leitura_max_min_med", "altvarname" => "vwv_monitoramento_por_periodo_leitura_max_min_med", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "vwv_monitoramento_por_periodo_leitura_maxima", "varname" => "db9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo_leitura_maxima", "altvarname" => "vwv_monitoramento_por_periodo_leitura_maxima", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "vwv_monitoramento_por_periodo_leitura_minima", "varname" => "db9f9deaairwebatMYSQL5014site4__vwv_monitoramento_por_periodo_leitura_minima", "altvarname" => "vwv_monitoramento_por_periodo_leitura_minima", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "vwv_tag_user", "varname" => "db9f9deaairwebatMYSQL5014site4__vwv_tag_user", "altvarname" => "vwv_tag_user", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "webreport_admin", "varname" => "db9f9deaairwebatMYSQL5014site4__webreport_admin", "altvarname" => "webreport_admin", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "webreport_style", "varname" => "db9f9deaairwebatMYSQL5014site4__webreport_style", "altvarname" => "webreport_style", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
		$this->lstTables[] = array("name" => "webreports", "varname" => "db9f9deaairwebatMYSQL5014site4__webreports", "altvarname" => "webreports", "connId" => "db9f9deaairwebatMYSQL5014site4", "schema" => "", "connName" => "db_9f9dea_airweb at MYSQL5014.");
	}

	/**
      * Returns table object by table name.
      * @intellisense
      */
	function & Table($strTable, $schema = "", $connName = "")
	{
		$this->FillTablesList();
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper($strTable)==strtoupper($tbl["name"]) &&
				( $schema == "" || strtoupper($schema) == strtoupper($tbl["schema"]) ) &&
				($connName == "" || strtoupper($connName) == strtoupper($tbl["connName"]) ) )
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
//	check table names without dbo. and other prefixes
		foreach($this->lstTables as $tbl)
		{
			if(strtoupper(cutprefix($strTable))==strtoupper(cutprefix($tbl["name"])))
			{
				$this->CreateClass($tbl);
				return $this->{"tbl".$tbl["varname"]};
			}
		}
		$dummy=null;
		return $dummy;
	}
	
	function CreateClass(&$tbl)
	{
		if($this->{"tbl".$tbl["varname"]})
			return;
//	load table info
		global $dal_info;
		include(getabspath("include/dal/".($tbl["varname"]).".php"));
//	create class and object

		$classname="class_".$tbl["varname"];
		$str = "class ".$classname." extends tDALTable  {";
		foreach($dal_info[$tbl["varname"]] as $fld)
		{
			$str.=' var $'.$fld["varname"].'; ';
		}
		
		$tableName = $tbl["name"];
		if( $tbl["schema"] )
			$tableName = $tbl["schema"] . "." . $tbl["name"];
		$str.=' function __construct()
			{
				$this->m_TableName = \''.escapesq( $tableName ).'\';
				$this->infoKey = \'' . $tbl["varname"] . '\';
				$this->setConnection(\''. $tbl["connId"] .'\');
			}
		};';
		eval($str);
		$this->{"tbl".$tbl["varname"]} = new $classname;
		$this->{$tbl["altvarname"]} = $this->{"tbl".$tbl["varname"]};
		$this->Table[$tbl["name"]]=&$this->{"tbl".$tbl["varname"]};
	}
	
	/**
      * Returns list of table names.
      * @intellisense
      */
	function GetTablesList()
	{
		$this->FillTablesList();
		$res=array();
		foreach($this->lstTables as $tbl)
			$res[]=$tbl["name"];
		return $res;
	}
	
	/**
      * Get list of table fields by table name.
      * @intellisense
      */
	function GetFieldsList($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldsList();
	}
	
	/**
      * Get field type by table name and field name.
      * @intellisense
      */
	function GetFieldType($table,$field)
	{
		$tbl = $this->Table($table);
		return $tbl->GetFieldType($field);
	}

	/**
      * Get table key fields by table name.
      * @intellisense
      */
	function GetDBTableKeys($table)
	{
		$tbl = $this->Table($table);
		return $tbl->GetDBTableKeys();
	}
}

$dal = new tDAL;

/**
 * Data Access Layer table class.
 */ 
class tDALTable
{
	var $m_TableName;
	var $infoKey;
	var $Param = array();
	var $Value = array();
	/**
	 * @type Connection
	 */
	var $_connection;
	
	/**
	 * Set the connection property
	 * @param String connId
	 */
	function setConnection( $connId )
	{
		global $cman;
		$this->_connection = $cman->byId( $connId );
	}
	
	/**
      * Get table key fields.
      * @intellisense
      */
	function GetDBTableKeys()
	{
		global $dal_info;
		if( !array_key_exists($this->infoKey, $dal_info) || !is_array($dal_info[ $this->infoKey ]) )
			return array();
		
		$ret = array();
		foreach($dal_info[ $this->infoKey ] as $fname=>$f)
		{
			if( @$f["key"] )
				$ret[] = $fname;
		}
		return $ret;
	}
	
	/**
      * Get list of table fields.
      * @intellisense
      */
	function GetFieldsList()
	{
		global $dal_info;
		return array_keys( $dal_info[ $this->infoKey ] );
	}

	/**
      * Get field type.
      * @intellisense
      */
	function GetFieldType($field)
	{
		global $dal_info;
		
		if( !array_key_exists( $field, $dal_info[ $this->infoKey ]) )
			return 200;
			
		return $dal_info[ $this->infoKey ][ $field ]["type"];
	}
	
	/**
	 *
	 */
	function PrepareValue($value, $type)
	{
		if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
		{
			if( IsBinaryType($type) )
			{
				if( $this->_connection->dbType == nDATABASE_Oracle )
					return "EMPTY_BLOB()";
					
				return "?";
			}
			
			if( $this->_connection->dbType == nDATABASE_Informix  && IsTextType($type) )
				return "?";
		}
	
		if( IsDateFieldType($type) )
		{
			if( !$value )
				return "null";
			else
				$this->_connection->addDateQuotes( $value );
		}
		
		if( NeedQuotes($type) )
			return $this->_connection->prepareString( $value );

		return 0 + $value;
	}
	
	/**
      * Get table name.
      * @intellisense
      */
	function TableName()
	{
		return $this->_connection->addTableWrappers( $this->m_TableName );
	} 

	/**
	 * @param Array blobs
	 * @param String dalSQL
	 * @param Array tableinfo
	 */
	protected function Execute_Query($blobs, $dalSQL, $tableinfo)
	{		
		$blobTypes = array();
		if( $this->_connection->dbType == nDATABASE_Informix )
		{		
			foreach( $blobs as $fname => $fvalue )
			{
				$blobTypes[ $fname ] = $tableinfo[ $fname ]["type"];
			}
		}

		$this->_connection->execWithBlobProcessing( $dalSQL, $blobs, $blobTypes );
	}

	/**
      * Add new record to the table.
      * @intellisense
      */
	function Add() 
	{
		global $dal_info;
		
		$insertFields = "";
		$insertValues = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		$blobs = array();
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Value[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Value as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$insertFields.= $this->_connection->addFieldWrappers( $fieldname ).",";
				$insertValues.= $this->PrepareValue($value,$fld["type"]) . ",";
				
				if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
				{
					if( IsBinaryType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
						
					if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )
						$blobs[ $fieldname ] = $value;
				}
				break;
			}
		}
		//	prepare and exec SQL
		if( $insertFields != "" && $insertValues != "" )		
		{
			$insertFields = substr($insertFields, 0, -1);
			$insertValues = substr($insertValues, 0, -1);
			$dalSQL = "insert into ".$this->_connection->addTableWrappers( $this->m_TableName )." (".$insertFields.") values (".$insertValues.")";
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}
		//	cleanup		
	    $this->Reset();
	}

	/**
      * Query all records from the table.
      * @intellisense
      */
	function QueryAll()
	{
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName );
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Do a custom query on the table.
      * @intellisense
      */
	function Query($swhere = "", $orderby = "")
	{
		if ($swhere)
			$swhere = " where ".$swhere;
			
		if ($orderby)
			$orderby = " order by ".$orderby;
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$swhere.$orderby;
		return $this->_connection->query( $dalSQL );
	}

	/**
      * Delete a record from the table.
      * @intellisense
      */
	function Delete()
	{
		global $dal_info;
		
		$deleteFields = "";
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			if( isset($this->{$fld['varname']}) )
			{
				$this->Param[ $fieldname ] = $this->{$fld['varname']};
			}
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$deleteFields.= $this->_connection->addFieldWrappers( $fieldname )."=". $this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		//	do delete
		if ($deleteFields)
		{
			$deleteFields = substr($deleteFields, 0, -5);
			$dalSQL = "delete from ".$this->_connection->addTableWrappers( $this->m_TableName )." where ".$deleteFields;
			$this->_connection->exec( $dalSQL );
		}
	
		//	cleanup
	    $this->Reset();
	}

	/**
      * Reset table object.
      * @intellisense
      */
	function Reset()
	{
		global $dal_info;
		
		$this->Value = array();
		$this->Param = array();
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		//	prepare parameters		
		foreach($tableinfo as $fieldname => $fld)
		{
			unset($this->{$fld["varname"]});
		}
	}	

	/**
      * Update record in the table.
      * @intellisense
      */
	function Update()
	{
		global $dal_info;
		
		$tableinfo = &$dal_info[ $this->infoKey ];
		$updateParam = "";
		$updateValue = "";
		$blobs = array();

		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			if( $fld["key"] )
				$command.= '$this->Param[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			else
				$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			if( !$fld["key"] && !array_key_exists( strtoupper($fieldname), array_change_key_case($this->Param, CASE_UPPER) ) )
			{
				foreach($this->Value as $field => $value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateValue.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . ", ";
					
					if( $this->_connection->dbType == nDATABASE_Oracle || $this->_connection->dbType == nDATABASE_DB2 || $this->_connection->dbType == nDATABASE_Informix )
					{
						if( IsBinaryType( $fld["type"] ) )
							$blobs[ $fieldname ] = $value;
							
						if( $this->_connection->dbType == nDATABASE_Informix && IsTextType( $fld["type"] ) )	
							$blobs[ $fieldname ] = $value;		
					}
					break;
				}
			}
			else
			{
				foreach($this->Param as $field=>$value)
				{
					if( strtoupper($field) != strtoupper($fieldname) )
						continue;
						
					$updateParam.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
					break;
				}
			}
		}

		//	construct SQL and do update	
		if ($updateParam)
			$updateParam = substr($updateParam, 0, -5);
		if ($updateValue)
			$updateValue = substr($updateValue, 0, -2);
			
		if ($updateValue && $updateParam)
		{
			$dalSQL = "update ".$this->_connection->addTableWrappers( $this->m_TableName )." set ".$updateValue." where ".$updateParam;
			$this->Execute_Query($blobs, $dalSQL, $tableinfo);
		}

		//	cleanup
		$this->Reset();
	}
	
	/**
	 * Select one or more records matching the condition
	 */
	function FetchByID()
	{
		global $dal_info;
		$tableinfo = &$dal_info[ $this->infoKey ];

		$dal_where = "";
		foreach($tableinfo as $fieldname => $fld)
		{
			$command = 'if(isset($this->'.$fld['varname'].')) { ';
			$command.= '$this->Value[\''.escapesq($fieldname).'\'] = $this->'.$fld['varname'].';';
			$command.= ' }';
			
			eval($command);
			
			foreach($this->Param as $field => $value)
			{
				if( strtoupper($field) != strtoupper($fieldname) )
					continue;
					
				$dal_where.= $this->_connection->addFieldWrappers( $fieldname )."=".$this->PrepareValue($value, $fld["type"]) . " and ";
				break;
			}
		}
		// cleanup
		$this->Reset();
		// construct and run SQL
		if ($dal_where)
			$dal_where = " where ".substr($dal_where, 0, -5);
			
		$dalSQL = "select * from ".$this->_connection->addTableWrappers( $this->m_TableName ).$dal_where;
		return $this->_connection->query( $dalSQL );
	}
}

function cutprefix($table)
{
	$pos = strpos($table,".");
	if( $pos === false )
		return $table;
		
	return substr($table, $pos + 1);
}

function escapesq($str)
{
	return str_replace(array("\\","'"),array("\\\\","\\'"),$str);
}

?>