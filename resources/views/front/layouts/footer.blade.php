<footer>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="movie">
                    <div class="movie-text">
                        <h3>sındırgı tanıtım filmi</h3>
                    </div>
                    <div class="movie-image">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/y_uB-uNmuwM" frameborder="0"
                            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="tourism">
                    <div class="tourism-title">
                        <h3>Turizm Danışma Hakkında</h3>
                    </div>
                    <div class="tourism-text">
                        <p>Amacımız sındırgının tarihi ve doğal güzelliklerini ön plana çıkarmak ve onununla alakalı
                            yurt içi ve yurt dışından gelen misafirlerimiz için daha iyi hizmet verebilmek için
                            turizm ofisi kurulmuş olup tamamen ücretsiz hizmet vermektedir.</p>
                    </div>
                </div>

                <div class="social-media">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#">
                                <div class="instagram">
                                    <a href="https://www.instagram.com/dogalsehir_turizmofisi/" target="_blank">
                                        <i class="zmdi zmdi-instagram"></i>
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="facebook">
                                    <a href="https://www.facebook.com/SINDIRGITURIZM/" target="_blank">
                                        <i class="zmdi zmdi-facebook-box"></i>
                                    </a>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="#">
                                <div class="twitter">
                                    <i class="zmdi zmdi-twitter-box"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-logo">
                                <img src="{{asset('front/')}}/images/sindirgi-logo.png">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="contact">
                    <div class="contact-title">
                        <h3>İletişim</h3>
                    </div>
                    <div class="location">
                        <i class="zmdi zmdi-pin"></i>
                        <p>Cumhuriyet Meydanı Jeotermal Yanı Balıkesir/Sındırgı</p>
                    </div>
                    <div class="phone">
                        <i class="zmdi zmdi-phone"></i>
                        <p>0266 516 11 24 (434)</p>
                        <p>0542 365 42 20</p>
                    </div>
                    <div class="mail">
                        <i class="zmdi zmdi-email"></i>
                        <p>turizmofisi.90@gmail.com</p>
                    </div>
                    <div class="sindirgi-logo">
                        <img src="{{asset('front/')}}/images/belediye-logo.png">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="footer-bottom">
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <p>Sındırgı Belediyesi - Bilgi İşlem</p>
                </div>
            </div>
        </div>
    </div>

</footer>



<script src="{{asset('front/')}}/js/swiper.min.js"></script>
<script src="{{asset('front/')}}/js/jquery.fancybox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<script>
    CKEDITOR.replace('content');
    CKEDITOR.editorConfig = function (config) {
        // Define changes to default configuration here. For example:
        // config.language = 'fr';
        // config.uiColor = '#AADC6E';
        config.height = '800px';
        config.width = '15%'
    };
    var swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints: {
            1024: {
                slidesPerView: 3,
                spaceBetweenSlides: 50
            },
            500: {
                slidesPerView: 2,
                spaceBetweenSlides: 50
            },
            414: {
                slidesPerView: 1,
                spaceBetweenSlides: 50
            },
            100: {
                slidesPerView: 1,
                spaceBetweenSlides: 50
            }
        }
    });
</script>
</body>

</html>
