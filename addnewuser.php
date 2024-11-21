<?php
include_once('../dbManage.php');
if(isset($_POST['stusignup']) && isset($_POST['stname']) && isset($_POST['stemail']) 
&& isset($_POST['stpass']))
{
    $stname=$_POST['stname'];
    $stemail=$_POST['stemail'];
    $stpass=$_POST['stpass'];
   $sql="INSERT INTO student(student_name,student_email,student_password) VALUES 
   (' $stname','$stemail','$stpass')";
   if($conn->query($sql) == TRUE)
   {
    echo json_encode("OK");
   }
   else
   {
    echo json_encode("Failed");
   }
}

//student login verification//
if(isset($_POST['checklogemail']) && isset($_POST['stulogemail']) &&
isset($_POST['stulogpass']))
{
    $stulogemail=$_POST['stulogemail'];
    $stulogpass=$_POST['stulogpass'];
    $sql="SELECT student_email,student_password FROM student WHERE student_email= '".$stulogemail."' AND student_password='".$stulogpass."'";
    $result=$conn->query($sql);
    $row=$result->num_rows;
    if($row==1){
        echo "<h1> Welcome User</h>";
    }
    else 
    {
        echo "<h1>Invalid </h1>";
    }
}
?>
<script src="js/jquery.js"></script>
<script src="js/pop.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src= "js/all.min.js" ></script>