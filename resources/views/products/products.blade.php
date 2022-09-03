@extends('layouts.master')
@section('title')
	المنتجات
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الأعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ المنتجات</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
                <x-flash-message/>
@endsection
@section('content')
				<!-- row -->
				<div class="row">

					<div class="col-xl-12">

            <div class="card">
                <div class="card mg-b-20">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <div class="col-sm-6 col-md-4 col-xl-3">
                                <a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale"
                                    data-toggle="modal" data-target="#exampleModal" href="#modaldemo8">إضافة منتج</a>
                            </div>
                        </div>
                    </div>
	<div class="card-body">
		<div class="table-responsive">
			<table class="table text-md-nowrap" style="text-align:center">
				<thead>
					<tr>
						<th style="text-align:center">م</th>
						<th style="text-align:center">أسم المنتج</th>
						<th style="text-align:center">أسم القسم</th>
						<th style="text-align:center">ملاحظات</th>
						<th style="text-align:center">العمليات</th>
					</tr>
				</thead>
				<tbody>
                    @php
                        $counter=1;
                    @endphp
                    @foreach ($products as $product)
					<tr>
                        <td>{{ $counter++ }}</td>
						<td>{{ $product->product_name }}</td>
						<td>{{ $product->section->section_name }}</td>
						<td>{{ $product->product_description }}</td>
						<td>
                            <div class="modal-footer">
                                <a href="{{ route('products.edit',$product->id) }}">
                            <button type="button" title="تعديل القسم" class="btn.btn-lg btn-outline-primary">
                                    تعديل
                                </button>
                            </a>
                            <form action="{{ route('products.delete', $product->id) }}" method="POST">
                                @csrf
                                <button type="submit" title="حذف القسم" class="btn.btn-lg btn-outline-danger">
                                        حذف
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
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
			<!-- main-content closed -->
	</div>
	    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">اضافة منتج</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="{{ route('products.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">اسم المنتج</label>
                                <input type="text" class="form-control" id="Product_name" name="product_name" required>

                            </div>

                            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">القسم</label>
                            <select name="section_id" id="section_id" class="form-control" required>
                                <option value="" selected disabled> --حدد القسم--</option>
                                @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{ $section->section_name }}</option>
                                @endforeach
                            </select>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">ملاحظات</label>
                                <textarea class="form-control" id="description" name="product_description" rows="3"></textarea>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">تاكيد</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
