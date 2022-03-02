<?php

require_once '../class/announcement_class.php';

// announcement
function add_announcement_controller($subject,$message,$attached_file,$date){
    // create an instance of the announcement class
    $announcement_instance = new Announcement();
    // call the method from the class
    return $announcement_instance->add_announcement($subject,$message,$attached_file,$date);

}

function select_announcement_controller($subject,$message){
    // create an instance of the customer class
    $announcement_instance = new Announcement();
    // call the method from the class
    return $announcement_instance->select_announcement($subject,$message);

}

function select_all_announcements_controller(){
    // create an instance of the customer class
    $announcement_instance = new Announcement();
    // call the method from the class
    return $announcement_instance->select_all_announcements();

}

function delete_announcement_controller($announcement_id){
    // create an instance of the customer class
    $announcement_instance = new Announcement();
    // call the method from the class
    return $announcement_instance->delete_announcement($announcement_id);

}

function update_announcement_controller($announcement_id,$subject,$message,$date){
    // create an instance of the customer class
    $announcement_instance = new Announcement();
    // call the method from the class
    return $announcement_instance->update_announcement($announcement_id,$subject,$message);

}

function count_announcement_controller(){
    // create an instance of the customer class
    $announcement_instance = new Announcement();
    // call the method from the class
    return $announcement_instance->count_announcements();

}


?>