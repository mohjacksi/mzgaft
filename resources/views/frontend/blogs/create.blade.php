@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        {{ trans('global.create') }} {{ trans('cruds.blog.title_singular') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('frontend.blogs.store') }}" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label class="required" for="title">{{ trans('cruds.blog.fields.title') }}</label>
                                <input class="form-control" type="text" name="title" id="title"
                                    value="{{ old('title', '') }}" required>
                                @if ($errors->has('title'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('title') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.title_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="writing_date">{{ trans('cruds.blog.fields.writing_date') }}</label>
                                <input class="form-control date" type="text" name="writing_date" id="writing_date"
                                    value="{{ old('writing_date') }}">
                                @if ($errors->has('writing_date'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('writing_date') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.writing_date_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="writer_id">{{ trans('cruds.blog.fields.writer') }}</label>
                                <select class="form-control select2" name="writer_id" id="writer_id">
                                    @foreach ($writers as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('writer_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('writer'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('writer') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.writer_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="category_id">{{ trans('cruds.blog.fields.category') }}</label>
                                <select class="form-control select2" name="category_id" id="category_id">
                                    @foreach ($categories as $id => $entry)
                                        <option value="{{ $id }}"
                                            {{ old('category_id') == $id ? 'selected' : '' }}>{{ $entry }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('category'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('category') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.category_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="content">{{ trans('cruds.blog.fields.content') }}</label>
                                <textarea class="form-control ckeditor" name="content" id="content">{!! old('content') !!}</textarea>
                                @if ($errors->has('content'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('content') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.content_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <div>
                                    <input type="hidden" name="approved" value="0">
                                    <input type="checkbox" name="approved" id="approved" value="1"
                                        {{ old('approved', 0) == 1 ? 'checked' : '' }}>
                                    <label for="approved">{{ trans('cruds.blog.fields.approved') }}</label>
                                </div>
                                @if ($errors->has('approved'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('approved') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.approved_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="files">{{ trans('cruds.blog.fields.files') }}</label>
                                <div class="needsclick dropzone" id="files-dropzone">
                                </div>
                                @if ($errors->has('files'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('files') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.files_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="images">{{ trans('cruds.blog.fields.images') }}</label>
                                <div class="needsclick dropzone" id="images-dropzone">
                                </div>
                                @if ($errors->has('images'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('images') }}
                                    </div>
                                @endif
                                <span class="help-block">{{ trans('cruds.blog.fields.images_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function SimpleUploadAdapter(editor) {
                editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
                    return {
                        upload: function() {
                            return loader.file
                                .then(function(file) {
                                    return new Promise(function(resolve, reject) {
                                        // Init request
                                        var xhr = new XMLHttpRequest();
                                        xhr.open('POST',
                                            '{{ route('frontend.blogs.storeCKEditorImages') }}',
                                            true);
                                        xhr.setRequestHeader('x-csrf-token', window._token);
                                        xhr.setRequestHeader('Accept', 'application/json');
                                        xhr.responseType = 'json';

                                        // Init listeners
                                        var genericErrorText =
                                            `Couldn't upload file: ${ file.name }.`;
                                        xhr.addEventListener('error', function() {
                                            reject(genericErrorText)
                                        });
                                        xhr.addEventListener('abort', function() {
                                            reject()
                                        });
                                        xhr.addEventListener('load', function() {
                                            var response = xhr.response;

                                            if (!response || xhr.status !== 201) {
                                                return reject(response && response
                                                    .message ?
                                                    `${genericErrorText}\n${xhr.status} ${response.message}` :
                                                    `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`
                                                );
                                            }

                                            $('form').append(
                                                '<input type="hidden" name="ck-media[]" value="' +
                                                response.id + '">');

                                            resolve({
                                                default: response.url
                                            });
                                        });

                                        if (xhr.upload) {
                                            xhr.upload.addEventListener('progress', function(
                                                e) {
                                                if (e.lengthComputable) {
                                                    loader.uploadTotal = e.total;
                                                    loader.uploaded = e.loaded;
                                                }
                                            });
                                        }

                                        // Send request
                                        var data = new FormData();
                                        data.append('upload', file);
                                        data.append('crud_id', '{{ $blog->id ?? 0 }}');
                                        xhr.send(data);
                                    });
                                })
                        }
                    };
                }
            }

            var allEditors = document.querySelectorAll('.ckeditor');
            for (var i = 0; i < allEditors.length; ++i) {
                ClassicEditor.create(
                    allEditors[i], {
                        extraPlugins: [SimpleUploadAdapter]
                    }
                );
            }
        });
    </script>

    <script>
        var uploadedFilesMap = {}
        Dropzone.options.filesDropzone = {
            url: '{{ route('frontend.blogs.storeMedia') }}',
            maxFilesize: 99999, // MB
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 99999
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="files[]" value="' + response.name + '">')
                uploadedFilesMap[file.name] = response.name
            },
            removedfile: function(file) {
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedFilesMap[file.name]
                }
                $('form').find('input[name="files[]"][value="' + name + '"]').remove()
            },
            init: function() {
                @if (isset($blog) && $blog->files)
                    var files =
                        {!! json_encode($blog->files) !!}
                    for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="files[]" value="' + file.file_name + '">')
                    }
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
    <script>
        var uploadedImagesMap = {}
        Dropzone.options.imagesDropzone = {
            url: '{{ route('frontend.blogs.storeMedia') }}',
            maxFilesize: 99999, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 99999,
                width: 4096,
                height: 4096
            },
            success: function(file, response) {
                $('form').append('<input type="hidden" name="images[]" value="' + response.name + '">')
                uploadedImagesMap[file.name] = response.name
            },
            removedfile: function(file) {
                console.log(file)
                file.previewElement.remove()
                var name = ''
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedImagesMap[file.name]
                }
                $('form').find('input[name="images[]"][value="' + name + '"]').remove()
            },
            init: function() {
                @if (isset($blog) && $blog->images)
                    var files = {!! json_encode($blog->images) !!}
                    for (var i in files) {
                        var file = files[i]
                        this.options.addedfile.call(this, file)
                        this.options.thumbnail.call(this, file, file.preview)
                        file.previewElement.classList.add('dz-complete')
                        $('form').append('<input type="hidden" name="images[]" value="' + file.file_name + '">')
                    }
                @endif
            },
            error: function(file, response) {
                if ($.type(response) === 'string') {
                    var message = response //dropzone sends it's own error messages in string
                } else {
                    var message = response.errors.file
                }
                file.previewElement.classList.add('dz-error')
                _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
                _results = []
                for (_i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        }
    </script>
@endsection
