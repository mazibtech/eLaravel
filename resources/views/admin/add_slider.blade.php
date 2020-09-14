@extends('admin_layout')
@section('admin_content')
<ul class="breadcrumb">
	<li>
		<i class="icon-home"></i>
		<a href="index.html">Home</a>
		<i class="icon-angle-right"></i> 
	</li>
	<li>
		<i class="icon-edit"></i>
		<a href="#">Add Slider</a>
	</li>
</ul>

<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon edit"></i><span class="break"></span>Add Slider</h2>
		</div>

		<p class="alert-success">
			<?php
				$message=Session::get('message');
				if ($message) {
					echo $message;
					Session::put('message',null);
				}
			?>			
		</p>


		<div class="box-content">
			<form class="form-horizontal" action="{{ url('/save-slider') }}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}
			  <fieldset>
				<div class="control-group">
				  <label class="control-label" for="date01">Slider Name</label>
				  <div class="controls">
					<input type="text" class="input-xlarge" name="slider_name" >
				  </div>
				</div>

				<div class="control-group">
				  <label class="control-label" for="fileInput">Slider Image</label>
				  <div class="controls">
					<input class="input-file uniform_on" id="fileInput" name="slider_image" type="file">
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Slider Description</label>
				  <div class="controls">
					<textarea class="cleditor" name="slider_description" rows="3"></textarea>
				  </div>
				</div>

				<div class="control-group hidden-phone">
				  <label class="control-label" for="textarea2">Status</label>
				  <div class="controls">
					<input type="checkbox" class="input-xlarge" name="status" value="1" >
				  </div>
				</div>

				<div class="form-actions">
				  <button type="submit" class="btn btn-primary">Add Slider</button>
				  <button type="reset" class="btn">Cancel</button>
				</div>
			  </fieldset>
			</form>   

		</div>
	</div><!--/span-->

</div>
@endsection