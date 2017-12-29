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
			<?php echo heading("Bostick Ancestry", 4, array("class" => "centers"));?>
			<p>
				The following names are the names from the list of Bostick and Reed ancestors that connect us to other people from Ancestry.com.</p>
				<p>This is not a comprehensive list of our ancesteral tree. Many of these names occur many times in that list, but only the Distinct names are listed here
			</p>

		</div>
	</div>
	<div class="is-3">
			<?php $this->load->view("menu/fam-menu");?>
	</div>
</div>

<div class="columns">
	<div class="is-1"></div>

	<div class="is-5">
		<?php echo heading($maname, 3);?>
		<ul>
			<?php foreach($male as $row):?>
			<li class="inline-name"><?php echo $row->male_name;?></li>
		<?php endforeach;?>
		</ul>

	</div>
	<div class="is-5">
		<?php echo heading($fename, 3);?>
		<ul>
			<?php foreach($female as $row):?>
			<li class="inline-name"><?php echo $row->female_name;?></li>
			<?php endforeach;?>
		</ul>
	</div>

	<div class="is-1"></div>
</div>
