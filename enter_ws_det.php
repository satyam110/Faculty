<?php 
include 'includes/db.php';

if(isset($_POST['submit'])){
    $fac_id=$_POST['fac_id'];
    $year=$_POST['year'];
    $type=$_POST['type'];
    $ws_for=$_POST['ws_for'];
    $datecon=$_POST['datecon'];
    $wrkshp_name=$_POST['wrkshp_name'];
    $level=$_POST['level'];
    $duration=$_POST['duration'];
    $spkr_name=$_POST['spkr_name'];
    $spkr_des=$_POST['spkr_des'];
    $spkr_inst=$_POST['spkr_inst'];
    $nop=$_POST['nop'];
    
    $errorEmpty = false;
    
     if(empty($fac_id)||empty($year)||empty($datecon)||empty($wrkshp_name)||empty($duration)||empty($spkr_name)||empty($spkr_des)||empty($spkr_inst)||empty($nop)){?> 
    <script>$('document').ready(function() {$(window).scrollTop(0);});</script>
    <?php 
      echo "<span class='form-error'>Fill in all fields!(If Some data is not available fill with &apos;NA&apos;.)</span>";
      $errorEmpty=true;
    }
    
    else{
        $query1="INSERT into workshop(fac_id, year, workshop_type, workshop_for, date, workshop_name, workshop_level, duration, speaker_name, speaker_designation, speaker_institute, participants_no)VALUES('$fac_id','$year','$type','$ws_for','$datecon','$wrkshp_name','$level','$duration','$spkr_name','$spkr_des','$spkr_inst','$nop')";
        $result= mysqli_query($connection,$query1);
        if($result){
            echo "<span class='form-success'>Congratualtions You are now a Registered Faculty !!</span>";
            echo "<a href='index.php'>Proceed to Portal</a>";
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
    $("#fac_id,#year,#type,#ws-for,#datecon,#wrkshp_name,#level,#duration,#spkr_name,#spkr_des,#spkr_inst,#nop").removeClass("input-error");
   var errorEmpty="<?php echo $errorEmpty; ?>";
    
    if(errorEmpty==true){
       $("#fac_id,#year,#ws-for,#datecon,#wrkshp_name,#duration,#spkr_name,#spkr_des,#spkr_inst,#nop").addClass("input-error");
    }
    if(errorEmpty==false){
        $("#fac_id,#year,#type,#ws-for,#datecon,#wrkshp_name,#level,#duration,#spkr_name,#spkr_des,#spkr_inst,#nop").val("");
    }

</script>