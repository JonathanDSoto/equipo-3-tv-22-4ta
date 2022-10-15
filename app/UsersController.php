<?php
    include_once "config.php";

	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action'])
			{
				case 'newUser':
                    $userController = new UserController();
                    $userController->createUser(
                        $_POST['name'], $_POST['lastname'], $_POST['email'], $_POST['phone_number'], $_POST['created_by'], $_POST['role'], $_POST['password']);
                break;
			}
		}
	}
    Class UserController {
        public function createUser($name, $lastname, $email, $phone_number, $created_by, $role, $password){
            $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email,
                'phone_number' => $phone_number,
                'created_by' => $created_by,
                'role' => $role,
                'password' => $password,
                'profile_photo_file'=> new CURLFILE($_FILES['profile_photo_file']['tmp_name'])),

                CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer' .$_SESSION['token'],
            ),
            ));
    
            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;
        }
    
    }
?>
