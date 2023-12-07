@extends('admin.main')
@section('page-specific-css')
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    {{-- <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script> --}}
            <link href="https://fonts.maateen.me/adorsho-lipi/font.css" rel="stylesheet">
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
            <h2 class="block-title">Publish News </h2>
            <h5 style="float: right">Date: {{ date('d-m-Y') }}</h5>

        </div>
        <div class="block-content block-content-full">
           
           
            <form action="{{ route('publishNews') }}" method="POST" enctype="multipart/form-data" method="POST" name="Form">

                @csrf

                <div class="form-row">

                    <div class="form-group col-md-12">
                        <label for="name">News Title<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="form-group col-md-12">
                        <!-- CKEditor 5 Classic Container -->

                        <label for="name">News Description<span class="text-danger">*</span></label>
                        {{-- <div id="js-ckeditor5-classic"> --}}
                        <!--<textarea name="description" id="js-ckeditor5-classic" cols="30" rows="10"></textarea>-->
                        <textarea class="summernote" name="description"></textarea>
                        {{-- </div> --}}

                    </div>

                    <div class="form-group col-md-4">
                        <!-- CKEditor 5 Classic Container -->

                        <label for="name">Select Category<span class="text-danger">*</span></label>
                        <select class="form-control" id="category" name="category" required>
                            <option>Please select</option>
                            <option value="Press Release">Press Release</option>
                            <option value="Discount">Fare Change</option>
                            <option value="Offer">Offer</option>
                            <option value="Flight">New Route</option>
                            <option value="Schedule">Schedule Change</option>
                            <option value="Advisory">Advisory</option>
                        </select>

                    </div>

                    <div class="form-group col-md-2">

                    </div>


                    <div class="form-group col-md-6">
                        <label>Upload Relevant Photo (.jpg/.png) <span class="badge badge-success"> Optional</span> </label>
                        <label class="badge badge-danger"> Image size must be below 200KB.</label> 
                        <label>Click this link<a target="__blank" href="https://tinypng.com "> Compress Image </a>to reduce image size.</label> 
                        <br>
                        <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                        <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                        <input type="file" id="input_file_image" name="input_file_image">
                        <br>
                        @error('input_file_image')
                            <span role="alert">
                                <strong style="color: red; font-size: 16px">
                                    {{ $message }}
                                </strong>
                            </span>
                        @enderror

                    </div>

                    <!--<div class="form-group col-md-6">-->
                    <!--    <label>Upload News Pdf (.pdf)</label>-->
                    <!--    <br>-->
                        
                    <!--    <input type="file" id="input_file_pdf" name="input_file_pdf" required>-->

                    <!--    @error('input_file_pdf')-->
                    <!--        <span role="alert">-->
                    <!--            <strong style="color: red; font-size: 16px">-->
                    <!--                {{ $message }}-->
                    <!--            </strong>-->
                    <!--        </span>-->
                    <!--    @enderror-->

                    <!--</div>-->


                    <div class=" form-group">
                        <br>
                        <button style="float: center" type="submit" class="btn btn-primary mr-1 mb-3" id="uploadBtn">
                            <i class="fa fa-upload mr-1"></i> Publish
                        </button>
                        <span class="input-group-addon d-none" id="loader">
                            <img src="{{ asset('assets/images/loader/ajaxLoader.gif') }}" height="30"
                                style="margin-bottom: 10px" />
                        </span>
                    </div>


                </div>

            </form>

        </div>
        
        <!-- For Loop -->
        <div class="content">
            <!-- Dynamic Table Full -->
            <div class="block block-rounded">
                <div class="block-header">
                    <h3 class="block-title">Uploaded News</h3>
                </div>
                <div class="block-content block-content-full">
                    <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->


                    <table class="table table-bordered table-striped table-vcenter" id="dataTable">
                        <thead>
                            <tr>
                                <th class="d-none d-sm-table-cell badge badge-success"
                                style="width: 5%; text-align:center">ID</th>
                                <th class="d-none d-sm-table-cell badge badge-success"
                                    style="width: 20%; text-align:center">Date</th>
                                <th class="d-none d-sm-table-cell badge badge-success"
                                    style="width: 30%; text-align:center">News Title</th>
                                <th class="d-none d-sm-table-cell badge badge-success"
                                    style="width: 15%; text-align:center">Uploaded by</th>
                                <th class="d-none d-sm-table-cell badge badge-success"
                                    style="width: 10%; text-align:center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td class="font-w600 font-size-sm">
                                        {{ $item->id}}
                                    </td>
                                    <td class="font-w600 font-size-sm">
                                        {{ $item->created_at }}
                                    </td>
                                    <td class="bangla-font font-w600 font-size-sm" style="font-family: AdorshoLipi">
                                        {{ $item->news_title }}
                                        @if ($item->status == 0)
                                            <span class="badge badge-danger"> File deleted </span>
                                        @endif
                                    </td>
                                    <td class="font-w600 font-size-sm">
                                        {{ $item->name }}
                                    </td>
                                    <td class="d-none d-sm-table-cell font-w600 font-size-sm text-center">
                                        @if ($item->status == 0)
                                            <span class="badge badge-danger"> File deleted by</span>
                                            {{ $item->delete_by }}
                                        @else
                                            <button class="btn btn-danger"
                                                onclick="deleteConfirmation({{ $item->id }})"><i class="fa fa-trash"
                                                    aria-hidden="true"></i></button>
                                            <br>
                                            
                                            <br>
                                            <span class="badge badge-success">{{ $item->group_name }}</span>
                                        @endif
                                        {{-- <a href="/storage/files/{{$result->file_name}}" target="_blank">{{$result->file_name}}</a> --}}
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
            <!-- END Dynamic Table Full -->
        </div>
    </div>
    <!-- END Basic -->
    <!-- END Page Content -->



    <!-- Page Content -->
    <div class="content">
        <!-- CKEditor 5 Classic (js-ckeditor5-classic in Helpers.ckeditor5()) -->
        <!-- For more info and examples you can check out http://ckeditor.com -->
        <div class="block block-rounded">

            <div class="block-content">

            </div>
        </div>
        <!-- END CKEditor 5 Classic-->
    </div>
    <!-- END Page Content -->

    <!-- END Main Container -->


