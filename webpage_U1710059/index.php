<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Validating Forms</title>
		<link href="style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<body>
		<h1>Registration Form</h1>

		<p>
			This form validates user input and then displays "Thank You" page.
		</p>
		
		<hr />
		
		<h2>Please, fill below fields correctly</h2>
		<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Name</dt>
			
			<dd>
				 <input type="text" name="name">
            </dd>

			<dt>Email</dt>
				
			<dd> 
				 <input type="text" name="email">
            </dd>
            <dt>Username</dt>
				
			<dd>
				 <input type="text" name="username">
            </dd>
            <dt>Password</dt>
				
			<dd> 
				<input type="text" name="password">
            </dd>
            <dt>Confirm Password</dt>
			<dd> 
				 <input type="text" name="confirmPassword">
            </dd>
            <dt>Date of Birth</dt>
				
			<dd>
				 <input type="text" name="dob">
            </dd>
            <dt>Gender</dt>
				
			<dd> 
				<input type="radio" name="gender" value="Female" checked="">Female
				<input type="radio" name="gender" value="Male">Male<br>
            </dd>
			<dt>Marital Status</dt>
				
			<dd> 
                                <input type="radio" name="status" value="Single" checked="">Single
                                <input type="radio" name="status" value="Married">Married
                                <input type="radio" name="status" value="Divorced">Divorced
                                <input type="radio" name="status" value="Widowed">Widowed
                            
            </dd>
            <dt>Address</dt>
				
			<dd> 
				<input type="text" name="address">
            </dd>
            <dt>City</dt>
			<dd> 
				 <input type="text" name="city">
            </dd>
            <dt>Postal Code</dt>
				
			<dd>
				 <input type="text" name="post">
            </dd>
             <dt>Home Phone</dt>
				
			<dd> 
				<input type="text" name="hphone">
            </dd>
            <dt>Mobile phone</dt>
			<dd> 
				 <input type="text" name="mphone">
            </dd>
            <dt>Credit Card Number</dt>
				
			<dd>
				 <input type="text" name="cardNum">
            </dd>
			<dt>Credit card Expiry Date</dt>
				
			<dd> 
				<input type="text" name="cardExp">
            </dd>
            <dt>Monthly salary</dt>
			<dd> 
				 <input type="text" name="salary">
            </dd>
            <dt>Web Site URL</dt>
				
			<dd>
				 <input type="text" name="webUrl">
            </dd>
			 <dt>Overall GPA</dt>
			<dd> 
				 <input type="text" name="gpa">
            </dd>

		</dl>
		
		<div>
			<input type="submit" value="Check">
		</div>
	</body>
</html>