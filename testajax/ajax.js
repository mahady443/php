jQuery(document).ready(function(){
    
    jQuery(document).on('click','.save',function(){
        let name = jQuery('.name').val();
        let reg= jQuery('.reg').val();
        let email= jQuery('.name').val();
        let phone= jQuery('.phone').val();
        let status= jQuery('.status').val();

        jQuery.ajax({
            url:"process.php",
            type:"POST",
            data:{
                name:name,
                reg:reg,
                email:email,
                phone:phone,
                status:status,
                action:"insert"
            },
            success:function(response){
                jQuery(".msg").html('<div class="alert alert-success">Data Submited</div>');
                jQuery(".msg").fadeOut("slow");
                jQuery(".name").val('');
                jQuery(".reg").val('');
                jQuery(".email").val('');
                jQuery(".phone").val('');
                jQuery(".status").val('');
            }
        
        
        });

        
    
    
    });
    show();
        function show(){
            jQuery.ajax({
                url:"process.php",
                type:"POST",
                data:{
                    
                    action:"show"
                },
                success:function(response){
                    jQuery(".t-data").html(response);
                }
            
            });
        }


});