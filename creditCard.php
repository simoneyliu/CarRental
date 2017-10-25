<?php
{
			$username = $_SESSION ['username'];
			$type = mysqli_real_escape_string($db, $_POST['type']);
			$creditcard =  mysqli_real_escape_string($db, $_POST['creditcard']);
			$cvv = mysqli_real_escape_string($db, $_POST['cvv']);
			$exp_date = date('Y-m-d',strtotime($_POST['exp_date']));
			$name = mysqli_real_escape_string($db, $_POST['name']);

			if(empty($_POST["type"]) || empty($_POST["creditcard"]) || empty($_POST["cvv"]) || empty($_POST["exp_date"]) || empty($_POST["name"])){
				array_push($errors, "All fields are required");
				echo "<div align='center'>All fields are required</div>";
			}
			
			$creditSQL=mysqli_query($db,"SELECT creditcard FROM bankaccount WHERE c_username!='$username' and creditcard='$creditcard'");				
			
			if (mysqli_num_rows($creditSQL) == 1){
				echo "<div align='center'>Credit card number '$creditcard' is already in the system</div>";
				array_push($errors, "Credit card taken");
			}
	
			if (count($errors) == 0) {
				$query = "update bankaccount set type = '$type', creditcard = '$creditcard', cvv = '$cvv', exp_date = '$exp_date', name = '$name' where c_username = '$username'";
				mysqli_query($db, $query);
				$_SESSION['username'] = $username;
			}
							
}
?>