@extends('layouts.master')
@section('title')
    تعديل منتج
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> 
                    <a href="{{ route('products') }}">الأعدادات</a> 
                </h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تعديل منتج</span>
            </div>
        </div>
    </div>
    <x-flash-message/>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
            <div class="modal-body">
                <h3>تعديل المنتج</h3>
                <form action="{{ route('products.update',$product->id) }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="form-group mx-sm-5 mb-2">
                        <label for="product">أسم المنتج </label>
                        <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}"  placeholder="برجاء ادخال اسم المنتج">
                    </div>
                    <div class="form-group mx-sm-5 mb-2">
                    <label class="my-1 mr-2" for="inlineFormCustomSelectPref">القسم</label>
                            <select name="section_id" id="section_id" class="form-control" required>
                                <option value="{{ $product->section->id }}" selected disabled> برجاء تحديد القسم</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                @endforeach
                            </select>
                    </div>
                    <div class="form-group mx-sm-5 mb-2">
                        <label for="message-text" class="col-form-label">ملاحظات:</label>
                                <textarea class="form-control"  name="product_description" >{{ $product->product_description }}</textarea>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">تاكيد</button>
                        <a  href="{{ route('products') }}">
                        <button type="button" class="btn btn-info" data-dismiss="modal"> 
                                رجوع 
                            </button>
                        </a>
                    </div>
                </form>
            </div>
    </div>
    </div>
@endsection
