@extends('dashboard.layouts.master')
@section('content-header')
    <h1 style="font-family: 'Arial Narrow' , sans-serif;">
        Employee
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-pie-chart"></i> Employee</a></li>
        <li class="active">Employee List</li>
    </ol>
@endsection
@section('content')

    <div class="box">
        <div class="box-header with-border">
            <h5 class="box-title"><b>EMPLOYEE LIST</b></h5>
            <a href="{{route('employee.create')}}" id="add_new" style="float: right" class="btn btn-sm btn-grad">Add New Employee</a>
        </div>
        <div class="box-body">
            <table style="width: 100%" class="table table-responsive table-striped data-table" id="table">
                <thead class=""
                       style="color: white;background-image: radial-gradient( circle farthest-corner at 22.4% 21.7%, rgba(4,189,228,1) 0%, rgba(2,83,185,1) 100.2% );">
                <tr class="" style="text-align:center; ">
                    <th style="width: 10%">SL</th>
                    <th style="width: 40%">Name</th>
                    <th style="width: 20%">Designation</th>
                    <th style="width: 20%">Phone</th>
                    <th style="width: 10%">Action</th>
                </tr>
                </thead>
            </table>
        </div>
    </div>
@endsection
@section('js')

    <script>
        var datatable = $('.data-table').DataTable({
            order: [],
            lengthMenu: [[10, 20, 30, 50, 100, -1], [10, 20, 30, 50, 100, "All"]],
            processing: true,
            responsive: true,
            serverSide: true,
            language: {
                processing: '<i class="ace-icon fa fa-spinner fa-spin bigger-500" style="font-size:60px;"></i>'
            },
            scroller: {
                loadingIndicator: false
            },
            pagingType: "full_numbers",

            ajax: {
                url: "{{route('employee.index')}}",
                type: "get",
            },

            columns: [
                {data: "DT_RowIndex", name: "DT_RowIndex", orderable: false,},
                {data: 'name', name: 'name', orderable: true,},
                {data: 'designation', name: 'designation', orderable: true,},
                {data: 'phone', name: 'phone', orderable: true,},
                {data: 'action', searchable: false, orderable: false}

                //only those have manage_user permission will get access

            ],
        });

    </script>
@endsection