<div class="container page-5">

    <div class="row no-gutters">
        <h1 data-aos="fade-up">メッセージの報告</h1>
    </div>
    <div class="row justify-content-between Message-card no-gutters">
        @foreach ($messageAnnouncementsTake as $message)
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
            <div class="message-card-box_jp">
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
    <div class="row justify-content-center button-box button-box_jp">
        <button type="button" class="btn" data-toggle="modal" data-target="#MoreNews">もっと見る</button>
    </div>
</div>

<!-- Modal-message-moreNews -->
<div class="modal fade MoreNews" id="MoreNews" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close close_jp" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="main-content-box">
                <div class="main-content">
                    <div class="tittle">お知らせ</div>
                    @foreach ($messageAnnouncements as $message)
                    <div class="content-box"> 
                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
                            <div class="message-card-box_jp">
                                <div class="tittle-box">
                                     <h3>{{ $message->title }}</h3>
                                    <h6>{{ $message->tag . ' ' . $message->format_date }}</h6>
                                 </div>
                                 <p>{{ $message->main_content }}</p>
                             <button type="button" class="btn" data-toggle="modal" data-target="{{ '#message' . $message->id }}">Read More</button>
                            </div> 
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
                <div class="title title_jp w-100">{{ $message->title }}</div>
                <div class="date d-none d-lg-block">
                    <p><span style="white-space:pre;">{{ $message->tag }}   {{ $message->format_date }}</span></p>
                </div>
                <button type="button" class="close close_jp" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="main-content-box">
                <div class="lineBox">
                    <div class="date d-lg-none">
                        <span class="info-bar info-bar_jp">{{ $message->tag }}   {{ $message->format_date }}</span>
                    </div>
                    <div class="main-content">
                        <p class="message-content message-content_jp text-justify">{{ $message->main_content }}</p>
                    </div>
                </div>

                @foreach ($message->files as $file)
                    <div class="modal-bottom d-flex justify-content-between">
                        <div class="download-title download-title_jp">
                            {{ $file->name }}
                        </div>
                        <div class="button-box">
                            <button class="download-button_jp" onclick="onMessageFileDownloadClick({{ $file->id }})">
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
