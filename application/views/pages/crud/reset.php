<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
            <div><?= $this->session->flashdata('message'); ?></div>
            <!-- Login Form -->
            <form action="<?= base_url(); ?>crud/reset" method="POST">
                <div>
                    <input type="text" id="resetCode" class="form-control fadeIn second " name="resetCode" placeholder="Reset code">
                    <br><?= form_error('resetCode', '<small class="text-danger pl-1">', '</small>'); ?>
                </div>
                <hr>
                <div>
                    <input type="submit" class="fadeIn fourth" value="Reset" onclick="return confirm('This feature will reset your admin user to default, be sure you still remember the default admin user! are sure you want to reset the admin user?');">
                </div>
            </form>
        </div>
    </div>
</body>

</html>