@extends('admin.main')

@section('page-specific-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endsection

@section('content')

    <!-- Main Container -->

    <!-- Page Content -->
    <!-- Basic -->
    <div class="block block-rounded">
        <div class="block-header">
            <h2 class="block-title">Website Header Notice</h2>
            <h5 style="float: right">Date: {{ date('d-m-Y') }}</h5>
        </div>

        <!-- For Loop -->

        <!-- Dynamic Table Full -->
        <div class="block block-rounded"
            <div class="block-content block-content-full table-responsive" id="show_data">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                <form action="{{ route('upload-notice') }}" method="POST" enctype="multipart/form-data" method="POST"
                      name="Form">
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-12">
                            <label for="name">Header Notice<span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" id="notice" name="notice" required></textarea>
                        </div>


                        <div class=" form-group">
                            <br>
                            <button style="float: center" type="submit" class="btn btn-primary mr-1 mb-3"
                                    id="uploadBtn">
                                <i class="fa fa-upload mr-1"></i> Publish
                            </button>
                            <span class="input-group-addon d-none" id="loader">
                                <img src="{{ asset('assets/images/loader/ajaxLoader.gif') }}" height="30"
                                     style="margin-bottom: 10px"/>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-body">
                <div class="table table-hover table-responsive" id="show_notices">
{{--                    Show--}}
                </div>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- Add Custom Policy Modal -->
    <div id="update-modal" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div id="loader" class="lds-dual-ring hidden overlay"></div>
                <div class="modal-header">
                    <h5 class="modal-title">Update Notice</h5>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
                <div class="modal-body">
                    <form id="update_form">
                        @csrf
                        <div class="row">
                            <input type="hidden" name="id" id="id">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="form-group">
                                    <label for="">Notice</label>
                                    <textarea id="edit_notice" name="edit_notice" type="text" class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button id="update" type="submit"  class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Add Custom Policy Modal -->

    <!-- END Basic -->
    <!-- END Page Content -->

@endsection


@section('page-specific-javascript')
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.4.37/sweetalert2.min.js"></script>
    <script>
        $(document).ready(function () {
            fetchNotices();
            function fetchNotices() {
                $.ajax({
                    type: 'GET',
                    url: '{{route('fetch-notice')}}',
                    dataType: 'json',
                    success:function (response) {
                        $('#show_notices').html(response);
                        // console.log(response);
                        var table = $('#notice-table').DataTable({
                            order: [[1, 'desc']],
                            "autoWidth": false,
                            "language": {
                                // "lengthMenu": '_MENU_ bản ghi trên trang',
                                // "search": '<i class="fa fa-search"></i>',
                                "searchPlaceholder": "Type here to search",
                                // "paginate": {
                                //     "previous": '<i class="fa fa-angle-left"></i>',
                                //     "next": '<i class="fa fa-angle-right"></i>'
                                // }
                            }
                        });
                    }
                })
            }


            /*Edit  Dept S*/
            $(document).on('click','#btn_edt_notice',function () {
                console.log('EDIT');
                $.ajax({
                    headers: {
                        'X-CSRF-Token': '{{ csrf_token() }}',
                    },
                    url: "{{route('edit-notice')}}",
                    type:"post",
                    dataType: "json",
                    data: {
                        'id': $(this).data('id'),
                    },
                    beforeSend: function() {
                        $('#loader').removeClass('hidden')
                    },
                    complete: function(){
                        $('#loader').addClass('hidden')
                    },
                    success: function (response) {
                        console.log(response.data);
                        $('#id').val(response.data.id);
                        $('#edit_notice').val(response.data.notice);
                    }
                });
            })
            /*Edit Dept S*/

            /*Update DEPT S*/
            $(document).on('click','#update',function (e) {
                console.log('UPDATW')
                e.preventDefault();
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success m-1',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })

                swalWithBootstrapButtons.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Update it!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: false
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: '{{route("update-notice")}}',
                            type: 'post',
                            dataType: 'json',
                            data: $('#update_form').serialize(),
                            success: function(response)  {
                                $('#update_form')[0].reset(),
                                    swalWithBootstrapButtons.fire(
                                        'Updated!',
                                        'Your data has been updated.',
                                        'success'
                                    );
                                fetchNotices();
                                $('#update-modal').modal('hide');
                            }
                        })
                    } else if (result.dismiss === Swal.DismissReason.cancel) {
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your data is safe to IT Division :)',
                            'error'
                        )
                        $('#update-modal').modal('hide');
                    }
                })
            });
            /*Update DEPT E*/

            /*Action Delete S*/
            $(document).on('click','#btn_dlt_notice',function (e) {
                const swalWithBootstrapButtons = Swal.mixin({
                    customClass: {
                        confirmButton: 'btn btn-success m-1',
                        cancelButton: 'btn btn-danger'
                    },
                    buttonsStyling: false
                })
                swalWithBootstrapButtons.fire({
                    title: 'Do you want to delete?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonText: 'Yes, Release!',
                    cancelButtonText: 'No, cancel!',
                    reverseButtons: false
                }).then((result)=>{
                    if(result.isConfirmed){
                        $.ajax({
                            headers: {
                                'X-CSRF-Token': '{{ csrf_token() }}',
                            },
                            url: "{{route('delete-notice')}}",
                            type:"post",
                            dataType: "json",
                            data: {
                                'id': $(this).data('id'),
                            },
                            success: function(response)  {
                                console.log(response);
                                swalWithBootstrapButtons.fire(
                                    'Updated!',
                                    'Your data has been updated.',
                                    'success'
                                );
                                fetchNotices();
                            },
                            error: function(reponse){
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Oops...',
                                    text: 'Something went wrong!',
                                    footer: '<a href="mailto: itdivision@bdbiman.com">Contact Biman IT Division for assistance</a>'
                                })
                            }
                        })
                    }else{
                        swalWithBootstrapButtons.fire(
                            'Cancelled',
                            'Your data is safe with us.',
                            'error'
                        )
                    }
                })
            });
            /*Action Delete E*/
        })
    </script>
@endsection
