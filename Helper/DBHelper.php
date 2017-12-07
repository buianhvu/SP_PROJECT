<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
	define ('DB_SERVER', 'localhost');
	define ('DB_USERNAME', 'root');
	define ('DB_PASSWORD', '');
	define ('DB_DATABASE', 'sp_ict_group04');
        
class DBHelper {
	private $DB_SERVER;
	private $DB_USERNAME;
	private $DB_PASSWORD;
	private $DB_DATABASE;
	private $db;
	public function __construct() {
		$this->DB_SERVER = DB_SERVER;
		$this->DB_USERNAME = DB_USERNAME;
		$this->DB_PASSWORD = DB_PASSWORD;
		$this->DB_DATABASE = DB_DATABASE;
	}
	public function __destruct() {
		unset($this->db);
	}

	public function db_connect() {
		$this->db = new mysqli($this->DB_SERVER, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_DATABASE);
		return $this->db;
	}
	public function doQuery($sql) {
		$this->db->query($sql);
	}
	public function getLastInsertID() {
		return $this->db->insert_id;
	}
}

