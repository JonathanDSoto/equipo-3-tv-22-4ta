<?php
    include_once "config.php";

	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action'])
			{
				case 'newUser':
                    $name = strip_tags($_POST['name']);
                    $lastname = strip_tags($_POST['lastname']);
                    $email = strip_tags($_POST['email']);
                    $phone_number = strip_tags($_POST['phone_number']);
                    $password = strip_tags($_POST['password']);
                    $profile_photo = new CURLFILE($_FILES['profile_photo_file']['tmp_name']);
                    $usercontroller = new UserController();
                    $usercontroller->createUser($name, $lastname, $email, $phone_number, $password, $profile_photo);
                break;
			}
		}
	}
    Class UserController {
        public function createUser($name, $lastname, $email, $phone_number, $password){
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
                'created_by' => 'Equipo 3',
                'role' => 'Administrator',
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
