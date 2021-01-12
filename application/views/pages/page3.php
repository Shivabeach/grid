<body id="page3">
	<div id="container-three">
		<nav>
			<?php $this->load->view("menu/main_menu");?>
		</nav>
		<main class="miki">
			<div id="locate"></div>
			<div class="mainContainer">
				<div id="left">
					<h3>Movements</h3>
					<div class="aright">Balance: <span class="balance"></span></div>
					<div id="displayMov">
						<div class="bottom-in">
							<div class="movements-in">
								<div class="movements__type movements__type--deposit"></div>
								<div class="movements__value"></div>
							</div>
							<div class="movements-in">
								<div class="movements__type movements__type--withdrawal"></div>
								<div class="movements__value"></div>
							</div>
							</div>
						</div>
					</div>

				<div id="right">
					<h3>Current account Info</h3>
					<div class="form">
						<form class="form">
							<?php $tags = [
								"class" => "inputName"
							];
							$arg = [
								"Brad" => "Brad",
								"Bill" => "Bill",
								"Kathy" => "Kathy",
								"Glenn" => "Glenn"
							];
							echo form_dropdown($tags, $arg )
							?>
							<button type="submit" id="login">Login</button>
						</form>
					</div>
					<div class="bottom-out">WithDrawals: <span class="withdraw"></span></div>
					<div class="bottom-in">Deposits: <span class="deposit"></span></div>
					<div class="name"></div>
					<div class="age"></div>
				</div>
			</div>
		</main>
		<div id="sidebar">Sidebar</div>
		<div id="content1" class="indigo3">
			<div id="timeless" class="bolded"></div>
			<div class="responce"></div>
		</div>
		<div id="content2" class="green5">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum modi, a veniam quis nobis sunt impedit officiis delectus dignissimos quidem velit nihil porro aut facere sapiente? Eveniet obcaecati blanditiis quo quisquam voluptate ut doloremque quasi a, repellat veritatis, harum vitae.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, nulla excepturi architecto quia sint quam voluptatibus non eveniet ratione nostrum veniam numquam nobis nam beatae. Id sint officiis debitis unde.</p>
		</div>
		<div id="content3" class="deco">
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum modi, a veniam quis nobis sunt impedit officiis delectus dignissimos quidem velit nihil porro aut facere sapiente? Eveniet obcaecati blanditiis quo quisquam voluptate ut doloremque quasi a, repellat veritatis, harum vitae.</p>
			<p class="copy"></p>
		</div>
</div>
<script src="<?php echo base_url('assets/js/page3.js');?>" defer></script>
</body>