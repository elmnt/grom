<?php include 'inc/top.php'; ?>

</head>

<body>

<div id="top"></div>

<?php include 'inc/header.php'; ?>

<div class="container" style="padding:0 0 2rem 0;">
<div class="wrap">

  <picture class="fit">
    <source srcset="/assets/img/grom-xl.jpg" media="(min-width: 1200px)">
    <source srcset="/assets/img/grom-lg.jpg" media="(min-width: 800px)">
    <source srcset="/assets/img/grom-md.jpg" media="(min-width: 600px)">
    <source srcset="/assets/img/grom-sm.jpg" media="(min-width: 100px)">
    <img srcset="/assets/img/grom-sm.jpg" alt="The Grom: Owen Renzo Smith">
  </picture>

</div>
</div>

<div class="container">
<div class="wrap">
<h1><strong>Grom</strong> is a simple, lightweight responsive framework. Keep it light &amp; nimble, or add your own modules to build it up.</h1>
  <p>&nbsp;</p>
  <p style="width:100%;max-width:720px;"><strong>Grom</strong> &mdash; (short for grommet)<br>Describes someone that is young and is a skilled surfer/skateboarder. Extended to refer to any young person, in surf/skate culture.</p>
</div>
</div>

<!-- responsive slideshow (it's edge-to-edge as long as it's inside .container-full)
<div class="container-full">

  <div class="rslides_container">
    <ul class="rslides" id="slider">
      <li>
        <img src="/assets/img/_slideshow/01.jpg" alt="">
        <div class="caption">
          <h1>Donec id elit non mi porta gravida at eget metus.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <a href="#!" class="button">Call to Action</a>
        </div>
      </li> 
      <li>
        <img src="/assets/img/_slideshow/02.jpg" alt="">
        <div class="caption">
          <h1>Donec id elit non mi porta gravida at eget metus.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <a href="#!" class="button">Call to Action</a>
        </div>
      </li> 
      <li>
        <img src="/assets/img/_slideshow/03.jpg" alt="">
        <div class="caption">
          <h1>Donec id elit non mi porta gravida at eget metus.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <a href="#!" class="button">Call to Action</a>
        </div>
      </li> 
      <li>
        <img src="/assets/img/_slideshow/04.jpg" alt="">
        <div class="caption">
          <h1>Donec id elit non mi porta gravida at eget metus.</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
          <a href="#!" class="button">Call to Action</a>
        </div>
      </li>
    </ul>
  </div>
  <div class="cf"></div>

</div>
/full-width slideshow -->

<div class="container">
<div class="wrap pad">

  <h2 class="_sg-head">Typography</h2>

  <h1>h1 Headline Lorem Ipsum</h1>
  <h2>h2 Headline Lorem Ipsum</h2>
  <h3>h3 Headline Lorem Ipsum</h3>
  <h4>h4 Headline Lorem Ipsum</h4>
  <h5>h5 Headline Lorem Ipsum</h5>
  <h6>h6 Headline Lorem Ipsum</h6>
  <p class="_sg">The h6 element is always set at the $base-font-size, and we increase up, incrementally.</p>

  <h5 class="_sg-head">Unordered List</h5>
  <ul>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
  </ul>

  <h5 class="_sg-head">Ordered List</h5>
  <ol>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
  </ol>

  <h2 class="_sg-head">Grids</h2>

  <div class="grid mb2">
    <h5>2-Column Grid</h5>
    <div class="col-1-2">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-1-2">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <div class="grid mb2">
    <h5>3-Column Grid</h5>
    <div class="col-1-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-1-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-1-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <div class="grid mb2">
    <h5>1/3 - 2/3 Split</h5>
    <div class="col-1-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-2-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

<style type="text/css">
.show-fours .col-1-4 {
  border: 1px solid indianred;
}
.show-twos > .col-1-2 {
  border: 1px solid indianred;
}

@media all and (max-width: 1000px){

  .show-twos .grid .col-1-2 {
    float: none;
    display: block;
    width: 100%;
    margin-right: 0;
  }

}

