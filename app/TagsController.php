<?php 
	include_once 'config.php';
	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action'])
			{
				case 'createTags':
					$name = strip_tags($_POST['name']);
					$description = strip_tags($_POST['description']);
					$slug = strip_tags($_POST['slug']);
					
					$tagsController = new TagsController();
					$tagsController->createTags($name, $description, $slug);
				break;
                case 'editTags':
                    $id = strip_tags($_POST['id']);
                    $tagsController = new TagsController();
					$tagsController->editTags($id, $name, $description, $slug);
                break;
                case 'deleteTags':
                    $id = strip_tags($_POST['id']); 
                    $tagsController = new TagsController();
					$tagsController->deleteTags($id);
                break;
			}
		}
	}

	Class TagsController
	{
		public function createTags($name, $description, $slug)
		{
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'POST',
              CURLOPT_POSTFIELDS => array('name' => $name,'description' => $description,'slug' => $slug),
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;
            
		}
        public function editTags($id, $name, $description, $slug){
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS => 'name='.$name.'&description='.$description.'&slug='.$slug.'&id='.$id,
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer 3 '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
              ),
            ));
            
            $response = curl_exec($curl);
            
            curl_close($curl);
            echo $response;
            
            $response = json_decode($response); 

            if (isset($response->code) && $response->code > 0) { 

              header("Location:../products?success");

            }else{

              header("Location:../products?error");
            }
        }
        public function deleteTags($id){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags/'.$id,
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
            echo $response;

            $response = json_decode($response);
    
            if( isset($response->code) &&  $response->code > 0) {
                $var = $response->message;
            } else{
                return $response;
            }
        }
        public function getAllTags() {
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
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
        public function getEspecificTags($id){
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/tags/'.$id,
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'GET',
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
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
	}
?>