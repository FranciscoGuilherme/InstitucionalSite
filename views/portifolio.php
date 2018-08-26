<div class="portifolio">
  <h4>Meu portifólio recente</h4>

  <?php foreach( $photos as $photo ): ?>
  <div class="photos">
    <img src="/assets/portifolio/<?php echo $photo['image']; ?>" border="0" width="200" height="150" />
  </div>
  <?php endforeach; ?>

  <div style="clear: both;"></div>
</div>
