<div class="container">
<div class="columns">
	<header class="is-12 main_header">
		<?php echo heading($heading, 1);?>
	</header>
</div>

<div class="columns">
	<?php $this->load->view("menu/main_menu");?>
	<div class="is-6">
		<div class="content">
			Middle data

		</div>
	</div>
	<div class="is-3">
			<?php $this->load->view("menu/fam-menu");?>
	</div>
</div>

<div class="columns">
	<div class="is-6">
		data
	</div>
	<div class="is-6">
		data
	</div>
</div>
