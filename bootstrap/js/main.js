/**
 * Created by TT on 2016/1/11.
 */
$(document).ready($changeStyle());
function $a(element){
    return element = document.getElementById(element);
}
function $D(elementid){
    var d=$a(elementid);
    var h=d.offsetHeight;
    var maxh=300;
    function dmove(){
        h+=50; //层展开速度
        if(h>=maxh){
            clearInterval(iIntervalId);
        }else{
            d.style.display='block';
        }
    }
    iIntervalId=setInterval(dmove,2);
}
function $D2(elementid){
    var d=$a(elementid);
    var h=d.offsetHeight;
    function dmove(){
        h-=50;//层收缩速度
        if(h<=0){
            d.style.display='none';
            clearInterval(iIntervalId);
        }else{
        }
    }
    iIntervalId=setInterval(dmove,2);
}
function $use(elementid,jumpId,searchAToZ){
    if(elementid=='class1content'){
        var layWidth = $("#area1").width();
        $("#searchBrandName").css('height','40px');
        var d=$a(elementid);
        if(d.style.display=='none'){
            document.getElementById("bg").style.display ="block";
            $D(elementid);
            $searchbrandname('A');
            var country=$a('searchCountry');
            var countrylist = country.childNodes;
            $searchcity(countrylist[1].id);
            $("#bg").css("height",document.body.scrollHeight);
            $("#bg").css("width",layWidth);
        }else{
            document.getElementById("bg").style.display ='none';
            $D2(elementid);
            $("#bg").css("height",document.body.scrollHeight);
            $("#bg").css("width",layWidth);
        }
    }else{
        var d=$a(elementid);
        if(d.style.display=='none'){

            $D(elementid);
            $("#bg").css("height",document.body.scrollHeight);
            $("#"+jumpId).removeClass('glyphicon glyphicon-chevron-right');
            $("#"+jumpId).addClass('glyphicon glyphicon-chevron-down');
            if(searchAToZ == undefined){
            }else{
                $("#"+searchAToZ).css("display",'block');
                $("#searchBrandName").css('height','60px');
            }
        }else{
            $D2(elementid);
            $("#bg").css("height",document.body.scrollHeight);
            $("#"+jumpId).removeClass('glyphicon glyphicon-chevron-down');
            $("#"+jumpId).addClass('glyphicon glyphicon-chevron-right');
            $("#"+searchAToZ).css("display",'none');
            if(elementid != 'class2content'){
                if($a("class2content").style.display== 'block'){
                    $("#searchBrandName").css('height','60px');
                }else{
                    $("#searchBrandName").css('height','40px');
                }
            }else{
                $("#searchBrandName").css('height','40px');
            }
        }
    }
}
function $hideSearchItem(elementid){
    document.getElementById("bg").style.display ='none';
    $D2(elementid);
    $("#bg").css("height",document.body.scrollHeight);
}
function $removesingle(id){
    var div=$a('searchdetailarea');
    var div2=$a(id);
    $a(div2.id.split('___')[0]).checked=false;
    div.removeChild(div2);
    $("#bg").css("height",document.body.scrollHeight);
}

function $addcontent(oid){
    var div=$a('searchdetailarea');
    var checkbox=$a(oid);
    div.innerHTML +="<span id='"+oid+"___"+checkbox.value+"' class='searchcontentdiv' onclick='$removesingle(\""+oid+"___"+checkbox.value+"\")'>"+checkbox.value+"<span class='glyphicon glyphicon-remove iconcust'></span></span>";
    $("#bg").css("height",document.body.scrollHeight);
}
function $removecontent(oid){
    var div=$a('searchdetailarea');
    var checkbox=$a(oid);
    var div2 =$a(oid+'___'+checkbox.value);
    div.removeChild(div2);
    $("#bg").css("height",document.body.scrollHeight);
}

function $searchcontent(oid){
    var checkbox=$a(oid);
    if(checkbox.checked){
        $addcontent(oid);
        $("#bg").css("height",document.body.scrollHeight);
    }else{
        $removecontent(oid);
        $("#bg").css("height",document.body.scrollHeight);
    }
}

