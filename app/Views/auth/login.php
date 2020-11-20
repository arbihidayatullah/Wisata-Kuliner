<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Wisata Kuliner</title>
</head>

<body>

    <div class="container">
        <div class="row align-itemes-center h-100 align-middle">
            <div class="col-6 mx-auto">
                <div class="jumbotron">
                    <center>
                        <h3>
                            Login Form
                        </h3>
                    </center>
                    <?php $validation  = session()->getFlashdata('validation'); ?>

                    <form action="<?= current_url() ?> " method='POST'>
                        <div class="form-group">
                            <label for="">Username / Email </label>
                            <input value="<?= old('username') ?>" autocomplete="off" autofocus="on" type="text" name="username" id="username" class="form-control<?= $validation && $validation->hasError('username') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('username')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('username'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="">Password </label>
                            <input value="<?= old('password') ?>" type=" password" name="password" id="password" class="form-control<?= $validation && $validation->hasError('password') ? ' is-invalid' : '' ?>">
                            <?php if ($validation && $validation->hasError('password')) : ?>
                                <div class="invalid-feedback">
                                    <?= $validation->getError('password'); ?>
                                </div>
                            <?php endif; ?>
                        </div>
                        <button class="btn btn-success btn-block">SIGN IN</button>
                        <a href="register" class="btn btn-success btn-block">Sign Up</a>
                    </form>
                </div>
            </div>

        </div>
    </div>










































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>