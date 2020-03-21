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
      
      <div class="entry-content" id="main" tabindex="0">
       
          <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-alert' );
          ?>

          <?php
          the_content();
          ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>

<h2>Graduation Rates</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View Graduation Rates Data</a>

    <div class="accordion-content" data-tab-content>

         <?php the_field( 'table_one' ); ?>

          <canvas id="myChartGraduationRateBar" width="400" height="300"></canvas>

    </div>

</li>

</ul>

<h2>First-time Full-time Student Retention Rates</h2>


<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View First-time Full-time Student Retention Rates Data</a>

    <div class="accordion-content" data-tab-content>

    <?php the_field( 'table_two' ); ?>

    <canvas id="myChartRetentionBar" width="400" height="300"></canvas>

</div>
</li>
</ul>

<h2>First-time Full-time Student Retention Rates</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View First-time Full-time Student Retention Rates Data</a>

    <div class="accordion-content" data-tab-content>

    <?php the_field( 'table_three' ); ?>

  <canvas id="myChartHeadcountBar"  width="400" height="300"></canvas>

</div>
</li>
</ul>

<h2>Credentials Awarded</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View Credentials Awarded Data</a>

    <div class="accordion-content" data-tab-content>


 <?php the_field( 'table_four' ); ?>

  <canvas id="myChartCredentialsAwardedBar" width="400" height="300"></canvas>

</div>
</li>
</ul>

<h2>Student Financial Aid</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View Student Financial Aid Data</a>

    <div class="accordion-content" data-tab-content>

 <?php the_field( 'table_five' ); ?>

 <canvas id="myChartStudentFinancialAidBar" width="400" height="300"></canvas>
</div>
</li>
</ul>

<h2>Finance</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View Finance Data</a>

    <div class="accordion-content" data-tab-content>

 <?php the_field( 'table_six' ); ?>

  <canvas id="myChartFinanceBar" width="400" height="300"></canvas>

</div>
</li>
</ul>

<h2>Human Resources</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View Human Resources Data</a>

    <div class="accordion-content" data-tab-content>
 
 <?php the_field( 'table_seven' ); ?>

 <canvas id="myChartHumanResourcesBar"  width="400" height="300"></canvas>

</div>
</li>
</ul>
<h2>Student-to-Faculty Ratio</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View Student-to-Faculty Ratio Data</a>

    <div class="accordion-content" data-tab-content>

 <?php the_field( 'table_eight' ); ?>
 
   <canvas id="myChartStudentFacultyRatioBar" width="400" height="300"></canvas>

</div>
</li>
</ul>

<h2>Wage Outcomes, 2018 Calendar Year</h2>

<h3>Associate’s Degree (Bachelor Credit)</h3>

<ul class="accordion" data-accordion data-allow-all-closed="true">
  
  <li class="accordion-item" data-accordion-item>
    <!-- Accordion tab title -->
    <a href="#" class="accordion-title">View Associate’s Degree (Bachelor Credit) Data</a>

    <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
    <div class="accordion-content" data-tab-content>
      
<div class="row expanded">

<ul class="tabs" data-tabs id="wages-tabs">
  <li class="tabs-title is-active"><a href="#table" aria-selected="true">View table</a></li>
  <li class="tabs-title"><a href="#bar" data-tabs-target="bar">View bar chart</a></li>
</ul>

<div class="tabs-content" data-tabs-content="wages-tabs">
    
    <div class="tabs-panel is-active" id="table">

        <?php the_field( 'table_wages_1' ); ?>

    </div>


    <div class="tabs-panel" id="bar">

      <canvas id="myChartWageOutcomesBar1"  width="680" height="500"></canvas>

    </div>

</div>

</div>

<div class="row expanded">

<h3> Wages in 2018</h3>

<p>80% of graduates with full-time wages fall within this range.</p>

    <ul class="tabs" data-tabs id="wages-tabs-2">
      <li class="tabs-title is-active"><a href="#table2" aria-selected="true">View table</a></li>
      <li class="tabs-title"><a href="#bar2" data-tabs-target="bar2">View bar chart</a></li>
    </ul>

    <div class="tabs-content" data-tabs-content="wages-tabs-2">
        
        <div class="tabs-panel is-active" id="table2">

            <?php the_field( 'table_wages_2' ); ?>

        </div>

        <div class="tabs-panel" id="bar2">

            <canvas id="myChartWageOutcomesBar2" width="680" height="500" ></canvas>

        </div>

    </div>

</div>

</div><!--accordion content-->
</li>
</ul>

<h3>Occupational and Technical Credit</h3>

<ul class="accordion" data-accordion data-allow-all-closed="true">
  
  <li class="accordion-item" data-accordion-item>
    <!-- Accordion tab title -->
    <a href="#" class="accordion-title">View Occupational and Technical Credit Data</a>

    <div class="accordion-content" data-tab-content>

