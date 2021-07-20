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

            $("#exchange").validate({
                rules:      {  
                                name: {
                                    required: true,
                                    minlength: 6
                                },
                                url: {
                                    required: true,
                                },
                                logo: {
                                    required: true,
                                },
                                demo_id: {
                                    required: true,
                                    minlength: 6
                                },
                                password: {
                                    required: true,
                                    minlength: 5
                                },
                                sport: {
                                    required: true,
                                },
                                balance: {
                                    required: true,
                                }

                            },
                messages:   {
                                name: {
                                    required: "Exchange name is required",
                                    minlength: "Exchange name cannot be more than 6 characters"
                                },
                                url: {
                                    required: "Exchange URL is required",
                                },
                                logo: {
                                    required:  "Logo is required",
                                },
                                demo_id: {
                                    required: "Demo ID is required",
                                    minlength: "Demo ID must be at least 6 characters"
                                },
                                password: {
                                    required: "Password is required",
                                    minlength: "Password must be at least 6 characters"
                                },
                                sport: {
                                    required:  "Sport is required",
                                },
                                balance: {
                                    required:  "Balance is required",
                                }
                            }
            });
});
 