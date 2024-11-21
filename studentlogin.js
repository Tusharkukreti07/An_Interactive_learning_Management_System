function validate()
{
    var stulogemail=$("#BID").val();
    var stulogpass=$("#CID").val();
    $.ajax({
        url: "student/addnewuser.php",
        method:"POST",
        data:{
            checklogemail:"checklogmail",
            stulogemail:stulogemail,
            stulogpass:stulogpass,
        },
        success: function(data){
            console.log(data);
            }
        })
        console.log("Complete");
    }