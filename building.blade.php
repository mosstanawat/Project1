@extends('layouts.app')
@section('content')
<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="https://www.obayashi.co.jp/">
            <img src="assets/img/logo.svg" width="50" height="60" alt="">  Labelling Assistant
        </a>
        <div class="form-inline my-2 my-lg-0">
            User :<h5 id="username" >{{ $name }} </h5>&nbsp;&nbsp;
            <a href="/" type="button" class="btn btn-danger">Logout</a>
        </div>
    </nav>

    <div class="row">
        <style>
            .row
            {
                margin-top: 10px;
            }
            .mySlides
            {
                display:none;
            }
        </style>
    {{-- ColumnLeft --}}
        <div class="col-lg">
                <div class="container">

                    <div class="card">
                        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                        <div class="w3-content w3-display-container" name="mySlides">
                                    <img class="mySlides" src="assets/img/0001.jpg" style="width:100%" id="0001">
                                    <img class="mySlides" src="assets/img/0002.jpg" style="width:100%" id="0002">
                                    <img class="mySlides" src="assets/img/0003.jpg" style="width:100%" id="0003">
                                    <img class="mySlides" src="assets/img/0004.jpg" style="width:100%" id="0004">
                                    <img class="mySlides" src="assets/img/0005.jpg" style="width:100%" id="0005">
                                    <img class="mySlides" src="assets/img/0006.jpg" style="width:100%" id="0006">
                                    <img class="mySlides" src="assets/img/0007.jpg" style="width:100%" id="0007">
                                    <img class="mySlides" src="assets/img/0008.jpg" style="width:100%" id="0008">
                                    <img class="mySlides" src="assets/img/0009.jpg" style="width:100%" id="0009">
                                    <img class="mySlides" src="assets/img/0010.jpg" style="width:100%" id="0010">
                                    <img class="mySlides" src="assets/img/0011.jpg" style="width:100%" id="0011">
                                    <img class="mySlides" src="assets/img/0012.jpg" style="width:100%" id="0012">
                                    <img class="mySlides" src="assets/img/0013.jpg" style="width:100%" id="0013">
                                    <img class="mySlides" src="assets/img/0014.jpg" style="width:100%" id="0014">
                                    <img class="mySlides" src="assets/img/0015.jpg" style="width:100%" id="0015">
                                    <img class="mySlides" src="assets/img/0016.jpg" style="width:100%" id="0016">
                                    <img class="mySlides" src="assets/img/0017.jpg" style="width:100%" id="0017">
                                    <img class="mySlides" src="assets/img/0018.jpg" style="width:100%" id="0018">
                                    <img class="mySlides" src="assets/img/0019.jpg" style="width:100%" id="0019">
                                    <img class="mySlides" src="assets/img/0020.jpg" style="width:100%" id="0020">
                                    <img class="mySlides" src="assets/img/0021.jpg" style="width:100%" id="0021">
                                    <img class="mySlides" src="assets/img/0022.jpg" style="width:100%" id="0022">
                                    <img class="mySlides" src="assets/img/0023.jpg" style="width:100%" id="0023">
                                    <img class="mySlides" src="assets/img/0024.jpg" style="width:100%" id="0024">
                                    <img class="mySlides" src="assets/img/0025.jpg" style="width:100%" id="0025">
                                    <img class="mySlides" src="assets/img/0026.jpg" style="width:100%" id="0026">
                                    <img class="mySlides" src="assets/img/0027.jpg" style="width:100%" id="0027">
                                    <img class="mySlides" src="assets/img/0028.jpg" style="width:100%" id="0028">
                                    <img class="mySlides" src="assets/img/0029.jpg" style="width:100%" id="0029">
                                    <img class="mySlides" src="assets/img/0030.jpg" style="width:100%" id="0030">
                                    <img class="mySlides" src="assets/img/0031.jpg" style="width:100%" id="0031">
                                    <img class="mySlides" src="assets/img/0032.jpg" style="width:100%" id="0032">
                                    <img class="mySlides" src="assets/img/0033.jpg" style="width:100%" id="0033">
                                    <img class="mySlides" src="assets/img/0034.jpg" style="width:100%" id="0034">
                                    <img class="mySlides" src="assets/img/0035.jpg" style="width:100%" id="0035">
                                    <img class="mySlides" src="assets/img/0036.jpg" style="width:100%" id="0036">
                                    <img class="mySlides" src="assets/img/0037.jpg" style="width:100%" id="0037">
                                    <img class="mySlides" src="assets/img/0038.jpg" style="width:100%" id="0038">
                                    <img class="mySlides" src="assets/img/0039.jpg" style="width:100%" id="0039">
                                    <img class="mySlides" src="assets/img/0040.jpg" style="width:100%" id="0040">
                                    <img class="mySlides" src="assets/img/0041.jpg" style="width:100%" id="0041">
                                    <img class="mySlides" src="assets/img/0042.jpg" style="width:100%" id="0042">
                                    <img class="mySlides" src="assets/img/0043.jpg" style="width:100%" id="0043">
                                    <img class="mySlides" src="assets/img/0044.jpg" style="width:100%" id="0044">
                                    <img class="mySlides" src="assets/img/0045.jpg" style="width:100%" id="0045">
                                    <img class="mySlides" src="assets/img/0046.jpg" style="width:100%" id="0046">
                                    <img class="mySlides" src="assets/img/0047.jpg" style="width:100%" id="0047">
                                    <img class="mySlides" src="assets/img/0048.jpg" style="width:100%" id="0048">
                                    <img class="mySlides" src="assets/img/0049.jpg" style="width:100%" id="0049">
                                    <img class="mySlides" src="assets/img/0050.jpg" style="width:100%" id="0050">
                                    <img class="mySlides" src="assets/img/0051.jpg" style="width:100%" id="0051">
                                    <img class="mySlides" src="assets/img/0052.jpg" style="width:100%" id="0052">
                                    <img class="mySlides" src="assets/img/0053.jpg" style="width:100%" id="0053">
                                    <img class="mySlides" src="assets/img/0054.jpg" style="width:100%" id="0054">
                                    <img class="mySlides" src="assets/img/0055.jpg" style="width:100%" id="0055">
                                    <img class="mySlides" src="assets/img/0056.jpg" style="width:100%" id="0056">
                                    <img class="mySlides" src="assets/img/0057.png" style="width:100%" id="0057">
                                    <img class="mySlides" src="assets/img/0058.jpg" style="width:100%" id="0058">
                                    <img class="mySlides" src="assets/img/0059.jpg" style="width:100%" id="0059">
                                    <img class="mySlides" src="assets/img/0060.jpg" style="width:100%" id="0060">
                                    <img class="mySlides" src="assets/img/0061.jpg" style="width:100%" id="0061">
                                    <img class="mySlides" src="assets/img/0062.jpg" style="width:100%" id="0062">
                                    <img class="mySlides" src="assets/img/0063.jpg" style="width:100%" id="0063">
                                    <img class="mySlides" src="assets/img/0064.jpg" style="width:100%" id="0064">
                                    <img class="mySlides" src="assets/img/0065.jpg" style="width:100%" id="0065">
                                    <img class="mySlides" src="assets/img/0066.jpg" style="width:100%" id="0066">
                                    <img class="mySlides" src="assets/img/0067.jpg" style="width:100%" id="0067">
                                    <img class="mySlides" src="assets/img/0068.jpg" style="width:100%" id="0068">
                                    <img class="mySlides" src="assets/img/0069.jpg" style="width:100%" id="0069">
                                    <img class="mySlides" src="assets/img/0070.jpg" style="width:100%" id="0070">
                                    <img class="mySlides" src="assets/img/0071.jpg" style="width:100%" id="0071">
                                    <img class="mySlides" src="assets/img/0072.jpg" style="width:100%" id="0072">
                                    <img class="mySlides" src="assets/img/0073.jpg" style="width:100%" id="0073">
                                    <img class="mySlides" src="assets/img/0074.jpg" style="width:100%" id="0074">
                                    <img class="mySlides" src="assets/img/0075.jpg" style="width:100%" id="0075">
                                    <img class="mySlides" src="assets/img/0076.jpg" style="width:100%" id="0076">
                                    <img class="mySlides" src="assets/img/0077.jpg" style="width:100%" id="0077">
                                    <img class="mySlides" src="assets/img/0078.jpg" style="width:100%" id="0078">
                                    <img class="mySlides" src="assets/img/0079.jpg" style="width:100%" id="0079">
                                    <img class="mySlides" src="assets/img/0080.jpg" style="width:100%" id="0080">
                                    <img class="mySlides" src="assets/img/0081.jpg" style="width:100%" id="0081">
                                    <img class="mySlides" src="assets/img/0082.jpg" style="width:100%" id="0082">
                                    <img class="mySlides" src="assets/img/0083.jpg" style="width:100%" id="0083">
                                    <img class="mySlides" src="assets/img/0084.jpg" style="width:100%" id="0084">
                                    <img class="mySlides" src="assets/img/0085.jpg" style="width:100%" id="0085">
                                    <img class="mySlides" src="assets/img/0086.jpg" style="width:100%" id="0086">
                                    <img class="mySlides" src="assets/img/0087.jpg" style="width:100%" id="0087">
                                    <img class="mySlides" src="assets/img/0088.jpg" style="width:100%" id="0088">
                                    <img class="mySlides" src="assets/img/0089.jpg" style="width:100%" id="0089">
                                    <img class="mySlides" src="assets/img/0090.jpg" style="width:100%" id="0090">
                                    <img class="mySlides" src="assets/img/0091.jpg" style="width:100%" id="0091">
                                    <img class="mySlides" src="assets/img/0092.jpg" style="width:100%" id="0092">
                                    <img class="mySlides" src="assets/img/0093.jpg" style="width:100%" id="0093">
                                    <img class="mySlides" src="assets/img/0094.jpg" style="width:100%" id="0094">
                                    <img class="mySlides" src="assets/img/0095.jpg" style="width:100%" id="0095">
                                    <img class="mySlides" src="assets/img/0096.jpg" style="width:100%" id="0096">
                                    {{-- slide button --}}
                                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                                </div>
                        </div>
                </div>
        </div>

    {{-- ColumnRight --}}
        <div class="col-lg">
            <div class="container">
                <div class="card">
                    {{-- method="POST" action="{{ route('building.store') }}" --}}
                    <form method="POST">
                            {{ csrf_field() }}
                <div class="container">
                    <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="regular" value="1">規則的な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="random" value="1">不規則な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="simple" value="1">単純な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="busy" value="1">複雑な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="inorganic" value="1">無機質な
                                </div>
                            </div>
                    </div>

                    <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="organic" value="1">有機的な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="dynamic" value="1">繊細な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="delicate" value="1">大胆な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="solid" value="1">かたい
                                </div>
                                <div class="input-group-text">
                                        <input type="checkbox" class="chk" name="soft" value="1">やわらかい
                                </div>
                            </div>
                    </div>

                    <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="flat" value="1">フラットな
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="light" value="1">軽快な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="modern" value="1">近代的
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="massive" value="1">重厚な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="postmodern" value="1">現代的
                                </div>
                            </div>
                    </div>

                    <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="craggy" value="1">彫りが深い
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="classical" value="1">歴史的
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="luxury" value="1">高級な
                                </div>
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="cheap" value="1">安い
                                </div>
                                <div class="input-group-text">
                                        <input type="checkbox" class="chk" name="transparent" value="1">透明感
                                </div>
                            </div>
                    </div>

                    <div class="input-group mb-1">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="checkbox" class="chk" name="speed" value="1">スピード感
                                </div>
                            </div>
                    </div>
                </div>
                    <input hidden type="text" name="name" value="{{ $name }}">
                <div class="container">
                    <div class="choose">
                    <label for="geometry">Geometry: </label>
                            <select id="geometry" name="geometry">
                                <option value="null">------Select------</option>
                                <option value="vertical">Vertical</option>
                                <option value="horizontal">Horizontal</option>
                                <option value="frame">Frame</option>
                                <option value="gridordiagonal">Grid or diagonal</option>
                                <option value="curveorwave">Curve or Wave</option>
                                <option value="ornamental">Ornamental</option>
                                <option value="boxy">Boxy</option>
                                <option value="steplike">Step-like</option>
                            </select>

                    <label for="material">Material: </label>
                            <select id="material" name="material">
                                <option value="null">------Select------</option>
                                <option value="glass">Glass</option>
                                <option value="stone">Stone</option>
                                <option value="tileorbrick">Tile or Brick</option>
                                <option value="metal">Metal</option>
                                <option value="concrete">Concrete</option>
                                <option value="wood">Wood</option>
                            </select>
                    </div>
                </div>

                    <div class="container">
                            <label for="other1" id="other1">Other: </label>
                            <textarea id="other" name="other" placeholder="Your comment.."></textarea><br>
                    </div>
                    <div class="container">
                            <div class="input-group-text">
                                <input type="checkbox" class="chk" name="like" value="1">Like&nbsp;<img src="assets/img/like.png" width="20" height="20" alt="">
                            </div><br><br>
                    </div>
                                {{-- @if (session('finish'))
                                <div class="alert alert-success">
                                    {{ session('finish') }}
                                </div>
                                @endif --}}
                    <div class="container">
                            <button type="submit" class="btn-submit btn btn-success btn-lg btn-block">Save</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous">
