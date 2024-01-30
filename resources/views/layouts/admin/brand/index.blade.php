@section('title', 'Thương hiệu'))
@extends('layouts.admin.layout.master')
@section('content-header')
    @include('layouts.admin.elements.brand.search')
@endsection
@include('layouts.admin.elements.brand.add')
@include('layouts.admin.elements.brand.edit')
@section('content')
    <div id="content-list">
    </div>
@endsection
@push('scripts')
    <script>
        const API_LIST = "{{route('admin.list.brand')}}";
        const API_CREATE = "{{route('admin.add.brand')}}";
        const API_DETAIL = "{{route('admin.detail.brand', ":id")}}";
        const API_UPDATE = "{{route('admin.update.brand')}}";
        const API_DELETE= "{{route('admin.delete.brand')}}";
    </script>
    <script src="{{ asset('js/admin/brand.js') }}"></script>
@endpush

