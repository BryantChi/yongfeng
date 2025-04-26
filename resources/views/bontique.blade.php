@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">精品名錶典當借款</h3>
                        <p class="text-de5511">專業鑑定，高價收當，變現快速！</p>
                    </div>

                    <div class="col-12 d-md-flex justify-content-center align-items-center mt-0 mb-lg-auto mb-4">
                        <div class="text-center">
                            <img src="{{asset('assets/images/02/ser_icon06.png')}}" class="img-fluid" alt="">
                        </div>
                        <img src="{{asset('assets/images/02/pointline.svg')}}" class="img-fluid d-md-block d-none" alt="">
                        <p class="text-363636 ms-3 mb-0">
                            不限品牌、不限款式，讓您的精品輕鬆變現，永豐優質當鋪擁有專業鑑價師，讓您的精品獲得公正評估與高額放款，<br>
                            並設有高規格倉儲保管，確保您的精品安全無憂，無論何時皆可靈活贖回，不影響您的珍藏價值，借得更安心。<br>
                            借款流程簡單透明，審核迅速、當日即可放款，幫助您即時解決資金需求。
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
                                年滿18歲之國民，持有有價物品皆可辦理。
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
                                借款利率
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                依法定利率絕對息低保密。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                還款方式
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                可彈性還款。可一次清償本息或分期攤還，也可以依照需求還款。
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
                                1.身分證正本
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                2.第二證件（駕照或健保卡）正本
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                3.質押物品之相關證明文件
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                4.保證書（非必要）
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
