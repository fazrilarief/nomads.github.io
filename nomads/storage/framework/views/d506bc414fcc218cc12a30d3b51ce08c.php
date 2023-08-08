

<?php $__env->startSection('content'); ?>
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel <?php echo e($item->title); ?></h1>
        </div>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-body">
                <form action="<?php echo e(route('travel-package.update', $item->id)); ?>" method="post">
                    <?php echo method_field('PUT'); ?>
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" placeholder="Title"
                            value="<?php echo e($item->title); ?>">
                    </div>
                    <div class="form-group">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" placeholder="Location"
                            value="<?php echo e($item->location); ?>">
                    </div>
                    <div class="form-group">
                        <label for="about">About</label>
                        <textarea name="about" rows="10" class="d-block w-100 form-control"><?php echo e($item->about); ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="featured_event">Featured Event</label>
                        <input type="text" class="form-control" name="featured_event" placeholder="Featured Event"
                            value="<?php echo e($item->featured_event); ?>">
                    </div>
                    <div class="form-group">
                        <label for="language">Language</label>
                        <input type="text" class="form-control" name="language" placeholder="Language"
                            value="<?php echo e($item->language); ?>">
                    </div>
                    <div class="form-group">
                        <label for="foods">Foods</label>
                        <input type="text" class="form-control" name="foods" placeholder="Foods"
                            value="<?php echo e($item->foods); ?>">
                    </div>
                    <div class="form-group">
                        <label for="departure_date">Departure Date</label>
                        <input type="date" class="form-control" name="departure_date" placeholder="Departure Date"
                            value="<?php echo e($item->departure_date); ?>">
                    </div>
                    <div class="form-group">
                        <label for="duration">Duration</label>
                        <input type="text" class="form-control" name="duration" placeholder="Duration"
                            value="<?php echo e($item->duration); ?>">
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" name="type" placeholder="Type"
                            value="<?php echo e($item->type); ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" name="price" placeholder="Price"
                            value="<?php echo e($item->price); ?>">
                    </div>
                    <div class="text-right">
                        <a type="submit" class="btn btn btn-danger" href="<?php echo e(route('travel-package.index')); ?>">
                            <i class="fas fa-window-close"></i> Cancel
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="far fa-save"></i> Ubah
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ThinkPad T480s\OneDrive - Microsoft 365\Learning\BWA\nomads-template\nomads\resources\views/pages/admin/travel-package/edit.blade.php ENDPATH**/ ?>