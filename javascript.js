// Site Javascript

//collapsible div for Portfolio.html
animatedcollapse.addDiv('design', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('design2', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('design3', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('design4', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('design5', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('free1', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('free2', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('free3', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('free4', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('print', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('print2', 'fade=1,height=200px,hide=0')
animatedcollapse.addDiv('print3', 'fade=1,height=200px,hide=0')

animatedcollapse.addDiv('cat', 'fade=0,speed=400,group=pets')
animatedcollapse.addDiv('dog', 'fade=0,speed=400,group=pets,persist=1,hide=1')
animatedcollapse.addDiv('rabbit', 'fade=0,speed=400,group=pets,hide=1')

animatedcollapse.init()











//validation for Contact.html

$(document).ready(function(){
    
            
$("#submit_btn").click(function(){                                          
        $(".error").hide();
        var hasError = false;
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,})?$/; // Longest TLD is currently 8 characters, so probably should have no limit
        //var phoneReg = '';
        var emailVal = $("#email").val();
        if(emailVal == '') {
            $("#email").after('<span class="error">Please Enter a email address.</span>');
            hasError = true;
        } else if(!emailReg.test(emailVal)) {    
            $("#email").after('<span class="error">Email Address is invalid.</span>');
            hasError = true;
        } else {
            $("#email").after('');
        }
        
        var nameVal = $("#name").val();
        if(nameVal == '') {
            $("#comments").after('<span class="error">Please Enter your Comments or Questions.</span>');
            hasError = true;
        } else {
            $("#name").after('');
        }
         
        var commentsVal = $("#comments").val();
        if(commentsVal == '') {
            $("#comments").after('<span class="error">Please Enter your Comments or Questions.</span>');
            hasError = true;
        } else {
            $("#comments").after('');
        }
 
        if(hasError == false) {
            $("#contact-form form").hide("slow");
            $('#message').html("<p>Loading</p>");
            
            $.ajax({
                type: "POST",
                url: "securemail.php",
                dataType: 'json',
                data: {name:nameVal,email:emailVal,comments:commentsVal},
                success: function(data, textStatus) {
                    if (data.name_error) {
                        $("#name").after('<span class="name">' + data.email_error + '</span>');
                    }
                    if (data.email_error) {
                        $("#email").after('<span class="error">' + data.email_error + '</span>');
                    }
                    if (data.comments_error) {
                        $("#comments").after('<span class="error">' + data.comments_error + '</span>');
                    }
                    if (data.error) {
                        $('#message').html("<h2 style='text-align:center; padding-top:1em;'>" + data.error + "</h2>");
                    } else {
                        $('#message').html("");
                    }
                    if (!data.sent) {
                        $("#contact-form form").show("slow");
                    } else {
                        $('#message').html("<h2 style='text-align:center; padding-top:1em;'>Contact Form Submitted!</h2>")  
                        .append("<p style='text-align:center; float:none; width:auto; padding-bottom:1em;'>BeLink'd Design will contact you as soon as possible!</p>")  
			.hide()
                        .fadeIn(1500, function() { $('#message').append("<img id='checkmark' src='/images/check.png' />"); });  
                    }
                },
                error: function (XMLHttpRequest, textStatus, errorThrown) {
                    $('#message').html("<h2 style='text-align:center; padding-top:1em;'>Contact Form Error!</h2>");
                    $("#contact-form form").show("slow");
                }
            });
            return false;
        }
    });                           
});