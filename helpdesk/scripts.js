function log(){
	var email=$("#login").val();
	var pass =$("#password").val();
	flag = false;
	if (email!="" && pass!=""){	
		$.ajax({
		    type:'POST',
		    url:'login.php',
		    data:{
		      do_login:"login",
		      email:email,
		      password:pass 
		    },
		    success:function(response) {
		      if(response=="success"){
		      	email.value=" ";
				pass.value=" ";
				document.getElementById("message").innerHTML = " ";
		      	window.location.href="admin/index.php";
		      	$('#admin').modal('hide');
		        //document.location.href = "admin/index.php";
		      }
		      else if(response=="fail"){
		        document.getElementById("message").innerHTML = "<b style = 'color:red;'>Incorrect Login or password!!!</b>";
		      }
		      else if(response=="error"){
		        document.getElementById("message").innerHTML = "<b style = 'color:red;'>Error Login or password!!!</b>";
		      }
		    }
		});
	}else{
  		document.getElementById("message").innerHTML = "<b style = 'color:red;'>Please Fill All The Details!!!</b>";
 	}
}