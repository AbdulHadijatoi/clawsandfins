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
                                
                                
                                <a class="text-yellow text-center mt-40 mb-20 expand-link" data-target="long-introduction" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Long version</strong>
                                </a>
                                <p class="para sm_font-size-11 mt-20 mb-20 expandable-content" id="long-introduction">
                                    <strong>Who am I?</strong> For those of you who might not know me so well. Let me present myself. I am Peter Persson, a 54-year-old Swedish machine designer (automation, robotics, and machine mechanics). But I am not your regular paper tossing desk-engineer. Surely, I love my desk and computer where I design everything, but I also love to get my hands dirty on a workshop floor while building my creations. I have been doing this as a self-employed entrepreneur for 34 years and I still love every minute of it 😊.<br><br>
                                    <strong>Project</strong> - As many of you already know, I have been working on a large AI-driven high-tech soft-shell crab project for a while. Now after 6.5 years and 40-50,000 hours of project development, testing, prototyping, researching, designing, etc, etc, the project is reaching its final phase, and we have started to build our first full sized, but shorter machine, which will be extended later, and I need your help to speed things up. <br><br>
                                    As some of you might remember, I had a crab-box offering earlier, just before Covid struck us. All boxes got booked in a matter of days and a reserve list had to be created as well. But Covid made it impossible to continue the project, so I had to withdraw the offer and no money ever changed hands. <br><br>
                                    Now, Covid is more or less over, and the project has been back on track for a while and now ready for a new crab-box offering. This time it will come with a better income profile where the box-income will increasingly benefit from the project's growth, instead of being a fixed percentage as before.<br><br>
                                    <strong>How?</strong> - Buy a crab-box for $8 and let me use it in our machine, for which I pay you a yearly rental fee. And as you are being an early adopter and believing in me and my project, I will also, as the project grows, use a part of the income from that box to buy an additional one, for each new machine we make, and give it to you for FREE, and you will earn a rental income from that box as well. If you buy 1000 boxes, I will give you 1000 free boxes for every new machine we get into production.<br><br>
                                    I will pay you a yearly rental fee of $1.2 for every box you have, including the ones you get for free. That means that a box in one machine will earn you $1.2, and boxes in ten machines will earn you $12 every year from your initial $8 purchase, which equals to a yearly return of 150%, for as long as you choose to, as there is no time-limit attached. And imagine, there is a $1.5-2 billion worth of soft-shell crab market out there to tap into, so it is not impossible that we could have anything between 50-300 machines in production within next 10 years from now, as we are the only one in the world who have automated this production process which will produce an unrivaled product quality and to an extremely low cost. Imagine earning an income from 500-5000 boxes in each one of these 50-300 machines.<br><br>
                                    <strong>Business potential</strong> - We actually have a letter of intent from a Korean customer already. A customer who has followed our project for over 4 years, and also visited us in Vietnam, at two different occasions. He is asking for delivery of roughly 20 tons of soft-shell crabs per month, worth roughly $4.5 million per year, which equals production in 3 machines. And the Korean customer also believes that he can increase this volume significantly to 30-50 tons as soon as the current economic recession is over. So, just to satisfy this one single customer's future demands, we might be required to have between 4-6 machines… And with 20-30 of such customers from different countries around the world, we might be required to have 50-300 machines in production within 10 years. My machine's parts are designed to be cheap and fast to mass-produce and easy and fast to assemble. (Built within 2-3 month and ROI 6-8 month)
                                    Why only one customer? As it will take us about 1-2 years to just satisfy this single customer's demands at the beginning. I have communicated with a few others, but it feels meaningless to engage them any further now as we will not be able to deliver to them for a while. But as soon as we are ready and have production capacity for it, we will, for sure.
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
