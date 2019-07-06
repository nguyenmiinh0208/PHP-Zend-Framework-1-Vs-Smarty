<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

	protected function _initDb() {
        $dbOption = $this->getOption('resources');
        $dbOption = $dbOption['db'];

        $db = Zend_Db::factory($dbOption['adapter'], $dbOption['params']);
        Zend_Registry::set('connectDb', $db);

        Zend_Db_Table::setDefaultAdapter($db);
        return $db;
	}
		
	protected function _initDefaultModuleAutoloader() {
		$resourceLoader = new Zend_Application_Module_Autoloader(array (
			'namespace' => '',
			'basePath' => APPLICATION_PATH
		));

		return $resourceLoader;
	} 
	
	protected function _initView() {
		$view = new Ext_View_Smarty($this->getOption('smarty'));
		$viewRenderer = Zend_Controller_Action_HelperBroker::getStaticHelper('ViewRenderer');
		$viewRenderer->setViewSuffix('tpl');
		$viewRenderer->setView($view);

		// ensure we have layout bootstraped
		$this->bootstrap('layout');

		$layout = Zend_Layout::getMvcInstance();
		$layout->setViewSuffix('tpl');

		return $view;
	}
}