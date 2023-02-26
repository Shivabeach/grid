<body id="gen">
  <div class="grid">
    <div class="span-col-4">
      <nav>
        <?php $this->load->view("menu/main_menu");?>
      </nav></div>
      <div class="span-row-2">
        <p>MAP
          <p>Get an array of all names</p>
          <div id="m1"></div>
          <p>Get an array of all heights</p>
          <div id="m2"></div>
          <p>Get an array of objects with just name and height properties</p>
          <div id="m3"></div>
          <p>Get an array of all first names</p>
          <div id="m4"></div>
        </p>
        <p>REDUCE<br>
          <p>Get the total mass of all characters</p>
          <div id="r1"></div>
          <p>Get the total height of all characters</p>
          <div id="r2"></div>
          <p>Get the total number of characters by eye color (hint. a map of eye color to count)</p>
          <div id="r3"></div>
          <p>Get the total number of characters in all the character names</p>
          <div id="r4"></div>
        </p>
        <p>FILTER<br>
          <p>Get characters with mass greater than 100</p>
          <div id="f1"></div>
          <p>Get characters with height less than 200</p>
          <div id="f2"></div>
         <p> Get all male characters</p>
          <div id="f3"></div>
          <p>Get all female characters</p>
          <div id="f4"></div>
        </p>
      </div>
      <div class="span-col-2">
        <p>SORT</p>
          <p>Sort by Mass</p>
            <div id="sort1"></div>
          <p>Sort by height</p>
            <div id="sort2"></div>
          <p>Sort by name</p>
            <div id="sort3"></div>
          <p>Sort by gender</p>
            <div id="sort4"></div>
      </div>
      <div class="span-row-2">
      <p>EVERY</p>
        <p>Does every character have blue eyes?</p>
          <div id="e1"></div>
        <p>Does every character have mass more than 40?</p>
          <div id="e2"></div>
        <p>Is every character shorter than 200?</p>
          <div id="e3"></div>
        <p>Is every character male?</p>
          <div id="e4"></div>
      <p>SOME</p>
        <p>Is there at least one male character?</p>
          <div id="s1"></div>
        <p>Is there at least one character with blue eyes?</p>
          <div id="s2"></div>
        <p>Is there at least one character taller than 200?</p>
          <div id="s3"></div>
        <p>Is there at least one character that has mass less than 50?</p>
          <div id="s4"></div>
      </div>
      <div class="span-col-2">
        <p class="highlight">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque tempora, commodi fugit porro ex similique laborum, eveniet vitae error suscipit eum in minima illum ratione, esse eligendi, sapiente molestiae aspernatur veniam. Cum repellat facilis ullam vero amet aliquam animi ad.</p>
      </div>
      <!-- <div>Item 6</div> -->
      <div class="span-col-2">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus deleniti maxime saepe aspernatur in delectus sint distinctio provident beatae voluptate aperiam dolorem, exercitationem fuga inventore, repellendus iure ad quidem sit, adipisci soluta libero, nostrum placeat. Magnam ipsum minus voluptates numquam.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Hic excepturi consequuntur natus, cupiditate voluptatibus pariatur quasi commodi praesentium? Nulla delectus veniam, unde, animi suscipit eligendi facere odit voluptates veritatis porro dolor, maxime recusandae sequi, consectetur ea iste voluptatum distinctio similique?</p>
      </div>
      <div class="span-col-2">
        <p class="copy"></p>
      </div>
      <!-- <div>Item 8</div> -->
      <div class="span-col-4">
        <button id="dark">Dark</button> <button id="light">Light</button>
        <p><a href="https://www.youtube.com/watch?v=3LOEGS4qcRM&list=PLDlWc9AfQBfZGZXFb_1tcRKwtCavR7AfT" rel="external">James Quick tutorial</a></p>
      </div>
    </div>
  <script src="<?php echo base_url('assets/js/generated-dist.js');?>""></script>

  </body>
