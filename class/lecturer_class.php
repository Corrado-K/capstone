<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class Lecturer extends Connection{
	

	function add_lecturer($name, $email, $contact){
		// return true or false
		return $this->query("insert into lecturers(lecturer_name, lecturer_email, lecturer_contact)
		 values('$name', '$email', '$contact')");
	}

	function select_all_lecturers(){
		// return associative array or false
		return $this->fetch("select * from lecturers");
	}

	function select_one_lecturer($email){
		// return associative array or false
		return $this->fetchOne("select * from lecturers where lecturer_email='$email'");
	}

}

?>