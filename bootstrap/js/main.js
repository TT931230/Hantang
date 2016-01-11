/**
 * Created by TT on 2016/1/11.
 */
function $(element){
    return element = document.getElementById(element);
}
function $D(elementid){
    var d=$(elementid);
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
    var d=$(elementid);
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
    var d=$(elementid);
    if(d.style.display=='none'){
        $D(elementid);
    }else{
        $D2(elementid);
    }
}

function $addcontent(oid){
    var div=$('searchdetailarea');
    var checkbox=$(oid);
    var div2 = document.createElement("span");
    div2.id =oid+checkbox.value;
    div2.className = 'searchcontentdiv';
    div2.innerHTML=checkbox.value+"<span class='glyphicon glyphicon-remove iconcust'/>";
    div.appendChild(div2);
}
function $removecontent(oid){
    var div=$('searchdetailarea');
    var checkbox=$(oid);
    var div2 =$(oid+checkbox.value);
    div.removeChild(div2);
}

function $searchcontent(oid){
    var checkbox=$(oid);
    if(checkbox.checked){
        $addcontent(oid);
    }else{
        $removecontent(oid);
    }
}
