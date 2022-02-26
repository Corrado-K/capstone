<?php

require_once('../settings/db_class.php');

// inherit the methods from Connection
class Course extends Connection{
	
	public function add_course($course_code, $course_name, $course_passgrade){
		// return true or false
		return $this->query("insert into courses(course_code,course_name, course_passgrade) values('$course_code', '$course_name', '$course_passgrade')");
	}

	public function select_all_courses(){
		// return associative array or false
		return $this->fetch("select * from courses");
	}

	public function select_courses($course_name){
		// return associative array or false
		return $this->fetchOne("select * from courses where course_name = '$course_name'");
	}

	//create update and delete queries
	public function update_courses($course_id, $course_name, $course){
		// return true or false
		return $this->query("update courses set course_name = '$course_name' and course = '$course' where courses_id = '$courses_id'");
	}

    public function set_prerequisite($course_id, $prerequisite_id){
        // return true or false
		return $this->query("insert into course_prerequisite(course_id, prerequisite) values('$course_id','$prerequisite_id')");
	}


    //delete course here
    



}

?>