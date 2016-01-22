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

        $(".footer_flow").css("display","none");
    });
    $("#searchAToZ a").click(function(){
        var lis = document.getElementById("searchAToZ").getElementsByTagName("a");
        for (var i = 0; i < lis.length; i++) {
            lis[i].style.border = "none";
        }
        $(this).css( "border-bottom","3px solid #333");
    });

    $("#searchCountry a").click(function(){
        var lis = document.getElementById("searchCountry").getElementsByTagName("a");
        for (var i = 0; i < lis.length; i++) {
            lis[i].style.border = "none";

        }
        $(this).css( "border-bottom","3px solid #333");
    });
});


