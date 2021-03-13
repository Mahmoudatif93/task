<aside class="main-sidebar">

    <section class="sidebar">

        <div class="user-panel">
            <div class="pull-left image">
            @if(!empty(auth()->user()->image))
                <img src="{{ asset('uploads/user_images/' .auth()->user()->image) }}" class="img-circle" alt="User Image">
            @else
            <img src="{{ asset('uploads/user_images/default.jpg') }}" class="img-circle" alt="User Image">
            @endif
            </div>
            <div class="pull-left info">
                <p>{{auth()->user()->first_name.' '.auth()->user()->last_name}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
            <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-th"></i><span>@lang('site.dashboard')</span></a></li>




                <li><a href="{{ route('dashboard.categories.index') }}"><i class="fa fa-th"></i><span>@lang('site.categories')</span></a></li>


            <li><a href="{{ route('dashboard.products.index') }}"><i class="fa fa-th"></i><span>@lang('site.products')</span></a></li>














            <li><a href="{{ route('dashboard.users.index') }}"><i class="fa fa-th"></i><span>@lang('site.users')</span></a></li>




        </ul>

    </section>

</aside>

