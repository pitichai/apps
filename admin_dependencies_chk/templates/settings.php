<div id="status_list" class="section">
	<h2><?php p($l->t('Dependencies status'));?></h2>
	<ul class="state">
		<?php foreach($_['items'] as $item):?>
			<li class="state_<?php p($item['status']);?>">
				<span class="state_module" title="<?php p($item['message']);?>"><?php p($item['part']);?></span>
				<div class="state_used"><?php p($l->t('Used by :'));?>
					<ul>
						<?php foreach($item['modules'] as $module):?>
							<li><?php p($module);?></li>
						<?php endforeach;?>
					</ul>
			</li>
		<?php endforeach;?>
	</ul>
</div>
