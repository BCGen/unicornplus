 <div id="page1" herf="#page1" class="page1">
    <div class="container navBar">
      <nav class="row justify-content-between pt-3">
        <a href="#AboutUs" class="hvr-underline-from-left">About Us</a>
        <a href="#ClassIntroduction" class="hvr-underline-from-left">Class Introduction</a>
        <a href="#AdmissionInstructions" class="hvr-underline-from-left">Admission Instructions</a>
        <a href="#MessageAnnouncement" class="hvr-underline-from-left">Message Announcement</a>
        <a href="#SchoolEnvironment" class="hvr-underline-from-left">School Environment</a>
        <a href="#ContactUs" class="hvr-underline-from-left">Contact Us</a>
      </nav>
      <div class="lanMenu">
        <span class="arrow"><a href="/set_lang/jp">日本語</a></span>
          </ul>
        </div>
    </div>

    <div class="aquaBG navContainer">
        <nav class="navbar aquaBG justify-content-end">
            <button type="button" class="btn aquaBG" data-toggle="modal" data-target="#phoneModal">
                <div class="navbarIcon"></div>
            </button>
        </nav>

        <!-- Modal -->
      <div class="modal fade modal-open" id="phoneModal" tabindex="-1" role="dialog"  aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="aquaBG modal-content">
            <div class="text-right">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="xSign" aria-hidden="true">&times;</span>
              </button>
              <div>
                <h4><a href="#AboutUs">About Us</a></h4>
                <h4><a href="#ClassIntroduction">Class Introduction</a></h4>
                <h4><a href="#AdmissionInstructions">Admission Instructions</a></h4>
                <h4><a href="#MessageAnnouncement">Message Announcement</a></h4>
                <h4><a href="#SchoolEnvironment">School Environment</a></h4>
                <h4><a href="#ContactUs">Contact Us</a></h4>
                <h3><a href="/set_lang/jp">日本語</a></h3>
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
