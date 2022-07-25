<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">
            <?php echo $__env->yieldContent('modal-title'); ?>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <?php echo $__env->yieldContent('modal-content'); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo $__env->yieldContent('optNo'); ?></button>
          <button type="button" class="btn btn-primary" id="confirmTask"><?php echo $__env->yieldContent('optYes'); ?></button>
        </div>
      </div>
    </div>
  </div><?php /**PATH D:\src\webserver\3_SUMMER\laravel_9\mysecondlaravelproject\resources\views/modalslug.blade.php ENDPATH**/ ?>