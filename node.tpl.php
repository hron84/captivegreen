<div id="node-<?php print $node->nid ?>" class="post<?php print $classes; if(!$status) print ' node-unpublished'; ?>">
  <h2 class="title"><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title ?></a></h2>
  <div style="clear: both;">&nbsp;</div>
  <div class="entry">
    <?php
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  <?php print render($content['links']); ?>
  <?php print render($content['comments']); ?>
</div>
