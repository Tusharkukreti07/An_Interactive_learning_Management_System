<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../exam.css">
    <title> Admin Login Page </title>
</head>
<body>
    <h1>Admin Login </h1>
    <form action ="">
       
        <div class="headingsContainer">
            
        </div>

        <!-- Main container for all inputs -->
        <div class="mainContainer">
            <!-- Email -->
            <label for="BID">Email</label>
            <input type="text" id="BID" placeholder="Enter Email" name="BID" required>

            <br><br>

            <!-- Password -->
            <label for="CID">Password</label>
            <input type="text" id="CID" placeholder="Enter password" name="CID" required>


            <!-- Submit button -->
            <button id="btn" type="submit" on click="validate()">Login </button>


        </div>

    </form>
    <script>
        function validate()
        {
            var adminlogemail=$("#BID").val();
            var adminlogpass=$("#CID").val();
            $.ajax({
                url: "../student/addstudent.php",
                method:"POST",
                data:{
                    adminlogemail:adminlogemail,
                    adminlogpass:adminlogpass;
                },
                success: function(data){
                    if(data==0){
                        
                    }
                }
            });
        }
</body>
</html>