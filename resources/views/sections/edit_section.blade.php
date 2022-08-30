@extends('layouts.master')
@section('title')
    تعديل قسم
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> <a href="{{ route('sections') }}">الأعدادات</a> </h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    تعديل قسم</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <x-flash-message />






        <div class="modal-body">
            <h3>تعديل القسم</h3>
            <form action="{{ route('section.update',$section->id) }}" method="POST" autocomplete="off">
                @csrf
                <div class="form-group mx-sm-5 mb-2">
                    <label for="section">أسم القسم </label>
                    <input type="text" class="form-control" name="section_name" value="{{ $section->section_name }}" id="section" placeholder="برجاء ادخال اسم القسم">
                </div>
                <div class="form-group mx-sm-5 mb-2">
                    <label for="message-text" class="col-form-label">ملاحظات:</label>
                            <textarea class="form-control"  name="description" >{{ $section->description }}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">تاكيد</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection
