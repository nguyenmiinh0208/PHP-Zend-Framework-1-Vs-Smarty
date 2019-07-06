<?php
/**
 * Connects to the Database
 *
 * @author ppfeufer
 */
class Application_Model_Db {
	public function getDbInstance() {
		$dbConfig = new Zend_Config_Ini(APPLICATION_PATH . '/configs/db-config.ini', APPLICATION_ENV);
		$db = new Zend_Db_Adapter_Pdo_Mysql($dbConfig->database->params);

		return $db;
	} // END public function getInstance()
} // END class Application_Model_Db