@extends('layouts.admin')

@section('title','Edit Inspection')

@push('css')


@endpush


@section('content')

    @if($inspection)
    @include('admin.inspection.edit.'.$task->category_id)
    @else
        <div class="text-warning text-center">Nothing available</div>
    @endif

@endsection


@push('script')

@endpush
