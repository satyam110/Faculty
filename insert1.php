<?php 
include 'includes/db.php';

if(isset($_POST['f1_submit'])){
     $fac_id=$_POST['fac_id'];
     $salutation=$_POST['salutation'];
     $fname=$_POST['fname'];
     $mname=$_POST['mname'];
     $lname=$_POST['lname'];
     $email=$_POST['email'];
     $occupation=$_POST['occupation'];
     $gender=$_POST['gender'];
     $password=$_POST['password'];
     $con_pwd=$_POST['con_pwd'];
     $startdate=$_POST['startdate'];
     //$dp=$_POST['dp'];
    
     $errorEmpty = false;
     $errorEmail = false;
     $errorPassword = false;
    
    
    if(empty($fac_id)empty($fname)||empty($mname)||empty($lname)||empty($email)||empty($occupation)||empty($password)||empty($con_pwd)||empty($startdate)){
        ?> 
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
<?php
      echo "<span class='form-error'> Fill in all fields!</span>";
      $errorEmpty = true;
  }
     elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){?> 
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
<?php
      echo "<span class='form-error'> Write a valid e-mail address!</span>";
      $errorEmail = true;
  }
    elseif($password != $con_pwd){?> 
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
<?php
        echo "<span class='form-error'>Passwords does not match";
        $errorPassword = true;
    }
    
    else{
        /*$image_dir = "images";
        $male= "images/1.jpg";
        $female= "images/2.jpg";
        $image= "";
        
        $image_name = $_FILES['dp']['name'];
        $image_type = $_FILES['dp']['type'];
        $image_tmp = $_FILES['dp']['tmp_name'];
    
       $extension = substr($image_name, strpos($image_name,'.')+1);
        if(!$extension=="jpg"){
            die("Image Format Should Be JPG");
        }
        
        $new_name = $fac_id.".jpg";
        
        if(!move_uploaded_file($image_tmp, $image_dir."/".$new_name)){
            die("Cannot Upload Image");
        }else{
            $image = $image_dir."/".$new_name
        }*/
        
        $query="INSERT INTO fac_info (fac_id,salut,fname,mname,lname,email, occupation,pwd,role,status,gender,join_dt,image) VALUES ('$fac_id', '$salutation','$fname','$mname','$lname','$email','$occupation','$password',NULL,NULL,'$gender','$startdate',NULL)";
        $result=mysqli_query($connection,$query);
        
        if($result1){
         echo "<span class='form-success'>Personal Details Stored !!</span>";
         echo "<a href='pub_form.php'>Proceed Further</a>";?>     
<script>$('document').ready(function() {$(window).scrollTop(0);});</script>
  <?php   }
      else{
          die("query Failed" . mysqli_error($connection));        
      }
    }
}
else{
    echo "There was an error!";
}
?>
<script>
 
  $("#fac_id,#salutation,#user-fname,#user-mname,#user-lname,#user-email,#user-occupation,#user-gender,#user-password,#confirm-password,#user-startdate").removeClass("input-error");
  
var errorEmpty="<?php echo $errorEmpty; ?>";
var errorEmail="<?php echo $errorEmail; ?>";
var errorPassword="<?php echo $errorPassword; ?>"

  if(errorEmpty == true){
    $("#fac_id,#salutation,#user-fname,#user-mname,#user-lname,#user-email,#user-occupation,#user-password,#confirm-password,#user-startdate").addClass("input-error");
  }

  if(errorEmail==true){
        $("#user-email").addClass("input-error");
    }
 
  if(errorPassword==true){
        $("#user-password,#confirm-password").addClass("input-error");
    }
    
    
    
  if(errorEmpty == false){
    $("#fac_id,#salutation,#user-fname,#user-mname,#user-lname,#user-email,#user-occupation,#user-gender,#user-password,#confirm-password,#user-startdate").val("");
  }
</script>