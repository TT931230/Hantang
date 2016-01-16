/**
 * Created by TT on 2016/1/11.
 */
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
function $use(elementid){
    if(elementid=='class1content'){
        var d=$a(elementid);
        if(d.style.display=='none'){
            document.getElementById("bg").style.display ="block";
            $D(elementid);
            $("#bg").css("height",document.body.scrollHeight);
        }else{
            document.getElementById("bg").style.display ='none';
            $D2(elementid);
            $("#bg").css("height",document.body.scrollHeight);
        }
    }else{
        var d=$a(elementid);
        if(d.style.display=='none'){
            $D(elementid);
            $("#bg").css("height",document.body.scrollHeight);
        }else{
            $D2(elementid);
            $("#bg").css("height",document.body.scrollHeight);
        }
    }
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
            $a(divlist[i].id.split('___')[0]).checked=false;
            div.removeChild(divlist[i]);
            $("#bg").css("height",document.body.scrollHeight);
        }
    }
    $("#bg").css("height",document.body.scrollHeight);
}

function $departmentajax(jobname){
    $.ajax({
        type:"post",
        data: "jobname=" + jobname,
        url:"Join/getJobInfo",
        success: function(result)
        {
            var submitbutton='<div><button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">提交申请</button></div>';
            var modal =
            '<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">'+
                '<div class="modal-dialog">'+
                    '<div class="modal-content">'+
                        '<div class="modal-body">'+
                            '<div>发送电子邮件</div>'+
                            '<hr/>'+
                            '<div>如有疑问或需要帮助，请填写下面表格</div>'+
                            '<div>填写信息</div>'+
                            '<div><textarea id="remarkinfo"></textarea></div>'+
                            '<div>称呼（非必须）</div>'+
                            '<div><input type="text" name="call" id="call"></div>'+
                            '<div>姓名<div>'+
                            '<div><input type="text" name="name" id="name"></div>'+
                            '<div>联系电话（非必须）</div>'+
                            '<div><input type="text" name="phoneno" id="phoneno"></div>'+
                            '<div>您的电子邮件地址</div>'+
                            '<div><input type="email" name="email" id="email"></div>'+
                        '</div>'+
                        '<div class="modal-footer">'+
                            '<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>'+
                            '<button type="button" class="btn btn-primary" onclick="$ask4job(\''+jobname+'\')">发送</button>'+
                        '</div>'+
                    '</div>'+
                '</div>'
            $("#departmentdetailarea").html(result+submitbutton+modal);

        },

        error: function()
        {
            $("#departmentdetailarea").html('error');
            alert("ajax error");
        }
    });
}

function $ask4job(jobname){
    var remark=$('#remarkinfo').val();
    var call=$('#call').val();
    var name=$('#name').val();
    var phoneno=$('#phoneno').val();
    var email=$('#email').val();
    $.ajax({
        type:"post",
        data: "jobname=" + jobname + '&remark='+remark+'&call='+call+'&name='+name+'&phoneno='+phoneno+'&email='+email,
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
        console.log(tags);
        var reg = /([^\s])\s+([^\s\b])/g;
        var searchinput = $("#searchinput").val();
        searchinput = searchinput.replace(reg, "$1|||$2");
        console.log(searchinput);
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