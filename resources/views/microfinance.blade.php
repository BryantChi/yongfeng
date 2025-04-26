@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">小額信用債務整合</h3>
                        <p class="text-de5511">協助整合多筆債務，降低負擔！</p>
                    </div>

                    <div class="col-12 d-md-flex justify-content-center align-items-center mt-0 mb-lg-auto mb-4">
                        <div class="text-center">
                            <img src="{{asset('assets/images/02/ser_icon05.png')}}" class="img-fluid" alt="">
                        </div>
                        <img src="{{asset('assets/images/02/pointline.svg')}}" class="img-fluid d-md-block d-none" alt="">
                        <p class="text-363636 ms-3 mb-0">
                            當信用卡循環利息、貸款分期壓力逐漸增加，是否感到還款吃力、資金周轉困難？<br>
                            新竹永豐當鋪幫您整合所有債務，不再被卡債、車貸及多家銀行信貸追著跑！降低利息負擔，輕鬆整合還款！<br>
                            減輕還款壓力，讓財務管理更輕鬆！現在就聯繫新竹永豐當鋪，讓我們幫助您制定最合適的債務整合方案！
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
                                年滿18歲之國民，有信用卡負債或多筆小額貸款，希望降低利息、整合還款者皆可辦理。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                借款額度
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                提供彈性貸款方案，讓您一次整合多筆債務。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                借款利率
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                依借款額度與個人信用狀況調整最優惠利率。
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
                                2.第二證件（駕照、健保卡或其他有效證件）
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                3.收入證明（薪資轉帳紀錄、勞保明細、自營商可提供營業相關證明）
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                4.信用卡帳單或貸款明細（用於債務整合評估）
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                5.其他財力證明（如需爭取更高額度，可提供存摺、房屋或車輛權狀等資產證明）
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
