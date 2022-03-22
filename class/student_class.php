<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class Student extends Connection{
	

	function add_student($name, $email, $password, $contact){
		// return true or false
		return $this->query("insert into student(student_name, student_email, student_pass, student_contact) values('$name', '$email', '$password', '$contact')");
	}

	function select_all_students(){
		// return associative array or false
		return $this->fetch("select * from student");
	}

	function select_one_student($email){
		// return associative array or false
		return $this->fetchOne("select * from student where student_email='$email'");
	}


}

?>