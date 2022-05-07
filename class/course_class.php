<?php

require_once('../settings/db_class.php');

// inherit the methods from Connection
class Course extends Connection{
	
	public function add_course($course_code, $course_name, $course_passgrade){
		// return true or false
		return $this->query("insert into courses(course_code,course_name, course_passgrade)
							 values('$course_code', '$course_name', '$course_passgrade')");
	}

	public function select_all_courses(){
		// return associative array or false
		return $this->fetch("select * from courses");
	}

	public function select_course($course_name){
		// return associative array or false
		return $this->fetchOne("select * from courses where course_name = '$course_name'");
	}

	//create update and delete queries
	public function update_course($course_id, $course_code, $course_name, $course_passgrade){
		// return true or false
		return $this->query("update courses set course_name = '$course_name' , course_code = '$course_code' , course_passgrade = '$course_passgrade' where course_id = '$course_id'");
	}

    public function set_prerequisite($course_id, $prerequisite_id){
        // return true or false
		return $this->query("insert into course_prerequisite(course_id, course_prerequisite_id)
							 values('$course_id','$prerequisite_id')");
	}

	public function has_prerequisite($course_id){
		// return associative array or false
		return $this->fetchOne("select * from course_prerequisite WHERE course_id = '$course_id'");
	}

	public function get_prerequisites($course_id){
		// return associative array or false
		return $this->fetchOne("select * from course_prerequisite inner join courses on
		 course_prerequisite.course_id = courses.course_id where course_id = '$course_id'");
	}

	public function is_prerequisite($course_id){
		return $this->fetchOne("select * from course_prerequisite inner join courses on
								course_prerequisite.course_prerequisite_id = courses.course_id  where
								course_prerequisite.course_prerequisite_id='$course_id'");
	}

    //delete course here
	public function delete_course($course_id){
		// return true or false
		return $this->query("delete from courses where course_id='$course_id'");
	}

	//update course
	// public function update_courseupdate_course($course_id,$course_code,$course_name,$course_passgrade){
	// 	// return true or false
	// 	return $this->query("update announcements set announcement_subject = '$subject', announcement_message = '$message', date = '$date' where announcement_id = '$announcement_id'");
	// }



}

?>