</script>
<script type="text/javascript">
    // set image to current page
    var currentImage = {!! json_encode($currentImage , JSON_HEX_TAG) !!};
    console.log('current Image ' + currentImage);
    var slideIndex = currentImage;
    showDivs(currentImage);
    function plusDivs(n)
    {
        showDivs(slideIndex += n);
    }
    function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        console.log("x : " +x.length);
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
        console.log("slide Index: " +slideIndex);
    }
    // get continue data from laravel
    var dataImage = {!! json_encode($dataImage, JSON_HEX_TAG) !!};
    if(dataImage != null){
        console.log(dataImage);
        $("input[type=checkbox]").attr("checked", false);

        dataImage.solid == 1 ? $("input[name=solid]").attr("checked", "checked") : '';
        dataImage.modern == 1 ?$("input[name=modern]").attr("checked", "checked") : '';
        dataImage.massive == 1 ?$("input[name=massive]").attr("checked", "checked"): '';
        dataImage.regular == 1 ? $("input[name=regular]").attr("checked", "checked") : '';
        dataImage.random == 1 ?$("input[name=random]").attr("checked", "checked") : '';
        dataImage.simple == 1 ?$("input[name=simple]").attr("checked", "checked"): '';
        dataImage.busy == 1 ? $("input[name=busy]").attr("checked", "checked") : '';
        dataImage.inorganic == 1 ?$("input[name=inorganic]").attr("checked", "checked") : '';
        dataImage.organic == 1 ?$("input[name=organic]").attr("checked", "checked"): '';
        dataImage.dynamic == 1 ? $("input[name=dynamic]").attr("checked", "checked") : '';
        dataImage.delicate == 1 ?$("input[name=delicate]").attr("checked", "checked") : '';
        dataImage.soft == 1 ?$("input[name=soft]").attr("checked", "checked"): '';
        dataImage.flat == 1 ? $("input[name=flat]").attr("checked", "checked") : '';
        dataImage.light == 1 ?$("input[name=light]").attr("checked", "checked") : '';
        dataImage.postmodern == 1 ?$("input[name=postmodern]").attr("checked", "checked"): '';
        dataImage.craggy == 1 ? $("input[name=craggy]").attr("checked", "checked") : '';
        dataImage.classical == 1 ?$("input[name=classical]").attr("checked", "checked") : '';
        dataImage.luxury == 1 ?$("input[name=luxury]").attr("checked", "checked"): '';
        dataImage.cheap == 1 ?$("input[name=cheap]").attr("checked", "checked"): '';
        dataImage.transparent == 1 ? $("input[name=transparent]").attr("checked", "checked") : '';
        dataImage.speed == 1 ? $("input[name=speed]").attr("checked", "checked") : '';
        $("select[name=geometry] option[value=" + dataImage.geometry + "]").attr("selected", true);
        $("select[name=material] option[value=" + dataImage.material + "]").attr("selected", true);
        $("textarea[name=other]").text(dataImage.other);
        dataImage.like == 1 ?$("input[name=like]").attr("checked", "checked"): '';
    }
</script>
@endsection
