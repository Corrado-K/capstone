<?php

require('../settings/db_class.php');

// inherit the methods from Connection
class Student extends Connection{
	

	function add_student($name, $email, $school_id, $password, $contact, $image){
		// return true or false
		return $this->query("insert into student(student_name, student_email, student_password, student_contact, student_image ) values('$name', '$email', '$pass', '$contact', '$image')");
	}

	function login_student($email, $student_id, $password){
		// return associative array or false
		return $this->fetchOne("select * from student where (student_email='$email' or student_id='$student_id') and student_password='$pass'");
	}

	function select_one_student_by_email($email){
		// return associative array or false
		return $this->fetchOne("select * from students where student_email='$email'");
	}

	function select_one_student_by_id($student_id){
		// return associative array or false
		return $this->fetchOne("select * from students where student_id='$student_id'");
	}

}

?>