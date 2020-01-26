<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('content_header'); ?>
    <h1>Dashboard</h1>
	<?php echo $__env->make('navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<?php $b= Session::get('admin_name'); echo "Welcome ".$b. " ,";?>
	<br>
    <p>Welcome to this beautiful admin panel.</p>
    
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="/css/admin_custom.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script> console.log('Hi!'); </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Study 2020\Skill development\Book_exchange_backend\resources\views/layouts/admin.blade.php ENDPATH**/ ?>