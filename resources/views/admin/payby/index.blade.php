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
            Add Payby
        </button>
        <table id="dataTable" class="table table-striped  table-bordered" style="width: 100%;">
            <thead>

                <tr>
                
                    <th scope="col">SL</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Pay By</th>
                    <th scope="col">Note</th>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Payby</h5>
                    <h5> @include('errors.ajaxformerror')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'payby.store', 'class' => 'form', 'id' => 'ccccc']) !!}
                    {!! Form::hidden('paybyid', '', ['id' => 'paybyid']) !!}

                    {!! Form::label('payby', ' Payby *') !!}
                    {!! Form::text('payby', null, ['id' => 'payby', 'class' => 'form-control', 'placeholder' => 'Add Payby']) !!}


                    {!! Form::label('note', ' Note * ') !!}
                    {!! Form::text('note', null, ['id' => 'note', 'class' => 'form-control', 'placeholder' => 'Add note']) !!}

                    <div class="modal-footer">
                        <button type="button" id="close" class="btn btn-info" data-dismiss="modal">Close</button>
                        <input type="button" id="addBtn" value="Save Payby" class="btn btn-primary">
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
                        url: "{{ route('payby.index') }}",
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
                            data: 'payby',
                            name: 'payby',
                        },
                        {
                            data: 'note',
                            name: 'note',
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
                    $info_url = url + '/admin/payby/' + $id;
                    $.ajax({
                        url: $info_url,
                        method: "DELETE",
                        type: "DELETE",
                        data: {},
                        success: function(data) {
                            if (data) {
                                toastr.warning('Payby Delete');
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
                    if ($(this).val() == 'Save Payby') {
                       
                        $.ajax({
                            url:"{{ route('payby.store') }}",
                            method: "POST",
                            data: {
                                payby: $("#payby").val(),
                                note: $("#note").val()
                            },
                            success: function(d) {
                                if (d.success) {
                                    $("#exampleModalCenter").modal("toggle");
                                    $('#dataTable').DataTable().ajax.reload();
                                     clearform();
                                     toastr.success('New Payby Add Successfully');
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
                            url: url + '/admin/payby/' + $("#paybyid").val(),
                            method: "PUT",
                            type: "PUT",
                            data: {
                                payby: $("#payby").val(),
                                note: $("#note").val()
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
                    $paybyid = $(this).attr('rid');
                    $info_url = url + '/admin/payby/' + $paybyid + '/edit';
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
                    $("#payby").val(data.payby);
                    $("#note").val(data.note);
                    $("#paybyid").val(data.id);
                    $("#addBtn").val('Update');
                }
                function clearform() {
                    $('#ccccc')[0].reset();
                    $("#addBtn").val('Save Payby');
                }
                $("#close").click(function() {
                    clearform();
                });
            });
        </script>


    @endsection