@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('custom-class-menu', 'menu-dark')

@section('content')
        <style>

        .text-blue{
                color:brown;
            }
</style>
        <div class="content-wrapper">
            <section class="section bg-white" data-clip-id="1" style="background-color: #0d0d0d">
                <div class="content">
                    <div class="full-width align-in-center pb-60">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Investment Proposal - Soft-Shelled Crabs</h1>
                            <div class="text-white font-size-12 p-10 mb-20">
                                
                                
                                <a class="text-yellow text-center mt-40 mb-20 expand-link" data-target="important_notes" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Important notes</strong>
                                </a>

                                <p class="expandable-content" id="important_notes">
                                    <strong>IMPORTANT RULES AND LIMITATIONS</strong>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Booking and payment</strong>
                                        - Secure your bundles of boxes by sending Peter a message on Facebook messenger, and feel free to ask Peter any questions. You will get a confirmation email and then you will pay the initial payment within 5 days and sending a proof of payment to Peter.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Ownership</strong>
                                         - You will never own any actual physical boxes nor compartments, neither purchased or free ones. All boxes and compartments fully belong to us, but what you own is a contract which entitles you to earn a yearly rental income from a box in a specified compartment in a machine.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Box compartment</strong>
                                         - In your contract, your purchased boxes will be assigned a unique number: 1-99,000. Let's say one box has number 125. This number represents a specific compartment space in our first machine. The compartments have a matching number, which gives you the right to earn an income from compartment number 125.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Free boxes</strong>
                                         - When we build a new machine, this new machine's compartment number 125, as in the example above, will now belong to your contract as well, and we will place a new box there for free, for you to earn a rental income from as well. And you will continue to get compartment 125 in every new machine. But there are limitations, see below.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                            <strong class="text-yellow">Free box limitations</strong>
                                         - As these boxes and especially the compartments cost money to make and maintain, your example box in number 125 must earn at least one full year income to qualify for further additional machine compartments and boxes. You can NEVER get more free boxes/compartments than what you are currently holding in ANY situation.
                                        <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-50">Example situation 1: Let's say that you now have box/compartment number 125 in three machines, and one year later we decided to make 4 new machines due to very high demand. But as you are only holding 3 boxes/compartments of 125, you will only be given boxes/compartment number 125 in 3 of the 4 machines for free as we need to finance the 4th machine's compartment number 125 externally OR you can choose to buy the fourth one for $8 if you which to.</span>
                                        <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-50">Example situation 2: Let's say that you now have compartment number 125 in three machines, and demand is slow for a few years without any new machines are built, and then demand suddenly get very high and we decide to build 4 new machines, then you will still only get compartment/box number 125 in 3 of the 4 machines as previous accumulated time does not count and cannot be used to claim additional free boxes.</span>
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Once a year</strong>
                                         - As a box/compartment must be in production for a full year before it has earned an additional free box/compartment, you will only be given free boxes/compartments once per year regardless of if any machines are finalized earlier. But as soon as your year is up, you will get your box/compartment number in these machines too.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Inflation</strong>
                                         - As we are giving you many boxes/compartments for free, your rental income will be fixed forever and will not be adjusted for any eventual inflation, deflation or devaluation of the US Dollar. 
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Drop in demand</strong>
                                         - You will earn a full $1.2 per year from each box as long as that box' machine runs at more than 80% of full production capacity, If it drops to 80% or below, your income will follow this drop as well. So, a production drop to below 80% in one machine will only affect that machine's particular boxes' income. Let's say we have 25 machines in full production, your initial $8 box will have earned you 24 free boxes after many years, which will earn you a yearly rental income of $30 (375%). But bad times might force us to pause 4.5 machines for a while, then you will only earn a full income from boxes in 20 machines and 50% of the machine that runs at half capacity = 20.5 boxes x $1.2 = $24.6 (307.5%).
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Sell your contract</strong>
                                         - You are free to sell your contract as whole, if you wish to, to anyone in the group who already has our contract, to the highest bid. Let me know, and I will post your sale to every contract-holder to bid on. 
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">A “machine”</strong> 
                                        here refers to a whole set of different machines in an automated production line which is planned to fit 99,000 boxes/compartments. So, each free box will be distributed based on a 99,000 box interwall regardless of if the machine's future layout will be changed to 30,000 or 150,000 boxes/compartments.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">A “box”</strong>
                                        here refers to a combo of a box and a compartment.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Risk</strong>
                                         - Be aware that investing in such a project is associated with very high risk and you can end up losing all your invested money. So be very sure to only invest money that you can afford to lose, and do not use money marked for other important and future expenses.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Faild payment for bookings</strong>
                                         - Please understand that if you have booked any of the offerings above and then fails to complete any outstanding payments 2 weeks after that our payment request has been sent out, you will sadly lose ALL your booked boxes and we must hold your earlier payments till we, with your FULLY cooperation and effort, have been able to find a new buyer for your boxes. Or we will let you earn an income from the boxes you actually paid for AND as a good deed, I might also add in free boxes to speed up the earnings, but only till you have gotten your initial payments back, and then we will have no more obligations left to you. (No interest will be paid).
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Me and I and my company</strong>
                                         - As the machines are legally owed by my company in HK, Yat Fung International Holding ltd with which you will sign the rental contract with, as all your rental fees will be paid from this company.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Accountable for loss</strong>
                                         - Peter Persson can never be accountable for any of your financial losses.
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

@endsection

@section('style_extra')
<style>
    .visiting-address {
        height: 300px;
    }

    .visiting-address #map {
        height: 100%;
    }

    .map-marker-label {
        display: block;
        border-radius: 5px;
        padding: 2px 8px;
    }
</style>
@endsection

@section('script_extra')

 
<script>
    if (Cookies.get('logged-in')) {
        $('.distributor-investor-menu').removeClass('display-none');
        $('.distributor-investor-menu').nextAll().hide();
        $('.distributor-investor-menu').show();
        $('.login-menu').hide();
        $('.logout-menu').show();
        $('.nav-visitor').addClass('display-none');
        $('.nav-distributor-investor').removeClass('display-none');
    }
</script>
@endsection
