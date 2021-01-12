<body id="page4">
	<div id="container-four">
		<nav>
			<?php $this->load->view("menu/main_menu");?>
		</nav>
		<main class="miki">
			<div id="locate"></div>

			<form action="">
				<input type="text" class="inputs" id="inserts">
				<button type="submit" id="submit" class="submit" value="Submit">Submit</button>
			</form>
			<div class="showLength"></div>
			<div id="active"></div>
		</main>
		<div id="content3" class="kobi">Content 3</div>

		<div id="content1" class="indigo3">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum modi, a veniam quis nobis sunt impedit officiis delectus dignissimos quidem velit nihil porro aut facere sapiente? Eveniet obcaecati blanditiis quo quisquam voluptate ut doloremque quasi a, repellat veritatis, harum vitae.</p>
			<div id="theDiv" data-name="Brad" data-car="Mustang">
				This is a dataset example
			</div>

		</div>

		<div id="content2" class="green5">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum modi, a veniam quis nobis sunt impedit officiis delectus dignissimos quidem velit nihil porro aut facere sapiente? Eveniet obcaecati blanditiis quo quisquam voluptate ut doloremque quasi a, repellat veritatis, harum vitae.</p>
			<p>Using a dataset property in a paragraph(see above section)</p>

			const sets = document.getElementById('theDiv');<br>
			console.log(sets.dataset);<br>
			const name = sets.dataset.name;<br>
			const car = sets.dataset.car;<br>
			const list = document.createElement('p');<br>
			const listing = `${name} drives a ${car}`;<br>
			list.append(listing);<br>
			sets.appendChild(list);

		</div>


		<!-- <div id="content2">Contented</div> -->
	</div>
	<script src="<?php echo base_url('assets/js/page4-dist.js');?>""></script>
</body>