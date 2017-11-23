jQuery(document).ready(function(){
	jQuery("#next").click(function() {
		var visible = jQuery(".question-wrapper.visible");			
		var validation = visible.attr("validate");
		if(validation !== undefined && validation != "") { flag = eval(validation);	}			
		if(flag) {
			var next = jQuery(".question-wrapper.visible").nextAll(".question-wrapper.selected");
			toggleHeader(jQuery(next[0]));
			pageChange(visible, jQuery(next[0]));
			toggleButtons(jQuery(next[0]));
		}				
	});		
	jQuery("#prev").click(function() {
		var visible = jQuery(".question-wrapper.visible");
		var prev = jQuery(".question-wrapper.visible").prevAll(".question-wrapper.selected");
		toggleHeader(jQuery(prev[0]));
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
	
	jQuery("#form-questionnaire").submit(function(et){
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

function pageChange(visible, next, flag=false) {
	visible.hide(function() { 
		next.show(function() {
			visible.toggleClass("visible")				
			next.toggleClass("visible");
		});
	});	
}	

function toggleButtons(next) {		
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
}	

function toggleHeader(nextQuestion) {		
	var visible = jQuery(".question-header-inner-wrapper.visible");		
	if(nextQuestion.hasClass("first")) {
		var next = jQuery(".question-header-inner-wrapper.intro");	
	} else if(nextQuestion.hasClass("last")) {
		var next = jQuery(".question-header-inner-wrapper.submit");
	} else {
		var next = jQuery(".question-header-inner-wrapper[sp_parent='"+nextQuestion.attr("sp_header")+"']");
	}			
	if(!visible.is(next)) { pageChange(visible, next, true); }
}	

function SP_validate() {
	 if(jQuery(".sp-wrapper .sp-option:checkbox:checked").length <= 0) {
		alert("Please select at least one service!")
		return false;
	 } else {
		jQuery(".question-wrapper ").removeClass("selected");
		jQuery(".question-wrapper ").removeAttr("sp_header");
		jQuery(".sp-option:checkbox:checked").each(function(){
			var target = jQuery(this).attr("sp_bundle"); 
			jQuery(jQuery(".question-wrapper ")).each(function() {						
				if(jQuery(this).attr('sp_parent') !== undefined) {
					if(jQuery(this).attr('sp_parent').indexOf(target) > -1) {
						jQuery(this).addClass("selected");
						if(jQuery(this).attr('sp_header') === undefined) {							
							jQuery(this).attr("sp_header", target);
						}
					}
				}
			});
		});
		return true;
	 }
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

function vlHostEnv() {
	 if(jQuery(".host_environment.sp-option:radio:checked").length <= 0) {
		alert("Please select Host Environment!")
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

function vlAutoTestCase() {
	 if(jQuery(".auto_test_cases").val() == "" || jQuery(".auto_test_cases").val() <= 0) {
		alert("Automation Test Case(s) can't be empty, zero or negetive value!")
		return false;
	 } else {
		 return true;
	 }
}

function vlAutoTime() {
	 if(jQuery(".auto_test_time").val() == "" || jQuery(".auto_test_time").val() <= 0) {
		alert("Please enter valid time (in mins)!")
		return false;
	 } else {
		 return true;
	 }
}

function vlDev() {
	if(jQuery(".developed_by_qa.sp-option:radio:checked").length <= 0) {
		alert("Please select one option!")
		return false;
	 } else {
		 return true;
	 }
}

function vlRun() {
	if(jQuery(".run_by_qa.sp-option:radio:checked").length <= 0) {
		alert("Please select one option!")
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