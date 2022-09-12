@extends('layouts.master')
@section('title')
الأقسام
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الأعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    الأقسام</span>
            </div>
        </div>
    </div>
    <x-flash-message/>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card">
                <div class="card mg-b-20">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                                <a class="modal-effect btn  btn-block" data-effect="effect-scale"
                                    data-toggle="modal" href="#modaldemo8">
                                    <button type="button" class="btn btn-primary btn-lg btn-block">
                                        Add Section
                                    </button>
                                </a>
                        </div>
                    </div>
                    <table class="table table-bordered" style="text-align:center">
                        <div class="table-responsive">
                                <thead >
                                    <tr>
                                        <th style="text-align:center">م</th>
                                        <th style="text-align:center">أسم القسم</th>
                                        <th style="text-align:center">الوصف </th>
                                        <th style="text-align:center">منشئ القسم </th>
                                        <th style="text-align:center">تاريخ الانشاء </th>
                                        <th style="text-align:center">العمليات </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $counter = 1;
                                    @endphp
                                    @foreach ($sections as $section)
                                        <tr>
                                            <td>{{ $counter++ }}</td>
                                            <td>{{ $section->section_name }}</td>
                                            <td>{{ $section->description }}</td>
                                            <td>{{ $section->created_by }}</td>
                                            <td>{{ $section->created_at }}</td>
                                            <td>
                                                <div class="modal-footer">
                                                <button type="button" title="تعديل القسم" class="btn.btn-lg btn-outline-primary">
                                                    <a href="{{ route('section.edit',$section->id) }}">
                                                        <i class="las la-edit"></i>
                                                    </a>
                                                </button>
                                                <form action="{{ route('section.delete', $section->id) }}" method="POST">
                                                    @csrf
                                                    <button type="submit" title="حذف القسم" class="btn.btn-lg btn-outline-danger">
                                                            <i class="las la-trash"></i>
                                                        </button>
                                                    </form>
                                                    </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" id="modaldemo8">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">إضافة قسم</h6>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('section.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="section_name">اسم القسم </label>
                            <input type="text" class="form-control" name="section_name" id="section_name"
                                placeholder="إضافة اسم القسم">
                        </div>
                        <div class="form-group">
                            <label for="description">ملاحظات</label>
                            <input type="text" class="form-control" name="description"
                                id="description"placeholder="الملاحظات">
                        </div>
                        <div class="modal-footer">
                            <button class="btn ripple btn-success" type="submit">تأكيد الاضافة</button>
                            <button class="btn ripple btn-info" data-dismiss="modal" type="button"><a href="{{ route('sections') }}">رجوع</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>
@endsection
