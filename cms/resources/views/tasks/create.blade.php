@extends('layout')
@section('css')
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/css/bootstrap-datepicker.css" rel="stylesheet">
@endsection
@section('header')
    <div class="page-header">
        <h1><i class="glyphicon glyphicon-plus"></i> Tasks / Create </h1>
    </div>
@endsection

@section('content')
    @include('error')

    <div class="row">
        <div class="col-md-12">

            <form action="{{ route('tasks.store') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group @if($errors->has('title')) has-error @endif">
                       <label for="title-field">Title</label>
                    <input type="text" id="title-field" name="title" class="form-control" value="{{ old("title") }}"/>
                       @if($errors->has("title"))
                        <span class="help-block">{{ $errors->first("title") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('price')) has-error @endif">
                       <label for="price-field">Price</label>
                    <input type="text" id="price-field" name="price" class="form-control" value="{{ old("price") }}"/>
                       @if($errors->has("price"))
                        <span class="help-block">{{ $errors->first("price") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('body')) has-error @endif">
                       <label for="body-field">Body</label>
                    <textarea class="form-control" id="body-field" rows="3" name="body">{{ old("body") }}</textarea>
                       @if($errors->has("body"))
                        <span class="help-block">{{ $errors->first("body") }}</span>
                       @endif
                    </div>
                    <div class="form-group @if($errors->has('published')) has-error @endif">
                       <label for="published-field">Published</label>
                    <input type="text" id="published-field" name="published" class="form-control" value="{{ old("published") }}"/>
                       @if($errors->has("published"))
                        <span class="help-block">{{ $errors->first("published") }}</span>
                       @endif
                    </div>
                <div class="well well-sm">
                    <button type="submit" class="btn btn-primary">Create</button>
                    <a class="btn btn-link pull-right" href="{{ route('tasks.index') }}"><i class="glyphicon glyphicon-backward"></i> Back</a>
                </div>
            </form>

        </div>
    </div>
@endsection
@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.0/js/bootstrap-datepicker.min.js"></script>
  <script>
    $('.date-picker').datepicker({
    });
  </script>
@endsection
