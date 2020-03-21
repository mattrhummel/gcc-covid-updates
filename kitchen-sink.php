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

        
  <h2>Colors</h2>

    <div class="row">
        <div class="small-3 large-3 columns" style="background-color: #AD1B31; display: block; padding: 10px; margin: 0 6px 0 12px; color: #ffffff; height: 220px; width: 220px;">
            <p>Primary Color: #AD1B31</p>
                </div>
        <div class="small-3 large-3 columns" style="background-color: #000000; display: block; margin: 0 6px; color: #ffffff; height: 220px; width: 220px;">
            <p>Secondary Color: #000000</p>
                </div>

        <div class="small-3 large-3 columns" style="background-color: #E6B034; display: block; padding: 10px; margin: 0 6px; color: #ffffff; height: 220px; width: 220px;">
            <p>Accent Color: #E6B034</p>
                </div>

                <div class="small-3 large-3 columns" >
          
                </div>

                </div>

         <div class="row">

          <div class="small-3 large-3 columns" style="background-color: #f04124; display: block; padding: 10px; margin: 10px 6px 0 12px; color: #ffffff; height: 220px; width: 220px;">
            <p>Alert Color: #Af04124</p>
                </div>
        <div class="small-3 large-3 columns" style="background-color: #43AC6A; display: block; padding: 10px;margin: 10px 6px 0px 6px; color: #ffffff;height: 220px; width: 220px;">
            <p>Success Color: #43AC6A</p>
                </div>

        <div class="small-3 large-3 columns" style="background-color: #f08a24; display: block; padding: 10px; margin: 10px 6px 0px 6px; color: #ffffff;height: 220px; width: 220px;">
            <p>Warning color: #f08a24</p>
                </div>

                <div class="small-3 large-3 columns" >
          
                </div>

                </div>

                <div class="row">

          <div class="small-3 large-3 columns" style="background-color: #a0d3e8; display: block; padding: 10px; margin: 10px 6px 0 12px; color: #ffffff;height: 220px; width: 220px;">
            <p>Info Color: #a0d3e8</p>
                </div>
        <div class="small-3 large-3 columns" style="background-color: #2980b9; display: block; padding: 10px; margin: 10px 6px 0px 6px; color: #ffffff;height: 220px; width: 220px;">
            <p>Anchor Color: #2980b9</p>
                </div>

        <div class="small-3 large-3 columns">
        <div class="small-3 large-3 columns" style="background-color: #444444; display: block; padding: 10px; margin: 10px 0px 0px 0px; color: #ffffff;height: 220px; width: 220px;">
            <p>Main Nav Color: #444444</p>
            
                </div>

                <div class="small-3 large-3 columns" >
          
                </div>

                </div>

 <hr >

 <h2>Typography</h2>

 <h3>Fonts Stacks</h3>

 <p><strong>Heading Font:</strong> "Century Gothic",Calibri, Arial, sans-serif<br/>
 <strong>Body Fonts:</strong> "Calibri", Arial, sans-serif</p>


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
      <blockquote>Use this for when quoting someone<cite>Isaac Asimov</cite></blockquote>

      <hr>

      <h2>Buttons</h2>
      <div class="row">
        <div class="small-3 large-3 columns">
          <a href="#" class="button primary">Primary Button</a>
        </div>
        <div class="small-9 large-9 columns">
          <a href="#" class="button secondary">Secondary Button</a>
        </div>
      </div>

      <hr>

      <h2>Button Groups</h2>

      <div class="small-6 large-6 columns">
      <p><strong>Primary Button Group</strong></p>
      <ul class="button-group">
        <li><a href="#" class="small button">Button 1</a></li>
        <li><a href="#" class="small button">Button 2</a></li>
        <li><a href="#" class="small button">Button 3</a></li>
      </ul>
      </div>

      <div class="small-6 large-6 columns">
    
      <p><strong>Secondary Button Group</strong></p>

      <ul class="button-group">
        <li><a href="#" class="small button secondary">Button 1</a></li>
        <li><a href="#" class="small button secondary">Button 2</a></li>
        <li><a href="#" class="small button secondary">Button 3</a></li>
      </ul>
      </div>

      <hr>

      <h2 id="forms">Forms</h2>
      <form>
        <fieldset>
          <legend>Fieldset</legend>

          <div class="row">
            <div class="large-12 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-12.columns">
            </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.columns">
            </div>
            <div class="large-4 columns">
              <label>Input Label</label>
              <input type="text" placeholder="large-4.columns">
            </div>
            <div class="large-4 columns">
              <div class="row collapse">
                <label>Input Label</label>
                <div class="small-9 columns">
                  <input type="text" placeholder="small-9.columns">
                </div>
                <div class="small-3 columns">
                  <span class="postfix">.com</span>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="large-12 columns">
              <label>Textarea Label</label>
              <textarea placeholder="small-12.columns"></textarea>
            </div>
          </div>

        </fieldset>
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
      <h2>Panels</h2>
      <div class="row">
        <div class="large-6 columns">
          <div class="panel">
            <h5>This is a regular panel.</h5>
            <p>It has an easy to override visual style, and is appropriately subdued.</p>
          </div>
        </div>
        <div class="large-6 columns">
          <div class="panel callout radius">
            <h5>This is a callout panel with radiused edges.</h5>
            <p>It&#39;s a little ostentatious, but useful for important content.</p>
          </div>
        </div>
      </div>

      <hr>
      <h2>Accordion</h2>
 
  <h3>Standard</h3>
  <dl class="accordion yourcustomclass" data-accordion="">
  <dd class="accordion-navigation active">
    <a href="#panel1a">Accordion 1</a>
    <div id="panel1a" class="content active">
      <ul class="small-block-grid-2 large-block-grid-3 ">
        <li><img src="http://placehold.it/350x150"></li>
        <li><img src="http://placehold.it/350x150"></li>
        <li><img src="http://placehold.it/350x150"></li>
      </ul>
    </div>
  </dd>
  <dd class="accordion-navigation">
    <a href="#panel2a">Accordion 2</a>
    <div id="panel2a" class="content">
      <div class="row">
        <div class="small-6 columns">
          <p>Panel 2. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
      </div>
      <div class="small-6 columns">
        <img src="http://placehold.it/350x150">
      </div>
    </div>
  </div></dd>
  <dd class="accordion-navigation">
    <a href="#panel3a">Accordion 3</a>
    <div id="panel3a" class="content">
      Panel 3. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    </div>
  </dd>
