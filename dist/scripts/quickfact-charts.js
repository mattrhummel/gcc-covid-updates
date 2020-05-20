//graduation rates
var pieGender = document.getElementById('genderPie');
var genderPie = new Chart(pieGender, {
    type: 'pie',
    data: {
    labels: ['male', 'female'],
         datasets: [{
            data: [40, 60],
            backgroundColor: [
                'rgb(22, 86, 160)',
                'rgb(141, 183, 60)',
                
            ],
            borderColor: [
             'rgb(22, 86, 160)',
                'rgb(141, 183, 60)',
               
            ],
            borderWidth: 0
        }]
    },
    plugins: [ChartDataLabels],
    options: {
           plugins: {
            // Change options for ALL labels of THIS CHART

            datalabels: {
                formatter: function(value, context) {
                    return value + '%';
                },                
                padding: 4,
                color: '#ffff',

                font: {
                size: '20',
                weight: '800'

                },



            }
        },

    }
});
//graduation rates
var pieAge = document.getElementById('agePie');
var agePie = new Chart(pieAge, {
    type: 'pie',
    data: {
    labels: ['under 25', 'over 25'],
         datasets: [{
            data: [77, 33],
            backgroundColor: [
                'rgb(22, 86, 160)',
                'rgb(141, 183, 60)'
              
            ],
            borderColor: [
             'rgb(22, 86, 160)',
                'rgb(141, 183, 60)',
                
            ],
            borderWidth: 0
        }]
    },
    plugins: [ChartDataLabels],
    options: {
           plugins: {
            // Change options for ALL labels of THIS CHART

            datalabels: {
                formatter: function(value, context) {
                    return value + '%';
                },                
                padding: 4,
                color: '#ffff',

                font: {
                size: '20',
                weight: '800'

                },



            }
        },

    }
});
//faculty 
var pieFaculty = document.getElementById('facultyPie');
var facultyPie = new Chart(pieFaculty, {
    type: 'pie',
    data: {
    labels: ['Full-time', 'Adjunct faculty'],
         datasets: [{
            data: [86, 247],
            backgroundColor: [
             'rgb(22, 86, 160)',
                'rgb(141, 183, 60)'
            ],
            borderColor: [
             'rgb(22, 86, 160)',
                'rgb(141, 183, 60)'  
            ],
            borderWidth: 0
        }]
    },
    plugins: [ChartDataLabels],
    options: {
           plugins: {
            // Change options for ALL labels of THIS CHART

            datalabels: {
                
                padding: 4,
                color: '#ffff',
                font: {
                size: '20',
                weight: '800'
                }
            }
        }    
    }
});