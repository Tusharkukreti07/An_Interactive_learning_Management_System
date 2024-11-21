<?php
include('./adminheader.php');
include('../dbManage.php');

if(isset($_REQUEST['coursesubmit']))
{
    if(($_REQUEST['course_name']==""))
    {
        $message='<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill Name </div>';
    }
    else
    {
        $course_name=$_REQUEST['course_name'];
        $course_desc=$_REQUEST['course_desc'];
        $course_author=$_REQUEST['course_author'];
        $course_duration=$_REQUEST['course_duration'];
        $course_price=$_REQUEST['course_price'];
        $course_ogprice=$_REQUEST['course_ogprice'];
        $course_image=$_FILES['course_img']['name'];
        $sql = "INSERT INTO courses (course_name, course_description, author, course_duration, course_price, course_originalprice, course_img) 
VALUES ('$course_name', '$course_desc', '$course_author', '$course_duration', '$course_price', '$course_ogprice', '$course_image')";
        if($conn->query($sql)==TRUE){
            $message='<div class="alert alert-success col-sm-6 ml-5 mt-2">Fill Name </div>';
        }
        else
        {
            $message='<div class="alert alert-danger col-sm-6 ml-5 mt-2">Fill Name </div>';
        }
    }
}
?>
<div class="col-sm-6 mt-5 mx-3 jumbotron">
        <h3 class="text-center">Add New Course</h3>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="course_name" >Course Name</label>
                <input type="text" class="form-control" id="course_name" name="course_name">
            </div>
            <div class="form-group">
                <label for="course_desc">Course Description</label>
                <textarea class="form-control" id="course_desc" name="course_desc" rows="2"></textarea>
            </div>
            <div class="form-group">
                <label for="course_author">Author</label>
                <input type="text" class="form-control" id="course_author" name="course_author">
            </div>
            <div class="form-group">
                <label for="course_duration">Course Duration</label>
                <input type="text" class="form-control" id="course_duration" name="course_duration">
            </div>
            <div class="form-group">
                <label for="course_original_price">Course Original Price</label>
                <input type="text" class="form-control" id="course_original_price" name="course_ogprice">
            </div>
            <div class="form-group">
                <label for="course_selling_price">Course Selling Price</label>
                <input type="text" class="form-control" id="course_selling_price" name="course_price">
            </div>
            <div class="form-group">
                <label for="course_image">Course Image</label>
                <input type="file" class="form-control" id="course_image" name="course_img">
            </div>
            <button type="submit" class="btn btn-primary" name="coursesubmit">Add Course</button>
            <a href="admincourse.php" class="btn btn-secondary">Close</a>
            <?php if(isset($message)){
                echo $msg;
            }?>
        </form>
    </div>
