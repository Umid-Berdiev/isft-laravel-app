@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <div class="row m-0">
                <div class="col-sm-6">
                    <h4 class="m-t-0 m-b-30 header-title">Страницы</h4>            
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('backend.page.getform') }}" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Добавить</a>
                </div>
            </div>
            <table id="datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th>ID</th>
                        <th>Заголовок</th>
                        <th>Алиас</th>                        
                        <th style="width:120px;"></th>                   
                    </tr>
                </thead>
                <tbody>                   
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
@include('partials.ajax-delete')
@endsection
@section('styles')
<link href="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('backend/plugins/datatables/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css"/>
@endsection
@section('scripts')
<script src="{{ asset('backend/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('backend/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('backend/js/crud.js') }}"></script>
<script>  
    var is_waiting = false;
    var form = "{{ route('backend.page.getform') }}";
    var crud = new Crud({
        filter: true,
        list: {
            url: "{{ route('backend.page.data') }}",
            datatable: {            
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'title_ru', name: 'title_ru'},
                    {data: 'alias', name: 'alias'}                    
                ],
                columnDefs: [
                    {
                        targets: 3,
                        data: null,
                        searchable:false, 
                        render: function (row, type, val, meta) {                        
                            return  '<a href="'+ form + '/' + val.id +'" class="btn btn-primary"><i class="fa fa-pencil"></i></a> '
                                 + crud.makeButton(val, 'btn-danger', '<i class="fa fa-trash"></i>', [
                                    ['toggle', 'modal'],
                                    ['target', '#removeModal']
                                ]);
                        }                        
                    },
                ]
            }
        },

        remove: {
            url: "{{ route('backend.page.delete') }}",
        }
    });
</script>
@endsection