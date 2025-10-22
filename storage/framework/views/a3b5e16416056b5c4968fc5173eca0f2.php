<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

  <title>Ava & Mateo — Admin Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Fraunces:wght@400;600&family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>" />
  <link rel="icon" href="<?php echo e(asset('media/anm-logo.png')); ?>" type="image/png">

</head>
<body style="background-color: #7E2625; color: #F3ECDC;">
    <div class="header" style="padding: 20px; text-align: center;">

          <div class="brand">
            <img src="<?php echo e(asset('media/anm-logo.png')); ?>" alt="">
          </div>

    </div>

    <form action="<?php echo e(route('login.submit')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit" style="background-color: #F3ECDC; color: #7E2625;">Login</button>
    </form>

    <?php if($errors->any()): ?>
    <div class="alert alert-danger"><?php echo e($errors->first()); ?></div>
    <?php endif; ?>
</body>
</html>
<?php /**PATH F:\WORK\FREELAB\PROJECT\AMMA N MICHAEL\amma-michael\resources\views/auth/login.blade.php ENDPATH**/ ?>