<div class="row expanded">

    <ul class="tabs" data-tabs id="wages-tabs-3">
      <li class="tabs-title is-active"><a href="#table3" aria-selected="true">View table</a></li>
      <li class="tabs-title"><a href="#bar3" data-tabs-target="bar3">View bar chart</a></li>
    </ul>

    <div class="tabs-content" data-tabs-content="wages-tabs-3">
        
        <div class="tabs-panel is-active" id="table3">

         <?php the_field( 'table_wages_3' ); ?>

        </div>

        <div class="tabs-panel" id="bar3">

          <canvas id="myChartWageOutcomesBar3"  width="400" height="300" ></canvas>

        </div>

    </div>

</div>

<div class="row expanded">

<h3> Wages in 2018</h3>

<p>80% of graduates with full-time wages fall within this range.</p>

    <ul class="tabs" data-tabs id="wages-tabs-4">
      <li class="tabs-title is-active"><a href="#table4" aria-selected="true">View table</a></li>
      <li class="tabs-title"><a href="#bar4" data-tabs-target="bar4">View bar chart</a></li>
    </ul>

    <div class="tabs-content" data-tabs-content="wages-tabs-4">
            
        <div class="tabs-panel is-active" id="table4">

            <?php the_field( 'table_wages_4' ); ?>

        </div>

        <div class="tabs-panel" id="bar4">

            <canvas id="myChartWageOutcomesBar4"  width="680" height="500"></canvas>

        </div>

    </div>

</div>
</div>

</li>
  
</ul>

<h2>Enrollment</h2>

<ul class="accordion" data-accordion data-allow-all-closed="true">

 <li class="accordion-item" data-accordion-item>

    <a href="#" class="accordion-title">View Enrollment Data</a>

    <div class="accordion-content" data-tab-content>

 <?php the_field( 'table_ten' ); ?>

</div>
</li>
</ul>


<script>

//graduation rates
var ctx1 = document.getElementById('myChartGraduationRateBar').getContext('2d');

