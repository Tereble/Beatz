@extends('layouts.main')
    @include('partial.menu')

    <div class="head">

    @include('partial.header')


        <div class="head-text">
            <h2 style="color: #06E2F1;">Beatzz By</h2>
            <h2 style="color: #F9FF30;">Izzy</h2>
        </div>

        <div class="social-head">
            <a class="social" href="https://open.spotify.com/artist/4r62Cf6EamelylLtM47HQZ?si=cljZFctLTs2pw-S9DFDE8Q">
                <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="white" fill-rule="evenodd" clip-rule="evenodd"><path d="M19.098 10.638c-3.868-2.297-10.248-2.508-13.941-1.387-.593.18-1.22-.155-1.399-.748-.18-.593.154-1.22.748-1.4 4.239-1.287 11.285-1.038 15.738 1.605.533.317.708 1.005.392 1.538-.316.533-1.005.709-1.538.392zm-.126 3.403c-.272.44-.847.578-1.287.308-3.225-1.982-8.142-2.557-11.958-1.399-.494.15-1.017-.129-1.167-.623-.149-.495.13-1.016.624-1.167 4.358-1.322 9.776-.682 13.48 1.595.44.27.578.847.308 1.286zm-1.469 3.267c-.215.354-.676.465-1.028.249-2.818-1.722-6.365-2.111-10.542-1.157-.402.092-.803-.16-.895-.562-.092-.403.159-.804.562-.896 4.571-1.045 8.492-.595 11.655 1.338.353.215.464.676.248 1.028zm-5.503-17.308c-6.627 0-12 5.373-12 12 0 6.628 5.373 12 12 12 6.628 0 12-5.372 12-12 0-6.627-5.372-12-12-12z"/></svg>
                <p>Spotify</p>
            </a>

            <a class="social" href="https://www.boomplay.com/share/artist/64043191?srModel=COPYLINK&srList=IOS">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                    <circle cx="24" cy="24" r="20"></circle><linearGradient id="w_sXz0MvkHDPtn-5F9Xlua_UwU9lrtosej6_gr1" x1="8.848" x2="39.152" y1="32.748" y2="15.252" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#05509b"></stop><stop offset=".271" stop-color="#0083de"></stop><stop offset=".877" stop-color="#5fd2b0"></stop></linearGradient><path fill="url(#w_sXz0MvkHDPtn-5F9Xlua_UwU9lrtosej6_gr1)" d="M24,6.5C14.351,6.5,6.5,14.351,6.5,24S14.351,41.5,24,41.5S41.5,33.649,41.5,24 S33.649,6.5,24,6.5z M24,39.5c-8.547,0-15.5-6.953-15.5-15.5S15.453,8.5,24,8.5S39.5,15.453,39.5,24S32.547,39.5,24,39.5z"></path><linearGradient id="w_sXz0MvkHDPtn-5F9Xlub_UwU9lrtosej6_gr2" x1="12.796" x2="32.364" y1="28.528" y2="17.23" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#05509b"></stop><stop offset=".271" stop-color="#0083de"></stop><stop offset=".877" stop-color="#5fd2b0"></stop></linearGradient><path fill="url(#w_sXz0MvkHDPtn-5F9Xlub_UwU9lrtosej6_gr2)" d="M26.663,12.004h-4.712c-0.875-0.058-1.657,0.545-1.831,1.411l-0.472,1.594h4.122 c0.903-0.086,2.059,0.408,2.703,1.706c0.724,1.443,0.453,2.762-0.506,3.25c-0.958,0.488-2.236-0.043-2.96-1.48 c-0.479-0.965-0.571-1.832-0.14-2.546h-3.402l-2.468,8.087h5.193c1.129,0,2.729,0.594,3.591,2.278 c0.969,1.893,0.74,3.62-0.532,4.291c-1.272,0.67-3.061,0-4.03-1.899c-0.735-1.432-0.609-2.936-0.188-3.727h-4.259 c0,0-1.601,5.652-1.627,5.856c-0.072,0.294-0.122,0.594-0.149,0.896c0,1.259,1.013,2.279,2.263,2.279h0.532h2.96 c4.525-0.241,7.485-2.376,8.907-6.355c0.625-3.014-0.44-4.802-3.194-5.363c0,0,3.516-1.263,4.435-4.87 C31.401,14.236,30.06,12.243,26.663,12.004z"></path>
                    </svg>
                <p>Boomplay</p>
            </a>
        </div>

        <div class="store-btn">
            <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="white"><path d="M816-504v287.64q0 29.85-21.15 51.1Q773.7-144 744-144H216q-29.7 0-50.85-21.5Q144-187 144-216v-289q-33-23-41.5-59t.5-76l46-128q5-24 23-36t43.67-12h528.66q25.67 0 43.17 11t23.5 37l46 128q9 40 0 76t-41 60Zm-248-48q21 0 35.5-14t12.5-34l-24-144h-72v143.62Q520-580 534-566q14 14 34 14Zm-176.5 0q20.5 0 34.5-14t14-34.38V-744h-72l-24 144q-2 20 12.5 34t35 14ZM216-552q18 0 31.5-11t15.5-28l25-153h-72l-45 128q-8 23 6 43.5t39 20.5Zm528 0q25 0 39.5-20.5T790-616l-46-128h-72l25 153q2 17 16 28t31 11ZM216-216h528v-264q-25 0-47.5-9.5T656-519q-18 20-40.36 29.5T568-480q-25.18 0-47.09-10Q499-500 480-519q-17 19-40 29t-48 10q-25 0-47-8.5T304-519q-22.02 21.55-43.51 30.28Q239-480 216-480v264Zm528 0H216h.5-.71 528.28H743h1Z"/></svg>
                    <p>Beats Store</p>
            
            </a>
        </div>
        


    </div>
    
    

   <div class="swiper-container">
    <h2 class="title">Playlists</h2>
  <div class="swiper-wrapper">
    <div class="swiper-slide" data-audio="track1.mp3">
      <div class="track-artwork" style="background-image: url('{{ asset('/assets/img/play.jpg') }}');">
      <div class="track-con">
        <p class="track-title">Track 1</p>
        <p class="track-artist">Artist 1</p>
      </div>
      </div>
      
    </div>
    <div class="swiper-slide" data-audio="track2.mp3">
      <div class="track-artwork" style="background-image: url('{{ asset('/assets/img/Play-2.jpg') }}');">
        <div class="track-con">
          <p class="track-title">Track 2</p>
          <p class="track-artist">Artist 2</p>
        </div>
      </div>
      
    </div>
    <div class="swiper-slide" data-audio="track2.mp3">
      <div class="track-artwork" style="background-image: url('{{ asset('/assets/img/play-3.jpg') }}');"></div>
      <p class="track-title">Track 3</p>
      <p class="track-artist">Artist 3</p>
    </div>
    <div class="swiper-slide" data-audio="track1.mp3">
      <div class="track-artwork" style="background-image: url('{{ asset('/assets/img/play.jpg') }}');"></div>
      <p class="track-title">Track 4</p>
      <p class="track-artist">Artist 4</p>
    </div>
    <div class="swiper-slide" data-audio="track2.mp3">
      <div class="track-artwork" style="background-image: url('{{ asset('/assets/img/Play-2.jpg') }}');"></div>
      <p class="track-title">Track 2</p>
      <p class="track-artist">Artist 2</p>
    </div>
    <!-- Add more slides -->
  </div>
  {{-- <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div> --}}
  <div class="swiper-pagination"></div>