function $reset(){
    var div=$a('searchdetailarea');
    var divlist = div.childNodes;
    for(var i=divlist.length-1;i>=0;i--){
        if(divlist[i].id!='searchreset'&&divlist[i].id!='searchcommit'&&divlist[i].id!='searchinput'&&divlist[i].id)
        {
            if($a(divlist[i].id.split('___')[0])){
                $a(divlist[i].id.split('___')[0]).checked=false;
            }
            div.removeChild(divlist[i]);
            $("#bg").css("height",document.body.scrollHeight);
        }
    }
    $("#bg").css("height",document.body.scrollHeight);
}

function $jobajax(id){
    $.ajax({
        type:"post",
        data: "dep_id=" + id,
        url:"Join/getJobName",
        success: function(result)
        {        
            $("#jobdetailarea").html(result);
        },
        error: function()
        {
            $("#jobdetailarea").html('error');
            alert("ajax error");
        }
    });
}

function $departmentajax(id){
    $.ajax({
        type:"post",
        data: "job_id=" + id,
        url:"Join/getJobInfo",
        success: function(result)
        {
			var submitbutton='<div class="jobcommit"><button class="btn btn-primary btn-lg jobcommitbtn" data-toggle="modal" data-target="#myModal">点击申请</button></div>';
            var modal =
            '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'+
                '<div class="modal-dialog">'+
                    '<div class="modal-content">'+
                        '<div class="modal-body">'+
                            '<div class="sendmailtext">发送电子邮件</div>'+
                            '<div class="jobinfotext">如有疑问或需要帮助，请填写下面表格</div>'+
                            '<div class="jobinfotext" style="margin-top:30px;margin-bottom:4px">填写信息</div>'+
                            '<div class="jobinfoinput"><textarea id="remarkinfo" style=" width: 100%;resize:none; height:100px;margin:auto;color:#000000;" ></textarea></div>'+
                            '<div class="jobinfotext" style="margin-top:44px;margin-bottom:4px">称呼（非必须）选择标题 姓</div>'+
                            '<div class="jobinfoinput"><input type="text" name="call" id="call"  style=" width: 100%;;height:40px;margin:auto;color:#000000;"></div>'+
                            '<div class="jobinfotext" style="margin-top:12px;margin-bottom:4px">名</div>'+
                            '<div class="jobinfoinput"><input type="text" name="name" id="name"  style=" width: 100%;height:40px;margin:auto;color:#000000;"></div>'+
                            '<div class="jobinfotext" style="margin-top:12px;margin-bottom:4px">联系电话（非必须）</div>'+
                            '<div class="jobinfoinput"><input type="text" name="phoneno" id="phoneno"  style=" width: 100%;height:40px;margin:auto;color:#000000;"></div>'+
                            '<div class="jobinfotext" style="margin-top:12px;margin-bottom:4px">您的电子邮件地址</div>'+
                            '<div class="jobinfoinput"><input type="email" name="email" id="email"  style=" width:100%;height:40px;margin:auto;color:#000000;"></div>'+
                        '</div>'+
                        '<div class="modal-footer">'+'<div class="sendbtn">'+
                            '<button type="button" class="btn btn-primary sendcommitbtn" onclick="$ask4job(\''+id+'\')">发送</button>'+
                            '<button type="button" class="btn btn-default sendcanclebtn" data-dismiss="modal" style="border:0;">关闭</button>'+'</div>'+
                        '</div>'+
                    '</div>'+
                '</div>';
            $("#departmentdetailarea").html(result+submitbutton+modal);
        },
        error: function()
        {
            $("#departmentdetailarea").html('error');
            alert("ajax error");
        }
    });
}

