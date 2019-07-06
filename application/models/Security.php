<?php
/**
 * Security
 *
 * @author ppfeufer
 */
class Application_Model_Security {
	private $secConfig;

	public function __construct() {
		$this->secConfig = new Zend_Config_Ini(APPLICATION_PATH . '/configs/security-config.ini', 'security');
	}

	/**
	 * Encrypting the password to store it in our database
	 *
	 * @param string $password,

	 * @return sring
	 */
	public function encryptPassword($password, $confirmationCode = null) {
		$secret_salt = $this->secConfig->salt;
		$salted_password = $secret_salt . $password . $confirmationCode;
		$password_hash = hash('sha256', $salted_password);

		return $password_hash;
	} // END public function encryptPassword($password)

	/**
	 * Creating a randon string as confirmation code
	 *
	 * @return string
	 */
	public function createConfirmationCode() {
		return md5(uniqid('zend-project', true));
	} // END public function createConfirmationCode()
} // END class Application_Model_User