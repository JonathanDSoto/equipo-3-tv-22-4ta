<?php
    include_once "config.php";

	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action'])
			{
				case 'newClients':
                    $name = strip_tags($_POST['name']);
                    $email = strip_tags($_POST['email']);
                    $phone_number = strip_tags($_POST['phone_number']);
                    $password = strip_tags($_POST['password']);
                    $id_suscriber = strip_tags($_POST['id_suscriber']);
                    $level_id = strip_tags($_POST['level_id']);
                    $clientscontroller = new ClientsController();
                    $usercontroller->createUser($name, $email, $phone_number, $password,$id_suscriber, $level_id);
                break;
            }
		}
	}
   Class ClientsController {
        public function createClients($name, $email, $phone_number, $password,$id_suscriber, $level_id){
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array('name' => $name,'email' => $email,'password' => $password,'phone_number' => $phone_number,'is_suscribed' => $id_suscriber,'level_id' => $level_id),
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer'.$_SESSION['token'],
              ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            echo $response;
        }
    }
?>
