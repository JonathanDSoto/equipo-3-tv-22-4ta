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
      case'editUser':
          $name = strip_tags($_POST['name']);
          $lastname = strip_tags($_POST['lastname']);
          $email = strip_tags($_POST['email']);
          $phone_number = strip_tags($_POST['phone_number']);
          $password = strip_tags($_POST['password']);
          $id= strip_tags($_POST['id']);
          $usercontroller = new UserController();
          $usercontroller->editUser($name, $lastname, $email, $phone_number, $password, $id);
      break;
      case 'deleteUser': 
          $idEl = $_POST['idEliminar'];
          $productController = new UserController();
          $productController -> deleteUser($idEl);
      break;
			}
		}
	}
   Class UserController {
        public function createUser($name, $lastname, $email, $phone_number, $password,$profile_photo){
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
                CURLOPT_POSTFIELDS => array('name' => $name,'lastname' => $lastname,'email' => $email,'phone_number' => $phone_number,'created_by' => 'Dev','role' => 'Administrador','password' => $password,'profile_photo_file'=> $profile_photo),
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer '.$_SESSION['token'],
            ),
            ));
    
            $response = curl_exec($curl);

            curl_close($curl);
            $response = json_decode($response);
  
          if( isset($response->code) &&  $response->code > 0) {
              header ("Location:../public/users.php?success=true");
            } else{
              header ("Location:../public/users.php?error=true");
          }
        }
        public function getAllUsers() {
          $curl = curl_init();
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
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
          $response = json_decode($response);

          if (isset($response->code) && $response->code>0) {
            return $response->data;
            
          }else{
            return array();
          }
        }
        public function getEspecificUser($id){
          $curl = curl_init();
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
              'Authorization: Bearer '.$_SESSION['token'] ,
            ),
          ));
          
          $response = curl_exec($curl);
          curl_close($curl);
          $response = json_decode($response);

          if (isset($response->code) && $response->code>0) {
            return $response->data;
            
          }else{
            return array();
          }
        }
        public function editUser($name, $lastname, $email, $phone_number, $password, $id){
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS => 'name='.$name.'&lastname='.$lastname.'&email='.$email.'&phone_number='.$phone_number.'&created_by=Equipo%204&role=Administrador&password='.$password.'&id='.$id,
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' .$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded',
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            $response = json_decode($response);
  
            if( isset($response->code) &&  $response->code > 0) {
                header ("Location:../public/users.php?success=true");
              } else{
                header ("Location:../public/users.php?error=true");
            }
        }
        public function deleteUser($id){
          $curl = curl_init($id);
          var_dump($id);
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
              'Authorization: Bearer '.$_SESSION['token'],
            ),
          ));
          
          $response = curl_exec($curl);
          
          curl_close($curl);

          $response = json_decode($response);
  
          if( isset($response->code) &&  $response->code > 0) {
              header ("Location:../public/users.php?success=true");
            } else{
              header ("Location:../public/users.php?error=true");
          }
        }
    }
?>