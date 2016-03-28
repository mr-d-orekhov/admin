<div class="form-group {{ $errors->has($name) ? 'has-error' : '' }}">
    <label for="{{ $name }}">{{ $label }}</label>
    <div class="imageUploadMultiple files" data-target="{{ route('admin.formitems.image.uploadFile') }}"
         data-token="{{ csrf_token() }}">
        <div class="row form-group images-group">
            @foreach ($value as $file)
                <div class="col-xs-6 col-md-3 imageThumbnail">
                    <div class="thumbnail">
                        <div class="no-value {{ empty($file) ? '' : 'hidden' }}">
                            <i class="fa fa-fw fa-file-o"></i> no file
                        </div>
                        <div class="has-value {{ empty($file) ? 'hidden' : '' }}" data-value="{{ $file->id }}">
                            <a href="{{ asset($file->value) }}" data-toggle="tooltip" target="_blank"
                               title="{{ trans('admin::lang.table.download') }}"><i class="fa fa-fw fa-file-o"></i>
                                <span>{{ $file->name }}</span></a>
                        </div>
                        <a href="#" class="imageRemove">Remove</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div>
            <div class="btn btn-primary imageBrowse"><i
                        class="fa fa-upload"></i> {{ trans('admin::lang.file.browseMultiple') }}</div>
        </div>
        <input name="{{ $name }}" class="imageValue" type="hidden"
               value="{{ implode(',', array_get_values_by_key($value, 'id')) }}">
        <div class="errors">
            @include(AdminTemplate::view('formitem.errors'))
        </div>
    </div>
</div>