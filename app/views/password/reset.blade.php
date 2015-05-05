<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
  	<title>Forgot password</title>
  <style type="text/css">
 	body {
		width: 100%;
		margin: 0;
		padding: 0;
		-webkit-font-smoothing: antialiased;
	}
  </style>
  {{HTML::style('public/css/login.css')}}
  {{HTML::script('public/js/jquery-1.11.2.min.js')}}
  {{HTML::script('public/js/jquery.validate.min.js')}}
 </head>
 <body style="font-family: Arial, sans-serif; font-size:13px; color: #444444; min-height: 200px;" bgcolor="#E4E6E9" leftmargin="0" topmargin="0" marginheight="0" marginwidth="0">
 <table width="100%" height="100%" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
 	<tr>
 	<td width="100%" align="center" valign="top" bgcolor="#E4E6E9" style="background-color:#E4E6E9; min-height: 200px;">
		<table>
			<tr>
				<td class="table-td-wrap" align="center" width="458">
					<table class="table-space" height="18" style="height: 18px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="18" style="height: 18px; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" align="left">&nbsp;</td>
						</tr>
					</table>
					<table class="table-space" height="8" style="height: 8px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="8" style="height: 8px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td>
						</tr>
					</table>
					<table class="table-row" width="450" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
								<table class="table-col" align="left" width="378" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
									<tr>
										<td class="table-col-td" width="378" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;" valign="top" align="left">
											<table class="header-row" width="378" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
												<tr>
													<td class="header-row-td" width="378" style="font-family: Arial, sans-serif; font-weight: normal; line-height: 19px; color: #478fca; margin: 0px; font-size: 18px; padding-bottom: 10px; padding-top: 15px;" valign="top" align="left">Change password</td>
												</tr>
											</table>
											<div style="font-family: Arial, sans-serif; line-height: 20px; color: #444444; font-size: 13px;">
												<b style="color: #777777;">Use this form to change your password. One changed, your new password will be in effect next time you login.</b>
											</div>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td>
						</tr>
					</table>
					<table class="table-space" height="12" style="height: 12px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="12" style="height: 12px; width: 450px; padding-left: 16px; padding-right: 16px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="center">&nbsp;
								<table bgcolor="#E8E8E8" height="0" width="100%" cellspacing="0" cellpadding="0" border="0">
									<tr>
										<td bgcolor="#E8E8E8" height="1" width="100%" style="height: 1px; font-size:0;" valign="top" align="left">&nbsp;</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td>
						</tr>
					</table>
					<table class="table-row" width="450" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-row-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 36px; padding-right: 36px;" valign="top" align="left">
								<table class="table-col" align="left" width="378" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
									<tr>
										<td class="table-col-td" width="378" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; width: 378px;" valign="top" align="left">
											<div style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; text-align: center;">
												@if (Session::has('error'))
												        <div class="alert alert-danger"  >{{ Session::get('error') }}</div>
												    @endif
												<form action="{{ URL::to('resetpassword') }}" method="POST" class="forgot" id="forgotpw">
												    <input type="hidden" name="token" value="{{ $token }}">
												    <div class="form-user">
												    	<input type="email" name="email" placeholder="email" class="form-control" />	
												    </div>
												    <div class="form-user">
												    	<input type="password" name="password" placeholder="password" id="password" class="form-control" />
												    </div>
												    <div class="form-user">
												    	<input type="password" name="password_confirmation" placeholder="password_confirmation" class="form-control" />
												    </div>
												    <input type="submit" value="Reset Password" />
												</form>
											</div>
											<table class="table-space" height="16" style="height: 16px; font-size: 0px; line-height: 0; width: 378px; background-color: #ffffff;" width="378" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
												<tr>
													<td class="table-space-td" valign="middle" height="16" style="height: 16px; width: 378px; background-color: #ffffff;" width="378" bgcolor="#FFFFFF" align="left">&nbsp;</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<table class="table-space" height="6" style="height: 6px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="6" style="height: 6px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td>
						</tr>
					</table>
					<table class="table-row-fixed" width="450" bgcolor="#FFFFFF" style="table-layout: fixed; background-color: #ffffff;" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-row-fixed-td" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal; padding-left: 1px; padding-right: 1px;" valign="top" align="left">
								<table class="table-col" align="left" width="448" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
									<tr>
										<td class="table-col-td" width="448" style="font-family: Arial, sans-serif; line-height: 19px; color: #444444; font-size: 13px; font-weight: normal;" valign="top" align="left">
											<table width="100%" cellspacing="0" cellpadding="0" border="0" style="table-layout: fixed;">
												<tr>
													<td width="100%" align="center" bgcolor="#f5f5f5" style="line-height: 24px; color: #bbbbbb; font-size: 13px;text-align: center; padding: 9px; border-width: 1px 0px 0px; border-style: solid; border-color: #e3e3e3; background-color: #f5f5f5;" valign="top">
      													<a href="#" style="color: #428bca; text-decoration: none; background-color: transparent;"> &copy; 2015</a>
  													</td>
												</tr>
											</table>
										</td>
									</tr>
								</table>
							</td>
						</tr>
					</table>
					<table class="table-space" height="1" style="height: 1px; font-size: 0px; line-height: 0; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="1" style="height: 1px; width: 450px; background-color: #ffffff;" width="450" bgcolor="#FFFFFF" align="left">&nbsp;</td>
						</tr>
					</table>
					<table class="table-space" height="36" style="height: 36px; font-size: 0px; line-height: 0; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" cellspacing="0" cellpadding="0" border="0">
						<tr>
							<td class="table-space-td" valign="middle" height="36" style="height: 36px; width: 450px; background-color: #e4e6e9;" width="450" bgcolor="#E4E6E9" align="left">&nbsp;</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>
 <script type="text/javascript">
  jQuery(function($) {
  	$(function(){
		 	$.validator.addMethod("loginRegex", function(value, element) {
		        return this.optional(element) || /^[a-z0-9\-\s]+$/i.test(value);
		    }, "Contain only letters, numbers, or dashes.");
		 	$("#forgotpw").validate({
		 		rules:{
		 			email:{
		 				required:true,
		 				email:true
		 			},
		 			password:{
		 				required:true,
		 				minlength:6,
		 				loginRegex:true
		 			},
		 			password_confirmation:{
		 				equalTo:"#password"
		 			}
		 		},
		 		highlight:function(element){
		 			$(element).closest('.form-user').addClass('has-error');
		 		},
		 		unhighlight:function(element){
		 			$(element).closest('.form-user').removeClass('has-error');
		 		},
		 		errorElement:'span',
		 		errorCLass:'help-block',
		 		errorPlacement:function(error,element) {
		 			if(element.parent('.form-control').length){
		 				error.insertAfter(element.parent());
		 			}else{
		 				error.insertAfter(element);
		 			}
		 		}
		 	});
		 });
  });
 </script>
 </body>
 </html>
