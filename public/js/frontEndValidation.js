$().ready(function(){
    $("#signupForm").validate({
        rules:{
            username: {
                required: true,
                maxlength: 15
            },
            password: {
                required: true,
                maxlength: 20
            },
            confirmPassword:{
                required: true,
                equalTo: "#password"
            },
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            username: "<br><font color=red>This field is required</font>",
            password: "<br><font color=red>This field is required</font>",
            confirmPassword: "<br><font color=red>Please enter the same value again</font",
            email: "<br><font color=red>This field is required</font>"
        }
    })
});

