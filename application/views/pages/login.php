<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/logo.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/login.css">
    <title>Users Management</title>
</head>

<body class="primaryColor">
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <div class="fadeIn first">
                <h2>Users Management</h2>
            </div>
            <!-- Icon -->
            <div class="fadeIn first">
                <img class="img" src="<?= base_url(); ?>assets/img/logo.png" id="icon" alt="User Icon" />
            </div>
            <hr>
            <!-- Login Form -->
            <form>
                <input type="text" id="name" class="fadeIn second" name="name" placeholder="Username admin">
                <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password">
                <hr>
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

        </div>
    </div>
</body>

</html>