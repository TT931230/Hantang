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
    menu=$('#menu')[0].value;
    sequence=$('#sequence')[0].value;
    url=$('#url')[0].value;
    source_location=$('#source_location')[0].value;
    source_name=$('#source_name')[0].value;
    console.log(menu+sequence+url+source_location+source_name);
}

function $queryImage(){
    menu=$('#menu')[0].value;
    source_name=$('#source_name')[0].value;
    console.log(menu+source_name);
}
function $saveVideo(){
    menu=$('#menu')[0].value;
    sequence=$('#sequence')[0].value;
    url=$('#url')[0].value;
    source_location=$('#source_location')[0].value;
    source_name=$('#source_name')[0].value;
    videoimg
    keyword
    source_remark
    console.log(menu+sequence+url+source_location+source_name);
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

}
