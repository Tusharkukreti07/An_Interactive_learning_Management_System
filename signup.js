function addstudent()
{
    console.log("Hello");
    var stname=$("#name").val();
    var stemail=$("#email").val();
    var stpass=$("#password").val();
    $.ajax({
        url:'student/addnewuser.php',
        method: 'POST',
        dataType:'json',
        data:{
            stusignup:"stusignup",
            stname : stname,
            stemail: stemail,
            stpass:stpass,
        },
        success:function(data){
        console.log(data)
         if(data=="OK"){
            $('#success').html("<span class='alert alert-success'>Registration Successful</span>");
         } 
        }

    })
}