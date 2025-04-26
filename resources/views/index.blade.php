@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center align-items-center">
                    <div class="col-12 text-center mb-lg-4 mb-0">
                        <h3 class="text-262626">永豐專業多元的借款服務</h3>
                        <p class="text-de5511">新竹永豐當舖就是您的即時救援站，讓您快速取得現金，不影響信用、不查聯徵！</p>
                    </div>

                    <div class="col-lg-8">
                        <div class="row justify-content-center align-items-center">
                            <div class="col-lg-4 col-md-6 mb-3">
                                <a href="{{route('locomotive')}}">

                                    <div class="hp-services-box text-center">
                                        <img src="{{asset('assets/images/00-hp/ser_icon01.png')}}" class="img-fluid mb-3" alt="">
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <h5 class="mb-0 text-262626">機車借款</h5>
                                            <img src="{{asset('assets/images/00-hp/ser_arrow.png')}}" class="img-fluid" width="30px"
                                                alt="">
                                        </div>
                                        <p class="text-363636 fw-light">
                                            不限車齡，免留車<br>分期車也可借
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <a href="{{route('car')}}">

                                    <div class="hp-services-box text-center">
                                        <img src="{{asset('assets/images/00-hp/ser_icon02.png')}}" class="img-fluid mb-3" alt="">
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <h5 class="mb-0 text-262626">汽車借款</h5>
                                            <img src="{{asset('assets/images/00-hp/ser_arrow.png')}}" class="img-fluid" width="30px"
                                                alt="">
                                        </div>
                                        <p class="text-363636 fw-light">
                                            不限車齡，免留車<br>利率透明，彈性貸款
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <a href="{{route('gold')}}">

                                    <div class="hp-services-box text-center">
                                        <img src="{{asset('assets/images/00-hp/ser_icon03.png')}}" class="img-fluid mb-3" alt="">
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <h5 class="mb-0 text-262626">黃金典當</h5>
                                            <img src="{{asset('assets/images/00-hp/ser_arrow.png')}}" class="img-fluid" width="30px"
                                                alt="">
                                        </div>
                                        <p class="text-363636 fw-light">
                                            專業鑑定<br>高價收當黃金
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <a href="{{route('3c-loan')}}">

                                    <div class="hp-services-box text-center">
                                        <img src="{{asset('assets/images/00-hp/ser_icon04.png')}}" class="img-fluid mb-3" alt="">
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <h5 class="mb-0 text-262626">手機3C典當借款</h5>
                                            <img src="{{asset('assets/images/00-hp/ser_arrow.png')}}" class="img-fluid" width="30px"
                                                alt="">
                                        </div>
                                        <p class="text-363636 fw-light">
                                            小額借款最佳選擇<br>資金周轉無負擔
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <a href="{{ route('microfinance') }}">

                                    <div class="hp-services-box text-center">
                                        <img src="{{asset('assets/images/00-hp/ser_icon05.png')}}" class="img-fluid mb-3" alt="">
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <h5 class="mb-0 text-262626">小額信用債務整合</h5>
                                            <img src="{{asset('assets/images/00-hp/ser_arrow.png')}}" class="img-fluid" width="30px"
                                                alt="">
                                        </div>
                                        <p class="text-363636 fw-light">
                                            協助整合多筆債務<br>降低負擔
                                        </p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-6 mb-3">
                                <a href="{{ route('bontique') }}">

                                    <div class="hp-services-box text-center">
                                        <img src="{{asset('assets/images/00-hp/ser_icon06.png')}}" class="img-fluid mb-3" alt="">
                                        <div class="d-flex justify-content-center align-items-center mb-3">
                                            <h5 class="mb-0 text-262626">精品名錶典當借款</h5>
                                            <img src="{{asset('assets/images/00-hp/ser_arrow.png')}}" class="img-fluid" width="30px"
                                                alt="">
                                        </div>
                                        <p class="text-363636 fw-light">
                                            專業鑑定，高價收當<br>變現快速
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- About Start -->
    <div class="container-fluid px-0 mx-0 py-5 hp-about-section">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.5s">
                    <!-- <div class="section-title">
                        <p class="fs-5 fw-medium fst-italic text-primary">About Us</p>
                        <h1 class="display-6">The success history of TEA House in 25 years</h1>
                    </div> -->
                    <h4 class="text-262626 mb-4">新竹永豐當鋪合法立案、擁有透明合理的利率制度<br class="d-none d-lg-block">保密性高，讓您能夠安心借貸
                    </h4>
                    <p class="text-363636 fw-normal mb-4">
                        無論是個人或企業資金需求，永豐當舖都能為你量身訂製彈性還款計畫，解決您的資金難題。<br>
                        選擇新竹永豐優質當舖，就是選擇安全與信賴。<br>
                        讓資金週轉更順利，財務規劃更無憂！
                    </p>
                    <div class="d-md-flex align-items-center">
                        <a href="{{route('about')}}">
                            <div class="box-outline-main d-flex justify-content-between align-items-center wm-content">
                                <span class="me-1">公司簡介</span>
                                <span class="ms-1">〉</span>
                            </div>
                        </a>
                        <a href="https://line.me/ti/p/vrekUeTzac" target="_blank">
                            <img src="{{asset('assets/images/00-hp/ab_line.svg')}}" class="img-fluid ms-md-3" style="height: 42px;"
                                alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Adv -->
    <div class="container-fluid px-0 mx-0 py-5 hp-adv-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-262626 text-center mb-5">
                        <img src="{{asset('assets/images/00-hp/adv_crown.png')}}" class="img-fluid" alt="">
                        借款就選新竹永豐當舖，優勢多多週轉更輕鬆！
                    </h4>

                    <div class="table-responsive">
                        <table class="table table-bordered text-center text-nowap">
                            <thead class="bg-white">
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col" class="text-dd643a">⭐新竹永豐當鋪借款</th>
                                    <th scope="col" class="text-be8b4f">銀行借款</th>
                                </tr>
                            </thead>
                            <tbody class="bg-be8b4f text-light">
                                <tr>
                                    <td>審核速度</td>
                                    <td>手續簡便，快速審核，當天放款</td>
                                    <td>審核繁瑣，需等待數天甚至數週</td>
                                </tr>
                                <tr>
                                    <td>借款門檻</td>
                                    <td>不看信用評分，提供物品即可借款</td>
                                    <td>信用評分、收入證明、工作穩定性皆影響貸款核准</td>
                                </tr>
                                <tr>
                                    <td>彈性還款</td>
                                    <td>可依需求規劃還款方式</td>
                                    <td>還款期數固定，無法靈活調整</td>
                                </tr>
                                <tr>
                                    <td>借款對象</td>
                                    <td>個人、無工作者、臨時資金需求者皆可申辦</td>
                                    <td>需具備穩定收入與良好信用紀錄</td>
                                </tr>
                                <tr>
                                    <td>質借物品</td>
                                    <td>機車、汽車、黃金、3C、精品包、名錶的皆可典當借款</td>
                                    <td>需不動產或高額擔保品，貸款種類受限</td>
                                </tr>
                                <tr>
                                    <td>信用影響</td>
                                    <td>不影響個人信用記錄</td>
                                    <td>影響信用評分，逾期可能影響未來貸款</td>
                                </tr>
                                <tr>
                                    <td>隱私保護</td>
                                    <td>保密性高，交易安全</td>
                                    <td>需提供財務與個人資料，審查嚴格</td>
                                </tr>
                                <tr>
                                    <td>放款金額</td>
                                    <td>依物品價值評估，額度彈性大</td>
                                    <td>低收入與信用狀況決定，可能不足需求</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

    @include('components.hp-step')

    <!-- Cases -->
    <div class="container-fluid py-5 hp-cases-section">
        <div class="container">

            <div class="row g-5">
                <div class="col-12 text-center">
                    <h4><span class="text-de5511 fw-normal me-1">Cases</span>借款成功案例</h4>
                    <p class="text-363636">在資金需求緊迫的時刻，新竹永豐當鋪成為許多客戶的最佳選擇</p>
                </div>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <div class="case-box">
                        <div class="case-header text-center mb-4">
                            <p class="text-363636 fw-normal case-industry mb-2">美髮業 張先生</p>
                            <h5 class="text-262626 case-title">成功貸款<span class="text-de5511">30</span>萬</h5>
                        </div>
                        <div class="case-content">
                            <img src="{{asset('assets/images/00-hp/case_pic1.jpg')}}" class="img-fluid mb-3" alt="">
                            <p class="text-363636 fw-normal">
                                章先生在新竹經營兩家美髮沙龍，生意穩定。上個月因應活動需求，添購了大量設備並
                                增加人力，使得本月資金週轉較為吃緊。此外，他與洗護商品供應商合作的鋪貨貨款約
                                20多萬元即將到期，但由於資金需求僅短短一個月，向銀行貸款不僅手續繁瑣，利息
                                也不算低；經過評估後，章先生選擇來到永豐當舖，以企業借款的方式成功獲得資金。
                                永豐當鋪提供的利率透明且符合法規，不僅讓他能安心借款，也有效紓解了短期資金壓
                                力，使店面營運更加順暢。
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="case-box">
                        <div class="case-header text-center mb-4">
                            <p class="text-363636 fw-normal case-industry mb-2">汽車業 馬先生</p>
                            <h5 class="text-262626 case-title">成功貸款<span class="text-de5511">7</span>萬</h5>
                        </div>
                        <div class="case-content">
                            <img src="{{asset('assets/images/00-hp/case_pic2.jpg')}}" class="img-fluid mb-3 case-content-img"
                                alt="">
                            <p class="text-363636 fw-normal text-justify text-indent-0 case-content-text">
                                馬先生是一名汽車鈑金師傅，平時生活簡單，唯一的休閒就是玩手遊，偶爾小額課金，
                                但都在可控範圍內。某天工作時不慎被幫浦機壓傷手指，導致兩根手指骨折，必須休養
                                兩個月，暫時無法工作。由於過去會因家庭因素向朋友借款，不喜歡欠人情的感覺，因
                                此這次選擇來到永豐當舖，以汽車借款的方式順利取得資金。<br>
                                永豐當舖提供的利率符合法規，條件透明合理，不僅幫助他解決短期經濟壓力，也讓他
                                能安心養傷，準備重返工作崗位。
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 d-flex justify-content-center mt-4">
                    <a href="{{route('cases')}}">
                        <div class="box-outline-main d-flex justify-content-between align-items-center wm-content">
                            <span class="me-1">更多案例</span>
                            <span class="ms-1">〉</span>
                        </div>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid py-5 hp-info-section">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-7">
                    <div class="sub-section hp-konwledge">
                        <div class="d-md-flex align-items-center mb-4">
                            <h5 class="text-262626 me-2 mb-0 letter-spacing"><span
                                    class="text-de5511 fw-normal">Konwledge</span>當鋪知識分享</h5>
                            <a href="{{route('konwledge')}}">
                                <div class="box-outline-main d-flex justify-content-between align-items-center wm-content">
                                    <span class="me-1">更多案例</span>
                                    <span class="ms-1">〉</span>
                                </div>
                            </a>
                        </div>
                        <div class="row hp-konwledge-box bg-white align-items-center p-2">
                            <div class="col-lg-5 p-0 pe-2 mb-lg-0 mb-3">
                                <img src="{{asset('assets/images/00-hp/know_pic.jpg')}}" class="img-fluid hp-konwledge-img"
                                    alt="">
                            </div>
                            <div class="col-lg-7 p-0 ps-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-79787b type ps-2">知識分類</p>
                                    <p class="text-79787b date">2022-01-01</p>
                                </div>
                                <h5 class="text-262626 hp-konwledge-title">了解當鋪借款，讓資金周轉更輕鬆！</h5>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-konwledge-text">
                                    了解當舖借款，讓資金週轉更輕鬆！
                                    當鋪作為一種合法且歷史悠久的借款方式，為許多人提供
                                    了靈活且及時的資金週轉管道。然而，許多民眾對當鋪借款仍存有疑問... more
                                </p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('konwledge-details-mock')}}" class="hp-konwledge-link text-de5511">
                                        觀看內容 ＋
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sub-section hp-faq">
                        <div class="d-md-flex align-items-center mb-4">
                            <h5 class="text-262626 me-2 mb-0 letter-spacing"><span
                                    class="text-de5511 fw-normal">Faq</span>常見問題</h5>
                            <a href="{{route('faq')}}">
                                <div class="box-outline-main d-flex justify-content-between align-items-center wm-content">
                                    <span class="me-1">更多問答</span>
                                    <span class="ms-1">〉</span>
                                </div>
                            </a>
                        </div>

                        <div class="hp-faq-box bg-white align-items-center p-2 mb-2 h-100">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-1">Q1.當鋪借款需要準備什麼文件？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    申請借款時，通常需要提供身分證正本，若以機車或汽車借款，則需攜帶行照。<br>
                                    部分情況可能需補充其他文件，詳細可來電永豐當舖或線上諮詢。
                                </p>
                            </div>
                        </div>

                        <div class="hp-faq-box bg-white align-items-center p-2 h-100">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-1">Q2.典當借款的利息如何計算？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    永豐當鋪利息依政府法規訂定，每月利息透明公開，不會有額外隱藏費用，詳細金額依借款額度與典當品項而定。
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container-fluid py-5 hp-att-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 justify-content-center align-items-center">
                    <div class="d-lg-flex justify-content-center align-items-center text-center">
                        <img src="{{asset('assets/images/00-hp/att_icon.png')}}" class="img-fluid" alt="">
                        <div class="att-content d-flex flex-column">
                            <h5 class="bg-de5511 text-light py-2 px-3 w-fit mb-3">新竹永豐當舖提醒您：慎防借款詐騙！</h5>
                            <p class="text-363636 fw-normal px-1 mb-0 text-start">
                                本店所有借款業務皆由店內專業人員辦理，絕無委外行銷或代辦單位。<br>
                                若未親自到店辦理，則與本店無關，請提高警覺，避免受騙！
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