</ul>

      <hr>
      <h2>Tabs</h2>
      <dl class="tabs" data-tab>
        <dd class="active"><a href="#panel2-1">Tab 1</a></dd>
        <dd><a href="#panel2-2">Tab 2</a></dd>
        <dd><a href="#panel2-3">Tab 3</a></dd>
        <dd><a href="#panel2-4">Tab 4</a></dd>
      </dl>
      <div class="tabs-content">
        <div class="content active" id="panel2-1">
          <p>First panel content goes here...</p>
        </div>
        <div class="content" id="panel2-2">
          <p>Second panel content goes here...</p>
        </div>
        <div class="content" id="panel2-3">
          <p>Third panel content goes here...</p>
        </div>
        <div class="content" id="panel2-4">
          <p>Fourth panel content goes here...</p>
        </div>
      </div>

    
      <hr>
      <h2 >Sub Nav</h2>
      <ul class="sub-nav">
        <li><a href="#">Active</a></li>
        <li><a href="#">Pending</a></li>
        <li><a href="#">Suspended</a></li>
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
      <p><img class="th" src="http://foundation.zurb.com/docs/assets/img/examples/earth-th-sm.jpg" alt=""><img class="th" src="http://foundation.zurb.com/docs/assets/img/examples/space-th-sm.jpg" alt=""></p>

      <hr>
      <h2 id="tooltips">Tooltips</h2>
      <p>The tooltips can be positioned on the <span data-tooltip class="has-tip" data-width="210" title="I'm on bottom and the default position.">&quot;tip-bottom&quot;</span>, which is the default position, <span data-tooltip class="has-tip tip-top noradius" data-width="210" title="I'm on the top and I'm not rounded!">&quot;tip-top&quot; (hehe)</span>, <span data-tooltip="left" class="has-tip tip-left" data-width="90" title="I'm on the left!">&quot;tip-left&quot;</span>, or <span data-tooltip="right" class="has-tip tip-right" data-width="120" title="I'm on the right!">&quot;tip-right&quot;</span> of the target element by adding the appropriate class to them. You can even add your own custom class to style each tip differently. On a small device, the tooltips are full width and bottom aligned.</p>

      </div>

      
      </div>
    </div>
    
    <?php get_sidebar();?>
    
      </div><!--.pagecontent-->
  
    </article>

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
    
   <?php endwhile; // End of the loop. ?>

    <?php
    get_footer();