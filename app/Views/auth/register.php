<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6 mt-5">
                <h2>Sign UP</h2><hr>
                <form action="<?= base_url('auth/save')?>" method="post">
                    <?= csrf_field(); ?>
                	<div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Your Name" value="<?= set_value('name'); ?>">
                        <span class="text-danger"><?= isset($validation)? display_error($validation, 'name') : '' ?></span>                    
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Enter Your Email" value="<?= set_value('email'); ?>>
                        <span class="text-danger"><?= isset($validation)? display_error($validation, 'email') : '' ?></span>                    
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="text" class="form-control" name="password" placeholder="Enter Your Password" value="<?= set_value('password'); ?>>
                        <span class="text-danger"><?= isset($validation)? display_error($validation, 'password') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <label for="">Confirm Password</label>
                        <input type="text" class="form-control" name="cpassword" placeholder="Confirm Password" value="<?= set_value('cpassword'); ?>>
                        <span class="text-danger"><?= isset($validation)? display_error($validation, 'cpassword') : '' ?></span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary btn-block" type="submit">Sign Up</button>
                    </div>
                    <br>
                    <a href="<?= site_url('auth/login'); ?>"> I have already an account. Login Now</a>
                </form>
            </div>
            <div class="col-md-3">
            </div>
        </div>
    </div>
</body>
</html>