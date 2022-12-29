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
<section id="main-section">
    <div class="wrapper-50 margin-auto center">
    <h2>Create an account</h2>
    <form class="form" action="index.php?ctrl=user&action=doCreate" method="POST">
        <input type="email" name="email"placeholder="Mail" required/><br>
        <input type="password" name="password"placeholder="Password" required/><br>
        <input type="text" name="lastName"placeholder="Last Name" required/><br>
        <input type="text" name="firstName"placeholder="First Name" required/><br>
        <input type="text" name="address"placeholder="Address" required/><br>
        <input type="text" name="postalCode"placeholder="Postal Code" required/><br>
        <input type="text" name="city"placeholder="City" required/><br>
        <p>
            <input type="submit" class="submit-btn" value="Create">
        </p>
    </form>
    <span></span>
</div></section>
