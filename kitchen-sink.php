<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Kitchen Sink
*
*/
get_header(); ?>

 <?php
  while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
 
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row expanded content-area">
    <div class="small-12 medium-12 large-9 float-left columns" >
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('class' => 'lazy'));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      
      <div class="entry-content" id="main">
       
          <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-alert' );
          ?>

        

 <hr >

 <h2>Typography</h2>

 <h3>Fonts Stacks</h3>

 <p><strong>Heading Font:</strong> "Robot", Arial, sans-serif<br/>
 <strong>Body Fonts:</strong> "Roboto", Arial, sans-serif</p>


    <h3>Headings</h3>
    
      <h1>h1. This is a very large header.</h1>
      <h2>h2. This is a large header.</h2>
      <h3>h3. This is a medium header.</h3>
      <h4>h4. This is a moderate header.</h4>
      <h5>h5. This is a small header.</h5>
      <h6>h6. This is a tiny header.</h6>


     <h3 style="margin-top: 20px;">Unordered List</h3>

      <ul>
        <li>List item with a much longer description or more content.</li>
        <li>List item</li>
        <li>List item
        <ul>
          <li>Nested List Item</li>
          <li>Nested List Item</li>
          <li>Nested List Item</li>
        </ul>
        </li>
        <li>List item</li>
        <li>List item</li>
        <li>List item</li>
      </ul>


      <h3 style="margin-top: 20px;">Ordered lists</h3>
      <ol>
        <li>List Item 1</li>
        <li>List Item 2</li>
        <li>List Item 3</li>
      </ol>

      <h3 style="margin-top: 20px;">Blockquote</h3>

          <blockquote>
            Those people who think they know everything are a great annoyance to those of us who do.
            <cite>Isaac Asimov</cite>
          </blockquote>
      <hr>

      <h2>Buttons</h2>
          <a href="#" class="button primary">Primary Button</a>
          <a href="#" class="button secondary">Secondary Button</a>
          <a href="#" class="button alert">Secondary Button</a>
          <a href="#" class="button success">Secondary Button</a>
          <a href="#" class="button warning">Secondary Button</a>

      <hr>

      <h2>Button Groups</h2>

      <p><strong>Primary Button Group</strong></p>

      <div class="button-group">
          <a class="button">One</a>
          <a class="button">Two</a>
          <a class="button">Three</a>
      </div>

      <p><strong>Secondary Button Group</strong></p>

        <div class="button-group">
          <a class="button button">One</a>
          <a class="button button">Two</a>
          <a class="button button">Three</a>
       </div>
  
      <p><strong>Alert Button Group</strong></p>

        <div class="button-group">
          <a class="button alert">One</a>
          <a class="button alert">Two</a>
          <a class="button alert">Three</a>
       </div>

      <hr>

      <h2 id="forms">Forms</h2>
    

<form data-abide novalidate>
  <div data-abide-error class="alert callout" style="display: none;">
    <p><i class="fi-alert"></i> There are some errors in your form.</p>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell small-12">
        <label>Number Required
          <input type="text" placeholder="1234" aria-describedby="example1Hint1" aria-errormessage="example1Error1" required pattern="number">
          <span class="form-error">
            Yo, you had better fill this out, it's required.
          </span>
        </label>
      <p class="help-text" id="example1Hint1">Here's how you use this input field!</p>
      </div>
      <div class="cell small-12">
        <label>Password Required
          <input type="password" id="password" placeholder="yeti4preZ" aria-describedby="example1Hint2" aria-errormessage="example1Error2" required >
          <span class="form-error">
            I'm required!
          </span>
        </label>
        <p class="help-text" id="example1Hint2">Enter a password please.</p>
      </div>
      <div class="cell small-12">
        <label>Re-enter Password
          <input type="password" placeholder="yeti4preZ" aria-describedby="example1Hint3" aria-errormessage="example1Error3" required pattern="alpha_numeric" data-equalto="password">
          <span class="form-error">
            Hey, passwords are supposed to match!
          </span>
        </label>
        <p class="help-text" id="example1Hint3">This field is using the `data-equalto="password"` attribute, causing it to match the password field above.</p>
      </div>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell large-6">
        <label>URL Pattern, not required, but throws error if it doesn't match the Regular Expression for a valid URL.
          <input type="text" placeholder="https://get.foundation" pattern="url">
        </label>
      </div>
      <div class="cell large-6">
        <label>Website Pattern, not required, but throws error if it doesn't match the Regular Expression for a valid URL or a Domain.
          <input type="text" placeholder="https://zurb.com or zurb.com" pattern="website">
        </label>
      </div>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <div class="cell large-6">
        <label>European Cars, Choose One, it can't be the blank option.
          <select id="select" required>
            <option value=""></option>
            <option value="volvo">Volvo</option>
            <option value="saab">Saab</option>
            <option value="mercedes">Mercedes</option>
            <option value="audi">Audi</option>
          </select>
        </label>
      </div>
      <fieldset class="cell large-6">
        <legend>Check these out</legend>
        <input id="checkbox1" type="checkbox"><label for="checkbox1">Checkbox 1</label>
        <input id="checkbox2" type="checkbox" required><label for="checkbox2">Checkbox 2</label>
        <input id="checkbox3" type="checkbox"><label for="checkbox3">Checkbox 3</label>
      </fieldset>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <fieldset class="cell large-6">
        <legend>Choose Your Favorite - not required, you can leave this one blank.</legend>
        <input type="radio" name="pockets" value="Red" id="pocketsRed"><label for="pocketsRed">Red</label>
        <input type="radio" name="pockets" value="Blue" id="pocketsBlue"><label for="pocketsBlue">Blue</label>
        <input type="radio" name="pockets" value="Yellow" id="pocketsYellow"><label for="pocketsYellow">Yellow</label>
      </fieldset>
      <fieldset class="cell large-6">
        <legend>Choose Your Favorite, and this is required, so you have to pick one.</legend>
        <input type="radio" name="pokemon" value="Red" id="pokemonRed"><label for="pokemonRed">Red</label>
        <input type="radio" name="pokemon" value="Blue" id="pokemonBlue" required><label for="pokemonBlue">Blue</label>
        <input type="radio" name="pokemon" value="Yellow" id="pokemonYellow"><label for="pokemonYellow">Yellow</label>
      </fieldset>
    </div>
  </div>
  <div class="grid-container">
    <div class="grid-x grid-margin-x">
      <fieldset class="cell large-6">
        <button class="button" type="submit" value="Submit">Submit</button>
      </fieldset>
      <fieldset class="cell large-6">
        <button class="button" type="reset" value="Reset">Reset</button>
      </fieldset>
    </div>
  </div>
