<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateContainer" style="background: #f3f4f5;">
    <tr>
        <td align="center">
            <table align="center" border="0" cellpadding="0" cellspacing="0" style="padding-top:20px; padding-left: 50px; padding-right: 50px; padding-bottom: 20px; background: #333333; color: #d79500;" width="80%" id="Head">
            <tr>
            	<td>
            		<p>Simplr Consulting</p>
            	</td>
            </tr>
              
               </table>
	                <table align="center" cellpadding="50" id="content" width="80%" style="background: #ffffff; color:#808285; font-size: 14px; font-family:  Raleway, Arial, sans-serif;">
	                <tr>
	                    <td valign="top" class="bodyContent">
	                        <h1 id="greetings" style="color: #d79500;">Hello!</h1>
	                        <p>Thank you for signing up with us</p>
							<p style="margin-bottom: 50px;">
								To proceed with your registration, you need to verify your email address by clicking the button below <br>
								You need to <a href='{{ url("pages/confirm/{$user->token}")}}'>confrim your email address</a>

								<table border="0" cellspacing="0" style="background-color:#d79500; border-radius:5px; margin-top: 50px;">
								    <tr>
								        <td align="center" valign="middle" style="color:#FFFFFF; font-family: Raleway, Arial, sans-serif; font-size:14px; font-weight:bold; letter-spacing:-.5px; line-height:150%; padding-top:15px; padding-right:25px; padding-bottom:15px; padding-left:25px;">
								            <a href='{{ url("register/confirm/{$user->token}")}}' target="_blank" style="color:#FFFFFF; text-decoration:none;">Verify Email</a>
								        </td>
								    </tr>
								</table>
							</p>
							
							<table border="0" cellpadding="" cellspacing="0" style="margin-top: 20px;">
								<tr>
									<td>
										<p style="color:#d79500; font-family: Ananda Hastakchyar, cursive; font-size: 20px; margin-bottom: 0;">Akin' Ajibade</p>
										<p style="margin-top: 0; font-family: Raleway, Arial, sans-serif; color:#808285; font-size: 14px;">
											Enterprise Consultant,<br>
											Simplr Consulting
										</p>
									</td>
								</tr>
							</table>
	                    </td>
	                </tr>
	                </table>
          
        </td>
    </tr>
    <tr align="center">
    	<td>
    	</td>
    </tr>
</table>
</html>