</div>

<div class="ms_weekly_wrapper">
  <div class="ms_weekly_inner">
      <div class="row m-4">
          <div class="col-lg-12">
              <div class="ms_heading">
                  <h1>weekly top 15</h1>
              </div>
          </div>
          <div class="col-lg-4 col-md-12 padding_right40">
              <div class="ms_weekly_box">
                  <div class="weekly_left">
                      <span class="w_top_no">
      01
    </span>
                      <div class="w_top_song">
                          <div class="w_tp_song_img">
                              <img src="assets/images/weekly/song1.jpg" alt="" class="img-fluid">
                              <div class="ms_song_overlay">
                              </div>
                              <div class="ms_play_icon">
                                  <img src="assets/images/svg/play.svg" alt="">
                              </div>
                          </div>
                          <div class="w_tp_song_name">
                              <h3><a href="#">Until I Met You</a></h3>
                              <p>Ava Cornish</p>
                          </div>
                      </div>
                  </div>
                  <div class="weekly_right">
                      <span class="w_song_time">5:10</span>
                      <span class="ms_more_icon" data-other="1">
      <img src="assets/images/svg/more.svg" alt="">									
    </span>
                  </div>
                  <ul class="more_option">
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                  </ul>
              </div>
              <div class="ms_divider"></div>
              <div class="ms_weekly_box">
                  <div class="weekly_left">
                      <span class="w_top_no">
      02
    </span>
                      <div class="w_top_song">
                          <div class="w_tp_song_img">
                              <img src="assets/images/weekly/song2.jpg" alt="" class="img-fluid">
                              <div class="ms_song_overlay">
                              </div>
                              <div class="ms_play_icon">
                                  <img src="assets/images/svg/play.svg" alt="">
                              </div>
                          </div>
                          <div class="w_tp_song_name">
                              <h3><a href="#">Walking Promises</a></h3>
                              <p>Ava Cornish</p>
                          </div>
                      </div>
                  </div>
                  <div class="weekly_right">
                      <span class="w_song_time">5:10</span>
                      <span class="ms_more_icon" data-other="1">
      <img src="assets/images/svg/more.svg" alt="">									
    </span>
                  </div>
                  <ul class="more_option">
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                  </ul>
              </div>
              <div class="ms_divider"></div>
              <div class="ms_weekly_box">
                  <div class="weekly_left">
                      <span class="w_top_no">
      03
    </span>
                      <div class="w_top_song">
                          <div class="w_tp_song_img">
                              <img src="assets/images/weekly/song3.jpg" alt="" class="img-fluid">
                              <div class="ms_song_overlay">
                              </div>
                              <div class="ms_play_icon">
                                  <img src="assets/images/svg/play.svg" alt="">
                              </div>
                          </div>
                          <div class="w_tp_song_name">
                              <h3><a href="#">Gimme Some Courage</a></h3>
                              <p>Ava Cornish</p>
                          </div>
                      </div>
                  </div>
                  <div class="weekly_right">
                      <span class="w_song_time">5:10</span>
                      <span class="ms_more_icon" data-other="1">
      <img src="assets/images/svg/more.svg" alt="">									
    </span>
                  </div>
                  <ul class="more_option">
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                  </ul>
              </div>
              <div class="ms_divider"></div>
              <div class="ms_weekly_box">
                  <div class="weekly_left">
                      <span class="w_top_no">
      04
    </span>
                      <div class="w_top_song">
                          <div class="w_tp_song_img">
                              <img src="assets/images/weekly/song4.jpg" alt="" class="img-fluid">
                              <div class="ms_song_overlay">
                              </div>
                              <div class="ms_play_icon">
                                  <img src="assets/images/svg/play.svg" alt="">
                              </div>
                          </div>
                          <div class="w_tp_song_name">
                              <h3><a href="#">Desired Games</a></h3>
                              <p>Ava Cornish</p>
                          </div>
                      </div>
                  </div>
                  <div class="weekly_right">
                      <span class="w_song_time">5:10</span>
                      <span class="ms_more_icon" data-other="1">
      <img src="assets/images/svg/more.svg" alt="">									
    </span>
                  </div>
                  <ul class="more_option">
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                  </ul>
              </div>
              <div class="ms_divider"></div>
              <div class="ms_weekly_box">
                  <div class="weekly_left">
                      <span class="w_top_no">
      05
    </span>
                      <div class="w_top_song">
                          <div class="w_tp_song_img">
                              <img src="assets/images/weekly/song5.jpg" alt="" class="img-fluid">
                              <div class="ms_song_overlay">
                              </div>
                              <div class="ms_play_icon">
                                  <img src="assets/images/svg/play.svg" alt="">
                              </div>
                          </div>
                          <div class="w_tp_song_name">
                              <h3><a href="#">Dark Alley Acoustic</a></h3>
                              <p>Ava Cornish</p>
                          </div>
                      </div>
                  </div>
                  <div class="weekly_right">
                      <span class="w_song_time">5:10</span>
                      <span class="ms_more_icon" data-other="1">
      <img src="assets/images/svg/more.svg" alt="">									
    </span>
                  </div>
                  <ul class="more_option">
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                  </ul>
              </div>
          </div>
          <div class="col-lg-4 col-md-12 padding_right40">
              <div class="ms_weekly_box">
                  <div class="weekly_left">
                      <span class="w_top_no">
      06
    </span>
                      <div class="w_top_song">
                          <div class="w_tp_song_img">
                              <img src="assets/images/weekly/song6.jpg" alt="" class="img-fluid">
                              <div class="ms_song_overlay">
                              </div>
                              <div class="ms_play_icon">
                                  <img src="assets/images/svg/play.svg" alt="">
                              </div>
                          </div>
                          <div class="w_tp_song_name">
                              <h3><a href="#">Walking Promises</a></h3>
                              <p>Ava Cornish</p>
                          </div>
                      </div>
                  </div>
                  <div class="weekly_right">
                      <span class="w_song_time">5:10</span>
                      <span class="ms_more_icon" data-other="1">
      <img src="assets/images/svg/more.svg" alt="">									
    </span>
                  </div>
                  <ul class="more_option">
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_fav"></span></span>Add To Favourites</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_queue"></span></span>Add To Queue</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_dwn"></span></span>Download Now</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_playlst"></span></span>Add To Playlist</a></li>
                      <li><a href="#"><span class="opt_icon"><span class="icon icon_share"></span></span>Share</a></li>
                  </ul>
              </div>
            
             
          </div>
      </div>
  </div>
