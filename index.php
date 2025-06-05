<!DOCTYPE html>
<html lang="en">

<?php
$PAGE_TITLE = "Home";
include_once 'partial/meta.php'; ?>

<body>
    <?php include_once 'partial/header.php'; ?>

    <!-- Hero Section -->
    <section id="hero" class="h-screen relative flex items-center justify-center overflow-hidden">
        <iframe class="video-bg"
            src="https://www.youtube.com/embed/gDrywz8vqjU?si=RbAEW0fniLPhPpJB&autoplay=1&mute=1&playsinline=1&loop=1&controls=0&disablekb=1"
            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        <div class="video-overlay"></div>
        <div class="text-center text-white px-4 fade-in relative">
            <h2 class="text-3xl font-bold">
                Development Of Teaching Hospital, <br />Integrated Research Center and
                Wastewater Treatment Plant
            </h2>
            <p class="mt-4 text-1xl">
                <i>Higher Education for Technology and Innovation (HETI) Project ADB
                    Universitas Lampung</i>
            </p>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-6">About Us</h2>
            The Higher Education for Technology and Innovation (HETI) project is
            supported by the Asian Development Bank (ADB) and the Ministry of
            Education, Culture, Research, and Technology (Kemendikbudristek). This
            project aims to enhance the educational and research capacities at two
            higher education institutions: the Sepuluh Nopember Institute of
            Technology (ITS) in East Java and the University of Lampung (UNILA) in
            Sumatra.
            <br /><br />
            Project Objectives for Education and Research Development: Integrating
            advanced technology in teaching and research to expand UNILA's capacity
            to offer programs relevant to the market and high-quality research.
            Improvement in Healthcare Services: Establishing an educational hospital
            prepared to handle pandemics and an integrated research center to
            support the development of quality healthcare professionals.
        </div>
    </section>

    <!-- Program Section -->
    <section id="program" class="pb-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center space-y-8 md:space-y-0 md:space-x-16">
                <div class="md:w-1/2 px-4">
                    <div class="slider slick-initialized slick-slider slick-dotted">
                        <button class="slick-prev slick-arrow" aria-label="Previous" type="button" style="">
                            Previous
                        </button>
                        <div class="slick-list draggable" style="height: 400px">
                            <div class="slick-track" style="
                    opacity: 1;
                    width: 2960px;
                    transform: translate3d(-1184px, 0px, 0px);
                  ">
                                <div class="slick-slide slick-cloned" data-slick-index="-1" id="" aria-hidden="true" tabindex="-1"
                                    style="width: 592px">
                                    <a data-fancybox="gallery" href="./Home - PMSC HETI ADB RSPTN UNILA_files/irc.jpg" tabindex="-1">
                                        <img src="./Home - PMSC HETI ADB RSPTN UNILA_files/irc.jpg" alt="Gambar 2"
                                            class="w-full h-auto rounded-lg shadow-lg" />
                                    </a>
                                </div>
                                <div class="slick-slide" data-slick-index="0" aria-hidden="true" tabindex="-1" role="tabpanel"
                                    id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 592px">
                                    <a data-fancybox="gallery" href="./Home - PMSC HETI ADB RSPTN UNILA_files/rsptn.jpg" tabindex="-1">
                                        <img src="./Home - PMSC HETI ADB RSPTN UNILA_files/rsptn.jpg" alt="Gambar 1"
                                            class="w-full h-auto rounded-lg shadow-lg" />
                                    </a>
                                </div>
                                <div class="slick-slide slick-current slick-active" data-slick-index="1" aria-hidden="false"
                                    tabindex="0" role="tabpanel" id="slick-slide01" aria-describedby="slick-slide-control01"
                                    style="width: 592px">
                                    <a data-fancybox="gallery" href="./Home - PMSC HETI ADB RSPTN UNILA_files/irc.jpg" tabindex="0">
                                        <img src="./Home - PMSC HETI ADB RSPTN UNILA_files/irc.jpg" alt="Gambar 2"
                                            class="w-full h-auto rounded-lg shadow-lg" />
                                    </a>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="2" id="" aria-hidden="true" tabindex="-1"
                                    style="width: 592px">
                                    <a data-fancybox="gallery" href="./Home - PMSC HETI ADB RSPTN UNILA_files/rsptn.jpg" tabindex="-1">
                                        <img src="./Home - PMSC HETI ADB RSPTN UNILA_files/rsptn.jpg" alt="Gambar 1"
                                            class="w-full h-auto rounded-lg shadow-lg" />
                                    </a>
                                </div>
                                <div class="slick-slide slick-cloned" data-slick-index="3" id="" aria-hidden="true" tabindex="-1"
                                    style="width: 592px">
                                    <a data-fancybox="gallery" href="./Home - PMSC HETI ADB RSPTN UNILA_files/irc.jpg" tabindex="-1">
                                        <img src="./Home - PMSC HETI ADB RSPTN UNILA_files/irc.jpg" alt="Gambar 2"
                                            class="w-full h-auto rounded-lg shadow-lg" />
                                    </a>
                                </div>
                            </div>
                        </div>

                        <button class="slick-next slick-arrow" aria-label="Next" type="button" style="">
                            Next
                        </button>
                        <ul class="slick-dots" style="" role="tablist">
                            <li class="" role="presentation">
                                <button type="button" role="tab" id="slick-slide-control00" aria-controls="slick-slide00"
                                    aria-label="1 of 2" tabindex="-1">
                                    1
                                </button>
                            </li>
                            <li role="presentation" class="slick-active">
                                <button type="button" role="tab" id="slick-slide-control01" aria-controls="slick-slide01"
                                    aria-label="2 of 2" tabindex="0" aria-selected="true">
                                    2
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Right Side: Descriptions -->
                <div class="md:w-1/2 px-4">
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold">
                            Capacity Strengthening in Medical Education and Research
                        </h3>
                        <p class="mt-4">
                            Construction of an educational hospital prepared to handle
                            pandemics, gender-responsive, and disability-friendly.
                            Development of an integrated research center to provide
                            laboratories for research in tropical medicine, biomedical
                            sciences, pathology, and nutrition.
                        </p>
                    </div>
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold">Development Details</h3>
                        <p class="mt-4">
                            Educational Hospital: Class C with 100 beds, expandable to Class
                            B. <br />Integrated Research Center: Providing research
                            facilities across various life sciences disciplines.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision & Mission Section -->
    <section id="vision" class="bg-gray-200 py-16">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-16">
                <div class="px-4 slide-in-bottom">
                    <h3 class="text-xl font-semibold">Organization Structure</h3>
                    <ul class="list-disc list-inside mt-4 text-left mx-auto">
                        <li>
                            Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi
                            (Kemendikbudristek): Serving as the project implementing agency.
                        </li>
                        <li>
                            Universitas Lampung (UNILA): Acting as one of the project
                            implementing bodies, along with ITS.
                        </li>
                        <li>
                            Project Management Unit (PMU): Responsible for project
                            management and implementation.
                        </li>
                        <li>
                            Project Management and Supervision Consultant (PMSC): Assisting
                            the PIU in project management and supervision.
                        </li>
                    </ul>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4 mt-8">
                        <div>
                            <a data-fancybox="gallery" href="./Home - PMSC HETI ADB RSPTN UNILA_files/pmu.png">
                                <img src="./Home - PMSC HETI ADB RSPTN UNILA_files/pmu.png" alt="Gambar 1" class="w-full h-full" />
                            </a>
                        </div>
                        <div>
                            <a data-fancybox="gallery" href="./Home - PMSC HETI ADB RSPTN UNILA_files/piu.png">
                                <img src="./Home - PMSC HETI ADB RSPTN UNILA_files/piu.png" alt="Gambar 2" class="w-full h-full" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <!-- <section id="gallery" class="bg-gray-200 py-8 p-3">
      <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold mb-8 text-center">Gallery</h2>
        <div class="gallery-slider slick-initialized slick-slider slick-dotted">
          <button
            class="slick-prev slick-arrow"
            aria-label="Previous"
            type="button"
            style=""
          >
            Previous
          </button>

          <div class="slick-list draggable">
            <div
              class="slick-track"
              style="
                opacity: 1;
                width: 4912px;
                transform: translate3d(-2149px, 0px, 0px);
              "
            >
              <div
                class="slick-slide slick-cloned"
                data-slick-index="-4"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/x7x12uTugcanq65jgKEJbEwIlWuSApbA2lEXUQB9.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/x7x12uTugcanq65jgKEJbEwIlWuSApbA2lEXUQB9.jpg"
                    alt="Gambar CVW Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="-3"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/j6yuuGOg0kMsV7BjKEgKef1IZnmFLxIsfvyUBejd.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/j6yuuGOg0kMsV7BjKEgKef1IZnmFLxIsfvyUBejd.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="-2"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/hQ3b0jHOIQvQTdaDMTtI1ykgTuxu9E2tmdKlWcTv.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/hQ3b0jHOIQvQTdaDMTtI1ykgTuxu9E2tmdKlWcTv.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="-1"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/jVyLKyjUypryduckp2jt99iPyzxlrcdLWiBwWhUW.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/jVyLKyjUypryduckp2jt99iPyzxlrcdLWiBwWhUW.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide"
                data-slick-index="0"
                aria-hidden="true"
                tabindex="-1"
                role="tabpanel"
                id="slick-slide10"
                aria-describedby="slick-slide-control10"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/GuyJK5RioiY4N8rRoOwIUw0IEcsn9KbXbhhUGyXz.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/GuyJK5RioiY4N8rRoOwIUw0IEcsn9KbXbhhUGyXz.jpg"
                    alt="Gambar CVW Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide"
                data-slick-index="1"
                aria-hidden="true"
                tabindex="-1"
                role="tabpanel"
                id="slick-slide11"
                aria-describedby="slick-slide-control11"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/k11afsOQVzcSeU5k9Nnco944iLUYmtoy7WAsesOd.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/k11afsOQVzcSeU5k9Nnco944iLUYmtoy7WAsesOd.jpg"
                    alt="Gambar CVW Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide"
                data-slick-index="2"
                aria-hidden="true"
                tabindex="-1"
                role="tabpanel"
                id="slick-slide12"
                aria-describedby="slick-slide-control12"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/x7x12uTugcanq65jgKEJbEwIlWuSApbA2lEXUQB9.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/x7x12uTugcanq65jgKEJbEwIlWuSApbA2lEXUQB9.jpg"
                    alt="Gambar CVW Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-current slick-active"
                data-slick-index="3"
                aria-hidden="false"
                tabindex="0"
                role="tabpanel"
                id="slick-slide13"
                aria-describedby="slick-slide-control13"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/j6yuuGOg0kMsV7BjKEgKef1IZnmFLxIsfvyUBejd.jpg"
                  tabindex="0"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/j6yuuGOg0kMsV7BjKEgKef1IZnmFLxIsfvyUBejd.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-active"
                data-slick-index="4"
                aria-hidden="false"
                tabindex="0"
                role="tabpanel"
                id="slick-slide14"
                aria-describedby="slick-slide-control14"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/hQ3b0jHOIQvQTdaDMTtI1ykgTuxu9E2tmdKlWcTv.jpg"
                  tabindex="0"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/hQ3b0jHOIQvQTdaDMTtI1ykgTuxu9E2tmdKlWcTv.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-active"
                data-slick-index="5"
                aria-hidden="false"
                tabindex="0"
                role="tabpanel"
                id="slick-slide15"
                aria-describedby="slick-slide-control15"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/jVyLKyjUypryduckp2jt99iPyzxlrcdLWiBwWhUW.jpg"
                  tabindex="0"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/jVyLKyjUypryduckp2jt99iPyzxlrcdLWiBwWhUW.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned slick-active"
                data-slick-index="6"
                id=""
                aria-hidden="false"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/GuyJK5RioiY4N8rRoOwIUw0IEcsn9KbXbhhUGyXz.jpg"
                  tabindex="0"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/GuyJK5RioiY4N8rRoOwIUw0IEcsn9KbXbhhUGyXz.jpg"
                    alt="Gambar CVW Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="7"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/k11afsOQVzcSeU5k9Nnco944iLUYmtoy7WAsesOd.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/k11afsOQVzcSeU5k9Nnco944iLUYmtoy7WAsesOd.jpg"
                    alt="Gambar CVW Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="8"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/x7x12uTugcanq65jgKEJbEwIlWuSApbA2lEXUQB9.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/x7x12uTugcanq65jgKEJbEwIlWuSApbA2lEXUQB9.jpg"
                    alt="Gambar CVW Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="9"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/j6yuuGOg0kMsV7BjKEgKef1IZnmFLxIsfvyUBejd.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/j6yuuGOg0kMsV7BjKEgKef1IZnmFLxIsfvyUBejd.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="10"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/hQ3b0jHOIQvQTdaDMTtI1ykgTuxu9E2tmdKlWcTv.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/hQ3b0jHOIQvQTdaDMTtI1ykgTuxu9E2tmdKlWcTv.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
              <div
                class="slick-slide slick-cloned"
                data-slick-index="11"
                id=""
                aria-hidden="true"
                tabindex="-1"
                style="width: 287px"
              >
                <a
                  data-fancybox="gallery"
                  href="./Home - PMSC HETI ADB RSPTN UNILA_files/jVyLKyjUypryduckp2jt99iPyzxlrcdLWiBwWhUW.jpg"
                  tabindex="-1"
                >
                  <img
                    src="./Home - PMSC HETI ADB RSPTN UNILA_files/jVyLKyjUypryduckp2jt99iPyzxlrcdLWiBwWhUW.jpg"
                    alt="Gambar PMSC Gallery"
                    class="gallery-image"
                  />
                </a>
              </div>
            </div>
          </div>

          <button
            class="slick-next slick-arrow"
            aria-label="Next"
            type="button"
            style=""
          >
            Next
          </button>
          <ul class="slick-dots" style="" role="tablist">
            <li class="" role="presentation">
              <button
                type="button"
                role="tab"
                id="slick-slide-control10"
                aria-controls="slick-slide10"
                aria-label="1 of 2"
                tabindex="-1"
              >
                1
              </button>
            </li>
            <li role="presentation" class="">
              <button
                type="button"
                role="tab"
                id="slick-slide-control11"
                aria-controls="slick-slide11"
                aria-label="2 of 2"
                tabindex="-1"
              >
                2
              </button>
            </li>
            <li role="presentation" class="">
              <button
                type="button"
                role="tab"
                id="slick-slide-control12"
                aria-controls="slick-slide12"
                aria-label="3 of 2"
                tabindex="-1"
              >
                3
              </button>
            </li>
            <li role="presentation" class="slick-active">
              <button
                type="button"
                role="tab"
                id="slick-slide-control13"
                aria-controls="slick-slide13"
                aria-label="4 of 2"
                tabindex="0"
                aria-selected="true"
              >
                4
              </button>
            </li>
            <li role="presentation" class="">
              <button
                type="button"
                role="tab"
                id="slick-slide-control14"
                aria-controls="slick-slide14"
                aria-label="5 of 2"
                tabindex="-1"
              >
                5
              </button>
            </li>
            <li role="presentation" class="">
              <button
                type="button"
                role="tab"
                id="slick-slide-control15"
                aria-controls="slick-slide15"
                aria-label="6 of 2"
                tabindex="-1"
              >
                6
              </button>
            </li>
          </ul>
        </div>
      </div>
    </section> -->



    <?php include_once 'partial/footer.php'; ?>
</body>

</html>