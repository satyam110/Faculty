<?php
include "includes/db.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty Profiles</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
    
<ul>
  <div id="brand">
  <li><a class="active" href="index.php">DMCE</a></li>
  </div>
  <div class="other" id="right">
  <li><a href='signup.php'>Register</a></li>
  </div>
</ul>
    <h1 align="center">Welcome to Faculty Portal</h1>
<!--<div align="center">
    <a href="ind_per.php" align="center"><button class="btn success" >Permanent Faculty</button></a>
    <a href="ind_ad.php" align="center"><button class="btn warning" >Ad-hoc Faculty</button></a>
</div>-->
<?php 
        $i=0;
        $fetch_data='';
        $query1='select * from fac_info';

        $result=mysqli_query($connection,$query1);
        if(!$result){
            die(mysql_error());
        }
        else{
            while($obj=$result->fetch_object()){
                echo'<div class="l-3 columns" align="center">';
                echo'<img src="'.$obj->image.'" class="th"/><br/>';
                echo'<p class="text-index"><strong>'.$obj->salut.' '.$obj->fname.' '.$obj->mname.' '.$obj->lname.'</strong></p><br>';
                echo'<p class="text-index" align="center"><strong>'.$obj->occupation.'</strong></p><br>';
                echo'<p><a href="profile.php?id='.$obj->fac_id.'"><input type="submit" value="More" class="show-btn"/></a></p>';
                echo'</div>';
                $i++;
            }
        }

?>
    </body>
</html>
  