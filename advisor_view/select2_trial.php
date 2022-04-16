<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <!-- Bootstrap Links -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <!--    &lt;!&ndash; for handle Bar &ndash;&gt;-->
    <script src="https://twitter.github.io/typeahead.js/js/handlebars.js"></script>

    <!--Semantics Ui CDN  -->
    <!--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">-->
    <!--    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>-->

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

    <!--Semantics JSS -->
</head>
<body>
        <div style="border: 1px solid black; padding:100px" class="container">
            <div style="padding: 100px;">
                <div class="row">
                    <div class="col-md-8">
                        <input  class="prompt" type="text" placeholder="Search countries...">
                    </div>
                    <div class="col-md-4">
                        <a  onclick="btn_handler()" class="btn btn-primary">Submit</a>
                    </div>
                </div>
            </div>
        </div>
</body>
<?php 
    require_once '../controller/aoi_controller.php';
    $aois =  select_all_aois_to_json_controller();

    $content1 = json_encode($aois);

    // printf(json_encode($aois));

    // foreach ($aois as $aoi) {
    //     echo $aoi['aoi_name']. "<br>";
    // }

?>

<script>
    var content = [
        {id: 0, text: "Nitin Shah", email:"Nitin@xy"},
        {id: 1, text: "Suhash Shah ",  email:"Suhash@xy"},
        {id: 2, text: "Soumil Shah  ",  email:"Soumil@xy"},
    ];

    var content1 =  <?php echo $content1 ?>;
    


    // how to transform the json into app format
    // var json = [
    //     {
    //         name: "Nitin Shah",
    //         email:"Nitin@xy",
    //     },
    //     {
    //         name: "SSS Shah",
    //         email:"SS@xy",
    //     },

    // ];

    // var vector = [];
    // $.each(json, function(index , value){
    //     var tem =
    //         {
    //             id:index,
    //             text:value.name
    //         };
    //     vector.push(tem);
    // })

    // var final_json = {
    //     "result":vector
    // };


    // console.log(final_json);



     $(".prompt").select2({
         data:content1,
         minimumInputLength: 0,
         width: '100%',
         multiple:true,
         placeholder:"Enter First Name",
         templateResult:formatState

     });

    function formatState (text) {

          str ="";
          str += "<p style='padding-left: 12px;'>"+ text.text+ "</p>";
          var $state = $(str);
          return $state;

    };


    function btn_handler() {
        var data = $('.prompt').select2('data');
        data.forEach(datas => {
            alert(datas.text);
        });
    }

</script>

</html>