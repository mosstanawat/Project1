<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>

<script type="text/javascript">
    // slide Image part
    var slideIndex;
    showDivs(slideIndex);
    function plusDivs(n)
    {
        showDivs(slideIndex += n);
    }
    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";

        console.log(slideIndex);
    }
    // current data and user
    var current = slideIndex;
    var name = $("#username").text();
    jQuery(document).ready(function(){
        var regular , random , simple , busy, inorganic, organic, dynamic, delicate, solid
        ,soft, flat, light, modern, massive, postmodern, craggy, classical, luxury, cheap,
        transparent, speed, like;

        $(".btn-submit").click(function(e){
            e.preventDefault();
            $.ajaxSetup({
                headers:
                    {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $("input[name=regular]").is(':checked') ? regular = $("input[name=regular]").val() : regular = 0;
            $("input[name=random]").is(':checked') ? random = $("input[name=random]").val() : random = 0;
            $("input[name=simple]").is(':checked') ? simple = $("input[name=simple]").val() : simple = 0;
            $("input[name=busy]").is(':checked') ? busy = $("input[name=busy]").val() : busy = 0;
            $("input[name=inorganic]").is(':checked') ? inorganic = $("input[name=inorganic]").val() : inorganic = 0;
            $("input[name=organic]").is(':checked') ? organic = $("input[name=organic]").val() : organic = 0;
            $("input[name=dynamic]").is(':checked') ? dynamic = $("input[name=dynamic]").val() : dynamic = 0;
            $("input[name=delicate]").is(':checked') ? delicate = $("input[name=delicate]").val() : delicate = 0;
            $("input[name=solid]").is(':checked') ? solid = $("input[name=solid]").val() : solid = 0;
            $("input[name=soft]").is(':checked') ? soft = $("input[name=soft]").val() : soft = 0;
            $("input[name=flat]").is(':checked') ? flat = $("input[name=flat]").val() : flat = 0;
            $("input[name=light]").is(':checked') ? light = $("input[name=light]").val() : light = 0;
            $("input[name=modern]").is(':checked') ? modern = $("input[name=modern]").val() : modern = 0;
            $("input[name=massive]").is(':checked') ? massive = $("input[name=massive]").val() : massive = 0;
            $("input[name=postmodern]").is(':checked') ? postmodern = $("input[name=postmodern]").val() : postmodern = 0;
            $("input[name=craggy]").is(':checked') ? craggy = $("input[name=craggy]").val() : craggy = 0;
            $("input[name=classical]").is(':checked') ? classical = $("input[name=classical]").val() : classical = 0;
            $("input[name=luxury]").is(':checked') ? luxury = $("input[name=luxury]").val() : luxury = 0;
            $("input[name=cheap]").is(':checked') ? cheap = $("input[name=cheap]").val() : cheap = 0;
            $("input[name=transparent]").is(':checked') ? transparent = $("input[name=transparent]").val() : transparent = 0;
            $("input[name=speed]").is(':checked') ? speed = $("input[name=speed]").val() : speed = 0;
            var geometry = $("#geometry").val();
            var material = $("#material").val();
            var other = $("textarea#other").val();
            $("input[name=like]").is(':checked') ? like = $("input[name=like]").val() : like = 0;

            //console.log("name :" + name + "current : " + current );
            // current data and user
            var current = slideIndex;
            var name = $("#username").text();

            $.ajax({
                type:'POST',
                url: "{{ route('building.store') }}",
                data:{
                    regular:regular, random:random, simple:simple, busy:busy,
                    inorganic:inorganic, organic:organic, dynamic:dynamic, delicate:delicate,
                    solid:solid, soft:soft, flat:flat, light:light, modern:modern, massive:massive,
                    postmodern:postmodern, craggy:craggy, classical:classical, luxury:luxury,
                    cheap:cheap,transparent:transparent, speed:speed, geometry:geometry,
                    material:material, other:other, like:like , current:current, name:name
                },
                success:function(result){
                    console.log(result);
                    swal({
                        text: "Hello world!",
                        });
                }
            });
        });
        // click at the slide button to change data
        $(".w3-button").click(function(e){
            e.preventDefault();
            // current data and user
            var current = slideIndex;
            var name = $("#username").text();
            $.ajax({
                type:'GET',
                url: "{{ route('changeImage') }}",
                data:{
                    current:slideIndex, name:name
                },
                success: function(result){
                    //old
                    // if(result == null){
                    //     $("input[type=checkbox]").attr("checked", false);
                    //     // will be fixed later
                    //     $("select[name=geometry] option[value=null]").attr("selected", true);
                    //     $("select[name=material] option[value=null]").attr("selected", true);

                    //new
                    if(result.data == null){
                        console.log('In if result.data == null');
                        // $("#geometry option").removeAttr('selected');
                        // $("#material option").removeAttr('selected');
                        // $("#geometry option[value=null]").attr('selected');
                        // $("#material option[value=null]").attr('selected')
                        $("#other").empty().val("");
                        $("#geometry option").removeAttr('selected');
                        $("#material option").removeAttr('selected');
                        $("#geometry option[value=null]").attr('selected','selected');
                        $("#material option[value=null]").attr('selected','selected');
                        $("input[type=checkbox]").prop("checked",false).checkboxradio();


                    }else{
                        //old
                        // console.log(result.data);
                        // // uncheck all checkbox
                        // $("input[type=checkbox]").attr("checked", false);

                        //new
                        console.log('In else result.data');
                        $("input[type=checkbox]").attr("checked", false);

                        result.data.solid == 1 ? $("input[name=solid]").attr("checked", "checked") : '';
                        result.data.modern == 1 ?$("input[name=modern]").attr("checked", "checked") : '';
                        result.data.massive == 1 ?$("input[name=massive]").attr("checked", "checked"): '';
                        result.data.regular == 1 ? $("input[name=regular]").attr("checked", "checked") : '';
                        result.data.random == 1 ?$("input[name=random]").attr("checked", "checked") : '';
                        result.data.simple == 1 ?$("input[name=simple]").attr("checked", "checked"): '';
                        result.data.busy == 1 ? $("input[name=busy]").attr("checked", "checked") : '';
                        result.data.inorganic == 1 ?$("input[name=inorganic]").attr("checked", "checked") : '';
                        result.data.organic == 1 ?$("input[name=organic]").attr("checked", "checked"): '';
                        result.data.dynamic == 1 ? $("input[name=dynamic]").attr("checked", "checked") : '';
                        result.data.delicate == 1 ?$("input[name=delicate]").attr("checked", "checked") : '';
                        result.data.soft == 1 ?$("input[name=soft]").attr("checked", "checked"): '';
                        result.data.flat == 1 ? $("input[name=flat]").attr("checked", "checked") : '';
                        result.data.light == 1 ?$("input[name=light]").attr("checked", "checked") : '';
                        result.data.postmodern == 1 ?$("input[name=postmodern]").attr("checked", "checked"): '';
                        result.data.craggy == 1 ? $("input[name=craggy]").attr("checked", "checked") : '';
                        result.data.classical == 1 ?$("input[name=classical]").attr("checked", "checked") : '';
                        result.data.luxury == 1 ?$("input[name=luxury]").attr("checked", "checked"): '';
                        result.data.cheap == 1 ?$("input[name=cheap]").attr("checked", "checked"): '';
                        result.data.transparent == 1 ? $("input[name=transparent]").attr("checked", "checked") : '';
                        result.data.speed == 1 ? $("input[name=speed]").attr("checked", "checked") : '';
                        $("select[name=geometry] option[value=" + result.data.geometry + "]").attr("selected", true);
                        $("select[name=material] option[value=" + result.data.material + "]").attr("selected", true);
                        $("textarea[name=other]").text(result.data.other);
                        result.data.like == 1 ?$("input[name=like]").attr("checked", "checked"): '';
                    }
                }
            });
        });
});
</script>


</html>