var myChartGraduationRateBar = new Chart(ctx1, {
    type: 'horizontalBar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'graduation rates by %',
            data: [28, 31, 32, 33, 37],
            backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
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
    type: 'horizontalBar',
    data: {

        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'retention rates by %',
            data: [66, 68, 63, 70, 68],
            backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
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
    type: 'horizontalBar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'headcount',
            data: [10012, 9520, 9135, 9077, 9583],
            backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
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
    type: 'horizontalBar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'total of awarded combined degress',
            data: [1730, 1833, 2017, 2303, 1794],
            backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
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

var ctx9 = document.getElementById('myChartStudentFinancialAidBar').getContext('2d');

var myChartStudentFinancialAidBar = new Chart(ctx9, {
    type: 'line',

    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [
            
{
            label: 'Total grant aid received by all undergraduate students',
            data: [7505794, 6741756, 6175973, 6311784, 7183675],
        
    },

{ type: 'bar',
            label: 'Average amount of grant aid awarded to undergraduate students',
            data: [2721, 2919, 2636, 2704, 2902],
   backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

{
 type: 'bar',
         label: '# of Pell Grants awarded',
            data: [1964, 1579, 1562, 1550, 1669],
             backgroundColor: [
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
               'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)'
            ],
            borderColor: [
                      'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
               'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)'
            ],
        }]
    },
 options: {
       scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
        title: {
            display: true,
           text: 'Select an option below to hide or show data.'
        }
    }
});



//finance

var ctx11 = document.getElementById('myChartFinanceBar').getContext('2d');

var myChartFinanceBar = new Chart(ctx11, {
    type: 'line',
    data: {
        labels: ['fall 14', 'fall 15', 'fall 16', 'fall 17', 'fall 18'],
        datasets: [
            
{
            label: 'Total Current Assets',
            data: [1045444, 8212790, 8563301, 11163027, 12521150],
        
    },

{ type: 'bar',
            label: 'Revenues per FTE Enrollment',
            data: [8454, 9038, 9998, 9752, 9286],
      backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

{
 type: 'bar',
         label: 'Expenses per FTE Enrollment',
            data: [8360, 9382, 9642, 9580, 9008],
             backgroundColor: [
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
               'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)'
            ],
            borderColor: [
                      'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)',
               'rgba(0, 0, 0, 0.8)',
                'rgba(0, 0, 0, 0.8)'
            ],
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
         title: {
            display: true,
            text: 'Select an option below to hide or show data.'
        }
    }
});


//human resources

var ctx13 = document.getElementById('myChartHumanResourcesBar').getContext('2d');

var myChartHumanResourcesBar = new Chart(ctx13, {
    type: 'horizontalBar',
    data: {
        labels: ['fall 14', 'fall 15', 'fall 16', 'fall 17', 'fall 18'],
        datasets: [
            
{
            label: 'full-time staff',
            data: [236, 247, 241, 241, 244],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

{

         label: 'part-time staff',
            data: [297, 362, 333, 336, 322],
             backgroundColor: [
                'rgba(138, 138, 138, 0.8)',
                'rgba(106, 106, 106, 0.8)',
                'rgba(74, 74, 74, 0.8)',
                'rgba(42, 42, 42, 0.8)',
                'rgba(26, 26, 26, 0.8)',
                'rgba(10, 10, 10, 0.8)'
            ],
            borderColor: [
                 'rgba(138, 138, 138, 0.8)',
                'rgba(106, 106, 106, 0.8)',
                'rgba(74, 74, 74, 0.8)',
                'rgba(42, 42, 42, 0.8)',
                'rgba(26, 26, 26, 0.8)',
                'rgba(10, 10, 10, 0.8)'
            ],
        }]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
         title: {
            display: true,
            text: 'Select an option below to hide or show data.'
        }
    }
});

//student to faculty ratio

var ctx15 = document.getElementById('myChartStudentFacultyRatioBar').getContext('2d');

var myChartStudentFacultyRatioBar = new Chart(ctx15, {
    type: 'horizontalBar',
    data: {
        labels: ['2014-15', '2015-16', '2016-17', '2017-18', '2018-19'],
        datasets: [{
            label: 'ratio :1',
            data: [27, 24, 23, 22, 22],
            backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderWidth: 0
        }]
    },
    options: {
        scales: {
           xAxes: [{
                ticks: {
                    beginAtZero: true
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

var ctx17 = document.getElementById('myChartWageOutcomesBar1').getContext('2d');

var myChartWageOutcomesBar1 = new Chart(ctx17, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Median Wage',
            data: [49159, 44475, 38788, 29550, 18173],
            backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],   
        }, {
            label: 'Percentage of Graduates w/ Reported Wage',
            data: [56, 58, 55, 63, 59],

            // Changes this dataset to become a line
            type: 'line'
        }],
        labels: ['10 years (2007-08)', '8 years (2009 – 10)', '5 years (2012 – 13)', '3 years (2014 – 15)','18 months (2016-17)'],


    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
         title: {
            display: true,
            text: 'Select an option below to hide or show data.'
        }
    }
});

//wage outcomes

var ctx18 = document.getElementById('myChartWageOutcomesBar2').getContext('2d');

var myChartWageOutcomesBar2 = new Chart(ctx18,  {
    type: 'horizontalBar',
    data: {
        labels: ['10th %', '25th %', 'Median', '75th %', '90th %'],
        datasets: [
{
            label: '10 years (07-08)',
            data: [16172, 27963, 49159, 70025, 103117],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '8 years (09 - 10)',
            data: [15680, 29230, 44475, 64672, 89947],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '5 years (12-13)',
            data: [13769, 24008, 38788, 50481, 66488],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '3 years (14-15)',
            data: [8084, 16807, 29550, 43940, 59104],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '18 months (16-17)',
            data: [5419, 10121, 18173, 29327, 43401],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },


        ]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
         title: {
            display: true,
            text: 'Select an option below to show or hide data.'
        }
    }
});



//wage outcomes

var ctx19 = document.getElementById('myChartWageOutcomesBar3').getContext('2d');

var myChartWageOutcomesBar3 = new Chart(ctx19, {
    type: 'bar',
    data: {
        datasets: [{
            label: 'Median Wage',
            data: [66101, 67179, 59131, 58116, 54028],
            backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],   
        }, {
            label: 'Percentage of Graduates w/ Reported Wage',
            data: [69, 68, 74, 75, 78],

            // Changes this dataset to become a line
            type: 'line'
        }],
        labels: ['10 years (2007-08)', '8 years (2009 – 10)', '5 years (2012 – 13)', '3 years (2014 – 15)','18 months (2016-17)'],


    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
         title: {
            display: true,
            text: 'Select an option below to hide or show data.'
        }
    }
});


//wage outcomes

var ctx21 = document.getElementById('myChartWageOutcomesBar4').getContext('2d');

var myChartWageOutcomesBar4 = new Chart(ctx21, {
    type: 'horizontalBar',
    data: {
        labels: ['10th %', '25th %', 'Median', '75th %', '90th %'],
        datasets: [
{
            label: '10 years (07-08)',
            data: [27297, 48874, 66101, 88863, 109781],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '8 years (09 - 10)',
            data: [22309, 45513, 67179, 85775, 99588],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '5 years (12-13)',
            data: [21366, 36218, 59131, 73522, 86765],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '3 years (14-15)',
            data: [24233, 43091, 58116, 69258, 77088],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },

    {
            label: '18 months (16-17)',
            data: [21557, 37513, 54028, 61209, 75598],
                backgroundColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
            borderColor: [
                'rgba(169, 15, 55, 0.4)',
                'rgba(147, 13, 46, 0.4)',
                'rgba(124, 11, 39, 0.4)',
                'rgba(102, 9, 32, 0.4)',
                'rgba(81, 6, 25, 0.4)',
                'rgba(63, 5, 20, 0.4)'
            ],
    },


        ]
    },
    options: {
        scales: {
            xAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        },
         title: {
            display: true,
            text: 'Select an option below to show or hide data.'
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