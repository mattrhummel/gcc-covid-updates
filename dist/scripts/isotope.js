$(document).ready(function(){
  // init Isotope
  var $grid = $('.grid').isotope({
    itemSelector: '.item'
  });

  // store filter for each group
  var filters = {};

  $('.filters').on('change', '.filters-select', function(){
    var $this = $(this);
    //var selectGroup = $this.parents('.button-group');
    var filterGroup = $this.attr('data-filter-group');

    filters[ filterGroup ] = $this.val();

    var filterValue = concatValues( filters );

    $grid.isotope({ filter: filterValue });

    console.log(filterGroup, filterValue);
  });

  // flatten object by concatting values
  function concatValues( obj ) {
    var value = '';
    for ( var prop in obj ) {
      value += obj[ prop ];
    }
    return value;
  }
});