<?= $this->Html->css('userHome') ?>
<?= $this->assign('title', 'User Home Page'); ?>

<div class="container-fluid user_home">

	<div class="row user_home_section" id="user_section">
	
		<div>
			<div class="col-xs-12">
				<div class="row" id="userContent">
				
					<div class="col-md-6 col-sm-12" id="info1">
						<h1>Info 1</h1>
						<?= $testId ?>
					</div>
					
					<div class="col-md-6 col-sm-12" id="info2">
						<h1>Info 2</h1>
						<?= $testId ?>
					</div>
				
				</div>
			</div>
		</div>
		
	</div>

</div>