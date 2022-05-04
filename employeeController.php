<?php
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'manageit');
    
    //fill detail
    if (isset($_POST['create'])) {
        
        if(isset($_FILES['profile_pic'])) {
            $profileImageName = time() . '-' . $_FILES["profile_pic"]["name"];
            // print_r($profileImageName);die;
            $target_dir = "img/profile-pic/";
            $target_file = $target_dir . basename($profileImageName);

            move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
        }

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
        $profileImg = $profileImageName;

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            mysqli_query($db, "UPDATE user SET first_name='$firstName', last_name='$lastName', gender='$gender', contact_number='$contactNumber', current_address='$currentAddress', permanent_address='$permanentAddress', email='$email', date_of_birth='$dob', bank_account='$bankAccount', citizenship='$citizenNumber', pan_card='$panCard',
            username='$username', member_since='$memberSince', profile_img='$profileImg' WHERE id='$id'") or die(mysqli_error($db));
        } else {
            mysqli_query($db, "INSERT INTO user (first_name, last_name, gender, contact_number, current_address, permanent_address, email, date_of_birth, bank_account, citizenship, pan_card,
            username, member_since, profile_img) VALUES ('$firstName', '$lastName', '$gender', '$contactNumber', '$currentAddress', '$permanentAddress', '$email', '$dob', 
            '$bankAccount', '$citizenNumber', '$panCard','$username', '$memberSince', '$profileImg' )") or die(mysqli_error($db));
        }
		  
		$_SESSION['message'] = "Personal Detail created"; 
		header('location: employee.php');
	}
    //deleting employee
    if (isset($_GET['del'])) {
        $id = $_GET['del'];
        mysqli_query($db, "DELETE FROM user WHERE id=$id");
        $_SESSION['message'] = "Address deleted!"; 
        header('location: employee.php');
    }
    //edit employee