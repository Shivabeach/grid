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
			<?php echo heading("VanHorn Ancestry", 4, array("class" => "centers"));?>
			<p>
				The following names are the names from the list of VanHorn and Hunt ancestors that connect us to other people from Ancestry.com.</p>
				<p>This is not a comprehensive list of our ancesteral tree. For example, the womans name "Covenhoven" has the number 5 next to it. That means we have 5 relatives who are related to us through Annejte Covenhoven. Incidently, she is the wife of the man who first used the VanHorn name in our line.
			</p>

		</div>
	</div>
	<div class="is-3">
			<?php $this->load->view("menu/fam-menu");?>
	</div>
</div>

<div class="columns">
	<div class="is-6">
		<?php echo heading($maname, 3);?>
		<ul>
			<?php foreach($male as $row) {
			echo "<li class='inline-name'>$row->guys [$row->total]</li>";
		}?>
		</ul>

	</div>
	<div class="is-6">
		<?php echo heading($fename, 3);?>
		<ul>
			<?php foreach($female as $row) {
			echo "<li class='inline-name'>$row->girls [$row->total]</li>";
			}?>
		</ul>
	</div>
</div>
