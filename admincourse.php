<?php
include('adminheader.php');
include('../dbManage.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/custom.css">
    <style>
        .navbar {
            background-color: #225470 !important;
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
        .bg-dark.text-white.p-2 {
            margin-bottom: 20px;
        }
        .table {
            margin-top: 20px;
        }
        .btn {
            margin-right: 10px;
        }
        .fa-pen {
            color: #fff;
        }
        .fa-trash-alt {
            color: #fff;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-secondary {
            background-color: #6c757d;
            border-color: #6c757d;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger.box {
            position: fixed;
            bottom: 20px;
            right: 20px;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            text-align: center;
            padding-top: 10px;
        }
        .fa-plus {
            font-size: 24px;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="col-sm-9 mt-5">
        <!--Table-->
       <p class="bg-dark text-white p-2">List of Courses</p>
       <?php
       $sql = "SELECT * FROM courses";
       $result=$conn->query($sql);
       if($result->num_rows>0 ){
        ?>
       <table class="table table-striped table-hover">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Course ID</th>
                <th scope="col">Name</th>
                <th scope="col">Author</th>
                <th scope="col">Action</th>
             </tr>
        </thead>
        <tbody>
        <?php while($row=$result->fetch_assoc()){ 
           echo '<tr>';
              
             echo '<th scope="row">'.$row['course_id'].'</th>';
             echo  '<td>'.$row['course_name'].'</td>';
             echo  '<td>'.$row['author'].'</td>';
             echo   '<td>';
             echo   '<button type="submit"
                    class="btn btn-info"
                    name="view"
                    value="view">
                    <i class="fas fa-pen"></i>
                </button>
                <button type="submit"
                    class="btn btn-secondary"
                    name="Delete"
                    value="Delete">
                    <i class="fas fa-trash-alt"></i>
               </button>';
             echo'</td>';
             echo'</tr>';
     } ?>
    </tbody>  
    </table>
    <?php } ?>
    </div>
    <div>
        <a class="btn btn-danger box" href="addcourse.php">
            <i class="fas fa-plus fa-2x"></i></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="js/all.min.js"></script>
</body>
</html>

