@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-fluid px-0 mx-0 pt-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">借款成功案例</h3>
                        <p class="text-de5511">新竹永豐當舖提供快速、安全、彈性的借貸服務，審核通過率高達99%！</p>
                    </div>



                    <div class="col-lg-12 h-100">

                        <div class="row g-3 justify-content-center">
                            <div class="col-12 d-flex justify-content-end">
                                <p class="text-gray" style="font-size: 14px;">共有 {{ $casesInfo->total() ?? 0 }} 則成功案例</p>
                            </div>
                            @if ($casesInfo->isEmpty())
                            <div class="col-lg-6 mb-4">
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
                            <div class="col-lg-6 mb-4">
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
                            @endif


                            @foreach ($casesInfo ?? [] as $case)
                            <div class="col-lg-6 mb-4">
                                <div class="case-box">
                                    <div class="case-header text-center mb-4">
                                        <p class="text-363636 fw-normal case-industry mb-2">{{$case->name}}</p>
                                        <h5 class="text-262626 case-title">{{$case->case_title}}</h5>
                                    </div>
                                    <div class="case-content">
                                        <div class="text-363636 fw-normal text-justify text-indent-0 case-content-text">
                                            {!! $case->case_content !!}
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach

                        </div>


                    </div>


                    <div class="overflow-auto mb-3">
                        {{ $casesInfo->onEachSide(3)->links('layouts_main.custom-pagination') }}
                    </div>


                </div>

            </div>

        </div>

    </div>
@endsection

