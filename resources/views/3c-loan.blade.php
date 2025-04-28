@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">手機3C典當借款</h3>
                        <p class="text-de5511">小額借款最佳選擇，資金周轉無負擔！</p>
                    </div>

                    <div class="col-12 d-md-flex justify-content-center align-items-center mt-0 mb-lg-auto mb-4">
                        <div class="text-center">
                            <img src="{{asset('assets/images/02/ser_icon04.png')}}" class="img-fluid" alt="">
                        </div>
                        <img src="{{asset('assets/images/02/pointline.svg')}}" class="img-fluid d-md-block d-none" alt="">
                        <p class="text-363636 ms-3 mb-0 line-height">
                            手邊有手機、筆電、平板、相機、遊戲機等3C產品？現在就能輕鬆變現！<br>
                            新竹永豐當鋪提供手機3C典當借款，不限品牌、型號，新舊皆可估價，讓您輕鬆獲得週轉資金！
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
                                年滿18歲之國民，持有價物品者皆可辦理。
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
                                依法定利率，絕對低利保密。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                還款方式
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                可一次結清或分期攤還，當月也可以只繳息不還本金。
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
                                3.3C產品及保固書
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
