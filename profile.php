<?php
include "includes/db.php";

$fac_id= $_GET['id'];

$query1="SELECT * FROM fac_info  where fac_id=".$fac_id;

$result= mysqli_query($connection,$query1);


if($result){
    if($obj=$result->fetch_object()){
        $image= $obj->image;
        $salut=$obj->salut;
        $fname=$obj->fname;
        $mname=$obj->mname;
        $lname=$obj->lname;
        $email=$obj->email;
        $occupation=$obj->occupation;
        $join_dt=$obj->join_dt;
        
      }
    }


 $sql="SELECT * FROM workshop where fac_id=".$fac_id;
     $res= mysqli_query($connection, $sql);

     if($res){
          if($obj=$res->fetch_object()){
           

        $workshop_type= $obj->workshop_type;
        $year=$obj->year;
        $workshop_for=$obj->workshop_for;
        $date=$obj->date;
        $workshop_name=$obj->workshop_name;
        $workshop_level=$obj->workshop_level;
        $duration=$obj->duration;
        $speaker_name=$obj->speaker_name;
        $speaker_designation=$obj->speaker_designation;
        $speaker_institute=$obj->speaker_institute;
       
      }
    }

    $sql1="SELECT * FROM academics where fac_id=".$fac_id;
     $res1= mysqli_query($connection, $sql1);

     if($res1){
          if($obj=$res1->fetch_object()){
           

        $degree= $obj->degree;
        $subject=$obj->subject;
        $thesis_title=$obj->thesis_title;
        $year=$obj->year;
        $institute=$obj->institute;
    
       
      }
    }

    $sql2="SELECT * FROM subjects_taught where fac_id=".$fac_id;
     $res2= mysqli_query($connection, $sql2);

     if($res2){
          if($obj=$res2->fetch_object()){
           

        $sr_no= $obj->sr_no;
        $subject_name=$obj->subject_name;
        $teaching_level=$obj->teaching_level;
        $teaching_duration=$obj->teaching_duration;
        
       
      }
    }

    $sql3="SELECT * FROM project where fac_id=".$fac_id;
     $res3= mysqli_query($connection, $sql3);

     if($res3){
          if($obj=$res3->fetch_object()){
           

        $students_name= $obj->students_name;
        $project_name=$obj->project_name;
        $project_scope=$obj->project_scope;
        $sw_used=$obj->sw_used;
        $hw_used=$obj->hw_used;
        
       
      }
    }

    $sql4="SELECT * FROM publications where fac_id=".$fac_id;
     $res4= mysqli_query($connection, $sql4);

     if($res4){
          if($obj=$res4->fetch_object()){
           

        $nat_con= $obj->nat_con;
        $nat_jour=$obj->nat_jour;
        $in_con=$obj->in_con;
        $in_jour=$obj->in_jour;
        $title=$obj->title;
        $date_of_pub=$obj->date_of_pub;
        $name_of_pub=$obj->name_of_pub;
        $author=$obj->author;
        $co_author=$obj->co_author;
        $impact_factor=$obj->impact_factor;
        $h_index=$obj->h_index;
        $isbn=$obj->isbn;
        $books=$obj->books;
        $monographs=$obj->monographs;
        
        $book_edited=$obj->book_edited;
        $book_with_isbn=$obj->book_with_isbn;
        $publisher=$obj->publisher;
        $citation_index=$obj->citation_index;
        $snip=$obj->snip;
        $sjr=$obj->sjr;
        $articles_or_case=$obj->articles_or_case;
        $patent_filed=$obj->patent_filed;
        $patent_reg=$obj->patent_reg;
       
        $phd_degree_awded=$obj->phd_degree_awded;

       
      }
    }
  
?>

<!DOCTYPE html>
<html>
<head>
    <title>Faculty Profiles</title>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/nav.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/profile.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <script src="js/tab.js"></script>
</head>
<body>
<ul>
  <div id="brand">
  <li><a class="active" href="index.php">DMCE</a></li>
  </div>
  <div class="other" id="right">
  <li><a href='signup1.php'>Register</a></li>
  </div>
</ul>
    <h1><?php echo $salut.' '.$fname.' '.$lname.'&apos;'.'s &nbsp;';?>Profile</h1>

<?php
        echo '<div class="l-12 columns" align="center">';
        echo'<img src="'.$image.'" class="th"/><br/>';
        echo'<p class="text-index"><strong>'.$salut.' '.$fname.' '.$mname.' '.$lname.'</strong></p><br>';
        echo'<p class="text-index">E-mail :'.$email.'</strong></p><br>';
        echo'<p class="text-index">Occupation :'.$occupation.'</strong></p><br>';
        echo'<p class="text-index">Date Joined :'.$join_dt.'</strong></p><br>';
        echo'</div>';
    
    
    

