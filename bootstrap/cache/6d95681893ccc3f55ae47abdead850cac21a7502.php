<?php $__env->startSection('title','Yönetici'); ?>

<?php $__env->startSection('content'); ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-dashboard"></i> Boş Sayfa</h1>
                <p><?php echo e(getenv('APP_NAME')); ?></p>
            </div>
            <ul class="app-breadcrumb breadcrumb">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item"><a href="#"><?php echo e(getenv('APP_NAME')); ?></a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">Vallaha De ?
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crm\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>