<?php $__env->startSection('contents'); ?>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        
        <div class="d-flex justify-content-between align-items-center">
            <h1>Update Product</h1>
            <a href="/product" class=" btn btn-outline-danger ">back</a>
        </div>

        <form action="<?php echo e(route('product.update',$product->id)); ?>" class="forms-sample" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  is-invalid   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(($product->name != '' ) ? $product->name : 'null'); ?>" name="name" id="name" placeholder="Product Name">
            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <p class=" text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-group">
            <label for="price">Product Price</label>
            <input type="number" class="form-control <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  is-invalid   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> " value="<?php echo e(($product->price != '') ? $product->price : '0'); ?>" name="price" id="price" placeholder="Price">
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <p class=" text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>
          <div class="form-group">
            <label for="qty">Product Qty</label>
            <input type="number" class="form-control <?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>  is-invalid   <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e($product->qty); ?>"  name="qty" id="qty" placeholder="Qty">
            <?php $__errorArgs = ['qty'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
               <p class=" text-danger"><?php echo e($message); ?></p>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
          </div>

          <div class="form-group">
            <label for="">Product Image</label>
            <input type="hidden" value="<?php echo e($product->image); ?>" name="old_image">
            <input type="file" name="image" id="" class="form-control">
          </div>
          <?php if($product->image != null): ?>
            <div>
                <img width="200" src="<?php echo e(asset('uploads/'.$product->image)); ?>" alt="">
            </div>
          <?php endif; ?>
         
          <div class="form-group">
            <label for="desc">Description</label>
            <textarea class="form-control" name="desc" id="desc" rows="2"><?php echo e($product->description); ?></textarea>
          </div>

          <button type="submit" class="btn btn-success mr-2">Update</button>
          <button class="btn btn-light">Cancel</button>

        </form>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/product_crud/resources/views/edit.blade.php ENDPATH**/ ?>