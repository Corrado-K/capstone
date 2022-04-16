<?php

require_once('../settings/db_class.php');

// inherit the methods from Connection
class Announcement extends Connection{
	
	public function add_announcement($subject, $message, $file, $date){
		// return true or false
		return $this->query("insert into announcements(announcement_subject, announcement_message, attached_file, date) values('$subject', '$message', '$file', '$date')");
	}

	public function select_announcement($subject, $message){
		// return associative array or false
		return $this->fetchOne("select * from announcements where question='$subject' and announcement_password='$message'");
	}

	public function select_all_announcements(){
		// return associative array or false
		return $this->fetch("select * from announcements");
	}

	public function number_of_announcements()
	{
		return $this->fetchOne("select count(*) as count from announcements");
	}

	//create update and delete queries
	public function update_announcement($announcement_id, $subject, $message, $date){
		// return true or false
		return $this->query("update announcements set announcement_subject = '$subject', announcement_message = '$message', date = '$date' where announcement_id = '$announcement_id'");
	}

	//create update and delete queries
	public function delete_announcement($announcement_id){
		// return true or false
		return $this->query("delete from announcements where announcement_id='$announcement_id'");
	}

	public function count_announcements(){
		// return associative array or false
		return $this->fetchOne("select count(*) as count from announcements");
	}

		


}

?>