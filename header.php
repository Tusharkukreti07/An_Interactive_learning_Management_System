<?php
include('./dbManage.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
     <link rel="stylesheet" href="css/bootstrap.min.css">
     <link rel="stylesheet" href="css/all.min.css">
     <style>
body 
{
  font-family:sans-serif; 
  background: -webkit-linear-gradient(to right, #155799, #159957);  
  background:url('wallpaperflare.com_wallpaper.jpg');
  background-repeat: no-repeat;
  background-size: cover;
  color:whitesmoke;
}
form{
    width:35rem;
    margin: auto;
    color:rgba(245, 245, 245, 0.671);
    backdrop-filter: blur(16px) saturate(180%);
    -webkit-backdrop-filter: blur(16px) saturate(180%);
    background-color: rgba(11, 15, 13, 0.582);
    border-radius: 12px;
    border: 1px solid rgba(255, 255, 255, 0.125);
    padding: 20px 25px;
}
        .st-content {
    text-align: center;
    margin-top: 50px;
}

.my-content {
    font-family: 'Brush Script MT', cursive;
    font-size: 7rem;
    margin-bottom: 20px;
    color:black;
}

.form-container h2 {
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.navbar-brand {
    font-family:sans-serif;
    font-size: 3em;
    font-weight: bold;
    color: #fff;
}

 .navlink:hover {
    font-size: 2rem;
    margin-left: 30px;
    color: green;
    border-radius: 25px;
        padding: 10px 20px;
        font-weight: bold;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
}
.custom-button {
        background: linear-gradient(45deg, #1e90ff, #00bfff);
        color: white;
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        font-size: 16px;
        font-weight: bold;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: all 0.3s ease;
    }

    .custom-button:hover {
        background: linear-gradient(45deg, #00bfff, #1e90ff);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        transform: translateY(-2px);
    }

    .custom-button:focus {
        outline: none;
    }

        .admin-login-btn:focus {
            outline: none;
        }
        .admin-login-btn {
            position: absolute;
            top: 10px;
            right: 10px;
        }
</style>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark" style="--bs-navbar-padding-x: 0">
  <a class="navbar-brand" href="index.php">Learning Hub</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <ul class="navbar-nav">
      <li class ='nav-item'><a href ="" class="navlink"  style="padding: 0px 15px;"><b>Home</b>  </a></li>
      <li class ='nav-item'><a href="exam.html" class="navlink"  style="padding: 0px 15px;"><b>Login</b>  </a></li>
      <li class ='nav-item'><a href ="courses.php" class="navlink"  style="padding: 0px 15px;"><b> Courses</b> </a></li> 
      <li class ='nav-item'><a href ="" class="navlink"  style="padding: 0px 15px;"><b>Sign up </b>  </a></li>
    </ul>
  </div>
</nav>