<!-- Navbar Start -->
<div class="container-fluid bg-white sticky-top pt-lg-3 pt-3 pb-2 site-navbar" id="header">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-2 py-lg-0">
            <a href="{{ route('index') }}" class="navbar-brand">
                <img class="img-fluid" src="{{asset('assets/images/00-hp/top_logo.svg')}}" alt="Logo">
            </a>
            <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="{{ route('about') }}" class="nav-item nav-link">公司簡介</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">服務項目</a>
                        <div class="dropdown-menu bg-white m-0">
                            <a href="{{ route('locomotive') }}" class="dropdown-item">機車借款</a>
                            <a href="{{ route('car') }}" class="dropdown-item">汽車借款</a>
                            <a href="{{ route('gold') }}" class="dropdown-item">黃金典當</a>
                            <a href="{{ route('3c-loan') }}" class="dropdown-item">手機3C典當</a>
                            <a href="{{ route('microfinance') }}" class="dropdown-item">小額信用債務整合</a>
                            <a href="{{ route('bontique') }}" class="dropdown-item">精品名錶典當借款</a>
                        </div>
                    </div>
                    <a href="{{ route('process') }}" class="nav-item nav-link">借款流程</a>
                    <a href="{{ route('konwledge') }}" class="nav-item nav-link">當舖知識</a>
                    <a href="{{ route('cases') }}" class="nav-item nav-link">成功案例</a>
                    <a href="{{ route('faq') }}" class="nav-item nav-link">常見問答</a>
                </div>
                <div class="border-start ps-4 d-none d-lg-block">
                    <div class="d-flex align-items-center">
                        <a href="https://www.instagram.com/yf_vip5519000/p/DG8lVIzyecX/" target="_blank" class="me-1">
                            <img src="{{asset('assets/images/00-hp/menu_ig.png')}}" class="img-fluid" width="24" alt="">
                        </a>
                        <a href="https://www.facebook.com/share/12DeuNaAko6/?mibextid=wwXIfr" target="_blank" class="">
                            <img src="{{asset('assets/images/00-hp/menu_fb.png')}}" class="img-fluid" width="24" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