</form>

      <hr>
      <h2>Inline Lists</h2>
      <ul class="inline-list">
        <li><a href="#">Link 1</a></li>
        <li><a href="#">Link 2</a></li>
        <li><a href="#">Link 3</a></li>
        <li><a href="#">Link 4</a></li>
        <li><a href="#">Link 5</a></li>
      </ul>

      <hr>

      <h2>Pagination</h2>
      <ul class="pagination">
        <li class="arrow unavailable"><a href="">&laquo;</a></li>
        <li class="current"><a href="">1</a></li>
        <li><a href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
        <li class="unavailable"><a href="">&hellip;</a></li>
        <li><a href="">12</a></li>
        <li><a href="">13</a></li>
        <li class="arrow"><a href="">&raquo;</a></li>
      </ul>

      <hr>
      <h2>Callouts</h2>
     <div class="callout">
  <h2>This is a standard callout</h2>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
  <a href="#" class="button">Button in BasicCallout</a>

</div>
     <div class="callout small primary">
  <h2>This is a small primary callout</h2>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
      <a href="#" class="button">Button in Primary Callout</a>
</div>
     <div class="callout small secondary">
  <h2>This is a secondary callout</h2>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
      <a href="#" class="button">Button in Secondary Callout</a>
</div>
     <div class="callout small alert">
  <h2>This is a alert callout</h2>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
      <a href="#" class="button">Button in Alert Callout</a>
</div>
     <div class="callout small success">
  <h2>This is a success callout</h2>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
    <a href="#" class="button">Button in Success Callout</a>
</div>
<div class="callout small warning">
  <h2>This is a warning callout</h2>
  <p>It has an easy to override visual style, and is appropriately subdued.</p>
  <a href="#">It's dangerous to go alone, take this.</a>
  <a href="#" class="button">Button in Warning Callout</a>
</div>

      <hr>
      <h2>Accordion</h2>
 
  <ul class="accordion" data-accordion>
  <li class="accordion-item is-active" data-accordion-item>
    <!-- Accordion tab title -->
    <a href="#" class="accordion-title">Accordion 1</a>

    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    <div class="accordion-content" data-tab-content>
      <p>Panel 1. Lorem ipsum dolor</p>
      <a href="#">Nowhere to Go</a>
    </div>
  </li>
  <!-- ... -->
</ul>

      <hr>
      <h2>Tabs</h2>

    
      <hr>
      <h2>Menu</h2>
     <ul class="menu align-right">
        <li><a href="#">One</a></li>
        <li><a href="#">Two</a></li>
        <li><a href="#">Three</a></li>
        <li><a href="#">Four</a></li>
    </ul>

      <hr>

      <h2 id="tables">Tables</h2>
      <table>
        <thead>
          <tr>
            <th width="200">Table Header</th>
            <th>Table Header</th>
            <th width="150">Table Header</th>
            <th width="150">Table Header</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Content Goes Here</td>
            <td>This is longer content Donec id elit non mi porta gravida at eget metus.</td>
            <td>Content Goes Here</td>
            <td>Content Goes Here</td>
          </tr>
          <tr>
            <td>Content Goes Here</td>
            <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
            <td>Content Goes Here</td>
            <td>Content Goes Here</td>
          </tr>
          <tr>
            <td>Content Goes Here</td>
            <td>This is longer Content Goes Here Donec id elit non mi porta gravida at eget metus.</td>
            <td>Content Goes Here</td>
            <td>Content Goes Here</td>
          </tr>
        </tbody>
      </table>

      <hr>
      <h2 id="thumbnails">Thumbnails</h2>
     <img class="thumbnail" src="assets/img/thumbnail/01.jpg" alt="Photo of Uranus.">
    <a href="#" class="thumbnail"><img src="assets/img/thumbnail/02.jpg" alt="Photo of Neptune."></a>
      <img class="thumbnail" src="assets/img/thumbnail/03.jpg" alt="Photo of Pluto.">
      
      </div>

      
      </div>
    </div>
    
    <?php get_sidebar();?>
    
      </div><!--.pagecontent-->

        <div class="row expanded entry-footer">
     <footer>
         <?php $u_time = get_the_time('U'); 
        $u_modified_time = get_the_modified_time('U'); 
        if ($u_modified_time >= $u_time + 86400) { 
        echo "<p>Last modified on "; 
        the_modified_time('F j, Y'); 
        "</p> "; }  ?>
        <?php gcc_wp_2018_entry_footer(); ?>
    <footer>
  </div>
  
    </article>

    
   <?php endwhile; // End of the loop. ?>

    <?php
    get_footer();