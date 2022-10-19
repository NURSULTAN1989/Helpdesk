function log(){
	email=document.getElementById("login");
	password = document.getElementById("password");
	flag = false;
	$.ajax({
	    type:'POST',
	    url:'login.php',
	    data:{
	      do_login:"do_login",
	      email:email,
	      password:password 
	    },
	    success:function(response) {
	      if(response=="success"){
	        document.location.href = "admin/index.php";
	        email.value=" ";
			password.value=" ";
			document.getElementById("message").innerHTML = " ";
	      }
	      else if(response=="fail"){
	        document.getElementById("message").innerHTML = "<b style = 'color:red;'>Incorrect Login or password!!!</b>";
	      }
	    }
	});
	
}