<body id="page4">
  <div id="container-four">
    <nav>
      <?php $this->load->view("menu/main_menu");?>
    </nav>
    <main class="miki">
      <form action="" class="relate">
        <label for="inserts">Insert</label>
        <input type="text" class="inputs" id="inserts">
        <button type="submit" id="submit" class="submit" value="Submit">Submit</button>
      </form>
      <button id="shift">Shift Array</button>
      <p></p>
      <div id="space"></div>
      <div class="showLength"></div>

      <div id="break25">
        <div class="break1-1"></div>
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
        <div class="form">
          <input type="text" id="email" class="form__input" autocomplete="off" placeholder=" ">
          <label for="email" class="form__label">EMAIL</label>
        </div>
      </div>

    </main>

    <div id="content3">
      <div id="locate"></div>
      <span class="colors"></span>

    </div>

    <div id="content1" class="bg-orange-in">
      <div class="page4"></div>
      content 1

      <div id="theDiv" data-name="Brad" data-car="Mustang">
        <p>This is a dataset example</p>
      </div>
      <p class="copy"></p>
    </div>

    <div id="content2" class="green5">
      <div>content 2</div>

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
  <script type="module" src="<?php echo base_url('assets/js/page4.js');?>"></script>
</body>