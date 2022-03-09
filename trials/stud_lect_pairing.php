<?php 
    // Takes raw data from the request
    $lect_json = file_get_contents('./lecturer.json');

    // Converts it into a PHP object
    $data_lect = json_decode($lect_json);

    // Takes raw data from the request
    $stud_json = file_get_contents('./student.json');

    // Converts it into a PHP object
    $data_stud = json_decode($stud_json);


    // print_r($data_lect);
    // echo json_encode($data_lect[0]->interest);
    
    // echo json_encode($data_stud);
    // echo json_encode($data_stud->name);

    $lect_count = 0;
    $lect_array = [];

    foreach ($data_lect as $lect) {
        if ($data_stud->course == $lect->course) {
            for ($i=0; $i < count($data_stud->interest); $i++) { 
                for ($j=0; $j < count($lect->interest); $j++) { 
                    if ($data_stud->interest[$i] == $lect->interest[$j]) {
                        $lect_count ++;
                        echo "1 <br>";
                    }else{
                        echo "0 <br>";
                    }
                }
            }
        }
        echo "Similarity: " . $lect_count . "<br> <br>";
        array_push($lect_array, $lect_count);

        $lect_count = 0;
    }

    print_r($lect_array);
    

    
?>