<body onLoad="showDate()">

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
	<div class="is-2 centers"><h4><?php echo anchor($id,$row->title);?></h4> </div>
	<div class="is-8"><?php echo $row->slug;?></div>

	<div class="is-2 small">
		Original Date: <?php
		$firstdate = $row->date;
		$fdate = nice_date($firstdate,"M d Y");
		echo $fdate;?>
		<br>
		<?php if($row->last_date == "") {
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
