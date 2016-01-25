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
    $.ajax({
        type:"post",
        data: "source_location="+source_location+"&source_name="+source_name+"&source_remark="+source_remark,
        url:"PageManager/saveImage",
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
        data: "source_location="+source_location+"&source_name="+source_name+"&source_remark="+source_remark+"&videoimg="+videoimg+"&keyword="+keyword+"&third_level="+third_level,
        url:"PageManager/saveVideo",
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
                url:"PageManager/gethomeinfo",
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
                url:"PageManager/gethomeinfo",
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
function $queryVideo(){
    menu=$('#menu')[0].value;
    source_name=$('#source_name')[0].value;
    console.log();
}
function $queryLogo(){
    keyword
    keyword_remark
    source_name
}
function $saveLogo(){
    keyword
    keyword_remark
    source_name
}
function $saveMusic(){
    source_name
    keyword
    keyword_season
    keyword_time
    sequence
    menu
    source_remark
    keyword_remark
}
function $queryMusic(){
    source_name
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
            if($('#is_hide_a').checked) {
                homearea1_is_hide = 'none';
            }
            if($('#is_auto_a').checked) {
                homearea1_is_auto = 'false';
            }
            homeimglist2='';
            $("#source_name_b option:selected").each(function(){
                homeimglist2+=$(this)[0].value+'|||';
            });
            if($('#is_hide_b').checked) {
                homearea2_is_hide = 'none';
            }
            if($('#is_auto_b').checked) {
                homearea2_is_auto = 'false';
            }
            homeimglist3='';
            $("#source_name_c option:selected").each(function(){
                homeimglist3+=$(this)[0].value+'|||';
            });
            if($('#is_hide_c').checked) {
                homearea3_is_hide = 'none';
            }
            if($('#is_auto_c').checked) {
                homearea3_is_auto = 'false';
            }
            homeimglist4='';
            $("#source_name_d option:selected").each(function(){
                homeimglist4+=$(this)[0].value+'|||';
            });
            if($('#is_hide_d').checked) {
                homearea4_is_hide = 'none';
            }
            if($('#is_auto_d').checked) {
                homearea4_is_auto = 'false';
            }
            third_level=$('#third_level')[0].value;

            data='homeimglist1=';
            data+=homeimglist1;
            data+='&';
            data='homeimglist2=';
            data+=homeimglist2;
            data+='&';
            data='homeimglist3=';
            data+=homeimglist3;
            data+='&';
            data='homeimglist4=';
            data+=homeimglist4;
            data+='&';
            data='homearea1hide=';
            data+=homearea1_is_hide;
            data+='&';
            data='homearea2hide=';
            data+=homearea2_is_hide;
            data+='&';
            data='homearea3hide=';
            data+=homearea3_is_hide;
            data+='&';
            data='homearea4hide=';
            data+=homearea4_is_hide;
            data+='&';
            data='homearea1auto=';
            data+=homearea1_is_auto;
            data+='&';
            data='homearea2auto=';
            data+=homearea2_is_auto;
            data+='&';
            data='homearea3auto=';
            data+=homearea3_is_auto;
            data+='&';
            data='homearea4auto=';
            data+=homearea4_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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
            if($('#is_hide_a').checked) {
                aboutarea1_is_hide = 'none';
            }
            if($('#is_auto_a').checked) {
                aboutarea1_is_auto = 'false';
            }
            aboutimglist2=$('#source_name_b')[0].value;
            if($('#is_hide_b').checked) {
                aboutarea2_is_hide = 'none';
            }
            if($('#is_auto_b').checked) {
                aboutarea2_is_auto = 'false';
            }
            aboutimglist3=$('#source_name_c')[0].value;
            if($('#is_hide_c').checked) {
                aboutarea3_is_hide = 'none';
            }
            if($('#is_auto_c').checked) {
                aboutarea3_is_auto = 'false';
            }
            third_level=$('#third_level')[0].value;

            data='aboutimglist1=';
            data+=aboutimglist1;
            data+='&';
            data='aboutimglist2=';
            data+=aboutimglist2;
            data+='&';
            data='aboutimglist3=';
            data+=aboutimglist3;
            data+='&';
            data='aboutarea1hide=';
            data+=aboutarea1_is_hide;
            data+='&';
            data='aboutarea2hide=';
            data+=aboutarea2_is_hide;
            data+='&';
            data='aboutarea3hide=';
            data+=aboutarea3_is_hide;
            data+='&';
            data='aboutarea1auto=';
            data+=aboutarea1_is_auto;
            data+='&';
            data='aboutarea2auto=';
            data+=aboutarea2_is_auto;
            data+='&';
            data='aboutarea3auto=';
            data+=aboutarea3_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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
            if($('#is_hide_a').checked) {
                platformarea1_is_hide = 'none';
            }
            platformimglist2=$('#source_name_b')[0].value;
            if($('#is_hide_b').checked) {
                platformarea2_is_hide = 'none';
            }
            platformimglist3=$('#source_name_c')[0].value;
            if($('#is_hide_c').checked) {
                platformarea3_is_hide = 'none';
            }
            third_level=$('#third_level')[0].value;

            data='platformimglist1=';
            data+=platformimglist1;
            data+='&';
            data='platformimglist2=';
            data+=platformimglist2;
            data+='&';
            data='platformimglist3=';
            data+=platformimglist3;
            data+='&';
            data='platformarea1hide=';
            data+=platformarea1_is_hide;
            data+='&';
            data='platformarea2hide=';
            data+=platformarea2_is_hide;
            data+='&';
            data='platformarea3hide=';
            data+=platformarea3_is_hide;
            data+='&';
            data='platformarea1auto=';
            data+=platformarea1_is_auto;
            data+='&';
            data='platformarea2auto=';
            data+=platformarea2_is_auto;
            data+='&';
            data='platformarea3auto=';
            data+=platformarea3_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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
            if($('#is_hide_a').checked) {
                partnerarea1_is_hide = 'none';
            }
            if($('#is_auto_a').checked) {
                partnerarea1_is_auto = 'false';
            }
            partnerlanguage=$('#third_level')[0].value;

            data='partnerimglist1=';
            data+=partnerimglist1;
            data+='&';
            data='partnerarea1hide=';
            data+=partnerarea1_is_hide;
            data+='&';
            data='partnerarea1auto=';
            data+=partnerarea1_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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
            if($('#is_hide_a').checked) {
                ularea1_is_hide = 'none';
            }
            if($('#is_auto_a').checked) {
                ularea1_is_auto = 'false';
            }
            ullanguage=$('#third_level')[0].value;

            data='ulimglist1=';
            data+=ulimglist1;
            data+='&';
            data='ularea1hide=';
            data+=ularea1_is_hide;
            data+='&';
            data='ularea1auto=';
            data+=ularea1_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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
            if($('#is_hide_a').checked) {
                awoearea1_is_hide = 'none';
            }
            if($('#is_auto_a').checked) {
                awoearea1_is_auto = 'false';
            }
            awoelanguage=$('#third_level')[0].value;

            data='awoeimglist1=';
            data+=awoeimglist1;
            data+='&';
            data='awoearea1hide=';
            data+=awoearea1_is_hide;
            data+='&';
            data='awoearea1auto=';
            data+=awoearea1_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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
            if($('#is_hide_a').checked) {
                musicarea1_is_hide = 'none';
            }
            if($('#is_auto_a').checked) {
                musicarea1_is_auto = 'false';
            }
            musiclanguage=$('#third_level')[0].value;

            data='musicimglist1=';
            data+=musicimglist1;
            data+='&';
            data='musicarea1hide=';
            data+=musicarea1_is_hide;
            data+='&';
            data='musicarea1auto=';
            data+=musicarea1_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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
            if($('#is_hide_a').checked) {
                joinarea1_is_hide = 'none';
            }
            joinlanguage=$('#third_level')[0].value;

            data='joinimglist1=';
            data+=joinimglist1;
            data+='&';
            data='joinarea1hide=';
            data+=joinarea1_is_hide;
            data+='&';
            data='joinarea1auto=';
            data+=joinarea1_is_auto;
            data+='&';
            data='areatype=';
            data+=areatype;
            data+='&';
            data='arealanguage=';
            data+=third_level;
            $.ajax({
                type:"post",
                data: data,
                url:"PageManager/updateareainfo",
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

function $savebrand(){

}
function $deletebrand(){

}
