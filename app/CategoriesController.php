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
					$category_id = strip_tags($_POST['category_id']);
					
					$categoriesController = new CategoryController();
					$categoriesController->createCategory($name,$slug,$description,$features,$category_id);
				break;
                case 'editCategory':
                    $id = strip_tags($_POST['id']);
                    $categoriesController = new CategoryController();
					$categoriesController->editCategory($name,$slug,$description,$features,$category_id);
                break;
                case 'deleteCategory':
                    $id = strip_tags($_POST['id']); 
                    $categoriesController = new CategoryController();
					$categoriesController->deleteCategory($name,$slug,$description,$features,$category_id);
                break;
			}
		}
	}

	Class CategoryController
	{
		public function createCategory($name,$slug,$description,$category_id)
		{
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array('name' => $name,'description' => $description,'slug' => $slug,'category_id' => $category_id),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token']
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

			$response = curl_exec($curl); 
			curl_close($curl);
			$response = json_decode($response); 

			if (isset($response->code) && $response->code > 0) { 

				// header("Location:../products?success");

			}else{

				// header("Location:../products?error");
			}
		}
        public function editCategory($id, $name, $description, $slug, $category_id){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'id='.$id.'&name='.$name.'&description='.$description.'&slug='.$slug.'&category_id='.$category_id,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer '.$_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
            ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            echo $response;

        }
        public function deleteCategory($id){
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories/1',
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
        public function getAllCategories() {

            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories',
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
        public function getEspecificCategory($id){
            $curl = curl_init();
            
            curl_setopt_array($curl, array(
              CURLOPT_URL => 'https://crud.jonathansoto.mx/api/categories/'.$id,
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
            echo $response;
            
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