@layout('home/application')

@section('content')

<div id="welcome" class="container-extend grey">

    <div class="container">
        <div class="hero-unit">
            <h1>UofTDev // Hello, world!</h1>
            <br>
            <p>
                We're the first student club of our kind in Canada,
                <br>
                and we're very excited for the coming year!
            </p>
            <br>
        </div>
    </div>

    <div id="ipad"><img src="/img/ipad-cropped.png"></div>

</div>

<div class="container-extend grey" style="padding-bottom: 53px;">

    <div class="container">
        <h1>Who Are We?</h1>

        <h4>University of Toronto Developers was founded by a group of students who are passionate about software, building apps, and spreading the knowledge.</h4>
        <a href='/about' class="btn btn-primary"> More info</a>
    </div>

</div>

<div class="container-extend grey">

    <div class="container">

        <h1>Check out what we're up to!</h1>

        <div id="myCarousel" class="carousel slide">

            <!-- Carousel items -->

            <div class="carousel-inner">
                <div class="active item"><img src="/img/1stDevTalk.jpg"></a>
                    <div class="carousel-caption">
                        <h4>Developers Talk</h4></a>
                        <p>Attendees mixing up in the 1st Developers Talk</p>
                    </div>
                </div>
                
                <div class="item"><img src="/img/BorisChanXtremeLabs.jpg"></a>
                    <div class="carousel-caption">
                        <h4>Developers Talk</h4></a>
                        <p>Boris Chan, Director of Engineering at Xtreme labs speaking at the 1st Developers Talk</p>
                    </div>
                </div>
                
                <div class="item"><img src="/img/ios_lecture.jpg">
                    <div class="carousel-caption">
                        <h4>iOS Lecture</h4>
                        <p>Francis Lata leads one of the iOS lectures</p>
                    </div>
                </div>

                <div class="item"><img src="/img/android_lecture.jpg">
                    <div class="carousel-caption">
                        <h4>Android Lecture</h4>
                        <p>Mohannad Abwah in mid-sentence</p>
                    </div>
                </div>

                <div class="item"><img src="/img/mg1.jpg">
                    <div class="carousel-caption">
                        <h4>Meet and Greet</h4>
                        <p>UofTDev president Emad Alaydi speaks at the meet and greet.</p>
                    </div>
                </div>
            </div>

            <!-- Carousel nav -->

            <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>

            <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>

        </div>

    </div>

</div>

@endsection
