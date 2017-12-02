<html>
	<head>
		<title>Airtel Feedback</title>
		<style ttype="text/css" media="all">
		input[type=text]{
			width:100px;
			border: 1px solid gray;
				
			border-radius:4px;
			background-color:#f0f8ff;
		}
		
		</style>
	</head>
	<body>
		<table cellspacing="0px" cellpadding="0px">
			<tr>	
				<td colspan="4"><img src="airtel.png" alt="Airtel" ></td>
			</tr>
			<tr>	
				<td width="208px" height="600px" 	 style="background-color:#ff0000;"></td>
				<td>
					<table align="center" style="background-color:#fff8dc"width="300px" border="3px"height="400px">
					<form action="add_data.py" method="POST">
					<tr>	<td>First Name</td>
							<td> <input type="text" placeholder="Enter ur name" name="first_name" required/>	</td>	</tr>
					<tr>	<td>Last Name</td>
							<td> <input type="text" placeholder="Enter ur last name" name="last_name" required/> </td>	</tr>
					<tr>	<td>E-Mail Id:</td>
							<td> <input type="text" placeholder="Enter ur e-mail" name="e-mail" required/>	</td>	</tr>
					<tr>	<td>Mobile No.</td>
							<td> <input type="text" placeholder="Enter mobile no" name="mobile" required/>	</td>	</tr>
					<tr>	<td>FeedBack</td>
							<td> <input type="text" placeholder="enter ur feedback" name="feedback" required/>	</td>	</tr>
					<tr>	<td colspan="2">	<input type="Submit"><input type="Button" Value="Cancel" name="cancel">		</td>	</tr>	
					</form>
						</table>
				</td>
			</tr>
		</table>
	</body>
</html>