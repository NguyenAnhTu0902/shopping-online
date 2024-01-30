@section('title', 'Người dùng'))
@extends('layouts.admin.layout.master')
@section('content-header')
    @include('layouts.admin.elements.user.search')
@endsection
@include('layouts.admin.elements.user.add')
@include('layouts.admin.elements.user.edit')
@section('content')
    <div id="content-list">
    </div>
@endsection
@push('scripts')
    <script>
        const API_LIST = "{{route('admin.list.user')}}";
        const API_CREATE = "{{route('admin.add.user')}}";
        const API_DETAIL = "{{route('admin.detail.user', ":id")}}";
        const API_UPDATE = "{{route('admin.update.user')}}";
        const API_DELETE= "{{route('admin.delete.user')}}";
    </script>
    <script src="{{ asset('js/admin/user.js') }}"></script>
@endpush

