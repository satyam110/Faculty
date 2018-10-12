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
          var degree =$("#degree").val();
          var course=$("#course").val();
          var thesis=$("#thesis").val();
          var year=$("#year").val();
          var institute=$("#institute").val();
          var submit=$("#submit").val();
            
          $(".form-message").load("enter_academics.php",{
            fac_id:fac_id,
            degree:degree,
            course:course,
            thesis:thesis,
            year:year,
            institute:institute,
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

      <form action="enter_academics.php" method="post">
        <h2>Academics Information</h2>
        <br/>
        <p class="form-message"></p>
        <br/>
        <!--<label for="fac_id">Enter Faculty ID:</label>
        <input type="number" id="fac_id" name="fac_id">
        <br />-->
        <label for="degree">Education:</label>
            <select id = "degree" name="degree">
               <option value = "Ph.D.">Ph.D.</option>
               <option value = "M.E.">M.E.</option>
               <option value = "B.E.">B.E</option>
               <option value = "Diploma">Diploma</option>
            </select>
        <br/>
          <label for="course">Stream of the Course</label>
          <input type="text" id="course" name="course" >
        <br />
        <span id="tiThesis">
        <label for="thesis">Thesis Title</label>
          <input type="text" id="thesis" name="thesis" >
        <br />
       </span>
        <label for="year">Year</label>
          <input type="number" id="year" name="year" >
        <br />
        <label for="institute">Institute Name</label>
          <input type="text" id="institute" name="institute" >
        <br />
        <button type="reset" id="reset">Reset</button>
        <button type="submit" id="submit" name="submit">Next</button>
      </form>
      
    </body>
</html>