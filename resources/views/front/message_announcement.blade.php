<div class="container page-5">

    <div class="row no-gutters">
        <h1 data-aos="fade-up">Message<br>Announcement</h1>
    </div>
    <div class="row justify-content-between Message-card no-gutters">
        @foreach ($messageAnnouncementsTake as $message)
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="message-card-box">
                <div class="tittle-box">
                    <h3>{{ $message->title }}</h3>
                    <h6>{{ $message->tag . ' ' . $message->format_date }}</h6>
                </div>
                <p>{{ $message->main_content }}</p>
                <button type="button" class="btn" data-toggle="modal" data-target="{{ '#message' . $message->id }}">Read More</button>
            </div>
        </div>
        @endforeach
    </div>
    <div class="row justify-content-center button-box">
        <button type="button" class="btn" data-toggle="modal" data-target="#MoreNews">More News</button>
    </div>
</div>

<!-- Modal-message-moreNews -->
<div class="modal fade MoreNews" id="MoreNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="main-content-box">
                <div class="main-content">
                    <div class="tittle">Message <br class="d-lg-none"> Announcement</div>
                    @foreach ($messageAnnouncements as $message)
                    <div class="content-box">
                        <div class="content col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            <div class="tittle-box">
                                <div class="tittle">{{ $message->title }}</div>
                                <div class="date">
                                    <p>{{ $message->tag }}</p>{{ $message->format_date }}
                                </div>
                            </div>
                            <p class="text-justify">{{ $message->main_content }}</p>
                        </div>
                        <div class="button-box col-xl-3 col-lg-3 col-md-12 col-sm-12 no-gutters">
                            <button type="button" class="btn" data-toggle="modal" data-target="{{ '#message' . $message->id }}">
                                <p>Read</p>
                                <p>More</p>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!-- Modal-Message-ReadMore -->
@foreach ($messageAnnouncements as $message)
<div class="modal fade MessageReadMore" id="{{ 'message' . $message->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="swiper-message-box">
                <div id="{{ 'messageSwiper' . $message->id }}" class="swiper-container swiper-message-container">
                    <div class="swiper-wrapper">
                        @foreach ($message->images as $image)
                        <div class="swiper-slide swiper-message-slide" style="background-image: url({{ $image->url }})"></div>
                        @endforeach
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination swiper-message-pagination"></div>
                </div>
            </div>
            <div class="modal-box">
                <div class="modal-header">
                <div class="title w-100">{{ $message->title }}</div>
                <div class="date d-none d-lg-block">
                    <p><span style="white-space:pre;">{{ $message->tag }}   {{ $message->format_date }}</span></p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="main-content-box">
                <div class="lineBox">
                    <div class="date d-lg-none">
                        <span class="info-bar">{{ $message->tag }}   {{ $message->format_date }}</span>
                    </div>
                    <div class="main-content">
                        <p class="message-content text-justify">{{ $message->main_content }}</p>
                    </div>
                </div>

                @foreach ($message->files as $file)
                    <div class="modal-bottom d-flex justify-content-between">
                        <div class="download-title">
                            {{ $file->name }}
                        </div>
                        <div class="button-box">
                            <button class="download-button" onclick="onMessageFileDownloadClick({{ $file->id }})">
                                Download
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>

        </div>
    </div>
</div>
@endforeach
<!-- Modal -->

@push('js')
<script>
    function onMessageFileDownloadClick(fileId) {
        location.href = `media_download/${fileId}`
    }

</script>
@endpush
