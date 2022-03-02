<?php

require_once('../settings/db_class.php');

// inherit the methods from Connection
class Advisor extends Connection{
	

	function add_advisor($name, $email, $password, $contact){
		// return true or false
		return $this->query("insert into advisor(advisor_name, advisor_email, advisor_pass, advisor_contact ) values('$name', '$email', '$password', '$contact')");
	}

	function login_advisor($email, $password){
		// return associative array or false
		return $this->fetchOne("select * from advisor where advisor_email='$email' and advisor_password='$pass'");
	}

	function select_one_advisor_by_email($email){
		// return associative array or false
		return $this->fetchOne("select * from advisor where advisor_email='$email'");
	}

}

?>