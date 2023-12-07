@extends('admin.main')

@section('page-specific-css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--<link rel="stylesheet" href="{{ asset('assets/js/datatables/dataTables.bootstrap4.css') }}">-->
    <!--<link rel="stylesheet" href="{{ asset('assets/js/datatables/buttons-bs4/buttons.bootstrap4.min.css') }}">-->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>
@endsection

@section('content')
    <div class="block block-rounded">
        <div class="block-content block-content-full">
            <div class="row">

                <div class="col-lg-10">
                    <!-- Form Inline - Default Style -->
                    <form class="form-inline mb-4" onsubmit="return false">
                        <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="pnr" name="pnr" placeholder="PNR">

                        <input class="btn btn-primary" id = "btnSubmit" type="submit" value="SEARCH"/>

                    </form>
                    <!-- END Form Inline - Default Style -->
                </div>
            </div>
        </div>

        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-responsive table-striped table-vcenter"
                   >
                <thead>
                <tr id="header">
                    <th style="width: 15%;">No</th>
                    <th style="width: 20%;">PNR</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Full Name</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Request Time</th>
                    <th class="d-none d-sm-table-cell" style="width: 20%;">Status</th>
                    <th style="width: 10%;">Action</th>
                </tr>
                </thead>
                <tbody id="bodyData">

                </tbody>

            </table>
        </div>
    </div>
    <!-- PNR SEARCH ENDS -->

    <!-- Custom Controls -->
    @if (!Auth::user()->hasAnyRole('ResolvedRefund'))
        <div class="block block-rounded">
            <div class="block-header">
                <h3 class="block-title" style="text-align: center;">New Refund Requests
                </h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->

                <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination"
                       id="new-refund-table">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 7%;">No</th>
                        <th style="width: 22%;">PNR</th>
                        <th class="d-none d-sm-table-cell" style="width: 22%;">Last Name</th>
                        <th class="d-none d-sm-table-cell" style="width: 22%;">Request Time</th>
                        <th class="d-none d-sm-table-cell" style="width: 12%;">Status</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($newrequest as $request)
                        <tr>
                            <td class="text-center font-size-sm">{{ $request->id }}</td>
                            <td class="font-w600 font-size-sm">{{ $request->pnr }} </td>
                            <td class="d-none d-sm-table-cell font-size-sm">
                                {{ $request->full_name }}
                            </td>
                            <td class="font-w600 font-size-sm">
                                {{ \Carbon\Carbon::parse($request->created_at)->format('d-m-Y H:i:s') }}</td>
                            <td class="d-none d-sm-table-cell">
                                @if ($request->status == 0)
                                    <span class="badge badge-info badge-danger">Pending</span>
                                @elseif($request->status == 1)
                                    <span class="badge badge-info badge-success">Request Accepted</span>
                                @else
                                    <span class="badge badge-info badge-secondary">Declined</span>
                                @endif

                            </td>
                            <td class="text-center">
                                @if ($request->status == 0)
                                    <button style="cursor: pointer" data-toggle="modal"
                                            id="details" data-target="#details{{ $request->id }}" type="button"
                                            class="btn btn-sm btn-alt-warning"
                                            data-toggle="tooltip" title="Deails">
                                        <i class="fa fa-fw fa fa-eye"></i>
                                    </button>
                                    <div class="btn-group">


                                        <button type="button" class="btn btn-sm btn-alt-primary"
                                                onclick="event.preventDefault();document.getElementById('approve-refund-{{ $request->id }}').submit()"
                                                data-toggle="tooltip" title="Approve">
                                            <i class="fa fa-fw fa-check-circle"></i>
                                        </button>

                                        <form id="approve-refund-{{ $request->id }}" class="d-none"
                                              action="{{ route('refund-approve', $request->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                        </form>

                                        {{-- <button  type="button" type="button" class="btn btn-sm btn-alt-danger" onclick="event.preventDefault();document.getElementById('decline-refund-{{$request->id}}').submit()"   data-toggle="tooltip" title="Decline">
                                        <i class="fa fa-fw fa-times"></i>
                                    </button> --}}
                                        <button type="button" type="button" class="btn btn-sm btn-alt-danger"
                                                onclick="deleteConfirmation({{ $request->id }})" data-toggle="tooltip"
                                                title="Decline">
                                            <i class="fa fa-fw fa-times"></i>
                                        </button>


                                        <form id="decline-refund-{{ $request->id }}" class="d-none"
                                              action="{{ route('refund-decline', $request->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                        <div class="modal-popup">
                            <!-- Modal 2 -->
                            <div class="modal fade bd-example-modal-lg" id="details{{ $request->id }}" tabindex="-1"
                                 role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-body">

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="label-text">Mobile</label><span
                                                        style="color: red">*</span>

                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <i class="las la-file form-icon"></i>
                                                        <input class="form-control" type="text" readonly required
                                                               value="{{ $request->contact_no }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="label-text">Email</label><span
                                                        style="color: red">*</span>

                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <i class="las la-file form-icon"></i>
                                                        <input class="form-control" type="text" readonly required
                                                               value="{{ $request->email }}">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="label-text">Account Holder's Name</label><span
                                                        style="color: red">*</span>

                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <i class="las la-file form-icon"></i>
                                                        <input class="form-control" type="text" readonly required
                                                               value="{{ $request->full_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="label-text">Last 4 digit of acc no.</label><span
                                                        style="color: red">*</span>

                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <i class="las la-file form-icon"></i>
                                                        <input class="form-control" type="text" readonly required
                                                               value="{{ $request->last_digits }}">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label class="label-text">Refund Reason</label><span
                                                        style="color: red">*</span>

                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <i class="las la-file form-icon"></i>
                                                        <textarea rows="4" class="form-control" type="text" readonly
                                                                  required value="">{{ $request->reason }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="label-text">Comment</label><span
                                                        style="color: red">*</span>

                                                    <div class="form-group">
                                                        {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                        <i class="las la-file form-icon"></i>
                                                        <textarea rows="4" class="form-control" type="text" readonly
                                                                  required value="">{{ $request->comment }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                @if (!is_null($request->p_name_1))
                                                    <div class="col-md-5">
                                                        <label class="label-text">1. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_1 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_1 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_2))
                                                    <div class="col-md-5">
                                                        <label class="label-text">2. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_2 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_2 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_3))
                                                    <div class="col-md-5">
                                                        <label class="label-text">3. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_3 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_3 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_4))
                                                    <div class="col-md-5">
                                                        <label class="label-text">4. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_4 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_4 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_5))
                                                    <div class="col-md-5">
                                                        <label class="label-text">5. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_5 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_5 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_6))
                                                    <div class="col-md-5">
                                                        <label class="label-text">6. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_6 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_6 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_7))
                                                    <div class="col-md-5">
                                                        <label class="label-text">7. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_7 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_7 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_8))
                                                    <div class="col-md-5">
                                                        <label class="label-text">8. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_8 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_8 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                                @if (!is_null($request->p_name_9))
                                                    <div class="col-md-5">
                                                        <label class="label-text">9. Person Name</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_name_9 }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-5">
                                                        <label class="label-text">Ticket No.</label><span
                                                            style="color: red">*</span>

                                                        <div class="form-group">
                                                            {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                            <i class="las la-file form-icon"></i>
                                                            <input class="form-control" type="text" readonly required
                                                                   value="{{ $request->p_ticket_9 }}">
                                                        </div>
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary"
                                                    data-dismiss="modal">Close
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end modal-popup -->
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    @endif

    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title" style="text-align: center;">Resolved Refund Requests
                {{-- <small>Full pagination</small> --}}
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->

            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination" id="resolved-refund-table">
                <thead>
                <tr>
                    <th class="text-center" style="width: 7%;">No</th>
                    <th style="width: 15%;">PNR</th>
                    <th class="d-none d-sm-table-cell" style="width: 10%;">Requested Person</th>
                    <th class="d-none d-sm-table-cell" style="width: 17%;">Passenger Request Time</th>
                    <th class="d-none d-sm-table-cell" style="width: 17%;">Request Review Time</th>
                    <th style="width: 15%;">Decline Reason</th>
                    @if (Auth::user()->hasAnyRole('ResolvedRefund'))
                        <th style="width: 18%;">Action</th>
                    @endif

                </tr>
                </thead>
                <tbody>
                @foreach ($resolvedrequest as $request)
                    <tr>
                        <td class="text-center font-size-sm">{{ $request->id }}</td>
                        <td class="font-w600 font-size-sm">
                            {{ $request->pnr }}
                                                        @if ($request->status == 0)
                                <span class="badge badge-info badge-danger">Pending</span>
                            @elseif($request->status == 1)
                                <span class="badge badge-info badge-success">Request Accepted</span>
                            @else
                                <span class="badge badge-info badge-secondary">Declined</span>
                                <span class="badge badge-info badge-primary">{{ $request->updated_by }}</span>
                            @endif
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{ $request->full_name }}
                        </td>
                        <td class="font-w600 font-size-sm">
                            {{ \Carbon\Carbon::parse($request->created_at) }}</td>
                        <td class=" font-size-sm">
                            {{ \Carbon\Carbon::parse($request->updated_at) }}

                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{ $request->decline_reason }}
                        </td>
                        @if (Auth::user()->hasAnyRole('ResolvedRefund'))
                            <td class="text-center">

                            <button style="cursor: pointer" data-toggle="modal"
                                    id="details" data-target="#refund_details{{ $request->id }}" type="button"
                                    class="btn btn-sm btn-alt-warning"
                                    data-toggle="tooltip" title="Deails">
                                <i class="fa fa-fw fa fa-eye"></i>
                            </button>
                            <div class="btn-group">


                                <button type="button" class="btn btn-sm btn-alt-primary"
                                        onclick="refundDoneRevenue({{ $request->id }})" document.getElementById('approve-refund-{{ $request->id }}').submit()"
                                        data-toggle="tooltip" title="Refund Done">
                                    <i class="fa fa-fw fa-check-circle"></i>
                                </button>

                                <form id="approve-refund-{{ $request->id }}" class="d-none"
                                      action="{{ route('refund-done', $request->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                </form>

                                {{-- <button  type="button" type="button" class="btn btn-sm btn-alt-danger" onclick="event.preventDefault();document.getElementById('decline-refund-{{$request->id}}').submit()"   data-toggle="tooltip" title="Decline">
                                <i class="fa fa-fw fa-times"></i>
                            </button> --}}
                                <button type="button" type="button" class="btn btn-sm btn-alt-danger"
                                        onclick="deleteConfirmationRevenue({{ $request->id }})" data-toggle="tooltip"
                                        title="Decline">
                                    <i class="fa fa-fw fa-times"></i>
                                </button>


                                <form id="decline-refund-{{ $request->id }}" class="d-none"
                                      action="{{ route('refund-decline-revenue', $request->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                </form>
                            </div>

                        </td>
                        @endif

                    </tr>

                    <div class="modal fade bd-example-modal-lg" id="refund_details{{$request->id}}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-text">Mobile</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->contact_no }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-text">Email</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-text">Account Holder's Name</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->full_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-text">Last 4 digit of acc no.</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->last_digits }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-text">Refund Reason</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <textarea rows="4" class="form-control" type="text" readonly required
                                                          value="">{{ $request->reason }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-text">Comment</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <textarea rows="4" class="form-control" type="text" readonly required
                                                          value="">{{ $request->comment }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @if (!is_null($request->p_name_1))
                                            <div class="col-md-5">
                                                <label class="label-text">1. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_1 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_1 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_2))
                                            <div class="col-md-5">
                                                <label class="label-text">2. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_2 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_2 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_3))
                                            <div class="col-md-5">
                                                <label class="label-text">3. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_3 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_3 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_4))
                                            <div class="col-md-5">
                                                <label class="label-text">4. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_4 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_4 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_5))
                                            <div class="col-md-5">
                                                <label class="label-text">5. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_5 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_5 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_6))
                                            <div class="col-md-5">
                                                <label class="label-text">6. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_6 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_6 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_7))
                                            <div class="col-md-5">
                                                <label class="label-text">7. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_7 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_7 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_8))
                                            <div class="col-md-5">
                                                <label class="label-text">8. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_8 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_8 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_9))
                                            <div class="col-md-5">
                                                <label class="label-text">9. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_9 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_9 }}">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach

                </tbody>
            </table>

        </div>
    </div>

    {{--Revenue Refund Done Table--}}
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title" style="text-align: center;">Resolved Refund Payments
                {{-- <small>Full pagination</small> --}}
            </h3>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-full-pagination class, functionality is initialized in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->

            <table class="table table-bordered table-striped table-vcenter js-dataTable-full-pagination"
                   id="">
                <thead>
                <tr>
                    <th class="text-center" style="width: 7%;">No</th>
                    <th style="width: 15%;">PNR</th>
                    <th class="d-none d-sm-table-cell" style="width: 10%;">Requested Person</th>
                    <th class="d-none d-sm-table-cell" style="width: 17%;">Passenger Request Time</th>
                    <th class="d-none d-sm-table-cell" style="width: 17%;">Refund Resolve Time</th>
                    <th style="width: 15%;">Additional Remarks</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($resolvedrefund as $request)
                    <tr>
                        <td class="text-center font-size-sm">{{ $request->id }}</td>
                        <td class="font-w600 font-size-sm">
                            {{ $request->pnr }}
                            <button style="cursor: pointer" data-toggle="modal"
                                    id="refund_details_modal" data-target="#refund_details{{ $request->id }}" type="button"
                                    class="btn btn-sm btn-alt-warning"
                                    data-toggle="tooltip" title="Deails">
                                <i class="fa fa-fw fa fa-eye"></i>
                            </button>

                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{ $request->full_name }}
                        </td>
                        <td class="font-w600 font-size-sm">
                            {{ \Carbon\Carbon::parse($request->created_at)->format('d-m-Y H:i:s') }}</td>
                        <td class=" font-size-sm">
                            {{ \Carbon\Carbon::parse($request->updated_at)->format('d-m-Y H:i:s') }}
                            @if($request->status == 3)
                                <span class="badge  badge-success">Refund Done</span>
                            @elseif($request->status == 4)
                                <span class="badge badge-info badge-danger">Refund Decline</span>
                            @endif
                            <span class="badge badge-info badge-primary">{{ $request->updated_by }}</span>
                        </td>
                        <td class="d-none d-sm-table-cell font-size-sm">
                            {{ $request->decline_reason }}
                        </td>


                    </tr>

                    <div class="modal fade bd-example-modal-lg" id="refund_details{{$request->id}}">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-text">Mobile</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->contact_no }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-text">Email</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->email }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-text">Account Holder's Name</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->full_name }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-text">Last 4 digit of acc no.</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <input class="form-control" type="text" readonly required
                                                       value="{{ $request->last_digits }}">
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="label-text">Refund Reason</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <textarea rows="4" class="form-control" type="text" readonly required
                                                          value="">{{ $request->reason }}</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="label-text">Comment</label><span
                                                style="color: red">*</span>

                                            <div class="form-group">
                                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                <i class="las la-file form-icon"></i>
                                                <textarea rows="4" class="form-control" type="text" readonly required
                                                          value="">{{ $request->comment }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        @if (!is_null($request->p_name_1))
                                            <div class="col-md-5">
                                                <label class="label-text">1. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_1 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_1 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_2))
                                            <div class="col-md-5">
                                                <label class="label-text">2. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_2 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_2 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_3))
                                            <div class="col-md-5">
                                                <label class="label-text">3. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_3 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_3 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_4))
                                            <div class="col-md-5">
                                                <label class="label-text">4. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_4 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_4 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_5))
                                            <div class="col-md-5">
                                                <label class="label-text">5. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_5 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_5 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_6))
                                            <div class="col-md-5">
                                                <label class="label-text">6. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_6 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_6 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_7))
                                            <div class="col-md-5">
                                                <label class="label-text">7. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_7 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_7 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_8))
                                            <div class="col-md-5">
                                                <label class="label-text">8. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_8 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_8 }}">
                                                </div>
                                            </div>
                                        @endif
                                        @if (!is_null($request->p_name_9))
                                            <div class="col-md-5">
                                                <label class="label-text">9. Person Name</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_name_9 }}">
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <label class="label-text">Ticket No.</label><span
                                                    style="color: red">*</span>

                                                <div class="form-group">
                                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                                    <i class="las la-file form-icon"></i>
                                                    <input class="form-control" type="text" readonly required
                                                           value="{{ $request->p_ticket_9 }}">
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>


                @endforeach

                </tbody>
            </table>

        </div>
    </div>
    <!-- END Custom Controls -->
    
        <div class="modal fade bd-example-modal-lg" id="modal-large">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="modal-header">
                        <h5 type="button" id="id" class="modal-title btn btn-success"></h5>
                        <button style="float: right" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="label-text">Mobile</label><span
                                style="color: red">*</span>

                            <div class="form-group">
                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                <i class="las la-file form-icon"></i>
                                <input id="mobile" class="form-control" type="text" readonly required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="label-text">Email</label><span
                                style="color: red">*</span>

                            <div class="form-group">
                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                <i class="las la-file form-icon"></i>
                                <input  id="email" class="form-control" type="text" readonly required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="label-text">Account Holder's Name</label><span
                                style="color: red">*</span>

                            <div class="form-group">
                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                <i class="las la-file form-icon"></i>
                                <input id="acc_holder_name" class="form-control" type="text" readonly required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="label-text">Last 4 digit of acc no.</label><span
                                style="color: red">*</span>

                            <div class="form-group">
                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                <i class="las la-file form-icon"></i>
                                <input id="last_digits" class="form-control" type="text" readonly required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="label-text">Refund Reason</label><span
                                style="color: red">*</span>

                            <div class="form-group">
                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                <i class="las la-file form-icon"></i>
                                <textarea id="reason" rows="4" class="form-control" type="text" readonly required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label class="label-text">Comment</label><span
                                style="color: red">*</span>

                            <div class="form-group">
                                {{-- <span class="la la-map-marker form-icon"></span> --}}
                                <i class="las la-file form-icon"></i>
                                <textarea id="comment" rows="4" class="form-control" type="text" readonly required
                                          value=""></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                            <div class="col-md-5">
                                <label class="label-text">1. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_1" class="form-control" type="text" readonly required>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_1" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>


                            <div class="col-md-5">
                                <label class="label-text">2. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_2" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_2" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="label-text">3. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_3" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_3" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="label-text">4. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_4" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_4" class="form-control" type="text" readonly required
                                          >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="label-text">5. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_5" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_5" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="label-text">6. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_6" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_6" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="label-text">7. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_7" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_7" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="label-text">8. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_8" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_8" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>

                            <div class="col-md-5">
                                <label class="label-text">9. Person Name</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_name_9" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>
                            <div class="col-md-5">
                                <label class="label-text">Ticket No.</label><span
                                    style="color: red">*</span>

                                <div class="form-group">
                                    {{-- <span class="la la-map-marker form-icon"></span> --}}
                                    <i class="las la-file form-icon"></i>
                                    <input id="p_ticket_9" class="form-control" type="text" readonly required
                                           >
                                </div>
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>


    @push('custom-script')
        <script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
        <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
        <script>
            $(document).ready( function () {
                $('#resolved-refund-table').DataTable({
                    order: [[0, 'desc']],
                });
            } );
            $(document).ready( function () {
                $('#new-refund-table').DataTable();
            } );
        </script>

        <!--<script src="{{ asset('assets/js/datatables/jquery.dataTables.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/datatables/dataTables.bootstrap4.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/datatables/buttons/dataTables.buttons.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/datatables/buttons/buttons.print.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/datatables/buttons/buttons.html5.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/datatables/buttons/buttons.flash.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/datatables/buttons/buttons.colVis.min.js') }}"></script>-->
        <!--<script src="{{ asset('assets/js/be_tables_datatables.min.js') }}"></script>-->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

        <script>
            $(document).ready(function(){
                $("#btnSubmit").click(function(){
                    var pnr = $("input[name=pnr]").val();

                    $.ajax({
                        headers: {
                            'X-CSRF-Token': "{{csrf_token()}}"
                        },
                        type: "GET",
                        url: "{{route('search-pnr')}}",
                        data: {pnr:pnr},
                        success: function(data) {
                            // console.log(data);
                            var bodyData = '';
                            $("#bodyData").empty();
                            var i = 1;
                            $.each(data,function(index,row){
                                var status = "ERROR";
                                if(row.status==0){
                                    status = "PENDING";
                                }
                                if(row.status==1)
                                {
                                    status = "REQUEST ACCEPTED"
                                }
                                if(row.status==3)
                                {
                                    status = "REFUND DONE"
                                }
                                if(row.status==3)
                                {
                                    status = "REFUND DECLINE"
                                }
                                bodyData+="<tr>"
                                bodyData+="<td>"+ row.id+"</td><td>"+row.pnr+"</td><td>"+row.full_name+"</td><td>"+row.created_at+"</td><td>"
                                    +status+"</td><td>"
                                    +"<button id='details' class='btn btn-success details' value='"+row.id+"' style='margin-left:20px;'>Details</button></td>";
                                bodyData+="</tr>";
                            })
                            $("#bodyData").append(bodyData);
                        }
                    });
                });
            });


            $(document).on("click", ".details", function() {
                var $ele = $(this).parent().parent();
                var id= $(this).val();

                $.ajax({
                    headers: {
                        'X-CSRF-Token': "{{csrf_token()}}"
                    },
                    type: "GET",
                    url: "{{route('search-id')}}",
                    data: {id:id},
                    success: function(data) {
                        console.log(data);
                        document.getElementById("id").innerHTML = "ID: "+data[0].id;
                        $("#mobile").val(data[0].contact_no);
                        $("#email").val(data[0].email);
                        $("#acc_holder_name").val(data[0].full_name);
                        $("#last_digits").val(data[0].last_digits);
                        $("#reason").val(data[0].reason);
                        $("#comment").val(data[0].comment);
                        $("#p_name_1").val(data[0].p_name_1);
                        $("#p_name_2").val(data[0].p_name_2);
                        $("#p_name_3").val(data[0].p_name_3);
                        $("#p_name_4").val(data[0].p_name_4);
                        $("#p_name_5").val(data[0].p_name_5);
                        $("#p_name_6").val(data[0].p_name_6);
                        $("#p_name_7").val(data[0].p_name_7);
                        $("#p_name_8").val(data[0].p_name_8);
                        $("#p_name_9").val(data[0].p_name_9);
                        $("#p_ticket_1").val(data[0].p_ticket_1);
                        $("#p_ticket_2").val(data[0].p_ticket_2);
                        $("#p_ticket_3").val(data[0].p_ticket_3);
                        $("#p_ticket_4").val(data[0].p_ticket_4);
                        $("#p_ticket_5").val(data[0].p_ticket_5);
                        $("#p_ticket_6").val(data[0].p_ticket_6);
                        $("#p_ticket_7").val(data[0].p_ticket_7);
                        $("#p_ticket_8").val(data[0].p_ticket_8);
                        $("#p_ticket_9").val(data[0].p_ticket_9);
                    }
                });

                $("#modal-large").modal('show');
            });

        </script>

        <script>
            function refundDoneRevenue(id) {
                Swal.fire({
                    title: 'Refunded Amount and Medium',
                    input: 'textarea',
                    inputPlaceholder: 'BDT 3200 Refunded on bKash no. 01931131690',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    inputValidator: (value) => {
                        if (!value) {
                            return 'Please write the refunded amount!'
                        }
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#088F8F',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Submit',
                    showLoaderOnConfirm: true,

                    allowOutsideClick: () => !Swal.isLoading()
                }).then(function (e) {
                    console.log(e);
                    if (e.isConfirmed === true) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: 'POST',
                            url: "{{ url('/refund-done') }}/" + id,
                            data: {
                                _token: CSRF_TOKEN,
                                data: e.value,
                            },
                            dataType: 'JSON',
                            success: function (results) {
                                // console.log(results);
                                if (results.success === true) {
                                    Swal.fire(
                                        'Done!',
                                        'The refund has been completed.',
                                        'success'
                                    ).then(function () {
                                        window.location.reload();
                                    });
                                } else {
                                    swal("Error!", results.message, "error");
                                }
                            }
                        });

                    } else {
                        console.log("Dismiss");
                        e.dismiss;
                    }

                }, function (dismiss) {
                    return false;
                })
            }
            function deleteConfirmationRevenue(id) {
                Swal.fire({
                    title: 'Why are you cancelling?',
                    input: 'textarea',
                    inputPlaceholder: 'Cancellation reasons...',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    inputValidator: (value) => {
                        if (!value) {
                            return 'You need to write something!'
                        }
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#088F8F',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Submit',
                    showLoaderOnConfirm: true,

                    allowOutsideClick: () => !Swal.isLoading()
                }).then(function (e) {
                    console.log(e);
                    if (e.isConfirmed === true) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: 'POST',
                            url: "{{ url('/refund-decline-revenue') }}/" + id,
                            data: {
                                _token: CSRF_TOKEN,
                                data: e.value,
                            },
                            dataType: 'JSON',
                            success: function (results) {
                                // console.log(results);
                                if (results.success === true) {
                                    Swal.fire(
                                        'Declined!',
                                        'The refund has been deleted.',
                                        'success'
                                    ).then(function () {
                                        window.location.reload();
                                    });
                                } else {
                                    swal("Error!", results.message, "error");
                                }
                            }
                        });

                    } else {
                        console.log("Dismiss");
                        e.dismiss;
                    }

                }, function (dismiss) {
                    return false;
                })
            }

            function deleteConfirmation(id) {
                Swal.fire({
                    title: 'Why are you cancelling?',
                    input: 'textarea',
                    inputPlaceholder: 'Cancellation reasons...',
                    inputAttributes: {
                        autocapitalize: 'off'
                    },
                    inputValidator: (value) => {
                        if (!value) {
                            return 'You need to write something!'
                        }
                    },
                    showCancelButton: true,
                    confirmButtonColor: '#088F8F',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Submit',
                    showLoaderOnConfirm: true,

                    allowOutsideClick: () => !Swal.isLoading()
                }).then(function (e) {
                    console.log(e);
                    if (e.isConfirmed === true) {
                        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                        $.ajax({
                            type: 'POST',
                            url: "{{ url('/refund-decline') }}/" + id,
                            data: {
                                _token: CSRF_TOKEN,
                                data: e.value,
                            },
                            dataType: 'JSON',
                            success: function (results) {
                                // console.log(results);
                                if (results.success === true) {
                                    Swal.fire(
                                        'Declined!',
                                        'The refund has been deleted.',
                                        'success'
                                    ).then(function () {
                                        window.location.reload();
                                    });
                                } else {
                                    swal("Error!", results.message, "error");
                                }
                            }
                        });

                    } else {
                        console.log("Dismiss");
                        e.dismiss;
                    }

                }, function (dismiss) {
                    return false;
                })
            }
        </script>
    @endpush
@endsection
