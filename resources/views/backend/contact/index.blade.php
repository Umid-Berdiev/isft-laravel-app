@extends('layouts.backend')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box table-responsive">
            <div class="row m-0">
                <div class="col-sm-8">
                    <h4 class="m-t-0 m-b-30 header-title">Обратный связь</h4>            
                </div>
            </div>
            <table id="datatable" class="table table-bordered table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                    <tr>                        
                        <th>ID</th>
                        <th>Имя</th>
                        <th>Телефон номер</th>                        
                        <th>Статус</th>                        
                        <th style="width:120px;"></th>                   
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
                <form action="" id="form" enctype="multipart/form-data">
                    {!! Form::hidden('id', null) !!}  
                        <div class="form-group">
                            {!! Form::label('fio', 'Имя') !!}
                            {!! Form::text('fio', null, ["class" => "form-control", "disabled"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('phone', 'Телефон номер') !!}
                            {!! Form::text('phone', null, ["class" => "form-control", "disabled"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('email', 'Эл.почта') !!}
                            {!! Form::text('email', null, ["class" => "form-control", "disabled"]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('text', 'Текст') !!}
                            {!! Form::textarea('message', null, ["class" => "form-control", "disabled"]) !!}
                        </div>     
                </form>
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
    var is_waiting = false;
    var crud = new Crud({
        filter: true,
        list: {
            url: "{{ route('backend.contact.data') }}",
            datatable: {            
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'fio', name: 'fio'},
                    {data: 'phone', name: 'phone'},
                    {data: 'status', name:'status'},                                    
                ],
                columnDefs: [
                    {
                        targets: 4,
                        data: null,
                        searchable:false, 
                        render: function (row, type, val, meta) {                        
                            return  crud.makeButton(val, 'btn-primary btn-edit', '<i class="fa fa-eye"></i>', [
                                ['toggle', 'modal'],
                                ['target', '#formModal']
                            ])
                            + crud.makeButton(val, 'btn-danger', '<i class="fa fa-trash"></i>', [
                                ['toggle', 'modal'],
                                ['target', '#removeModal']
                            ]);
                        }                        
                    },
                    {
                        targets:3,
                        data: null,
                        searchable:false,
                        render: function (row, type, val, meta) {
                            if (val.status == 1) {
                                return '<span class="badge badge-purple">проверено</span>';

                            } else {
                                return '<a href="#" data-id="'+val.id+'">'+ '<button class="btn btn-warning btn-rounded w-md waves-effect waves-light status">не проверено</button>' +'</a>'; 
                            }
                        }

                    }, 
                ]
            }
        },

        remove: {
            url: "{{ route('backend.contact.delete') }}",
        }
    });

    (function(){
       $('body').on('click', '.status', function(e){
          e.preventDefault();
          var status = $(this).parent();

           if(!is_waiting){
              $(this).prepend('<i class="fa fa-spinner fa-spin"></i> ');
              $(this).prop('disabled', true);
              is_waiting = true;

            $.ajax({
              method: "POST",
              url: "/syspanel/contact/change",
              data: { id: status.data('id')},

              success:function(data){
                status.html('<span class="badge badge-purple">проверено</span>');  
                is_waiting = false;              
              }
            })
          }  

        });
      })
    ();
</script>
@endsection