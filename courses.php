<?php
include('./header.php');
include('./dbManage.php');
?>
<style>
   .card {
        margin: 15px;
    }
    .card-img-top {
        height: 200px; /* Set a fixed height for the images */
        object-fit: cover; /* Ensure the images cover the designated space */
    }
    .welcome-message {
        position: absolute;
        top: 30%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 3rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        text-align: center;
        width: 100%;
    }
    .quotes{
        font-style: italic;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white;
        font-size: 3rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        text-align: center;
        width: 100%;
    }
  </style>  
<body>
    <div class="container-fluid bg-dark">
        <div class="row">
            <img src="./images/couursebg.jpeg" alt="courses"
            style="height:500px; width:100%;object-fit:cover;
            box-shadow:10px;"/>
            <div class="welcome-message">
            <h1> Welcome to Learning Hub, the perfect place to start your learning journey.</h1>
           </div>
           <div div class="quotes">
            <h1>“Study hard what interests you the most in the most undisciplined, irreverent and original manner possible.” — Richard Feynman</h1>
           </div>

         </div>
      <div class="container mt-4">
       <div class ="row">
         <?php
        $sql="SELECT * FROM courses LIMIT 3";
        $result=$conn->query($sql);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc()){
                $course_id=$row['course_id'];
                echo '<div class="col-md-4">
                <div class="card"> 
               <img src="'.str_replace('..','.',$row['course_img']).'"class="card-img-top" alt="Animation"/>
                <div class="card-body">
                    <h5 class="card-title">'.$row['course_name'].'</h5>
                    <p class="card-text">'.$row['course_description'].'</p>
                 </div>
                   <div class="card-footer">
                    <p class="card-text d-inline">Price:<small><del>&#8377 ' .$row['course_originalprice'].'</del></small>
                    <span class="font-weight-bolder">&#8377 ' .$row['course_price'].'</span></p>
                    <a class="btn btn-primary text-white font-weight-bolder float-right"
                 href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                 </div>
              </div>
            </div>';
            }
        }
        ?>
        </div>
        </div>
    </div>
<script src="js/jquery.js"></script>
<script src="js/pop.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src= "js/all.min.js" ></script>     
</body>
</html>