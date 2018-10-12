<?php 
   $fac_id= $_GET['fac_id']; 
?>
<!DOCTYPE html>
<html>  
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Project Form</title>
        <link rel="stylesheet" href="css/nav.css" type="text/css" media="screen">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>
                $(document).ready(function(){
                $("form").submit(function(event){
                      event.preventDefault();
                      var fac_id =<?php echo $fac_id;?>;
                      var sname = $("#sname").val();
                      var proname = $("#proname").val();
                      var scope = $("#scope").val();
                      var software = $("#software").val();
                      var hardware = $("#hardware").val();
                      var submit=$("#submit").val();
                      $(".form-message").load("enter_project.php",{
                          fac_id:fac_id,
                          sname:sname,
                          proname:proname,
                          scope:scope,
                          software:software,
                          hardware:hardware,
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
  <li><a href='project.php'>Project Form</a></li>
  </div>
</ul>
            <form action="enter_project.php" method="post">
                    <h2>Project Information</h2>
                    <br/>
                    <p class="form-message"></p>
                    <br/>
                    <!--<label for="fac_id">Enter Faculty ID:</label>
                    <input type="number" id="fac_id" name="fac_id" >
                    <br />-->
                    <label for="sname">Enter Students Name:</label>
                    <textarea  id="sname" name="sname" rows="5" cols="15"></textarea>
                    <br />
                    <label for="proname">Enter Project Name:</label>
                    <input type="text" id="proname" name="proname">
                    <br />
                    <label for="scope">Details</label>
                    <input type="text" placeholder="Scope" id="scope" name="scope">
                    <input type="text" placeholder="Software Used" id="software" name="software">
                    <input type="text" placeholder="Hardware Used" id="hardware" name="hardware">
                    <br />
                    
                    <br />
                    <button  type="reset" >Reset</button>
                    <button  type="submit" id="submit" name="submit" >Next</button>

              </form>
    </body>
</html>