</div>


  <div class="product-grid">
  
    <div class="card">
      <div class="product-disc">
        <div class="product-discount"><span class="">hip-hop</span></div>
        <a href="#" class="single-cart">
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff"><path d="M444-576v-132H312v-72h132v-132h72v132h132v72H516v132h-72ZM263.79-96Q234-96 213-117.21t-21-51Q192-198 213.21-219t51-21Q294-240 315-218.79t21 51Q336-138 314.79-117t-51 21Zm432 0Q666-96 645-117.21t-21-51Q624-198 645.21-219t51-21Q726-240 747-218.79t21 51Q768-138 746.79-117t-51 21ZM48-792v-72h133l155 360h301l113-264h78L703-476q-9 20-26.5 32T637-432H317l-42 72h493v72H276q-42 0-63-36.5t0-71.5l52-90-131-306H48Z"/></svg>

          </a>
      </div>
      <img src="assets/images/products/01.png" class="card-img-top" alt="...">
      
      <div class="card-body flex flex-col gap-x-1.5">
        <p class="card-title cursor-pointer text-white">Classic beat</p>
        <div class="clearfix flex justify-between align-center text-white">
          {{-- <p class="mb-0 float-start"><strong>134</strong></p> --}}
          <div class="price flex items-center">
            <p class="mb-0 float-end fw-bold "><span style=" color: #16a34a; font-size:18px">{{ $settings->currency }}350</span></p>
          </div>
          <div class="play-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="45px" fill="#fff"><path class="path" d="m384-312 264-168-264-168v336ZM168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm0-72h624v-432H168v432Zm0 0v-432 432Z"/></svg>
          </div>
        </div>
        <div class="d-flex align-items-center mt-3 flex-row">
          <div class="cursor-pointer d-flex align-items-center">
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-light-4'></i>
            <i class='bx bxs-star text-light-4'></i>
            </div>	
          <p class="mb-0 ms-auto">4.2(182)</p>
        </div>
      </div>
    
    </div>
  
    <div class="card">
      <div class="product-disc">
        <div class="product-discount"><span class="">hip-hop</span></div>
        <a href="#" class="single-cart">
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff"><path d="M444-576v-132H312v-72h132v-132h72v132h132v72H516v132h-72ZM263.79-96Q234-96 213-117.21t-21-51Q192-198 213.21-219t51-21Q294-240 315-218.79t21 51Q336-138 314.79-117t-51 21Zm432 0Q666-96 645-117.21t-21-51Q624-198 645.21-219t51-21Q726-240 747-218.79t21 51Q768-138 746.79-117t-51 21ZM48-792v-72h133l155 360h301l113-264h78L703-476q-9 20-26.5 32T637-432H317l-42 72h493v72H276q-42 0-63-36.5t0-71.5l52-90-131-306H48Z"/></svg>

          </a>
      </div>
      <img src="assets/images/products/02.png" class="card-img-top" alt="...">
      
      <div class="card-body flex flex-col gap-x-1.5">
        <p class="card-title cursor-pointer text-white">Classic beat</p>
        <div class="clearfix flex justify-between align-center text-white">
          {{-- <p class="mb-0 float-start"><strong>134</strong></p> --}}
          <div class="price flex items-center">
            <p class="mb-0 float-end fw-bold "><span style=" color: #16a34a; font-size:18px">{{ $settings->currency }}350</span></p>
          </div>
          <div class="play-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="45px" fill="#fff"><path class="path" d="m384-312 264-168-264-168v336ZM168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm0-72h624v-432H168v432Zm0 0v-432 432Z"/></svg>
          </div>
        </div>
        <div class="d-flex align-items-center mt-3 flex-row">
          <div class="cursor-pointer d-flex align-items-center">
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-light-4'></i>
            <i class='bx bxs-star text-light-4'></i>
            </div>	
          <p class="mb-0 ms-auto">4.2(182)</p>
        </div>
      </div>
    
    </div>

    <div class="card">
      <div class="product-disc">
        <div class="product-discount"><span class="">hip-hop</span></div>
        <a href="#" class="single-cart">
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff"><path d="M444-576v-132H312v-72h132v-132h72v132h132v72H516v132h-72ZM263.79-96Q234-96 213-117.21t-21-51Q192-198 213.21-219t51-21Q294-240 315-218.79t21 51Q336-138 314.79-117t-51 21Zm432 0Q666-96 645-117.21t-21-51Q624-198 645.21-219t51-21Q726-240 747-218.79t21 51Q768-138 746.79-117t-51 21ZM48-792v-72h133l155 360h301l113-264h78L703-476q-9 20-26.5 32T637-432H317l-42 72h493v72H276q-42 0-63-36.5t0-71.5l52-90-131-306H48Z"/></svg>

          </a>
      </div>
      <img src="assets/images/products/04.png" class="card-img-top" alt="...">
      
      <div class="card-body flex flex-col gap-x-1.5">
        <p class="card-title cursor-pointer text-white">Classic beat</p>
        <div class="clearfix flex justify-between align-center text-white">
          {{-- <p class="mb-0 float-start"><strong>134</strong></p> --}}
          <div class="price flex items-center">
            <p class="mb-0 float-end fw-bold "><span style=" color: #16a34a; font-size:18px">{{ $settings->currency }}350</span></p>
          </div>
          <div class="play-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="45px" fill="#fff"><path class="path" d="m384-312 264-168-264-168v336ZM168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm0-72h624v-432H168v432Zm0 0v-432 432Z"/></svg>
          </div>
        </div>
        <div class="d-flex align-items-center mt-3 flex-row">
          <div class="cursor-pointer d-flex align-items-center">
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-light-4'></i>
            <i class='bx bxs-star text-light-4'></i>
            </div>	
          <p class="mb-0 ms-auto">4.2(182)</p>
        </div>
      </div>
    
    </div>
    <div class="card">
      <div class="product-disc">
        <div class="product-discount"><span class="">hip-hop</span></div>
        <a href="#" class="single-cart">
          <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#fff"><path d="M444-576v-132H312v-72h132v-132h72v132h132v72H516v132h-72ZM263.79-96Q234-96 213-117.21t-21-51Q192-198 213.21-219t51-21Q294-240 315-218.79t21 51Q336-138 314.79-117t-51 21Zm432 0Q666-96 645-117.21t-21-51Q624-198 645.21-219t51-21Q726-240 747-218.79t21 51Q768-138 746.79-117t-51 21ZM48-792v-72h133l155 360h301l113-264h78L703-476q-9 20-26.5 32T637-432H317l-42 72h493v72H276q-42 0-63-36.5t0-71.5l52-90-131-306H48Z"/></svg>

          </a>
      </div>
      <img src="assets/images/products/05.png" class="card-img-top" alt="...">
      
      <div class="card-body flex flex-col gap-x-1.5">
        <p class="card-title cursor-pointer text-white">Classic beat</p>
        <div class="clearfix flex justify-between align-center text-white">
          {{-- <p class="mb-0 float-start"><strong>134</strong></p> --}}
          <div class="price flex items-center">
            <p class="mb-0 float-end fw-bold "><span style=" color: #16a34a; font-size:18px">{{ $settings->currency }}350</span></p>
          </div>
          <div class="play-btn">
          <svg xmlns="http://www.w3.org/2000/svg" height="35px" viewBox="0 -960 960 960" width="45px" fill="#fff"><path class="path" d="m384-312 264-168-264-168v336ZM168-192q-29.7 0-50.85-21.16Q96-234.32 96-264.04v-432.24Q96-726 117.15-747T168-768h624q29.7 0 50.85 21.16Q864-725.68 864-695.96v432.24Q864-234 842.85-213T792-192H168Zm0-72h624v-432H168v432Zm0 0v-432 432Z"/></svg>
          </div>
        </div>
        <div class="d-flex align-items-center mt-3 flex-row">
          <div class="cursor-pointer d-flex align-items-center">
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-white'></i>
            <i class='bx bxs-star text-light-4'></i>
            <i class='bx bxs-star text-light-4'></i>
            </div>	
          <p class="mb-0 ms-auto">4.2(182)</p>
        </div>
      </div>
    
    </div>

     
  
