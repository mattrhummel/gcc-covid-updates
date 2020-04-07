<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: GCC Quick Data
*
*/
get_header(); ?>

 <?php
  while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
  <div class="row expanded content-area">
    <div class="mobile-sidebar" data-responsive-toggle="section-menu" data-hide-for="large">
      <button class="button expanded mobile-sidebar-button" type="button" data-toggle="section-menu"><?php _e('In this Section', 'gcc-wp-2018'); ?>
      </button>
      
    </div>
    <?php get_sidebar();?>

    <div class="columns small-12 large-9 float-left">
       
     <header>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        <?php the_breadcrumb() ?> 
    </header>

      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="page-heading-image hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
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

          <?php
          the_content();
          ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

<h2>Graduation Rates</h2>


         <?php the_field( 'table_one' ); ?>

          <canvas id="myChartGraduationRateBar" width="400" height="200"></canvas>


<h2>First-time Full-time Student Retention Rates</h2>


    <?php the_field( 'table_two' ); ?>

    <canvas id="myChartRetentionBar" width="400" height="200"></canvas>

</div>

<h2>12-month Unduplicated Headcount (Credit)</h2>


    <?php the_field( 'table_three' ); ?>

  <canvas id="myChartHeadcountBar"  width="400" height="200"></canvas>


<h2>Credentials Awarded</h2>

 <?php the_field( 'table_four' ); ?>

  <canvas id="myChartCredentialsAwardedBar" width="400" height="200"></canvas>


<h2>Student Financial Aid</h2>

 <?php the_field( 'table_five' ); ?>

 <canvas id="myChartStudentFinancialAidBarA" width="400" height="300"></canvas>

 <canvas id="myChartStudentFinancialAidBar" width="400" height="300"></canvas>

<h2>Finance</h2>


 <?php the_field( 'table_six' ); ?>

  <canvas id="myChartFinanceBarA" width="400" height="200"></canvas>

  <canvas id="myChartFinanceBar" width="400" height="200"></canvas>


<h2>Human Resources</h2>

 
 <?php the_field( 'table_seven' ); ?>

 <canvas id="myChartHumanResourcesBar"  width="400" height="200"></canvas>

<h2>Student-to-Faculty Ratio</h2>

 <?php the_field( 'table_eight' ); ?>
 
   <canvas id="myChartStudentFacultyRatioBar" width="400" height="200"></canvas>


<h2>Wage Outcomes, 2018 Calendar Year</h2>

<h3>Associate’s Degree (Bachelor Credit)</h3>

  
          <canvas id="myChartWageOutcomesBar1A"  width="680" height="500"></canvas>


          <canvas id="myChartWageOutcomesBar1"  width="680" height="300"></canvas>
    

<h3>Occupational and Technical Credit</h3>

  
    
         <?php the_field( 'table_wages_3' ); ?>

          <canvas id="myChartWageOutcomesBar3A"  width="400" height="200" ></canvas>

          <canvas id="myChartWageOutcomesBar3"  width="400" height="200" ></canvas>
    


<h2>Enrollment</h2>


        <canvas id="myEnrollmentBar" width="400" height="300"></canvas>



<script>

//graduation rates
var ctx1 = document.getElementById('myChartGraduationRateBar').getContext('2d');

var myChartGraduationRateBar = new Chart(ctx1, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'graduation rates by %',
            data: [28, 31, 32, 33, 37],
            backgroundColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 50
                }
            }]
        },
         title: {
            display: false,
            text: 'Graduation Rates by %'
        },
    
    }
});


//retention rates
var ctx3 = document.getElementById('myChartRetentionBar').getContext('2d');

var myChartRetentionBar = new Chart(ctx3, {
    type: 'bar',
    data: {

        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'retention rates by %',
            data: [66, 68, 63, 70, 68],
            backgroundColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 100
                }
            }]
        },
         title: {
            display: false,
            text: 'Graduation Rates by %'
        }
    }
});


//headcounts
var ctx5 = document.getElementById('myChartHeadcountBar').getContext('2d');

var myChartHeadcountBar = new Chart(ctx5, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'headcount',
            data: [10012, 9520, 9135, 9077, 9583],
       backgroundColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax: 15000                }
            }]
        },
         title: {
            display: false,
            text: 'Retention Rates by %'
        }
    }
});



//credentials
var ctx7 = document.getElementById('myChartCredentialsAwardedBar').getContext('2d');

