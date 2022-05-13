<?php

require_once('../settings/db_class.php');

// inherit the methods from Connection
class FAQ extends Connection{
	
	function add_faq($question, $answer){
		// return true or false
		return $this->query("insert into faq(faq_question, faq_answer )values('$question', '$answer')");
	}

	function select_all_faqs(){
		// return associative array or false
		return $this->fetch("select * from faq");
	}

	//create update and delete queries
	function update_faq($faq_id, $question, $answer){
		// return true or false
		return $this->query("update faq set faq_question = '$question', faq_answer = '$answer' where faq_id = '$faq_id'");
	}

	function delete_faq($faq_id){
		// return true or false
		return $this->query("delete from faq where faq_id='$faq_id'");

	}

	public function number_of_faqs()
	{
		return $this->fetchOne("select count(*) as count from faq");
	}

	function select_faq($question, $answer){
		// return associative array or false
		return $this->fetchOne("select * from faq where faq_question='$question' and faq_answer='$answer'");
	}
}

?>