</div>


<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$0<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Single User</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>5GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited
                Private Projects</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated
                Phone Support</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain
              </li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                Reports</li>
            </ul>
            <div class="d-grid">
              <a href="#" class="btn btn-primary text-uppercase">Button</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Plus Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Plus</h5>
            <h6 class="card-price text-center">$9<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>5 Users</strong></li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>50GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Free Subdomain</li>
              <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status
                Reports</li>
            </ul>
            <div class="d-grid">
              <a href="#" class="btn btn-primary text-uppercase">Button</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">$49<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited Users</strong>
              </li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>150GB Storage</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Public Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Community Access</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Unlimited Private Projects</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated Phone Support</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span><strong>Unlimited</strong> Free
                Subdomains</li>
              <li><span class="fa-li"><i class="fas fa-check"></i></span>Monthly Status Reports</li>
            </ul>
            <div class="d-grid">
              <a href="#" class="btn btn-primary text-uppercase">Button</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="pricing-table">
<div class="row row-cols-1 row-cols-lg-3">
  <!-- Free Tier -->
  <div class="col">
    <div class="card mb-5 mb-lg-0 bg-dark">
      <div class="card-body">
        <h5 class="card-title grey-text text-uppercase text-center">Free</h5>
        <h6 class="card-price text-center">$0<span class="term">/month</span></h6>
        <hr class="my-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Single User</li>
          <li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
          <li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
          <li class="list-group-item bg-transparent"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
          <li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Unlimited Private Projects</li>
          <li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Dedicated Phone Support</li>
          <li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Free Subdomain</li>
          <li class="list-group-item bg-transparent"><i class='bx bx-x me-2 font-18'></i>Monthly Status Reports</li>
        </ul>
        <div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Plus Tier -->
  <div class="col">
    <div class="card mb-5 mb-lg-0 bg-light">
      <div class="card-body">
        <h5 class="card-title text-white text-uppercase text-center">Plus</h5>
        <h6 class="card-price text-white text-center">$9<span class="term">/month</span></h6>
        <hr class="my-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Single User</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Private Projects</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Dedicated Phone Support</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Free Subdomain</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-x me-2 font-18'></i>Monthly Status Reports</li>
        </ul>
        <div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Pro Tier -->
  <div class="col">
    <div class="card bg-dark">
      <div class="card-body">
        <h5 class="card-title text-white text-uppercase text-center">Pro</h5>
        <h6 class="card-price text-white text-center">$49<span class="term">/month</span></h6>
        <hr class="my-4">
        <ul class="list-group list-group-flush">
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Single User</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>5GB Storage</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Public Projects</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Community Access</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Unlimited Private Projects</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Dedicated Phone Support</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Free Subdomain</li>
          <li class="list-group-item bg-transparent text-white"><i class='bx bx-check me-2 font-18'></i>Monthly Status Reports</li>
        </ul>
        <div class="d-grid"> <a href="#" class="btn btn-light my-2 radius-30">Order Now</a>
        </div>
      </div>
    </div>
  </div>
</div>
</div> 



{{-- 
<div class="audio-player">
  <button id="play-pause">Play</button>
  <div class="progress-bar-container">
    <input type="range" id="progress-bar" value="0" min="0" max="100" />
  </div>
  <div class="volume-controls">
    <button id="volume-down">-</button>
    <input type="range" id="volume-slider" value="1" min="0" max="1" step="0.1" />
    <button id="volume-up">+</button>
  </div>
  <audio id="audio" src=""></audio>
</div> --}}





