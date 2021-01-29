@php
$title = '商品追加';
@endphp
@extends('layouts.admin')
@section('content')
<section>
<form action="{{ route('admin.item.add') }}" method="post">
@csrf

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label">Name</label>
    <div class="col-md-6">
    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required>
</div>
</div>

<div class="form-group row">
<label for="code" class="col-md-4 col-form-label">Code</label>
<div class="col-md-6">
<input id="code" type="text" class="form-control" name="code" value="{{ old('code') }}" required>
</div>
</div>

<div class="form-group row">
<label for="price" class="col-md-4 col-form-label">Price</label>
<div class="col-md-6">
<input id="price" type="text" class="form-control" name="price" value="{{ old('price') }}" required>
</div>  
</div>

<div class="text-center">
<button class="btn btn-primary">Add</button>
<a href="{{ route('admin.item.index') }}" class="btn btn-outline-primary">{{ __('Back') }}
</div>
</form>
</section>
@endsection