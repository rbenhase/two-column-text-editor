<div class="fl-rich-text fl-two-column-text">
  <div class="fl-rich-text-col-a">
    <div class="column-inner">
      <?php echo wpautop( apply_filters( 'the_content', $settings->text_col_a ) ); ?>
    </div>
  </div>
  <div class="fl-rich-text-col-b">
    <div class="column-inner">
      <?php echo wpautop( apply_filters( 'the_content', $settings->text_col_b ) ); ?>
    </div>
  </div>
</div>