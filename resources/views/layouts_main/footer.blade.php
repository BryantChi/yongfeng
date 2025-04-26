<!-- Footer Start -->
<div class="footer-line"></div>
<div class="container-fluid bg-de5511 footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pt-5 pb-3 border-bottom">
        <div class="row g-5">
            <div class="col-lg-auto">
                <div class="d-lg-flex align-items-end mb-4 pb-2 w-fit">
                    <img src="{{asset('assets/images/00-hp/footer_logo.svg')}}" class="img-fluid footer-logo me-2" alt="">
                    <p class="text-fef7f0 text-nowrap2 mb-0 mt-lg-0 mt-2"><span class="text-ffd2a5">》</span>竹北最推薦當鋪 10分鐘快速借款免留車
                    </p>
                </div>
                <div class="d-lg-flex align-items-center">
                    <p class="mb-02 text-white text-nowrap me-lg-2"><span
                            class="text-ffd2a5">服務專線：</span>03-5519-000</p>
                    <p class="mb-02 text-white text-nowrap ms-lg-2"><span class="text-ffd2a5">LINE
                            ID：</span>vip035519000</p>
                </div>
                <p class="mb-02 text-white text-nowrap"><span class="text-ffd2a5">店面服務地址：</span>新竹市環北路二段103號</p>
                {{-- <div class="d-lg-flex align-items-center">
                    <p class="mb-02 text-white text-nowrap me-lg-2"><span class="text-ffd2a5">本日人氣：</span>519</p>
                    <p class="mb-02 text-white text-nowrap ms-lg-2"><span class="text-ffd2a5">累計人氣：</span>30824</p>
                </div> --}}

                <div class="d-flex align-items-end">
                    <p class="text-ffd2a5 mb-0">本日人氣：</p>
                    <div class="d-flex" id="counter-today">
                        @if(isset($visitorCountToday))
                            @foreach (str_split($visitorCountToday) as $digit)
                                <img src="{{ asset('assets/images/00-hp/n' . $digit . '.png') }}" class="img-fluid mb-1" style="width: auto; height: 21px;" alt="{{ $digit }}">
                            @endforeach
                        @endif
                    </div>
                    &emsp;
                    <p class="text-ffd2a5 mb-0">累積人氣：</p>
                    <div class="d-flex" id="counter">
                        @if(isset($visitorCount))
                            @foreach (str_split(($visitorCount + 30824)) as $digit)
                                <img src="{{ asset('assets/images/00-hp/n' . $digit . '.png') }}" class="img-fluid mb-1" style="width: auto; height: 21px;" alt="{{ $digit }}">
                            @endforeach
                        @endif
                    </div>
                </div>

            </div>
            <div class="col-lg-auto">
                <p class="text-ffd2a5 mb-2 w-fit">
                    <img src="{{asset('assets/images/00-hp/footer_icon1.png')}}" class="img-fluid" alt="">
                    服務項目
                </p>
                <ul class="list-unstyled ps-0 line-height">
                    <li><a href="{{ route('locomotive') }}" class="text-white">機車借款</a></li>
                    <li><a href="{{ route('car') }}" class="text-white">汽車借款</a></li>
                    <li><a href="{{ route('gold') }}" class="text-white">黃金典當</a></li>
                    <li><a href="{{ route('3c-loan') }}" class="text-white">手機3C典當借款</a></li>
                    <li><a href="{{ route('microfinance') }}" class="text-white">小額信用債務整合</a></li>
                    <li><a href="{{ route('bontique') }}" class="text-white">精品名錶典當借款</a></li>
                </ul>
            </div>
            <div class="col-lg">
                <p class="text-ffd2a5 mb-2 w-fit">
                    <img src="{{asset('assets/images/00-hp/footer_icon2.png')}}" class="img-fluid" alt="">
                    借款須知
                </p>
                <ul class="list-unstyled ps-0 text-white line-height">
                    <li>1.還款期數：沒有綁約、可彈性還款、可一次清償。</li>
                    <li>2.月息1%起，年利率最低12%（提早結清，無違約金）。</li>
                    <li>3.無任何代辦手續費。</li>
                    <li>4.依據個人工作、薪水及各項負債授信條件不同而有所差異。</li>
                    <li>5.借款成本計算的參考案例：假設您貸一筆新台幣300,000元的款項，還款期為60個月，總費用年利率為12%，等於每月還款額度應為新台幣5,600元，而總還款額則為新台幣336,000元。
                    </li>
                </ul>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright py-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-auto text-center text-md-end mb-3 mb-md-0">
                <p class="mb-0">
                    <img src="{{asset('assets/images/00-hp/lock.png')}}" class="img-fluid" width="20" alt="">
                    <span>本網站採用全球最先進的TLS加密處理技術以確保所有傳輸資訊安全無憂</span>
                    <span>© Copyright 2025 All Rights Reserved 永豐當舖 Web Design Power By </span>
                    <a href="https://cheni.com.tw/" target="_blank">誠翊資訊</a>
                </p>
            </div>
            <!-- <div class="col-md-auto text-center text-md-start">
                <p class="mb-0 text-uppercase"></p>
            </div> -->
        </div>
    </div>
</div>
<!-- Copyright End -->
