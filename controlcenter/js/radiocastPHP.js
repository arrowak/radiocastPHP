$(document).ready(function(){
	
	$("#login").click(function(){
       
       var txtLoginId = $("#txtLoginId").val();
       var txtPassword = $("#txtPassowrd").val();
       if(txtLoginId == "" || txtPassword == ""){
       		$("#alertlogin").attr("class","alert alert-danger");
       		$("#alertlogin").html("<strong>Oops! </strong>Username or password is not right. Try again.");
            $("#alertlogin").css("display","block");
            $("#alertlogin").hide();
            $("#alertlogin").fadeIn(800);
       	}
       	else{
       		
       $.post("loginuser.php",{txtloginid:txtLoginId,txtpassword:txtPassword},
       function(data){
          if(data == "1"){
            window.location = "rj.php";
           }
           else
               {
            $("#alertlogin").attr("class","alert alert-danger");
            $("#alertlogin").html("<strong>Oops! </strong>Username or password is not right. Try again.");
            $("#alertlogin").css("display","block");
            $("#alertlogin").hide();
            $("#alertlogin").fadeIn(800);
               }
       });
    }
        return false;
   });
   
   
   $("#btnSignUp").click(function(){
       
       var txtFullname = $("#txtFullname").val();
       var txtUsername = $("#txtUsername").val();
       var txtPassword = $("#txtPassowrd").val();
       if(txtFullname == "" || txtPassword == "" || txtUsername == "" ){
       		$("#alertsignup").attr("class","alert alert-danger");
       		$("#alertsignup").html("<strong>Oops! </strong>You did not fill-in all details.");
            $("#alertsignup").css("display","block");
            $("#alertsignup").hide();
            $("#alertsignup").fadeIn(800);
       	}
       	else{
       		
       $.post("registerUser.php",{txtFullname:txtFullname,txtUsername:txtUsername,txtPassword:txtPassword},
       function(data){
          if(data == 1){
            window.location = "rj.php";
           }
           else if(data == 2) {
				$("#alertsignup").attr("class","alert alert-danger");
            $("#alertsignup").html("<strong>Oops! </strong>Something is not right. Try again.");
            $("#alertsignup").css("display","block");
            $("#alertsignup").hide();
            $("#alertsignup").fadeIn(800);          	
           	}
           else
               {
            $("#alertsignup").attr("class","alert alert-danger");
            $("#alertsignup").html("<strong>Oops! </strong>Something is not right. Try again.");
            $("#alertsignup").css("display","block");
            $("#alertsignup").hide();
            $("#alertsignup").fadeIn(800);
               }
       });
    }
        return false;
   });
   

	});

