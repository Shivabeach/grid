		<div class="columns fixed">
			<div class="is-3 basement">
				<?php echo heading("Menu", 3, array("class" => "center")); ?>
				<ul class="link2">
					<li class="inline-link">
					<?php echo anchor("pages/", "Home");?></li>
					<li class="inline-link">
					<?php echo anchor("pages/van", "VanHorns");?></li>
				</ul>
			</div>
			<div class="is-6 basement">More Info needed here


			</div>
			<div class="is-3 basement">
				<h4 id="timer"></h4>
				<?php if($this->session->userdata('name')){
					echo heading($this->session->userdata('name'), 4);
					echo anchor('admin/logout', 'Logout');
				}
?>
			</div>
		</div>
	</div> <!-- end of container -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<script src="<?php echo base_url('assets/js/main.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/datestamp.min.js');?>"></script>

</body>
</html>
