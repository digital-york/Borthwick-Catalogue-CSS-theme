<section id="newest-additions" class="card mb-3">
  <h2 class="h5 p-3 mb-0">
    <?php echo __('Newest additions'); ?>
  </h2>
  <div class="list-group list-group-flush">
    <?php foreach ($newestAdditions as $item) { ?>
      <?php $object = QubitObject::getById($item); ?>
      <a
        class="list-group-item list-group-item-action d-flex justify-content-between align-items-center text-break"
        href="<?php echo url_for(array($object)); ?>">
        <?php echo render_title($object); ?>
      </a>
    <?php } ?>
  </div>
</section>
