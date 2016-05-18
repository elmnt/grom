<?php include 'inc/top.php'; ?>

<style>
/* some styles for the demo only */
.h2-demo {
  margin: 3rem 0;
  font-family: "Lato", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 1rem;
  line-height: 1em;
  font-weight: bold;
  font-weight: 700;
  font-style: normal;
  text-transform: uppercase;
  color: orangered;
}
.p-demo {
  color: orangered;
}
.footer {
  color: #999;
  text-decoration: none;
}
.footer a {
  color: white;
  text-decoration: none;
}
.footer a:hover,
.footer a:active,
.footer a:focus {
  color: #666;
}
.footer .container--full {
  background-color: #333;
}
.footer .button {
  margin-bottom: 1rem;
  background-color: white;
  color: #333;
}
.footer .button:hover,
.footer .button:active,
.footer .button:focus {
  background-color: #666;
  color: #333;
}
.footer i {
  margin: 0 10px;
}
/* /some styles for the demo only */
</style>

</head>

<body>

<div id="top"></div>

<?php include 'inc/header.php'; ?>

<div class="container">
<div class="wrap">
<h1 class="mt4 mb4">Grom is a lightweight, responsive framework for fast prototyping, or building small sites.</h1>
  <p style="width:100%;max-width:720px;"><strong>Grom</strong> &mdash; (short for grommet)<br>Describes someone that is young and is a skilled surfer/skateboarder. Extended to refer to any young person, in surf/skate culture.</p>
</div>
</div>

<div class="container--full">
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
<div class="wrap">

  <h2 class="h2-demo">Typography</h2>

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

  <h2 class="h2-demo" style="margin-bottom:1rem;">12-Column Grid</h2>
  <p class="p-demo" style="margin-bottom:3rem;">I've included a few samples here, but there are many more options.</p>

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

  <h2 class="h2-demo">Buttons</h2>

  <h5>Button</h5>
  <a href="#!" class="button">Shizzle</a>   

  <h5>Big Button</h5>
  <a href="#!" class="button--big">Drizzle</a>

  <h2 class="h2-demo">Responsive Table</h2>
    
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

  <h2 class="h2-demo" style="margin-bottom:1rem;">Forms</h2>
  <p class="p-demo" style="margin-bottom:3rem;">I'm using <a href="http://formhack.io" target="_blank">FormHack</a>, by <a href="https://twitter.com/ireaderinokun" target="_blank">@ireaderinokun</a>.</p>

  <div class="single-column" style="max-width:500px;">

    <form>

    <section id="form-input">

      <h2 class="h2-demo">Input</h2>

      <label for="">Input Type Text</label>
      <input type="text" name="input-type-text">

      <label for="">Input Type Email</label>
      <input type="email" name="input-type-email">

      <label for="">Input Type Password</label>
      <input type="password" name="input-type-password">

      <label for="">Input Type URL</label>
      <input type="url" name="input-type-url">

      <label for="">Input Type Tel</label>
      <input type="tel" name="input-type-tel">

      <label for="">Input Type Number</label>
      <input type="number" name="input-type-number">

      <label for="">Input Type Search</label>
      <input type="search" name="input-type-search">

      <label for="">Input Type Checkbox</label>
      <input type="checkbox" name="input-type-checkbox1"> Value 1<br>
      <input type="checkbox" name="input-type-checkbox2"> Value 2<br>
      <input type="checkbox" name="input-type-checkbox3"> Value 3<br>

      <label for="">Input Type Radio</label>
      <input type="radio" name="input-type-radio1"> Value 1<br>
      <input type="radio" name="input-type-radio2"> Value 2<br>
      <input type="radio" name="input-type-radio3"> Value 3<br>

      <label for="">Input Type Range</label>
      <input type="range" name="input-type-range">

      <label for="">Input Type File</label>
      <input type="file" name="input-type-file">
      <input type="file" name="input-type-file">

      <label for="">Input Type Color</label>
      <input type="color" name="input-type-color">

      <label for="">Input Type Date</label>
      <input type="date" name="input-type-date">

      <label for="">Input Type Datetime Local</label>
      <input type="datetime-local" name="input-type-datetime-local">

      <label for="">Input Type Month</label>
      <input type="month" name="input-type-month">

      <label for="">Input Type Time</label>
      <input type="time" name="input-type-time">

      <label for="">Input Type Week</label>
      <input type="week" name="input-type-week">

    </section>

    <section id="form-select-button">

      <h2 class="h2-demo">Datalist</h2>

      <label for="">Input with Datalist</label>
      <input list="browsers">

      <datalist id="browsers">
      <option value="Internet Explorer">
      </option><option value="Firefox">
      </option><option value="Chrome">
      </option><option value="Opera">
      </option><option value="Safari">
      </option></datalist>

    </section>

    <section id="form-textarea">

      <h2 class="h2-demo">Textarea</h2>

      <label for="textarea">Textarea</label>
      <textarea name="textarea" id="" cols="30" rows="10"></textarea>

      </section>

    <section id="form-select-option">

      <h2 class="h2-demo">Select and Option</h2>

      <label for="select-normal">Select Default</label>
      <select name="select-normal" id="">
      <option value="">Option 1</option>
      <option value="">Option 2</option>
      <option value="">Option 3</option>
      </select>

      <label for="select-optgroup">Select with Optgroup</label>
      <select name="select-optgroup" id="">
      <optgroup label="Optgroup 1">
      <option value="">Option 1</option>
      <option value="">Option 2</option>
      <option value="">Option 3</option>
      </optgroup>

      <optgroup label="Optgroup 2">
      <option value="">Option 1</option>
      <option value="">Option 2</option>
      <option value="">Option 3</option>
      </optgroup>
      </select>

      <label for="select-multiple">Select Multiple</label>
      <select name="select-multiple" id="" multiple="">
      <option value="">Option 1</option>
      <option value="">Option 2</option>
      <option value="">Option 3</option>
      </select>

    </section>

    <section id="form-select-button">

      <h2 class="h2-demo">Buttons and Input Type Submit/Reset</h2>

      <label for="button-type-button">Button Type Button</label>
      <button type="button">Button</button>

      <label for="button-type-reset">Button Type Reset</label>
      <button type="reset">Reset</button>

      <label for="button-type-submit">Button Type Submit</label>
      <button type="submit">Submit</button>

      <label for="">Input Type Button</label>
      <input type="button" name="input-type-button" value="Button">

      <label for="">Input Type Reset</label>
      <input type="reset" name="input-type-reset">

      <label for="">Input Type Submit</label>
      <input type="submit" name="input-type-submit">

      <label for="">Input Type Submit Disabled</label>
      <input type="submit" name="input-type-submit" disabled="">

      <label for="">Input Type Image</label>
      <input type="image" name="input-type-image">

    </section>

    <section id="form-select-fieldset">

      <h2 class="h2-demo">Fieldset</h2>

      <fieldset>

      <legend>Legend Title</legend>

      <label for="input-text">Input</label>
      <input type="text" id="input-text">

      <label for="input-password">Another Input</label>
      <input type="text" id="input-password">

      </fieldset>

      </section>

    </form>

  </div><!-- /.single-column -->

</div>
</div>

<?php include 'inc/footer.php'; ?>

</body>
</html>
