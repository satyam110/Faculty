<?php 
include 'includes/db.php';

if(isset($_POST['submit'])){
    $fac_id=$_POST['fac_id'];
    $degree=$_POST['degree'];
    $course=$_POST['course'];
    $thesis=$_POST['thesis'];
    $year=$_POST['year'];
    $institute=$_POST['institute'];

    $errorEmpty = false;
    
    if(empty($fac_id)||empty($course)||empty($thesis)||empty($year)||empty($institute)){?> 
    <script>$('document').ready(function() {$(window).scrollTop(0);});</script>
    <?php 
      echo "<span class='form-error'>Fill in all fields!</span>";
      $errorEmpty=true;
    }
    
    else{
        $query1="INSERT into academics(fac_id,degree,subject,thesis_title,year,institute)VALUES('$fac_id','$degree','$course','$thesis','$year','$institute')";
        $result= mysqli_query($connection,$query1);
        if($result){
            echo "<span class='form-success'>Academics Details Stored !!</span>";
            echo "<a href='subtaught.php?fac_id=".$fac_id."'>Proceed Further</a>";
        ?> <script>$('document').ready(function() {$(window).scrollTop(0);});</script>
  
<?php   }
        else{
            die("Query failed". mysqli_error($connection));
        }
    
    
    }
    
}
else{
  echo "There was an error!";
}

?>

<script>
    $("#fac_id,#course,#thesis,#year,#institute").removeClass("input-error");
   var errorEmpty="<?php echo $errorEmpty; ?>";
    
    if(errorEmpty==true){
       $("#fac_id,#course,#thesis,#year,#institute").addClass("input-error");
    }
    if(errorEmpty==false){
        $("#fac_id,#course,#thesis,#year,#institute").val("");
    }

</script>