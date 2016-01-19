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