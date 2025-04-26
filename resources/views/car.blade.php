@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">汽車借款</h3>
                        <p class="text-de5511">不限車齡，免留車，利率透明，彈性還款！</p>
                    </div>

                    <div class="col-12 d-md-flex justify-content-center align-items-center mt-0 mb-lg-auto mb-4">
                        <div class="text-center">
                            <img src="{{asset('assets/images/02/ser_icon02.png')}}" class="img-fluid" alt="">
                        </div>
                        <img src="{{asset('assets/images/02/pointline.svg')}}" class="img-fluid d-md-block d-none" alt="">
                        <p class="text-363636 ms-3 mb-0">
                            不限車種與車齡，即使有貸款或信用瑕疵也能申辦！<br>
                            免留車，原車可正常使用，手續簡單、審核快速，最快15分鐘撥款！<br>
                            借款流程公開透明，新竹永豐當鋪為您爭取最高貸款額度，助您輕鬆獲得所需資金！
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
                                年滿18歲之國民，免聯徵、不限職業，八大行業、攤販皆可辦理。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                借款額度
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                最高額度可貸全車價。
                            </p>
                            <p class="mb-2 text-de5511">
                                <img src="{{asset('assets/images/02/02icon_tick.png')}}" class="img-fluid" alt="">
                                借款利率
                            </p>
                            <p class="mb-2 text-363636 fw-normal">
                                月息2%起，汽車凡無貸款亦可享優惠方案。
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
                        <div class="ser-content row">
                            <div class="col-lg-6">
                                <p class="mb-2 text-de5511 fw-normal">
                                    分期車
                                </p>
                                <p class="mb-4 text-363636 fw-normal">
                                    1.身分證正本<br>
                                    2.行照正本<br>
                                    3.近三個月車貸繳款證明
                                </p>
                                <p class="mb-2 text-de5511 fw-normal">
                                    無貸款車
                                </p>
                                <p class="mb-4 text-363636 fw-normal">
                                    1.身分證正本<br>
                                    2.行照正本<br>
                                    3.私章<br>
                                    4.新領牌照登記者
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <p class="mb-2 text-de5511 fw-normal">
                                    公司車
                                </p>
                                <p class="mb-4 text-363636 fw-normal">
                                    1.負責人身分證正本<br>
                                    2.營利事業登記證<br>
                                    3.行照正本<br>
                                    4.公司大小章<br>
                                    5.車貸繳款證明或新領牌照登記書
                                </p>
                            </div>

                        </div>
                    </div>




                </div>

            </div>
        </div>

    </div>

    @include('components.hp-step')

    @include('components.hp-service-item')


@endsection
