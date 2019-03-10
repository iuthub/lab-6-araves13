<?php 

	$name="";
	$email="";
	$username="";
	$password="";
	$confirmPassword="";
	$dob="";
	$gender="";
	$status="";
	$address="";
	$city="";
	$post="";
	$hphone="";
	$mphone="";
	$cardNum="";
	$cardExp="";
	$salary="";
	$webURL="";
	$gpa="";	

    $matchName="Not checked yet.";
	$matchEmail="Not checked yet";
	$matchUsername="Not checked yet";
	$matchPassword="Not checked yet.";
	$matchConfirmPassword="Not checked yet";
	$matchDob="Not checked yet.";
	$matchGender="Not checked yet";
	$matchStatus="Not checked yet.";
	$matchAddress="Not checked yet.";
	$matchCity="Not checked yet";
	$matchPost="Not checked yet";
	$matchHphone="Not checked yet.";
	$matchMphone="Not checked yet";
	$matchCardNum="Not checked yet.";
	$matchCardExp="Not checked yet.";
	$matchSalary="Not checked yet";
	$matchUrl="Not checked yet";
	$matchGpa="Not checked yet";
	$match="";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$name=$_POST["name"];
	$email=$_POST["email"];
	$username=$_POST["username"];
	$password=$_POST["password"];
	$confirmPassword=$_POST["confirmPassword"];
	$dob=$_POST["dob"];
	$gender=$_POST["gender"];
	$status=$_POST["status"];
	$address=$_POST["address"];
	$city=$_POST["city"];
	$post=$_POST["post"];
	$hphone=$_POST["hphone"];
	$mphone=$_POST["mphone"];
	$cardNum=$_POST["cardNum"];
	$cardExp=$_POST["cardExp"];
	$salary=$_POST["salary"];
	$webUrl=$_POST["webUrl"];
	$gpa=$_POST["gpa"];	


	if(preg_match('/[A-Za-z]{2,}/', $name)) {
						$matchName="";
					} else {
						$matchName="It has to contain at least 2 chars. It should not contain any number.";
					}

	if(preg_match('/[A-Za-z0-9._-]+@[a-zA-Z]+\.[a-z]{2,}/', $email)) {
						$matchEmail="";
					} else {
						$matchEmail="It should correspond to email format.";
					}
	if(preg_match('/[A-Za-z0-9]{5,}/', $username)) {
						$matchUsername="";
					} else {
						$matchUsername="It has to contain at least 5 chars.";
					}

	if(preg_match('/[0-9a-zA-Z]{8,}/', $password)) {
						$matchPassword="";
					} else {
						$matchPassword="It has to contain at least 8 chars.";
					}
	if($password==$confirmPassword) {
						$matchConfirmPassword="";
					} else {
						$matchConfirmPassword=" It has to be equal to Password field.";
					}

	if(preg_match('/[0-9]{2}.[0-9]{2}.[0-9]{4}/', $dob)) {
						$matchDob="";
					} else {
						$matchDob="Date should be written in dd.MM.yyyy format.";
					}
	if(isset($gender)) {
						$matchGender="";
					} else {
						$matchGender="Does not match gender!";
					}
	if(isset($status)) {
						$matchStatus="";
					} else {
						$matchStatus="Does not match status!";
					}

	if(preg_match('/./', $address)) {
						$matchAddress="";
					} else {
						$matchAddress="This is required field";
					}
	if(preg_match('/./', $city)) {
						$matchCity="";
					} else {
						$matchCity="This is required field.";
					}
	if(preg_match('/[0-9]{6}/', $post)) {
						$matchPost="";
					} else {
						$matchPost="It should follow 6 digit format";
					}
	if(preg_match('/[0-9]{9}/', $hphone)) {
						$matchHphone="";
					} else {
						$matchHphone="It should follow 9 digit format.";
					}
	if(preg_match('/[0-9]{9}/', $mphone)) {
						$matchMphone="";
					} else {
						$matchMphone="It should follow 9 digit format";
					}
	if(preg_match('/[0-9 ]{16}/', $cardNum)) {
						$matchCardNum="";
					} else {
						$matchCardNum="It should follow 16 digit format";
					}
	if(preg_match('/[0-9]{2}.[0-9]{2}.[0-9]{4}/', $cardExp)) {
						$matchCardExp="";
					} else {
						$matchCardExp="Date should be written in dd.MM.yyyy format.";
					}
	if(preg_match('/UZS[0-9,.]{2,}/', $salary)) {
						$matchSalary="";
					} else {
						$matchSalary=" It should be written in following format UZS 200,000.00";
					}
	if(preg_match('/http:\/\/[A-Za-z0-9]+\.[a-z]{2,}/', $webUrl )) {
						$matchUrl="";
					} else {
						$matchUrl=" It should match URL format.";
					}
	if(preg_match('/^[+]?([0-4]*[.])?[0-9]+$/', $gpa)) {
						$matchGpa="";
					} else {
						$matchGpa="It should be a floating point number less than 4.5";
					}
			
	
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
	<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<form action="valid_form.php" method="post">
		<dl>
			<dt>Name</dt>
			<dd><input type="text" name="name" value="<?= $name ?>">
			<?=	$matchName ?></dd>
			
			<dt>Email</dt>
			<dd><input type="text" name="email" value="<?= $email ?>">
			<?=	$matchEmail ?></dd>
			
			<dt>Username</dt>
			<dd><input type="text" name="username" value="<?= $username ?>"><?=	$matchUsername ?></dd>

			<dt>Password</dt>
			<dd><input type="text" name="password" value="<?= $password ?>">	<?=	$matchPassword ?></dd>
			
			<dt>Confirm password</dt>
			<dd><input type="text" name="confirmPassword" value="<?= $confirmPassword ?>"><?=	$matchConfirmPassword ?></dd>

			<dt>Date of Birth</dt>
			<dd><input type="text" name="dob" value="<?= $dob ?>"><?=	$matchDob ?></dd>

			<dt>Gender</dt>
			<dd><input type="text" name="gender" value="<?= $gender ?>"></dd>
			
			<dt>Marital Status</dt>
			<dd><input type="text" name="status" value="<?= $status ?>"></dd>
			
			<dt>Address</dt>
			<dd><input type="text" name="address" value="<?= $address ?>"><?=	$matchAddress ?></dd>

			<dt>City</dt>
			<dd><input type="text" name="city" value="<?= $city ?>"><?=	$matchCity ?></dd>
			
			<dt>Postal Code</dt>
			<dd><input type="text" name="post" value="<?= $post ?>"><?=	$matchPost ?></dd>
			
			<dt>Home phone</dt>
			<dd><input type="text" name="hphone" value="<?= $hphone ?>"><?=	$matchHphone ?></dd>

			<dt>Mobile phone</dt>
			<dd><input type="text" name="mphone" value="<?= $mphone ?>"><?=	$matchMphone ?></dd>
			
			<dt>Credit Card Number</dt>
			<dd><input type="text" name="cardNum" value="<?= $cardNum ?>"><?=	$matchCardNum ?></dd>

			<dt>Credit Card Expiry Date</dt>
			<dd><input type="text" name="cardExp" value="<?= $cardExp ?>"><?=	$matchCardExp ?></dd>

			<dt>Monthly Salary</dt>
			<dd><input type="text" name="salary" value="<?= $salary ?>"><?=	$matchSalary ?></dd>
			
			<dt>Web Site URL</dt>
			<dd><input type="text" name="webUrl" value="<?= $webUrl ?>"><?=	$matchUrl ?></dd>
			
			<dt>Overall GPA</dt>
			<dd><input type="text" name="gpa" value="<?= $gpa ?>"><?=	$matchGpa ?></dd>

			<dt>Output Text</dt>
			<dd> <?php 
            if($matchName!=""||$matchEmail!=""||$matchPassword!=""||$matchConfirmPassword!=""||$matchPassword!=""||$matchEmail!=""||$matchPassword!=""||$matchEmail!=""||$matchUsername!=""||$matchDob!=""||$matchAddress!=""||$matchCity!=""||$matchPost!=""||$matchHphone!=""||$matchMphone!=""||$matchCardNum!=""||$matchCardExp!=""||$matchSalary!=""||$matchUrl!=""||$matchGpa!=""){ ?>
            <h1>Sorry</h1>
            <br>You didn't fill out the form correctly.
            <a href="index.php">Try again?</a>
            <?php 
            }
            else{?>
            	SUCCESS!
            <?php } ?>
			</dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>
		
	</form>
</body>
</html>