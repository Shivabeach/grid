<body id="prime">
	<div class="container-prime">
		<nav>
			<?php $this->load->view("menu/main_menu");?>
		</nav>
		<main>
			<div>Main</div>
			<div class="prime"></div>
			<p>function addItUp() {<br>
				let totals = theArray.reduce((arr, cur) => arr + cur, 0);<br>
				reduced.innerHTML = totals;<br>
			}</p>
			<p>function maxNum() {<br>
				const maxx = theArray.reduce((acc, cur, i, arr) => (acc > cur ? acc : cur),null,);<br>
				max.innerHTML = maxx;<br>
			}</p>
			<p>
				currentAccount = accounts.find(acc => acc.username === inputLoginUsername.value<br>
				);
			</p>
		</main>
		<div id="sidebar">
			<p>Sidebar</p>
		</div>
		<div id="content1" class="gum-leaf">
			<h3>Vinegars</h3>
			<hr>
			<ol>
				<li>Raisin Vinegar - 10/18/2020 - 3.56 ph</li>
				<li>Mango Vinegar  - 10/18/2020 - 3.33 ph</li>
				<li>Cherry Vinegar - 11/7/2020  - 3.88 ph</li>
				<li>Raisin Vinegar - 11/22/2020 - 3.55 ph</li>
			</ol>
		</div>
		<div id="content2" class="perano">
			<p>Our sun is traveling at 507,784 mph around the galaxy</p>
			<p>This translates to 44,684,992 feet per minute </p>
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
			<div>Min: <span class="min"></span></div>

		</div>
		<div id="content4" class="prim">Content 4</div>
		<footer class="prime-foot">
			<div id="fblock1"> <span>fblock1</span></div>
			<div id="fblock2">Footer-Block #fblock2
				<p class="copy"></p>
			</div>
			<div id="fblock3">
			Footer-Block #fblock3
			<div class="random"></div>

			</div>
		</footer>
	</div>
	<script src="<?php echo base_url('assets/js/prime-dist.js');?>" defer></script>
</body>