@endsection

@section('page-specific-javascript')

    <!-- Page JS Plugins -->
    <script src="assets/js/ckeditor5-classic/build/ckeditor.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
     
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    
    <!-- Page JS Helpers (Summer Note plugins) -->
    <script>
        $(document).ready(function() {
            $('.summernote').summernote();
        });
    </script>

 <script>
        $(document).ready( function () {
            $('#dataTable').DataTable({
                order: [[1, 'desc']],
            });
        } );
    </script>
     <script>
            function deleteConfirmation(id) {
                    // alert(id);
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "Be Careful! You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                            $.ajax({
                                type: 'POST',
                                url: "{{ url('/delete-news') }}/" + id,
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                    _token: "{{ csrf_token() }}",
                                    data: id,
                                },
                                dataType: 'JSON',
                                success: function (results) {
                                    // console.log(results);
                                    if (results.success === true) {
                                        Swal.fire(
                                            'Deleted!',
                                            'Your file has been deleted.',
                                            'success'
                                        ).then(function () {
                                            window.location.reload();
                                        });
                                    } else {
                                        swal("Error!", results.message, "error");
                                    }
                                }
                            });
                            // Swal.fire(
                            // 'Deleted!',
                            // 'Your file has been deleted.',
                            // 'success'
                            // )
                        }
                    }, function (dismiss) {
                        return false;
                    })
                }
        </script>
    <script>
        $(document).ready(function() {
            console.log("ready!");

            var $loader = $('#loader');

            $loader.hide();

            $('#uploadBtn').click(function() {

                // var title = document.forms["Form"]["title"].value;
                var file = document.forms["Form"]["input_file_pdf"].value;
                // console.log(title);

                if (file == null || file == "") {
                    //alert("Please Fill All Required Field");
                    //return false;
                } else {
                    $loader.removeClass('d-none');
                    $loader.show();
                }
            });
        });
    </script>
@endsection
