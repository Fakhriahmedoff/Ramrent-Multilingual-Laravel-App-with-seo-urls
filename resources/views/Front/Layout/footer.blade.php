<footer>
    <div class="container footer">
        <div class="row">
            <div class="col-lg-3">
                <ul class="footer-links">
                    <li class="footer-link"><a href="#">Homepage</a></li>                          
                    <li class="footer-link"><a href="#">Rental Cars</a></li>                          
                    <li class="footer-link"><a href="#">Company</a></li>                          
                    <li class="footer-link"><a href="#">Need to Know</a></li>                          
                    <li class="footer-link"><a href="#">Car Rent Online</a></li>                          
                    <li class="footer-link"><a href="#">Contacts</a></li>                          
                </ul>                          
            </div>                             
            <div class="col-lg-3">                          
                <ul class="footer-links">                          
                    <li class="footer-link"><a href="#">Econom Class</a></li>                          
                    <li class="footer-link"><a href="#">Middle Class</a></li>                          
                    <li class="footer-link"><a href="#">Suv</a></li>                          
                    <li class="footer-link"><a href="#">Premium Class</a></li>                          
                    <li class="footer-link"><a href="#">Bus</a></li>                          
                    <li class="footer-link"><a href="#">Microbus</a></li>                          
                </ul>                          
            </div>                          
            <div class="col-lg-4 third">
                <ul class="footer-credentials">
                    <li class="footer-link">
                        <img src="/front/images/phone.svg" alt=""> <a href="">+994
                            (70) 700 44 44</a>
                    </li>
                    <li class="footer-link">
                        <img src="/front/images/mail.svg" alt=""> <a href="">info@ramservis.az</a>
                    </li>
                    <li class="footer-link">
                        <img src="/front/images/location.svg" alt=""> <a
                            href="">27/A Akhmad Rajabli, "Сhomerd
                            Business Center" </a>
                    </li>

                </ul>
            </div>
            <div class="col-lg-3 last">
                <img src="/front/images/colored-logo.png" alt="">
                <p class="ksati">
                    Ram Servis Rent a Car Baku
                </p>
            </div>

        </div>
    </footer>
</div>
    <script>
        //Get the button
        var header = document.getElementById("header");
        
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        
        function scrollFunction() {
          if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
            header.classList.add("sticky");
          }
          else {
            header.classList.remove("sticky");
          }
          
        }
        
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
          document.body.scrollTop = 0;
          document.documentElement.scrollTop = 0;
        }
        
        </script>
    <!-- SCRIPTS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script
        src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <!-- MDB -->
    <script
        type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
              function progress(percent, $element) {
            var progressBarWidth = percent * $element.width() / 100;
            $element.find('div').animate({ width: progressBarWidth }, 500).html();
            }

            NProgress.start();
        
            $(document).ready(function(){
                $("#page-content").addClass('active');
                NProgress.done();

            });
        
        </script>
    <script>
new Splide('#splide', {
    type: 'loop',
    perPage: 4,
    perMove: 1,
}).mount();
</script>
    <script>
new Splide('#splide2', {
    type: 'loop',
    perPage: 4,
    perMove: 1,
}).mount();
</script>
    <script>
new Splide('#splide3', {
    type: 'loop',
    perPage: 4,
    perMove: 1,
}).mount();
</script>
    <script>
new Splide('#splide4', {
    type: 'loop',
    perPage: 4,
    perMove: 1,
}).mount();
</script>
    <script>
$(document).ready(function () {

    $('.first-button').on('click', function () {

        $('.animated-icon1').toggleClass('open');
    });
    $('.second-button').on('click', function () {

        $('.animated-icon2').toggleClass('open');
    });
    $('.third-button').on('click', function () {

        $('.animated-icon3').toggleClass('open');
    });
});
</script>
    <script>

 var swiper = new Swiper("#home-swiper", {
        pagination: {
          el: ".swiper-pagination",
          type: "progressbar",
        },
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
</script>
    <script>
/*ANIMATION INIT*/
AOS.init();
</script>
</body>

</html>