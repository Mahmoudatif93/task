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
