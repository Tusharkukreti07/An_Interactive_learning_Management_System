<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .navbar {
            background-color: #225470 !important;
        }
        .navbar-brand {
            font-size: 1.5rem;
        }
        .sidebar {
            background-color: #f8f9fa;
            height: 100vh;
        }
        .nav-link {
            color: #333;
        }
        .nav-link:hover {
            background-color: #e9ecef;
            border-radius: 4px;
        }
        .table thead {
            background-color: #343a40;
            color: white;
        }
        .table tbody tr:hover {
            background-color: #f1f1f1;
        }
        .table .btn {
            padding: 0.375rem 0.75rem;
        }
        .bg-dark {
            background-color: #343a40 !important;
        }
        .bg-dark.text-white.p-2 {
            margin-bottom: 20px;
        }
        .text-center p {
            font-size: 1.2rem;
        }
        .container-fluid {
            margin-top: 40px;
        }
        .table {
            margin-top: 20px;
        }
        .welcome-heading{
            text-align:center;
            font-size: 2.5rem;
            padding-top: 50px; /* Added padding for spacing */
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="welcome-heading my-4">
        <h1>Welcome To Dashboard</h1>
    </div>
    <nav class="navbar navbar-dark fixed-top p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admdash.php">Learning Hub<small class="text-white"> Admin</small></a>
    </nav>
    <!--Side Bar -->
    <div class="container-fluid mb-5">
        <div class="row">
            <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="admdash.php">
                                <i class="fas fa-tachometer-alt"></i> Dashboard
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="admincourse.php">
                                <i class="fas fa-book"></i> Courses
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-user-graduate"></i> Students
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">
                                <i class="fas fa-money-check-alt"></i> Payment Status
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
<script src="../js/jquery.js"></script>
    <script src="../js/pop.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src= "../js/all.min.js" ></script>
