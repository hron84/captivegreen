   <?php $prefix = render($title_prefix); $suffix = render($title_suffix); ?>
   <?php print $prefix; ?>
   <?php if($block->subject) : ?>
   <h2>
     <?php print $block->subject ?>
   </h2>
   <?php endif; ?>
   <?php print $suffix ?>
   <?php print $content ?>
