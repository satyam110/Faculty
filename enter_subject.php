<?php 
include 'includes/db.php';

if(isset($_POST['submit'])){
    $fac_id=$_POST['fac_id'];
    $sr_no=$_POST['sr_no'];
    $subname=$_POST['subname'];
    $teachlevel=$_POST['teachlevel'];
    $teachduration=$_POST['teachduration'];

    $errorEmpty = false;
    
    if(empty($fac_id)||empty($sr_no)||empty($subname)||empty($teachduration)){?> 
    <script>$('document').ready(function() {$(window).scrollTop(0);});</script>
    <?php 
      echo "<span class='form-error'>Fill in all fields!</span>";
      $errorEmpty=true;
    }
    
    else{
        $query1="INSERT into subjects_taught(fac_id,sr_no,subject_name,teaching_level,teaching_duration)VALUES('$fac_id','$sr_no','$subname','$teachlevel','$teachduration')";
        $result= mysqli_query($connection,$query1);
        if($result){
            echo "<span class='form-success'>Subjects Details Stored !!</span>";
            echo "<a href='pub_form.php?fac_id=".$fac_id."'>Proceed Further</a>";
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
    $("#fac_id,#sr_no,#subname,#teachduration").removeClass("input-error");
   var errorEmpty="<?php echo $errorEmpty; ?>";
    
    if(errorEmpty==true){
       $("#fac_id,#sr_no,#subname,#teachduration").addClass("input-error");
    }
    if(errorEmpty==false){
        $("#fac_id,#sr_no,#subname,#teachduration").val("");
    }

</script>