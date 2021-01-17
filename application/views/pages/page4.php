<body id="page4">
	<div id="container-four">
		<nav>
			<?php $this->load->view("menu/main_menu");?>
		</nav>
		<main class="miki">
			<form action="">
				<input type="text" class="inputs" id="inserts">
				<button type="submit" id="submit" class="submit" value="Submit">Submit</button>
			</form>
			<div class="showLength"></div>
			<div id="active"></div>
			<div id="break25">
				<div class="break1-1">1-1</div>
				<div class="break1-2">1-2</div>
				<div class="break1-3">1-3</div>
				<div class="break1-4">1-4</div>
				<div class="break1-5">1-5</div>
				<div class="break1-6">1.6</div>
			</div>
			<div id="break1">
				<div class="break2-1">2-1</div>
				<div class="break2-2">2-2</div>
				<div class="break2-3">2-3</div>
				<div class="break2-4">2-4</div>
				<div class="break2-5">2-5</div>
				<div class="break2-6">2-6</div>
			</div>
			<div id="break">
				<p class="black">saepe cumque omnis doloribus, officiis, sit exercitationem architecto, qui ipsum?</p>
			</div>

		</main>

		<div id="content3" class="kobi"><div id="locate"></div></div>

		<div id="content1" class="indigo3">
			content 1

			<div id="theDiv" data-name="Brad" data-car="Mustang">
				<p>This is a dataset example</p>
			</div>

		</div>

		<div id="content2" class="green5">
			content 2

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