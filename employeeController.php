<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'manageit');

    //fill detail
    if (isset($_POST['create'])) {
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
        $gender = $_POST['gender'];
        $contactNumber = $_POST['contactNumber'];
        $currentAddress = $_POST['currentAddress'];
        $permanentAddress = $_POST['permanentAddress'];
        $email = $_POST['email'];
        $dob = $_POST['dob'];
        $bankAccount = $_POST['bankAccount'];
		$citizenNumber = $_POST['citizenNumber'];
        $panCard = $_POST['panCard'];
        $username = $_POST['username'];
		
        $memberSince = $_POST['memberSince'];

		mysqli_query($db, "INSERT INTO user (first_name, last_name, gender, contact_number, current_address, permanent_address, email, date_of_birth, bank_account, citizenship, pan_card,
        username, member_since) VALUES ('$firstName', '$lastName', '$gender', '$contactNumber', '$currentAddress', '$permanentAddress', '$email', '$dob', 
        '$bankAccount', '$citizenNumber', '$panCard','$username', '$memberSince' )")  or die(mysqli_error($db));
		$_SESSION['message'] = "Personal Detail created"; 
		header('location: employee.php');
	}
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM user WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: employee.php');
    }