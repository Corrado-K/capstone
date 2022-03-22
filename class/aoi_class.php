<?php

require_once('../settings/db_class.php');

// inherit the methods from Connection
class AOI extends Connection{
	
	function add_aoi($name, $description){
		// return true or false
		return $this->query("insert into areas_of_interest(aoi_name, aoi_description ) values('$name', '$description')");
	}

	function select_all_aois(){
		// return associative array or false
		return $this->fetch("select * from areas_of_interest");
	}

	function select_all_lecturer_aois(){
		// return associative array or false
		return $this->fetch("select * from lecturer_aoi");
	}

	function select_all_aois_to_json(){
		// return associative array or false
		return $this->fetch("select aoi_id as id, aoi_name as text from areas_of_interest");
	}

	function select_aoi($name, $description){
		// return associative array or false
		return $this->fetchOne("select * from areas_of_interest where aoi_name='$name' and aoi_description='$description'");
	}

	//create update and delete queries
	function update_aoi($aoi_id, $name, $description){
		// return true or false
		return $this->query("update areas_of_interest set name = '$name' and description = '$description' where aoi_id = '$aoi_id'");
	}

}

?>