<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
</head>
<body>
	<style type="text/css">
		body{
			background-color: lightgreen;
		}
		.m{
			background-color: lightyellow;
			width: 600px;
			height: 50px;
		}
		input[type="submit"]
		{
			border: 2px solid red;
		}
		input[type="reset"]
		{
			border: 2px solid red;
		}
	</style>
	<center><div class="m"><h1><u>STUDENT REGISTRATION FORM</u></h1></div></center>
<form action="submit.php">
	<img src="images/index.png" comment align="right" border="3" height="9%" width="8%">
	<table align="center" cellpadding="10">
		<tr>
			<td>First Name:-</td>
			<td>
				<input required type="text"/>
			</td>
		</tr>
		<tr>
			<td>Last Name:-</td>
			<td>
				<input type="text" name="Last Name" maxlength="30" />
			</td>
		</tr>
		<tr>
			<td>Father's Name:-</td>
			<td>
				<input required type="text"/>
			</td>
		</tr>
		<tr>
			<td>Date Of Birth:-</td>
			<td>
				<option>
					<input type="Date"/>
				</option>
			</td>
		</tr>
		<tr>
			<td>Gender:-</td>
			<td>
				<select>
					<option hidden="hidden">Choose</option>
					<option>Male</option>
					<option>Female</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Address:-</td>
			<td>
				<textarea name="Address" rows="4" cols="30" maxlength="300" >
				</textarea>	
			</td>
		</tr>
		<tr>
			<td>Email:-</td>
			<td>
				<input required type="Email" />
			</td>
		</tr>
		<tr>
			<td>Mobile Number:-</td>
			<td>
				<input type="text" name="Mobile_Number" maxlength="10" />
				(10 digit number)
			</td>
		</tr>
		<tr>
			<td>City:-</td>
			<td>
				<input type="text" name="City" maxlength="30" />
			</td>
		</tr>
		<tr>
			<td>Pin Code:-</td>
			<td>
				<input type="text" name="Pin_Code" maxlength="6" />
				(6 digit number)
			</td>
		</tr>
		<tr>
			<td>State:-</td>
			<td>
				<input type="text" name="State" maxlength="30" />
			</td>
		</tr>
		<tr>
			<td>Country:-</td>
			<td>
				<input type="text" name="Country" maxlength="30" />
			</td>
		</tr>
		<tr>
			<td>Qualification:-</td>
			<td>
				<table>
					<tr>
						<td align="center"><b>Sl.No</b></td>
						<td align="center"><b>Examination</b></td>
						<td align="center"><b>Board</b></td>
						<td align="center"><b>Percentage</b></td>
						<td align="center"><b>Year of Passing</b></td>
					</tr>
					<tr>
						<td>1</td>
						<td>Class X</td>
						<td>
							<input type="text" name="ClassX_Board" maxlength="30"/>
						</td>
						<td>
							<input type="text" name="ClassX_Percentage" maxlength="30"/>
						</td>
						<td>
							<input type="text" name="ClassX_YrOfPassing" maxlength="30"/>
						</td>
					</tr>
					<tr>
						<td>2</td>
						<td>Class XII</td>
						<td>
							<input type="text" name="ClassXII_Board" maxlength="30"/>
						</td>
						<td>
							<input type="text" name="ClassXII_Percentage" maxlength="30"/>
						</td>
						<td>
							<input type="text" name="ClassXII_YrOfPassing" maxlength="30"/>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td align="center">(10 char max)</td>
						<td align="center">(upto 2 decimal)</td>
					</tr>	
				</table>
			</td>
		</tr>
		<tr>
			<td>Courses<br/>Applied For</td>
			<td>
				BCA
				<input type="radio" name="Course_BCA" value="BCA">
				B.Tech
				<input type="radio" name="Course_B.Tech" value="B.Tech">
				B.Sc
				<input type="radio" name="Course_B.Sc" value="B.Sc">
				B.A
				<input type="radio" name="Course_B.A" value="B.A">
				B.Comm
				<input type="radio" name="Course_B.Comm" value="B.Comm">
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<input type="submit" value="Submit"/>
				<input type="reset" value="Reset"/>
			</td>
	    </tr>
	</table>
</form>
</body>
</html>