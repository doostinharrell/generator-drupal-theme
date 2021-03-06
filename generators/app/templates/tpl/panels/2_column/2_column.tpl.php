<?php !empty($css_id) ? print '<div id="' . $css_id . '>' : ''; ?>

    <?php if ($content['header']): ?>
      <div class="row">
        <div class="large-12 columns">
  			  <?php print $content['header']; ?>
        </div>
  		</div>
    <?php endif ?>

    <?php if ($content['column_1'] && $content['column_2']): ?>
      <div class="row">
        <div class="large-3 columns">
          <?php print $content['column_1']; ?>
        </div>

        <div class="large-9 columns">
          <?php print $content['column_2']; ?>
        </div>
      </div>
    <?php endif ?>

<?php !empty($css_id) ? print '</div>' : ''; ?>
