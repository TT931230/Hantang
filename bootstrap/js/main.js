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
    var d=$a(elementid);
    if(d.style.display=='none'){
        $D(elementid);
    }else{
        $D2(elementid);
    }
}
function $removesingle(id){
    var div=$a('searchdetailarea');
    var div2=$a(id);
    console.log(div2);
    $a(div2.id.split('___')[0]).checked=false;
    div.removeChild(div2);
}

function $addcontent(oid){
    var div=$a('searchdetailarea');
    var checkbox=$a(oid);
    div.innerHTML +="<div id='"+oid+"___"+checkbox.value+"' class='searchcontentdiv' onclick='$removesingle(\""+oid+"___"+checkbox.value+"\")'>"+checkbox.value+"<span class='glyphicon glyphicon-remove iconcust'></span></div>";
}
function $removecontent(oid){
    var div=$a('searchdetailarea');
    var checkbox=$a(oid);
    var div2 =$a(oid+'___'+checkbox.value);
    div.removeChild(div2);
}

function $searchcontent(oid){
    var checkbox=$a(oid);
    if(checkbox.checked){
        $addcontent(oid);
    }else{
        $removecontent(oid);
    }
}

function $reset(){
    var div=$a('searchdetailarea');
    var divlist = div.childNodes;
    for(var i=divlist.length-1;i>0;i--){
        if(divlist[i].id!='searchreset'&&divlist[i].id!='searchcommit'&&divlist[i].id!='searchinput'&&divlist[i].id)
        {
            $a(divlist[i].id.split('___')[0]).checked=false;
            div.removeChild(divlist[i]);
        }
    }
}