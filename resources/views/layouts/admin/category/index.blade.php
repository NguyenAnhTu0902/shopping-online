@section('title', 'Loại thương hiệu'))
@extends('layouts.admin.layout.master')
@section('content-header')
    @include('layouts.admin.elements.category.search')
@endsection
@include('layouts.admin.elements.category.add')
@include('layouts.admin.elements.category.edit')
@section('content')
    <div id="content-list">
    </div>
@endsection
@push('scripts')
    <script>
        const API_LIST = "{{route('admin.list.category')}}";
        const API_CREATE = "{{route('admin.add.category')}}";
        const API_DETAIL = "{{route('admin.detail.category', ":id")}}";
        const API_UPDATE = "{{route('admin.update.category')}}";
        const API_DELETE= "{{route('admin.delete.category')}}";
    </script>
    <script src="{{ asset('js/admin/category.js') }}"></script>
@endpush

