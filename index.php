<?php include 'inc/top.php'; ?>

</head>

<body>

<div id="top"></div>

<?php include 'inc/header.php'; ?>

<div class="container" style="padding:0 0 2rem 0;">
<div class="wrap">
  
  <figure>
  <picture class="fit">
    <source srcset="/assets/img/grom-xl.jpg" media="(min-width: 1200px)">
    <source srcset="/assets/img/grom-lg.jpg" media="(min-width: 800px)">
    <source srcset="/assets/img/grom-md.jpg" media="(min-width: 600px)">
    <source srcset="/assets/img/grom-sm.jpg" media="(min-width: 100px)">
    <img srcset="/assets/img/grom-sm.jpg" alt="The Grom: Owen Renzo Smith">
  </picture>
  <figcaption><p>The Grom: Owen Renzo Smith<p></figcaption>
  </figure>

</div>
</div>

<div class="container">
<div class="wrap">
<h1>Grom is a simple, lightweight responsive framework. Keep it light &amp; nimble, or add your own modules to build it up.</h1>
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

  <h2>Typography</h2>

  <h1>h1 Headline Lorem Ipsum</h1>
  <h2>h2 Headline Lorem Ipsum</h2>
  <h3>h3 Headline Lorem Ipsum</h3>
  <h4>h4 Headline Lorem Ipsum</h4>
  <h5>h5 Headline Lorem Ipsum</h5>
  <h6>h6 Headline Lorem Ipsum</h6>
  <p class="_sg">The h6 element is always set at the $base-font-size, and we increase up, incrementally.</p>

  <h5>Unordered List</h5>
  <ul>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
  </ul>

  <h5>Ordered List</h5>
  <ol>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
    <li>This is a list item blah blah</li>
  </ol>

  <h2>Grids</h2>

  <div class="grid">
    <h5>2-Column Grid</h5>
    <div class="col-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-6">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <div class="grid">
    <h5>3-Column Grid</h5>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <div class="grid">
    <h5>4-Column Grid</h5>
    <div class="col-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-3">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <div class="grid">
    <h5>1/3 - 2/3 Split</h5>
    <div class="col-4">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
    <div class="col-8">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
    </div>
  </div>

  <h2>Buttons</h2>

  <div class="grid">

    <h5>Button</h5>
    <a href="#!" class="button">Submit</a>   

    <h5>Big Button</h5>
    <a href="#!" class="button--big">Call to Action</a>

  </div>

    <h2>Panels</h2>

    <div class="grid">

      <div class="single-column">
        <div class="panel">
          <h2>This is a Panel</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit anim id est laborum.</p>
          <a href="#!" class="button--big">Call to Action</a>
        </div>
      </div>
    
    </div><!-- /.grid -->



    <h2>Tables</h2>
    <h3>Static Table: Option 1</h3>
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

    <h3>Static Table: Option 2</h3>
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
    <h3>Responsive Table</h3>
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

    <h2>Forms</h2>

    <div class="grid">

      <div class="single-column">
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



    <h2>Images</h2>

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
