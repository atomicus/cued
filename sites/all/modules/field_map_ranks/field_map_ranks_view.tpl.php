<?php
/**
 * This implements a template for field_map_ranks view.
 *
 */

$items = $element['#items'][0];
$avg = 0;
?>
<table class="<?php print $classes; ?>">
  <thead>
    <tr>
      <td colspan="0" ><?php echo $element['value_avg']['#label'] ?>:</td> </tr><tr>
      <td class="score"><?php echo  $element['value_avg']['#data'] ?></td>
    </tr>
  </thead>
  <tbody>
    <?php foreach($items as $delta => $item):?>
      <?php if($delta != 'value_avg'):?>
    <tr>
      <td><?php echo $element[$delta]['#label'];?>:</td>
    </tr>
    <tr>
      <td class="score"><?php echo $element[$delta]['#data'];?></td>
    </tr>
   <?php endif ?>
    <?php endforeach ?>
  </tbody>

</table>

