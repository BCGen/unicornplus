<div id="AdmissionInstructions" class="page4BG">
    <div class="container">
        <div class="row title no-gutters">Admission<br />Instructions</div>
        <div class="row ER no-gutters">
            <div class="col-xl-4 col-lg-4 col-12">
                <div class="ERBtn text-center">
                    <div>Entry Requirements</div>
                </div>
            </div>
            <div class="textbox col-xl-8 col-lg-8 col-12">
                <div class="row no-gutters">
                    <div class="col-xl-1 col-1">
                        <div class="aquaCircle"></div>
                        <div class="aquaCircle"></div>

                    </div>
                    <div class="col-xl-11 col-11">
                        <div class="text">2-4years-old.</div>
                        <div class="text">
                            We welcome all non-English and non-Mandarin speakers.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="blankPad"></div>

    <!-- ********************************** -->

    <div class="propImgTop"></div>
    <div class="aquaBG">
        <div class="trees"></div>
        <div class="container">
            <div class="row w-100 justify-content-between no-gutters">
                <div class="col-12 col-lg-3">
                    <div class="contentBox">
                        <div class="N1 numberCircle mx-auto ">
                            <div class="number">1</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">Application Form</div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="contentBox">
                        <div class="N2 numberCircle mx-auto">
                            <div class="number">2</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">Interview</div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="contentBox">
                        <div class="N3 numberCircle mx-auto">
                            <div class="number">3</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">Results via email</div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="contentBox" id="aquaBG-last-contentBox">
                        <div class="numberCircle mx-auto N4">
                            <div class="number">4</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">Admission</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottomTrees"></div>
    </div>
    <div class="propImgBottom"></div>

    <!-- *********************************** -->
    <div class="container">
        <div class="row mgTop no-gutters">
            <div class="col-xl-5 col-lg-5 text-center formDownload">
                <div class="text-size">Form <br />Download</div>
            </div>
            <span></span>
            <div class="col-xl-4 col-lg-4 col-12 d-flex flex-column justify-content-between">
                @foreach ($formDownloadsTake as $file)
                <div class="lineHi">{{ $file->file_name }}</div>
                <div id="phoneLineHi" class="lineHi">{{ $file->file_name }}<div class="downloadIcon" onclick="onFormDownloadClick({{ $file->file_id }})"><img src="/images/icon/1080/download.png" alt=""></div></div>

                @endforeach
            </div>
            <div class="col-xl-1 col-lg-1 downLoadBTNs">
                @foreach ($formDownloadsTake as $file)
                <div class="btnBox">
                    <button class="aquaBTN btn" type="submit" onclick="onFormDownloadClick({{ $file->file_id }})">
                        Download
                    </button>
                </div>
                @endforeach
            </div>
        </div>
        <div class="moreFile">
            <!-- Button trigger modal -->
            <button type="button" class="btn moreBtn" data-toggle="modal" data-target="#moreFileModal">
                More Files
            </button>

            <!-- Modal -->
            <div class="modal fade modal-open" id="moreFileModal" tabindex="-1" role="dialog" aria-labelledby="moreFileModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title">Form Download</h5>
                            <div class="closeModalBtn">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                        <div class="hiddenScroll">
                            <div class="scrollContain">
                                @foreach ($formDownloads as $file)
                                <div class="downloadCard container">
                                    <div class="modal-body">
                                        {{ $file->file_name }}
                                    </div>
                                    <div class="btnBox">
                                        <button class="aquaBTN btn" onclick="onFormDownloadClick({{ $file->file_id }})" download>
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
        </div>

        <!-- ***********modal************ -->
    </div>
</div>

@push('js')
<script>
    function onFormDownloadClick(fileId) {
        location.href = `media_download/${fileId}`
    }
</script>
@endpush
