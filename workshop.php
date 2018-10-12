<?php 
    $fac_id= $_GET['fac_id']; 
?>
<!DOCTYPE html>
<html>  
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workshop Form</title>
    <link rel="stylesheet" href="css/nav.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script >
          $(document).ready(function(){
                $("form").submit(function(event){
                      event.preventDefault();
                      var fac_id =<?php echo $fac_id;?>;
                      var year = $("#year").val();
                      var type = $("#type").val();
                      var ws_for = $("#ws-for").val();
                      var datecon = $("#datecon").val();
                      var wrkshp_name = $("#wrkshp_name").val();
                      var level = $("#level").val();
                      var duration = $("#duration").val();
                      var spkr_name = $("#spkr_name").val();
                      var spkr_des = $("#spkr_des").val();
                      var spkr_inst = $("#spkr_inst").val();
                      var nop = $("#nop").val();
                      var submit=$("#submit").val();
                      $(".form-message").load("enter_ws_det.php",{
                          fac_id:fac_id,
                          year:year,
                          type:type,
                          ws_for:ws_for,
                          datecon:datecon,
                          wrkshp_name:wrkshp_name,
                          level:level,
                          duration:duration,
                          spkr_name:spkr_name,
                          spkr_des:spkr_des,
                          spkr_inst:spkr_inst,
                          nop:nop,
                          submit:submit
                      });

                });
          });
        </script>
    </head>
    <body>
<ul>
  <div id="brand">
  <li><a class="active" href="index.php">DMCE</a></li>
  </div>
  <div class="other" id="right">
  <li><a href='workshop.php'>Workshop</a></li>
  </div>
</ul>

                <form action="enter_ws_det.php" method="post">
                    <h2>Workshop Information</h2>
                    <br/>
                    <p class="form-message"></p>
                    <br/>
                   <!-- <label for="fac_id">Enter Faculty ID:</label>
                    <input type="number" id="fac_id" name="fac_id" >
                    <br />-->
                    <label for="year">Year:</label>
                      <input type="number" id="year" name="year" >
                    <br />
                    <label for="type">Type:</label>
                      <select name="type" id="type">
                          <option value="Seminar" >Seminar</option>
                          <option value="Conference" >Conference</option>
                          <option value="Symposium" >Symposium</option>
                          <option value="Workshop" >Workshop</option>
                      </select>
                      
                    <br />
                       <label for="ws-for">For:</label>
                      <select name="ws_for" id="ws-for">
                          <option value="student" >Student</option>
                          <option value="teacher" >Teacher</option>
                      </select>
                      
                    <br />
                      <label for="datecon">Date Conducted:</label>
                      <input type="date" name="datecon" id="datecon">
                    <br />
                      <label for="wrkshp_name">Enter Workshop Name:</label>
                    <input type="text" id="wrkshp_name" name="wrkshp_name" >
                    <br />
                    <label for="level">Level of Workshop:</label>
                      <select name="level" id="level">
                          <option value="national" >National</option>
                          <option value="inter">Inter College</option>
                          <option value="university" >University</option>
                          <option value="state" >State</option>
                          <option value="other">Other</option>
                      </select>
                      
                    <br />
                    <label>Enter Duration (in hours):</label>
                    <input type="text" name="duration" id="duration">
                    <br />
                    <label for="spkr_name">Speaker Details</label>
                    <input type="text" placeholder="Name" id="spkr_name" name="spkr_name" >
                    <input type="text" placeholder="Designation" id="spkr_des" name="spkr_des" >
                    <input type="text" placeholder="Institute" id="spkr_inst" name="spkr_inst" >
                    <br />
                    <label for="nop">Number of Participants:</label>
                    <input type="number" id="nop" name="nop">
                    <br />
                    <button  type="reset" >Reset</button>
                    <button  type="submit" id="submit" name="submit" >Next</button>

                </form>
    </body>
</html>