<li class="streams_param_input">
	<label for="<?php echo $input_slug ?>"><?php echo $input_name ?>
	<?php if( isset($instructions) and $instructions ): ?>
		<br /><small><?php echo $instructions ?></small>
	<?php endif ?>
	</label>
	<?php if (! empty($input)): ?>
		<div class="input"><?php echo $input ?></div>
	<?php endif; ?>
</li>
