<?php 
	include_once 'config.php';
	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action'])
			{
				case 'create':
					$name = strip_tags($_POST['name']);
					$description = strip_tags($_POST['description']);
					$slug = strip_tags($_POST['slug']);
					
					$brandsController = new BrandsController();
					$brandsController->createBrands($name, $description, $slug);
				break;
                case 'editBrands':
                    $id = strip_tags($_POST['id']);
                    $brandsController = new BrandsController();
					$brandsController->editBrands($id, $name, $description, $slug);
                break;
                case 'deleteBrands':
                    $id = strip_tags($_POST['id']); 
                    $brandsController = new BrandsController();
					$brandsController->deleteBrands($id);
                break;
			}
		}
	}

	Class BrandsController
	{
		public function createBrands($name, $description, $slug)
		{
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'name' => $name,
                'description' => $description,
                'slug' => $slug),

            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

		}
        public function editBrands($id, $name, $description, $slug){

            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => '',
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 0,
              CURLOPT_FOLLOWLOCATION => true,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => 'PUT',
              CURLOPT_POSTFIELDS => 'name='.$name.'&description='.$description.'&slug='.$slug.'&id='.$id,
              CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
              ),
            ));
            $response = curl_exec($curl);
            
            curl_close($curl);
            $response = json_decode($response); 

            if (isset($response->code) && $response->code > 0) { 

              header("Location:../products?success");

            }else{

              header("Location:../products?error");
            }
        }
        public function deleteBrands($id){
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands/'.$id,
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
        public function getAllBrands() {
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands',
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
        public function getEspecificBrands($id){
            $curl = curl_init();
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/brands/'.$id,
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