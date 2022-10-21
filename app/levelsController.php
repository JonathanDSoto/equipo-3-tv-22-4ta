
<?php
    include_once "config.php";

	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action']){
		        case 'newLevel':
                    $name = strip_tags($_POST['name']);
                    $percentage_discount = strip_tags($_POST['percentage_discount']);
                    $levelsController = new LevelsController();
                    $levelsController->createLevel($name, $percentage_discount);
                break;
                case 'editLevel':
                    $id = strip_tags($_POST['id']);
                    $name = strip_tags($_POST['name']);
                    $percentage_discount = strip_tags($_POST['percentage_discount']);
                    $levelsController = new LevelsController();
                    $levelsController->createLevel($name, $percentage_discount);
                break;
                case 'deleteLevel':
                    $id = strip_tags($_POST['id']);
                    $levelsController = new LevelsController();
                    $levelsController->createLevel($name, $percentage_discount);
                break;
            }
        }
	}
   Class LevelsController {
        public function createLevel($name, $percentage_discount){

            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array('name' =>$name ,'percentage_discount' => $percentage_discount),
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;            
        }
        public function editLevel($id, $name, $percentage_discount){

            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS => 'id='.$id.'&name='.$name.'&percentage_discount='.$percentage_discount,
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;
            
        }
        public function deleteLevel($id){

            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels/'.$id,
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
        public function getAllLevel(){
          $curl = curl_init();
          
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels',
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
        public function getEspecificLevel($id){
          $curl = curl_init($id);
          var_dump($id);
          curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/levels/'.$id,
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
