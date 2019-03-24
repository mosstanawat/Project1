@extends('layouts.app')

<div class="container">
    <nav class="navbar navbar-light bg-light">
        <a class="navbar-brand" href="https://www.obayashi.co.jp/">
            <img src="assets/img/logo.svg" width="50" height="60" alt="">  Labelling Assistant
        </a>
        <div class="form-inline my-2 my-lg-0">
            User : <h5 id="username" >{{ $name }} </h5>&nbsp;&nbsp;
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
                                    <img class="mySlides" src="assets/img/000001.jpg" style="width:100%" id="000001">
                                    <img class="mySlides" src="assets/img/000002.jpg" style="width:100%" id="000002">
                                    <img class="mySlides" src="assets/img/000003.jpg" style="width:100%" id="000003">
                                    <img class="mySlides" src="assets/img/000004.jpg" style="width:100%" id="000004">
                                    <img class="mySlides" src="assets/img/000005.jpg" style="width:100%" id="000005">
                                    {{-- <img class="mySlides" src="assets/img/000006.jpg" style="width:100%" id="000006">
                                    <img class="mySlides" src="assets/img/000007.jpg" style="width:100%" id="000007">
                                    <img class="mySlides" src="assets/img/000008.jpg" style="width:100%" id="000008">
                                    <img class="mySlides" src="assets/img/000009.jpg" style="width:100%" id="000009">
                                    <img class="mySlides" src="assets/img/000010.jpg" style="width:100%" id="000010">
                                    <img class="mySlides" src="assets/img/000011.jpg" style="width:100%" id="000011">
                                    <img class="mySlides" src="assets/img/000012.jpg" style="width:100%" id="000012">
                                    <img class="mySlides" src="assets/img/000013.jpg" style="width:100%" id="000013">
                                    <img class="mySlides" src="assets/img/000014.jpg" style="width:100%" id="000014">
                                    <img class="mySlides" src="assets/img/000015.jpg" style="width:100%" id="000015">
                                    <img class="mySlides" src="assets/img/000016.jpg" style="width:100%" id="000016">
                                    <img class="mySlides" src="assets/img/000017.jpg" style="width:100%" id="000017">
                                    <img class="mySlides" src="assets/img/000018.jpg" style="width:100%" id="000018">
                                    <img class="mySlides" src="assets/img/000019.jpg" style="width:100%" id="000019">
                                    <img class="mySlides" src="assets/img/000020.jpg" style="width:100%" id="000020">
                                    <img class="mySlides" src="assets/img/000021.jpg" style="width:100%" id="000021">
                                    <img class="mySlides" src="assets/img/000022.jpg" style="width:100%" id="000022">
                                    <img class="mySlides" src="assets/img/000025.jpg" style="width:100%" id="000025">
                                    <img class="mySlides" src="assets/img/000026.jpg" style="width:100%" id="000026">
                                    <img class="mySlides" src="assets/img/000027.jpg" style="width:100%" id="000027">
                                    <img class="mySlides" src="assets/img/000028.jpg" style="width:100%" id="000028">
                                    <img class="mySlides" src="assets/img/000029.jpg" style="width:100%" id="000029">
                                    <img class="mySlides" src="assets/img/000033.jpg" style="width:100%" id="000033">
                                    <img class="mySlides" src="assets/img/000034.jpg" style="width:100%" id="000034">
                                    <img class="mySlides" src="assets/img/000035.jpg" style="width:100%" id="000035">
                                    <img class="mySlides" src="assets/img/000036.jpg" style="width:100%" id="000036">
                                    <img class="mySlides" src="assets/img/000037.jpg" style="width:100%" id="000037">
                                    <img class="mySlides" src="assets/img/000038.jpg" style="width:100%" id="000038">
                                    <img class="mySlides" src="assets/img/000039.jpg" style="width:100%" id="000039">
                                    <img class="mySlides" src="assets/img/000040.jpg" style="width:100%" id="000040">
                                    <img class="mySlides" src="assets/img/000041.jpg" style="width:100%" id="000041">
                                    <img class="mySlides" src="assets/img/000042.jpg" style="width:100%" id="000042">
                                    <img class="mySlides" src="assets/img/000043.jpg" style="width:100%" id="000043">
                                    <img class="mySlides" src="assets/img/000044.jpg" style="width:100%" id="000044">
                                    <img class="mySlides" src="assets/img/000045.jpg" style="width:100%" id="000045">
                                    <img class="mySlides" src="assets/img/000046.jpg" style="width:100%" id="000046">
                                    <img class="mySlides" src="assets/img/000047.jpg" style="width:100%" id="000047">
                                    <img class="mySlides" src="assets/img/000048.jpg" style="width:100%" id="000048">
                                    <img class="mySlides" src="assets/img/000049.jpg" style="width:100%" id="000049">
                                    <img class="mySlides" src="assets/img/000050.jpg" style="width:100%" id="000050">
                                    <img class="mySlides" src="assets/img/000052.jpg" style="width:100%" id="000052">
                                    <img class="mySlides" src="assets/img/000053.jpg" style="width:100%" id="000053">
                                    <img class="mySlides" src="assets/img/000054.jpg" style="width:100%" id="000054">
                                    <img class="mySlides" src="assets/img/000055.jpg" style="width:100%" id="000055">
                                    <img class="mySlides" src="assets/img/000056.jpg" style="width:100%" id="000056">
                                    <img class="mySlides" src="assets/img/000057.jpg" style="width:100%" id="000057">
                                    <img class="mySlides" src="assets/img/000058.jpg" style="width:100%" id="000058">
                                    <img class="mySlides" src="assets/img/000059.jpg" style="width:100%" id="000059">
                                    <img class="mySlides" src="assets/img/000060.jpg" style="width:100%" id="000060">
                                    <img class="mySlides" src="assets/img/000061.jpg" style="width:100%" id="000061">
                                    <img class="mySlides" src="assets/img/000062.jpg" style="width:100%" id="000062">
                                    <img class="mySlides" src="assets/img/000063.png" style="width:100%" id="000063">
                                    <img class="mySlides" src="assets/img/000064.jpg" style="width:100%" id="000064">
                                    <img class="mySlides" src="assets/img/000065.jpg" style="width:100%" id="000065">
                                    <img class="mySlides" src="assets/img/000066.jpg" style="width:100%" id="000066">
                                    <img class="mySlides" src="assets/img/000067.jpg" style="width:100%" id="000067">
                                    <img class="mySlides" src="assets/img/000068.jpg" style="width:100%" id="000068">
                                    <img class="mySlides" src="assets/img/000069.jpg" style="width:100%" id="000069">
                                    <img class="mySlides" src="assets/img/000070.jpg" style="width:100%" id="000070">
                                    <img class="mySlides" src="assets/img/000071.jpg" style="width:100%" id="000071">
                                    <img class="mySlides" src="assets/img/000072.jpg" style="width:100%" id="000072">
                                    <img class="mySlides" src="assets/img/000073.jpg" style="width:100%" id="000073">
                                    <img class="mySlides" src="assets/img/000074.jpg" style="width:100%" id="000074">
                                    <img class="mySlides" src="assets/img/000075.jpg" style="width:100%" id="000075">
                                    <img class="mySlides" src="assets/img/000076.jpg" style="width:100%" id="000076">
                                    <img class="mySlides" src="assets/img/000077.jpg" style="width:100%" id="000077">
                                    <img class="mySlides" src="assets/img/000078.jpg" style="width:100%" id="000078">
                                    <img class="mySlides" src="assets/img/000079.jpg" style="width:100%" id="000079">
                                    <img class="mySlides" src="assets/img/000080.jpg" style="width:100%" id="000080">
                                    <img class="mySlides" src="assets/img/000081.jpg" style="width:100%" id="000081">
                                    <img class="mySlides" src="assets/img/000082.jpg" style="width:100%" id="000082">
                                    <img class="mySlides" src="assets/img/000083.jpg" style="width:100%" id="000083">
                                    <img class="mySlides" src="assets/img/000084.jpg" style="width:100%" id="000084">
                                    <img class="mySlides" src="assets/img/000085.jpg" style="width:100%" id="000085">
                                    <img class="mySlides" src="assets/img/000086.jpg" style="width:100%" id="000086">
                                    <img class="mySlides" src="assets/img/000087.jpg" style="width:100%" id="000087">
                                    <img class="mySlides" src="assets/img/000088.jpg" style="width:100%" id="000088">
                                    <img class="mySlides" src="assets/img/000089.jpg" style="width:100%" id="000089">
                                    <img class="mySlides" src="assets/img/000090.jpg" style="width:100%" id="000090">
                                    <img class="mySlides" src="assets/img/000091.jpg" style="width:100%" id="000091">
                                    <img class="mySlides" src="assets/img/000092.jpg" style="width:100%" id="000092">
                                    <img class="mySlides" src="assets/img/000093.jpg" style="width:100%" id="000093">
                                    <img class="mySlides" src="assets/img/000094.jpg" style="width:100%" id="000094">
                                    <img class="mySlides" src="assets/img/000095.jpg" style="width:100%" id="000095">
                                    <img class="mySlides" src="assets/img/000096.jpg" style="width:100%" id="000096">
                                    <img class="mySlides" src="assets/img/000097.jpg" style="width:100%" id="000097">
                                    <img class="mySlides" src="assets/img/000098.jpg" style="width:100%" id="000098">
                                    <img class="mySlides" src="assets/img/000099.jpg" style="width:100%" id="000099">
                                    <img class="mySlides" src="assets/img/000100.jpg" style="width:100%" id="000100">
                                    <img class="mySlides" src="assets/img/000101.jpg" style="width:100%" id="000101">
                                    <img class="mySlides" src="assets/img/000102.jpg" style="width:100%" id="000102"> --}}

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
                    
                    <input hidden type="text" name="name" value="{{ $name }}">
                            
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

                    <div class="container">
                            <label for="other" id="other">Other: </label>
                            <textarea id="other" name="other" placeholder="Your comment.."></textarea><br>
                    </div>
                    <div class="container">
                            <div class="input-group-text">
                                    <style>
                                            .btn {
                                              background-color: red;
                                              border: none;
                                              color: white;
                                              padding: 12px 16px;
                                              font-size: 16px;
                                              cursor: pointer;
                                            }

                                            /* Darker background on mouse-over */
                                            .btn:hover {
                                              background-color: RoyalBlue;
                                            }
                                            </style>
                                            <button class="btn"><i class="fa fa-heart"></i></button>
                                            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

                                <input type="checkbox" class="chk" name="like" value="1">Like
                            </div><br><br>
                    </div>
                                @if (session('finish'))
                                <div class="alert alert-success">
                                    {{ session('finish') }}
                                </div>
                                @endif
                            <button type="submit" class="btn-submit btn btn-success btn-lg btn-block">Save</button>
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

