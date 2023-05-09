<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{asset('ui/frontend/assets/css/style.css')}}" rel="stylesheet">

    <title>Bigshop</title>
</head>
<body>

<!--Markup for Header-->
@include('frontend.layouts.partials.header')
<!--Markup for Carousel-->
{{$slot}}
<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="{{asset('ui/frontend/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('ui/frontend/assets/js/jquery.countdown.min.js')}}"></script>

<script>

    //Carousel
    var myCarousel = document.querySelector('#myCarousel')
    var carousel = new bootstrap.Carousel(myCarousel, {
        interval: 1400,
        wrap: true
    });

    //Countdown timer
    $(".box-timer")
        .countdown("2022/12/01", function(event) {
            $('.day .number').text(
                event.strftime('%D')
            );
            $('.hour .number').text(
                event.strftime('%H')
            );
            $('.min .number').text(
                event.strftime('%M')
            );
            $('.sec .number').text(
                event.strftime('%S')
            );
        });

</script>
</body>
</html>