<?php
    include_once "config.php";

	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action'])
			{
				case 'access':
					$email = strip_tags($_POST['email']);
					$password = strip_tags($_POST['password']);
	
					$authController = new AuthController();
					$authController->login($email,$password);
				break;
                case 'register':
                    $name = strip_tags($_POST['name']);
                    $lastname = strip_tags($_POST['lastname']);
                    $email = strip_tags($_POST['email']);
                    $phone_number = strip_tags($_POST['phone_number']);
                    $created_by = strip_tags($_POST['created_by']);
                    $role = strip_tags($_POST['role']);
                    $password = strip_tags($_POST['password']);

                    $authcontroller = new AuthController();
                    $authcontroller->register($name, $lastname, $email, $phone_number, $created_by, $role, $password);
                break;
                case 'recovery':
                    $authcontroller = new AuthController();
                    $authcontroller->recoveryPass($_POST["email"]);
                break;
                case 'logout':
                    $authcontroller = new AuthController();
                    $authcontroller->logout($_POST["email"]);
                break;
			}
		}

	}
?>
