
var color = ['#8760fb', '#03c895', '#b3ffb3', '#e6b3ff', '#ff4dd2', '#ff6666', '#e6e600', '#009900', ' #ff1aff', '#ff1a1a', '#800000', '#d9d9d9'];
var color_choose_value = JSON.parse('{!! json_encode($data["top_placement_order"]) !!}');
var color_choose_value_2 = JSON.parse('{!! json_encode($data["top_media_platform_item"]) !!}');
var i = 0;
var platform_index = 0;
for (key in color_choose_value) {
    color_choose_value[key] = color[i];
    document.getElementById('round' + i.toString()).style.backgroundColor = color[i];
    i++;
}
for (key in color_choose_value_2) {
    color_choose_value_2[key] = color[platform_index];
    document.getElementById('platform' + platform_index.toString()).style.backgroundColor = color[platform_index];
    platform_index++;
}
var placement_array = ['{{ $data["top_placement"][0] }}'];
var placement_array_2 = ['{{ $data["top_platform"][0] }}'];
$(function () {
    var placement_date = "Day";
    var placement_date_2 = "Day";
    var placement = "";
    var placement_2 = "";
    draw_line_chart(placement_array, "Day");
    draw_line_chart_2(placement_array_2, "Day");
    $('.placement_date>.btn').on('click', function () {
        $(this).addClass('graphic_active');
        $(this).siblings().removeClass('graphic_active');
        placement_date = $(this).text();
        draw_line_chart(placement_array, placement_date);
    });
    $(".top_placement_graphic>.list-group-item").on('click', function () {

        placement = $(this).find('.placement_title').text();
        if ($(this).hasClass('graphic_active')) {
            $(this).removeClass('graphic_active');
            remove_array_item(placement_array, placement);
        } else {
            $(this).addClass('graphic_active');
            placement_array.push(placement);
        }
        draw_line_chart(placement_array, placement_date);
    });
    $('.placement_date_2>.btn').on('click', function () {
        $(this).addClass('graphic_active');
        $(this).siblings().removeClass('graphic_active');
        placement_date_2 = $(this).text();
        draw_line_chart(placement_array_2, placement_date_2);
    });
    $(".top_placement_graphic_2>.list-group-item").on('click', function () {

        placement_2 = $(this).find('.placement_title_2').text();
        if ($(this).hasClass('graphic_active')) {
            $(this).removeClass('graphic_active');
            remove_array_item(placement_array_2, placement_2);
        } else {
            $(this).addClass('graphic_active');
            placement_array_2.push(placement_2);
        }
        draw_line_chart_2(placement_array_2, placement_date_2);
    });
})

function remove_array_item(value, item) {
    var index = value.indexOf(item);
    if (index > -1) {
        value.splice(index, 1);
    } else {
        value.splice(0, 1);
    }
}

function date_string_convert_to_time(data) {
    var new_data = [];
    var final_result = [];

    for (key in data) {
        for (key_item in data[key]) {
            new_data.push([new Date(data[key][key_item]['post_date']).getTime(), parseInt(data[key][key_item]['sponsorship'])]);
        }
        new_data.sort(compare);
        final_result.push({
            data: new_data,
            label: key,
            color: color_choose_value[key]
        });
        new_data = [];
    }
    return final_result;
}

function compare(a, b) {
    const bandA = a[0];
    const bandB = b[0];

    let comparison = 0;
    if (bandA > bandB) {
        comparison = 1;
    } else if (bandA < bandB) {
        comparison = -1;
    }
    return comparison;
}

