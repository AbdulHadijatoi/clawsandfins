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
                            <a class="margin-auto mb-10" href="{{url('boxpromo')}}"><img alt="English flag" src="{{('svg/engflag.svg')}}" style="width: 40px;">
                            <a class="margin-auto mb-10" href="{{url('boxpromo-vn')}}"><img alt="Vietnamese flag" src="{{('svg/vnflag.svg')}}" style="width: 40px;"></a>
                            
                            
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Skaffa en egen box och se dess årliga avkastning öka med 15% för varje maskin vi får upp.
                            <h2 class="h2 font-size-16 sm_font-size-14 text-center mb-10 text-white"> 2 maskiner = 2x 15% = 30%, 10 maskiner = 10x 15% = 150%, och så vidare...
                            </h2> 
                            
                            
                            
                            <div class="text-white font-size-12 p-10 mb-20">
                                
                                
                                 <p class="para sm_font-size-11 mt-20 mb-20">
                                    <strong>Läs allt, och följ länken i slutet av varje sida till nästa. Ytterligare information finns i menyn till vänster. Bara denna och nästa sida är översatta till Svenska. Använd översättningsfunktionen i din webbläsare för de övriga sidorna om något verkar oklart, eller fråga mig.   
                                    </strong><br><br>
                                    <a class="text-yellow text-center mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Introduktion</strong>
                                </a>
                                
                                 <strong class="text-yellow"></strong>Föreställ dig, det finns en krabbmarknad där ute, värd 250 miljarder kronor, av varav 15-20 miljarder kronor är den nuvarande marknadsstorleken för soft-shell-krabbor för oss att erövra. Och eftersom <strong>vi är dom enda i världen</strong> som har automatiserat productionsprocessen av soft-shell-krabbor, och som kommer att leverera en oöverträffad produktkvalitet och till en extremt låg produktionskostnad, är det inte helt omöjligt att vi att blir den dominerade aktören på denna marknad frömöver.  
                                        <br><br>
                                    <strong class="text-yellow">Hej på er alla. Peter här.</strong><br>
                                    Som många av er redan vet, har jag jobbat med ett stort AI-drivet high-tech soft-shell-krabbprojekt ett tag. Nu efter nästan 7 år och 40-50 000 timmar av projektutveckling med research, design, prototypbyggnation, och en hel massa testning, har projektet nått en slutfas och vi har börjat bygga vår första fullstora men kortare maskin (15m), som senare kommer att förlängas till fullängd (120m). Och jag behöver din hjälp för att speeda upp det hela. 
                                    <br><br>
                                    Ta en titt på projektets <a class="text-yellow" href="{{url('timeline/')}}">7-år långa tidslinje med MÅNGA foton.</a> 
                                    <br>
                           
                                    </p>
                                    
                                    <p class="para sm_font-size-11 mt-20 mb-20">
                                        <strong class="text-yellow"></strong>Så jag frågar dig, skulle du vara intresserad av att vara med i mitt projekt, och uppleva projektet inifrån, genom dess upp- och nedgångar, och följa utvecklingsprocessen, och kanske till och med bli personligen involverad och erbjuda projektet dina unika kunskaper och erfarenheter, och samtidigt tjäna en bra och växande inkomst ifrån det hela? 
                                        
                                        <br><br>
                                        
                                       
                                        
                                        <p class="para sm_font-size-11 mt-20 mb-20">
                                        <strong class="text-yellow">Min inbjudan </strong>- Jag erbjuder dig härmed att vara en del av mitt krabbprojekt genom att hjälpa mig att anskaffa kabbboxar för användning i min maskin, och som du kommer att tjäna en <strong>ständigt växande</strong> inkomst ifrån, allt eftersom projektet växer sig allt större. 

                                        
                                        
                                        <br><br>
                                        
                                        <strong class="text-yellow">Hur fungerar det? </strong>– Du köper de boxar du önskar för US$8 vardera, och hyr ut dem till mig, för användning i min maskin, och jag kommer att betala dig en 15 procentig (US$1,2) årlig avkastning för dem. <strong>Dessutom,</strong> som ett tecken på min tacksamhet för din tidiga tilltro till mig och mitt projekt, och för att du då har tålmodigt väntat över 18 månader innan dina boxar har börjat generera dig en inkomst, kommer jag mer än gärna, dela projektets vinst med dig, genom att ge dig en gratis box för varje ny maskin vi sätter i produktion, för varje box du hjälpte oss med i början, vilka också alstrar dig en 15% (US$1,2) avkastning vardera. Med detta arrangemang kommer din inkomst att öka i samma takt som hela projektet växer.
                                        <br>
                                    </p>
                                    <p class="font-size-14"><strong>Exempel:</strong></p>
                                    <ul style="display: block; list-style: disc" class="para sm_font-size-11 mt-0 mb-20 ml-20">
                                        <li>
                                            Med 2 maskiner i produktion kommer du att ha boxen du först betalade US$8 för, plus 1 box du fick gratis och du tjänar nu 15% (US$1,2) vardera från dem, vilket bli totalt US$2,4.
                                        </li>
                                        <li>
                                            Och när vi har 10 maskiner efter några år, kommer du fortfarande att ha din första box som du betalade US$8 för, plus 9 gratisboxar, alltså totalt 10 boxar som tjänar dig 15% (US$1,2) vardera, vilket bli totalt US$12. Ta en titt på <a class="text-yellow" href="{{url('https://clawsandfins.com/clawsandfins/public/storage/docs/box_rental_calculator_and_very_simple_project_budget.xlsx')}}">"Calculate your earnings (Excel)"</a> i menyn till vänster
                                        </li>
                                    </ul>
                                        

                                <p class="para sm_font-size-11 mt-20 mb-20">
                                    <strong class="text-yellow">En kund väntar </strong>- Vi har faktiskt redan en distributionsförfrågan från en koreansk kund. En kund som har följt vårt projekt i över 4 år, och även besökt oss i Vietnam, vid två olika tillfällen. Han ber om leverans av ungefär 20 ton soft-shell-krabbor per månad, värt cirka 45 miljoner kronor per år, vilket motsvarar produktion i 2-3 maskiner. Och den koreanska kunden tror också att han kan öka denna volym avsevärt till 30-50 ton så snart den nuvarande ekonomiska lågkonjunkturen är över. Så, bara för att tillfredsställa denna enda kunds framtida behov, kan vi behöva ha mellan 3-6 maskiner... Och med 20-50 av sådana kunder från olika länder runt om i världen, kan vi behöva ha 50-300 maskiner i produktion inom 10 år. 
                                    <br> <br>
                                    
                                    <strong class="text-yellow">Hur snabbt kan en maskin byggas? </strong>- Min maskins alla delar är designade för att vara billiga och snabba att masstillverka och enkelt och snabbt kunna monteras. Och om finanserna finns, kan en maskin byggas ihop på under 3 månader, och betala för sig själv på 6–8 månader.
                                    <br><br>
                                    

                                
                                <p class="text-center text-yellow mt-40 mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Förklarande video</strong> - Lång version.
                                </p>
                                <video controls width="100%">
                                    <source src="{{url('storage/videos/crab_box_promo.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                                  
                                  <br>
                                  
                                  <p class="text-center text-yellow mt-40 mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Video för distributörer</strong> - Aningen långsam, men förklarar vår unikhet.
                                    
                                
                                </p>
                                </p>
                                <video poster="{{asset('videos/thumb/SSC for Distributors-1.png')}}" controls width="100%">
                                    <!-- Specify the video source using the src attribute -->
                                    <source src="{{url('storage/videos/ssc_for_distributors.mp4')}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                  </video>
                                  </video>
                                  <br><br>

                                <a href="{{url('/boxpromo/offerings-swe')}}" class="text-yellow text-center mb-20" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong><u>Införskaffa egna boxar</u></strong><br>
                                    <span class="text-blue font-size-12"></span>
                                </a>
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
