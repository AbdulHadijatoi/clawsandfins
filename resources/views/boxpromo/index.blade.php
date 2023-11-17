@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('custom-class-menu', 'menu-dark')

@section('content')
        <!-- Content -->
        <style>
            .text-blue{
                color:brown;
            }

            .expandable-content {
                display: none;
            }

            .expanded {
                display: block;
            }

            .expand-link {
                cursor: pointer;
            }
        </style>
        <div class="content-wrapper">
            <section class="section bg-white" data-clip-id="1">
                <div class="content">
                    <div class="full-width align-in-center pb-60">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <h1 class="h1 text-default sm_font-size-35 text-center mb-10">Investment Proposal - Soft-Shelled Crabs</h1>
                            <div class="text-default font-size-12 p-10 mb-20">
                                <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                    <strong>Buy a crab box for $8</strong> - Pay only $2.67 now. Rent it out to me for use in my machine later for $1.2 (equals to 15% yearly return). And as the project grows, I will give you many additional boxes for free, and you will earn an additional $1.2 rental income from each box, including the free ones. So, 10 boxes earn you $12 which equals to 150% yearly return, 50 boxes earn you $60 (750%). 100 boxes earn you $120 (1500%) in yearly return, and so on.
                                    How can I afford this? One box will earn me $1.2 per harvested crab, we get 10.5 crabs out of one box each year, so that box earns me $12.6 per year. I will pay you a rental fee of $1.2 for the box, and then I will use a part of that box' profit to buy an additional box in the next machine we build, and I will give it to you for free, and you will now earn $1.2 from that free box as well. And I will continue to give you free boxes as the project grows.
                                    Why would I be so generous? Well, I will only offer this to very few people who know me, so it will not affect the project's future economy that much. And as your contribution will help me to speed things up significantly, and that there will be a waiting period of between 12-24 month before your box starts generating you an income, I will be more than happy to share the income from these boxes and their growth with you, as a token of gratitude for your belief in me and my project.
                                    
                                    <a><span class="text-blue expand-link" data-target="long-introduction">(Click to expand down)</span></a>
                                    <p class="para sm_font-size-11 text-default mt-20 mb-20 expandable-content" id="long-introduction">
                                        <strong>Who am I?</strong> For those of you who might not know me so well. Let me present myself. I am Peter Persson, a 54-year-old Swedish machine designer (automation, robotics, and machine mechanics). But I am not your regular paper tossing desk-engineer. Surely, I love my desk and computer where I design everything, but I also love to get my hands dirty on a workshop floor while building my creations. I have been doing this as a self-employed entrepreneur for 34 years and I still love every minute of it 😊.
                                        <br><strong>Project</strong> - As many of you already know, I have been working on a large AI-driven high-tech soft-shell crab project for a while. Now after 6.5 years and 40-50,000 hours of project development, testing, prototyping, researching, designing, etc, etc, the project is reaching its final phase, and we have started to build our first full sized, but shorter machine, which will be extended later, and I need your help to speed things up. 
                                        As some of you might remember, I had a crab-box offering earlier, just before Covid struck us. All boxes got booked in a matter of days and a reserve list had to be created as well. But Covid made it impossible to continue the project, so I had to withdraw the offer and no money ever changed hands. 
                                        Now, Covid is more or less over, and the project has been back on track for a while and now ready for a new crab-box offering. This time it will come with a better income profile where the box-income will increasingly benefit from the project's growth, instead of being a fixed percentage as before.
                                        <br><strong>How?</strong> - Buy a crab-box for $8 and let me use it in our machine, for which I pay you a yearly rental fee. And as you are being an early adopter and believing in me and my project, I will also, as the project grows, use a part of the income from that box to buy an additional one, for each new machine we make, and give it to you for FREE, and you will earn a rental income from that box as well. If you buy 1000 boxes, I will give you 1000 free boxes for every new machine we get into production.
                                        I will pay you a yearly rental fee of $1.2 for every box you have, including the ones you get for free. That means that a box in one machine will earn you $1.2, and boxes in ten machines will earn you $12 every year from your initial $8 purchase, which equals to a yearly return of 150%, for as long as you choose to, as there is no time-limit attached. And imagine, there is a $1.5-2 billion worth of soft-shell crab market out there to tap into, so it is not impossible that we could have anything between 50-300 machines in production within next 10 years from now, as we are the only one in the world who have automated this production process which will produce an unrivaled product quality and to an extremely low cost. Imagine earning an income from 500-5000 boxes in each one of these 50-300 machines.
                                        <br><strong>Business potential</strong> - We actually have a letter of intent from a Korean customer already. A customer who has followed our project for over 4 years, and also visited us in Vietnam, at two different occasions. He is asking for delivery of roughly 20 tons of soft-shell crabs per month, worth roughly $4.5 million per year, which equals production in 3 machines. And the Korean customer also believes that he can increase this volume significantly to 30-50 tons as soon as the current economic recession is over. So, just to satisfy this one single customer's future demands, we might be required to have between 4-6 machines… And with 20-30 of such customers from different countries around the world, we might be required to have 50-300 machines in production within 10 years. My machine's parts are designed to be cheap and fast to mass-produce and easy and fast to assemble. (Built within 2-3 month and ROI 6-8 month) 
                                        Why only one customer? As it will take us about 1-2 years to just satisfy this single customer's demands at the beginning. I have communicated with a few others, but it feels meaningless to engage them any further now as we will not be able to deliver to them for a while. But as soon as we are ready and have production capacity for it, we will, for sure.
                                    </p>
                                </p>

                                

                                <a href="#" class="sm_font-size-11 text-default text-center mt-40 mb-20 expand-link" data-target="offerings" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Offerings</strong> 
                                    <span class="text-blue">(Click to expand down)</span>
                                </a>

                                <p class="para sm_font-size-11 text-default mt-20 mb-20 expandable-content" id="offerings">
                                    <strong>Offerings</strong>: Book all your boxes and pay only 33% now. Boxes are sold in bundles of 500 boxes for $4000 each. The reason for these bundles is to minimize future administrative workload. If you wish to buy fewer boxes, see if you can partner with some friends, or contact me and I will see if I can partner you up with someone in the same situation. But remember full bundle buyers will have priority on availability, so you might end up without any. 
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>$8 box with $1.2 return - Early adopters, Available now, pay only 33% ($1334 per bundle)</strong>
                                        50 bundles are available: High risk, machine still in building stage, longer waiting. But it will also have the highest long-term rewards with unlimited growth. You will be given free boxes as the project grows without any limitations, if we grow for example to having 100 machines, you will be given 99 free boxes, for every box you initially purchased, totaling 100 boxes including the one you purchased for $8, and earn you a yearly 1500% return ($120) from them. AND you will also be given first priority on any future offerings as well, based on your box holding volume. Price per bundle is $4000, but you only pay a third now, $1334 which will secure your 1 bundle of 500 boxes. Later in February 2024, you will pay the next third $1334, after you have been shown our progress with a full-sized machine, 5.5 meters tall, but shorter at 15 meters long. (it will be fully extended to about 120 meters with two rows with 49,500 boxes each when all fine adjustments are completed) The machine you will be shown in February 2024 will still not be completed nor operational, but it will show you our progress. In May 2024, you will pay the last third, $1333 after you have been shown a complete but still short version, with 5 service robots (software might not be final yet though, so time will tell how much they will move around automatically at this demonstration. 
                                        
                                        <br><strong>$12 box with $1.2 return - For more careful adopters. Available quarter 3, 2024 but can be booked now (10% deposit)</strong>
                                        100 bundles will be available quarter 3, 2024. Machine fully tested and operational so less risk, shorter waiting till you first rental payment. You and earlier box holders will be invited to visit us here on site in Vietnam, and you be shown our full size but short version of our production machine in action with live crabs. 4 weeks later you will be asked to pay for your booked bundles in full at $6000 per bundle.  This offer will come with a limit of a maximum of 15 free boxes, which will limit your maximal returns to 150% per year, regardless of how many machines we will have in production. 
                                        <span style="font-weight: bold; text-decoration: underline">This offering's price and benefits can be changed or even be canceled at anytime without any prior notice depending of how things develops. Your prebooked boxes will still be available for you in this current state though. </span>
                                    </span>
                                </p>

                                <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                    <strong>Time Plan</strong> -The estimated time plan for the first full-length machine to be in full production is slightly more than a year from now, at around the beginning of 2025. You will receive your first rental fees as soon as the machine has been in full production for at least half a year, maybe even a bit earlier depending on how smooth things develop. It will be my priority to honor our rental agreement as soon as production income allows for it. The current estimate is that you will get your first rental payment sometime around quarter 3 2025. But remember, these time frames are just rough estimates.
                                </p>

                                <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                    <strong>Crab box promo video</strong> 
                                </p>
                                <p class="para sm_font-size-11 text-default mt-20 mb-20">
                                    <strong>Video for distributors Video</strong> 
                                </p>
                                
                                <a class="sm_font-size-11 text-default text-center mt-40 mb-20 expand-link" data-target="important_notes" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Important notes</strong> 
                                    <span class="text-blue">(Click to expand down)</span>
                                </a>

                                <p class="expandable-content" id="important_notes">
                                    <strong>IMPORTANT RULES AND LIMITATIONS</strong>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Booking and payment</strong>
                                        - Secure your bundles of boxes by sending Peter a message on Facebook messenger, and feel free to ask Peter any questions. You will get a confirmation email and then you will pay the initial payment within 5 days and sending a proof of payment to Peter.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Ownership</strong>
                                         - You will never own any actual physical boxes nor compartments, neither purchased or free ones. All boxes and compartments fully belong to us, but what you own is a contract which entitles you to earn a yearly rental income from a box in a specified compartment in a machine.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Box compartment</strong>
                                         - In your contract, your purchased boxes will be assigned a unique number: 1-99,000. Let's say one box has number 125. This number represents a specific compartment space in our first machine. The compartments have a matching number, which gives you the right to earn an income from compartment number 125.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Free boxes</strong>
                                         - When we build a new machine, this new machine's compartment number 125, as in the example above, will now belong to your contract as well, and we will place a new box there for free, for you to earn a rental income from as well. And you will continue to get compartment 125 in every new machine. But there are limitations, see below.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                            <strong>Free box limitations</strong>
                                         - As these boxes and especially the compartments cost money to make and maintain, your example box in number 125 must earn at least one full year income to qualify for further additional machine compartments and boxes. You can NEVER get more free boxes/compartments than what you are currently holding in ANY situation.
                                        <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-50">Example situation 1: Let's say that you now have box/compartment number 125 in three machines, and one year later we decided to make 4 new machines due to very high demand. But as you are only holding 3 boxes/compartments of 125, you will only be given boxes/compartment number 125 in 3 of the 4 machines for free as we need to finance the 4th machine's compartment number 125 externally OR you can choose to buy the fourth one for $8 if you which to.</span>
                                        <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-50">Example situation 2: Let's say that you now have compartment number 125 in three machines, and demand is slow for a few years without any new machines are built, and then demand suddenly get very high and we decide to build 4 new machines, then you will still only get compartment/box number 125 in 3 of the 4 machines as previous accumulated time does not count and cannot be used to claim additional free boxes.</span>
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Once a year</strong>
                                         - As a box/compartment must be in production for a full year before it has earned an additional free box/compartment, you will only be given free boxes/compartments once per year regardless of if any machines are finalized earlier. But as soon as your year is up, you will get your box/compartment number in these machines too.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Inflation</strong>
                                         - As we are giving you many boxes/compartments for free, your rental income will be fixed forever and will not be adjusted for any eventual inflation, deflation or devaluation of the US Dollar. 
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Drop in demand</strong>
                                         - You will earn a full $1.2 per year from each box as long as that box' machine runs at more than 80% of full production capacity, If it drops to 80% or below, your income will follow this drop as well. So, a production drop to below 80% in one machine will only affect that machine's particular boxes' income. Let's say we have 25 machines in full production, your initial $8 box will have earned you 24 free boxes after many years, which will earn you a yearly rental income of $30 (375%). But bad times might force us to pause 4.5 machines for a while, then you will only earn a full income from boxes in 20 machines and 50% of the machine that runs at half capacity = 20.5 boxes x $1.2 = $24.6 (307.5%).
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Sell your contract</strong>
                                         - You are free to sell your contract as whole, if you wish to, to anyone in the group who already has our contract, to the highest bid. Let me know, and I will post your sale to every contract-holder to bid on. 
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>A “machine”</strong> 
                                        here refers to a whole set of different machines in an automated production line which is planned to fit 99,000 boxes/compartments. So, each free box will be distributed based on a 99,000 box interwall regardless of if the machine's future layout will be changed to 30,000 or 150,000 boxes/compartments.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>A “box”</strong>
                                        here refers to a combo of a box and a compartment.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Risk</strong>
                                         - Be aware that investing in such a project is associated with very high risk and you can end up losing all your invested money. So be very sure to only invest money that you can afford to lose, and do not use money marked for other important and future expenses.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Faild payment for bookings</strong>
                                         - Please understand that if you have booked any of the offerings above and then fails to complete any outstanding payments 2 weeks after that our payment request has been sent out, you will sadly lose ALL your booked boxes and we must hold your earlier payments till we, with your FULLY cooperation and effort, have been able to find a new buyer for your boxes. Or we will let you earn an income from the boxes you actually paid for AND as a good deed, I might also add in free boxes to speed up the earnings, but only till you have gotten your initial payments back, and then we will have no more obligations left to you. (No interest will be paid).
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Me and I and my company</strong>
                                         - As the machines are legally owed by my company in HK, Yat Fung International Holding ltd with which you will sign the rental contract with, as all your rental fees will be paid from this company.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 text-default mt-20 mb-20 ml-20">
                                        <strong>Accountable for loss</strong>
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
    document.addEventListener("DOMContentLoaded", function () {
      const expandLinks = document.querySelectorAll(".expand-link");
  
      expandLinks.forEach(function (link) {
        link.addEventListener("click", function (event) {
          event.preventDefault();
          const targetId = link.getAttribute("data-target");
          const targetContent = document.getElementById(targetId);
  
          if (targetContent) {
            expandLinks.forEach(function (otherLink) {
              if (otherLink !== link) {
                const otherTargetId = otherLink.getAttribute("data-target");
                const otherTargetContent = document.getElementById(otherTargetId);
                if (otherTargetContent) {
                  otherTargetContent.classList.remove("expanded");
                }
              }
            });
  
            targetContent.classList.toggle("expanded");
          }
        });
      });
    });
  </script>
<!-- Temporary Script for Logged in User >>> -->
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
<!-- >>> End -->
@endsection
