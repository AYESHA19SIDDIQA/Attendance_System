<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css">
</head>
<body class="bg-gray-100">
    <nav class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <a href="<?php echo e(route('dashboard')); ?>" class="text-xl font-bold">Attendance System</a>
            <?php if(Auth::check()): ?>
    <p>Welcome, <?php echo e(Auth::user()->fullname); ?></p>
<?php else: ?>
    <p>Guest</p>
<?php endif; ?>

        </div>
    </nav>
    <main class="container mx-auto mt-5">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html>
<?php /**PATH C:\Users\hp\Desktop\laravel\attendance-system\resources\views/layouts/app.blade.php ENDPATH**/ ?>