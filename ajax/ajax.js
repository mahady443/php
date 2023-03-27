jQuery(document).ready(function(){

    jQuery(document).on('click','.save',function(){
        var name = jQuery(".name").val();
        var reg = jQuery(".reg").val();
        var email = jQuery(".email").val();
        var phone = jQuery(".phone").val();
        var status = jQuery(".status").val();
        
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
               jQuery(".msg").html('<div class="alert alert-success">'+response+'</div>');
               jQuery(".msg").fadeOut("slow");
                jQuery(".name").val('');
                jQuery(".reg").val('');
                jQuery(".email").val('');
                jQuery(".phone").val('');
                jQuery(".status").val('');
                show();
            }
        
        });
    
    });

    jQuery(document).on('click','#delete',function(){
        var id = jQuery(this).val();
            jQuery("#delete-item").modal('show');
            jQuery(".btn-delete").val(id);
       
    });
    jQuery(document).on('click','.btn-delete',function(){
    
        var id = jQuery(this).val();
        jQuery.ajax({
            url:"process.php",
            type:"POST",
            data:{
                id: id,
                action:"delete"
            },
            success:function(response){
                
                show();
                jQuery("#delete-item").modal('hide');
            }
        });
    });

    jQuery(document).on('click','.active',function(){
        
        var id = jQuery(this).val();
        jQuery.ajax({
            url:"process.php",
            type:"POST",
            data:{
                id:id,
                action:"active"
            },
            success:function(response){
                show();
            
            }
        });
        
    
    });
    jQuery(document).on('click','.inactive',function(){
        
        var id = jQuery(this).val();
        jQuery.ajax({
            url:"process.php",
            type:"POST",
            data:{
                id:id,
                action:"inactive"
            },
            success:function(response){
                show();
            
            }
        });
        
    
    });

    jQuery(document).on('click','#edit',function(){
        jQuery(".save").css({'display':'none'});
        jQuery(".update").css({'display':'block'});

        var id = jQuery(this).val();
        jQuery(".update").val(id);

        jQuery.ajax({
            url:"process.php",
            type:"POST",
            dataType:"JSON",

            data:{
                id:id,
                action:"searchData",
            
            },
            success: function(response){
                jQuery(".name").val(response.name);
                jQuery(".reg").val(response.reg);
                jQuery(".email").val(response.email);
                jQuery(".phone").val(response.phone);
                jQuery(".status").val(response.status);
            }
        
        });

    });


    jQuery(document).on('click','.update',function(){

        var id = jQuery(this).val();
        var name = jQuery(".name").val();
        var reg = jQuery(".reg").val();
        var email = jQuery(".email").val();
        var phone = jQuery(".phone").val();
        var status = jQuery(".status").val();

        jQuery.ajax({
            url:"process.php",
            type:"POST",
            data:{
                id:id,
                name:name,
                reg:reg,
                email:email,
                phone:phone,
                status:status,
                action:"update"

            },
            success: function(response){
                if(response=="200"){
                show();
                jQuery(".msg").html('<div class="alert alert-success">Update Successfully</div>');
                jQuery(".name").val('');
                jQuery(".reg").val('');
                jQuery(".email").val('');
                jQuery(".phone").val('');
                jQuery(".status").val('');
                jQuery(".save").css({'display':'block'});
                jQuery(".update").css({'display':'none'});
                
                
                }
                else{
                    jQuery(".msg").html('<div class="alert alert-danger">Not Update</div>');
                }
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