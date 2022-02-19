<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class FAQ extends Connection{
	

	function add_faq($question, $answer){
		// return true or false
		return $this->query("insert into faq(faq_name, faq_email, faq_password, faq_contact, faq_image ) values('$name', '$email', '$pass', '$contact', '$image')");
	}

	function select_faq($question, $answer){
		// return associative array or false
		return $this->fetchOne("select * from faq where question='$question' and faq_password='$answer'");
	}

	//create update and delete queries

}

?>