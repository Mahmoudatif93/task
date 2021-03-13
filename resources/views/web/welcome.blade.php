@extends('layouts.web.app')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.checked {
  color: orange;
}
.fa {
    font-size: 25px;
    .card {
        box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
        transition: 0.3s;
        border-radius: 10px;
      }

      img {
        border-radius: 10px 5px 0 0;
      }
</style>


  <main class="has-sidebar">
        <div class="background-title">

            <div class="title">
                <h2 style="color: black">
                   Display 2.301 total result for "Tasweeq"
                </h2>
            </div>

        </div>


        <div class="container" >
            <div class="has-sidebarcontent">
                <div class="sidebar" >

                    <div class="row col-md-12" >
                        <div  class=" col-md-4">
                           <a >  <p style="  text-decoration: underline;
                            font-size: 20px;
                            color: #20ef20;
                            text-decoration-color: #20ef20;
                            ">Courses(4)</p></a>
                        </div>
                        <div class=" col-md-4">
                            <a > Diblomas(5)</a>
                         </div>
                         <div class=" col-md-4">
                            <a > Articales(5)</a>
                         </div>
                    </div>
                    <hr>
                    <div class="checkbox">
                        <h4>
                            Categories
                        </h4>
                        <form >
                            @foreach ( $categories as $row )

                            <label>
{{$row->name}}
                            </label>
                            @endforeach


                        </form>
                        <a href="" style="color: blue">load more <i class="fa fa-plus" aria-hidden="true"></i> </a>
                    </div>
                    <div class="features">
                        <h4 style="    margin-bottom: 20px;">
                            Courses Rating
                        </h4>
                        <div class="options">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>


                        </div>
                        <div class="options">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>

                        </div>
                        <div class="options">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>
                    </div>
                    <div class="features">
                        <h4 style="margin-bottom: 20px;">
                            Level
                        </h4>
                        <div class="options">
                            <div class="details">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> Beginner</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2"> Immediate</label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3"> High Level</label>
                        </div>

                        </div>


                    </div>

                    <div class="features">
                        <h4 style="margin-bottom: 20px;">
                          Time
                        </h4>
                        <div class="options">
                            <div class="details">
                            <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                            <label for="vehicle1"> Less than 4 Hrs</label><br>
                            <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                            <label for="vehicle2">  Less than 8 Hrs</label><br>
                            <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                            <label for="vehicle3">  More than 8 Hrs</label>
                        </div>

                        </div>


                    </div>
                </div>
                <div class="products" style="margin-top: 20px;" id="products">
                    <div style="font-size: 40px"> All Courses ({{count($courses)}})</div>

                    <div class="grid-container">


                        @if(count($courses) >0)
                        @foreach ($courses as $course )


                        <div class="grid-item">

                                <figure>
                                    <div class="card">
                                        <img src="{{ asset('web_files/images/courses.jpg') }}" alt="Avatar" style="">
                                        <div class="container">
                                          <h4><b>{{$course->name}}</b></h4>
                                          <p>{!!$course->description !!}</p>
                                          @for($i=0;$i< $course->rate;$i++)
                                          <span style=" color: orange;" class="fa fa-star"></span>

                                          @endfor
                                          ( {{$course->hours }} )
                                        </div>
                                      </div>
                                </figure>

                        </div>
                        @endforeach
                        {{ $courses->appends(request()->query())->links() }}
                        @else
                        no courses avaliable
                        @endif



                    </div>
                </div>
            </div>
        </div>



    </main>


    <script>

        var input = document.getElementById("search");
        input.addEventListener("keyup", function(event) {
            if (event.keyCode === 13) {
            search =$('#search').val();
            var url = '{{URL::to("/search")}}';

                data = {
                    search: search,
                    _token: "{{csrf_token()}}",
                };
                $.ajax({
                    url: url,
                    type: 'get',
                    dataType: 'html',
                    data: data,
                    success: function(response) {
                        $('#products').html(response);

                    }
                });
            }
            });

            </script>















<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endsection

@push('scripts')
