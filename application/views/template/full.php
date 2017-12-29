<body>
<div class="container">
<div class="columns">
	<header class="is-12 main_header">
		<?php foreach($full as $row):?>
		<?php echo heading($row->title, 2);?>
	</header>
</div>

<div class="columns">
	<?php $this->load->view("menu/main_menu");?>

	<div class="is-6 center"><?php echo auto_typography($row->slug);?> </div>

	<div class="is-3 center">Original Date <br>
		<p><?php echo $row->date;?></p>
		Date Updated <br>
		<p><?php echo $row->last_date;?></p></div>
</div>

<div class="columns">
	<?php $id = "view/index/$row->id";?>
	<div class="is-12"><?php echo auto_typography($row->content);?></div>

</div>
<?php endforeach;?>
