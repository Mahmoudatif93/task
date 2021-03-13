@extends('layouts.dashboard.app')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.products')</h1>

        <ol class="breadcrumb">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> @lang('site.dashboard')</a></li>
            <li><a href="{{ route('dashboard.products.index') }}"> @lang('site.products')</a></li>
            <li class="active">@lang('site.add')</li>
        </ol>
    </section>

    <section class="content">

        <div class="box box-primary">

            <div class="box-header">
                <h3 class="box-title">@lang('site.add')</h3>
            </div><!-- end of box header -->
            <div class="box-body">

                @include('partials._errors')

                <form action="{{ route('dashboard.products.store') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    {{ method_field('post') }}
                    <div class="row ">
                        <div class=" col-md-12">
                            <div class="form-group col-md-6">
                                <label>@lang('site.categories')</label>
                                <select id="category_id" onchange="appear()" name="category_id" class="form-control">
                                    <option value="">@lang('site.all_categories')</option>
                                    @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class=" col-md-6 ">

                                <div class="form-group">
                                    <label>@lang('site.name')</label>
                                    <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>



                        </div>
                        <div class=" col-md-12">


                            <div class=" col-md-12 ">
                                <div class="form-group ">
                                    <label>@lang('site.description')</label>
                                    <textarea name="description" class="form-control ckeditor">{{ old('description') }}</textarea>
                                </div>
                            </div>


                        </div>



                        <div class=" col-md-12">
                            <div class="form-group col-md-6">
                                <label>rate</label>
                                <input type="number" name="rate" class="form-control " value="{{ old('rate') }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label>views</label>
                                <input type="number" name="views" class="form-control " value="{{ old('views') }}">
                            </div>

                        </div>
                        <div class=" col-md-12">
                            <div class="form-group col-md-6">
                                <label>level</label>
                                <input type="text" name="level" class="form-control" value="{{ old('level') }}">
                            </div>

                            <div class="form-group col-md-6">
                                <label>Hours</label>
                                <input type="number" name="hours" class="form-control" value="{{ old('hours') }}">
                            </div>
                        </div>





                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> @lang('site.add')</button>
                    </div>
            </div>
            </form><!-- end of form -->

        </div><!-- end of box body -->

</div><!-- end of box -->

</section><!-- end of content -->

</div><!-- end of content wrapper -->

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script>
    function getfeescaches() {

        var url = '{{URL::to("/dashboard/getfeeschach")}}';
        var fees = $('#fees').val();
        var cashs = $('#cashs').val();
        var grams = $('#number_grams').val();

        var results = [];
        var selected = $('#number_grams').find('option:selected', this);
        selected.each(function() {
            results.push($(this).data('id'));
        });


        data = {
            results: results,
            _token: "{{csrf_token()}}",
        };
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'html',
            data: data,
            success: function(response) {

                if (response != "false") {
                    var JSONObject = JSON.parse(response);
                    $('#fees').val(JSONObject.fees);
                    $('#cashs').val(JSONObject.cache_back);
                } else {
                    swal("Error!", "there is no Fees & Cachback for this ingots!", "error");
                }
                $('#weight').val(grams);
                $('#number_gramsv').val(grams);


            }
        });

    }




    function getfeescoins() {

        var url = '{{URL::to("/dashboard/getfeescoins")}}';
        var fees = $('#fees').val();
        var cashs = $('#cashs').val();
        var grams = $('#number_grams2').val();

        var results = [];
        var selected = $('#number_grams2').find('option:selected', this);
        selected.each(function() {
            results.push($(this).data('id'));
        });


        data = {
            results: results,
            _token: "{{csrf_token()}}",
        };
        $.ajax({
            url: url,
            type: 'get',
            dataType: 'html',
            data: data,
            success: function(response) {

                if (response != "false") {
                    var JSONObject = JSON.parse(response);
                    $('#fees').val(JSONObject.fees);
                    $('#cashs').val(JSONObject.cache_back);
                } else {
                    swal("Error!", "there is no Fees & Cachback for this ingots!", "error");
                }
                $('#weight').val(grams);
                $('#number_gramsv').val(grams);

            }
        });

    }









    function appear() {

        var cat = $('#category_id').val();
        if (cat == '') {
            $('#ingots').hide();
            $('#coins').hide();
            $('#fees').val('');
            $('#cashs').val('');
            $('#weight').val('');
            $('#number_gramsv').val('')
        }
        if (cat == 1) {
            $('#ingots').show();
            $('#coins').hide();
            $('#fees').val('');
            $('#cashs').val('');
            $('#weight').val('');
            $('#number_gramsv').val('')
            $('#diameter').hide();
        }
        if (cat == 2) {
            $('#coins').show();
            $('#ingots').hide();
            $('#fees').val('');
            $('#cashs').val('');
            $('#weight').val('');
            $('#number_gramsv').val('')
            $('#diameter').show();
        }





    }
</script>
@endsection
