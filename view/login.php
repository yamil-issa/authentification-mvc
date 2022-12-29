<!DOCTYPE html>
<html lang="fr">
<head>
        <meta charset="utf-8">
        <title>EcoSphere - Shop</title>
        <meta name="viewport" content="width=device-width">
        <link href="./style/general.css" rel="stylesheet" type="text/css">
        <link href="./style/header-footer.css" rel="stylesheet" type="text/css">
        <link href="./style/mainSection.css" rel="stylesheet" type="text/css">
        <!-- Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Nunito|Glegoo" rel="stylesheet">
        <!-- Fontawesome -->
        <script src="./js/fontawesome-all.min.js"></script>
        <!-- Icon -->
        <link href="./img/icon.png" rel="icon">
    </head>
<body>
<section id="main-section">
    <div class="wrapper-50 margin-auto center">
    <h2>Login</h2>
    <form class="form" action="index.php?ctrl=user&action=doLogin" method="POST">
        <input type="email" name="email"placeholder="Mail" required/><br>
        <input type="password" name="password"placeholder="Password" required/><br>
        <p>
            <input type="submit" class="submit-btn" value="Connect">
        </p>
    </form>
    <p></p>

    <div class="create-account">You don't have an account ? <a href='index.php?ctrl=user&action=createAccount'>Create one</a> !</div>
</div></section>
    
</body>
</html>
