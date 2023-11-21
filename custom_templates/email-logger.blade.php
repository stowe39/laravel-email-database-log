@extends('admin.layout.master-layout')

@section('styles')
<style>
.font-14 {
  font-size: 14px!important;
}
.font-18 {
  font-size: 18px!important;
}
.flex-1 {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
</style>
@endsection

@section('content')

    @if(Request::route()->getName() == 'email-log')
        @include('admin.templates.email_logger.email-logger-list')
    @elseif(Request::route()->getName() == 'email-log.show')
        @include('admin.templates.email_logger.email-logger-show')
    @endif


@endsection

@section('scripts')
    <script type="text/javascript">
        $('#email_list_table').dataTable({
          "order": [[ 0, 'desc' ]]
        });
    </script>
@endsection
