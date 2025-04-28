@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">黃金典當</h3>
                        <p class="text-de5511">專業鑑定，高價收當黃金！</p>
                    </div>

                    <div class="col-12 d-md-flex justify-content-center align-items-center mt-0 mb-lg-auto mb-4">
                        <div class="text-center">
                            <img src="{{asset('assets/images/02/ser_icon03.png')}}" class="img-fluid" alt="">
                        </div>
                        <img src="{{asset('assets/images/02/pointline.svg')}}" class="img-fluid d-md-block d-none" alt="">
                        <p class="text-363636 ms-3 mb-0 line-height">
                            永豐專業鑑價師免費為您評估，黃金借款享超低利率，讓您的資金週轉更靈活、更便利！<br>
                            新竹永豐當鋪擁有五星級安全倉儲，比銀行更安心，免保人、保密機制完善，借還彈性自由！<br>
                            無違約金、無手續費，還可根據您的質押物規劃專屬貸款額度，有動用才計息，讓您借得靈活、還得輕鬆！
                        </p>
                    </div>

                    <div class="col-lg-6 mb-4">
                        <div class="ser-header d-flex align-items-center mb-3 text-light">
                            <img src="{{asset('assets/images/02/02icon1.png')}}" class="img-fluid me-3" alt="">
                            借款資訊
                        </div>
                        <div class="ser-content">
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                申請條件
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                年滿18歲之國民皆可辦理。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                借款額度
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                視客戶所提供之擔保品而定。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                還款方式
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                可一次結清或分期攤還，當月也可以只繳息不還本金。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                申貸限制
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                新竹永豐當鋪屬於民間融資機構，因此借款人與銀行之間的債務協商或不良信用紀錄，皆不影響本公司的貸款申辦。
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <div class="ser-header d-flex align-items-center mb-3 text-light">
                            <img src="{{asset('assets/images/02/02icon2.png')}}" class="img-fluid me-3" alt="">
                            應備文件
                        </div>
                        <div class="ser-content">
                            <p class="mb-2 text-363636 fw-normal">
                                1.個人身分證明文件（雙證件）
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                2.質押物品之相關證明文件或保證書（非必要）
                            </p>
                        </div>
                    </div>




                </div>

            </div>
        </div>

    </div>

    @include('components.hp-step')

    @include('components.hp-service-item')


@endsection
