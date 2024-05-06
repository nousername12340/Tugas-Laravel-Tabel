<?php $__env->startSection('title', 'Contact Us'); ?>
<?php $__env->startSection('body'); ?>
<div class="row d-flex justify-content-center m-5">

  <!-- Contact Form Block -->
  <div class="col-xl-6">
    <h2 class="pb-4">Leave a message</h2>
    <form method="POST">
        <?php echo csrf_field(); ?>
        <div class="row g-4">
        <div class="col-12 mb-3">
            <label for="exampleFormControlInput1" class="form-label">Full Name</label>
            <input type="text" class="form-control" name="name" placeholder="John">
        </div>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" name="email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone</label>
        <input type="tel" class="form-control" name="phone" placeholder="+1234567890">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" name="message" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Send Message</button>
    </form>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("template.main", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\LaravaelCommerce\resources\views/contact.blade.php ENDPATH**/ ?>