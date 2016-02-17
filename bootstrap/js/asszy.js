/**
 * Created by Administrator on 2016/1/21 0021.
 */
function getfooter(){
    var footer_flow=document.getElementById("footer_flow");
    var sHeight=document.documentElement.scrollHeight;
    var sWidth=document.documentElement.scrollWidth;
    footer_flow.style.height=sHeight+"px";
    footer_flow.style.width=sWidth+"px";
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

    $(".footer_flow").css("display","block");
}

function IsPC() {
    var userAgentInfo = navigator.userAgent;
    var Agents = ["Android", "iPhone", "SymbianOS", "Windows Phone", "iPad", "iPod"];
    var flag = true;
    for (var v = 0; v < Agents.length; v++) {
        if (userAgentInfo.indexOf(Agents[v]) > 0) {
            flag = false;break;
        }
    }
    return flag;

}
function redirection(){
    $.ajax({
        type:"post",
        url:"m/Home/isset_mob",
        success: function(result) {
            //alert(result[0]);
            if(result[0]=='f'){
                if(!IsPC()){
                    alert("横屏浏览体验更好哦~");
                    $.ajax({
                        type:"post", url:"m/Home/addSession",
                        success: function(result) {
                            if(result){
                                location.href="http://192.168.16.119:8080/ul";
                            }
                        }, error: function() {
                        }
                    });
                }
            }
        }, error: function() {
        }
    });
}
$(document).ready(function(){
    redirection();


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

        $(".footer_flow").css("display","none");
    });
    $("#searchAToZ a").click(function(){
        var lis = document.getElementById("searchAToZ").getElementsByTagName("a");
        for (var i = 0; i < lis.length; i++) {
            lis[i].style.border = "none";
        }
        $(this).css( "border-bottom","3px solid #808080");
    });

    $("#searchCountry a").click(function(){
        var lis = document.getElementById("searchCountry").getElementsByTagName("a");
        for (var i = 0; i < lis.length; i++) {
            lis[i].style.border = "none";

        }
        $(this).css( "border-bottom","3px solid #808080");
    });
});


