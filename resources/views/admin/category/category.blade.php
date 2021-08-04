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
					<a data-toggle="modal" href="#category-add-modal" class="btn btn-primary btn-lg" style="font-family: CircularStd; font-weight: blod;">Add Category</a>
				</div>
			</div>
		</div>
		<!-- /Page Header -->
		@include('validate')
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="Category_Table" class="table table-hover table-center mb-0 datatable">
								<thead>
									<tr>
										<th>#</th>
										<th>Category</th>
										<th>Slug</th>
										<th>Photo</th>
										<th>Time</th>
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

{{-- Category-modal-add-start --}}	
<div id="category-add-modal" class="modal fade">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="card-header">
				<button class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h3>Add Category</h3>
			</div>
			<div class="modal-body">
				<div class="card shadow-lg m-auto">
					<div class="card-body">
						<!-- Form -->
						<form action="" method="POST" enctype="multipart/form-data">
							@csrf

							<div class="form-group">
								<label>Category Name</label>
								<input name="name" class="form-control" type="text" placeholder="Category Name">
							</div>
							<div class="form-group">
                                <img style="max-width:200px; max-height: 200px; display: block;" id="CategoryImageShow" src="" alt="">
                            </div>
							<div class="form-group">
								<label>Category Image</label>
								<input id="CategoryImage" name="photo" class="form-control" type="file">
								<input style="display: none;" name="" type="file">
							</div>
							<div class="mt-4">
								<button class="btn btn-primary" type="submit">Add Category</button>
								<a href="{{ route('category.index') }}" class="btn btn-link">Cancel</a>
							</div>

						</form>
						<!-- Form -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Category-modal-add-end --}}

{{-- Category-modal-edit-start --}}	
<div id="category-edit-modal" class="modal fade">
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
						<!-- Form -->
						<form action="" method="POST" enctype="multipart/form-data">
							@csrf

							<div class="form-group">
								<label>Category Name</label>
								<input name="name" value="" class="form-control" type="text" value="Automobile">
								<input name="slug" value="" class="form-control" type="hidden" value="Automobile">
								<input name="id" value="" class="form-control" type="hidden" value="Automobile">
							</div>
							<div class="form-group">
								<label>Category Image</label>
								<input id="CategoryUpload" name="uploadphoto" class="form-control" type="file">
								<input type="hidden" name="oldphoto" value="" class="form-control">
							</div>
							<div class="form-group">
								<div class="avatar">
								  <img id="CategoryUploadImg" class="avatar-img rounded" alt="" src="">
								</div>
							</div>
							<div class="mt-4">
								<button class="btn btn-primary" type="submit">Save Changes</button>
								<a href="{{ route('category.index') }}" class="btn btn-link">Cancel</a>
							</div>
						</form>
						<!-- /Form -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
{{-- Category-modal-edit-end --}}

@endsection		
	