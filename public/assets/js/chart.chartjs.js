$(function() {
	'use strict';
    var data = {
        datasets: [{
            data: [
                100,
                90,
                80,
                70,
                60,
                50
            ],
            backgroundColor: [
                "#7ab5eb",
                "#444347",
                "#91eb7c",
                "#f7a15b",
                "#7e85e9",
                "#ed5d87"
            ],
        }],
        labels: [
            "40% Branding and Marketing ",
            "20% Gift Code Inventory",
            "18% Legal & Financial Over head",
            "10% IT Infrastructure",
            "8% Bounty & Overhead",
            "4% Management"
        ],
    };
	/* polar chart */
	var ctx = document.getElementById("chartPolar");
	var myChart = new Chart(ctx, {
        data: data,
        type: 'polarArea',
        options:{
            legend:{
                position:'right',
                labels: {
                    boxWidth:8,
                },
                onHover: function(event, legendItem) {
                    document.getElementById("canvas").style.cursor = 'pointer';
                }
            },
            scale: {
                display:false
            },
            tooltips: {
                custom: function(tooltip) {
                    if (!tooltip.opacity) {
                        document.getElementById("canvas").style.cursor = 'default';
                        return;
                    }
                }
            },
			responsive: true,
			maintainAspectRatio: false,
        },
		// type: 'polarArea',
		// data: {
		// 	datasets: [{
		// 		data: [18, 15, 9, 6, 19],
		// 		backgroundColor: ['#8760fb', '#eb6f33', '#01b8ff', '#ff473d', '#03c895'],
		// 		hoverBackgroundColor: ['#8760fb', '#eb6f33', '#01b8ff', '#ff473d', '#03c895'],
		// 		borderColor:'transparent',
		// 	}],
		// 	labels: ["Data1", "Data2", "Data3", "Data4"]
		// },
		// options: {
		// 	scale: {
		// 		gridLines: {
		// 				color: 'rgba(119, 119, 142, 0.2)'
		// 		}
		// 	},
		// 	responsive: true,
		// 	maintainAspectRatio: false,
		// 	legend: {
		// 		labels: {
		// 			fontColor: "#77778e"
		// 		},
		// 	},
		// }
	});

});