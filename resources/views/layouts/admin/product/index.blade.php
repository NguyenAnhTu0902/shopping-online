@section('title', 'Sản phẩm'))
@extends('layouts.admin.layout.master')
@section('content-header')
    @include('layouts.admin.elements.product.search', [
    'brands' => $brands
])
@endsection
@include('layouts.admin.elements.product.detail')
@include('layouts.admin.elements.product.product-image')
@include('layouts.admin.elements.product.add', [
    'brands' => $brands,
    'categories' => $categories
    ])
@include('layouts.admin.elements.product.edit', [
    'brands' => $brands,
    'categories' => $categories
    ])
@section('content')
    <div id="content-list">
    </div>
@endsection
@push('scripts')
    <script>
        const API_LIST = "{{route('admin.list.product')}}";
        const API_CREATE = "{{route('admin.add.product')}}";
        const API_DETAIL = "{{route('admin.detail.product', ":id")}}";
        const API_UPDATE = "{{route('admin.update.product')}}";
        const API_DELETE= "{{route('admin.delete.product')}}";
        const API_IMAGE= "{{route('admin.show.product', ":id")}}";
        const API_ADD_IMAGE= "{{route('admin.add.image.product')}}";
        const API_DELETE_IMAGE= "{{route('admin.delete.image')}}";
        const API_DETAIL_PRODUCT = "{{route('admin.show.detail.product', ":id")}}";
    </script>
    <script src="{{ asset('js/admin/product.js') }}"></script>
@endpush

