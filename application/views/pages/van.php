<body>

<div class="container">
	<div class="columns">
		<header class="is-12 main_header">
			<?php echo heading($heading, 1);?>
		</header>
	</div>
	<div class="columns">
		<?php $this->load->view("menu/main_menu");?>
		<div class="is-6 center">Definition of the family</div>
		<div class="is-3">
			<?php $this->load->view("menu/fam-menu");?>
		</div>
	</div>

	<?php foreach($van as $row):?>
<div class="columns">
	<?php $id = "view/index/$row->id"; ?>
	<div class="is-2 centers"><?php echo anchor($id,$row->title);?> </div>
	<div class="is-8"><?php echo $row->slug;?></div>
	<div class="is-2 center">
		Original Date <br>
		<p class="emp" ><?php echo $row->date;?></p>
		Date Updated <br>
		<p class="emp" ><?php echo $row->last_date;?></p>
	</div>
</div>
<?php endforeach;?>
