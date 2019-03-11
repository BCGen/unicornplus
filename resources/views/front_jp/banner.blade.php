<div id="page1" herf="#page1" class="page1">
  <div class="container navBar_jp">
    <nav class="row ustify-content-between navField_jp">
      <div class="line_jp borderLeft">
        <a href="#AboutUs">会社概要</a>
      </div>
      <div class="line_jp">
        <a href="#ClassIntroduction">クラス紹介</a>
      </div>
      <div class="line_jp">
        <a href="#AdmissionInstructions">入学説明</a>
      </div>
      <div class="line_jp">
        <a href="#MessageAnnouncement">メッセージの報告</a>
      </div>
      <div class="line_jp">
        <a href="#SchoolEnvironment">学校環境</a>
      </div>
      <div id="lastNav" class="line_jp borderRight">
      <a href="#ContactUs">お問い合わせ</a>
    </div>
    </nav>
    <div class="lanMenu_jp">
      <span class="arrow"><a href="/set_lang/en">English</a></span>
        </ul>
      </div>
  </div>

  <div class="aquaBG navContainer">
      <nav class="navbar aquaBG">
        <div class="UniCornlogo">Unicorn Kids International School</div>
          <button type="button" class="btn aquaBG" data-toggle="modal" data-target="#phoneModal">
              <div class="navbarIcon"></div>
          </button>
      </nav>

      <!-- Modal -->
    <div class="modal fade modal-open" id="phoneModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="aquaBG modal-content">
          <div class="text-right">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="xSign" aria-hidden="true">&times;</span>
            </button>
            <div class="modal_jp">
              <h4><a href="#AboutUs">会社概要</a></h4>
              <h4><a href="#ClassIntroduction">クラス紹介</a></h4>
              <h4><a href="#SchoolEnvironment">学校環境</a></h4>
              <h4><a href="#AdmissionInstructions">入学説明</a></h4>
              <h4><a href="#MessageAnnouncement">メッセージの報告</a></h4>
              <h4><a href="#ContactUs">お問い合わせ</a></h4>
              <h3><a href="/set_lang/en">English</a></h3>
              <h4>.</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="swiper-container swiper-banner-container">
      <div class="container bannerContainer">
          <div class="row justify-content-xl-center" data-aos="fade-down" data-aos-duration="3000">
              <img src="images/icon/logo.png" alt="Logo">
          </div>
          <h1 class="row justify-content-xl-center text-center forweb" data-aos="fade-down" data-aos-duration="3000">
              Unicorn Kids<br>International School
          </h1>
          <div class="arrow-down forweb" data-aos="fade-down" data-aos-duration="3000"></div>

          <h2 class="row justify-content-xl-center text-center forphone">
              Unicorn Kids<br>International School
        </h2>
        <div class="arrow-down forphone"></div>
      </div>
      <div class="color-block"></div>
      <div class="swiper-wrapper">
          @foreach ($banners as $banner)
              <div class="swiper-slide banner-swiper"
                   style="background-image: url({{  $banner->image_url }});">
              </div>
          @endforeach
      </div>
      <div class="swiper-pagination "></div>
      <div class="swiper-button-next swiper-button-white"></div>
      <div class="swiper-button-prev swiper-button-white"></div>
  </div>
</div>