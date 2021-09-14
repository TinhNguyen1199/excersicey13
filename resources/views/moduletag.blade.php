@extends('adminlte::page')

@section('title', 'Module Tag')

@section('content')
    <table id="table_id" class="display">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($module_datas as $module_data)
            <tr>
                <td>{{$module_data->id}}</td>
                <td>{{$module_data->name}}</td>
                <td>
                    <a href="/edit/{{$module_data->id}}">Edit</a>
                    <a href="">Delete</a>
                </td>
            </tr>
            @endforeach  
        </tbody>  
    </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css">
@stop

@section('js')
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable({
                "dom": '<"top"f>rt<"bottom"pli>',
                // "dom": '<"toolbar">frtip' 
                // "dom": '<"top"f>rt<"bottom"pli><"toolbar">frtip'

            });
               $("div.toolbar").html('<button type="button" class="btn btn-warning">Add tag</button>');
        });
    </script>
@stop