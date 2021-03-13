@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.products')</h1>

        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
            <li><a href="{{ route('dashboard.products.index') }}"> @lang('site.products')</a></li>
            <li class="active">@lang('site.edit')</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title">@lang('site.edit')</h3>
            </div><!-- end of box header -->
            <div class="box-body">

                @include('partials._errors')

                <form action="{{ route('dashboard.products.update', $courses->id) }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('put') }}

                    <div class="row ">
                        <div class=" col-md-12">
                            <div class="form-group col-md-6">
                                <label>@lang('site.categories')</label>
                                <select   id="category_id" name="category_id" class="form-control">
                                    <option value="">@lang('site.all_categories')</option>
                                    @foreach ($categories as $category)
                                    <option  value="{{ $category->id }}" {{ $courses->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>


                            </div>


                            <div class=" col-md-6 ">

                                <div class="form-group">
                                    <label>@lang('site.name')</label>
                                    <input type="text" name="name" class="form-control" value="{{$courses->name}}">
                                </div>
                            </div>



                            <div class=" col-md-12">


                                <div class=" col-md-12 ">
                                    <div class="form-group ">
                                        <label>@lang('site.description')</label>
                                        <textarea name="description" class="form-control ckeditor">{{$courses->description}}</textarea>
                                    </div>
                                </div>


                            </div>



                            <div class=" col-md-12">
                                <div class="form-group col-md-6">
                                    <label>rate</label>
                                    <input type="number" name="rate" class="form-control " value="{{$courses->rate}}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>views</label>
                                    <input type="number" name="views" class="form-control " value="{{$courses->views}}">
                                </div>

                            </div>
                            <div class=" col-md-12">
                                <div class="form-group col-md-6">
                                    <label>level</label>
                                    <input type="text" name="level" class="form-control" value="{{$courses->level}}">
                                </div>

                                <div class="form-group col-md-6">
                                    <label>Hours</label>
                                    <input type="number" name="hours" class="form-control" value="{{$courses->hours}}">
                                </div>
                            </div>
                    </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.edit')</button>
                        </div>
                    </div>
                </form><!-- end of form -->

            </div><!-- end of box body -->

        </div><!-- end of box -->

    </section><!-- end of content -->

</div><!-- end of content wrapper -->



@endsection
