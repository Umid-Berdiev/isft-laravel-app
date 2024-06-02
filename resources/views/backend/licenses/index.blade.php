@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <div class="row m-0">
                <div class="col-sm-6">
                    <h4 class="m-t-0 m-b-30 header-title">Лицензии и сертификаты</h4>            
                </div>
                <div class="col-sm-6">
                    <button type="button" class="btn btn-success m-b-sm btn-add pull-right m-l-10" data-toggle="modal" data-target="#formModal">
                        <i class="fa fa-plus"></i> Добавить
                    </button>
                </div>
            </div>            
            <table id="datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th>ID</th>                        
                        <th>Фото</th>
                        <th style="width:80px;"></th>                   
                    </tr>
                </thead>
                <tbody>                   
                </tbody>
            </table>
        </div>
    </div>
</div> <!-- end row -->
<!-- Form Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Добавить</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">                            
                <form action="" id="form">
                    {!! Form::hidden('id', null) !!}
                        <div class="form-group">
                            {!! Form::label('image', 'Главное фото') !!}
                            {!! Form::file('image', ['class' => 'form-control']) !!}
                        </div>

                        @if(!empty($item))
                            <div class="form-group">
                                @if(Upload::hasFile('photogallery', $item->id))
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <img src="{!! Upload::getFile('partner', $item->id) !!}" width="50%">
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endif
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Отменить</button>
                <button type="submit" class="btn btn-success ajax-form">Сохранить</button>
            </div>
        </div>
    </div>
</div>
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
    var crud = new Crud({
        filter: true,
        form: {
            url: "{{ route('backend.licenses.form') }}",
        },
        list: {
            url: "{{ route('backend.licenses.data') }}",
            datatable: {            
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'image', name: 'image'}                    
                ],
                columnDefs: [
                    {   
                        targets: 1,
                        data: null,
                        searchable:false, 
                        render: function (row, type, val, meta) {
                           if (val.image) {
                                return '<img src="'+val.image+'" style="width:50px" class="img-thumbnail">';
                           } else {
                                return '';
                           }
                        }
                    },                          
                    {
                        targets: 2,
                        data: null,
                        searchable:false, 
                        render: function (row, type, val, meta) {                                                                         
                            return crud.makeButton(val, 'btn-primary btn-edit', '<i class="fa fa-pencil"></i>', [
                                    ['toggle', 'modal'],
                                    ['target', '#formModal']
                                ]) +
                                crud.makeButton(val, 'btn-danger', '<i class="fa fa-trash"></i>', [
                                    ['toggle', 'modal'],
                                    ['target', '#removeModal']
                                ]);
                        }                        
                    }
                ]
            }
        },

        remove: {
            url: "{{ route('backend.licenses.delete') }}",
        }
    });
</script>
@endsection