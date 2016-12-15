 $("#save").click(function(){
   
    if($("#admin-password").val()==''){
        alert("密码不能为空");
    }
    else if($("#admin-repassword").val()==''){
        alert("请再次确认密码");
    }
    else if($("#admin-password").val()!=$("#admin-repassword").val()){
        alert("两次密码不相同");
    }
    
    else if($("#admin-password").val()==$("#admin-repassword").val()){
        alert("密码修改成功");
        window.location.href="admin_all.html";
    }
    
});