<?php
include_once "config.php";

if (isset($_POST["action"])) {
  if (isset($_POST["super_token"]) && $_POST["super_token"] == $_SESSION["super_token"]) {
    switch ($_POST['action']) {
      case 'newClients':
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $phone_number = strip_tags($_POST['phone_number']);
        $password = strip_tags($_POST['password']);
        if (isset($_POST['is_suscribed'])) {
          $is_suscribed = strip_tags($_POST['is_suscribed']);
        } else {
          $is_suscribed = 0;
        }
        $level_id = strip_tags($_POST['level_id']);
        $clienteNuevo = new ClientsController();
        $clienteNuevo->createClients($name, $email, $phone_number, $password, $is_suscribed, $level_id);
        break;
      case 'editClients':
        $name = strip_tags($_POST['name']);
        $email = strip_tags($_POST['email']);
        $phone_number = strip_tags($_POST['phone_number']);
        $password = strip_tags($_POST['password']);
        if (isset($_POST['is_suscribed'])) {
          $is_suscribed = strip_tags($_POST['is_suscribed']);
        } else {
          $is_suscribed = 0;
        }
        $level_id = strip_tags($_POST['level_id']);
        $id = strip_tags($_POST['id']);
        $clienteNuevo = new ClientsController();
        $clienteNuevo->editClients($name, $email, $phone_number, $password, $is_suscribed, $level_id, $id);
        break;
      case 'deleteClients':
        $idEl = $_POST['idEliminar'];
        $clientsController = new ClientsController();
        $clientsController->deleteClients($idEl);
        break;
      case 'addAddress':
        $name = strip_tags($_POST['name']);
        $lastname = strip_tags($_POST['lastname']);
        $street = strip_tags($_POST['street']);
        $postal_code = strip_tags($_POST['postal_code']);
        $city = strip_tags($_POST['city']);
        $province = strip_tags($_POST['province']);
        $phone_number = strip_tags($_POST['phone_number']);
        if (isset($_POST['billing'])) {
          $billing = strip_tags($_POST['billing']);
        } else {
          $billing = 0;
        }
        $id = strip_tags($_POST['id']);
        $clientsController = new ClientsController();
        $clientsController->registerAddress($name, $lastname, $street, $postal_code, $city, $province, $phone_number, $is_billing_address, $id);
        break;
      case 'updateAddress':
        $name = strip_tags($_POST['name']);
        $lastname = strip_tags($_POST['lastname']);
        $street = strip_tags($_POST['street']);
        $postal_code = strip_tags($_POST['postal_code']);
        $city = strip_tags($_POST['city']);
        $province = strip_tags($_POST['province']);
        $phone_number = strip_tags($_POST['phone_number']);
        $is_billing_address = strip_tags($_POST['password']);
        $client_id = strip_tags($_POST['client_id']);
        $address_id = strip_tags($_POST['address_id']);
        $clientsController = new ClientsController();
        $clientsController->editAddress($name, $lastname, $street, $postal_code, $city, $province, $phone_number, $is_billing_address, $_client_id, $address_id);
        break;
      case 'deleteAddress':
        $id = strip_tags($_POST['id']);
        $clientsController = new ClientsController();
        $clientsController->deleteAddress($id);
        break;
    }
  }
}
class ClientsController
{
  public function createClients($name, $email, $phone_number, $password, $is_suscribed, $level_id)
  {
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
      CURLOPT_POSTFIELDS => array('name' => $name, 'email' => $email, 'password' => $password, 'phone_number' => $phone_number, 'is_suscribed' => $is_suscribed, 'level_id' => $level_id),
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $_SESSION['token'],
      ),
    ));
    $response = curl_exec($curl);
    curl_close($curl);
    $response = json_decode($response);

    if (isset($response->code) &&  $response->code > 0) {
      header("Location:" . BASE_PATH . "/public/clients.php?success=true");
    } else {
      header("Location:" . BASE_PATH . "/public/clients.php?error=true");
    }
  }
  public function editClients($name, $email, $phone_number, $password, $is_suscribed, $level_id, $id)
  {
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
      CURLOPT_POSTFIELDS => 'name=' . $name . '&email=' . $email . '&password=' . $password . '&phone_number=' . $phone_number . '&is_suscribed=' . $is_suscribed . '&level_id=' . $level_id . '&id=' . $id,
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $_SESSION['token'],
        'Content-Type: application/x-www-form-urlencoded',
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response);

    if (isset($response->code) &&  $response->code > 0) {
      header("Location:" . BASE_PATH . "/public/clients.php?success=true");
    } else {
      header("Location:" . BASE_PATH . "/public/clients.php?error=true");
    }
  }
  public function deleteClients($id)
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/' . $id,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'DELETE',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Bearer ' . $_SESSION['token']
      ),
    ));
    $response = curl_exec($curl);

    curl_close($curl);

    $response = json_decode($response);

    if (isset($response->code) &&  $response->code > 0) {
      header("Location:" . BASE_PATH . "/public/clients.php?success=true");
    } else {
      return $response;
    }
  }
  public function getAllClients()
  {
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
        'Authorization: Bearer ' . $_SESSION['token'],
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    $response = json_decode($response);

    if (isset($response->code) && $response->code > 0) {
      return $response->data;
    } else {
      return array();
    }
  }
  public function getEspecificClients($id)
  {
    $curl = curl_init($id);
    var_dump($id);
    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://crud.jonathansoto.mx/api/clients/' . $id,
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

    if (isset($response->code) && $response->code > 0) {
      return $response->data;
    } else {
      return array();
    }
  }
  public function registerAddress($name, $lastname, $street, $postal_code, $city, $province, $phone_number, $is_billing_address, $id)
    {

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => array(
                'first_name' => $name,
                'last_name' => $lastname,
                'street_and_use_number' => $street,
                'postal_code' => $postal_code,
                'city' => $city,
                'province' => $province,
                'phone_number' => $phone_number,
                'is_billing_address' => $is_billing_address,
                'client_id' => $id
            ),
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token'],
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        if (isset($response->code) &&  $response->code > 0) {
            header("Location:" . BASE_PATH . "public/clients.php?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/clients.php?error=true");
        }
    }
    public function editAddress($name, $lastname, $street, $postal_code, $city, $province, $phone_number, $is_billing_address, $client_id, $address_id)
    {
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'PUT',
            CURLOPT_POSTFIELDS => 'first_name=' . $name . '&last_name=' . $lastname . '&street_and_use_number=' . $street . '&postal_code=' . $postal_code . '&city=' . $city . '&province=' . $province . '&phone_number=' . $phone_number . '&is_billing_address=' . $is_billing_address . '&client_id=' . $client_id . '&id=' . $address_id,
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $_SESSION['token'],
                'Content-Type: application/x-www-form-urlencoded'
            ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);
        $response = json_decode($response);
        if (isset($response->code) &&  $response->code > 0) {
            header("Location:" . BASE_PATH . "public/clients.php?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/clients.php?error=true");
        }
    }
    public function getAddress($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/' . $id,
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
    public function deleteAddress($id)
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/addresses/' . $id,
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
            header("Location:" . BASE_PATH . "public/clients.php?success=true");
        } else {
            header("Location:" . BASE_PATH . "public/clients.php?error=true");
        }
    }
}
