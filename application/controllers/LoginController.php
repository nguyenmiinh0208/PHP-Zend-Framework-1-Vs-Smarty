<?php 
class LoginController extends Zend_Controller_Action{ 
	public function init() {
		$this->view->titleLogin = "Login | KnowledgeC@fe";
	}

    public function indexAction(){
        $db = Zend_Registry::get('connectDb');
        $auth = Zend_Auth::getInstance();
        $authApdater = new Zend_Auth_Adapter_DbTable($db);
        $authApdater->setTableName('users')
                    ->setIdentityColumn('username')
                    ->setCredentialColumn('password');

        if (isset($_POST['submit'])) {
            $username = $_POST['userId'];
            $pass = md5($_POST['userPass']);
            
            $authApdater->setIdentity($username);
            $authApdater->setCredential($pass);

            $result = $auth->authenticate($authApdater);

            if (!$result->isValid()) {
                $error = $result->getMessages();
                echo current($error);
            }else {
                $omitColums = array('password');
                $data = $authApdater->getResultRowObject(null, $omitColums);
                $auth->getStorage()->write($data);
                $this->_redirect('/user/index');
            }
		}else {
			//print value error
			echo isset($_POST['submit']);	
		}
    }
}
?>