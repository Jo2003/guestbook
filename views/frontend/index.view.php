<br />
<h3><?php echo __('Entries', 'guestbook'); ?></h3>
<?php foreach($records as $record) { ?>
<h4><?php echo Html::toText($record['username']); ?><small> - <?php echo Date::format($record['date']); ?></small></h4>
<br />
<?php echo Html::toText($record['message']); ?>
<hr style='size: 1px'>
<?php } ?>
