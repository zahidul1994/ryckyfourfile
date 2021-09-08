@extends('layouts.admin')
@section('title', 'Payby list')
@section('page-style')
  <style>
   .modal-content {
    background: #002651;
    color: #fff;
    }
  </style>
    <link href="{{ asset('assets/global/plugins/datatables/dataTables.min.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter ">
            Add Matching
        </button>
        <table id="dataTable" class="table table-striped  table-bordered" style="width: 100%;">
            <thead>

                <tr>
                
                    <th scope="col">SL</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Matching Name</th>
                    <th scope="col">Matching Bonous</th>
                    <th scope ="col">Action</th>
                </tr>
            </thead>
            <tbody>



            </tbody>
            <tfoot>

            </tfoot>
        </table>

    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Matching</h5>
                    <h5> @include('errors.ajaxformerror')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'matching.store', 'class' => 'form', 'id' => 'ccccc']) !!}
                    {!! Form::hidden('matchingid', '', ['id' => 'matchingid']) !!}

                    {!! Form::label('matchingname', ' Matchingname *') !!}
                    {!! Form::text('matchingname', null, ['id' => 'matchingname', 'class' => 'form-control', 'placeholder' => 'Add Matchingname']) !!}


                    {!! Form::label('matchingbonus', ' Matchingbonus ') !!}
                    {!! Form::number('matchingbonus', null, ['id' => 'matchingbonus', 'class' => 'form-control', 'placeholder' => 'Add Matchingbonus']) !!}

                    <div class="modal-footer">
                        <button type="button" id="close" class="btn btn-info" data-dismiss="modal">Close</button>
                        <input type="button" id="addBtn" value="Save Matching" class="btn btn-primary">
                        {!! Form::close() !!}

                    </div>
                    </form>
                </div>
            </div>
        </div>

    @endsection


    @section('page-script')
    <script src="{{ asset('assets/global/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/global/plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
        <script>
            $(document).ready(function() {
                $("#formerrors").hide();
                clearform();
                $('#dataTable').DataTable({
                    // responsive: true,
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: "{{ route('matching.index') }}",
                    },
                    columns: [
                        {
                            data: 'DT_RowIndex',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'admin',
                            name: 'admin',
                        },
                        {
                            data: 'matchingname',
                            name: 'matchingname',
                        },
                        {
                            data: 'matchingbonus',
                            name: 'matchingbonus',
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        }
                    ]
                });
                //Delete Admin
                $(document).on('click', '#deleteBtn', function() {
                    if (!confirm('Sure?')) return;
                    $id = $(this).attr('rid');
                    //console.log($roomid);
                    $info_url = url + '/admin/matching/' + $id;
                    $.ajax({
                        url: $info_url,
                        method: "DELETE",
                        type: "DELETE",
                        data: {},
                        success: function(data) {
                            if (data) {
                                toastr.warning('matching Delete');
                                //location.reload();
                                $('#dataTable').DataTable().ajax.reload();
                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                });
                $("#addBtn").click(function() {
                   // alert();
                    if ($(this).val() == 'Save Matching') {
                       
                        $.ajax({
                            url:"{{ route('matching.store') }}",
                            method: "POST",
                            data: {
                                matchingname: $("#matchingname").val(),
                                matchingbonus: $("#matchingbonus").val()
                            },
                            success: function(d) {
                                if (d.success) {
                                    $("#exampleModalCenter").modal("toggle");
                                    $('#dataTable').DataTable().ajax.reload();
                                     clearform();
                                     toastr.success('New Matching Add Successfully');
                                } else {
                                    $.each(d.errors, function(key, value) {
                                        $('#formerrors').show();
                                        $('#formerrors ul').append('<li>' + value +
                                        '</li>');
                                    });
                                }
                            },
                            error: function(d) {
                                // alert(d.message);
                                console.log(d);
                            }
                        });
                    }
                });
                //Create end shift
                //Update shift
                $("#exampleModalCenter").on('click', '#addBtn', function() {
                    if ($(this).val() == 'Update') {
                    
                        $.ajax({
                            url: url + '/admin/matching/' + $("#matchingid").val(),
                            method: "PUT",
                            type: "PUT",
                            data: {
                                matchingname: $("#matchingname").val(),
                                matchingbonus: $("#matchingbonus").val()
                            },
                            success: function(d) {
                                if (d.success) {
                                    $("#exampleModalCenter").modal("toggle");
                                    $('#dataTable').DataTable().ajax.reload();
                                     clearform();
                                     toastr.info('Update Done');
                                }
                            },
                            error: function(d) {
                                console.log(d);
                            }
                        });
                    }
                });
                //Update shift end
                //Edit shift
                $("#dataTable").on('click', '#editBtn', function() {
                    $matchingid = $(this).attr('rid');

                    $info_url = url + '/admin/matching/' + $matchingid + '/edit';
                    //console.log($info_url);
                    // return;
                    $.get($info_url, {}, function(d) {
                        
                        populateForm(d);
                        location.hash = "ccccc";
                        $("#exampleModalCenter").modal("toggle");
                    });
                });
                //Edit shift end
               
                //form populatede
                function populateForm(data) {
                    $("#matchingname").val(data.matchingname);
                    $("#matchingbonus").val(data.matchingbonus);
                    $("#matchingid").val(data.id);
                    $("#addBtn").val('Update');
                }
                function clearform() {
                    $('#ccccc')[0].reset();
                    $("#addBtn").val('Save Matching');
                }
                $("#close").click(function() {
                    clearform();
                });
            });
        </script>


    @endsection