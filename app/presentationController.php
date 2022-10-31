<?php
include_once 'config.php';
if (isset($_POST['action'])) {
    if (isset($_POST['super_token']) && $_POST['super_token'] == $_SESSION['super_token']) {
    switch ($_POST['action']) {
        case 'create':
            $description = strip_tags($_POST['description']);
            $code = strip_tags($_POST['code']);
            $weight_in_grams = strip_tags($_POST['weight_in_grams']);
            $status = strip_tags($_POST['status']);
            $stock = strip_tags($_POST['stock']);
            $stock_min = strip_tags($_POST['stock_min']);
            $stock_max = strip_tags($_POST['stock_max']);
            $product_id = strip_tags($_POST['product_id']);
            $amount = strip_tags($_POST['amount']);
            $cover = new CURLFILE($_FILES['imagen']['tmp_name']);
            
            $precentacion = new PresentationController();
            $precentacion->createPrecentation($description, $code, $weight_in_grams, $status, $stock,  $stock_min, $stock_max,$product_id,$amount,$cover);
        break;
        case 'update':
            $description = strip_tags($_POST['description']);
            $code = strip_tags($_POST['code']);
            $weight_in_grams = strip_tags($_POST['weight_in_grams']);
            $status = strip_tags($_POST['status']);
            $stock = strip_tags($_POST['stock']);
            $stock_min = strip_tags($_POST['stock_min']);
            $stock_max = strip_tags($_POST['stock_max']);
            $product_id = strip_tags($_POST['product_id']);
            $amount = strip_tags($_POST['amount']);
            $id = strip_tags($_POST['id']);
            
            $precentacion = new PresentationController();
            $precentacion->updatePrecentation($description, $code, $weight_in_grams, $status, $stock,  $stock_min, $stock_max,$product_id,$amount,$id);
        break;
        case 'delete':
            $idEl = $_POST['idEliminar'];
            $productController = new PresentationController();
            $productController->delete($idEl);
            break;
    }
    }
}

class PresentationController
{
    public function createPrecentation($description, $code, $weight_in_grams, $status, $stock,  $stock_min, $stock_max,$product_id,$amount,$cover)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'description' => $description,
                'code' => $code,
                'weight_in_grams' => $weight_in_grams,
                'status' => $status,
                'cover' => $cover,
                'stock' => $stock,
                'stock_min' => $stock_min,
                'stock_max' => $stock_max,
                'product_id' => $product_id,
                'amount' => $amount),
                CURLOPT_HTTPHEADER => array(
                  'Authorization: Bearer ' . $_SESSION['token'],
                ),
              ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) &&  $response->code > 0) {
            header("Location:" . BASE_PATH . "public/productos.php?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/productos.php?error=true");
        }
    }
    public function updatePrecentation($description, $code, $weight_in_grams, $status, $stock,  $stock_min, $stock_max,$product_id,$amount,$id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'description='.$description.'&code='.$code.'&weight_in_grams='.$weight_in_grams.'&status='.$status.'&stock='.$stock.'&stock_min='.$stock_min.'&stock_max='.$stock_max.'&product_id='.$product_id.'&id='.$id.'&amount='.$amount,
            CURLOPT_HTTPHEADER => array(
              'Authorization: Bearer ' . $_SESSION['token'],
              'Content-Type: application/x-www-form-urlencoded'
            ),
          ));

        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);

        if (isset($response->code) &&  $response->code > 0) {
            header("Location:" . BASE_PATH . "public/productos.php?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/productos.php?error=true");
        }
    }
    public function precentaciones($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/product/'.$id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token'],
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $response = json_decode($response);

        if (isset($response->code) &&  $response->code > 0) {
            return $response->data;
        } else {
            var_dump($id);
        }
    }
    public function spcfP($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/'. $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token'],
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        $response = json_decode($response);

        if (isset($response->code) &&  $response->code > 0) {
            return $response->data;
        } else {
            return array();
        }
    }




    public function delete($id)
    {
        var_dump($id);
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/presentations/' . $id,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'DELETE',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token'],
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        $response = json_decode($response);

        if (isset($response->code) &&  $response->code > 0) {
            header("Location:" . BASE_PATH . "public/productos.php?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/productos.php?error=true");
        }
    }
}