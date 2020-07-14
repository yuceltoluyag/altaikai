<?php $__env->startSection('title', 'Müşteriler'); ?>

<?php $__env->startSection('content'); ?>
    <main class="app-content">
        <div class="app-title">
            <div>
                <h1><i class="fa fa-th-list"></i> <?php echo $__env->yieldContent('title', 'Müşteri Listesi'); ?></h1>
                <p>Müşterilerinizi Listeleyebilir,Düzenleyebilir,Silebilirsiniz</p>
            </div>
            <ul class="app-breadcrumb breadcrumb side">
                <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
                <li class="breadcrumb-item">Tables</li>
                <li class="breadcrumb-item active"><a href="#">Data Table</a></li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Ad Soyad</th>
                                <th>Telefon</th>
                                <th>Adres</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if (count($customers)) {
    ?>
                                <?php $__currentLoopData = $customers;
    $__env->addLoop($__currentLoopData);
    foreach ($__currentLoopData as $custom) {
        $__env->incrementLoopIndices();
        $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo $custom->id; ?></td>
                                        <td><?php echo $custom->musteri_ad; ?></td>
                                        <td><?php echo $custom->musteri_telefon; ?></td>
                                        <td><?php echo $custom->musteri_adres; ?></td>
                                    </tr>
                                <?php
    }
    $__env->popLoop();
    $loop = $__env->getLastLoop(); ?>
                            <?php
} else {
        ?>
                                <h2>Not Yet Add Category</h2>
                            <?php
    } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\altaikai\resources\views/admin/customers/customers.blade.php ENDPATH**/ ?>