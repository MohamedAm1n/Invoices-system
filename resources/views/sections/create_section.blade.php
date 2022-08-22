@extends('layouts.master')
@section('title')
	 إضافة قسم
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الأعدادات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الأقسام</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row">
	<x-flash-message/>

	<div class="col-xl-12">

						<div class="card">
						<div class="card mg-b-20">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
								<div class="col-sm-6 col-md-4 col-xl-3">
										<a class="modal-effect btn btn-outline-primary btn-block" data-effect="effect-scale" data-toggle="modal" href="#modaldemo8">إضافة قسم</a>
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
												<th class="border-bottom-0">الوصف  </th>
												<th class="border-bottom-0">منشئ القسم  </th>
												<th class="border-bottom-0">تاريخ الانشاء </th>
												<th class="border-bottom-0">العمليات </th>
												
											</tr>
										</thead>
										<tbody>
											
												@php
											$counter=1;
											@endphp
											@foreach ( $sections as $section )
											<tr>
												<td>{{ $counter++ }}</td>
												<td>{{ $section->section_name }}</td>
												<td>{{ $section->description }}</td>
												<td>{{ $section->created_by }}</td>
												<td>{{ $section->created_at }}</td>
												<td>
												<a class="modal-effect btn btn-m btn-info" data-effect="effect-scale"
                                                       data-id="{{ $section->id }}" data-section_name="{{ $section->section_name }}"
                                                       data-description="{{ $section->description }}" data-toggle="modal" href="#exampleModal2"
                                                       title="{{$section->id}}"><i class="las la-pen"></i></a>

                                                    <a class="modal-effect btn btn-m btn-danger" data-effect="effect-scale"
                                                       data-id="{{ $section->id }}" data-section_name="{{ $section->section_name }}" data-toggle="modal"
                                                       href="#modaldemo9" title="حذف"><i class="las la-trash"></i></a>
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
				<h6 class="modal-title">إضافة قسم</h6><button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="{{ route('section.store') }}" method="POST" >
					@csrf
								<div class="form-group">
									<label for="section_name">اسم القسم </label>
									<input type="text"  class="form-control" name="section_name" id="section_name" placeholder="إضافة اسم القسم">
								</div>
							
								<div class="form-group">
									<label for="description">ملاحظات</label>
									<input type="text" class="form-control" name="description" id="description"placeholder="الملاحظات">
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
			
	

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"  aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">تعديل القسم</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">

				<form action="{{ route('section.update',$section->id) }}" method="POST" autocomplete="off">
					@csrf
					<div class="form-group">
						<input type="text" name="id" id="id" data-dismiss="modal" value="{{ $section->id }}">
						<label for="recipient-name" class="col-form-label">اسم القسم:</label>
						<input class="form-control" name="section_name" id="section_name" type="text">
					</div>
					<div class="form-group">
						<label for="message-text" class="col-form-label">ملاحظات:</label>
						<textarea class="form-control"   id="description" name="description"></textarea>
					</div>
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


    <script type="text/javascript">
        $('#exampleModal2').on('show.bs.modal',function() {
			// alert('hi');
            var button = $(event.relatedTarget)
            var id = input.data('id')
            var section_name = button.data('section_name')
            var description = button.data('description')
            var modal = $(this)
            modal.find('.modal-body #id').val(id);
            modal.find('.modal-body #section_name').val(section_name);
            modal.find('.modal-body #description').val(description);
        })
    </script>
