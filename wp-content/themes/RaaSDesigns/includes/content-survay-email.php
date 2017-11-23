<?php 

	function get_email_content($arrResult, $arrEmailContent) {
		$html = '<div style="padding: 0px">	
					<table width="100%" align="center" style="margin: 0 auto" bgcolor="#f5f6fb" border="0" cellspacing="0" cellpadding="0">
						<tbody>
							<tr>
								<td align="center">
									<table width="750" border="0" cellspacing="0" cellpadding="0">
										<tbody>
											<tr><td height="20" style="line-height: 20px; font-size: 20px" bgcolor="#f5f6fb">&nbsp;</td></tr>
											<tr><td align="left" valign="top" style="text-align: left">
												<img width="171" height="40" style="width: 171px; height: 40px; max-width: 237px; font-family: Helvetica, arial, sans-serif; font-size: 24px; line-height: 40px" alt="QualityArc" src="http://qualityarc.com/wp-content/uploads/2017/02/qualityarc-logo.png" border="0">
											</td></tr>
											<tr><td height="20" style="line-height: 20px; font-size: 20px" bgcolor="#f5f6fb">&nbsp;</td></tr>
											<tr><td align="center" bgcolor="#ffffff">
												<table border="0" cellspacing="0" cellpadding="0">
													<tbody>
														<tr><td height="30">&nbsp;</td></tr>
														<tr><td align="center" style="color: rgb(199, 206, 217); font-family: Helvetica, Arial, sans-serif; font-size: 14px; font-weight: normal">OCTOBER 13, 2017</td></tr>
														<tr><td width="480" align="center" style="color: rgb(85, 92, 106); font-family: Helvetica, Arial, sans-serif; font-size: 25px; font-weight: normal">Your Automation Testing Report</td></tr>
														<tr><td width="480" align="center" style="color: rgb(85, 92, 106); font-family: Helvetica, Arial, sans-serif; font-size: 15px; font-weight: normal">At QualityArc, our promise is to reduce your organisation\'s "cost of quality" by delivering high Quality solutions to business and end users.</td></tr>		
														<tr><td height="30">&nbsp;</td></tr>										
													</tbody>
												</table>
											</td></tr>
											<tr><td height="40" bgcolor="#f5f6fb">&nbsp;</td></tr>';
											
		foreach($arrResult as $index=>$complexity) {//print $index;
			$html .= '<tr><td valign="middle">
						<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
							<tbody>
								<tr>
									<td width="60%" align="left" valign="top"> 
										<table border="0" cellspacing="0" cellpadding="0" style="color: rgb(46, 53, 67); font-family: Helvetica, Arial, sans-serif;">
											<tbody>
												<tr><td height="40" colspan="3">&nbsp;</td></tr>
												<tr>
													<td width="30"></td>
													<td align="left" style="font-size: 18px; font-weight: bold; text-transform: uppercase;  letter-spacing: 1px">'.$index.'</td>
													<td width="30"></td>
												</tr>
												<tr><td height="20" colspan="3">&nbsp;</td></tr>
												<tr>
													<td width="30"></td>
													<td align="left" style="font-size: 14px; font-weight: bold; text-transform: uppercase;">Scope</td>
													<td width="30"></td>
												</tr>
												<tr>
													<td width="30"></td>
													<td align="left" style="color: rgb(131, 132, 135); font-size: 14px; font-weight: normal">'.$arrEmailContent[$index]["Scope"].'</td>
													<td width="30"></td>
												</tr>
												<tr><td height="20" colspan="3">&nbsp;</td></tr>
												<tr>
													<td width="30"></td>
													<td align="left" style="font-size: 14px; font-weight: bold; text-transform: uppercase;">Deliverables</td>
													<td width="30"></td>
												</tr>
												<tr>
													<td width="30">&nbsp;</td>
													<td align="left" style="color: rgb(131, 132, 135); font-size: 14px; font-weight: normal">
														<ol>';
														foreach($arrEmailContent[$index]["Deliverables"] as $li) {
															$html .= '<li>'.$li.'</li>';
														}
														$html .='</ol>
													</td>
													<td width="30">&nbsp;</td>
												</tr>
												<tr><td height="20" colspan="3">&nbsp;</td></tr>
											</tbody>
										</table>
									</td>';
				$html .= '<td valign="middle" bgcolor="#4cbaf6">
					<table width="100%" border="0" cellspacing="0" cellpadding="0">
						<tbody>																
							<tr>																	
								<td width="10%"></td>
								<td width="80%" valign="middle">
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tbody>
											<tr><td align="right" style="color: rgb(253, 253, 253); font-family: Helvetica, Arial, sans-serif; font-size: 15px; line-height: normal; font-weight: normal">'.str_replace("!strComp", $arrEmailContent[$index][$complexity], $arrEmailContent[$index]["Benefits"]).'</td></tr>
											<tr><td height="10">&nbsp;</td></tr>
											<tr><td>
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tbody>
														<tr>
															<td width="25%" align="right" valign="bottom">
																<table width="100%" align="right" border="0" cellspacing="0" cellpadding="0">
																	<tbody>
																		<tr>
																			<td height="100" align="right" valign="bottom">
																				<table width="15%" align="center" border="0" cellspacing="0" cellpadding="0">
																					<tbody>
																						<tr>
																							<td height="57" align="right" valign="bottom" bgcolor="#c8e2fc">&nbsp;</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																		<tr><td style="font-size: 1px; line-height: 1px;" bgcolor="#67c4f7">&nbsp;</td></tr>
																		<tr><td height="30">&nbsp;</td></tr>
																		<tr><td style="color: rgb(253, 253, 253); font-family: Arial, sans-serif; font-size: 10px; letter-spacing: 1px; line-height: normal; font-weight: normal;">Something</td></tr>
																	</tbody>
																</table>
															</td>
															<td width="25%" align="right" valign="bottom">
																<table width="100%" align="right" border="0" cellspacing="0" cellpadding="0">
																	<tbody>
																		<tr>
																			<td height="100" align="right" valign="bottom">
																				<table width="15%" align="center" border="0" cellspacing="0" cellpadding="0">
																					<tbody>
																						<tr>
																							<td height="21" align="right" valign="bottom" bgcolor="#c8e2fc">&nbsp;</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																		<tr><td style="font-size: 1px; line-height: 1px;" bgcolor="#67c4f7">&nbsp;</td></tr>
																		<tr><td height="30">&nbsp;</td></tr>
																		<tr><td style="color: rgb(253, 253, 253); font-family: Arial, sans-serif; font-size: 10px; letter-spacing: 1px; line-height: normal; font-weight: normal;">Something</td></tr>
																	</tbody>
																</table>
															</td>
															<td width="25%" align="right" valign="bottom">
																<table width="100%" align="right" border="0" cellspacing="0" cellpadding="0">
																	<tbody>
																		<tr>
																			<td height="100" align="right" valign="bottom">
																				<table width="15%" align="center" border="0" cellspacing="0" cellpadding="0">
																					<tbody>
																						<tr>
																							<td height="89" align="right" valign="bottom" bgcolor="#c8e2fc">&nbsp;</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																		<tr><td style="font-size: 1px; line-height: 1px;" bgcolor="#67c4f7">&nbsp;</td></tr>
																		<tr><td height="30">&nbsp;</td></tr>
																		<tr><td style="color: rgb(253, 253, 253); font-family: Arial, sans-serif; font-size: 10px; letter-spacing: 1px; line-height: normal; font-weight: normal;">Something</td></tr>
																	</tbody>
																</table>
															</td>
															<td width="25%" align="right" valign="bottom">
																<table width="100%" align="right" border="0" cellspacing="0" cellpadding="0">
																	<tbody>
																		<tr>
																			<td height="100" align="right" valign="bottom">
																				<table width="15%" align="center" border="0" cellspacing="0" cellpadding="0">
																					<tbody>
																						<tr>
																							<td height="78" align="right" valign="bottom" bgcolor="#c8e2fc">&nbsp;</td>
																						</tr>
																					</tbody>
																				</table>
																			</td>
																		</tr>
																		<tr><td style="font-size: 1px; line-height: 1px;" bgcolor="#67c4f7">&nbsp;</td></tr>
																		<tr><td height="30">&nbsp;</td></tr>
																		<tr><td style="color: rgb(253, 253, 253); font-family: Arial, sans-serif; font-size: 10px; letter-spacing: 1px; line-height: normal; font-weight: normal; -ms-transform: rotate(310deg); -webkit-transform: rotate(310deg); transform: rotate(310deg);">Something</td></tr>
																	</tbody>
																</table>
															</td>
														</tr>
													</tbody>
												</table>
											</td></tr>												
										</tbody>
									</table>
								</td>
								<td width="10%"></td>
							</tr>
						</tbody>
					</table>
				</td></tr>
			</tbody>
		</table>
	</td></tr>	
	<tr><td height="40" bgcolor="#f5f6fb">&nbsp;</td></tr>';
		}														
											$html .= '</tbody>
										</table>
									</td>
								</tr>
							</tbody>
						</table>
					</div>';	

		return $html;
	}