var myChartCredentialsAwardedBar = new Chart(ctx7, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'total of awarded combined degress',
            data: [1730, 1833, 2017, 2303, 1794],
            backgroundColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderColor: [
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
                'rgb(169, 15, 55)',
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true,
                     suggestedMax: 3000                    
                 }
            }]
        },
         title: {
            display: false,
            text: 'Graduation Rates by %'
        }
    }
});



//financial aid
var ctx9a = document.getElementById('myChartStudentFinancialAidBarA').getContext('2d');

var myChartStudentFinancialAidBarA = new Chart(ctx9a, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        
        datasets: [ 
        {
            label: 'Total grant aid received by all undergraduate students',
            data: [7505794, 6741756, 6175973, 6311784, 7183675],
            backgroundColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],
            borderColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],
        
    }]
},
 options: {

       scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stacked: true,
                    offset: true,
                    suggestedMax: 10000
                }
            }]
        },
        title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});

var ctx9 = document.getElementById('myChartStudentFinancialAidBar').getContext('2d');

var myChartStudentFinancialAidBar = new Chart(ctx9, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        
        datasets: [ 
        {   
           label: 'Average amount of grant aid awarded to undergraduate students',
            data: [2721, 2919, 2636, 2704, 2902],
    backgroundColor: [
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)'
            ],
            borderColor: [
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)',
                'rgb(153, 153, 153)'
            ],
    },

    {
    
         label: '# of Pell Grants awarded',
            data: [1964, 1579, 1562, 1550, 1669],
             backgroundColor: [
                'rgb(0, 0, 0)',
                'rgb(0, 0, 0)',
                'rgb(0, 0, 0)',
                'rgb(0, 0, 0)',
               'rgb(0, 0, 0)',
                'rgb(0, 0, 0)'
            ],
            borderColor: [
                'rgb(0, 0, 0)',
                'rgb(0, 0, 0)',
                'rgb(0, 0, 0)',
                'rgb(0, 0, 0)',
               'rgb(0, 0, 0)',
                'rgb(0, 0, 0)'
            ],
        }

        ]
    },
 options: {

       scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    stacked: true,
                    offset: true,
                    suggestedMax: 1000
                }
            }]
        },
        title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});



//finance
var ctx11a = document.getElementById('myChartFinanceBarA').getContext('2d');

var myChartFinanceBarA = new Chart(ctx11a, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [
{ 
            label: 'Total Current Assets',
            data: [10454444, 8212790, 8563301, 11163027, 12521150],
            backgroundColor: [
                        '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],
            borderColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],
    }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                offset: true,
               suggestedMax: 500
            
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});

var ctx11 = document.getElementById('myChartFinanceBar').getContext('2d');

var myChartFinanceBar = new Chart(ctx11, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [
{ 
            label: 'Revenues per FTE Enrollment',
            data: [8454, 9038, 9998, 9752, 9286],
            backgroundColor: [
                      '#000000',
                      '#000000',
                      '#000000',
                      '#000000',
                      '#000000',
            ],
            borderColor: [
                      '#000000',
                      '#000000',
                      '#000000',
                      '#000000',
                      '#000000',
            ],
    },

{
         label: 'Expenses per FTE Enrollment',
            data: [8360, 9382, 9642, 9580, 9008],

             backgroundColor: [
                      '#999999',
                      '#999999',
                      '#999999',
                      '#999999',
                      '#999999',
            ],
            borderColor: [
                      '#999999',
                      '#999999',
                      '#999999',
                      '#999999',
                      '#999999',
            ],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                offset: true,
               suggestedMax: 500
            
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});

//human resources

var ctx13 = document.getElementById('myChartHumanResourcesBar').getContext('2d');

var myChartHumanResourcesBar = new Chart(ctx13, {
    type: 'bar',
    data: {
        labels: ['fall 14', 'fall 15', 'fall 16', 'fall 17', 'fall 18'],
        datasets: [
            
{
            label: 'full-time staff',
            data: [236, 247, 241, 241, 244],
                backgroundColor: [
                   '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
            ],
            borderColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
            ],
    },

{

         label: 'part-time staff',
            data: [297, 362, 333, 336, 322],
             backgroundColor: [
                      '#000000',
                      '#000000',
                      '#000000',
                      '#000000',
                      '#000000',

            ],
            borderColor: [
                        '#000000',
                      '#000000',
                      '#000000',
                      '#000000',
                      '#000000',
            ],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                   beginAtZero: true,
                    stacked: true,
                    offset: false,
                    suggestedMax: 500
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});

//student to faculty ratio

var ctx15 = document.getElementById('myChartStudentFacultyRatioBar');

var myChartStudentFacultyRatioBar = new Chart(ctx15, {
    type: 'bar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'ratio :1',
            data: [27, 24, 23, 22, 22],
            backgroundColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
          ],
            borderColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],
        }]
    },
    options: {
        scales: {
           yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax:50,
                    offset: true,
                    stacked: true
                }
            }]
        },
         title: {
            display: false,
            text: 'Graduation Rates by %'
        }
    }
});


