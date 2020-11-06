<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="shortcut icon" type="image/png" href="<?= base_url(); ?>assets/img/logo.png">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/login.css">
    <title><?= $title; ?></title>
</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->
            <div class="fadeIn first">
                <h2 style="color: #034133;"><?= $title; ?></h2>
            </div>
            <!-- Icon -->
            <div class="fadeIn first">
                <img class="img" src="<?= base_url(); ?>assets/img/logo.png" id="icon" alt="User Icon" />
            </div>
            <hr>
            <div><?= $this->session->flashdata('message'); ?></div>
            <!-- Login Form -->
            <form action="<?= base_url(); ?>login/" method="POST">
                <div>
                    <input type="text" id="username" class="form-control fadeIn second " name="username" placeholder="Username admin" value="<?= set_value('username'); ?>">
                    <br><?= form_error('username', '<small class="text-danger pl-1">', '</small>'); ?></div>
                <div>
                    <input type="password" id="password" class="form-control fadeIn third" name="password" placeholder="Password">
                    <br><?= form_error('password', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <hr>
                <div>
                    <input type="submit" class="fadeIn fourth" value="Log In">
                    <a style="text-decoration: none;" href="<?= base_url(); ?>pages/reset">forgot username & password?</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>