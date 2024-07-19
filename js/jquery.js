$(document).ready(function () {


    
  $("#btn").click(function (e) { 
    e.preventDefault();

    let nm=$("#name").val()
    let em=$("#email").val()
    let pm=$("#password").val()

    mydata={name:nm,email:em,password:pm}
    console.log(mydata);

    $.ajax({
        url: "insert.php",
        method: "POST",
        data: JSON.stringify(mydata),
        success: function (data) {

            alert(data)
            msg = "<div class='alert alert-dark mt-3'>" + data + "</div>";
            $('#msg').html(data);
            $('#myform')[0].reset();

       

        
            
        }
    });

    
  });
    
});