//wage outcomes

var ctx17a = document.getElementById('myChartWageOutcomesBar1A').getContext('2d');

var myChartWageOutcomesBar1A = new Chart(ctx17a, {
    type: 'bar',
    data: {
            labels: ['10 years (2007-08)', '8 years (2009 – 10)', '5 years (2012 – 13)', '3 years (2014 – 15)','18 months (2016-17)'],

        datasets: [{
            label: 'Median Wage',
            data: [49159, 44475, 38788, 29550, 18173],
            backgroundColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'

            ],
            borderColor: [
                 '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],   
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax:10000,
                    offset: true,
                    stacked: true
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});

var ctx17 = document.getElementById('myChartWageOutcomesBar1').getContext('2d');

var myChartWageOutcomesBar1 = new Chart(ctx17, {
    type: 'bar',
    data: {
            labels: ['10 years (2007-08)', '8 years (2009 – 10)', '5 years (2012 – 13)', '3 years (2014 – 15)','18 months (2016-17)'],

        datasets: [{
            label: '% of Graduates w/ Reported Wage',
            data: [56, 58, 55, 63, 59],
            backgroundColor: [
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000'

            ],
            borderColor: [
                 '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000'
            ],   
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax:100,
                    offset: false,
                    stacked: true
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});

//wage outcomes
var ctx19a = document.getElementById('myChartWageOutcomesBar3A').getContext('2d');

var myChartWageOutcomesBar3A = new Chart(ctx19a, {
    type: 'bar',
    data: {
         labels: ['10 years (2007-08)', '8 years (2009 – 10)', '5 years (2012 – 13)', '3 years (2014 – 15)','18 months (2016-17)'],
        datasets: [{
            label: 'Median Wage',
            data: [66101, 67179, 59131, 58116, 54028],
            backgroundColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],
            borderColor: [
                    '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],   
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax:10000,
                    offset: true,
                    stacked: false
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});


var ctx19 = document.getElementById('myChartWageOutcomesBar3').getContext('2d');

var myChartWageOutcomesBar3 = new Chart(ctx19, {
    type: 'bar',
    data: {
         labels: ['10 years (2007-08)', '8 years (2009 – 10)', '5 years (2012 – 13)', '3 years (2014 – 15)','18 months (2016-17)'],
        datasets: [{
            label: '% of Graduates w/ Reported Wage',
            data: [69, 68, 74, 75, 78],
            backgroundColor: [
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000'
            ],
            borderColor: [
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000'
            ],   
        }],
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true,
                    suggestedMax:100,
                    offset: true,
                    stacked: false
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});

var enrollmentBar = document.getElementById('myEnrollmentBar').getContext('2d');

var myEnrollmentBar = new Chart(enrollmentBar, {
    type: 'bar',
    data: {
         labels: ['2011-12', '2012-13', '2013-14', '2014-15', '2015-16',  '2016-17',  '2017-18',  '2018-19'],
        datasets: [
        {
            label: 'Majority Students - Men',
            data: [193, 200, 208, 211, 246, 217, 265, 248],
            backgroundColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],
            borderColor: [
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043',
                  '#B22043'
            ],   
        },        {
            label: 'Majority Students - Women',
            data: [232, 235, 303, 315, 293, 328, 322, 326],
            backgroundColor: [
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000'
            ],
            borderColor: [
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000',
                  '#000000'
            ],   
        },    {
            label: 'Student of Color - Men',
            data: [34, 65, 59, 47, 73, 69, 81, 75],
            backgroundColor: [
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
            ],
            borderColor: [
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
                  '#999999',
            ],   
        },    {
            label: 'Student of Color - Women',
            data: [57, 75, 85, 113, 104, 131, 113, 107],
            backgroundColor: [
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc'
            ],
            borderColor: [
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc',
                  '#cccccc'
            ],   
        }

        ],
    },
    options: {
        scales: {
            yAxes: [{


                ticks: {
                    beginAtZero: true,
                    suggestedMax: 400,
                }
            }]
        },
         title: {
            display: false,
            text: 'Select an option below to hide or show data.'
        }
    }
});


</script>

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