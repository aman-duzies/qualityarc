<?php
/*
Template Name: Custom Survay Page
Template Post Type: page
*/

get_header();
wp_register_script('custom-js',get_stylesheet_directory_uri().'/js/custom.js',array(),NULL,true);
wp_enqueue_script('custom-js');
?>


<?php  
	
	$arrUnitScore = array("Web"=>1, 
							"Mobile"=>1,
							"Desktop Applications"=>2,
							"Salesforce"=>1,
							"Web Services"=>1);
			
	$arrEmailContent = array("Test Environment Setup"=>array(
															"Scope"=>"Setup Automation Testing Environment as per the need of the Application under test. This is to allow in automation ready state",
															"Deliverables"=>array(
																				"Automation Test Evrionment Ready and connected to application under test",
																				"Environment Setup Guide",
																				"FAQ"),
															"Benefits"=>"Automation Readiness as per current best practise. It can save upto !strComp of testing cost",	
															"Small"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>46%</div>",
															"Medium"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>19%</div>",
															"Complex"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>33%</div>",
															"Talk To Us"=>"Talk To Us"),
								"Test Design" => array(
													"Scope"=>"Develop Automation framework and required automation scripts for application under test. In addition, a dry cycle run to ensure the working.",
													"Deliverables"=>array(
																		"Automation Framework",
																		"Automation Test Scripts",
																		"User Guide",
																		"Sample Execution Report",
																		"Maintenance Plan"),
													"Benefits"=>"Automation Readiness as per current best practise. It can save upto !strComp of testing cost",	
													"Small"=> "<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>46%</div>",
													"Medium"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>19%</div>",
													"Complex"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>33%</div>",
													"Talk To Us"=>"Talk To Us"),
								"Test Execution & Maintenance" => array(
																	"Scope"=>"Complete the required number of automation execution cycles and demonstrate test report results.",
																	"Deliverables"=>array(
																						"Test Execution Plan",
																						"Test Execution Report",
																						"Defect Report",
																						"Test Summary Report",
																						"Maintenance Plan"),
																	"Benefits"=>"Manual vs Automted ROI !strComp testing cycle",	
																	"Small"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>46%</div> ROI in 5th",
																	"Medium"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>19%</div> ROI in 10th",
																	"Complex"=>"<div style='font-size: 32px;line-height: normal;font-weight: bold;display:block;'>33%</div> ROI in 3rd",
																	"Talk To Us"=>"Talk To Us")
						);
					
	$arrQuestions = array(						
						array("question"=>"What is your application type?",
								"text"=>"",
								"answer"=>array(
											array("type"=>"checkbox",
													"name"=>"application_type[]",
													"value"=>"Web",
													"title"=>"",
													"prefix"=>"<label>",
													"postfix"=>"</label>",
													"attr"=>array("class"=>"application_type sp-option")
												),
											array("type"=>"checkbox",
													"name"=>"application_type[]",
													"value"=>"Mobile",
													"title"=>"",
													"prefix"=>"<label>",
													"postfix"=>"</label>",
													"attr"=>array("class"=>"application_type sp-option")
												),
											array("type"=>"checkbox",
													"name"=>"application_type[]",
													"value"=>"Desktop Applications",
													"title"=>"",
													"prefix"=>"<label>",
													"postfix"=>"</label>",
													"attr"=>array("class"=>"application_type sp-option")
												),
											array("type"=>"checkbox",
													"name"=>"application_type[]",
													"value"=>"Salesforce",
													"title"=>"",
													"prefix"=>"<label>",
													"postfix"=>"</label>",
													"attr"=>array("class"=>"application_type sp-option")
												),
											array("type"=>"checkbox",
													"name"=>"application_type[]",
													"value"=>"Web Services",
													"title"=>"",
													"prefix"=>"<label>",
													"postfix"=>"</label>",
													"attr"=>array("class"=>"application_type sp-option")
												)
											),
								"attr"=>array("class"=>"question-wrapper visible first sp-wrapper", 
												"validate"=>"vlAppType()"
											)
							),
						array("question"=>"Number of environments?",
								"text"=>"",
								"answer"=>array(
											array("type"=>"range",
													"name"=>"environment_number_slider",
													"value"=>"3",
													"title"=>"",
													"prefix"=>"<div id='slidecontainer'>",
													"postfix"=>"</div>",
													"attr"=>array("min"=>"1", "max"=>"5", "class"=>"slider", "target"=>"environment_number")
												),
											array("type"=>"text",
													"name"=>"environment_number",
													"value"=>"0",
													"title"=>"",
													"prefix"=>'<i class="icon-minus-circled negetive icon" target="environment_number"></i>',
													"postfix"=>'<i class="icon-plus-circled positive icon" target="environment_number"></i>',
													"attr"=>array("readonly"=>"readonly", "id"=>"environment_number", "class"=>"environment_number sp-integer sp-disabled")
												)
											),
								"attr"=>array("class"=>"question-wrapper", 
												"validate"=>"vlEnvNo()"
											)
							),
						array("question"=>"Can your application be accessed remotely?",
								"text"=>"",
								"answer"=>array(
											array("type"=>"radio",
													"name"=>"remote_access",
													"value"=>"Yes",
													"title"=>"",
													"prefix"=>"<label>",
													"postfix"=>"</label>",
													"attr"=>array("class"=>"remote_access sp-option")
												),
											array("type"=>"radio",
													"name"=>"remote_access",
													"value"=>"No",
													"title"=>"",
													"prefix"=>"<label>",
													"postfix"=>"</label>",
													"attr"=>array( "class"=>"remote_access sp-option")
												)
											),
								"attr"=>array("class"=>"question-wrapper", 
												"validate"=>"vlRemote()"
											)
							),
						/*array("question"=>"Number of test cases?",
								"text"=>"",
								"answer"=>array(
											array("type"=>"text",
													"name"=>"test_cases",
													"value"=>"0",
													"title"=>"",
													"prefix"=>"",
													"postfix"=>"",
													"attr"=>array("class"=>"test_cases sp-integer")
												)											
											),
								"attr"=>array("class"=>"question-wrapper", 
												"validate"=>"vlTestCase()"
											)
							),*/
							array("question"=>"Number of test cases?",
								"text"=>"",
								"answer"=>array(
											array("type"=>"range",
													"name"=>"test_cases",
													"value"=>"5",
													"title"=>"",
													"prefix"=>"<div id='slidecontainer'>",
													"postfix"=>"</div>",
													"attr"=>array("min"=>"1", "max"=>"5", "class"=>"test_cases sp-integer slider")
												)											
											),
								"attr"=>array("class"=>"question-wrapper", 
												"validate"=>"vlTestCase()"
											)
							),
						array("question"=>"Average time to execute 1 manual test case?",
								"text"=>"",
								"answer"=>array(
											array("type"=>"text",
													"name"=>"test_time",
													"value"=>"0",
													"title"=>"",
													"prefix"=>"",
													"postfix"=>"<span class='postfix-text'>(in mins)</span>",
													"attr"=>array("class"=>"test_time sp-integer")
												)
											),
								"attr"=>array("class"=>"question-wrapper last", 
												"validate"=>"vlManualTime()"
											)
							)
					);				
