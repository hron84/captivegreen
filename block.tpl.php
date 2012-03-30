<li class="block <?php print "box-{$block->module} region-{$block->region}"?>" id="<?php print "box-{$block->module}-{$block->delta}"; ?>">
   <?php $prefix = render($title_prefix); $suffix = render($title_suffix); ?>
   <?php print $prefix; ?>
   <?php if($block->subject) : ?>
   <h2>
     <?php print $block->subject ?>
   </h2>
   <?php endif; ?>
   <?php print $suffix ?>
   <?php print $content ?>
</li>
