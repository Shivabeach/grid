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

<div class="columns">
	<?php $id = "view/index/$row->id";?>
	<div class="is-12"><?php echo auto_typography($row->content);?></div>
	<?php endforeach;?>
</div>
</div>


