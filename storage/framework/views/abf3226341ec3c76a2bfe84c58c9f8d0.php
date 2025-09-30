<?php $__env->startSection('contents'); ?>
<div class="col-md-12 grid-margin">
    <div class="card">
      <div class="card-body">

        <?php echo $__env->make('message.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="d-flex justify-content-between align-items-center">
          <h1>Product Stock</h1>
          <form>
              <input type="search" value="<?php echo e(Request::get('search')); ?>" name="search" class=" form-control" style="width: 300px;" placeholder="Search Product here...">
          </form>
          <a href="/product/create" class=" btn btn-primary">new product</a>
        </div>

        <div class="table-responsive">
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Product ID</th>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Qty</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>
                  <input onchange="handleSelect()" type="checkbox" value="<?php echo e($product->id); ?>"/>
                  P<?php echo e($product->id); ?>

                </td>
                <td>
                    <img src="<?php echo e(asset('uploads/'.$product->image)); ?>" alt="">
                </td>
                <td><?php echo e($product->name); ?></td>
                <td>$<?php echo e($product->price); ?></td>
                <td><?php echo e($product->qty); ?></td>
                <td>
                    <a href="<?php echo e(route('product.edit',$product->id)); ?>" class="btn btn-sm btn-outline-primary mr-1">Edit</a>
                    <a href="<?php echo e(route('product.delete',$product->id)); ?>" onclick="return confirm('do you want to delete product this?')" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
          </table>

          <div class=" mt-3 d-flex justify-content-between align-items-center">

              <div class="show-page">
                <?php echo e($products->links()); ?>

              </div>

              <div class="">
                 <button product-ids="" onclick="DeleteWithSelected()" id="btn_delete_selected" class="btn btn-outline-danger d-none">delete with selected</button>
              </div>

              <div class="show-refresh">
                 <a href="<?php echo e(route('product.list')); ?>" class=" btn btn-danger">refresh</a>
              </div>

          </div>
        </div>
      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
  
   const handleSelect = () => {

     let selectedProducts = [];
     $('input[type="checkbox"]:checked').each(function(){
        selectedProducts.push($(this).val());
     });

     
     console.log(selectedProducts);

     if(selectedProducts.length >= 1){

       //convert array to string
       let productIds = selectedProducts.join(',');

       console.log(productIds);

       $('#btn_delete_selected').removeClass('d-none');
       $("#btn_delete_selected").attr("product-ids",productIds)
     }else{
       $('#btn_delete_selected').addClass('d-none');
     }

   }


   const DeleteWithSelected = () => {
     if(confirm("Do you want to delete with seleted?")){
       let productIds = $('#btn_delete_selected').attr("product-ids");

       $.ajax({
        type: "POST",
        url: "<?php echo e(route('product.deleteSelect')); ?>",
        data: {
          ids : productIds
        },
        dataType: "json",
        success: function (response) {
           if(response.status == 200){
              window.location.href = '<?php echo e(route("product.list")); ?>'
           }
        }
       });
     }
   }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('components.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/mac/Desktop/product_crud/resources/views/product.blade.php ENDPATH**/ ?>