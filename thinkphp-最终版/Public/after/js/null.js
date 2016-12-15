/**
 * Created by double on 2016/11/22.
 */
var time=new Date();
var time1=time.getFullYear()+"-"+time.getMonth()+"-"+time.getDate();
$("#admin-time").val(time1);
$("#save").click(function(){
    if($("#admin-username").val()==''){
        alert("用户名不能为空");
    }
    else if($("#admin-password").val()==''){
        alert("密码不能为空");
    }
    else if($("#admin-password").val()!=$("#admin-repassword").val()){
        alert("密码不相同");
    }
    
    else if($("#admin-phone").val()!='' && $("#admin-phone").val().length!=11){
        alert("手机号长度不对");
    }
    else if($("#admin-email").val()==''){
        alert("电子邮件不能为空");
    }
    else if($("#admin-username").val()!='' && $("#admin-password").val()!='' && $("#admin-password").val()==$("#admin-repassword").val() && $("#admin-email").val()!=''){
        alert("成功");
        window.location.href="admin_all.html";
    }
});
$("#cancle").click(function(){
     window.history.go(0);
});