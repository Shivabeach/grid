<body onLoad="showDate()">
<div class="container">
<div class="columns">
	<header class="is-12 main_header">
		<?php echo heading($heading, 1);?>
	</header>
</div>

<div class="columns">
	<?php $this->load->view("menu/main_menu");?>
	<div class="is-3">
		<!-- first -->
		<?php
		echo heading("Recent updates", 4, array("class" => "center"));
		echo "<ul>";
		foreach($pug as $row){
			$id = "view/index/$row->id";
		echo "<li>" . anchor($id, $row->title). "</li>";
		}?>
		</ul>

	</div>

	<div class="is-3">
		<!-- Second -->
		<?php echo heading("Newest Posts", 4, array("class" => "center"));?>
		<ul>
		<?php foreach($mug as $row) {
			$id = "view/index/$row->id";
		echo "<li>" . anchor($id, $row->title). "</li>";
		}?>
	</ul>


	</div>

	<div class="is-3">
		<!-- third -->
		<script src="assets/js/datestamp.js"></script>
	</div>
</div>
<?php foreach($slug as $row):?>
<div class="columns">
	<?php $id = "view/index/$row->id"; ?>
	<div class="is-2 centers"><h4><?php echo anchor($id,$row->title);?></h4> </div>
	<div class="is-8"><?php echo $row->slug;?></div>
	<div class="is-2 small">
		Original Date: <?php
		$firstdate = $row->date;
		$fdate = nice_date($firstdate,"M d Y");
		echo $fdate;?>
		<br>
		<?php if($row->last_date == "1111-11-11") {
			echo "";
		}else
		{
			$lastdate = $row->last_date;
			$ldate = nice_date($lastdate, "M d Y");
			echo "Updated", nbs(2), "<span class='emp'>$ldate </span></p>";
		}?>
		<?php
			$id = "admin/fill_form/$row->id";
			if($this->session->userdata('is_logged_in') == true){
				echo "Post # " . anchor($id, $row->id);
			}else {
				echo "Post # " . $row->id;
			}

			?>
	</div>
</div>
<?php endforeach;?>


