<?php 
include 'includes/db.php';

if(isset($_POST['submit'])){
    $fac_id=$_POST['fac_id'];
    $sname=$_POST['sname'];
    $proname=$_POST['proname'];
    $scope=$_POST['scope'];
    $software=$_POST['software'];
    $hardware=$_POST['hardware'];

    $errorEmpty = false;
    
    if(empty($fac_id)||empty($sname)||empty($proname)||empty($scope)||empty($software)||empty($hardware)){?> 
    <script>$('document').ready(function() {$(window).scrollTop(0);});</script>
    <?php 
      echo "<span class='form-error'>Fill in all fields!(If Some data is not available fill with &apos;NA&apos;)</span>";
      $errorEmpty=true;
    }
    
    else{
        $query1="INSERT into project(fac_id,students_name, project_name, project_scope, sw_used, hw_used)VALUES('$fac_id','$sname','$proname','$scope','$software','$hardware')";
        $result= mysqli_query($connection,$query1);
        if($result){
            echo "<span class='form-success'>Project Details Stored !!</span>";
            echo "<a href='workshop.php?fac_id=".$fac_id."'>Proceed Further</a>";
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
    $("#fac_id,#sname,#proname,#scope,#software,#hardware").removeClass("input-error");
   var errorEmpty="<?php echo $errorEmpty; ?>";
    
    if(errorEmpty==true){
       $("#fac_id,#sname,#proname,#scope,#software,#hardware").addClass("input-error");
    }
    if(errorEmpty==false){
        $("#fac_id,#sname,#proname,#scope,#software,#hardware").val("");
    }

</script>