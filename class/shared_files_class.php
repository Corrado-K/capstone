<?php

require_once('../settings/db_class.php');

// inherit the methods from Connection
class Shared_file extends Connection{
	
	public function add_shared_file($file_name,$desc, $file){
		// return true or false
		return $this->query("insert into shared_files(file_name, file_desc, file) values('$file_name', '$desc', '$file')");
	}

	public function select_all_shared_files(){
		// return associative array or false
		return $this->fetch("select * from shared_files");
	}

	public function select_shared_files($file_name){
		// return associative array or false
		return $this->fetchOne("select * from shared_files where file_name = '$file_name'");
	}

	//create update and delete queries
	public function update_shared_files($file_id, $file_name, $file){
		// return true or false
		return $this->query("update shared_files set file_name = '$file_name' and file = '$file' where shared_files_id = '$shared_files_id'");
	}

}

?>