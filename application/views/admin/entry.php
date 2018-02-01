<body>
	<div class="container">
	<div class="column">
		<div class="is-5">
			<?php echo validation_errors('<li class="error">', '</li>');?>
			<?php
				$args = [
					'id' => 'ajax44'
				];
				echo form_open('admin/legal', $args);


				echo "<p>Password</p>";
				echo form_input('pass');
				echo "<br>";
				echo "<p>Name</p>";
				echo form_input('name');
				echo "<br>";
				echo "<p>Email</p>";
				echo form_input('email');
				echo "<br>";
				echo form_submit('submit', 'Submit');
				echo form_reset('reset', "Reset");

			?>
		</div>

	<div class="is-5">
	<p>Result <span id="display"></span>  </p>

	</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url('assets/js/main.min.js');?>"></script>
