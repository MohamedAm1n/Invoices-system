@extends('layouts.master')
@section('title')
    إضافة قسم
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
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <x-flash-message />

        <div class="col-xl-12">

            <div class="card">
                <div class="card mg-b-20">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                                    data-toggle="modal" href="#modaldemo8">إضافة قسم</a>
                            </div>
                            <i class="mdi mdi-dots-horizontal text-gray"></i>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example1" class="table key-buttons text-md-nowrap">
                                <thead>
                                    <tr>
                                        <th class="border-bottom-0">م</th>
                                        <th class="border-bottom-0">أسم القسم</th>
                                        <th class="border-bottom-0">الوصف </th>
                                        <th class="border-bottom-0">منشئ القسم </th>
                                        <th class="border-bottom-0">تاريخ الانشاء </th>
                                        <th class="border-bottom-0">العمليات </th>
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
                                                <a class=" btn btn-m btn-info" 
                                                    href="{{ route('section.edit',$section->id) }}" title="{{ $section->id }}"><i class="las la-pen"></i></a>
                                                <a class="btn btn-m btn-danger" data-effect="effect-scale"
                                                    href="" title="حذف"><i class="las la-trash"></i></a>
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
                            <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">إغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- row closed -->
    </div>

@endsection