function draw_line_chart(placement_array_value, placement_date_range) {
    $("#flotArea2").html("<div style='text-align: center;padding-top: 200px;'><img width='70'  style='vertical-align: middle;' src='https://i.gifer.com/origin/34/34338d26023e5515f6cc8969aa027bca_w200.gif'></div>");
    if (placement_array_value.length == 0) {
        $('#flotArea2').html("");
    } else {
        var draw_line_chart_value = [];
        $.ajax({
            url: "{{ route('client.draw_line_chart') }}",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                'placement_array_value': placement_array_value,
                'placement_date_range': placement_date_range
            },
            success: function (data) {
                var new_data = date_string_convert_to_time(data);
                var plot = $.plot($('#flotArea2'), new_data,
                    {
                        series: {
                            lines: {
                                show: true,
                                lineWidth: 1,
                                fill: true,
                                fillColor: {
                                    colors: [{
                                        opacity: 0
                                    }, {
                                        opacity: 0.3
                                    }]
                                }
                            },
                            shadowSize: 0
                        },
                        points: {
                            show: true,
                        },
                        legend: {
                            noColumns: 1,
                            position: 'nw'
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            borderColor: '#ddd',
                            borderWidth: 0,
                            labelMargin: 5
                        },
                        yaxis: {
                            color: 'rgba(119, 119, 142, 0.2)',
                            font: {
                                size: 10,
                                color: '#77778e'
                            }
                        },
                        xaxis: {
                            color: 'rgba(119, 119, 142, 0.2)',
                            mode: 'time',
                            timeformat: '%d/%m/%Y',
                            font: {
                                size: 10,
                                color: '#77778e'
                            }
                        }
                    });
            },
            error: function (data) {
                $('#flotArea2').html("");
            }
        });
    }
}
function different_key_value_sort(array){
    var arr = [];
    var prop;
    for (prop in array) {
        if (array.hasOwnProperty(prop)) {
            arr.push({
                'key': prop,
                'value': array[prop]
            });
        }
    }
    arr.sort(function(a, b) {
        return a.value - b.value;
    });
    return arr; // returns array
}
$(function () {
    var videovsimage = [{
        label: 'IMAGE',
        data: [
            [1, '{{ $data['image'] }}']
        ],
        color: '#8760fb'
    }, {
        label: 'VIDEO',
        data: [
            [1, '{{ $data['video'] }}']
        ],
        color: '#03c895'
    }];

    var social_media_data1 = JSON.parse('{!! json_encode($data["social_media_graphic_value"]) !!}');
    var social_media_data = different_key_value_sort(social_media_data1);
    var social = [];
    for (var key1=0;key1<social_media_data.length;key1++){
        if (key1 == social_media_data.length-1){
            social.push(
                {
                    label: social_media_data[key1]['key'],
                    data: [
                        [1, social_media_data[key1]['value']]
                    ],
                    color: '#03c895'
                }
            );
        }else {
            social.push(
                {
                    label: social_media_data[key1]['key'],
                    data: [
                        [1, social_media_data[key1]['value']]
                    ],
                    color: color[key1]
                }
            );
        }
    }

    var broadcast_media_data1 = JSON.parse('{!! json_encode($data["broadcast_media_graphic_value"]) !!}');
    var broadcast_media_data = different_key_value_sort(broadcast_media_data1);
    var broadcast = [];
    for (var jj=0;jj<broadcast_media_data.length;jj++){
        if (jj == broadcast_media_data.length-1){
            broadcast.push(
                {
                    label: broadcast_media_data[jj]['key'],
                    data: [
                        [1, broadcast_media_data[jj]['value']]
                    ],
                    color: '#03c895'
                }
            );
        }else{
            broadcast.push(
                {
                    label: broadcast_media_data[jj]['key'],
                    data: [
                        [1, broadcast_media_data[jj]['value']]
                    ],
                    color: color[jj]
                }
            );
        }

    }
    $.plot('#flotPie1', social, {
        series: {
            pie: {
                show: true,
                innerRadius: 0.2,
                radius:1,
                label: {
                    show: true,
                    radius: 2 / 3,
                    formatter: labelFormatter,
                    threshold: 0.1,
                },
                // stroke:{
                //     color:'transparent',
                // },
            }
        },
        grid: {
            hoverable: true,
            clickable: true
        }
    });
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
        id = $(e.target).attr('href');
        if (id == "#tabCont1") {
            $.plot('#flotPie1', social, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.2,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }
                    }
                },

                grid: {
                    hoverable: true,
                    clickable: true,
                }
            });
        }
        if (id == "#tabCont2") {
            $.plot('#flotPie2', broadcast, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.2,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        }
                    }
                },
                tooltip: true,
                grid: {
                    hoverable: true,
                    clickable: true,

                }
            });
        }
        if (id == "#tabCont3") {
            $.plot('#flotPie3', videovsimage, {
                series: {
                    pie: {
                        show: true,
                        radius: 1,
                        innerRadius: 0.2,
                        label: {
                            show: true,
                            radius: 2 / 3,
                            formatter: labelFormatter,
                            threshold: 0.1
                        },
                    }
                },
                tooltip: true,
                grid: {
                    hoverable: true,
                    clickable: true,
                }
            });
        }
    });

    /**************** PIE CHART *******************/
    function labelFormatter(label, series) {
        return '<div style="font-size:8pt; text-align:center; padding:2px; color:white;">' + label + '<br/>' + Math.round(series.percent * 100) / 100 + '%</div>';
    }
});

function date_string_convert_to_time_2(data) {
    var new_data = [];
    var final_result = [];

    for (key in data) {
        for (key_item in data[key]) {
            new_data.push([new Date(data[key][key_item]['post_date']).getTime(), parseInt(data[key][key_item]['sponsorship'])]);
        }
        new_data.sort(compare);
        final_result.push({
            data: new_data,
            label: key,
            color: color_choose_value_2[key]
        });
        new_data = [];
    }
    return final_result;
}

function draw_line_chart_2(platform_array, placement_date_range) {
    $("#flotArea3").html("<div style='text-align: center;padding-top: 200px;'><img width='70'  style='vertical-align: middle;' src='https://i.gifer.com/origin/34/34338d26023e5515f6cc8969aa027bca_w200.gif'></div>");
    if (platform_array.length == 0) {
        $('#flotArea3').html("");
    } else {
        var draw_line_chart_value = [];
        $.ajax({
            url: "{{ route('client.draw_line_chart_platform') }}",
            method: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                'platform_array': platform_array,
                'placement_date_range': placement_date_range
            },
            success: function (data) {
                var new_data = date_string_convert_to_time_2(data);
                var plot = $.plot($('#flotArea3'), new_data,
                    {
                        series: {
                            lines: {
                                show: true,
                                lineWidth: 1,
                                fill: true,
                                fillColor: {
                                    colors: [{
                                        opacity: 0
                                    }, {
                                        opacity: 0.3
                                    }]
                                }
                            },
                            shadowSize: 0
                        },
                        points: {
                            show: true,
                        },
                        legend: {
                            noColumns: 1,
                            position: 'nw'
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,
                            borderColor: '#ddd',
                            borderWidth: 0,
                            labelMargin: 5
                        },
                        yaxis: {
                            color: 'rgba(119, 119, 142, 0.2)',
                            font: {
                                size: 10,
                                color: '#77778e'
                            }
                        },
                        xaxis: {
                            color: 'rgba(119, 119, 142, 0.2)',
                            mode: 'time',
                            timeformat: '%d/%m/%Y',
                            font: {
                                size: 10,
                                color: '#77778e'
                            }
                        }
                    });
            },
            error: function (data) {
                $('#flotArea3').html("");
            }
        });
    }
}
