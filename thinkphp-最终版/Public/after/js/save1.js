
    $("#save").click(function(){
    if($("#newsname").val()==''){
      alert("新闻标题不能为空");
    }
    else if($("#kemuname").val()==''){
      alert("科目不能为空");
    }
    else if($("#newsname").val()!='' && $("#kemuname").val()!='' ){
        alert("成功");
        window.location.href="news_all.html";
    }
  });
    $("#cancle").click(function(){
     window.history.go(0);
});
