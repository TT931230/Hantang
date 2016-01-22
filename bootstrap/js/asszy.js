/**
 * Created by Administrator on 2016/1/21 0021.
 */
function getfooter(){
    console.log("get footer");
    $.ajax({
        type:"post",
        url:"Home/getfooter",
        success: function(result) {
            //alert(result);
            $("#mask .popContent").html(result);
        },
        error: function() {
            $("#mask .popContent").html('error');
            alert("ajax error");
        }
    });
    $("#mask").css("display","block");
}


$(document).ready(function(){

    var timer=null;
    $("#to_top").hover(function(){
        $("#top_str").css("display","block");
    }).mouseleave(function(){
        $("#top_str").css("display","none");
    }).click(function(){

        timer=setInterval(function(){
            var osTop=document.documentElement.scrollTop||document.body.scrollTop;
            document.documentElement.scrollTop=document.body.scrollTop-=100;
            if(osTop==0){
                clearInterval(timer);
            }
        },30);

    });

    $("#show_info").hover(function(){
        $("#info_str").css("display","block");
    }).mouseleave(function(){
        $("#info_str").css("display","none");
    }).click(function(){
        getfooter();
        console.log("css");

    });

    $("#mask .closePop").click(function(){
        $("#mask").css("display","none");
    });

});


