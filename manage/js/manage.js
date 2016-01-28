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
    menu=$('#menu')[0].value;
    source_name=$('#source_name')[0].value;
    console.log(menu+source_name);
}
function $saveVideo(){
    first_level=$('#first_level')[0].value;
    source_location=$('#source_location')[0].value;
    source_name=$('#source_name')[0].value;
    videoimg=$('#videoimg')[0].value;
    keyword='';
    $("#keyword option:selected").each(function(){
        keyword+=$(this)[0].value+'|||';
    });
    source_remark=$('#source_remark')[0].value;
    third_level=$('#third_level')[0].value;
    $.ajax({
        type:"post",
        data: "source_location="+source_location+"&source_name="+source_name+"&source_remark="+source_remark+"&videoimg="+videoimg+"&keyword="+keyword+"&third_level="+third_level+"&first_level="+first_level,
        url:"Pagemanager/saveVideo",
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
            homearea1_is_hide='1';
            homearea1_is_auto='1';
            homearea2_is_hide='1';
            homearea2_is_auto='1';
            homearea3_is_hide='1';
            homearea3_is_auto='1';
            homearea4_is_hide='1';
            homearea4_is_auto='1';
            homeimglist1='';
            $("#source_name_a option:selected").each(function(){
                homeimglist1+=$(this)[0].value+'|||';
            });
            if($('#is_hide_a')[0].checked) {
                homearea1_is_hide = 'none';
            }
            if($('#is_auto_a')[0].checked) {
                homearea1_is_auto = 'false';
            }
            homeimglist2='';
            $("#source_name_b option:selected").each(function(){
                homeimglist2+=$(this)[0].value+'|||';
            });
            if($('#is_hide_b')[0].checked) {
                homearea2_is_hide = 'none';
            }
            if($('#is_auto_b')[0].checked) {
                homearea2_is_auto = 'false';
            }
            homeimglist3='';
            $("#source_name_c option:selected").each(function(){
                homeimglist3+=$(this)[0].value+'|||';
            });
            if($('#is_hide_c')[0].checked) {
                homearea3_is_hide = 'none';
            }
            if($('#is_auto_c')[0].checked) {
                homearea3_is_auto = 'false';
            }
            homeimglist4='';
            $("#source_name_d option:selected").each(function(){
                homeimglist4+=$(this)[0].value+'|||';
            });
            if($('#is_hide_d')[0].checked) {
                homearea4_is_hide = 'none';
            }
            if($('#is_auto_d')[0].checked) {
                homearea4_is_auto = 'false';
            }
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
            data+='homearea1_is_hide=';
            data+=homearea1_is_hide;
            data+='&';
            data+='homearea2_is_hide=';
            data+=homearea2_is_hide;
            data+='&';
            data+='homearea3_is_hide=';
            data+=homearea3_is_hide;
            data+='&';
            data+='homearea4_is_hide=';
            data+=homearea4_is_hide;
            data+='&';
            data+='homearea1_is_auto=';
            data+=homearea1_is_auto;
            data+='&';
            data+='homearea2_is_auto=';
            data+=homearea2_is_auto;
            data+='&';
            data+='homearea3_is_auto=';
            data+=homearea3_is_auto;
            data+='&';
            data+='homearea4_is_auto=';
            data+=homearea4_is_auto;
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
            aboutarea1_is_hide='1';
            aboutarea1_is_auto='1';
            aboutarea2_is_hide='1';
            aboutarea2_is_auto='1';
            aboutarea3_is_hide='1';
            aboutarea3_is_auto='1';
            aboutimglist1=$('#source_name_a')[0].value;
            if($('#is_hide_a')[0].checked) {
                aboutarea1_is_hide = 'none';
            }
            if($('#is_auto_a')[0].checked) {
                aboutarea1_is_auto = 'false';
            }
            aboutimglist2=$('#source_name_b')[0].value;
            if($('#is_hide_b')[0].checked) {
                aboutarea2_is_hide = 'none';
            }
            if($('#is_auto_b')[0].checked) {
                aboutarea2_is_auto = 'false';
            }
            aboutimglist3=$('#source_name_c')[0].value;
            if($('#is_hide_c')[0].checked) {
                aboutarea3_is_hide = 'none';
            }
            if($('#is_auto_c')[0].checked) {
                aboutarea3_is_auto = 'false';
            }
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
            data+='aboutarea1_is_hide=';
            data+=aboutarea1_is_hide;
            data+='&';
            data+='aboutarea2_is_hide=';
            data+=aboutarea2_is_hide;
            data+='&';
            data+='aboutarea3_is_hide=';
            data+=aboutarea3_is_hide;
            data+='&';
            data+='aboutarea1_is_auto=';
            data+=aboutarea1_is_auto;
            data+='&';
            data+='aboutarea2_is_auto=';
            data+=aboutarea2_is_auto;
            data+='&';
            data+='aboutarea3_is_auto=';
            data+=aboutarea3_is_auto;
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
            platformarea1_is_hide='1';
            platformarea1_is_auto='1';
            platformarea2_is_hide='1';
            platformarea2_is_auto='1';
            platformarea3_is_hide='1';
            platformarea3_is_auto='1';
            platformimglist1=$('#source_name_a')[0].value;
            if($('#is_hide_a')[0].checked) {
                platformarea1_is_hide = 'none';
            }
            platformimglist2=$('#source_name_b')[0].value;
            if($('#is_hide_b')[0].checked) {
                platformarea2_is_hide = 'none';
            }
            platformimglist3=$('#source_name_c')[0].value;
            if($('#is_hide_c')[0].checked) {
                platformarea3_is_hide = 'none';
            }
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
            data+='platformarea1_is_hide=';
            data+=platformarea1_is_hide;
            data+='&';
            data+='platformarea2_is_hide=';
            data+=platformarea2_is_hide;
            data+='&';
            data+='platformarea3_is_hide=';
            data+=platformarea3_is_hide;
            data+='&';
            data+='platformarea1_is_auto=';
            data+=platformarea1_is_auto;
            data+='&';
            data+='platformarea2_is_auto=';
            data+=platformarea2_is_auto;
            data+='&';
            data+='platformarea3_is_auto=';
            data+=platformarea3_is_auto;
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
        case 'partnerarea':
            partnerarea1_is_hide='1';
            partnerarea1_is_auto='1';
            partnerimglist1='';
            $("#source_name_a option:selected").each(function(){
                partnerimglist1+=$(this)[0].value+'|||';
            });
            if($('#is_hide_a')[0].checked) {
                partnerarea1_is_hide = 'none';
            }
            if($('#is_auto_a')[0].checked) {
                partnerarea1_is_auto = 'false';
            }
            partnerlanguage=$('#third_level')[0].value;

            data='partnerimglist1=';
            data+=partnerimglist1;
            data+='&';
            data+='partnerarea1_is_hide=';
            data+=partnerarea1_is_hide;
            data+='&';
            data+='partnerarea1_is_auto=';
            data+=partnerarea1_is_auto;
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
            ularea1_is_hide='1';
            ularea1_is_auto='1';
            ulimglist1='';
            $("#source_name_a option:selected").each(function(){
                ulimglist1+=$(this)[0].value+'|||';
            });
            if($('#is_hide_a')[0].checked) {
                ularea1_is_hide = 'none';
            }
            if($('#is_auto_a')[0].checked) {
                ularea1_is_auto = 'false';
            }
            ullanguage=$('#third_level')[0].value;

            data='ulimglist1=';
            data+=ulimglist1;
            data+='&';
            data+='ularea1_is_hide=';
            data+=ularea1_is_hide;
            data+='&';
            data+='ularea1_is_auto=';
            data+=ularea1_is_auto;
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
            awoearea1_is_hide='1';
            awoearea1_is_auto='1';
            awoeimglist1='';
            $("#source_name_a option:selected").each(function(){
                awoeimglist1+=$(this)[0].value+'|||';
            });
            if($('#is_hide_a')[0].checked) {
                awoearea1_is_hide = 'none';
            }
            if($('#is_auto_a')[0].checked) {
                awoearea1_is_auto = 'false';
            }
            awoelanguage=$('#third_level')[0].value;

            data='awoeimglist1=';
            data+=awoeimglist1;
            data+='&';
            data+='awoearea1_is_hide=';
            data+=awoearea1_is_hide;
            data+='&';
            data+='awoearea1_is_auto=';
            data+=awoearea1_is_auto;
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
            musicarea1_is_hide='1';
            musicarea1_is_auto='1';
            musicimglist1='';
            $("#source_name_a option:selected").each(function(){
                musicimglist1+=$(this)[0].value+'|||';
            });
            if($('#is_hide_a')[0].checked) {
                musicarea1_is_hide = 'none';
            }
            if($('#is_auto_a')[0].checked) {
                musicarea1_is_auto = 'false';
            }
            musiclanguage=$('#third_level')[0].value;

            data='musicimglist1=';
            data+=musicimglist1;
            data+='&';
            data+='musicarea1_is_hide=';
            data+=musicarea1_is_hide;
            data+='&';
            data+='musicarea1_is_auto=';
            data+=musicarea1_is_auto;
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
            joinarea1_is_hide='1';
            joinarea1_is_auto='1';
            joinimglist1=$('#source_name_a')[0].value;
            if($('#is_hide_a')[0].checked) {
                joinarea1_is_hide = 'none';
            }
            joinlanguage=$('#third_level')[0].value;

            data='joinimglist1=';
            data+=joinimglist1;
            data+='&';
            data+='joinarea1_is_hide=';
            data+=joinarea1_is_hide;
            data+='&';
            data+='joinarea1_is_auto=';
            data+=joinarea1_is_auto;
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
function $savesinglevideo(imgid){
    imgsequence=$('#'+imgid+'_sequence')[0].value;
    $.ajax({
        type:"post",
        data: 'id='+imgid+'&sequence='+imgsequence,
        url:"Pagemanager/savesinglevideo",
        success: function(result)
        {
            alert('保存成功！');
            $changetags('videolist');
            //$('#relatedvideoarea').html(result);
        },
        error: function()
        {
            alert("ajax error");
        }
    });
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
    $.ajax({
        type:"post",
        data: 'music_id='+$('#musicid')[0].value+'&shower='+$('#showers')[0].value+'&season'+$('#displayseason')[0].value+'&time'+$('#displaytime')[0].value+'&location'+$('#displaylocation')[0].value,
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