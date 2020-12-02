<<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo e(action('Pintores@index')); ?>">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo e(action('Pintores@picasso')); ?>">Pablo Picasso<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo e(action('Pintores@vincent')); ?>">Vincent Van Gogh</a>
      <a class="nav-item nav-link" href="<?php echo e(action('Pintores@monet')); ?>">Claude Monet</a>
      <a class="nav-item nav-link" href="<?php echo e(action('Pintores@leonardo')); ?>">Leonardo Da Vinci</a>
    </div>
  </div>
</nav><?php /**PATH C:\laragon\www\pintores\resources\views/includes/navbar.blade.php ENDPATH**/ ?>