$(document).ready(function(){


	$('#details-tab a').on('click', function (e) {
	  e.preventDefault();
	  $(this).tab('show');
	});


	$("#pickup-next").on("click", function(e)	{
		var $tab = $(".tab-pane:visible");

		var valid = true;
		$('input, select', $tab).each(function(i, v) {
				$(this).trigger('focusout');
		});

		valid = $tab.find(".has-error").length == 0 ? true : false;

		if(!valid) {
			 return;
		}
var pickupdate = Date.parse(document.getElementById("datepicker").value);
console.log(pickupdate);

       
    $("a[href='#drop']").tab("show");
	});


	$("#drop-previous").on("click", function(e){
		$("a[href='#pickup']").tab("show");
	});

	$("#drop-next").on("click", function(e){
        var $tab = $(".tab-pane:visible");

        var valid = true;
        $('input', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;

        if(!valid) {
             return;
        }
		$("a[href='#profile']").tab("show");
	});

    $("#profile-previous").on("click", function(e){
        $("a[href='#drop']").tab("show");
    });

    $("#profile-next").on("click", function(e){
        var $tab = $(".tab-pane:visible");

        var valid = true;
        $('input', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;

        if(!valid) {
             return;
        }
        /*$('#otpModal').modal('show');*/
        var usermobile = document.getElementById("usermobile").value;
        var username = document.getElementById("username").value;
        //append country code to mobile
        var mobile = "91".concat(usermobile);
        var data = {mobile: mobile, usermobile: usermobile, username: username};
        console.log(usermobile);
        $.ajax({
            type: "POST",
            dataType:'json',
            data: data,
            url: "http://pacemove.com/code/testsendotp.php",
            data: data,
            success: function(data) {
                if (data != 'localhost') {
                    alert('Please check the number');
                    
                }
                else {
                    $('#otpModal').modal('show');
                    console.log("returnedData", data);        
                }
            
            },
            error: function(data) {
            window.location = "http://pacemove.com/code/details.php";
            console.log("error", data);
            }
        });
    });

    $("#btn-otp-submit").on("click", function(e){
        var $tab = $(".modal:visible");

        var valid = true;
        $('input', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;

        if(!valid) {
             return;
        }
        var usermobile = document.getElementById("usermobile").value;
        var username = document.getElementById("username").value;
        var useremail = document.getElementById("useremail").value;
        var pickupLocationApartment = document.getElementById("pickupLocationApartment").value;
        var pickupfloor = document.getElementById("pickupfloor").value;
        var pickuplift = document.getElementById("pickuplift").value;
        var dropLocationApartment = document.getElementById("dropLocationApartment").value;
        var dropfloor = document.getElementById("dropfloor").value;
        var droplift = document.getElementById("droplift").value;
 var pickupdate = Date.parse(document.getElementById("datepicker").value);
console.log(pickupdate);

        //append country code to mobile
        var mobile = "91".concat(usermobile);
        var otp = document.getElementById("otp").value;
        console.log(mobile,username,useremail,pickupLocationApartment,pickupdate,dropLocationApartment);

        var data = {mobile: mobile,
                    otp: otp,
                    usermobile: usermobile,
                    username: username,
                    useremail: useremail,
                    pickupLocationApartment: pickupLocationApartment,
                    pickupfloor: pickupfloor,
                    pickuplift: pickuplift,
                    droplift: droplift,
                    dropfloor: dropfloor,
                    dropLocationApartment: dropLocationApartment,
                    pickupdate: pickupdate};
        //console.log(pickuplift,pickupfloor,pickupLocationApartment);
        $.ajax({
            type: "POST",
            dataType:'json',
            url: "http://pacemove.com/code/testverifyotp.php",
            data: data,
            success: function(data) {
            console.log("success", data);
            if(data == 'error'){
               alert("Please verify your OTP!");
            }
            else{
               window.location = "http://pacemove.com/code/movables.php";
            }
            },
            error: function(data) {
            console.log("error", data);
            }
        });
    });

$('#datepicker').datepicker({  
        format: "D M dd yyyy",
startDate: '+0d',
   autoclose: true
}) ;       
  
     $('#trackpickupdate').datepicker({
     
         format: "D M dd yyyy",
startDate: '+0d',
   autoclose: true
    
    });


    $("#track-profile-next").on("click", function(e){
        var $tab = $(".tab-pane:visible");

        var valid = true;
        $('input, select', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;

        if(!valid) {
             return;
        }
        var username = document.getElementById("username").value;
        var useremail = document.getElementById("useremail").value;
        var data = {
                    username: username,
                    useremail: useremail
                    };
        //console.log(pickuplift,pickupfloor,pickupLocationApartment);
        $.ajax({
            type: "POST",
            dataType:'json',
            url: "http://pacemove.com/code/trackinsertuser.php",
            data: data,
            success: function(data) {
            console.log("success", data);
            $("a[href='#trackpickup']").tab("show");
            },
            error: function(data) {
            console.log("error", data);
            }
        });
        
    });

    $("#trackpickupnext").on("click", function(e){
        var $tab = $(".tab-pane:visible");

        var valid = true;
        $('input, select', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;

        if(!valid) {
             return;
        }
console.log(document.getElementById("trackpickupdate").value);
        $("a[href='#drop']").tab("show");
    });

    $("#trackdropprevious").on("click", function(e){
        $("a[href='#trackpickup']").tab("show");
    });

   
    $("#header-track-next").on("click", function(e){
        var $tab = $(".tab-pane:visible");

        var valid = true;
        $('input, select', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;
        console.log(valid);
        if(!valid) {
             return;
        }
        var usermobile = document.getElementById("header-track-user-mobile").value;
        //append country code to mobile
        var mobile = "91".concat(usermobile);
        var data = {mobile: mobile, usermobile: usermobile};
        console.log(usermobile);
        $.ajax({
            type: "POST",
            dataType:'json',
            data: data,
            /*url: "http://pacemove.com/code/testsendotp.php", */
            url: "http://pacemove.com/code/tracksendotp.php",
            data: data,
            success: function(data) {
                if (data != 'localhost') {
                    alert('Please check the number. 10 Digit mobile number is required.');
                    
                }
                else {
                    $("a[href='#track-otp-modal']").tab("show");
                    console.log("returnedData", data);        
                }
            },
            error: function(data) {
            window.location = "http://pacemove.com/code/details.php";
            console.log("error", data);
            }
        });
    });

    $("#header-track-otp-submit").on("click", function(e){
        var $tab = $(".tab-pane:visible");

        var valid = true;
        $('input, select', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;

        if(!valid) {
             return;
        }
        var usermobile = document.getElementById("header-track-user-mobile").value;
        //append country code to mobile
        var mobile = "91".concat(usermobile);
        var otp = document.getElementById("header-track-otp").value;
        var data = {mobile: mobile, otp: otp, usermobile: usermobile};
        console.log(usermobile);
        $.ajax({
            type: "POST",
            dataType:'json',
            url: "http://pacemove.com/code/trackverifyotp.php",
            data: data,
            success: function(data) {
                if(data == 'error'){
                    alert("Please verify your OTP!");
                }
                else{
                    window.location = "http://pacemove.com/code/userdashboard.php";
                    console.log("returnedData", data);
                }
            },
            error: function(data) {
            console.log("error", data);
            }
        });
    });

    $("#trackdropnext").on("click", function(e){
        var $tab = $(".tab-pane:visible");

        var valid = true;
        $('input, select', $tab).each(function(i, v) {
                $(this).trigger('focusout');
        });

        valid = $tab.find(".has-error").length == 0 ? true : false;

        if(!valid) {
             return;
        }
        var pickupLocationApartment = document.getElementById("trackpickupLocationApartment").value;
        var pickupfloor = document.getElementById("trackpickupfloor").value;
        var pickuplift = document.getElementById("trackpickuplift").value;
        var dropLocationApartment = document.getElementById("trackdropLocationApartment").value;
        var dropfloor = document.getElementById("trackdropfloor").value;
        var droplift = document.getElementById("trackdroplift").value;
        var pickupdate = Date.parse(document.getElementById("trackpickupdate").value);
console.log("puckupdate", pickupdate);
        //append country code to mobile
        var data = {pickupLocationApartment: pickupLocationApartment,
                    pickupfloor: pickupfloor,
                    pickuplift: pickuplift,
                    droplift: droplift,
                    dropfloor: dropfloor,
                    dropLocationApartment: dropLocationApartment,
                    pickupdate: pickupdate};
        $.ajax({
            type: "POST",
            dataType:'json',
            url: "http://pacemove.com/code/trackinsertorder.php",
            data: data,
            success: function(data) {
            console.log("success", data);
console.log(data);
            window.location = "http://pacemove.com/code/movables.php";
            },
            error: function(data) {
            console.log("error", data);
            }
        });
    });

document.getElementById('track').addEventListener('keypress', function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });
    document.getElementById('otpModal').addEventListener('keypress', function(event) {
        if (event.keyCode == 13) {
            event.preventDefault();
        }
    });

	$("#retry-otp").on("click", function(e){
		var usermobile = document.getElementById("usermobile").value;
		//append country code to mobile
		var mobile = "91".concat(usermobile);
		var data = {mobile: mobile};
        $.ajax({
            type: "POST",
            dataType:'json',
            url: "http://pacemove.com/code/retryotp.php",
            data: data,
            success: function(data) {
            console.log("returnedData", data);
          	}
        });
	});
 $("#callback").on("click", function(e){
 console.log("testing");
 });

});