@extends('layouts.master')
@section('title')
تفاصيل الفاتورة
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> 
								<a href="{{ route('invoices') }}"> الفواتير</a>
							</h4>
							<span class="text-muted mt-1 tx-13 mr-2 mb-0">/ تفاصيل الفاتورة</span></div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<div class="row">
					<div class="col-sm-12 col-xl-4 col-lg-12">
						<div class="card user-wideget user-wideget-widget widget-user">
							<div class="widget-user-header bg-primary">
								<h3 class="widget-user-username">{{ $invoice->created_by }}</h3>
								<h5 class="widget-user-desc">Invoice Creator </h5>
							</div>
							<div class="widget-user-image">
								<div class="">
								<img src="{{asset('assets/img/faces/17.jpg')}}"  class="avatar avatar-xl brround mCS_img_loaded" alt="User Avatar">
								<span class="avatar-status profile-status bg-green"></span>
								</div>
							</div>
							<div class="user-wideget-footer">
								<div class="row">
									<div class="col-sm-4 border-left">
										<div class="description-block">
											<h5 class="description-header">{{ $count }}</h5>
											<span class="description-text">SALES</span>
										</div>
									</div>
									<div class="col-sm-4 border-left">
										<div class="description-block">
											<h5 class="description-header">13,000</h5>
											<span class="description-text">FOLLOWERS</span>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="description-block">
											<h5 class="description-header">{{$products }}</h5>
											<span class="description-text">PRODUCTS</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">رقم الفاتورة</h4>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold">{{ $invoice->invoice_number }}</h4>
									</div>
									<div class="card-chart bg-primary-transparent brround mr-auto mt-0">
										<i class="typcn typcn-group-outline text-primary tx-24"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3"> حالة الفاتورة</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold"> {{ $invoice->status->status_value }}</h4>
										<p class="mb-2 tx-12 text-muted"></p>
									</div>
									<div class="card-chart bg-pink-transparent brround mr-auto mt-0">
										<i class="typcn typcn-chart-line-outline text-pink tx-24"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">نسبة الضريبة</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold"> {{ $invoice->rate_vat }}</h4>
										<p class="mb-2 tx-12 text-muted"></p>
									</div>
									<div class="card-chart bg-pink-transparent brround mr-auto mt-0">
										<i class="typcn typcn-chart-line-outline text-pink tx-24"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">مبلغ التحصيل</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1   font-weight-bold">${{ $invoice->amount_commission }}</h4>
									</div>
									<div class="card-chart bg-teal-transparent brround mr-auto mt-0">
										<i class="typcn typcn-chart-bar-outline text-teal tx-20"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- row-->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3"> تاريخ إصدار الفاتورة</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold"> {{ $invoice->invoice_date }}</h4>
										<p class="mb-2 tx-12 text-muted"></p>
									</div>
									<div class="card-chart bg-pink-transparent brround mr-auto mt-0">
										<i class="typcn typcn-chart-line-outline text-pink tx-24"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3"> تاريخ الأستحقاق</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold"> {{ $invoice->due_date }}</h4>
										<p class="mb-2 tx-12 text-muted"></p>
									</div>
									<div class="card-chart bg-pink-transparent brround mr-auto mt-0">
										<i class="typcn typcn-chart-line-outline text-pink tx-24"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">مبلغ العمولة</h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1   font-weight-bold">${{ $invoice->amount_collection }}</h4>
									</div>
									<div class="card-chart bg-teal-transparent brround mr-auto mt-0">
										<i class="typcn typcn-chart-bar-outline text-teal tx-20"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
						<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">المرفقات </h4>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold">{{ $attach->file_name }}</h4>
									</div>
									<div class="card-chart bg-primary-transparent brround mr-auto mt-0">
										<i class="typcn typcn-group-outline text-primary tx-24"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12">
						<div class="card">
							<div class="card-body iconfont text-right">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mb-3">القسم </h4>
									<i class="mdi mdi-dots-vertical"></i>
								</div>
								<div class="d-flex mb-0">
									<div class="">
										<h4 class="mb-1 font-weight-bold">{{ $invoice->section->section_name }}</h4>
									</div>
									<div class="card-chart bg-purple-transparent brround mr-auto mt-0">
										<i class="typcn typcn-time  text-purple tx-24"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="card-order">
									<h4 class="mb-2">المنتج</h4>
									<h2 class="text-right "><i class="mdi mdi-account-multiple icon-size float-left text-primary text-primary-shadow"></i>
										<span>{{ $invoice->product->product_name }}</span>
									</h2>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card ">
							<div class="card-body">
								<div class="card-widget">
									<h4 class="mb-2"> قيمة ضريبة القيمة المضافة</h4>
									<h2 class="text-right"><i class="mdi mdi-cube icon-size float-left text-success text-success-shadow"></i>
										${{ $invoice->value_vat }}
									</h2>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="card-widget">
									<h4 class="mb-2"> الاجمالي شامل الضريبة </h4>
									<h2 class="text-right"><i class="icon-size mdi mdi-poll-box   float-left text-warning text-warning-shadow"></i>
										{{ $invoice->total }}
									</h2>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
				</div>
				<!-- /row -->
				<!-- row -->
				<div class="row row-sm">
					<div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
						<div class="card ">
							<div class="card-body">
								<div class="card-widget">
									<h4 class="mb-2">الخصم</h4>
									<h2 class="text-right"><i class="fa fa-cart-plus icon-size float-left text-danger text-danger-shadow"></i><span>${{ $invoice->discount }}</span></h2>
								</div>
							</div>
						</div>
					</div><!-- COL END -->
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">App Views</div>
										<div class="h3 mt-2 mb-2"><b>19.89K</b><span class="text-success tx-13 ml-2">(+25%)</span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-eye project bg-primary-transparent text-primary "></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<small class="mb-0 text-muted">Monthly<span class="float-left text-muted">60%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">New Users</div>
										<div class="h3 mt-2 mb-2"><b>692</b><span class="text-success tx-13 ml-2">(+15%)</span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="fe fe-users project bg-pink-transparent text-pink "></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<small class="mb-0 text-muted">Monthly<span class="float-left text-muted">50%</span></small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-lg-6 col-xl-3">
						<div class="card">
							<div class="card-body">
								<div class="row">
									<div class="col">
										<div class="">Churned Users</div>
										<div class="h3 mt-2 mb-2"><b>286</b><span class="text-success tx-13 ml-2">(+08%)</span></div>
									</div>
									<div class="col-auto align-self-center ">
										<div class="feature mt-0 mb-0">
											<i class="ti-pulse project bg-warning-transparent text-warning "></i>
										</div>
									</div>
								</div>
								<div class="">
									<p class="mb-1">Overview of Last month</p>
									<small class="mb-0 text-muted">Monthly<span class="float-left text-muted">30%</span></small>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
				<!-- row -->
				<!-- /row -->
			</div>
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!-- Moment js -->
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!-- Internal Piety js -->
<script src="{{asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>
<!-- Internal Chart js -->
<script src="{{asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
@endsection