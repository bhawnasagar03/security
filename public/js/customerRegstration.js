$(document).ready(function () 
    {
    	$('#first').keyup(function () {
            var first = $('#first');
            var fregex = /^[a-zA-Z]+$/;
            if(!(first.val().match(fregex)))
            {
                $('#firstname').text('first name should only contain characters');
                return false;
            }
             else
            {
                $('#firstname').html("<span style='color: green'>OK</span>");
            }
         });


    	$('#last').keyup(function () {
            var last = $('#last');
            var lregex = /^[a-zA-Z]+$/;
            if(!(last.val().match(lregex)))
            {
                $('#lastname').text('last name should only contain characters');
                return false;
                            
            }
            else
            {
                $('#lastname').html("<span style='color: green'>OK</span>");
            }
        });

        $('#email').keyup(function () {
            var email = $('#email');
            var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            if(!(email.val().match(emailregex)))
            {
                $('#emailDiv').text('Invalid email address');

                return false;
                            
            }
            else
            {
                $('#emailDiv').html("<span style='color: green'>OK</span>");
            }
        });

        $('#pas').keyup(function () {
            var pas = $('#pas');
            var pasRejex = /^(((?=.*[a-z])(?=.*[A-Z]))|((?=.*[a-z])(?=.*[0-9]))|((?=.*[A-Z])(?=.*[0-9])))(?=.{6,})/;
            if ((pas.val().match(pasRejex)))
            {

                $('#pasdiv').html("<span style='color: green'>strong password</span>");

            }
            else
            {
                $('#pasdiv').text('week password');
            }
        });

        $('#cpas').keyup(function () {
            var pas = $('#pas');
           var cpas = $('#cpas');
            if(pas.val()!=cpas.val()){
                $('#confirmdiv').text(' password not matched');
                return false;
            }
            else
            {
                $('#confirmdiv').html("<span style='color: green' >password matched</span>");
            }
        });

        $('#dob').change(function () {
           var dob = $('#dob').val();
          var myDate = new Date(dob);
          var today = new Date();
        if(myDate>=today)
            {
                $('#dobdiv').text('dob not valid');
            
                return false;

            }
            else
            {
                 $('#dobdiv').html("<span style='color: green; font-size: 16px; font-weight: bolder'>ok</span>")
            }

        });

        $('#phone').keyup(function () {
           var phone1 = $('#phone');
           var phoneRejex1 = /^[0-9]{10}$/;
        if(!(phone1.val().match(phoneRejex1)))
            {
                $('#phonediv').text('Phone number should contain only 10 digits');
                return false;
            }
            else
            {
                $('#phonediv').html("<span style='color: green; font-size: 16px; font-weight: bolder'>ok</span>")
            }
        });


        $('#gender').keyup(function () {
           var gender = $('#gender');
        if(gender.val()="")
            {
                $('#gendiv').text('Please select Gender');
                return false;
            }
            else
            {
                $('#gendiv').html("<span style='color: green; font-size: 16px; font-weight: bolder'>ok</span>")
            }
        });

        $('#loc1').keyup(function () {
            var loc1 = $('#loc1');
            var loc1regex = /^[a-zA-Z]+$/;
            if(!(loc1.val().match(loc1regex)))
            {
                $('#loc1Div').text('enter a valid location');
                return false;
            }
             else
            {
                $('#loc1Div').html("<span style='color: green'>OK</span>");
            }
         });

        $('#loc2').keyup(function () {
            var loc2 = $('#loc2');
            var loc2regex = /^[a-zA-Z]+$/;
            if(!(loc2.val().match(loc2regex)))
            {
                $('#loc2Div').text('enter a valid location');
                return false;
            }
             else
            {
                $('#loc2Div').html("<span style='color: green'>OK</span>");
            }
         });

        $('#loc3').keyup(function () {
            var loc3 = $('#loc3');
            var loc3regex = /^[a-zA-Z]+$/;
            if(!(loc3.val().match(loc3regex)))
            {
                $('#loc3Div').text('enter a valid location');
                return false;
            }
             else
            {
                $('#loc3Div').html("<span style='color: green'>OK</span>");
            }
         });

        $('#loc4').keyup(function () {
            var loc4 = $('#loc4');
            var loc4regex = /^[a-zA-Z]+$/;
            if(!(loc4.val().match(loc4regex)))
            {
               // $('#firstname').text('first name should only contain characters');
                $('#loc4Div').text('enter a valid location');
                return false;
            }
             else
            {
                $('#loc4Div').html("<span style='color: green'>OK</span>");
            }
         });

         $('#img').change(function () {

                   var val = $("#img").val().toLowerCase(),
                       regex = new RegExp("(.*?)\.(jpeg|jpg|png)$");

                   if (!(regex.test(val))) {
                       $(this).val('');
                       $('#attachResult').val('');
                       $('#attachResult').html('only jpg, jpeg and png image allow');
                       return false;
                   }
                    else
                   {
                       $('#attachResult').html("<span style='color: green'>OK</span>");
                   }

           });


         $('#lic').change(function () {

                   var val = $("#lic").val().toLowerCase(),
                       regex = new RegExp("(.*?)\.(pdf)$");

                   if (!(regex.test(val))) {
                       $(this).val('');
                       $('#attach2').val('');
                       $('#attach2').html('only pdf allow');
                       return false;
                   }
                    else
                   {
                       $('#attach2').html("<span style='color: green'>OK</span>");
                   }

           });


        $('#sub').click(function () {
            var first   = $('#first');
            var fregex = /^[a-zA-Z]+$/;
            var regex    = /^[a-zA-Z]+$/;
            var last    = $('#last');
            var email   = $('#email');
            var emailregex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            var pas     = $('#pas');
            var confirm = $('#cpas');

            var dob     = $('#dob');
            var dobv = $('#dob').val();
            var myDate = new Date(dobv);
            var today = new Date();
            
            var phone   = $('#phone');
            var phoneRejex1 = /^[0-9]{10}$/;
            var gender  = $('#gender');
            var location = $('#location');
            var locregex = /^[a-zA-Z]+$/;
            var loc1    = $('#loc1');
            var loc2    = $('#loc2');
            var loc3    = $('#loc3');
            var loc4    = $('#loc4');
            var jobType = $('#jobType');
            var profession = $('#profession');
            var qualification = $('#qualification');           
            var language = $('#language');           
            var lic = $('#lic');          
            var img = $('#img');           
           
            



    // if(first.val() == "" || phone.val() == "" ||loc1.val() == "" ||loc2.val() == "" ||loc3.val() == "" ||loc4.val() == "")
    //         {
    //           alert('Any of fields can not be empty');
    //           return false;
    //       }

     if (!(first.val().match(regex))||first.val()=="") {
      $('#firstname').text('First name requried and valid name');
        return false;
    }

     if (!(last.val().match(regex))||last.val()=="") {
      $('#lastname').text('Last name requried and not valid');
        return false;
    }

    if (!(email.val().match(emailregex))||email.val() =="") {

      //  alert(' email requried');
      $('#emailDiv').text('email requried or invalid email');
        return false;
    }

     if (pas.val() == "") {
      $('#pasdiv').text('Password Requried');
        return false;
    }

     if (pas.val()!=confirm.val()||confirm.val() == "") {
      $('#confirmdiv').text(' password does not match');
        return false;
    }

    if (dob.val()==""||myDate>=today) {

        //  alert(' email requried');
      $('#dobdiv').text('dob requried & not valid');
        return false;
    }

    if (!(phone1.val().match(phoneRejex1))||phone.val() == "") {
      $('#phonediv').text('Phone number requried only numbers');
        return false;
    }

    if (gender.val() == "") {
          $('#gendiv').text('select a gender');
            return false;
        }


    if (location.val() == "") {
      $('#locdiv').text('select a location');
        return false;
    }

    if(!(loc1.val().match(locregex))||loc1.val() == "") {
      $('#loc1Div').text('Enter first location');
        return false;
    }

    if(!(loc2.val().match(locregex))||loc2.val() == "") {
      $('#loc2Div').text('Enter second  location');
        return false;
    }

    if(!(loc3.val().match(locregex))||loc3.val() == "") {
      $('#loc3Div').text('Enter third location');
        return false;
    }

    if(!(loc1.val().match(locregex))||loc4.val() == "") {
      $('#loc4Div').text('Enter fourth location');
        return false;
    }



    if(jobType.val() == "") {
      $('#jobdiv').text('select job type');
        return false;
    }
    if(profession.val() == "") {
      $('#professiondiv').text('Enter your ex-profession');
        return false;
    }
   
    if(qualification.val() == "") {
      $('#quadiv').text('Qualification Requried');
        return false;
    }

    if(language.val() == "") {
      $('#lang').text('Language Requried');
        return false;
    }

    if(lic.val() == "") {
      $('#attach2').text('Licence Requried');
        return false;
    }

    if(img.val() == "") {
      $('#attachResult').text('Upload Profile picture');
        return false;
    }

    

    });
});
