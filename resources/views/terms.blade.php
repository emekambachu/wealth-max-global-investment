@extends('layouts.main')

@section('title')
    Terms and Conditions
@endsection

@section('content')
    <div class="page-head section row-vm light has-bg-image">
        <div class="imagebg bg-image-loaded" style="background-image: url(&quot;{{ asset('main/images/page-inside-bg.jpg') }}&quot;);">
            <img src="{{ asset('main/images/page-inside-bg.jpg') }}" alt="page-head">
        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2>About Us</h2>
                    <div class="page-breadcrumb">
                        <ul class="breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active"><span>Terms and Conditions</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section section-pad">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="text-block">
                        <h2>General</h2>
                        <p>The terms and conditions contained herein apply to the investment services of Wealth Max Global Investment investment company made available through its official website at www.phoenixbinaryinvestors.com. All information made available to the investor/client pertaining to this Promotion, including information contained within websites of Wealth Max Global Investment, form a legal agreement between the investor/client and Wealth Max Global Investment.<br>
                            By electing to participate in any of the investment businesses of Wealth Max Global Investment, you are indicating you agree to be bound by the terms and conditions contained herein and contained within website materials of Wealth Max Global Investment, coupled with any Client Agreement(s) executed.<br>
                            Wealth Max Global Investment reserves the right to amend these terms and conditions at any time. Such modifications shall become effective immediately at the time the amendment is executed and posted on the Wealth Max Global Investment website. Wealth Max Global Investment is not required to make announcements as to such amendments.</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="text-block">
                        <h2>Eligible Accounts</h2>
                        <p>To be eligible to participate in any of the services of Wealth Max Global Investment, clients/investors or their representatives must be eighteen (18) years of age or older, or the legal age of majority in the client's/investor's home country, state or province; be legally entitled to use our services in accordance with applicable law; currently maintain a cryptocurrency account with a Wallet; and make a deposit with Wealth Max Global Investment totaling no less than the stipulated account on the chosen investment product (the Initial Deposit) during the investment Period as defined herein.</p>
                    </div>
                </div>

                <div class="col-md-12 res-m-bttm">
                    <div class="text-block">
                        <h2>Account Restrictions</h2>
                        <p>If there are promotions of bonuses on accounts within Wealth Max Global Investment, these promotions will be based on a One bonus per account per client. Also, accounts are only transferable with requests made, reviewed, and granted by the management of Wealth Max Global Investment.</p>
                    </div>
                </div>

                <div class="col-md-12 res-m-bttm">
                    <div class="text-block">
                        <h2>Account Activation and Operation</h2>
                        <p>Wealth Max Global Investment will credit all Eligible Accounts, as defined herein, with deposits (as made by investor) totaling an amount determined by the initial deposit made by client, as set forth in the table of plans. Such deposit must be made within 48 hours of creating an investment account or the said account shall be deleted.<br>
                            Client must complete the required lots (as stipulated in the chosen plan) prior to the activation of the investment account within 48 hours of opening the account. Charges on investment account operation and/or maintenance shall be deducted upon completion of investment cycle. Withdrawals can only be made after an account completes its initial investment cycle (IIC) as stipulated in the plan details.</p>
                    </div>
                </div>

                <div class="col-md-12 res-m-bttm">
                    <div class="text-block">
                        <h2>Release and Withdrawal Restrictions</h2>
                        <p>Client is unable to withdraw or transfer any funds from Client account before or during the initial investment cycle, unless there's a court order to withdraw the account, or Client gives the investment company a 48-hour prior notification of withdrawal by mail or phone call.<br>
                            Should Wealth Max Global Investment receive a request by mail or phone to withdraw funds prior to the account cycle satisfying the stipulated time, it is then authorized to process such request only after it has debited the account in an amount equal to the operation and/or maintenance fee. Should Client make a withdrawal request during the initial investment cycle and prior to the completion of the cycle, any bonus shall be terminated.<br>
                            Wealth Max Global Investment's Client agrees that Wealth Max Global Investment is not liable for any market losses, including margin calls, as a result of a withdrawal made by Wealth Max Global Investment in order to make payout or retain operation/maintenance charges.</p>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="text-block">
                        <h2>Exploitation Misuse and Conditions</h2>
                        <p>Client is unable to withdraw or transfer any funds from Client account before or during the initial investment cycle, unless there's a court order to withdraw the account, or Client gives the investment company a 48-hour prior notification of withdrawal by mail or phone call.<br>
                            Should Wealth Max Global Investment receive a request by mail or phone to withdraw funds prior to the account cycle satisfying the stipulated time, it is then authorized to process such request only after it has debited the account in an amount equal to the operation and/or maintenance fee. Should Client make a withdrawal request during the initial investment cycle and prior to the completion of the cycle, any bonus shall be terminated.<br>
                            Wealth Max Global Investment's Client agrees that Wealth Max Global Investment is not liable for any market losses, including margin calls, as a result of a withdrawal made by Wealth Max Global Investment in order to make payout or retain operation/maintenance charges.</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
