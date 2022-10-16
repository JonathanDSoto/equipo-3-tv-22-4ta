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
          $is_suscribed = strip_tags($_POST['is_suscribed']);
          $level_id = strip_tags($_POST['level_id']);
          $clientscontroller = new ClientsController();
          $usercontroller->createUser($name, $email, $phone_number, $password,$is_suscribed, $level_id);
        break;
				case 'editClients':
          $name = strip_tags($_POST['name']);
          $email = strip_tags($_POST['email']);
          $phone_number = strip_tags($_POST['phone_number']);
          $password = strip_tags($_POST['password']);
          $is_suscribed = strip_tags($_POST['is_suscribed']);
          $level_id = strip_tags($_POST['level_id']);
          $id = strip_tags($_POST['id']);
          $clientscontroller = new ClientsController();
          $usercontroller->editClients($name, $email, $phone_number, $password,$is_suscribed, $level_id, $id);
        break;
        case 'deleteClients': 
          $idEl = $_POST['idEliminar'];
          $clientsController = new ClientsController();
          $clientsController -> deleteClients($idEl);
        break;
      }
		}
	}
   Class ClientsController {
        public function createClients($name, $email, $phone_number, $password,$is_suscribed, $level_id){
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
              CURLOPT_POSTFIELDS => array('name' => $name,'email' => $email,'password' => $password,'phone_number' => $phone_number,'is_suscribed' => $is_suscribed,'level_id' => $level_id),
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer'.$_SESSION['token'],
              ),
            ));
            $response = curl_exec($curl);
            curl_close($curl);
            echo $response;
        }
        public function editClients($name, $email, $phone_number, $password,$is_suscribed, $level_id, $id){
          $curl = curl_init();
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'name='.$name.'&email='.$email.'&password='.$password.'&phone_number='.$phone_number.'&is_suscribed=1'.$is_suscribed.'&level_id='.$level_id.'&id='.$id,
            CURLOPT_HTTPHEADER => array(
              'Authorization: Bearer'.$_SESSION['token'],
              'Content-Type: application/x-www-form-urlencoded',
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);
          echo $response;
        }
        public function deleteClients($id){
          $curl = curl_init();
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
              'Authorization: Bearer '.$_SESSION['token']
            ),
          ));
          $response = curl_exec($curl);
          
          curl_close($curl);

          $response = json_decode($response);
  
          if( isset($response->code) &&  $response->code > 0) {
              $var = $response->message;
          } else{
              return $response;
          }
        }
        public function getAllClients(){
          $curl = curl_init();
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Authorization: Bearer '.$_SESSION['token'],
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);
          echo $response;
          
        }
        public function getEspecificClients($id){
          $curl = curl_init($id);
          var_dump($id);
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Authorization: Bearer '.$_SESSION,
            ),
          ));

          $response = curl_exec($curl);

          curl_close($curl);
          echo $response;

        }
    }
?>
