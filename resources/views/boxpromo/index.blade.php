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
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Earn a good income from your own crab box</h1>
                            <div class="text-white font-size-12 p-10 mb-20">
                                <a class="text-yellow text-center mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Introduction</strong>
                                </a>
                                <p class="para sm_font-size-11 mt-20 mb-20">
                                    <strong class="text-yellow">Who am I?</strong> For those of you who might not know me so well. Let me present myself. I am Peter Persson, a 54-year-old Swedish machine designer (automation, robotics, and machine mechanics). But I am not your regular paper tossing desk-engineer. Surely, I love my desk and computer where I design everything, but I also love to get my hands dirty on a workshop floor while building my creations. I have been doing this as a self-employed entrepreneur for 34 years and I still love every minute of it 😊.<br><br>
                                    
                                    <strong class="text-yellow">Project</strong> - As many of you already know, I have been working on a large AI-driven high-tech soft-shell crab project for a while. Now after 6.5 years and 40-50,000 hours of project development, testing, prototyping, researching, designing, etc, etc, the project is reaching a final phase, and we have started to build our first full sized, but shorter machine, which will be extended later, and I need your help to speed things up and therefore invite you to be a part of it. <br><br>
                                    
                                    <strong class="text-yellow">Earlier boxes</strong> - As some of you might remember, I had a crab-box offering earlier, just before Covid struck us. All boxes got booked in a matter of days and a reserve list had to be created as well. But Covid made it impossible to continue the project, so I had to withdraw the offer and no money ever changed hands. <br><br>
                                    
                                    <strong class="text-yellow">New boxes</strong> - Now, Covid is more or less over, and the project has been back on track for a while and now ready for a new crab-box offering. This time it will come with a better income profile where the box-income will increasingly benefit from the project's growth, instead of being a fixed percentage as before.<br><br>
                                    
                                    <strong class="text-yellow">Why not offer shares instead?</strong> – Later, I will be offering you the opportunity to purchase shares in my company. But for now, due to these modest investments and the many people involved, if offering you shares, I would have to register my company as a publicly traded company. And due to very complex rules imposed on such a company, it would increase our administrative workload and costs 10-fold and be impossible for a small startup company like mine to manage at the beginning. We must grow to a significantly larger size first.<br><br>
                                    
                                    <strong class="text-yellow">How does it work?</strong> - You buy a crab-box for $8 and let me use it in our machine, for which I will pay you a $1.2 yearly rental fee. And as you are being an early adopter and believing in me and my project, I will also, as the project grows, use a part of the income from that box to buy an additional box, for each new machine we make, and give it to you for free, and you will now earn a rental income of $1.2 from that box as well. Example: If you buy one bundle of 500 boxes, I will give you 500 free boxes for every new machine we get into production, and you now have 1000 boxes to earn income from. So, as I will pay you a yearly rental fee of $1.2 for every box you have, including the ones you get for free, one day when capacity has grown to ten machines, you will earn a $12 every year from every one of your initial boxes you bought for $8.<br><br>
                                    
                                    <strong class="text-yellow">How can I afford this?</strong> - Well, one box will earn me around $12.6 per year as one box can produce 10.5 crabs each year. And this will be a very limited offer to people who know me, so it will not affect the whole project’s future economy that much. And as your contribution will help me to speed things up significantly, and that there will be a waiting period of between 18-24 months before your boxes start generating you an income, I will be more than happy to share the project’s growth with you, as a token of gratitude for your belief in me and my project. <br><br>
                                    
                                    <strong class="text-yellow">Huge market</strong> - And imagine, there is a $25 billion worth of crab market out there, of which $1.5-2 billion is soft-shell crab to tap into. So, it is not impossible that we could have anything between 50 - 300 machines in production within next 10 years from now, as we are the only one in the world who have automated this production process which will produce an unrivaled product quality and to an extremely low cost.<br><br>
                                    
                                    <strong class="text-yellow">Customer is waiting</strong> - We actually have a distribution request from a Korean customer already. A customer who has followed our project for over 4 years, and have also visited us in Vietnam, at two different occasions. He is asking for delivery of roughly 20 tons of soft-shell crabs per month, worth roughly $4.3 million per year, which equals production in 2-3 machines. And the Korean customer also believes that he can increase this volume significantly to 30-50 tons as soon as the current economic recession is over. So, just to satisfy this one single customer’s future demands, we might be required to have between 3-6 machines… And with 20-30 of such customers from different countries around the world, we might be required to have 50-300 machines in production within 10 years. My machine’s parts are designed to be cheap and fast to mass-produce and easy and fast to assemble. (Built within 2-3 months and ROI in 6-8 months).<br><br>
                                    Why do we only have one customer? Because it will take us about 1-2 years to just satisfy this single customer’s demands at the beginning. Surely, I have communicated with a few others, but it feels meaningless to engage them any further now as we will not be able to deliver to them for a while. But as soon as we are ready and have the production capacity for it, we will, for sure.
                                    
                                    <br> <br>

                                <a href="{{url('/boxpromo/offerings')}}" class="text-yellow text-center mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong><u>Get some boxes</u></strong><br>
                                    <span class="text-blue font-size-12"></span>
                                </a>

                                <p class="text-center text-yellow mt-40 mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Explanatory video</strong> - Long version
                                </p>
                                <video controls width="100%">
                                    <source src="{{url('storage/videos/crab_box_promo.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                                  
                                  <br>
                                  
                                  <p class="text-center text-yellow mt-40 mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Video for distributors</strong> - A bit slow but explains our uniqueness
                                    
                                
                                </p>
                                </p>
                                <video poster="{{asset('videos/thumb/SSC for Distributors-1.png')}}" controls width="100%">
                                    <!-- Specify the video source using the src attribute -->
                                    <source src="{{url('storage/videos/ssc_for_distributors.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                                  </video>

                                
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
