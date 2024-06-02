@extends('layouts.backend')

@section('content')

<iframe
  src="{{ url('fm/') }}"
  frameborder="0"
  width="100%"
  id="filemanager">
</iframe>
@stop

@section('scripts')
<script>
  function setHeight(){
    $('#filemanager').css('height', $(window).height()-95);
  };
  setHeight();
  $(window).resize(function(){
    setHeight();
  });
</script>
@stop
