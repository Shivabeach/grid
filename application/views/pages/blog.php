<body id="blog">
	<div class="container-blog">
		<nav>
			<?php $this->load->view("menu/main_menu");?>
		</nav>
		<main class="mori">
			<img src="../assets\images\SenaeMori.jpg" alt="Alt">

		</main>
		<div id="sidebar">Sidebar</div>
		<div id="content1" class="thatch">
			<div class="blog"></div>
			<p>This is an example of JS create a list</p>

			<ul id="drinks">
				<li>Water</li>
				<li>Milk</li>
			</ul>

			<ul class="creation">
				
			</ul>
		</div>
		<div id="content2" class="kobi">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum modi, a veniam quis nobis sunt impedit officiis delectus dignissimos quidem velit nihil porro aut facere sapiente? Eveniet obcaecati blanditiis quo quisquam voluptate ut doloremque quasi a, repellat veritatis, harum vitae.</p>
			<div id="locate"></div>

		</div>
		<div id="content3" class="indigo3">
		Content 3
			<p class="copy"></p>
		</div>
		<div id="content4" class="green3">Content4</div>
		<footer>Footer</footer>
	</div>
	<script src="<?php echo base_url('assets/js/blog.js');?>""></script>
</body>
