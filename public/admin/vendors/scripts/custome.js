//This is for change password client side validation 
$(document).ready(function() {
            $("#change-password").validate({
                rules:      {  
                                current_password: {
                                    required: true,
                                    minlength: 6
                                },
                                password: {
                                    required: true,
                                    minlength: 6
                                },
                                confirmPassword: {
                                 required: true,
                                 equalTo: "#password"
                                }
                            },
                messages:   {
                                current_password: {
                                    required: "Current Password is required",
                                    minlength: "Password must be at least 6 characters"
                                },
                                password: {
                                    required: "New Password is required",
                                    minlength: "Password must be at least 6 characters"
                                },
                                confirmPassword: {
                                 required:  "Confirm password is required",
                                 equalTo: "New password and confirm password should same"
                                }
                            }
            });
});
 