<?php if(Session::has('success')): ?>
    <div class="alert bg-success alert-dismissible fade show d-flex justify-content-between align-items-center p-2" role="alert">
        <h3><?php echo e(Session::get('success')); ?></h3>
        <i class="bi bi-x-lg"  data-bs-dismiss="alert" aria-label="Close"></i>
    </div>
<?php elseif(Session::has('error')): ?>
    <div class="alert bg-danger alert-dismissible fade show d-flex justify-content-between align-items-center p-2" role="alert">
        <h5><?php echo e(Session::get('error')); ?></h5>
        <i class="bi bi-x-lg"  data-bs-dismiss="alert" aria-label="Close"></i>
    </div>
<?php endif; ?><?php /**PATH /Users/mac/Desktop/product_crud/resources/views/message/messages.blade.php ENDPATH**/ ?>