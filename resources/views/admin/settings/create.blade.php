@extends('layouts.master')

@section('content')
				<div class="row">
                    <div class="col-lg-8 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3 border-bottom">
								<h5 class="mb-0">Playlist</h5>
							</div>
							<div class="card-body p-4">
								<form  method="POST" action="{{ route('admin.settings.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row mb-3">
										<label for="input35" class="col-sm-3 col-form-label">Website Name</label>
										<div class="col-sm-9">
											<input type="text" class="form-control" name="app_name" placeholder="Enter Name">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input36" class="col-sm-3 col-form-label">Logo</label>
										<div class="col-sm-9">
											<input type="file" class="form-control"  name="logo" placeholder="logo">
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Favicon</label>
										<div class="col-sm-9">
											<input type="file" class="form-control"  name="icon" >
										</div>
									</div>
									<div class="row mb-3">
										<label for="input37" class="col-sm-3 col-form-label">Currency</label>
										<div class="col-sm-9">
											<input type="text" class="form-control"  name="currency" placeholder="currency">
										</div>
									</div>
								
									<div class="row">
										<label class="col-sm-3 col-form-label"></label>
										<div class="col-sm-9">
											<div class="d-md-flex d-grid align-items-center gap-3">
												<button type="submit" class="btn btn-white px-4">Submit</button>
												
											</div>
										</div>
									</div>
								</form>

							</div>
						</div>
					</div>
				</div>
       
@endsection
