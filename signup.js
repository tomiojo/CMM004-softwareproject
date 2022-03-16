$(function(){
    var $signupform=$("#signupform");
    if($signupform.length){
        $signupform.validate({
            rules:{
                email:{
                    required:true
                },
                Password:{
                    required:true
                },
                Telephone:{
                    required:true
                }
            }, 
            message:{
                email:{
                    required:'Please enter a valid email'
                } ,
                
            }

        })
    }
})
