{{-- @extends('admin.layouts.master') --}}
{{-- @section('css')
    <!--- Internal Select2 css-->
    <link href="{{ URL::asset('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">
    <!---Internal Fileupload css-->
    <link href="{{ URL::asset('assets/plugins/fileuploads/css/fileupload.css') }}" rel="stylesheet" type="text/css" />
    <!---Internal Fancy uploader css-->
    <link href="{{ URL::asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/sumoselect/sumoselect-rtl.css') }}">
    <!--Internal  TelephoneInput css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/plugins/telephoneinput/telephoneinput-rtl.css') }}">
@endsection --}}
@section('title')
  add new partment for sale
@stop

@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto"> for sale</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ add your partment</span>
						</div>
					</div>
					{{-- <div class="d-flex my-xl-auto right-content"> --}}
						{{-- //for dropdown --}}
						{{-- <div class="mb-3 mb-xl-0">
							<div class="btn-group dropdown">
								<button type="button" class="btn btn-primary">14 Aug 2019</button>
								<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="sr-only">Toggle Dropdown</span>
								</button>
								<div class="dropdown-menu dropdown-menu-left" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
									<a class="dropdown-item" href="#">2015</a>
									<a class="dropdown-item" href="#">2016</a>
									<a class="dropdown-item" href="#">2017</a>
									<a class="dropdown-item" href="#">2018</a>
								</div>
							</div>
						</div> --}}
					{{-- </div> --}}
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')

@if (session()->has('Add'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>{{ session()->get('Add') }}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
@endif

				<!-- row -->
				<div class="row">

					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
			
								<form action={{ url('estate/create') }} method="post" enctype="multipart/form-data" autocomplete="off">
									@csrf
			
									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">outlook</label>
											<input type="text" class="form-control" id="inputName" name="outlook"
												title="please enter your paretment's outlook" required>
										</div>
									</div><br>
			
									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">direction</label>
											<input type="text" class="form-control" id="inputName" name="direction" required>
										</div>
									</div><br>

									
									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">floor</label>
											<input type="text" class="form-control" id="inputName" name="floor" required>
										</div>
									</div><br>

									
									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">ownership</label>
											<input type="text" class="form-control" id="inputName" name="ownership" required>
										</div>
									</div><br>

									
									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">room number</label>
											<input type="text" class="form-control" id="inputName" name="room_number" required>
										</div>
									</div><br>

									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">bath number</label>
											<input type="text" class="form-control" id="inputName" name="bath_number" required>
										</div>
									</div><br>

									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">price</label>
											<input type="text" class="form-control" id="inputName" name="price" required>
										</div>
									</div><br>

									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="parking">
											parking
										</label>
									  </div>

									  <div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="place_for_barbecue">
											place for barbecue
										</label>
									  </div>

									  <div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="left">
											left
										</label>
									  </div>

									  <div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="TV_cable">
											TV_cable
										</label>
									  </div>

									  <div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for="internet">
											internet
										</label>
									  </div>
									 
									  
									  <div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
										<label class="form-check-label" for=" central_heating">
											central_heating
										</label>
									  </div>

									
									<div class="row">
										<div class="col">
											<label for="inputName" class="control-label">slug</label>
											<input type="text" class="form-control" id="inputName" name="slug" required>
										</div>
									</div><br>

									{{-- <div class="form-group">
										<label>التصنيف الأب</label>
										<select name="parent_id" class="form-control select">
											
											<option value="0">لا يوجد</option>

											@foreach($parents as $parent)
											<option value="{{$parent->id}}">{{$parent->category_name}}</option>
											@endforeach 

										</select>
									</div> --}}
{{-- 			
									<div class="row">
										<div class="col">
											<label for="exampleTextarea">الوصف</label>
											<textarea class="form-control" id="exampleTextarea" name="category_description" rows="3"></textarea>
										</div>
									</div><br> --}}
			
									<div class="d-flex justify-content-center">
										<button type="submit" class="btn btn-primary">Add</button>
									</div>
			
								</form>
							</div>
						</div>
					</div>
				</div>
				<!-- row closed -->
@endsection
@section('js')
    <!-- Internal Select2 js-->
    <script src="{{ URL::asset('assets/plugins/select2/js/select2.min.js') }}"></script>
    <!--Internal Fileuploads js-->
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fileuploads/js/file-upload.js') }}"></script>
    <!--Internal Fancy uploader js-->
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>
    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('assets/js/advanced-form-elements.js') }}"></script>
    <script src="{{ URL::asset('assets/js/select2.js') }}"></script>
    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Datepicker js -->
    <script src="{{ URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{ URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js') }}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{ URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>
    <!-- Internal form-elements js -->
    <script src="{{ URL::asset('assets/js/form-elements.js') }}"></script>


@endsection