function $ask4job(id){
    var remark=$('#remarkinfo').val();
    var call=$('#call').val();
    var name=$('#name').val();
    var phoneno=$('#phoneno').val();
    var email=$('#email').val();
    $.ajax({
        type:"post",
        data: "job_id=" + id + '&remark='+remark+'&call='+call+'&name='+name+'&phoneno='+phoneno+'&email='+email,
        url:"Join/ask4job",
        success: function(result)
        {
           alert(result);
        },

        error: function()
        {
            $("#departmentdetailarea").html('error');
            alert("ajax error");
        }
    });
}

function $searchresult(){
    if($("#searchinput").val()){
        var div=$a('searchdetailarea');
        var divlist = div.childNodes;
        var tags = '';
        for(var i=divlist.length-1;i>=0;i--){
            if(divlist[i].id!='searchreset'&&divlist[i].id!='searchcommit'&&divlist[i].id!='searchinput'&&divlist[i].id)
            {
                tags+=divlist[i].id.split('__')[0];
                if(i>0){
                    tags+='|||';
                }
            }
        }
        //var reg = /([^\s])\s+([^\s\b])/g;
        var searchinput = $("#searchinput").val();
        searchinput = searchinput.replace(/(^\s*)|(\s*$)/g, "");
        searchinput = searchinput.replace(/\s+/g, '|||');
        $.ajax({
            type:"post",
            data: "tags=" + tags + '&searchinput='+searchinput,
            url:"Search/globalSearch",
            success: function(result)
            {
                $("#searchresults").html(result);
                $("#bg").css("height",document.body.scrollHeight);
            },
            error: function()
            {
                alert("ajax error");
                $("#bg").css("height",document.body.scrollHeight);
            }
        });
    }else{
        alert('请输入搜索内容');
        $("#bg").css("height",document.body.scrollHeight);
    }
}
function $changeStyle(){
    var tmp = $('#homeli').children()[0].innerHTML;

    if(tmp !== "Home"){
        $('#ulli').removeClass('languge-en-ulli');
        $('#awoeli').removeClass('languge-en-awoeli');
        $('#musicli').removeClass('languge-en-musicli');
    }
    else{
        $('#ulli').addClass('languge-en-ulli');
        $('#awoeli').addClass('languge-en-awoeli');
        $('#musicli').addClass('languge-en-musicli');
    }
}

function $changelanguage($url,$language){
    $.ajax({
        type:"post",
        data: "language=" + $language,
        url:$url+"/changelanguage",
        success: function(result)
        {
            location.reload(true);
            $changeStyle();
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}

function $searchrelatedvideo($keyword_id){

    $.ajax({
        type:"post",
        data: "keyword_id=" + $keyword_id,
        url:"Search/searchrelatedvideo",
        success: function(result)
        {
            $('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}

function $searchbrandname($brandtype){
    $.ajax({
        type:"post",
        data: "brandtype=" + $brandtype,
        url:"Search/searchbrandname",
        success: function(result)
        {
            $('#class2content').html(result);
            var div=$a('searchdetailarea');
            var divlist = div.childNodes;
            for(var i=divlist.length-1;i>=0;i--){
                if(divlist[i].id!='searchreset'&&divlist[i].id!='searchcommit'&&divlist[i].id!='searchinput'&&divlist[i].id)
                {
                    $('#'+divlist[i].id.split('___')[0]).attr("checked",'true');
                }
            }
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}

function $searchcity($countryid){
    $.ajax({
        type:"post",
        data: "countryid=" + $countryid,
        url:"Search/searchcountry",
        success: function(result)
        {
            $('#class5content').html(result);
            var div=$a('searchdetailarea');
            var divlist = div.childNodes;
            for(var i=divlist.length-1;i>=0;i--){
                if(divlist[i].id!='searchreset'&&divlist[i].id!='searchcommit'&&divlist[i].id!='searchinput'&&divlist[i].id)
                {
                    $('#'+divlist[i].id.split('___')[0]).attr("checked",'true');
                }
            }
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $partnerrelatedvideo($logoid){
    $.ajax({
        type:"post",
        data: "keyword_id=" + $logoid,
        url:"Search/searchrelatedvideo",
        success: function(result)
        {
            $('#showarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}


