@extends('layouts.backend')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-box table-responsive">
                {!! Form::open(['url' => route('backend.page.postResults'), 'class' => 'js-post-form']) !!}
                    <div class="form-group">
                        {!! Form::label('resultsFile', 'Таблица результатов') !!}
                        {!! Form::file('resultsFile', [
                            'class' => 'form-control',
                            'id' => 'fileUploader',
                            'data-url' => route('backend.page.postResults')
                            ]) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{ asset('backend/js/xlsx.full.min.js') }}"></script>
    <script>
        $.ajaxSetup({
    
            headers: {
    
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    
            }
    
        });

        $(document).ready(function(){
              $("#fileUploader").change(function(evt){
                    var postUrl = $(this).data('url');
                    var selectedFile = evt.target.files[0];
                    var reader = new FileReader();
                    reader.onload = function(event) {
                        var data = event.target.result;
                        var workbook = XLSX.read(data, {
                            type: 'binary'
                        });
                        workbook.SheetNames.forEach(function(sheetName) {
                        
                            var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
                            var json_object = JSON.stringify(XL_row_object);

                            $.ajax({
                                type: "POST",
                                data: {results: json_object},
                                url: postUrl,
                                success: function(res){
                                    swal({
                                        title: '<i class="fa fa-thumbs-up"></i>',
                                        text: res.message,
                                        type: 'success',
                                        confirmButtonColor: '#4fa7f3'
                                    })
                                }
                            });

                        })
                    };

                    reader.onerror = function(event) {
                      console.error("File could not be read! Code " + event.target.error.code);
                    };

                    reader.readAsBinaryString(selectedFile);
              });
        });
    </script>
@endsection