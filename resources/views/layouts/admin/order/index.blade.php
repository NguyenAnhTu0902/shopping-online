@section('title', 'Đơn hàng'))
@extends('layouts.admin.layout.master')
@section('content-header')
    @include('layouts.admin.elements.order.search')
@endsection
@include('layouts.admin.elements.order.detail')
@section('content')
    <div id="content-list">
    </div>
@endsection
@push('scripts')
    <script>
        const API_LIST = "{{route('admin.list.order')}}";
        const API_DETAIL = "{{route('admin.detail.order', ":id")}}";
        const API_UPDATE = "{{route('admin.update.order')}}";
        const API_DELETE= "{{route('admin.delete.order')}}";
    </script>
    <script src="{{ asset('js/admin/order.js') }}"></script>
@endpush

