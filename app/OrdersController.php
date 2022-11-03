<?php
include_once 'config.php';
if (isset($_POST['action'])) {
    if (isset($_POST['super_token']) && $_POST['super_token'] == $_SESSION['super_token']) {
    switch ($_POST['action']) {
        case 'create':
            $total =  '1222';
            if(isset($_POST['is_paid'])){
                $is_paid = strip_tags($_POST['is_paid']);
            }else{
                $is_paid=0;
            }
            $client_id = strip_tags($_POST['client_id']);
            $address_id = strip_tags($_POST['address_id']);
            $order_status_id = '1';
            $payment_type_id =strip_tags($_POST['payment_type_id']);
            $coupon_id = strip_tags($_POST['coupon_id']);
            $presentations = strip_tags($_POST['presentations']);
            $quantity = strip_tags($_POST['quantity']);

            $orderController = new OrdenController();
            $orderController -> create($total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id, $presentations, $quantity);
        break;
        case 'edit':
            $id = strip_tags($_POST['id']);
            $order_status_id = strip_tags($_POST['order_status_id']);

            $orderController = new OrdenController();
            $orderController -> editOrden($id, $order_status_id);
        break;
        case 'delete':
            $idEl = $_POST['idEliminar'];
            $orderController = new OrdenController();
            $orderController->delete($idEl);
        break;
        case 'update':
            $id = $_POST['id'];
            $obj = $_POST['order_status_id'];
            $orderController = new OrdenController();
            $orderController->editOrden($id,$obj);
        break;
    }
    }
}

class OrdenController
{   
    public function getOrders()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
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
    public function getOrdersByCoupon($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
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
        $results =  array();
        if (isset($response->code) &&  $response->code > 0) {
            foreach($response->data as $dat){
                if(intval($dat->coupon_id) == intval($id)){
                    array_push($results,$dat);
                }
            }
            return $results;
        } else {
            return array();
        }
    }
    public function getOrdersDates($dateIni,$dateEnd)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/'.$dateIni.'/'.$dateEnd,
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
    public function getOrden($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/details/'.$id,
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
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/'.$id,
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
            header("Location:" . BASE_PATH . "public/orders?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/orders?error=true");
        }
    }

    public function create($total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id, $presentation, $quantity) {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'folio' => rand(100000,999999), 
                'total' => $total,
                'is_paid' => $is_paid, 
                'client_id' => $client_id, 
                'address_id' => $address_id,
                'order_status_id' => $order_status_id, 
                'payment_type_id' => $payment_type_id, 
                'coupon_id' => $coupon_id,
                'presentations[0][id]' => $presentation, 
                'presentations[0][quantity]' => $quantity
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token'],
            ),
        ));
        $response = curl_exec($curl);

        curl_close($curl);
        echo $response;
        $response = json_decode($response);

        if (isset($response->code) &&  $response->code > 0) {
            header("Location:" . BASE_PATH . "public/orders?success=true");
        } else {
            // header("Location:" . BASE_PATH . "public/orders?error=true");
            var_dump($total, $is_paid, $client_id, $address_id, $order_status_id, $payment_type_id, $coupon_id, $presentation, $quantity);
        }
    }
    public function editOrden($id, $order_status_id){
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'PUT',
        CURLOPT_POSTFIELDS => 'id='.$id.'&order_status_id='.$order_status_id,
        CURLOPT_HTTPHEADER => array(
            'Authorization: Bearer '. $_SESSION['token']
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        
        $response = json_decode($response);

        if (isset($response->code) &&  $response->code > 0) {
            header("Location:" . BASE_PATH . "public/orders?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/orders?error=true");
        }
    }

    public function getBetween($date, $date2) {

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/orders/' . $date . '/' . $date2,
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
        echo $response;

        $response = json_decode($response);
        if (isset($response->code) && $response->code > 0) {
            return $response->data;
        }
    }
}