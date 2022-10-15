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
    Class AuthController
	{

		public function login($email,$pwd)
		{

			$curl = curl_init();

			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/login',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
			  CURLOPT_POSTFIELDS => array(
			  	'email' => $email,
			  	'password' => $pwd
			  ), 
			));

			$response = curl_exec($curl); 
			curl_close($curl);
			$response = json_decode($response);

			if (isset($response->code) && $response->code > 0) {
				
                echo 'Si jalo mi apa';

				$_SESSION['id'] = $response->data->id;
				$_SESSION['name'] = $response->data->name;
                $_SESSION['email'] = $response->data->email;
				$_SESSION['lastname'] = $response->data->lastname;
				$_SESSION['avatar'] = $response->data->avatar;
				$_SESSION['role'] = $response->data->role;
				$_SESSION['token'] = $response->data->token;

                header("Location:".BASE_PATH."products?sucess");

			}else{

				header("Location:".BASE_PATH."?error");
			}

		}
        public function register ($name, $lastname, $email, $phone_number, $created_by, $role, $password){
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/register',
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
                'phone_number' =>$phone_number,
                'created_by' =>  $created_by,
                'role' => $role,
                'password' => $password,
                'profile_photo_file'=>new CURLFILE($_FILES['profile_photo_file']['tmp_name'])),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
            if (isset($response->code) &&  $response->code > 0) {
                $this->login($email, $password);
            } else {
                header("Location:".BASE_PATH."?error=true");
            }
        }
        public function recoveryPass ($email){
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://crud.jonathansoto.mx/api/forgot-password',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('email' => $email),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
            // if (isset($response->code) &&  $response->code > 0) {
            //     header("Location:".BASE_PATH."index");
            // } else {
            //     header("Location:".BASE_PATH."?error=true");
            // }
        }
        public function logout()
        {
            $curl = curl_init();
    
            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://crud.jonathansoto.mx/api/logout',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => array('email' => $_SESSION['email']),
                CURLOPT_HTTPHEADER => array(
                  'Authorization: Bearer '.$_SESSION['token'],
                ),
              ));
              
            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response);
            if (isset($response->code) &&  $response->code > 0) {
                $_SESSION = array();
                session_destroy();
                header("Location: ../index.php?sucess=true");
            } else {
                header("Location: ../index.php?error=true");
                //var_dump('Authorization: Bearer ' .$_SESSION['token']. ' email:'.$_SESSION['email']);
            }
        }
	}
    
?>
