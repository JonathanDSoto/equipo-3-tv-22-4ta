<?php 
	include_once 'config.php';
	if (isset($_POST["action"])) {
		if(isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
			switch($_POST['action'])
			{
				case 'create':
	
					$name = strip_tags($_POST['name']);
					$slug = strip_tags($_POST['slug']);
					$description = strip_tags($_POST['description']);
					$features = strip_tags($_POST['features']);
					$brand_id = strip_tags($_POST['brand_id']); 
					
					$productsController = new ProductsController();
					$productsController->createProduct($name,$slug,$description,$features,$brand_id);
				break;
			}
		}
	}

	Class ProductsController
	{
		public function createProduct($name,$slug,$description,$features,$brand_id)
		{
			$curl = curl_init();

			#var_dump($_FILES['cover']['tmp_name']);

			curl_setopt_array($curl, array(
			  CURLOPT_URL => 'https://crud.jonathansoto.mx/api/products',
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => '',
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 0,
			  CURLOPT_FOLLOWLOCATION => true,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => 'POST',
			  CURLOPT_POSTFIELDS => array(
				'name' => $name,
				'slug' => $slug,
				'description' => $description,
				'brand_id' => $brand_id,
				'cover'=> new CURLFILE($_FILES['cover']['tmp_name']),
				'categories[0]' => '1',
				'categories[1]' => '2',
				'tags[0]' => '1',
				'tags[1]' => '2'),

			  CURLOPT_HTTPHEADER => array(
			    'Authorization: Bearer '.$_SESSION['token']
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

	}
?>