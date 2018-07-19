$(document).ready(function () 
{
	$('#first').keyup(function () {
        var first = $('#first');
        var regex = /^[a-zA-Z]+$/;
        if(!(first.val().match(regex)))
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
        var regex = /^[a-zA-Z]+$/;
        if(!(last.val().match(regex)))
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
            $('#confirmdiv').text('password and confirm password is not matched');
            return false;
        }
        else
        {
            $('#confirmdiv').html("<span style='color: green' >password matched</span>");
        }
    });

    $('#dob').change(function () {
       var dob = $('#dob');
       var dobRejex1 = /^\s*((31([-/ ])((0?[13578])|(1[02]))\3(\d\d)?\d\d)|((([012]?[1-9])|([123]0))([-/ ])((0?[13-9])|(1[0-2]))\12(\d\d)?\d\d)|(((2[0-8])|(1[0-9])|(0?[1-9]))([-/ ])0?2\22(\d\d)?\d\d)|(29([-/ ])0?2\25(((\d\d)?(([2468][048])|([13579][26])|(0[48])))|((([02468][048])|([13579][26]))00))))\s*$/;
    if(!(dob.val().match(dobRejex)))
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
        var first = $('#first');
       var regex = /^[a-zA-Z]+$/;
        var last = $('#last');
        var email = $('#email');
        var user = /^\S*$/;
        var pas = $('#pas');
        var confirm = $('#cpas');
        var dob = $('#dob');
        var loc1 = $('#loc1');
        var loc2 = $('#loc2');
        var loc3 = $('#loc3');
        var loc4 = $('#loc4');
        var phone = $('#phone');
       var phoneRejex1 = /^[0-9]{10}$/;
        var location = $('#location');
      if(first.val() == "" || last.val()=="" || user.val()==""|| email.val()=="" || pas.val() == "" || 
        confirm.val() == "" || dob.val()=="" || phone.val() == "" ||loc1.val() == "" 
        ||loc2.val() == "" ||loc3.val() == "" ||loc4.val() == "" || location.val() == ""
            || img.val() == ""|| lic.val() == ""){
          alert('Any of fields can not be empty');
          return false;
      }
      });
});



