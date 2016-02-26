/**
 * Created by Administrator on 2016/1/21 0021.
 */

function getfooter(){

    var footer_flow=document.getElementById("footer_flow");
    var sHeight=document.documentElement.scrollHeight||document.body.scrollHeight;
    var sWidth=window.screen.width;
    footer_flow.style.height=sHeight+"px";
    footer_flow.style.width=sWidth+"px";


    $.ajax({
        type:"post",
        url:"http://localhost:8080/Home/getfooter",
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
                    //alert("横屏浏览体验更好哦~");
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
var about_visible=false;
var isFirst=true;
var menu_visible=false;
$(document).ready(function(){
    //redirection();
    $("#aboutli").click(function(){
        if(!about_visible){
            $("#aboutli ul").css("display","block");
            about_visible=true;
        }else{
            $("#aboutli ul").css("display","none");
            about_visible=false;
        }
    });
    $(".mob_menu").click(function(){

        if(!menu_visible){
            $(".masthead_ul").css("display","block");
            menu_visible=true;
        }else{
            $(".masthead_ul").css("display","none");
            menu_visible=false;
        }

    });
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

        if(isFirst){

            getfooter();

            isFirst=false;
        }else{

            $(".footer_flow").css("display","block");
        }


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


