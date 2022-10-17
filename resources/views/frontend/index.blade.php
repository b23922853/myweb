<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>練習</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
        .box {
            height: 200px;
            border: 1px solid black;
            border-radius: 20px;
            margin: 10px 0px;
        }

        .box img{
            width: 100%;
        }

        .request{
            top: 25%;
            right: 100px;
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-lg">
            <a class="navbar-brand" href="/">
                <img src="https://lesson-bootstrap.dev-hub.io/img/logo.svg" alt="" style="width: 105px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item ms-2 p-3">
                        <a class="nav-link active" aria-current="page" href="/weather">天氣卡片</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fuild">
            <div class="swiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="https://www.princeton.edu/sites/default/files/styles/half_2x/public/images/2022/02/KOA_Nassau_2697x1517.jpg"
                            class="w-100" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.princeton.edu/sites/default/files/styles/half_2x/public/images/2022/02/KOA_Nassau_2697x1517.jpg"
                            class="w-100" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="https://www.princeton.edu/sites/default/files/styles/half_2x/public/images/2022/02/KOA_Nassau_2697x1517.jpg"
                            class="w-100" alt="">
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">歡迎來到神奇汽車精品百貨</h2>
                    <p class="text-center">我們提供最佳的商品，以及完美的售後服務。歡迎各位好友一同共同餐與我們的新事業 (此網站為網頁教學用途，非真實存在之店家)</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-6 d-flex flex-column align-items-center border border-success ">
                    <img src="./aaa.svg" alt="" class="w-25 rounded-circle">
                    <h2>中古車市場開幕!!</h2>
                    <p class="text-center">買車保證無泡水車、無事故車、無非法變造車的三大保證，是我們對於消費者購買中古車前的承諾。買車後針對引擎、變速箱、方向機、啟動馬達給予這四大項重要機件保固，讓消費者可以達到「一家買車 全省服務」的完整售服</p>
                    <a href="">觀看全文</a>
                </div>

                <div class="col-6 d-flex flex-column align-items-center border border-success">
                    <img src="./aaa.svg" alt="" class="w-25 rounded-circle">
                    <h2>只給你最好的!!</h2>
                    <p class="text-center">我們相信透過有效率的貿易，台灣也能與世界一樣使用高品質、平價的機油。配合機油進口商的身份，透過網路直接接觸每一位消費者，讓每一位車主都可以享受到「專業的LINE諮詢服務」及「接近歐洲零售價格」、「比量販店、汽車百貨更便宜」、「直送到府」、「有油品進口履歷」安全的歐洲原裝進口機油，不僅高品質，也用得安心。

                    </p>
                    <a href="">觀看全文</a>
                </div>
            </div>
        </div>
        <div class="container mt-5 p-3 p-lg-5">

            @foreach ($product as $key => $item)
             <div class="row  @if ($key % 2 == 1) d-flex flex-row-reverse @endif">
                <div class="box col-3">
                    <img src="{{ $item->img_path }}" alt="">
                </div>
                <div class="box col-9 p-3">
                    <h3>{{ $item->title }}</h3>
                    <p>{{ $item->content }}</p>
                    <a href="{{ $item->link }}">看更多{{ $key }}</a>
                </div>
            </div>
            @endforeach

        </div>

        <div class="container-fuild position-relative" style="height: 696px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3639.793535359656!2d120.64701471068192!3d24.178972612610572!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x34691623a7988aa7%3A0x73dd146c41c3035a!2z6YCi55Sy5aSn5a24!5e0!3m2!1szh-TW!2stw!4v1665539124221!5m2!1szh-TW!2stw" class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="d-flex flex-column position-absolute bg-white p-5 rounded request">
                <h3>Feedback</h3>
                <p>Post-ironic portland shabby chic echo park, banjo fashion axe</p>
                <label for="">Email</label>
                <input type="text">

                <label for="">Message</label>
                <textarea></textarea>

                <button>Button</button>
                <span>Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</span>
            </div>
        </div>



    </main>
    <footer></footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
        crossorigin="anonymous"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    </script>
</body>

</html>
