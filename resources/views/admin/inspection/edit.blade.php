@extends('layouts.admin')

@section('title','Edit Inspection')

@push('css')


@endpush


@section('content')

    @if($inspection)
     @includeIf('admin.inspection.edit.'.$task->category_id)
     @includeWhen(!View::exists('admin.inspection.edit.'.$task->category_id),'admin.inspection.edit.default')
    @else
        <div class="text-warning text-center">Nothing available</div>
    @endif

@endsection


@push('script')
    @include('public.gallery')
@endpush
