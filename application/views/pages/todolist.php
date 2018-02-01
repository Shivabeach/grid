<body onLoad="showDate()">
<div class="container">
<div class="columns">
	<header class="is-12 main_header">
		<?php echo heading("Todo List", 1);?>
	</header>
</div>

<div class="columns">
	<?php $this->load->view("menu/main_menu");?>
	<div class="is-6">
		<div class="content">
			<?php echo heading("ToDo List", 3, array("class" => "centers")); ?>


		</div>
	</div>
	<div class="is-3">

	</div>
</div>

<div class="columns">
	<div class="is-6">
		<div class="content">
			<div class="todo"><?php echo heading("ToDo List", 3, array("class" => "centers"));?>


				<ul class='centers block'>
					<?php
					if(!empty($items))
					foreach($items as $row):?>
					<li class='block-link'>

						<?php echo $row->description;?> &nbsp;
						<a href="<?php echo site_url('todolist/delete/' . $row->id);?>">
						<i class='fa fa-trash' aria-hidden='true'></i></a></li>
			<?php endforeach;?>
				</ul>

			</div>
		</div>
	</div>
	<div class="is-6">
		<div class="content">
			<div class="todo">

				<?php
					$args = [
						"id" => "ajax22"
					];
					echo form_open('todolist/set_item', $args);
					$arg = [
						"name"     => "item",
						"style"    => "width: 40%",
						"id"       => "id1",
						'required' => TRUE
					];
					echo form_label('New Task');
					echo form_input($arg);
					echo form_submit('Submit', 'Submit', array("class" => "butt"));
					echo form_reset('reset', 'Reset', array("class" => "butt"));

				?>


			</div>
		</div>
	</div>
</div>
