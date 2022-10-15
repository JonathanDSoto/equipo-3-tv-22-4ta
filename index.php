<?php
include_once "app/config.php"
?>
<h1>Formulario</h1>
<!-- <form action="app/AuthController.php" method="post">
    <input type="email" name="email"><br><br>
    <input type="password" name="password"><br><br>
    <input type="hidden" name="action" value="access">
    <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">

    <input type="submit" value="submit">
</form> -->

<!-- <form enctype="multipart/form-data" action="app/AuthController.php" method="post">
    
    <input type="text" name="name"><br><br>
    <input type="text" name="lastname"><br><br>
    <input type="email" name="email"><br><br>
    <input type="number" name="phone_number"><br><br>
    <input type="text" name="created_by"><br><br>
    <input type="text" name="role"><br><br>
    <input type="password" name="password"><br><br>
    <input type="file" name="profile_photo_file"><br><br>
    <input type="hidden" name="action" value="register">
    <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">

    <input type="submit" value="submit">
</form> -->

<!-- <form action="app/AuthController.php" method="post">
    <input type="email" name="email"><br><br>
    <input type="hidden" name="action" value="recovery">
    <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">
    <input type="submit" value="submit">
</form> -->
<!-- <form  enctype="multipart/form-data" action="app/AuthController.php" method="post">
    <input type="submit" value="Cerrar Sesion">
    <input type="hidden" name="action" value="logout">
    <input type="hidden" name="email" value="<?= $_SESSION['email'] ?>">
    <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">
</form> -->

<form enctype="multipart/form-data" action="app/UsersController.php" method="post">
    <input type="text" name="name"><br><br>
    <input type="text" name="lastname"><br><br>
    <input type="email" name="email"><br><br>
    <input type="number" name="phone_number"><br><br>
    <input type="password" name="password"><br><br>
    <input type="file" name="profile_photo_file"><br><br>
    <input type="hidden" name="action" value="newUser">
    <input type="hidden" name="super_token" value="<?= $_SESSION['super_token'] ?>">
    <input type="submit" value="Agregar">
</form>