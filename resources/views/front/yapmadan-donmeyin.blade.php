@include('front.layouts.header')
@include('front.layouts.nav')


<!-- <div class="page-load-outer">
        <div class="page-load">

        </div>
    </div> -->




<div class="yapmadan-donmeyin">

    <div class="banner">
        <!--style-->
        <h3>yapmadan dönmeyİn</h3>
    </div>

    <div class="content">
        <!-- <div class="row">
            <div class="col-md-12">
                <div class="title">
                    <h3>yapmadan dönmeyin</h3>
                </div>
            </div>
        </div>  -->
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; İlmek ilmek duyguların işlendiği Yağcıbedir Halılarını almadan</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/hali.jpg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/hali.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Emendere'nin termal sularında şifa bulmadan</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/sifali-su.jpg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/sifali-su.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Hisaralan'ın kaplıca sularında yorgunluğunuzu atmadan</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/hisaralan.jpg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/hisaralan.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Şerif Paşa Camii ve meydanında tarihi atmosferi keşfetmeden</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/serif-pasa-1.jpg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/serif-pasa-1.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Tıbbi aromatik bitki çaylarını içmeden</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/bitki-cayi.jpeg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/bitki-cayi.jpeg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Yöreye has ürünleri alabileceğiniz Hanımeli Çarşısını gezmeden</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/hanimeli-1.jpg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/hanimeli-1.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Ev hanımlarının evlerinde yapılan yöresel börekleri yemeden</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/yoresel-borek-edit.jpeg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/yoresel-borek-edit.jpeg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Kertil Çam Ormanlarından özünü alan Tarihi Kertil Çam Kolonyalarını almadan</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/kertil-kolonya.jpg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/kertil-kolonya.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Antik Osmanlı çarşısını gezmeden</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/antik-osmanli.jpg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/antik-osmanli.jpg" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-12">
                    <div class="text">
                        <p>&#9899; Atın üzerinde doğayı keşfetmeden</p>
                    </div>
                    <div class="image">
                        <a href="{{asset('front/')}}/images/at.jpeg" data-fancybox="gallery" data-caption="Caption #1">
                            <img src="{{asset('front/')}}/images/at.jpeg"/>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="other-page">
                    <p><a href="{{route('yapmadanDonmeyin2')}}">diğer sayfa için tıklayınız</a></p>
                </div>
            </div>
        </div>
    </div>
</div>





@include('front.layouts.footer')
