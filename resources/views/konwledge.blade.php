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
                            <div class="col-12 d-flex justify-content-end">
                                <p class="text-gray" style="font-size: 14px;">共有 {{ $konwledges->total() ?? 0 }} 則知識案例</p>
                            </div>
                            @if ($konwledges->isEmpty())
                            <div class="col-12 konwledge-list-item mb-4 d-flex justify-content-center">
                                <div class="row hp-konwledge-box bg-white align-items-center p-2 w-100">
                                    <div class="col-lg-auto p-0 pe-lg-2 mb-lg-0 mb-3 text-center">
                                        <a href="{{ route('konwledge-details-mock') }}">
                                            <img src="{{asset('assets/images/00-hp/know_pic.jpg')}}" class="img-fluid hp-konwledge-img"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg p-0 ps-2">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('konwledge') }}">
                                                <p class="text-79787b type ps-2">知識分類</p>
                                            </a>
                                            <p class="text-79787b date">2022-01-01</p>
                                        </div>
                                        <a href="{{ route('konwledge-details-mock')}}">
                                            <h5 class="text-262626 hp-konwledge-title">了解當鋪借款，讓資金周轉更輕鬆！</h5>
                                        </a>
                                        <p class="text-363636 fw-normal text-justify text-indent-0 hp-konwledge-text">
                                            了解當舖借款，讓資金週轉更輕鬆！
                                            當鋪作為一種合法且歷史悠久的借款方式，為許多人提供
                                            了靈活且及時的資金週轉管道。然而，許多民眾對當鋪借款仍存有疑問... more
                                        </p>
                                        <div class="d-flex justify-content-end mb-3">
                                            <a href="{{ route('konwledge-details-mock')}}" class="hp-konwledge-link text-de5511">
                                                觀看內容 ＋
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif


                            @foreach ($konwledges ?? [] as $konwledge)
                            <div class="col-12 konwledge-list-item mb-4 d-flex justify-content-center">
                                <div class="row hp-konwledge-box bg-white align-items-center p-2 w-100">
                                    <div class="col-lg-auto p-0 pe-2 mb-lg-0 mb-3">
                                        <a href="{{ route('konwledge-details', ['id' => $konwledge->id, 'classification_id' => request('classification_id')]) }}">
                                            <img src="{{ asset('assets/images/00-hp/know_pic.jpg') }}"
                                            class="img-fluid hp-konwledge-img" alt="">
                                        </a>
                                    </div>
                                    <div class="col-lg p-0 ps-2">
                                        <div class="d-flex justify-content-between">
                                            <a href="{{ route('konwledge', ['classification_id' => $konwledge->classification_id]) }}">
                                                <p class="text-79787b type ps-2">
                                                    {{ \App\Models\Admin\Classification::find($konwledge->classification_id)->name }}
                                                </p>
                                            </a>

                                            <p class="text-79787b date">{{ \Carbon\Carbon::parse($konwledge->created_at)->format('Y-m-d') ?? '2025-01-01' }}</p>
                                        </div>
                                        <a href="{{ route('konwledge-details', ['id' => $konwledge->id, 'classification_id' => request('classification_id')]) }}">
                                            <h5 class="text-262626 hp-konwledge-title">{{ $konwledge->title }}</h5>
                                        </a>

                                        @php
                                            // 移除圖片標籤
                                            $cleanContent = preg_replace('/<img[^>]*>/i', '', $konwledge->content ?? '');
                                            // 移除其他 HTML 標籤
                                            $cleanText = strip_tags($cleanContent);
                                            // 截取前100字（處理UTF-8中文）
                                            $preview = mb_substr($cleanText, 0, 100);
                                        @endphp
                                        <div class="text-363636 fw-normal text-justify text-indent-0 hp-konwledge-text">
                                            {!! $preview ?? '' !!}
                                        </div>
                                        <div class="d-flex justify-content-end mb-3">
                                            <a href="{{ route('konwledge-details', ['id' => $konwledge->id, 'classification_id' => request('classification_id')]) }}" class="hp-konwledge-link text-de5511">
                                                觀看內容 ＋
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>


                    </div>


                    <div class="overflow-auto mb-3">
                        {{ $konwledges->onEachSide(3)->links('layouts_main.custom-pagination') }}
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
