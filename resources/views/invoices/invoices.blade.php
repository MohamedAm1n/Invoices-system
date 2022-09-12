@extends('layouts.master')
@section('title')
	قائمة الفواتير
@endsection
@section('cs')
	<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
	<link href="{{asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Tables</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Data Tables</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
											<a href="{{ route('invoices.create') }}">
                            <button type="button" class="btn.btn-lg btn-outline-primary">
                                    إضافة فاتورة
                                </button>
                            </a>
								</div>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons" data-page-length='10'>
										<thead>
											<tr>
												<th class="border-bottom-0">م</th>
												<th class="border-bottom-0">رقم الفاتورة</th>
												<th class="border-bottom-0">تاريخ الفاتورة</th>
												<th class="border-bottom-0">تاريخ الاستحقاق</th>
												<th class="border-bottom-0">المنتج</th>
												<th class="border-bottom-0">القسم</th>
												<th class="border-bottom-0">الخصم</th>
												<th class="border-bottom-0">نسبة الضريبة</th>
												<th class="border-bottom-0">قيمة الضريبة</th>
												<th class="border-bottom-0">الأجمالي</th>
												<th class="border-bottom-0">الحالة</th>
												<th class="border-bottom-0">ملاحظات</th>
												<th class="border-bottom-0">مرفقات</th>
											</tr>
										</thead>
										<tbody>
											@php
												$counter=1;
											@endphp
											@foreach ($invoices as $invoice)
											<tr>
												<td style="text-align: center">{{ $counter++ }}</td>
												<td style="text-align: center"><a href="{{ route('invoice.detail',$invoice->id) }}">{{ $invoice->invoice_number }}</a></td>
												<td style="text-align: center">{{ $invoice->invoice_date }}</td>
												<td style="text-align: center">{{ $invoice->due_date }}</td>
												<td style="text-align: center">{{ $invoice->product->product_name }}</td>
												<td style="text-align: center">{{ $invoice->section->section_name }}</td>
												<td style="text-align: center">{{ $invoice->discount }}</td>
												<td style="text-align: center">{{ $invoice->rate_vat }}</td>
												<td style="text-align: center">{{ $invoice->value_vat }}</td>
												<td style="text-align: center">{{ $invoice->total }}</td>
												<td  style="text-align: center">
													@if ($invoice->status->id == 1)
														<span class="text-danger"> {{ $invoice->status->status_value }}</span>
													@elseif($invoice->status->id == 2)
														<span class="text-success"> {{ $invoice->status->status_value }}</span>
													@elseif($invoice->status->id == 3)
														<span class="text-warning"> {{ $invoice->status->status_value }}</span>
													@else
														<span class="text-warning"> {{ $invoice->status->status_value }}</span>
													@endif
												</td>
												<td style="text-align: center">{{ $invoice->notes }}</td>
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
				<!-- row closed -->
		<!-- main-content closed -->
@endsection
