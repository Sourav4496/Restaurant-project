

$(document).ready(function () {

    $("#cat").on('change',function () {
        var category = $("#cat").val();
        // alert(category);
        
        
        $.ajax({
            url:"customjs.php",
            type:"POST",
            data: {
                
                cat:category,
                action:'cat',
                
            },
            success: function(data){
                // alert(data);
                    $("#item").html(data);
  
                },
        });
    });
    
    $(document).on('change',"#cate",function () {
        var items = $("#cate").val();
        // alert(items);
        
        
        $.ajax({
            url:"customjs.php",
            type:"POST",
            data: {
                
                item:items,
                action:'price',
                
            },
            success: function(data){
                    $("#price").html(data);
  
                },
        });
    });

    

});

