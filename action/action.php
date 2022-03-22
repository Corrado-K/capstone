<?php 

require_once '../controller/student_controller.php';
require_once '../controller/aoi_controller.php';

if (isset($_POST['add_aoi'])) {
    $aoi = $_POST['aois'];

    var_dump($aoi);
}

?>