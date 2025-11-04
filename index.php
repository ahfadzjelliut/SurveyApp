<html>

<head>
    <title>Survey Pelanggan</title>
    <link href="cssmore/style.css" type="text/css" rel="stylesheet">

</head>

<body>
    <div class="scroll">
        <div class="profil">
            <img src="img/Profile.png" height="70px" width="50px">

            <div class="showlogin">
                <img src="img/Profile.png" height="179px" width="120px">
                <h2>Admin</h2>
                <form class="formdes" method="POST" action="control1.php?control=login">
                    <input name="username" type="text" placeholder="Username" required>
                    <input name="password" type="password" placeholder="Password" required>
                    <input type="submit" name="login" value="Login">
                </form>
            </div>
        </div>
    </div>
    <h1 class="titel">Survey Pelanggan</h1>
    <div class="btnstart">
        <a style="text-decoration: none; color: white;" href="pilihan.php"> Beri Nilai</a>
    </div>
</body>

</html>