<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Star Admin Premium </title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.base.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendors/css/vendor.bundle.addons.css')); ?>">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/shared/style.css')); ?>">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/demo_1/style.css')); ?>">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>" />

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
  </head>
  <body>
    <div class="container-scroller">

      <!-- partial:partials/_navbar.html -->
      <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- partial -->

      <div class="container-fluid page-body-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <?php echo $__env->make('components.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- partial -->


        <div class="main-panel">
          <div class="content-wrapper">
            <?php echo $__env->yieldContent("contents"); ?>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid clearfix">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © laysokchea 2025</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo e(asset('assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/vendors/js/vendor.bundle.addons.js')); ?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="<?php echo e(asset('assets/js/shared/off-canvas.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/shared/misc.js')); ?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="<?php echo e(asset('assets/js/demo_1/dashboard.js')); ?>"></script>
    <!-- End custom js for this page-->
    <script src="<?php echo e(asset('assets/js/shared/jquery.cookie.js')); ?>" type="text/javascript"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
    </script>

    <?php echo $__env->yieldContent('scripts'); ?>
  </body>
</html><?php /**PATH /Users/mac/Desktop/product_crud/resources/views/components/master.blade.php ENDPATH**/ ?>