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

	function find_aoi($aoi){
		// return an associative array or false
		$count = count($aoi);
		$counter = 1;
		$query = "select * from lecturer_aoi inner join areas_of_interest on lecturer_aoi.aoi_id = areas_of_interest.aoi_id
											 inner join lecturers on lecturer_aoi.lecturer_id = lecturers.lecturer_id
				 							 where";
		foreach ($aoi as $aoi_item) {
			if ($counter < $count) {
				$query = $query . " lecturer_aoi.aoi_id = '" . $aoi_item ."' or";
        $counter ++;
			}else{
				$query = $query . " lecturer_aoi.aoi_id = '" . $aoi_item ."'";
        $counter ++;
			}
		}
		//  aoi_name like 'Machine Learning' or `aoi_name` LIKE 'Data Science'";
		return $this->fetch($query);
	}

	//create update and delete queries
	function update_aoi($aoi_id, $name, $description){
		// return true or false
		return $this->query("update areas_of_interest set aoi_name = '$name', aoi_description = '$description' where aoi_id = '$aoi_id'");
	}

	function delete_aoi($aoi_id){
		// return true or false
		return $this->query("delete from areas_of_interest where aoi_id='$aoi_id'");

	}

	public function number_of_aois(){
		// return  associative array or false
		return $this->fetchOne("select count(*) as count from areas_of_interest");
	}

}

?>