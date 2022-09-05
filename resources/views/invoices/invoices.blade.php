@extends('layouts.master')
@section('title')
	قائمة الفواتير
@endsection
@section('page-header')
@endsection
@section('content')
				<div class="row">
					<div class="col-xl-12">
						<div class="card">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<a href="{{ route('invoices.create') }}">
                            <button type="button" class="btn.btn-lg btn-outline-primary">
                                    إضافة فاتورة
                                </button>
                            </a>
							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table id="example1" class="table key-buttons text-md-nowrap">
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
												<td style="text-align: center">{{ $invoice->invoice_number }}</td>
												<td style="text-align: center">{{ $invoice->invoice_date }}</td>
												<td style="text-align: center">{{ $invoice->due_date }}</td>
												<td style="text-align: center">{{ $invoice->product->product_name }}</td>
												<td style="text-align: center">{{ $invoice->section->section_name }}</td>
												<td style="text-align: center">{{ $invoice->discount }}</td>
												<td style="text-align: center">{{ $invoice->rate_vat }}</td>
												<td style="text-align: center">{{ $invoice->value_vat }}</td>
												<td style="text-align: center">{{ $invoice->total }}</td>
												<td style="text-align: center">{{ $invoice->status->status_value }}</td>
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