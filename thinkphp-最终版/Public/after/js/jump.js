$("#admin_btton").click(function(){
		
		if($("#username").val()==""){
				alert("账号不能为空");
		}
		else if($("#password").val()==""){
				alert("密码不能为空");
		}
		else if($("#username").val()=='admin' && $("#password").val()=='123456' ){
				window.location.href="admin_index.html";
		}
		else if($("#username").val()!='admin' || $("#password").val()!='123456'){
			alert("账号与密码不匹配");
		}
		
	
	});
