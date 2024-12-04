<?php $__env->startSection('title', 'Login'); ?>

<?php $__env->startSection('content'); ?>
<form method="POST" action="<?php echo e(route('login')); ?>">
    <?php echo csrf_field(); ?>
    <div>
        <label>Email</label>
        <input type="email" name="email" required />
    </div>
    <div>
        <!-- <label>Password</label>
        <input type="password" name="password" required /> -->
    </div>
    <button type="submit">Login</button>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\hp\Desktop\laravel\attendance-system\resources\views/auth/login.blade.php ENDPATH**/ ?>