@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-fluid px-0 mx-0 pt-5">
            <div class="container">
                <div class="row g-lg-5 g-3 justify-content-center">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">當鋪知識</h3>
                        <p class="text-de5511">新竹永豐當舖帶您認識當舖的運作方式、借貸流程及常見問題，幫助您正確了解當舖，讓資金調度更靈活、更安心！</p>
                    </div>

                    <div class="col-lg-12">
                        <div class="d-lg-flex align-items-center justify-content-center mb-4">

                            <div
                                class="d-lg-none d-flex justify-content-between align-items-center category-dropdown w-100 mt-2">
                                <h5 class="mb-0 text-white text-uppercase fw-bold">案例分類</h5>
                                <span class="text-white c-down">
                                    <i class="fas fa-sort-down"></i>
                                </span>
                                <span class="text-white c-up">
                                    <i class="fas fa-sort-up"></i>
                                </span>
                            </div>
                            <div class="konwledge-category">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a class="nav-link {{ empty(request('classification_id')) ? 'active' : '' }}"
                                            href="{{ route('konwledge', ['search' => request('search')]) }}">全部案例</a>
                                    </li>
                                    @foreach ($classifications ?? [] as $classification)
                                        <li class="nav-item">
                                            <a class="nav-link {{ request('classification_id') == ($classification->id ?? '') ? 'active' : '' }}"
                                                href="{{ route('konwledge', ['classification_id' => $classification->id ?? '', 'search' => request('search')]) }}">
                                                {{ $classification->name ?? '' }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li class="nav-item"><a class="nav-link" href="#">更多分類</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">更多分類</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">更多分類</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">更多分類</a></li>
                                </ul>
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-12 h-100">
                        <div class="row g-3 justify-content-center">
                            <div class="col-12">

                                <h1 class="mb-2 konwledge-details-title w-100 text-center px-3">{{ $konwledge->title ?? '了解當舖借款，讓資金周轉更輕鬆！' }}</h1>

                                {{-- <div class="d-flex justify-content-center mb-2">
                                    <div class="classroom-details-title-line"></div>
                                </div> --}}
                                <div class="d-flex justify-content-center mb-3">
                                    <span class="konwledge-details-info">{{ \Carbon\Carbon::parse($konwledge->created_at ?? '')->format('Y-m-d') ?? '2025-06-05' }} | <span class="konwledge-details-info">{{ \App\Models\Admin\Classification::find($konwledge->classification_id ?? '')->name ?? '未分類' }}</span>
                                </div>

                                <div class="konwledge-details-content">

                                    @if ($konwledge->content ?? null != null)
                                        {!! $konwledge->content ?? '' !!}
                                    @else

                                    <img src="{{ asset('assets/images/04/know_insidepic.jpg') }}" class="img-fluid mb-3" alt="">

                                    <p class="text-363636 fw-bold">
                                        當鋪作為一種合法且歷史悠久的借貸方式，為許多人提供了靈活且即時的資金周轉管道。<br>
                                        然而，許多民眾對當鋪借款仍存有疑問，今天就讓我們帶您深入了解當舖的運作方式，幫助您在有資金需求時做出最佳選擇！
                                    </p>

                                    <p class="text-363636 fw-bold">
                                        <span class="text-de5511 fw-bold">當舖的基本運作方式</span><br>
                                        當鋪借款主要採用「質押借貸」模式，借款人提供有價物品作為抵押，當鋪依據物品的市場價值評估可借款的金額，並根據政府法規計算利息，確保借貸雙方的權益。
                                    </p>

                                    <p class="text-363636 fw-bold">
                                        <span class="text-de5511 fw-bold">當鋪可以典當哪些物品?</span><br>
                                        當鋪接受的質押品種類相當多元，以下是常見的可典當物品：<br>
                                        <span class="text-de5511 fw-bold">✓</span> 機車、汽車 - 免留車或可借可用，彈性借款。<br>

                                        <span class="text-de5511 fw-bold">✓</span> 黃金、鑽石、珠寶 - 依市場行情高價收當。<br>

                                        <span class="text-de5511 fw-bold">✓</span> 名錶、精品包 - CHANEL、LV、Rolex、OMEGA 等高端精品皆可質押借款。<br>

                                        <span class="text-de5511 fw-bold">✓</span> 手機、筆電、3C產品 - Apple、Samsung、Sony 等品牌產品快速變現。
                                    </p>

                                    <p class="text-363636 fw-bold">
                                        <span class="text-de5511 fw-bold">如何選擇合法、可靠的當舖？</span><br>
                                        1.確認是否為政府立案合格當鋪，確保借貸交易合法合規。<br>
                                        2.利率透明合理，遵守政府法定利率標準，避免過高利息或隱藏費用。<br>
                                        3.專業鑑價，確保公平，提供合理的借款額度，不壓低質押品價值。<br>
                                        4.服務態度與隱私保護，良好的當鋪會提供專業諮詢，確保客戶資訊安全。
                                    </p>

                                    <p class="text-363636 fw-bold">
                                        <span class="text-de5511 fw-bold">借款前應注意什麼?</span><br>
                                        1.確認利率與借款條件，避免額外費用或不合理條款。<br>
                                        2.選擇信譽良好的當鋪，避免不當收費或資訊外洩。<br>
                                        3.瞭解還款方式與期限，確保能如期贖回典當物品。
                                    </p>

                                    @endif

                                </div>


                            </div>

                        </div>

                    </div>

                    <div class="col-12 d-flex justify-content-center mt-4 mb-5">
                        <a href="{{ route('konwledge') }}">
                            <div class="box-outline-main d-flex justify-content-between align-items-center w-fit">
                                <span class="me-1">〈</span>
                                <span class="ms-1">返回列表</span>
                            </div>
                        </a>
                    </div>


                </div>




            </div>


        </div>

    </div>
@endsection


@push('page_scripts')
    <script>
        $(function() {
            // $(window).on('resize', function() {
            //     if ($(window).width() <= 992) {
            //         const $activityCategory = $('.activity-category').hide();
            //         $('.category-dropdown').find('.c-up').hide();

            //         $('.category-dropdown').on('click', function() {
            //             $activityCategory.toggle('1500');

            //             if ($activityCategory.is(':visible')) {
            //                 $(this).find('.c-up').show();
            //                 $(this).find('.c-down').hide();
            //             } else {
            //                 $(this).find('.c-up').hide();
            //                 $(this).find('.c-down').show();
            //             }
            //         });
            //     } else {
            //         $('.activity-category').show();
            //     }
            // }).trigger('resize');

        //     $(window).on('resize', function() {
        //         if ($(window).width() <= 992) {
        //             const $konwledgeCategory = $('.konwledge-category');
        //             $konwledgeCategory.hide();
        //             const $dropdown = $('.category-dropdown');
        //             $dropdown.find('.c-up').hide();

        //             // Remove previous click event handlers to prevent multiple bindings
        //             $dropdown.off('click').on('click', function() {
        //                 $konwledgeCategory.toggle(1500);
        //                 // Check visibility once and toggle icons accordingly
        //                 const isVisible = $konwledgeCategory.is(':visible');
        //                 $(this).find('.c-up').toggle(isVisible);
        //                 $(this).find('.c-down').toggle(!isVisible);
        //             });
        //         } else {
        //             // When the screen is wider than 992px, always show the category list
        //             $('.konwledge-category').show();
        //         }
        //     }).trigger('resize');
        // })
    </script>

    <script>
        $(function () {
            $(window).on('resize', function() {
                if ($(window).width() <= 992) {
                    const $konwledgeCategory = $('.konwledge-category').hide();
                    $('.category-dropdown').find('.c-up').hide();

                    $('.category-dropdown').on('click', function() {
                        $konwledgeCategory.slideToggle();

                        if ($konwledgeCategory.is(':visible')) {
                            $(this).find('.c-up').show();
                            $(this).find('.c-down').hide();
                        } else {
                            $(this).find('.c-up').hide();
                            $(this).find('.c-down').show();
                        }
                    });
                } else {
                    $('.konwledge-category').show();
                }
            }).trigger('resize');
        })


    </script>
@endpush
