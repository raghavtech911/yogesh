    $(document).ready(function() {
        $('#datetimePicker').datetimepicker({
        format : "YYYY-MM-DD hh:mm",
    });
        
    $('#basic_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },

        fields: {
            name: {
                validators: {
                    stringLength: {
                        min: 3,
                        message: 'Please enter minimum of 3 characters!'
                    },
                    notEmpty: {
                        message: 'Please enter your Full Name'
                    },
                    regexp: {
                        regexp: /[A-Za-z\s.'-]+$/,
                        message: "Alphabetical characters, hyphens and spaces"
                    }
                }
            },

            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },

            mobile: {
                validators: {
                    stringLength: {
                        max: 13,
                    },
                    notEmpty: {
                        message: 'Please enter 10 digit phone number!'
                    },
                    regexp: {
                        regexp: /[+91][1-9][0-9][1-9][0-9][1-9][0-9][1-9][0-9][1-9][0-9]/,
                        message: "Invalid Phone number! example: 9876543210"
                    }
                }
            },

            qualification: {
                validators: {
                    stringLength: {
                        min: 2,
                        message: 'Please enter minimum of 2 characters!'
                    },
                    notEmpty: {
                        message: 'Please enter your Qualification Details'
                    },
                    regexp: {
                        regexp: /[A-Za-z0-9\s.'-]+$/,
                        message: "Alphabetical characters, hyphens and spaces"
                    }
                }
            },

            appliedposition: {
                validators: {
                    stringLength: {
                        min: 2,
                        message: 'Please enter minimum of 2 characters!'
                    },
                    notEmpty: {
                        message: 'Please enter position you want to Apply!'
                    },
                    regexp: {
                        regexp: /[A-Za-z0-9\s.'-]+$/,
                        message: "Alphabetical characters, hyphens and spaces"
                    }
                }
            },

            date: {
                validators: {
                    notEmpty: {
                        message: 'Please enter in this field!'
                    },
                    date: {
                        format: 'YYYY-MM-DD h:m',
                        message: 'The value is not a valid date! Example: YYYY-MM-DD h:m'
                    }
                }
            },

            hr_update_comment: {
                validators: {
                    stringLength: {
                        min: 1,
                        message: 'Please enter minimum of 1 characters!'
                    },
                    notEmpty: {
                        message: 'Please fill in this field!'
                    },
                    regexp: {
                        regexp: /[A-Za-z0-9\s.'-]+$/,
                        message: "Alphabetical characters, hyphens and spaces"
                    }
                }
            },
           
            tech_can_currentctc: {
                validators: {
                    numeric: {
                    message: 'The value is not a valid number'
                    }
                }
            },

            tech_can_expectedctc: {
                validators: {
                    numeric: {
                    message: 'The value is not a valid number'
                    }
                }
            },
                 
            techview_update_comment: {
                validators: {
                    stringLength: {
                        min: 1,
                        message: 'Please enter minimum of 1 characters!'
                    },
                    notEmpty: {
                        message: 'Please fill in this field!'
                    },
                    regexp: {
                        regexp: /[A-Za-z0-9\s.'-]+$/,
                        message: "Alphabetical characters, hyphens and spaces"
                    }
                }
            },

            technical_hr_assign: {
                validators: {
                    notEmpty: {
                            message: 'Please select.'
                    }  
                }           
            },

            tech_can_skills: {
                validators: {
                    stringLength: {
                        min: 1,
                        message: 'Please enter minimum of 1 characters!'
                    },
                    notEmpty: {
                        message: 'This field can not be empty!'
                    },
                    regexp: {
                        regexp: /[A-Za-z0-9,.\s.'-]/,
                        message: "Alphabetical only!"
                    }
                }
            }

        }
    });
    $('#datetimePicker').on('dp.change dp.show', function(e) {
        $('#basic_form').bootstrapValidator('revalidateField', 'date');
    });
});

//  function checkemail()
// {
//  var email=document.getElementById( "email" ).value;
  
//  if(email)
//  {
//   $.ajax({
//   type: 'post',
//   url: 'logic.php',
//   data: {
//    email:email,
//   },
//   success: function (response) {
//    $( '#email_status' ).html(response);
//   }
//   });
//  }
//  else
//  {
//   $( '#email_status' ).html("");
//   return false;
//  }
// }