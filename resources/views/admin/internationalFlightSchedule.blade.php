@extends('admin.main')
@section('content')
    <!-- Custom Controls -->
    <div class="block block-rounded">
        <div class="block-header">
            <h2>INTERNATIONAL Flight Schedule</h2>
        </div>
        <div class="block-content block-content-full">
           
                {{-- @if(isset($errors) && $errors>any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            {{$error}}
                        @endforeach
                    </div>
                   
                @endif --}}

                @if (\Session::has('success'))
                    <div class="alert alert-success text-center">
                        
                        {!! \Session::get('success') !!}
                        
                    </div>
                @endif

                @if (session()->has('failures'))
                
                    {{session('success')}}
                    
                @endif

                <br><br>

                <div class="row">
                    <div class="col-lg-4">
                        <p class="font-size-sm text-muted">
                           
                        </p>
                    </div>
                    <div class="col-lg-8 col-xl-5">

                        <div class="form-group">
                            <h4>INTERNATIONAL Flight Schedule Excel file</h4>
                            <div class="custom-file">
                                <form action="{{ route('submitFileInternational') }}" method="POST" enctype="multipart/form-data" name="Form">
                                    @csrf
                    
                                <!-- Populating custom file input label with the selected filename (data-toggle="custom-file-input" is initialized in Helpers.coreBootstrapCustomFileInput()) -->
                                <!-- When multiple files are selected, we use the word 'Files'. You can easily change it to your own language by adding the following to the input, eg for DE: data-lang-files="Dateien" -->
                                <input type="file"  
                                    id="input_file_international" name="input_file_international">
                                <br>
                                <br>
                                <button style="float: center" type="submit" class="btn btn-primary mr-1 mb-3"
                                    id="uploadBtn">
                                    <i class="fa fa-upload mr-1"></i> Upload
                                </button>
                                <span class="input-group-addon d-none" id="loader">
                                    <img src="{{ asset('assets/images/menu/ajaxloader.gif') }}" height="30" style="margin-bottom: 10px" />
                                </span>
                            </form>
                            </div>
                        </div>

                         
                    </div>
                    <!-- Page Content -->
                    <div class="content">
                        <!-- Dynamic Table Full -->
                        <div class="block block-rounded">
                            <div class="block-header">
                                <h3 class="block-title">Uploaded Files</h3>
                            </div>
                            <div class="block-content block-content-full">
                                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
                                
                                
                                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                                    <thead>
                                        <tr>
                                            {{-- <th class="text-center" style="width: 80px;">ID</th> --}}
                                            {{-- <th class="d-none d-sm-table-cell badge badge-success" style="width: 30%; text-align:center">Title</th> --}}
                                            <th class="d-none d-sm-table-cell badge badge-success" style="width: 30%; text-align:center">File Name</th>
                                            <th class="d-none d-sm-table-cell badge badge-success" style="width: 30%; text-align:center">Uploaded by</th> 
                                            <th class="d-none d-sm-table-cell badge badge-success" style="width: 15%; text-align:center">Uploaded At</th>
                                            <th class="d-none d-sm-table-cell badge badge-success" style="width: 15%; text-align:center">Download</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($internationalFiles as $file)
                                           
                                            <tr>
                                                <td class="font-w600 font-size-sm">
                                                    {{$file->file_name}}
                                                    @if ($file->status == 0)
                                                        <span class="badge badge-danger" > File deleted </span>
                                                    @endif
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    {{$file->name}}
                                                    @if ($file->status == 0)
                                                        <span class="badge badge-danger" > File deleted </span>
                                                    @endif
                                                </td>
                                                <td class="font-w600 font-size-sm">
                                                    {{$file->created_at}}
                                                    @if ($file->status == 0)
                                                        <span class="badge badge-danger" > File deleted </span>
                                                    @endif
                                                </td>
                                                <td class="d-none d-sm-table-cell font-w600 font-size-sm" >
                                                    @if ($file->status == 0)
                                                        {{ $file->file_name }}
                                                        <span class="badge badge-danger" > File deleted </span>
                                                    @else
                                                    <a href="{{route('getDownload',$file->file_name)}}">[Download]</a>
                                                    <br>
                                                            {{-- <a href="{{route('getDownload',$file->file_name)}}">[Download]</a> --}}
                                                            <br>
                                                        <span class="badge badge-success">{{ $file->group_name }}</span>    
                                                    @endif
                                                    {{-- <a href="/storage/files/{{$result->file_name}}" target="_blank">{{$result->file_name}}</a> --}}
                                                </td>
                                                
                                            </tr>
                                        @endforeach
                                        
                                        {{-- <tr>
                                            <td class="text-center font-size-sm">1</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Brian Cruz</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client1<em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-success">VIP</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">6 days ago</em>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center font-size-sm">2</td>
                                            <td class="font-w600 font-size-sm">
                                                <a href="be_pages_generic_blank.html">Judy Ford</a>
                                            </td>
                                            <td class="d-none d-sm-table-cell font-size-sm">
                                                client2<em class="text-muted">@example.com</em>
                                            </td>
                                            <td class="d-none d-sm-table-cell">
                                                <span class="badge badge-info">Business</span>
                                            </td>
                                            <td>
                                                <em class="text-muted font-size-sm">10 days ago</em>
                                            </td>
                                        </tr> --}}

                                    </tbody>
                                </table>
                                
                            </div>
                        </div>
                        <!-- END Dynamic Table Full -->
                    </div>
                </div>
            
        </div>
    </div>
    <!-- END Custom Controls -->
@endsection


@section('page-specific-javascript')
    <script>
        $( document ).ready(function() {
            console.log( "ready!" );
            var $loader = $('#loader');
            $loader.hide();

            

            $('#uploadBtn').click(function(){

                // var title = document.forms["Form"]["title"].value;
                var file = document.forms["Form"]["input_file_international"].value;

                if (file == null || file == "") {
                    //alert("Please Fill All Required Field");
                    //return false;
                }else{
                    $loader.removeClass('d-none');
                    $loader.show();
                }
                
                
             });
        });
    </script>
@endsection