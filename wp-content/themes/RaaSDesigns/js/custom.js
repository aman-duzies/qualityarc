var bAnimation = false;
jQuery(document).ready(function(){
	
	jQuery(".slider").on("input", function() {
		jQuery("#"+jQuery(".slider").attr("target")).val(jQuery(this).val());
	});

	jQuery("#next").click(function() {
		if(bAnimation) { return; }
		var visible = jQuery(".question-wrapper.visible");			
		var validation = visible.attr("validate");
		if(validation !== undefined && validation != "") { flag = eval(validation);	}			
		if(flag) {
			var next = jQuery(".question-wrapper.visible").nextAll(".question-wrapper");
			moveForward();
			pageChange(visible, jQuery(next[0]));
			toggleButtons(jQuery(next[0]));
		}				
	});		
	jQuery("#prev").click(function() {
		if(bAnimation) { return; }
		var visible = jQuery(".question-wrapper.visible");
		var prev = jQuery(".question-wrapper.visible").prevAll(".question-wrapper");
		moveBack();
		pageChange(visible, jQuery(prev[0]));
		toggleButtons(jQuery(prev[0]));			
	});	
	jQuery(".icon.positive").click(function(){
		var size = (jQuery("#"+jQuery(this).attr("target")).attr("size") !== undefined) ? jQuery("#"+jQuery(this).attr("target")).attr("size") : 1;
		jQuery("#"+jQuery(this).attr("target")).val(+jQuery("#"+jQuery(this).attr("target")).val() + parseInt(size));
	});
	jQuery(".icon.negetive").click(function(){
		var size = (jQuery("#"+jQuery(this).attr("target")).attr("size") !== undefined) ? jQuery("#"+jQuery(this).attr("target")).attr("size") : 1;
		if(jQuery("#"+jQuery(this).attr("target")).val() > 0) {
			jQuery("#"+jQuery(this).attr("target")).val(+jQuery("#"+jQuery(this).attr("target")).val() - parseInt(size));
		}
	});
	jQuery('.sp-integer').keydown(function(event) { 
		if (!(jQuery.inArray(event.keyCode, [8,46,37,38,39,40]) >= 0)) {
			if ((event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
				event.preventDefault();
			}
       }
	});
	
	jQuery("#form-questionnaire").submit(function(et){return false;
		if(jQuery(".sp_name").val() == "") {
			alert("Please end your name!");
			et.preventDefault();
		}
		
		if(!isEmail(jQuery(".sp_email").val())) {
			alert("Please end valid email address!");
			et.preventDefault();
		}
	});
});

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

function pageChange(visible, next) {
	bAnimation = true;
	visible.fadeOut(function() { 
		next.fadeIn(function() {
			visible.toggleClass("visible")				
			next.toggleClass("visible");
			bAnimation = false;
		});
	});	
}	

function toggleButtons(next) {
	jQuery(".control-buttons").fadeOut(function() {
		if(next.hasClass("first")) { 
			jQuery("#prev").addClass("hidden"); 
		} else {
			jQuery("#prev").removeClass("hidden");
		}	
		if(next.hasClass("last")) { 
			jQuery("#next").addClass("hidden"); 
			jQuery("#submit").removeClass("hidden"); 
		} else {
			jQuery("#next").removeClass("hidden");
			jQuery("#submit").addClass("hidden"); 
		}
		jQuery(".control-buttons").fadeIn();
	});	
}

function vlAppType() {
	 if(jQuery(".application_type.sp-option:checkbox:checked").length <= 0) {
		alert("Please select at least one application type!")
		return false;
	 } else {
		 return true;
	 }
}

function vlEnvNo() {
	 if(jQuery(".environment_number").val() == 0) {
		alert("Environment(s) can't be zero or negetive value!")
		return false;
	 } else {
		 return true;
	 }
}

function vlTestCase() {
	 if(jQuery(".test_cases").val() == "" || jQuery(".test_cases").val() <= 0) {
		alert("Test Case(s) can't be empty, zero or negetive value!")
		return false;
	 } else {
		 return true;
	 }
}

function vlManualTime() {
	 if(jQuery(".test_time").val() == "" || jQuery(".test_time").val() <= 0) {
		alert("Please enter valid time (in mins)!")
		return false;
	 } else {
		 return true;
	 }
}

function vlRemote() {
	if(jQuery(".remote_access.sp-option:radio:checked").length <= 0) {
		alert("Please select one option!")
		return false;
	} else {
		return true;
	}
}

function moveForward() {
    var width = jQuery("#myBar").width() / jQuery("#myProgress").width() * 100;
	var tWidth = width + 25;
    var id = setInterval(frame, 10);
    function frame() {
        if (width >= tWidth) {
            clearInterval(id);
        } else {
            width++; 
            jQuery("#myBar").width(width + '%'); 
        }
    }
}

function moveBack() {
    var width = jQuery("#myBar").width() / jQuery("#myProgress").width() * 100;
	var tWidth = width - 25;
    var id = setInterval(frame, 10);
    function frame() {
        if (width <= tWidth) {
            clearInterval(id);
        } else {
            width--; 
            jQuery("#myBar").width(width + '%'); 
        }
    }
}