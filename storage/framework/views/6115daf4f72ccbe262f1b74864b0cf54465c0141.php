<?php $__env->startSection('title'); ?>
    Sign Up | Lighting Speed Event
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <?php if(count($errors) > 0): ?>
                <div class="alert alert-danger">
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo e($error); ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <div class="col-md-6 col-xs-offset-3">
                <form action="" class="form-signup">
                    <h2 class="form-signup-heading">Sign Up</h2>
                    <label for="inputFirstName" class="sr-only">First Name</label>
                    <input id="inputFirstName" type="text" class="form-control" placeholder="First Name" autofocus="">
                    <label for="inputLastName" class="sr-only">Last Name</label>
                    <input id="inputLastName" type="text" class="form-control" placeholder="Last Name" autofocus="">
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input id="inputEmail" type="email" class="form-control" placeholder="Email" autofocus="">
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input id="inputPassword" type="password" class="form-control" placeholder="Password" autofocus="">
                    <label for="inputPassword" class="sr-only">Confirm Password</label>
                    <input id="inputPassword" type="password" class="form-control" placeholder="Confirm Password" autofocus="">
                    <button class="btn btn-lg btn-primary btn-block">Sign Up</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>