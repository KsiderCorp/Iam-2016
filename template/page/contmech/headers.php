
        <div class="continuum_chief-list">

            <h3 class="center">Сопредседатели</h3>

            <div class="pure-g">

<?php $chiefs = get_posts( $chief );  
      foreach ($chiefs as $post) :  setup_postdata($post);?>
        <div class="pure-u-1  pure-u-sm-1-2 pure-u-md-1-5">
<?php include(TEMPLATEPATH . '/template/uni/persone_card.php'); ?>
        </div>
        <?php wp_reset_postdata(); ?>
        <?php endforeach; ?>

            </div>
        </div>