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
@endsection
@section('content')
				<!-- row -->
				<div class="row">
	<div class="card-body">
		<div class="table-responsive">
			<table class="table table-bordered" style="text-align:center">
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
					<tr>
						<td>1</td>
						<td>Tiger Nixon</td>
						<td>System Architect</td>
						<td>Edinburgh</td>
						<td>61</td>
					</tr>
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
@endsection
