function $changetags(tagname){




    $.ajax({
        type:"post",
        url:"pagemanager/"+tagname,
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