<?= $this->Html->css('userLoginForm') ?>
<?= $this->assign('title', 'User Registration'); ?>

<div class="container-fluid user_form">
	<div class="row user_form_section">
		<div>
			<div class="col-xs-12 vertical_center" id="user_form_details">
			
				<?= $this->Flash->render() ?>
				<?=$this->Form->create("Users",array('url'=>'/users/register')); ?>
					<fieldset>
						<legend><?= ('Account Registration') ?></legend>
						<div id="form_fields">
							<?= $this->Form->control('username') ?>
							<?= $this->Form->control('password') ?>
						</div>
					</fieldset>
				<?=$this->Form->button('Register'); ?>
				<?=$this->Form->end(); ?>

			</div>
		</div>
	</div>
</div>