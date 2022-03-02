<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class Student extends Connection{
	

	function add_student($name, $email, $password, $contact, $image){
		// return true or false
		return $this->query("insert into student(student_name, student_email, student_pass, student_contact, student_image ) values('$name', '$email', '$pass', '$contact', '$image')");
	}

	function select_all_students(){
		// return associative array or false
		return $this->fetchOne("select * from student");
	}

	function select_one_student_by_email($email){
		// return associative array or false
		return $this->fetchOne("select * from students where student_email='$email'");
	}


}

?>