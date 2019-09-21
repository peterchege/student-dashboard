<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Register</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Inline validation is very easy to implement using the Architect Framework.">
    <meta name="msapplication-tap-highlight" content="no">

    <!-- GOOGLE FONT API -->
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">

    <!-- CSS FILES -->
    <link href="<?php echo e(asset('customer/main.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('customer/css/login.css')); ?>" rel="stylesheet">


</head>

<body>
    <div class="container-fluid container-section">
        <div class="row">
            <div class="col-md-6 back-register">
            </div>
            <div class="col-md-6">
                <div class="customer-login">
                    <h2> WELCOME TO OUR CUSTOMER PORTAL</h2>
                    <div class="under-line img12 text-center">
                        <img src="img/line.png" alt="">
                    </div>
                    <form class="customer-form" method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class=" row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name">Fist Name</label>
                                    <input type="text" class="form-control  <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        id="first_name" name="first_name" value="<?php echo e(old('first_name')); ?>"
                                        aria-describedby="emailHelp" placeholder="e.g John">
                                    <?php if ($errors->has('first_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('first_name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        id="last_name" name="last_name" value="<?php echo e(old('last_name')); ?>"
                                        aria-describedby="emailHelp" placeholder="e.g Doe">
                                    <?php if ($errors->has('last_name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('last_name'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="number"
                                        class="form-control <?php if ($errors->has('phone_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone_number'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        id="phone_number" name="phone_number" value="<?php echo e(old('phone_number')); ?>"
                                        aria-describedby="emailHelp" placeholder="e.g 07xx 343 xxx">
                                    <?php if ($errors->has('phone_number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('phone_number'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        id="email" name="email" value="<?php echo e(old('email')); ?>" aria-describedby="emailHelp"
                                        placeholder="e.g Johndoe@gmail.com">
                                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="kra">KRA PIN</label>
                                    <input type="text" class="form-control <?php if ($errors->has('kra')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kra'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" id="kra"
                                        name="kra" value="<?php echo e(old('kra')); ?>" aria-describedby="emailHelp"
                                        placeholder="e.g A201xx.">
                                    <?php if ($errors->has('kra')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('kra'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="national_id">National ID</label>
                                    <input type="number" class="form-control <?php if ($errors->has('national_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('national_id'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        id="national_id" name="national_id" value="<?php echo e(old('national_id')); ?>"
                                        aria-describedby="emailHelp" placeholder="e.g 383 43x x32">
                                    <?php if ($errors->has('national_id')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('national_id'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        id="password" name="password" placeholder="Password">
                                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($message); ?></strong>
                                    </span>
                                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm Password</label>
                                    <input type="password"
                                        class="form-control <?php if ($errors->has('confirm_password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('confirm_password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                                        id="exampleInputPassword1" name="password_confirmation" placeholder="Password">
                                </div>

                            </div>
                        </div>

                        <div class="customer-btn">
                            <div class="row">
                                <button type="submit" class="btn btn-primary">CREATE ACCOUNT</button>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <a href="<?php echo e(route('login')); ?>">Already Have an account? Login</a> </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

    </div>
    <script type="text/javascript" src="./assets/scripts/main.js"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\APA-CUSTOMER-PORTAL\resources\views/auth/register.blade.php ENDPATH**/ ?>