function checkAll()
{
    var el = document.getElementsByTagName('input');
    var len = el.length;
    for(var i=0; i<len; i++)
    {
        if(el[i].type=="checkbox")
        {
            el[i].checked = true;
        }
    }
}
function clearAll()
{
    var el = document.getElementsByTagName('input');
    var len = el.length;
    for(var i=0; i<len; i++)
    {
        if(el[i].type=="checkbox")
        {
            el[i].checked = false;
        }
    }
}
function $changetags(pagename){
    $.ajax({
        type:"post",
        data: "pagename=" + pagename,
        url:"pagemanager/redirectpage",
        success: function(result)
        {
            $("#page-wrapper").html(result);

        },

        error: function()
        {
            $("#page-wrapper").html('error');
            alert("ajax error");
        }
    });
}

function $saveImage(){
    sequence=$('#sequence')[0].value;
    url=$('#url')[0].value;
    source_location=$('#source_location')[0].value;
    source_name=$('#source_name')[0].value;
    source_remark=$('#source_remark')[0].value;
    third_level=$('#third_level')[0].value;
    $.ajax({
        type:"post",
        data: "source_location="+source_location+"&source_name="+source_name+"&source_remark="+source_remark+'&third_level='+third_level+'&url='+url,
        url:"Pagemanager/saveImage",
        success: function(result)
        {
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}

function $queryImage(){
    imglevel=$('#imglevel')[0].value;
    imgname=$('#imgname')[0].value;
    $.ajax({
        type:"post",
        data: "imglevel="+imglevel+"&imgname="+imgname,
        url:"Pagemanager/queryimage",
        success: function(result)
        {
            $('#caselistshow').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $queryPage(){

    arealevel=$('#pagelevel')[0].value;
    areaname=$('#pagename').val();
    $.ajax({
        type:"post",
        data: "arealevel="+arealevel+"&areaname="+areaname,
        url:"Pagemanager/queryarea",
        success: function(result)
        {
            $('#caselistshow').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $queryVideo(){
    videolevel=$('#videolevel')[0].value;
    videoname=$('#videoname')[0].value;
    $.ajax({
        type:"post",
        data: "videolevel="+videolevel+"&videoname="+videoname,
        url:"Pagemanager/queryvideo",
        success: function(result)
        {
            $('#caselistshow').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $queryKeyword(){
    keywordlevel=$('#keywordlevel')[0].value;
    keywordname=$('#keywordname')[0].value;
    $.ajax({
        type:"post",
        data: "keywordlevel="+keywordlevel+"&keywordname="+keywordname,
        url:"Pagemanager/querykeyword",
        success: function(result)
        {
            $('#caselistshow').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $savhpmsingleimg(sourceid,pagename){
    sourcename=$('#'+sourceid+'_name').val();
    sourceremark=$('#'+sourceid+'_remark').val();
    second_level=$('#'+sourceid+'_imgarea '+'option:selected').text();

    $.ajax({
        type:"post",
        data: 'id='+sourceid+'&sourcename='+sourcename+'&sourceremark='+sourceremark+'&second_level='+second_level,
        url:"Pagemanager/savhpmsingleimg",
        success: function(result)
        {
            alert('保存成功！');
            $changetags(''+pagename+'pagemanage');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $delhpmsingleimg(sourceid,pagename){
    $.ajax({
        type:"post",
        data: 'source_id='+sourceid,
        url:"Pagemanager/deletesinglesource",
        success: function(result)
        {
            alert('删除成功！');
            $changetags(''+pagename+'pagemanage');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $delhpmselected(pagename){
    $(".vl-check input[type='checkbox']").each(function(){
        if($(this).prop("checked")){
            var source_id=$(this).parent().siblings(".hpm-td3").attr("id");
            var arr=source_id.split('_');

            $.ajax({
                type:"post",
                data: 'source_id='+arr[0],
                url:"Pagemanager/deletesinglesource",
                success: function(result) {
                },
                error: function() {
                    alert("ajax error");
                }
            });
        }
    });
    alert("success");
    $changetags(''+pagename+'pagemanage');
}
function $savehpmselected(pagename){
    $(".vl-check input[type='checkbox']").each(function(){
        if($(this).prop("checked")){
            source_id=$(this).parent().siblings(".hpm-td3").attr("id");
            arr=source_id.split('_');
            sourceid=arr[0];
            sourcename=$('#'+sourceid+'_name').val();
            sourceremark=$('#'+sourceid+'_remark').val();
            second_level=$('#'+sourceid+'_imgarea '+'option:selected').text();

            $.ajax({
                type:"post",
                data: 'id='+sourceid+'&sourcename='+sourcename+'&sourceremark='+sourceremark+'&second_level='+second_level,
                url:"Pagemanager/savhpmsingleimg",
                success: function(result) {
                },
                error: function() {
                    alert("ajax error");
                }
            });
        }
    });
    alert("success");
    $changetags(''+pagename+'pagemanage');
}
function $savepageimg(pagename){
    imgname=$("#hpm-content-title").val();
    affiliated=$("#affiliatedmoudle option:selected").text();
    if(pagename == 'home'){
        affiliated = affiliated.substr(2,1);
        affiliated = 'imagearea'+affiliated;
    }
    if(pagename == 'about'){
        affiliated = affiliated.substr(4,1);
        affiliated = 'about0'+affiliated;
    }
    if(pagename == 'platform'){
        affiliated = affiliated.substr(4,1);
        affiliated = 'aboutmap'+affiliated;
    }
    if(pagename == 'partner'){
        affiliated = affiliated.substr(4,1);
        affiliated = 'imagearea'+affiliated;
    }
    if(pagename == 'ul'){
        affiliated = affiliated.substr(2,1);
        affiliated = 'imagearea'+affiliated;
    }
    if(pagename == 'awoe'){
        affiliated = affiliated.substr(4,1);
        affiliated = 'imagearea'+affiliated;
    }
    if(pagename == 'music'){
        affiliated = affiliated.substr(3,1);
        affiliated = 'imagearea'+affiliated;
    }

    source_remark=$("#hpm-contentinfo").val();
    source_location=$("#hpminputimg").val();
    link_url='';
    if(pagename=='music'){
        link_url = $("#hpm-content-video").val();
    }
    if(imgname==""||affiliated==""||source_location==""||source_remark==""){
        alert("值不能为空！");
        return;
    }
    $.ajaxFileUpload ({
        url:"Pagemanager/savepageimg",
        secureuri:false,
        fileElementId:'hpminputimg',
        dataType: 'text',
        data:{"first_level":pagename,"source_name":imgname,"affiliated":affiliated,
            "source_remark":source_remark,"link_url":link_url} ,
        success: function (data){
            result=data.split('||||');
            alert(result[0]);
            imgname=$("#hpm-content-title").val("");
            source_remark=$("#hpm-contentinfo").val("");
            source_location=$("#hpminputimg").val("");
            $changetags(''+pagename+'pagemanage');
        },error:function(){
            alert("ajax error");
        }
    });


}
function $saveVideo(){
    first_level='';
    third_level='';
    source_location='';
    source_name='';
    keyword='';
    source_name='';


    first_level=$('#first_level')[0].value;
    source_location=$('#source_location')[0].value;
    source_name=$('#source_name')[0].value;

    //index=$('#index')[0].value;

    $("#keyword option:selected").each(function(){
        keyword+=$(this)[0].value+'|||';
    });
    source_remark=$('#source_remark')[0].value;
    third_level=$('#third_level')[0].value;

        if(first_level==''||
            third_level==''||
            source_location==''||
            source_name==''||
            keyword==''||
            source_name==''){
            alert('please input infomation');
        }else{
            $.ajax({
                type:"post",
                data: "source_location="+source_location+"&source_name="+source_name+"&source_remark="
                +source_remark+"&keyword="+keyword+"&third_level="+third_level+"&first_level="
                +first_level,
                url:"Pagemanager/saveVideo",
                //dataType:'json',
                success: function(result)
                {
                    var flag = result.substr(0,5);
                    if(flag == "noimg"){
                        alert('上传成功！');
                    }else{
                        var data = result.split("|");
                        var lan = data[2].substr(0,2);
                        $.ajaxFileUpload ({
                            url:"Pagemanager/uploadLocalImg",
                            secureuri:false,
                            fileElementId:'inputVideoImg',
                            dataType: 'text',
                            data:{"id":data[0],"first_level":data[1],"third_level":lan} ,
                            success: function (data){
                                alert('upload success');
                                $('#source_location')[0].value='';
                                $('#source_name')[0].value='';
                                $('#source_remark')[0].value='';
                            },error:function(){
                                alert("ajax error");
                            }
                        });
                    }

                },
                error: function()
                {
                    alert("ajax error");
                }
            });
        }

}
function $getselectedinfo(pagename){
    switch(pagename){
        case 'home':
            $.ajax({
                type:"post",
                data: "sequence=" + sequence+"&source_location="+source_location+"&source_name="+source_name+"&source_remark="+source_remark+"&videoimg="+videoimg+"&keyword="+keyword+"&third_level="+third_level,
                url:"Pagemanager/gethomeinfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'about':
            $.ajax({
                type:"post",
                data: "sequence=" + sequence+"&source_location="+source_location+"&source_name="+source_name+"&source_remark="+source_remark+"&videoimg="+videoimg+"&keyword="+keyword+"&third_level="+third_level,
                url:"Pagemanager/gethomeinfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            ;
            break;
        case 'platform':
            ;
            break;
        case 'partner':
            ;
            break;
        case 'ul':
            ;
            break;
        case 'awoe':
            ;
            break;
        case 'music':
            ;
            break;
        case 'join':
            ;
            break;
    }
}

function $saveArea(areatype){
    switch(areatype){
        case 'homearea':

            homeimglist1='';
            $("#source_name_a option:selected").each(function(){
                homeimglist1+=$(this)[0].value+'|||';
            });

            homeimglist2='';
            $("#source_name_b option:selected").each(function(){
                homeimglist2+=$(this)[0].value+'|||';
            });

            homeimglist3='';
            $("#source_name_c option:selected").each(function(){
                homeimglist3+=$(this)[0].value+'|||';
            });

            homeimglist4='';
            $("#source_name_d option:selected").each(function(){
                homeimglist4+=$(this)[0].value+'|||';
            });

            third_level=$('#third_level')[0].value;

            data='homeimglist1=';
            data+=homeimglist1;
            data+='&';
            data+='homeimglist2=';
            data+=homeimglist2;
            data+='&';
            data+='homeimglist3=';
            data+=homeimglist3;
            data+='&';
            data+='homeimglist4=';
            data+=homeimglist4;


            data+='&';
            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            console.log(data);
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'aboutarea':

            aboutimglist1=$('#source_name_a')[0].value;
            aboutimglist2=$('#source_name_b')[0].value;
            aboutimglist3=$('#source_name_c')[0].value;


            third_level=$('#third_level')[0].value;

            data='aboutimglist1=';
            data+=aboutimglist1;
            data+='&';
            data+='aboutimglist2=';
            data+=aboutimglist2;
            data+='&';
            data+='aboutimglist3=';
            data+=aboutimglist3;
            data+='&';

            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'platformarea':

            platformimglist1=$('#source_name_a')[0].value;

            third_level=$('#third_level')[0].value;

            data='platformimglist1=';
            data+=platformimglist1;
            data+='&';
            data+='platformimglist2=';
            data+=platformimglist2;
            data+='&';
            data+='platformimglist3=';
            data+=platformimglist3;
            data+='&';

            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                    alert('保存成功');
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'partnerarea':

            partnerimglist1='';
            $("#source_name_a option:selected").each(function(){
                partnerimglist1+=$(this)[0].value+'|||';
            });

            partnerlanguage=$('#third_level')[0].value;

            data='partnerimglist1=';
            data+=partnerimglist1;
            data+='&';

            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'ularea':

            ulimglist1='';
            $("#source_name_a option:selected").each(function(){
                ulimglist1+=$(this)[0].value+'|||';
            });

            ullanguage=$('#third_level')[0].value;

            data='ulimglist1=';
            data+=ulimglist1;
            data+='&';

            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'awoearea':

            awoeimglist1='';
            $("#source_name_a option:selected").each(function(){
                awoeimglist1+=$(this)[0].value+'|||';
            });

            awoelanguage=$('#third_level')[0].value;

            data='awoeimglist1=';
            data+=awoeimglist1;
            data+='&';

            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'musicarea':

            musicimglist1='';
            $("#source_name_a option:selected").each(function(){
                musicimglist1+=$(this)[0].value+'|||';
            });

            musiclanguage=$('#third_level')[0].value;

            data='musicimglist1=';
            data+=musicimglist1;

            data+='&';
            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    $('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
        case 'joinarea':

            joinimglist1=$('#source_name_a')[0].value;

            joinlanguage=$('#third_level')[0].value;

            data='joinimglist1=';
            data+=joinimglist1;

            data+='&';
            data+='areatype=';
            data+=areatype;
            data+='&';
            data+='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"Pagemanager/updateareainfo",
                success: function(result)
                {
                    //$('#relatedvideoarea').html(result);
                },
                error: function()
                {
                    alert("ajax error");
                }
            });
            break;
    }
}

function $savesingleimg(source_id){
    imgtype=$('#'+source_id+'_imgtype')[0].value;
    imgsequence=$('#'+source_id+'_sequence')[0].value;
    $.ajax({
        type:"post",
        data: 'id='+source_id+'&imgtype='+imgtype+'&sequence='+imgsequence,
        url:"Pagemanager/savesingleimg",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('caselist');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $updatearea(id){
    imgsequence=$('#'+id+'_sequence')[0].value;
    $.ajax({
        type:"post",
        data: 'id='+id+'&sequence='+imgsequence,
        url:"Pagemanager/updatearea",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('webpagemanage');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $queryArea(){
    pagelevel=$('#pagelevel')[0].value;
    pagename=$('#pagename')[0].value;
    $.ajax({
        type:"post",
        data: "pagelevel="+pagelevel+"&pagename="+pagename,
        url:"Pagemanager/queryarea",
        success: function(result)
        {
            $('#caselistshow').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deletearea(id){
    $.ajax({
        type:"post",
        data: 'id='+id,
        url:"Pagemanager/deletearea",
        success: function(result)
        {
            alert('删除成功！');
            $changetags('webpagemanage');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $changeareastatus(id){
    $.ajax({
        type:"post",
        data: 'id='+id,
        url:"Pagemanager/changeareastatus",
        success: function(result)
        {
            //alert(result);
            alert('更新成功！');
            $changetags('webpagemanage');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deletesingleimg(source_id){
    $.ajax({
        type:"post",
        data: 'source_id='+source_id,
        url:"Pagemanager/deletesinglesource",
        success: function(result)
        {
            alert('删除成功！');
            $changetags('caselist');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deleteselectedimg(){
    $(".vl-check input[type='checkbox']").each(function(){
        if($(this).prop("checked")){
            var source_id=$(this).parent().siblings(".cl-imgmini").attr("id");
            var arr=source_id.split('_');

            $.ajax({
                type:"post",
                data: 'source_id='+arr[0],
                url:"Pagemanager/deletesinglesource",
                success: function(result) {
                },
                error: function() {
                    alert("ajax error");
                }
            });
        }
    });
    alert("success");
    $changetags('caselist');
    //alert("success");
}

function $savesinglevideo(imgid,video_id,first_level){
    imgsequence=$('#'+imgid+'_sequence')[0].value;
    index=$('#'+imgid+'_index')[0].value;
    $.ajax({
        type:"post",
        data: 'id='+imgid+'&video_id='+video_id+'&first_level='+first_level+'&sequence='+imgsequence+'&index='+index,
        url:"Pagemanager/savesinglevideo",
        success: function(result)
        {
            alert(result);
            $changetags('videolist');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deleteselectedvideo(){
    $(".vl-check input[type='checkbox']").each(function(){
        if($(this).prop("checked")){
            var source_id=$(this).parent().siblings(".vl-imglang").attr("id");
            var arr=source_id.split('_');
            //alert(arr[0]);
            $.ajax({
                type:"post",
                data: 'source_id='+arr[0],
                url:"Pagemanager/deletesinglesource",
                success: function(result) {
                },
                error: function() {
                    alert("ajax error");
                }
            });
        }
    });
    alert("success");
    $changetags('videolist');
    //alert("success");
}
function $deletesinglevideo(source_id){
    $.ajax({
        type:"post",
        data: 'source_id='+source_id,
        url:"Pagemanager/deletesinglesource",
        success: function(result)
        {
            alert('删除成功！');
            $changetags('videolist');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $savebrand(brand_id){
    $.ajax({
        type:"post",
        data: 'brand_id='+brand_id+'&source_id='+$('#'+brand_id+'_img')[0].value+'&sequence='+$('#'+brand_id+'_sequence')[0].value,
        url:"Pagemanager/savebrand",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('brandedit');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $saveshower(shower_id){
    $.ajax({
        type:"post",
        data: 'shower_id='+shower_id+'&source_id='+$('#'+shower_id+'_img')[0].value+'&sequence='+$('#'+shower_id+'_sequence')[0].value,
        url:"Pagemanager/saveshower",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('showeredit');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $saveDepartment(){
    $.ajax({
        type:"post",
        data: 'department='+$('#department')[0].value,
        url:"Pagemanager/savedepartment",
        success: function(result)
        {
            if(result){
                alert('保存成功！');
                $changetags('departmentlist');
            }else{
                alert('部门已存在！');
                $changetags('adddepartment');
            }
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function saveJob(){
    $.ajax({
        type:"post",
        data: 'department_id='+$('#departmentname')[0].value+'&jobname='+$('#jobname')[0].value+'&need='+$('#need')[0].value+'&todo='+$('#todo')[0].value,
        url:"Pagemanager/savejob",
        success: function(result)
        {
            if(result){
                alert('保存成功！');
                $changetags('joblist');
            }else{
                alert('职位已存在！');
                $changetags('addjob');
            }
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $updatedepartment(id){
    $.ajax({
        type:"post",
        data: 'id='+id+'&sequence='+$('#'+id+'_sequence')[0].value,
        url:"Pagemanager/updatedepartment",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('departmentlist');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $changedepartmentstatus(id){
    $.ajax({
        type:"post",
        data: 'id='+id,
        url:"Pagemanager/changedepartmentstatus",
        success: function(result)
        {
            alert('更新成功！');
            $changetags('departmentlist');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $saveselectedkeyword(){
    $(".vl-check input[type='checkbox']").each(function(){
        if($(this).prop("checked")){
            id=$(this).parent().siblings(".hpm-tags1").attr("id");
            sequence=$('#'+id+'_sequence')[0].value;
            $.ajax({
                type:"post",
                data: 'id='+id+"&sequence="+sequence,
                url:"Pagemanager/savekeywordchanges",
                success: function(result) {
                },
                error: function() {
                    alert("ajax error");
                }
            });
        }
    });
    alert("success");
    $changetags('tagsedit');
}
function $savekeywordchanges(id){
    sequence=$('#'+id+'_sequence')[0].value;
    $.ajax({
        type:"post",
        data: 'id='+id+"&sequence="+sequence,
        url:"Pagemanager/savekeywordchanges",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('tagsedit');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deletesinglekeyword(id){
    alert("此功能暂时有疑问!");
}
function $changeselectedkeyword(){
    $(".vl-check input[type='checkbox']").each(function(){
        if($(this).prop("checked")){
            source_id=$(this).parent().siblings(".hpm-tags1").attr("id");
            $.ajax({
                type:"post",
                data: 'id='+source_id,
                url:"Pagemanager/changekeywordstatus",
                success: function(result) {
                },
                error: function() {
                    alert("ajax error");
                }
            });
        }
    });
    alert("success");
    $changetags('tagsedit');
}
function $changekeywordstatus(id){
    $.ajax({
        type:"post",
        data: 'id='+id,
        url:"Pagemanager/changekeywordstatus",
        success: function(result)
        {
            alert('更新成功！');
            $changetags('tagsedit');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deletedepartment(id){
    $.ajax({
        type:"post",
        data: 'id='+id,
        url:"Pagemanager/deletedepartment",
        success: function(result)
        {
            alert('删除成功！');
            $changetags('departmentlist');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $updatejob(id){
    $.ajax({
        type:"post",
        data: 'id='+id+'&sequence='+$('#'+id+'_sequence')[0].value,
        url:"Pagemanager/updatejob",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('joblist');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $changejobstatus(id){
    $.ajax({
        type:"post",
        data: 'id='+id,
        url:"Pagemanager/changejobstatus",
        success: function(result)
        {
            alert('更新成功！');
            $changetags('joblist');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deletejob(id){
    $.ajax({
        type:"post",
        data: 'id='+id,
        url:"Pagemanager/deletejob",
        success: function(result)
        {
            alert('删除成功！');
            $changetags('joblist');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $saveMusic(){
    //alert($('#music_id')[0].value);
    $.ajax({
        type:"post",
        data: 'musicId='+$('#music_id')[0].value+'&season='+$('#displayseason')[0].value+'&time='+$('#displaytime')[0].value+'&location='+$('#displaylocation')[0].value,
        url:"Pagemanager/savemusic",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('displaylist');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}

function $addadmin(){
    $.ajax({
        type:"post",
        data: 'username='+$('#username')[0].value+'&password='+$('#password')[0].value+'&privilige1='+$('#privilige1')[0].checked+'&privilige2='+$('#privilige2')[0].checked+'&privilige3='+$('#privilige3')[0].checked+'&privilige4='+$('#privilige4')[0].checked+'&privilige5='+$('#privilige5')[0].checked+'&privilige6='+$('#privilige6')[0].checked+'&privilige7='+$('#privilige7')[0].checked+'&privilige8='+$('#privilige8')[0].checked+'&privilige9='+$('#privilige9')[0].checked+'&privilige10='+$('#privilige10')[0].checked,
        url:"Pagemanager/addadmin",
        success: function(result)
        {
            if(result){
                alert('保存成功！');
                $changetags('admininformation');
            }else{
                alert('用户名已存在！');
                $changetags('admininformation');
            }

        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $logout(){
    $.ajax({
        type:"post",
        url:"Login/logout",
        success: function(result)
        {
            location.href=result;
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $deleteuser(id){
    $.ajax({
        type:"post",
        data:"id="+id,
        url:"Pagemanager/deleteuser",
        success: function(result)
        {
            alert('删除成功！');
            $changetags('authoritymanage');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}
function $submitarea(area){
    $.ajax({
        type:"post",
        data:"area="+area,
        url:"Pagemanager/submitarea",
        success: function(result)
        {
            alert('发布成功！');
            $changetags(area+'pagemanage');
        },
        error: function()
        {
            alert("ajax error");
        }
    });
}

function $previewarea(area){
    window.open('http://localhost:8080/'+area+'/preview');
}