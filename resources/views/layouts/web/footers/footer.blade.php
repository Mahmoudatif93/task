

<footer>
        <div class="container " style="background-color: black;color:white">
            <div class="columns">
                <div class="logo">
                   <h2 style="font-size: 20px;font-weight: bold"> about the academy</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. A voluptate aspernatur earum reprehenderit illum odit itaque quaerat corrupti aut, id qui fugit assumenda iste, facere quos nisi enim cumque laudantium!</p>
<br>
                    <p> Join us</p>
                    <br>
                    <div class="social">

                        <a href="https://www.facebook.com/Fakkadotorg/">
                            <figure>
                                <svg viewBox="0 0 23.469 23.469">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#fb') }} "></use>
                                </svg>
                            </figure>
                        </a>
                        <a href="https://www.linkedin.com/company/fakkaorg/">
                            <figure>
                                <svg viewBox="0 0 23.075 23.075">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#linkedin') }} "></use>
                                </svg>
                            </figure>
                        </a>
                        <a href="https://www.instagram.com/fakkadotorg/">
                            <figure>
                                <svg viewBox="0 0 23.1 23.1">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#insta') }} "></use>
                                </svg>
                            </figure>
                        </a>
                        <a href="https://www.youtube.com/channel/UC6ripzcXn1xj7ItFReNG7xw">
                            <figure>
                                <svg viewBox="0 0 32.999 23">
                                    <use xlink:href="{{ asset('web_files/images/sprite.svg#youtube') }} "></use>
                                </svg>
                               <!-- <i class="fa fa-youtube" aria-hidden="true"></i>-->
                            </figure>
                        </a>
                    </div>
                </div>

                <div style="margin-left: 80px">
                    <h5>Terms && condtions </h5>
                    <ul>
                        <li>
                            <h5>Terms && condtions </h5>
                        </li>
                        <li>
                            <h5>Terms && condtions </h5>
                        </li>
                        <li>
                            <h5>Terms && condtions </h5>
                        </li>
                    </ul>
                </div>
                <div>
                    <h5>Pay with</h5>

<img src="{{ asset('web_files/images/visa.png') }}">
                </div>
            </div>

        </div>
    </footer>

    <script src=" {{ asset('web_files/js/jquery-1.11.0.min.js') }}"></script>
    <script src=" {{ asset('web_files/js/customScript.js') }}"></script>
    <script src="{{ asset('web_files/js/slick.min.js') }} "></script>

    @if(Session::get('locale') == 'ar')
    <script>
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            dots: false,
            arrows: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
            rtl: true,
        });

    </script>
    @else
    <script>
        $('.slider').slick({
            infinite: true,
            slidesToShow: 1,
            dots: false,
            arrows: false,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,

        });

    </script>
    @endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
{{--noty--}}
<link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css') }}">

    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
    //$('.select_customsss').selectpicker();

$('.delete').click(function (e) {

var that = $(this)

e.preventDefault();

var n = new Noty({
    text: "@lang('site.confirm_delete')",
    type: "warning",
    killer: true,
    buttons: [
        Noty.button("@lang('site.yes')", 'btn btn-success mr-2', function () {
            that.closest('form').submit();
        }),

        Noty.button("@lang('site.no')", 'btn btn-primary mr-2', function () {
            n.close();
        })
    ]
});

n.show();

});//end of delete

</script>

@stack('scripts')
</body>

</html>
