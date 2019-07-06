<?php
/**
 * @filesource application/controllers/ErrorController.php
 * @author ppfeufer
 */
class ErrorController extends Zend_Controller_Action {
	public function errorAction() {
		$errors = $this->_getParam('error_handler');

		switch($errors->type) {
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ROUTE:
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_CONTROLLER:
			case Zend_Controller_Plugin_ErrorHandler::EXCEPTION_NO_ACTION:
				/**
				 * 404 Fehler -- Controller oder Action nicht gefunden
				 */
				$this->getResponse()->setHttpResponseCode(404);
				$this->view->message = 'Page not found';
				break;

			default:
				/**
				 * Anwendungsfehler
				 */
				$this->getResponse()->setHttpResponseCode(500);
				$this->view->message = 'Application error';
				break;
		} // END switch($errors->type)

		$this->view->exception = $errors->exception;
		$this->view->request = $errors->request;
	} // END public function errorAction()
} // END class ErrorController extends Zend_Controller_Action