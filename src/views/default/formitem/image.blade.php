<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
	<label for="{{ $name }}">{{ $label }}</label>
	<div class="imageUpload" data-target="{{ route('admin.formitems.image.upload') }}" data-token="{{ csrf_token() }}">
		<div>
			<div class="thumbnail">
				<img src="{{ empty($value) ? 'http://www.placehold.it/200x150/EFEFEF/AAAAAA&text=no+image' : asset($value) }}" width="200px" height="150px" />
			</div>
		</div>
		<div>
			<div class="btn btn-primary imageBrowse"><i class="fa fa-upload"></i> {{ trans('admin::lang.image.browse') }}</div>
			<div class="btn btn-danger imageRemove"><i class="fa fa-times"></i> {{ trans('admin::lang.image.remove') }}</div>
		</div>
		<input name="{{ $name }}" class="imageValue" type="hidden" value="{{ $value }}">
		<div class="errors">
			@include(AdminTemplate::view('formitem.errors'))
		</div>
	</div>
</div>