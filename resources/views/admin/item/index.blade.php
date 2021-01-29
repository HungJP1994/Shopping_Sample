@php
$title = '商品一覧';
@endphp
@extends('layouts.admin')
@section('content')
<div>
<a href="{{ url('admin/item/create') }}" class="btn btn-outline-primary">新規</a>
</div>
<table class="table">
<tr>
    <th></th>
    <th>{{ __('Name') }}</th>
    <th>{{ __('Code') }}</th>
    <th>{{ __('Price') }}</th>
</tr>
    @if ($items)
        @foreach ($items as $item)
            <tr>
            <td><a href="{{ route('admin.item.edit', ['id' => $item->id ]) }}" class="btn btn-sm btn-outli
            __('Edit') }}</a></td>
            <td>{{ $item->name }}</td>
            <div>
                <a href="{{ route('admin.item.edit', ['id' => $item->id ]) }}" class="btn btn-outline-primary">編集</a>
            </div>
            <td>{{ $item->code }}</td>
            <td>{{ $item->price }}</td>
            </tr>
        @endforeach
    @endif
</table>
@endsection