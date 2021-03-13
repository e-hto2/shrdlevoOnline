@extends('layouts.admin_app')
@section('css')
    <!---Fileupload css-->
    <link href="{{ asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css"/>
    <!---Fancy uploader css-->
    <link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet"/>
    <style>
        #client_modal .form-control{
            width: inherit!important;
        }
        .red-txt{
            color:#FF3366!important;
        }
        #modaldemo1{
            z-index: 9999999!important;
        }
        .modal-body table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        .modal-body td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        .modal-body tr:nth-child(even) {
            background-color: rgb(0,135,67);
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div>

            </div>
            <div class="btn btn-list">
                <a class="btn ripple btn-info" href="#"  onclick="download_function()">Download JSON</a>
            </div>
        </div>
        <!-- End Page Header -->
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="card custom-card">
                    <div class="card-body">
                        <div class="table-responsive" id="client_setup_content">
                            <table id="client_setup" class="table table-bordered border-t0 key-buttons text-nowrap w-100" >
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Age</th>
                                    <th>School</th>
                                    <th>Clear instruction</th>
                                    <th>Difficult</th>
                                    <th>Feedback</th>
                                    <th>add(boke)</th>
                                    <th>remove(tu)</th>
                                    <th>on(ka)</th>
                                    <th>all(bike)</th>
                                    <th>blue(orange)</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="modaldemo1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">View personal information</h6>
                </div>
                <div class="modal-body" id="data_answer">

                </div>
            </div>
        </div>
    </div>

    <!-- End Row -->
@endsection
@section('js')
    <!-- Data Table js -->
    <script src="{{ asset('assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/fileexport/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>
    <!--Fileuploads js-->
    <script src="{{ asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Fancy uploader js-->
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script>
        client_setup = $('#client_setup').DataTable({
            responsive: true,
            language: {
                searchPlaceholder: 'Search...',
                lengthMenu: '_MENU_ items/page',
            },
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('admin.game_dash.index') }}",
            },
            columns: [
                {
                    data:'id',
                    name:'id'
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][0];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][1];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][2];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][3];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][4];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][5];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][6];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][7];
                    }
                },
                {
                    data: 'id',
                    name: 'id',
                    render: function (data, type, row, meta) {
                        var data = row['result'].replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][8];
                    }
                },
                {
                    data: 'result',
                    name: 'result',
                    render: function (data, type, row, meta) {
                        var data = data.replace(/&quot;/gi,"\"");
                        data = JSON.parse(data);
                        return data['survey'][9];
                    }
                },
                {
                    data: 'action',
                    name: 'action',
                    orderable: false
                }
            ],
            // dom: "<'row'<'col-sm-7 text-left'B><'col-sm-5'f>>" +
            //     "<'row'<'col-sm-12'tr>>" +
            //     "<'row'<'col-sm-5'i><'col-sm-7'p>>",
            // buttons: [
            //     'pageLength',
            //     {
            //         extend: 'excelHtml5',
            //         exportOptions: {
            //             columns: [0, 1,2,3,4,5,6,7,8,9]
            //         }
            //     },
            //     {
            //         extend: 'pdfHtml5',
            //         exportOptions: {
            //             columns: [0, 1,2,3,4,5,6,7,8,9]
            //         }
            //     },
            //     'colvis'
            // ],
        });
        client_setup.buttons().container()
            .appendTo('#client_setup_wrapper .col-md-6:eq(0)');

        function download_function() {
            $.ajax({
                url:"{{ route('admin.download_json') }}",
                method:"POST",
                data: {
                    "_token": "{{csrf_token()}}",
                },
                dataType:"json",
                success:function(data)
                {
                   var json_data = [];
                   for(var i=0;i<data.length;i++){

                       json_data[i] = JSON.parse(data[i]['result']);
                   }
                    download("web_game_result.json",JSON.stringify(json_data));
                }
            });
        }
        function download(fileNameToSaveAs, textToWrite) {
            /* Saves a text string as a blob file*/
            var ie = navigator.userAgent.match(/MSIE\s([\d.]+)/),
                ie11 = navigator.userAgent.match(/Trident\/7.0/) && navigator.userAgent.match(/rv:11/),
                ieEDGE = navigator.userAgent.match(/Edge/g),
                ieVer=(ie ? ie[1] : (ie11 ? 11 : (ieEDGE ? 12 : -1)));

            if (ie && ieVer<10) {
                console.log("No blobs on IE ver<10");
                return;
            }

            var textFileAsBlob = new Blob([textToWrite], {
                type: 'text/plain'
            });

            if (ieVer>-1) {
                window.navigator.msSaveBlob(textFileAsBlob, fileNameToSaveAs);

            } else {
                var downloadLink = document.createElement("a");
                downloadLink.download = fileNameToSaveAs;
                downloadLink.href = window.URL.createObjectURL(textFileAsBlob);
                downloadLink.onclick = function(e) { document.body.removeChild(e.target); };
                downloadLink.style.display = "none";
                document.body.appendChild(downloadLink);
                downloadLink.click();
            }
        }
        $(document).on('click', '.view_personal_information', function () {
            var id = $(this).attr('id');
            $.ajax({
                url:"{{ route('admin.view_personal_information') }}",
                method:"POST",
                data: {
                    "_token": "{{csrf_token()}}",
                    "id" : id
                },
                dataType:"json",
                success:function(data)
                {
                    var data_str = data[0]['result'];
                    var data_next = JSON.parse(data_str);
                    var data_answer = data_next['answers'];
                    var tasks = data_next['tasks'][0]['conf'];
                    var answer_html = '<table>\n' +
                        '    <tr>\n' +
                        '        <th>Task</th>\n' +
                        '        <th>Time</th>\n' +
                        '        <th>Result</th>\n' +
                        '        <th>Attempts</th>\n' +
                        '        <th>TaskAttempts</th>\n' +
                        '        <th>Instruction</th>\n' +
                        '        <th>Old Instruction</th>\n' +
                        '    </tr>';

                    console.log(data_answer);
                    if (data_answer === undefined){
                        answer_html += '</table>';
                        document.getElementById('data_answer').innerHTML = answer_html;
                        $('#modaldemo1').modal('show');
                    }else{
                        for (var i = 0; i< data_answer.length;i++){
                            answer_html += '<tr>\n' +
                                '        <td>'+data_answer[i]['task']+'</td>\n' +
                                '        <td>'+data_answer[i]['time']+'</td>\n' +
                                '        <td>'+data_answer[i]['result']+'</td>\n' +
                                '        <td>'+data_answer[i]['attempts']+'</td>\n' +
                                '        <td>'+data_answer[i]['taskAttempts']+'</td>\n';
                            var task_id = data_answer[i]['task'];
                            var task_id = data_answer[i]['task'];
                            answer_html += '<td>' + tasks[task_id]['instruction'] +'</td>';
                            answer_html += '<td>' + tasks[task_id]['old_instruction'] + '</td>';
                            answer_html += '    </tr>';
                        }
                        answer_html += '</table>';
                        document.getElementById('data_answer').innerHTML = answer_html;
                        $('#modaldemo1').modal('show');
                    }

                }
            })
        });
    </script>
@endsection


