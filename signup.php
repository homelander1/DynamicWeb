
<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>

<?php
    include '/xampp/htdocs/registration.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        registrationForm($_POST);
    }
    ?>

    <!-- Форма регистрации -->

    <form action="" method="post" enctype="multipart/form-data">
        <label>First name</label>
        <input type="text" name="first_name" placeholder="First Name" value="asdfd">
        <label>Last name</label>
        <input type="text" name="last_name" placeholder="Last" value="asdfd">
        <label>email</label>
        <input type="email" name="email" placeholder="Email address" value="sdfsdfs@dsfdfs.com">
        <label>Password</label>
        <input type="password" name="password" placeholder="Password" value="asdfd">
        <label>Repeat password</label>
        <input type="password" name="password_confirm" placeholder="Password" value="asdfd">
        <button type="submit">Sign Up</button>

        
    </form>

</body>
</html>