?>
<!-- #Content -->
<div id="Content">
	<div class="content_wrapper clearfix">
		<!-- .sections_group -->
		<div class="sections_group">
			<div class="entry-content" itemprop="mainContentOfPage">
				<div class="section section-post-header">
					<div class="section_wrapper clearfix">	
						<?php if(!$_POST) { ?>
							
							<div id="survey-wrapper">
								<form name="form-questionnaire" id="form-questionnaire" method="post">	
								
									<div class="question-header-wrapper">
										<div>
											<h2 class="heading">Calculate your savings using ATaaS</h2>
											<p class="text">Someting to write here</p>
											
											<div id="myProgress">
												<div id="myBar"></div>
												<div class="step-wrapper">												
													<div class="step"><span class="step-text">1</span></div>
													<div class="step"><span class="step-text">2</span></div>
													<div class="step"><span class="step-text">3</span></div>
													<div class="step"><span class="step-text">4</span></div>
													<div class="step last"><span class="step-text">5</span></div>
												</div>
											</div>
										</div>										
									</div>
									
									<div class="question-outer-wrapper">
									<?php foreach($arrQuestions as $question) { ?>
										<div <?php foreach($question["attr"] as $index=>$value) { echo $index."='".$value."'"; } ?>>
											<?php if($question["question"] != "") { ?>
												<div class="question-text heading"><?php echo $question["question"]; ?></div>
											<?php } ?>
											<?php if($question["text"] != "") { ?>
												<div class="question-text text"><?php echo $question["text"]; ?></div>
											<?php } ?>
											
											<?php foreach($question["answer"] as $answer) { ?>
												<div class="answer-wrapper">
													<div class="answer-element-wrapper">
														<?php echo $answer["prefix"]; ?>
															<?php if($answer["type"] == "checkbox" || $answer["type"] == "radio") { ?>
																<input type="<?php echo $answer["type"]; ?>" value="<?php echo $answer["value"]; ?>" name="<?php echo $answer["name"]; ?>" <?php foreach($answer["attr"] as $index=>$value) { echo $index."='".$value."'"; } ?>/>
																<span title="<?php echo $answer["title"]; ?>"><?php echo $answer["value"]; ?></span>
															<?php } else { ?>
																<input type="<?php echo $answer["type"]; ?>" name="<?php echo $answer["name"]; ?>" value="<?php echo $answer["value"]; ?>" <?php foreach($answer["attr"] as $index=>$value) { echo $index."='".$value."'"; } ?> />
															<?php } ?>
														<?php echo $answer["postfix"]; ?>
													</div>
												</div>
											<?php } ?>
										</div>
									<?php } ?>		
									</div>
									
									<div class="control-buttons">
										<input type="button" name="prev" id="prev" value="Back" class="button hidden"/>
										<input type="button" name="next" id="next" value="Next" class="button"/>
										<input type="submit" name="submit" id="submit" value="Submit" class="button hidden"/>
									</div>
									
								</form>	
							</div>
						<?php } else { 		
							include get_template_directory() . '/includes/content-survay-email.php';
							extract($_POST);
							$unitScore = 0;
							foreach($application_type as $app) {
								$unitScore += $arrUnitScore[$app];
							}	
							
							$arrResult = array();
							foreach($SP as $index=>$value) {
								$cLevel = array();
								if($value == "Test Environment Setup") {
									if($unitScore <= 2) { $cLevel[1] = "Small"; }
									if($unitScore > 2 && $unitScore <= 3) { $cLevel[2] = "Medium"; }
									if($unitScore > 3 && $unitScore <= 5) { $cLevel[3] = "Complex"; }
									if($unitScore > 5) { $cLevel[4] = "Talk To Us"; }
									
									if($environment_number <= 2) { $cLevel[1] = "Small"; }
									if($environment_number > 2 && $environment_number <= 3) { $cLevel[2] = "Medium"; }
									if($environment_number > 3 && $environment_number <= 5) { $cLevel[3] = "Complex"; }
									if($environment_number > 5) { $cLevel[4] = "Talk To Us"; }									
								}
								
								if($value == "Test Design") {
									if($test_time <= 15) { $cLevel[1] = "Small"; }
									if($test_time > 15 && $test_time <= 30) { $cLevel[2] = "Medium"; }
									if($test_time > 30 && $test_time < 60) { $cLevel[3] = "Complex"; }
								}
								
								if($value == "Test Execution & Maintenance") {
									if($environment_number <= 2) { $cLevel[1] = "Small"; }
									if($environment_number > 2 && $environment_number <= 3) { $cLevel[2] = "Medium"; }
									if($environment_number > 3 && $environment_number <= 5) { $cLevel[3] = "Complex"; }
									if($environment_number > 5) { $cLevel[4] = "Talk To Us"; }
									
									if($auto_test_time <= 5) { $cLevel[1] = "Small"; }
									if($auto_test_time > 5 && $auto_test_time <= 10) { $cLevel[2] = "Medium"; }
									if($auto_test_time > 10 && $auto_test_time < 15) { $cLevel[3] = "Complex"; }
								}
								
								$complexity = $cLevel[max(array_keys($cLevel))];
								$arrResult[$value] = $complexity;
							}
						
							$to = $sp_email;
							$subject = 'Automation Solutions';
							$headers[] = 'Content-Type: text/html; charset=UTF-8';
							$headers[] = 'From: ATaaS - QualityArc <info@qualityarc.com>';
							$headers[] = 'Cc: Info @ Qualityarc <catch-all@qualityarc.com>';							
							$message = get_email_content($arrResult, $arrEmailContent);
							//echo $message;
							wp_mail( $to, $subject, $message, $headers ); ?>
							
							<div class="notify successbox">
								<h1>Success!</h1>
								<span class="alerticon"><i class="icon-check icon"></i></span>
								<p>Your Personal Automation Testing Report is on the way. If you haven't received the email, feel free to contact us at <a href="mailto:info@qualityarc.com">info@qualityarc.com</a></p>
							</div>
						<?php } ?>
						
					</div>	
				</div>
			</div>
		</div>
		<!-- .four-columns - sidebar -->
		<?php get_sidebar(); ?>			
	</div>
</div>

<?php get_footer();