@extends('layouts.admin')
@section('title', 'Commission list')
@section('page-style')
<style>
    input#sponsercommisson {
    margin-bottom: 15px;
}
</style>
    <link href="{{ asset('assets/global/plugins/datatables/dataTables.min.css') }}" rel="stylesheet">

@endsection
@section('content')
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
            Add Commission
        </button>
        <table id="dataTable" class="table table-striped table-dark table-bordered" style="width: 100%;">
            <thead>

                <tr>
                
                    <th scope="col">SL</th>
                    <th scope="col">Created By</th>
                    <th scope="col">Rank</th>
                    <th scope="col">Video Commission Rate</th>
                    <th scope="col">Sponser Commission Rate</th>
                    <th scope="col">Matching Commission Rate</th>
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
                    <h5 class="modal-title" id="exampleModalLongTitle">Add Commission</h5>
                    <h5> @include('errors.ajaxformerror')</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!! Form::open(['route' => 'commission.store', 'class' => 'form', 'id' => 'ccccc']) !!}
                    {!! Form::hidden('commissionid', '', ['id' => 'commissionid']) !!}

                    {!! Form::label('videocommisson', '* Videocommisson Rate') !!}
                    {!! Form::number('videocommisson', null, ['id' => 'videocommisson', 'class' => 'form-control', 'placeholder' => 'Add videocommisson','step'=>'any','required']) !!}

                    {!! Form::label('matchingcommisson', '* Matchingcommisson Rate') !!}
                    {!! Form::number('matchingcommisson', null, ['id' => 'matchingcommisson', 'class' => 'form-control', 'placeholder' => 'Add matchingcommisson','step'=>'any','required']) !!}
                    {!! Form::label('sponsercommisson', '* Sponsercommisson Rate') !!}
                    {!! Form::number('sponsercommisson', null, ['id' => 'sponsercommisson', 'class' => 'form-control', 'placeholder' => 'Add sponsercommisson','step'=>'any','required']) !!}
                     {!! Form::label('rank_id', '* Rank  ') !!}
                    {!! Form::select('rank_id',CommonFx::Rankinfo(), 1, ['id' => 'rank_id', 'class' => 'form-control', 'placeholder' => 'Select Rank']) !!}

                    <div class="modal-footer">
                        <button type="button" id="close" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="button" id="addBtn" value="Save Commission" class="btn btn-primary">
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

                        url: "{{ route('commission.index') }}",

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

                        }, {
                            data: 'rank',
                            name: 'rank',

                        },
                        {
                            data: 'videocommisson',
                            name: 'videocommisson',

                        },
                        {
                            data: 'sponsercommisson',
                            name: 'sponsercommisson',

                        },
                        {
                            data: 'matchingcommisson',
                            name: 'matchingcommisson',

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
                    $info_url = url + '/admin/commission/' + $id;
                    $.ajax({
                        url: $info_url,
                        method: "DELETE",
                        type: "DELETE",
                        data: {},
                        success: function(data) {
                            if (data) {
                                toastr.warning('customer Inactive');
                                //location.reload();
                                $('#dataTable').DataTable().ajax.reload();

                            }
                        },
                        error: function(data) {
                            console.log(data);
                        }
                    });
                });

//mark:2
                $("#addBtn").click(function() {

                    if ($(this).val() == 'Save Commission') {
                       
                        $.ajax({
                            url:"{{ route('commission.store') }}",
                            method: "POST",
                            data: {
                                matchingcommisson: $("#matchingcommisson").val(),
                                videocommisson: $("#videocommisson").val(),
                                rank_id: $("#rank_id").val(),
                                sponsercommisson: $("#sponsercommisson").val()

                            },
                            success: function(d) {
                                if (d.success) {
                                    $("#exampleModalCenter").modal("toggle");
                                    $('#dataTable').DataTable().ajax.reload();
                                     clearform();

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
                            url: url + '/admin/commission/' + $("#commissionid").val(),
                            method: "PUT",
                            type: "PUT",
                            data: {
                                matchingcommisson: $("#matchingcommisson").val(),
                                sponsercommisson: $("#sponsercommisson").val(),
                                rank_id: $("#rank_id").val(),
                                videocommisson: $("#videocommisson").val()
                            },
                            success: function(d) {
                                if (d.success) {
                                    $("#exampleModalCenter").modal("toggle");
                                    $('#dataTable').DataTable().ajax.reload();
                                     clearform();



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

                    $commissionid = $(this).attr('rid');

                    $info_url = url + '/admin/commission/' + $commissionid + '/edit';
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
                    $("#matchingcommisson").val(data.matchingcommisson);
                    $("#rank_id").val(data.rank_id);
                    $("#sponsercommisson").val(data.sponsercommisson);
                     $("#videocommisson").val(data.videocommisson);
                     $("#commissionid").val(data.id);
                    $("#addBtn").val('Update');


                }

                function clearform() {
                    $('#ccccc')[0].reset();
                    $("#addBtn").val('Save Commission');
                }

                $("#close").click(function() {
                    clearform();
                });


            });
        </script>


    @endsection
