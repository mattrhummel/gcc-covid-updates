//graduation rates
var pieGenderAndAge = document.getElementById('genderAndAgePie');
var genderAndAgePie = new Chart(pieGenderAndAge, {
    type: 'pie',
    data: {
    labels: ['male', 'female', 'under 25', 'over 25'],
         datasets: [{
            data: [40, 60, 77, 33],
            backgroundColor: [
                'rgb(22, 86, 160)',
                'rgb(141, 183, 60)',
                 'rgb(15, 64, 119)',
                  'rgb(95, 122, 40)'
            ],
            borderColor: [
             'rgb(22, 86, 160)',
                'rgb(141, 183, 60)',
                 'rgb(15, 64, 119)',
                  'rgb(95, 122, 40)'  
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
var pieStudentCount = document.getElementById('studentCountPie')
var studentCountPie = new Chart(pieStudentCount, {
    type: 'pie',
    data: {
    labels: ['Full-time', 'Part-time'],
         datasets: [{
            data: [31, 69],
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
                formatter: function(value, context) {
                    return value + '%';
                },
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