</style>

  <div class="grid mb2 show-fours">

    <h5>4-Column Grid (option 1)</h5>
    <p>Four equal columns</p>

    <div class="col-1-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-1-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-1-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-1-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>

  </div>

  <div class="grid mb2 show-twos">
  <h5>4-Column Grid (option 2)</h5>
  <p>Two nested 2-column grids: We'd use this if we want both nested halves to change <em>before</em> the usual, global column change. A separate media query is necessary.</p>
    
    <div class="col-1-2">
      <div class="grid">
        <div class="col-1-2">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="col-1-2">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>        
      </div>
    </div>

    <div class="col-1-2">
      <div class="grid">
        <div class="col-1-2">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>
        <div class="col-1-2">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        </div>        
      </div>
    </div>

  </div>

  <h2 class="_sg-head">Buttons</h2>

  <div class="grid mb2">

    <h5>Standard Button</h5>
    <a href="#!" class="button">Submit</a>

    <h5>Standard Button - Alternate Color 1</h5>
    <a href="#!" class="button--altone">Submit</a>    

    <h5>Standard Button - Alternate Color 2</h5>
    <a href="#!" class="button--alttwo">Submit</a>    

    <h5>Big Button</h5>
    <a href="#!" class="button--big">Call to Action</a>

    <h5>Big Button - Alternate Color 1</h5>
    <a href="#!" class="button--big--altone">Call to Action</a>

    <h5>Big Button - Alternate Color 2</h5>
    <a href="#!" class="button--big--alttwo">Call to Action</a>

  </div>

<style type="text/css">

.h-center-holder {
  width: 100% !important;
  text-align: center !important;
}
.h-center-content {
  margin-left: auto !important;
  margin-right: auto !important;
}

