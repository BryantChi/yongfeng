@extends('layouts_main.master')

@section('content')
    <div class="hp-s1-section">

        <x-sub-hero></x-sub-hero>

        <!-- Services Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row justify-content-center align-items-center2">
                    <div class="col-12 text-center">
                        <h3 class="text-262626">常見問答</h3>
                        <p class="text-de5511">為了讓您清楚了解借貸流程，新竹永豐當舖特別整理了常見問題，幫助您解答疑惑。</p>
                    </div>

                    <div class="col-lg-12 mb-5">
                        <div class="faq-info py-5 px-4">
                            <p class="text-363636 fw-normal mb-0">
                                無論您是初次借款，還是對當舖借貸方式不熟悉，都可以透過這些問答獲得資訊；<br>
                                若仍是覺得不清楚或是想了解更多，歡迎免費洽詢<span class="text-429100">LINE線上客服 官方ID：vip035519000</span>或是來電詢問，<br>
                                我們都有親切的專員為您服務。
                            </p>
                            <div class="faq-info-empty d-md-none"></div>
                        </div>

                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q1.當鋪借款需要準備什麼文件？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    申請借款時，通常需要提供身分證正本，若以機車或汽車借款，則需攜帶行照。<br>
                                    部分情況可能需補充其他文件，詳細可來電永豐當舖或線上諮詢。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q2.典當借款的利息如何計算？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    永豐當鋪利息依政府法規訂定，每月利息透明公開，不會有額外隱藏費用，詳細金額依借款額度與典當品項而定。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q3.當舖借款會影響個人信用嗎？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    不會。當舖借款屬於質押借貸，不查個人信用紀錄，也不影響銀行信用評分。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q4.需要抵押什麼才能借款？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    可以用機車、汽車、黃金、珠寶、名錶、精品包、手機、筆電等有價物品作為抵押借款。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q5.物品典當後還能贖回嗎？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    可以！在約定期限內支付利息與本金，即可將物品贖回。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q6.當舖借款可以分期還款嗎？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    當舖提供彈性還款方式，您可選擇一次清償或按期支付利息，詳情可與永豐洽談合適方案。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q7.如果無法如期還款怎麼辦？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    若無法如期還款，可與永豐當舖聯繫商討展期方案，避免物品被法定處分。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q8.當舖借款比銀行貸款有什麼優勢？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    永豐當舖借款審核快速，手續簡便，不查信用，適合臨時資金周轉需求；銀行貸款則審核較久，條件限制較多。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q9.當舖可以借多少金額？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    借款額度依抵押品的價值評估，通常可借市場行情價的一定比例，確切金額需經永豐當鋪專業鑑定後確認。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mb-4">
                        <div class="hp-faq-box bg-white align-items-center p-2">
                            <div class="hp-faq-item">
                                <h6 class="text-de5511 hp-faq-title bg-fef7f0 px-2 py-2">Q10.永豐當舖的借款流程是什麼？</h6>
                                <p class="text-363636 fw-normal text-justify text-indent-0 hp-faq-text px-2 mb-0">
                                    簡單四步驟：攜帶物品、文件 → 現場鑑價、審核 → 確認借款額度與利率 → 簽約放款，全程快速透明，當天即可拿到現金！
                                </p>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>

    </div>


@endsection
