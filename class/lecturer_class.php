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

	//create update and delete queries
	function update_lecturer($lecturer_id, $name, $email, $contact){
		// return true or false
		return $this->query("update lecturers set lecturer_name = '$name', lecturer_email = '$email', lecturer_contact = '$contact' where lecturer_id = '$lecturer_id'");
	}

	function delete_lecturer($lecturer_id){
		// return true or false
		return $this->query("delete from lecturers where lecturer_id='$lecturer_id'");

	}

}

?>