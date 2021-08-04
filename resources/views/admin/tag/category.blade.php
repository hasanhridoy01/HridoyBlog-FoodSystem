@extends('admin/layouts/app')

@section('main-content')

<div class="page-wrapper">
	<div class="content container-fluid">
	
		<!-- Page Header -->
		<div class="page-header">
			<div class="row">
				<div class="col">
					<h3 class="page-title">Categories</h3>
				</div>
				<div class="col-auto text-right">
					<a class="btn btn-white filter-btn" href="#" id="filter_search">
						<i class="fas fa-filter"></i>
					</a>
					<a href="{{ route('category.add.page') }}" class="btn btn-primary add-button ml-3">
						<i class="fas fa-plus"></i>
					</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		
		<!-- Search Filter -->
		<div class="card filter-card" id="filter_inputs">
			<div class="card-body pb-0">
				<form action="#" method="post">
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>Category</label>
								<select class="form-control select">
									<option>Select category</option>
									<option>Automobile</option>
									<option>Construction</option>
									<option>Interior</option>
									<option>Cleaning</option>
									<option>Electrical</option>
									<option>Carpentry</option>
									<option>Computer</option>
								</select>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>From Date</label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<label>To Date</label>
								<div class="cal-icon">
									<input class="form-control datetimepicker" type="text">
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group">
								<button class="btn btn-primary btn-block" type="submit">Submit</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- /Search Filter -->
		@include('validate')
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-hover table-center mb-0 datatable">
								<thead>
									<tr>
										<th>#</th>
										<th>Category</th>
										<th>Slug</th>
										<th>Date</th>
										<th>Status</th>
										<th class="text-right">Action</th>
									</tr>
								</thead>
								<tbody>
                                   
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Category-modal-show-start --}}	
<div id="category-show-modal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="card-header">
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="card shadow-lg m-auto">
					<div class="card-body">
						<img class="shadow-lg" id="photo" src="" alt="" style="height: 300px; width: 350px; border: 10px solid #c0eb34; margin: auto; display: block; background-size: cover; background-position: center center; object-fit: cover;">
						<h2 style="margin-top: 11px;"></h2>
						<form id="category_view" action="" class="mt-4">
							<div class="form-group">
								<label for="">Name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Slug</label>
								<input type="text" name="slug" class="form-control">
							</div>
							<div class="form-group">
								<label for="">Status</label>
								<input type="text" name="status" class="form-control">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Category-modal-show-end --}}	
@endsection		
	