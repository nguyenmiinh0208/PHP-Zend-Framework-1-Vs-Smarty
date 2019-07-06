<?php
class Application_Model_Mail {
	private $deafultOptions = array(
		'setFromMail' => '',
		'setFromName' => '',
		'setBodyText' => '',
		'setBodyHtml' => '',
		'setSubject' => ''
	);

	public function sendMail($options = array()) {
		$options = array_merge($this->deafultOptions, $options);

		$mailConfig = new Zend_Config_Ini(APPLICATION_PATH . '/configs/smtp-config.ini', 'mail');
		$config = array(
			'auth' => $mailConfig->mail->transport->auth,
			'username' => $mailConfig->mail->transport->username,
			'password' => $mailConfig->mail->transport->password
		);

		$tr = new Zend_Mail_Transport_Smtp($mailConfig->mail->server, $config);
		Zend_Mail::setDefaultTransport($tr);

		$mail = new Zend_Mail('UTF-8');
		$mail->setBodyText($options['setBodyText']);
		if(!empty($options['setBodyHtml'])) {
			$mail->setBodyHtml($options['setBodyHtml']);
		}
		$mail->setFrom($options['setFromMail'], $options['setFromName']);
		$mail->addTo($options['setToMail'], $options['setToName']);
		$mail->setSubject($options['setSubject']);
		$mail->send();
	} // END public function isIngameBrowser()
} // END class Application_Model_Browser