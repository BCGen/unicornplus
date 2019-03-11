<!-- Modal-Card-ReadMore -->
@foreach ($classCards as $classCard)
<div class="modal fade CardReadMore" id="{{ 'cardReadMoreModel' . $classCard->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="img-box" style="background-image: url({{ $classCard->image_url }})"></div>
            <div class="content-box">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="tittle">{{ $classCard->title }}</div>
                </div>

                <div class="main-content-box">
                    <div class="main-content">
                        <p class="message-content">{{ $classCard->main_content }}</p>
                    </div>
                </div>

                <div class="modal-bottom"></div>

                <div class="TimeLine row no-gutters">
                    <div class="TimeLineMarker col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2">
                        <div id="time-marker-{{ $classCard->id }}" class="marker"></div>
                    </div>
                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
                    <!-- *****卡片位置****** -->
                    <div class="time-box col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">
                        @foreach ((array) json_decode($classCard->classes) as $class)
                        <div class="row time no-gutters" onmouseover="mouseOver(this, {{ $classCard->id }})">
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1 TimeLineRope"></div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-2 TimeLineClock">{{ $class->time }}</div>
                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-1"></div>
                            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8 col-8 TimeLineText">{{ $class->main_content
                                }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endforeach
<!-- Modal -->


<div class="container-fluid page-3">
    <div class="row no-gutters">
        <div class="swiper-card-top-background"></div>
        <!-- Swiper -->
        <div class="swiper-container swiper-cards-container d-lg-block d-none">
            <div class="swiper-wrapper">
                @foreach ($classCards as $classCard)
                <div class="swiper-slide swiper-cards-slide">
                    <div class="swiper-card">
                        <div class="swiper-card-background" style="background-image: url({{ $classCard->image_url }})">
                        </div>

                        <div class="card-content">
                            <div>
                                <h2>{{ $classCard->title }}</h2>
                                <p class="main-content">{{ $classCard->main_content }}</p>
                            </div>

                            <button type="button" class="btn" data-toggle="modal" data-target="{{ '#cardReadMoreModel' . $classCard->id }}">
                                <p>Read More</p>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-cards-pagination"></div>
        </div>
        <!-- **********************cards-m******************* -->
        <div class="swiper-container m-cards-container d-lg-none d-block">
            <div class="swiper-wrapper">
                @foreach ($classCards as $classCard)
                <div class="swiper-slide m-cards-slide">
                    <div class="m-card">
                        <div class="m-card-background" style="background-image: url({{ $classCard->image_url }})"></div>
                        <div class="m-card-content">
                            <h2>{{ $classCard->title }}</h2>
                            <p class="m-main-content">{{ $classCard->main_content }}</p>
                            <button type="button" class="btn" data-toggle="modal" data-target="{{ '#cardReadMoreModel' . $classCard->id }}">
                                <p>Read More</p>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination m-cards-pagination"></div>
        </div>
        <!-- ******************cards-m********************* -->
    </div>
    <!-- *********************************** -->
    <div class="dynamictitle"></div>
    <div id="SchoolEnvironment" class="School">
        <div class="d-lg-block d-none">
            <div class="swiper-container swiper-school-img">

                <div class="swiper-wrapper">
                    @foreach ($schoolEnvironments as $environment)
                    <div class="swiper-slide swiper-school-slide">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 d-lg-block d-none"></div>
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 school-bg" style="background-image: url({{ $environment->image_url }})">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- -----------------色塊------------------ -->
                <div class=" opacity-box">
                    <div class="color-box">
                        <div class="color-box-yellow">
                            <div class="color-box-tittle">
                                <h1 data-aos="fade-up">School<br>Environment</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- -----------------色塊------------------ -->
            </div>
            <!-- -----------------內容swiper--------------------------------------------- -->
            <div class="swiper-container swiper-school-content">
                <div class="swiper-wrapper">
                    @foreach ($schoolEnvironments as $environment)
                    <div class="swiper-slide swiper-school-slide">
                        <div class="Environment">
                            <h4>{{ $environment->title }}</h4>
                            <p>{{ $environment->main_content }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-school-pagination"></div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>
            <!-- -----------------內容swiper--------------------------------------------- -->
        </div>
        <div class="d-lg-none d-block">
            <div class="swiper-container swiper-school-content-min">
                <div class="color-box-tittle-1">
                    <h1>School<br>Environment</h1>
                </div>
                <div class="swiper-wrapper">
                    @foreach ($schoolEnvironments as $environment)
                    <div class="swiper-slide swiper-school-slide">
                        <div class="color-box-tittle">
                            <h1>School<br>Environment</h1>
                        </div>
                        <div class="Environment">
                            <h4>{{ $environment->title }}</h4>
                            <p>{{ $environment->main_content }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-school-pagination"></div>
                <div class="swiper-button-next swiper-button-white"></div>
                <div class="swiper-button-prev swiper-button-white"></div>
            </div>

            <div class="swiper-container swiper-school-img-min">

                <div class="swiper-wrapper">
                    @foreach ($schoolEnvironments as $environment)
                    <div class="swiper-slide swiper-school-slide">
                        <div class="row no-gutters">
                            <div class="col-xl-4 col-lg-4 d-lg-block d-none"></div>
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 school-bg" style="background-image: url({{ $environment->image_url }})">
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- -----------------色塊------------------ -->
                <!-- <div class=" opacity-box">
                    <div class="color-box">
                        <div class="color-box-yellow">
                            <div class="color-box-tittle">
                                <h1 data-aos="fade-up">School<br>Environment</h1>
                            </div>
                        </div>
                    </div>
                </div> -->
                <!-- -----------------色塊------------------ -->
            </div>
        </div>
    </div>
</div>


@push('js')
<script>
    function mouseOver(element, cardId) {
        const markpoint = document.getElementById(`time-marker-${cardId}`)
        const offset = window.innerWidth < 577 ? 25 : 50;

        markpoint.style.top = element.offsetTop - offset + 'px'
    }

</script>
@endpush
