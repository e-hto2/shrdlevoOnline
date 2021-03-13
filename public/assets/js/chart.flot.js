// $(function() {
// 	'use strict'
//     var retCust = [
//         ["1/2/2020", 1],
//         ["2/2/2020", 2],
//         ["3/2/2020", 5],
//         ["4/2/2020", 3],
//         ["5/2/2020", 5],
//         ["6/2/2020", 6],
//         ["7/2/2020", 9]
//     ];
//     var newCust = [
//         ["1/2/2020", 2],
//         ["2/2/2020", 3],
//         ["3/2/2020", 6],
//         ["4/2/2020", 5],
//         ["5/2/2020", 7],
//         ["6/2/2020", 8],
//         ["7/2/2020", 25]
//     ];
//     var plot = $.plot($('#flotArea2'), [{
//         data: newCust,
//         label: 'New Customer',
//         color: '#8760fb'
//     }, {
//         data: retCust,
//         label: 'Returning Customer',
//         color: '#eb6f33'
//     }], {
//         series: {
//             lines: {
//                 show: true,
//                 lineWidth: 1,
//                 fill: true,
//                 fillColor: {
//                     colors: [{
//                         opacity: 0
//                     }, {
//                         opacity: 0.3
//                     }]
//                 }
//             },
//             shadowSize: 0
//         },
//         points: {
//             show: true,
//         },
//         legend: {
//             noColumns: 1,
//             position: 'nw'
//         },
//         grid: {
//             hoverable: true,
//             clickable: true,
//             borderColor: '#ddd',
//             borderWidth: 0,
//             labelMargin: 5
//         },
//         yaxis: {
//             min: 0,
//             max: 30,
//             color: 'rgba(119, 119, 142, 0.2)',
//             font: {
//                 size: 10,
//                 color: '#77778e'
//             }
//         },
//         xaxis: {
//             mode: "time",minTickSize: [1, "hour"],
//             min: (new Date("2000/01/01")).getTime(),
//             max: (new Date("2000/01/02")).getTime(),
//             font: {
//                 size: 10,
//                 color: '#77778e'
//             }
//         }
//     });
// 	/**************** PIE CHART *******************/
// 	var piedata = [{
// 		label: 'IMAGE',
// 		data: [
// 			[1, 50]
// 		],
// 		color: '#8760fb'
// 	}, {
// 		label: 'VIDEO',
// 		data: [
// 			[1, 40]
// 		],
// 		color: '#03c895'
// 	}];
// 	$.plot('#flotPie1', piedata, {
// 		series: {
// 			pie: {
// 				show: true,
// 				radius: 1,
// 				label: {
// 					show: true,
// 					radius: 2 / 3,
// 					formatter: labelFormatter,
// 					threshold: 0.1
// 				}
// 			}
// 		},
// 		grid: {
// 			hoverable: true,
// 			clickable: true
// 		}
// 	});
// 	$.plot('#flotPie2', piedata, {
// 		series: {
// 			pie: {
// 				show: true,
// 				radius: 1,
// 				innerRadius: 0.5,
// 				label: {
// 					show: true,
// 					radius: 2 / 3,
// 					formatter: labelFormatter,
// 					threshold: 0.1
// 				}
// 			}
// 		},
// 		grid: {
// 			hoverable: true,
// 			clickable: true
// 		}
// 	});
//
// 	function labelFormatter(label, series) {
// 		return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' + label + '<br/>' + Math.round(series.percent) + '%</div>';
// 	}
// });