<div class="vlp-link-container vlp-template-news">

  <?php if ( $link->url() ) :
    $link_attributes = 'external' === $link->type() ? ' rel="nofollow" target="_blank"' : ''; ?>

  <a href="<?php echo esc_attr( $link->url() ); ?>" class="vlp-link" title="<?php echo esc_html( $link->title() ); ?>"<?php echo $link_attributes; ?>></a>
  <?php endif; // URL. ?>

  <?php if ( $link->image_id() ) : ?>
  <div class="vlp-link-image-container">
    <div class="vlp-link-image">
    <?php
    $size = array( 1024, 999 );
    if ( VLP_Settings::get( 'template_use_custom_style' ) ) {
      $size = VLP_Settings::get( 'custom_style_image_size' );
      preg_match( '/^(\d+)x(\d+)$/i', $size, $match );
      if ( ! empty( $match ) ) {
        $size = array( intval( $match[1] ), intval( $match[2] ) );
      }
    }
    echo $link->image( $size );
    ?>
    </div><!-- vlp-link-image -->
  </div><!-- vlp-link-image-container -->
  <?php endif; // Image ID. ?>

  <div class="vlp-link-text-container">

    <?php if ( $link->title() ) : ?>
    <div class="vlp-link-title">
    <?php echo wp_kses_post( $link->title() ); ?>
    </div><!-- vlp-link-title -->
    <?php endif; // Title. ?>

    <?php if ( $link->summary() ) : ?>
    <div class="vlp-link-summary">
    <?php echo wp_kses_post( $link->summary() ); ?>
    </div><!-- vlp-link-summary -->

    <?php if ( $link->url() ) : ?>
    <div class="vlp-link-url">
    <?php echo wp_kses_post( $link->url() ); ?>
    </div><!-- vlp-link-url -->

    <a href="<?php echo esc_attr( $link->url() ); ?>" class="vlp-link" title="<?php echo esc_html( $link->title() ); ?>"<?php echo $link_attributes; ?>></a>
  <?php endif; // Summary. ?>
  </div>
</div>
