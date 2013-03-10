jQuery(function()
{
    loadData(0);
});

function loadData(parentId)
{
    //jQuery('#browser').hide();
    jQuery.ajax({
        url : '/m/Category/select.ajax',
        type : 'POST',
        data : 'parentId=' + parentId,
        dataType : 'json',
        success : function(data) 
        {
            
        },
        complete : function(data) 
        {
            var clearData = jQuery.parseJSON(data.responseText);
            prepareHtml(clearData, parentId);
            catEvents();
            $("#browser").treeview({
                                            collapsed: true,
                                            animated:"fast"
                                        });             
        } // end of complete 
    });
}

function prepareHtml(categories, parentId)
{
    var html = '';
    for(var i = 0; i < categories.length; i ++)
    {
        var aCategory = categories[i];
        if(aCategory.id != 0)
        {
            if(aCategory.lft + 1 != aCategory.Rgt) // has children
            {
                html += '<li><span class = "folder" title="' + aCategory.id +'">' + aCategory.name + 
                    '</span><ul title = ' + aCategory.id +'></ul></li>';
            }
            else
            {
                html += '<li><span class="file">' + aCategory.name +
                    '</span></span></li>';
            }
            
        }
    }
    jQuery("ul[title='" + parentId + "']").append(html);
    return;
}

function catEvents()
{
    jQuery(".folder").each(function(){
        jQuery(this).click(function(){
        loadData(jQuery(this).attr("title"));
    });
    });
    return;
}