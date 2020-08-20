jQuery(function ($) {
 
 var $container = $('#isotope-list'); //The ID for the list with all the blog posts
 
 $container.isotope({ //Isotope options, 'item' matches the class in the PHP
 itemSelector : '.item', 
 layoutMode : 'masonry'
 });
 

  $('#filters-pathway').change( function() {
    $container.isotope({
      filter: this.value
    });
  });


});

