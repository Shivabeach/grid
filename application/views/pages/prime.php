<body id="prime">
	<div class="container-prime">
		<nav>
			<?php $this->load->view("menu/main_menu");?>
		</nav>
		<main>Main
			<div id="locate"></div>
		</main>
		<div id="sidebar">
			<p>Sidebar</p>
		</div>
		<div id="content1" class="gum-leaf">
			<h3>Vinegars</h3>
			<hr>
			<ol>
				<li>Raisen Vinegar - 10/18/2020 - 3.56 ph</li>
				<li>Mango Vinegar  - 10/18/2020 - 3.33 ph</li>
				<li>Cherry Vinegar - 11/7/2020  - 3.88 ph</li>
				<li>Raisen Vinegar - 11/22/2020 - 3.55 ph</li>
			</ol>
		</div>
		<div id="content2" class="perano">
			<p>Our sun is traveling at 507784mph around the galaxy</p>
		</div>
		<div id="content3" class="lilac">
			<form action="">
				<input type="text" id="added">
				<button type="submit" class="submit">Submit</button>
			</form>

			<div>Array: <span class="displayArray"></span> </div>
			<div>Number added: <span class="displayNumberAdded"></span></div>
			<div>Reduced: <span class="reduced"></span>  </div>
			<div>Mapped and filtered: <span class="clipped"> </span></div>
			<div>Max: <span class="max"></span></div>

		</div>
		<div id="content4" class="prim">Content 4</div>
		<footer class="prime-foot">
			<div id="fblock1">Footer-Block </div>
			<div id="fblock2">Footer-Block </div>
			<div id="fblock3">Footer-Block </div>
		</footer>
	</div>
	<script src="<?php echo base_url('assets/js/prime-dist.js');?>""></script>
</body>