</style>




    <h2 class="_sg-head">Panels</h2>

    <div class="grid">

      <div class="col-1-2">
        <div class="panel">
          <h2>This is a Panel</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit anim id est laborum.</p>
          <a href="#!" class="button--big">Call to Action</a>
        </div>
      </div>
    
      <div class="col-1-2">
        <div class="panel">
          <div class="h-center-holder">
            <h2 class="h-center-content">This is a Panel</h2>
          </div>
          <p><strong>In this example, the title and the button are centered, using a couple extra styles.</strong></p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit anim id est laborum.</p>
          <p><strong>In this example, the title and the button are centered, using a couple extra styles.</strong></p>
          <div class="h-center-holder">
            <a href="#!" class="button--big h-center-content">Call to Action</a>
          </div>
        </div>
      </div>
    
    </div><!-- /.grid -->



    <h2 class="_sg-head">Tables</h2>
    <h3 class="sg__head">Static Table: Option 1</h3>
    <div class="grid">
      <table cellspacing="0" border="0" class="static-table static-table--optional-class">
        <thead>
        <tr>
          <th width="25%">Thead</th>
          <th width="25%">Thead</th>
          <th width="25%">Thead</th>
          <th width="25%">Thead</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
        </tr>
        <tr>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
          <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
        </tr>
        </tbody>
      </table>
    </div><!-- /.grid -->

    <p>&nbsp;</p>

    <h3 class="sg__head">Static Table: Option 2</h3>
    <div class="grid">
      <table cellspacing="0" border="0" class="static-table static-table--optional-class">
        <thead>
        <tr>
          <th width="25%">Thing</th>
          <th width="25%">Type of Thing</th>
          <th width="25%">Color of Thing</th>
          <th width="25%">Size of Thing</th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="table__row-label">Animal</td>
          <td>Cow</td>
          <td>Black &amp; White</td>
          <td>Big</td>
        </tr>
        <tr>
          <td class="table__row-label">Car</td>
          <td>Corolla</td>
          <td>Red</td>
          <td>Small</td>
        </tr>
        </tbody>
      </table>
    </div><!-- /.grid -->

    <p>&nbsp;</p>

    <p>This is not to imply that there are <strong>only</strong> two options for styling tables. They're just offered as starting points for different style options.</p>
    <h3 class="sg__head">Responsive Table</h3>
    <p>This is a <strong>basic</strong> responsive table. All requirements should be clarified in the project's definition phase, and the proper responsive table layout can be built up from this starting point.</p>
    
    <div class="grid">
      <table cellspacing="0" border="0" class="responsive-table responsive-table--optional-class">
      <thead>
      <tr>
        <th width="50%">Thead</th>
        <th width="25%">Thead</th>
        <th width="25%">Thead</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="mobile-thead">Mobile Thead</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
        <td class="mobile-thead">Mobile Thead</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
        <td class="mobile-thead">Mobile Thead</td>
        <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</td>
      </tr>
      </tbody>
      </table>
    </div><!-- /.grid -->

    <h2 class="_sg-head">Forms</h2>

    <div class="grid">

      <div class="col-1-2">
        <div class="panel">

        <form>

          <label>Input Label</label>
          <input type="text" placeholder="Placeholder" />

          <label>Input Label</label>
          <input type="text" placeholder="Placeholder" />

          <label>Select Box</label>
          <select>
            <option selected="selected">Please Choose</option>
            <option value="homer">Homer</option>
            <option value="marge">Marge</option>
            <option value="bart">Bart</option>
            <option value="lisa">Lisa</option>
            <option value="maggie">Maggie</option>
          </select>

          <label>Textarea Label</label>
          <textarea placeholder="Placehoder"></textarea>

          <fieldset>
            <label>Choose Your Favorite</label>
            <div class="form--radio-group"><input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label></div>
            <div class="form--radio-group"><input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label></div>
            <div class="form--radio-group"><input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label></div>
          </fieldset>

          <fieldset>
            <label>Check these out</label>
            <div class="form--cb-group"><input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label></div>
            <div class="form--cb-group"><input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label></div>
            <div class="form--cb-group"><input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label></div>
          </fieldset>

          <button type="submit">Submit</button>

        </form>

        </div>
      </div>
    
      <div class="col-1-2">
        <div class="panel">

        <form>

          <label>Input Label</label>
          <input type="text" placeholder="Placeholder" />

          <label>Input Label</label>
          <input type="text" placeholder="Placeholder" />

          <label>Select Box</label>
          <select>
            <option selected="selected">Please Choose</option>
            <option value="homer">Homer</option>
            <option value="marge">Marge</option>
            <option value="bart">Bart</option>
            <option value="lisa">Lisa</option>
            <option value="maggie">Maggie</option>
          </select>

          <label>Textarea Label</label>
          <textarea placeholder="Placehoder"></textarea>

          <fieldset>
            <label>Choose Your Favorite</label>
            <div class="form--radio-group"><input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label></div>
            <div class="form--radio-group"><input type="radio" name="pokemon" value="Blue" id="pokemonBlue"><label for="pokemonBlue">Blue</label></div>
            <div class="form--radio-group"><input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label></div>
          </fieldset>

          <fieldset>
            <label>Check these out</label>
            <div class="form--cb-group"><input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label></div>
            <div class="form--cb-group"><input id="checkbox2" type="checkbox"><label for="checkbox2">Checkbox 2</label></div>
            <div class="form--cb-group"><input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label></div>
          </fieldset>

          <button type="submit">Submit</button>

        </form>

        </div>
      </div>
    
    </div>



    <h2 class="_sg-head">Images</h2>

    <div class="grid">

      <p class="_sg">By default, images appear in their native size (no special class) and will respond down on smaller screens, once the container is smaller than the image.</p>
      <div class="grid" style="border:1px solid indianred;padding:10px;">
        <img src="/assets/img/grom-sm.jpg">
      </div>
    
      <p>&nbsp;</p>

      <p class="_sg">Images with class="fit" will ALWAYS fill the container, no matter their native size.</p>
      <div class="grid" style="border:1px solid indianred;padding:10px;">
        <img src="/assets/img/grom-sm.jpg" class="fit">
      </div>

    </div>


  </div>
  </div>

<?php include 'inc/footer.php'; ?>

</body>
</html>
