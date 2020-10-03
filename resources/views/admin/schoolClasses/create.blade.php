@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Create Class Section
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.school-classes.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="name">Class Name</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $schoolClass->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.schoolClass.fields.name_helper') }}</span>
            </div>

            <div class="form-group">
                <label class="required" for="class_number">Class Number</label>
                <input class="form-control {{ $errors->has('class_number') ? 'is-invalid' : '' }}" type="text" name="class_number" id="class_number" value="{{ old('class_number', $schoolClass->class_number) }}" required>
                @if($errors->has('class_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('class_number') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="required" for="section">Section</label>
                <input class="form-control {{ $errors->has('section') ? 'is-invalid' : '' }}" type="text" name="section" id="section" value="{{ old('section', $schoolClass->section) }}" required>
                @if($errors->has('section'))
                    <div class="invalid-feedback">
                        {{ $errors->first('section') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <label class="required" for="color">Color</label>
                <input class="form-control {{ $errors->has('color') ? 'is-invalid' : '' }}" type="color" name="color" id="color" value="{{ old('color', $schoolClass->color) }}" required>
                @if($errors->has('color'))
                    <div class="invalid-feedback">
                        {{ $errors->first('color') }}
                    </div>
                @endif
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection
