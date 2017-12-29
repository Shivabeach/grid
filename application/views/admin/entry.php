<body>
	<div class="column">
		<div class="is-6">
			<?php echo validation_errors('<li class="error">', '</li>');?>
			<?php
				$args = [
					'id' => 'ajax'
				];
				echo form_open('admin/process', $args);



				echo form_input('pass');
				echo "<br>";
				echo form_input('name');
				echo "<br>";
				echo form_input('email');
				echo "<br>";
				echo form_submit('submit', 'Submit');

			?>
		</div>

	<div class="is-6"></div>
	<p>Result <span id="display"></span>  </p>

	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/main.min.js');?>"></script>
