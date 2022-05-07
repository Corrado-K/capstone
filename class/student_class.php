<?php

require_once('../settings/db_class.php');

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

	public function number_of_students(){
		// return associative array or false
		return $this->fetchOne("select count(*) as count from student");
	}

	//create update and delete queries
	function update_student($student_id, $name, $email, $contact){
		// return true or false
		return $this->query("update student set student_name = '$name', student_email = '$email', student_contact = '$contact' where student_id = '$student_id'");
	}

	function delete_student($student_id){
		// return true or false
		return $this->query("delete from student where student_id='$student_id'");

	}


}

?>