$(document).ready(function(){ 
$("#callback-submit").on("click", function(e){
var $tab = $("#exampleModal");
var valid = true;
		$('input, select', $tab).each(function(i, v) {
				$(this).trigger('focusout');
		});

		valid = $tab.find(".has-error").length == 0 ? true : false;

		if(!valid) {
			 return;
		}
 console.log("testing");
var usermobile = document.getElementById("callback-mobile").value;
var data = {mobile: usermobile};
$.ajax({
            type: "POST",
            dataType:'json',
            url: "http://pacemove.com/code/callback.php",
            data: data,
            success: function(data) {
            if (data != 'localhost') {
                    alert('Please Provide 10 Digit Mobile Number');
                    
                }
                else {
                    $('#exampleModal').modal('hide');
                    console.log("returnedData", data);        
                }
            
            },
            error: function(data) {
            window.location = "http://pacemove.com/code/details.php";
            console.log("error", data);
            }
        });
 });
});