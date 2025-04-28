@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-fluid px-0 mx-0 pt-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">快速借款流程</h3>
                        <p class="text-de5511">資金周轉不用等，只需4個簡單步驟，讓您輕鬆取得資金，解決財務需求！</p>
                    </div>

                </div>
            </div>

            <div class="container-fluid px-0 mx-0">

                <div class="row px-lg-0 px-4">
                    <div class="col-lg-4 mb-lg-0 mb-5">
                        <picture>
                            <source srcset="{{asset('assets/images/03/03pic840.jpg')}}" media="(max-width: 1024px)" type="image/webp">
                            <source srcset="{{asset('assets/images/03/03pic640.jpg')}}" media="(max-width: 768px)" type="image/png">
                            <img src="{{asset('assets/images/03/03pic.jpg')}}" class="img-fluid process-img" alt="">
                        </picture>
                    </div>
                    <div class="col-lg-7 d-flex flex-column justify-content-around">
                        <div class="process-box mb-3 py-4 px-3 d-md-flex align-items-center w-100">
                            <div class="process-icon-box text-center me-lg-3 mb-lg-0 mb-3">
                                <img src="{{asset('assets/images/03/03icon01.png')}}" class="img-fluid process-icon" alt="">
                            </div>
                            <div class="">
                                <h5 class="text-262626 text-md-start text-center"><span style="font-size: smaller">Step 01. </span>來電或線上免費諮詢</h5>
                                <p class="text-363636 fw-normal mb-0">
                                    撥打電話<span class="text-de5511">03-5519-000</span>或透過LINE線上客服與我們聯繫，說明您的借款需求，永豐專員將提供您最合適的借款方案與詳細說明。
                                </p>
                            </div>
                        </div>

                        <div class="process-arrow text-center mb-3">
                            <img src="{{asset('assets/images/03/03icon_arrow.png')}}" class="img-fluid" width="65" alt="">
                        </div>

                        <div class="process-box2 mb-3 py-4 px-3 d-md-flex align-items-center w-100">
                            <div class="process-icon-box text-center me-lg-3 mb-lg-0 mb-3">
                                <img src="{{asset('assets/images/03/03icon02.png')}}" class="img-fluid process-icon" alt="">
                            </div>
                            <div class="">
                                <h5 class="text-262626 text-md-start text-center"><span style="font-size: smaller">Step 02. </span>準備文件送至永豐實體店面</h5>
                                <p class="text-363636 fw-normal mb-0">
                                    準備基本證件與相關資料，例如：身分證、行照（汽機車借款）、典當品...等，讓審核更順利！<br>
                                    若您不確定該準備哪些資料可先用LINE或來電與永豐的客服專員聯繫。
                                </p>
                            </div>
                        </div>

                        <div class="process-arrow text-center mb-3">
                            <img src="{{asset('assets/images/03/03icon_arrow.png')}}" class="img-fluid" width="65" alt="">
                        </div>

                        <div class="process-box mb-3 py-4 px-3 d-md-flex align-items-center w-100">
                            <div class="process-icon-box text-center me-lg-3 mb-lg-0 mb-3">
                                <img src="{{asset('assets/images/03/03icon03.png')}}" class="img-fluid process-icon" alt="">
                            </div>
                            <div class="">
                                <h5 class="text-262626 text-md-start text-center"><span style="font-size: smaller">Step 03. </span>專員快速審核</h5>
                                <p class="text-363636 fw-normal mb-0">
                                    收到您的申請文件後，永豐專員將立即評估您的借款條件，過程透明、公正，最短時間內完成審核！
                                </p>
                            </div>
                        </div>

                        <div class="process-arrow text-center mb-3">
                            <img src="{{asset('assets/images/03/03icon_arrow.png')}}" class="img-fluid" width="65" alt="">
                        </div>

                        <div class="process-box2 py-4 px-3 d-md-flex align-items-center w-100">
                            <div class="process-icon-box text-center me-lg-3 mb-lg-0 mb-3">
                                <img src="{{asset('assets/images/03/03icon04.png')}}" class="img-fluid process-icon" alt="">
                            </div>
                            <div class="">
                                <h5 class="text-262626 text-md-start text-center"><span style="font-size: smaller">Step 04. </span>審核通過快速撥款</h5>
                                <p class="text-363636 fw-normal mb-0">
                                    核貸成功後立即撥款，最快15分鐘拿到現金，永豐優質當舖幫助您迅速解決資金需求！
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-11 bg-sub-process w-m-fit mx-lg-0 mx-3 py-md-5">
                        <div class="row px-lg-0 px-3 py-5 offset-lg-1">
                            <div class="col-lg py-lg-2">
                                <h4 class="text-262626 mb-4 line-height-higher">
                                    當您有資金需求時，選擇一間合法、安全、值得信賴的當舖至關重要！<br>
                                    新竹永豐當舖提供專業借貸服務，讓您借得安心、還得輕鬆！
                                </h4>
                                <p class="text-363636 fw-normal mb-3 line-height">
                                    ✓ 審核快速，當日放款，不拖延您的資金調度<br>

                                    ✓ 手續簡便，不查聯徵、不影響信用<br>

                                    ✓ 合法利率、透明借款，讓您放心借輕鬆還
                                </p>
                                <div class="w-fit">
                                    <a href="javascript:void()">
                                        <div class="box-outline-main d-flex justify-content-between align-items-center wm-content">
                                            <span class="me-1">觀看成功案例</span>
                                            <span class="ms-1">〉</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 sub-process-empty"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>


@endsection