?>

<div class="tab" >
  <button class="tablinks" onclick="openTab(event, 'qual')" >Academics</button>
  <button class="tablinks" onclick="openTab(event, 'subt')" >Subjects Taught</button>
  
  <button class="tablinks" onclick="openTab(event, 'workshop')">Workshops Organized</button>
  <button class="tablinks" onclick="openTab(event, 'publications')">Publications</button>
  <button class="tablinks" onclick="openTab(event, 'project')">Project</button>
 
</div>

<div id="qual" class="tabcontent">
  <h3>Academics</h3>
  <?php 
     
     echo'<p class="text-index">Degree :'.$degree.'</strong></p><br>';
     echo'<p class="text-index">Subjects :'.$subject.'</strong></p><br>';
     echo'<p class="text-index">Thesis Title :'.$thesis_title.'</strong></p><br>';
     echo'<p class="text-index">Year :'.$year.'</strong></p><br>';
     echo'<p class="text-index">Institute :'.$institute.'</strong></p><br>';

   ?>
  
</div>

<div id="workshop" class="tabcontent">
  <h3>Workshops Organized</h3>


<?php
     echo'<p class="text-index">Workshop Type :'.$workshop_type.'</strong></p><br>';
     echo'<p class="text-index">Year :'.$year.'</strong></p><br>';
     echo'<p class="text-index">Workshop For :'.$workshop_for.'</strong></p><br>';
     echo'<p class="text-index">Date :'.$date.'</strong></p><br>';
     echo'<p class="text-index">Workshop Name :'.$workshop_name.'</strong></p><br>';
     echo'<p class="text-index">Workshop Level :'.$workshop_level.'</strong></p><br>';
     echo'<p class="text-index">Duration :'.$duration.'</strong></p><br>';
     echo'<p class="text-index">Speaker Name :'.$speaker_name.'</strong></p><br>';
     echo'<p class="text-index">Speaker Designation :'.$speaker_designation.'</strong></p><br>';
     echo'<p class="text-index">Speaker Institute :'.$speaker_institute.'</strong></p><br>';
     
   ?>
</div>

<div id="publication" class="tabcontent">
  <h3>Publications</h3>
</div>

<div id="project" class="tabcontent">
  <h3>Project</h3>
  <?php
     echo'<p class="text-index">Student Name :'.$students_name.'</strong></p><br>';
     echo'<p class="text-index">Project Name :'.$project_name.'</strong></p><br>';
     echo'<p class="text-index">Project Scope :'.$project_scope.'</strong></p><br>';
     echo'<p class="text-index">Software :'.$sw_used.'</strong></p><br>';
     echo'<p class="text-index">Hardware :'.$hw_used.'</strong></p><br>';
     
   ?>

</div>


<div id="subt" class="tabcontent">
  <h3>Subjects Taught</h3>
  <?php 
     
     echo'<p class="text-index">Sr NO :'.$sr_no.'</strong></p><br>';
     echo'<p class="text-index">Subject Name :'.$subject_name.'</strong></p><br>';
     echo'<p class="text-index">Level :'.$teaching_level.'</strong></p><br>';
     echo'<p class="text-index">Duration :'.$teaching_duration.'</strong></p><br>';
     
   ?>
  
</div>

<div id="publications" class="tabcontent">
  <h3>Publication</h3>
  <?php 
     
     echo'<p class="text-index">National Conference :'.$nat_con.'</strong></p><br>';
     echo'<p class="text-index">National Journal :'.$nat_jour.'</strong></p><br>';
     echo'<p class="text-index">International Conference :'.$in_con.'</strong></p><br>';
     echo'<p class="text-index">International Journal :'.$in_jour.'</strong></p><br>';
     echo'<p class="text-index">Title :'.$title.'</strong></p><br>';
     echo'<p class="text-index">Date of Pub :'.$date_of_pub.'</strong></p><br>';
     echo'<p class="text-index">Name of Pub :'.$name_of_pub.'</strong></p><br>';
     echo'<p class="text-index">Author :'.$author.'</strong></p><br>';
     echo'<p class="text-index">Co-Author :'.$co_author.'</strong></p><br>';
     echo'<p class="text-index">Impact Factor :'.$impact_factor.'</strong></p><br>';
     echo'<p class="text-index">H Index :'.$h_index.'</strong></p><br>';
     echo'<p class="text-index">ISBN :'.$isbn.'</strong></p><br>';
     echo'<p class="text-index">Books  :'.$books.'</strong></p><br>';
     echo'<p class="text-index">Monographs :'.$monographs.'</strong></p><br>';
    
   ?>
  
</div>


   </body>
</html>