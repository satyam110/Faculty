<?php 
   $fac_id= $_GET['fac_id']; 
?>
<!DOCTYPE html>
<html>  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="css/nav.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
      $(document).ready(function(){
        $("form").submit(function(event){
          event.preventDefault();
          var fac_id =<?php echo $fac_id;?>;
          var sr_no =$("#sr_no").val();
          var subname=$("#subname").val();
          var teachlevel=$("#teachlevel").val();
          var teachduration=$("#teachduration").val();
          var submit=$("#submit").val();
            
          $(".form-message").load("enter_subject.php",{
            fac_id:fac_id,
            sr_no:sr_no,
            subname:subname,
            teachlevel:teachlevel,
            teachduration:teachduration,
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
      <li><a href="signup2.php">Academic Form</a></li>
    </div>
    </ul>

      <form action="enter_subject.php" method="post">
        <h2>Subjects Taught Information</h2>
        <br/>
        <p class="form-message"></p>
        <br/>
        <!--<label for="fac_id">Enter Faculty ID:</label>
        <input type="number" id="fac_id" name="fac_id">
        <br />-->
          <label for="sr_no">Sr. No</label>
          <input type="number" id="sr_no" name="sr_no" >
        <br />
          <label for="subname">Subject Name</label>
          <input type="text" id="subname" name="subname" >
        <br />
        <label for="teachlevel">Teching Level</label>
        <select id = "teachlevel" name="teachlevel">
               <option value = "Under-Graduate">Under-Graduate</option>
               <option value = "Post-Graduate">Post-Graduate</option>
        </select>
        <br />
        <label for="teachduration">Teaching Duration</label>
          <input type="text" id="teachduration" name="teachduration" placeholder="e.g. 2011 to 2015" >
        <br />
        <button type="reset" id="reset">Reset</button>
        <button type="submit" id="submit" name="submit">Next</button>
      </form>
      
    </body>
</html>