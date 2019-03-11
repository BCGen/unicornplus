<div id="AdmissionInstructions" class="page4BG">
    <div class="container">
        <div class="row title title_jp no-gutters">入学説明
            <div class="trees_jp"></div>
        </div>
        
        <div class="row ER ER_jp no-gutters">
            <div class="col-xl-3 col-lg-3 col-12 ERframe_jp">
                <div class="ERBtn_jp text-center">
                    応募要項
                </div>
            </div>
            
            <div class="textbox col-xl-9 col-lg-10 col-12">
                <div class="phonecontainer_jp">
                <div class="row no-gutters">
                    <div class="col-xl-1 col-1">
                        <div class="aquaCircle_jp"></div>
                        <div class="aquaCircle_jp"></div>

                    </div>
                    <div class="col-xl-11 col-11">
                        <div class="text_jp">2～4歳。</div>
                        <div class="text_jp">
                        当校は全ての英語非母国者および標準中国語非母国者を歓迎いたします。
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <span class="blankPad"></span>
        </div>
    </div>

    <!-- ********************************** -->

    <div class="propImgTop"></div>
    <div class="aquaBG">
        <div class="grass"></div>
        <div class="container">
            <div class="row w-100 justify-content-between no-gutters">
                <div class="col-12 col-lg-3">
                    <div class="contentBox">
                        <div class="N1_jp numberCircle mx-auto ">
                            <div class="number">1</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">申込書</div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="contentBox">
                        <div class="N2_jp numberCircle mx-auto">
                            <div class="number">2</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">面接</div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="contentBox">
                        <div class="N3_jp numberCircle mx-auto">
                            <div class="number">3</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">Eメールによる結果</div>
                    </div>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="contentBox" id="aquaBG-last-contentBox">
                        <div class="numberCircle mx-auto N4_jp">
                            <div class="number">4</div>
                        </div>
                        <div class="division"></div>
                        <div class="stepText">入学許可</div>
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
            <div class="text-center formDownload_jp">
                <div class="text-size">フォームを<br>ダウンロード</div>
            </div>
            <span class="line_jp"></span>
            <div class="Mg_jp col-xl-4 col-lg-9 col-12 d-flex flex-column justify-content-around">
                @foreach ($formDownloadsTake as $file)
                <div class="lineHi_jp">{{ $file->file_name }}</div>
                <div id="phoneLineHi" class="lineHi_jp">{{ $file->file_name }}<div class="downloadIcon" onclick="onFormDownloadClick({{ $file->file_id }})"><img src="/images/icon/1080/download.png" alt=""></div></div>

                @endforeach
            </div>
            <div class="col-xl-1 col-lg-3 downLoadBTNs_jp">
                @foreach ($formDownloadsTake as $file)
                <div class="btnBox">
                    <button class="aquaBTN btn" type="submit" onclick="onFormDownloadClick({{ $file->file_id }})">
                        Download
                    </button>
                </div>
                @endforeach
            </div>
        </div>
        <div class="moreFile_jp">
            <!-- Button trigger modal -->
            <button type="button" class="btn moreBtn_jp" data-toggle="modal" data-target="#moreFileModal">
            ファイルをもっと見る
            </button>
            <button type="button" class="btn moreBtnPhone_jp" data-toggle="modal" data-target="#moreFileModal">
                    もっと見る
                    </button>

            <!-- Modal -->
            <div class="modal fade modal-open" id="moreFileModal" tabindex="-1" role="dialog" aria-labelledby="moreFileModal" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header text-center">
                            <h5 class="modal-title">フォームを<br>ダウンロード</h5>
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
