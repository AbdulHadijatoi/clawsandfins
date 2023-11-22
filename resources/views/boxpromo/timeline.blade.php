@extends('layouts.master')

@section('body_class')
page-no-arc
@endsection

@section('custom-class-menu', 'menu-dark')

@section('content')
        <!-- Content -->
        <style>
            .text-brown{
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

            .mt-50{
                margin-top: 50px;
            }
            .max-width-472{
                max-width: 472px;
            }
            .text-red{
                color: red;
            }
            .text-bold{
                font-weight: 700;
            }
        </style>
        <div class="content-wrapper">
            <section class="section bg-white" data-clip-id="1" >
                <div class="content">
                    <div class="full-width align-in-center pb-60">
                        <div class="_75-width md_90-width flex-column justify-center max-w700">
                            <h1 class="h1 text-black sm_font-size-35 text-center mb-10">Project timeline.</h1>
                            <div class="text-black font-size-12 p-10 mb-20">
                                <h3 class="text-black font-size-25 sm_font-size-18 text-center mb-10">Past Achievements</h3><br>
                                <h3 class="text-black font-size-25 sm_font-size-18 text-center mb-10">2016 – Why soft-shelled crabs?</h3>
                                <p class="para sm_font-size-11">After having finalized a large project for a customer, I wanted to build something for myself this time. I began brainstorming new and old product ideas for about a year when my girlfriend at the time told me that anyone who could come up with a solution for farming a tiny crab used in a traditional Thai dish, Somtam, or Papaya-salad as most know it, would make a fortune.
                                <br>I researched this crab and other crabs for a while, and I stumbled on an article about soft-shelled crabs and how they are made, and how enormously labor intensive it was to produce, and that there were no machines developed for it, at all.
                                <br>As a seasoned automation and machine designer and builder, I thought this was a very fascinating problem to investigate further.</p><br>
                                
                                <h3 class="text-black font-size-25 sm_font-size-18 text-center mb-10">2016 - 2017 - Beginning</h3>
                                <p class="para sm_font-size-11">Lose ideas, research, brainstorming and concept designs, pond farm surveys in Thailand, customer, and market research etc.</p>
                                <div><img src="{{asset('timeline_images/image95.png')}}"></div>
                                <p class="para sm_font-size-11">A very early concept design.</p>
                                <div><img src="{{asset('timeline_images/image97.jpg')}}"></div>
                                <p class="para sm_font-size-11">My first soft-shelled crab in a fancy restaurant, but it did not look so appetizing, so I had my doubts I must admit, BUT it was indeed very delicious. “Wow, this IS a real thing“, was my first thought.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2017 - Soft-shell crab fraud</h3>
                                <p class="para sm_font-size-11">My research revealed early on that a significant number of fraudsters in the soft-shelled crab industry are selling ice-water and gelatin instead of crabs. This package with supposedly 1000-grams of crabs which I bought at a local supermarket, had only 495 grams of crabs in it, the rest was ice-water..</p>
                                <div><img src="{{asset('timeline_images/image96.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image99.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image98.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image102.png')}}"></div>
                                <p class="para sm_font-size-11">1000-gram soft-shell crab was actually only 495 gram, and 620 grams were water and packaging.</p>
                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2017 July - Moved to Vietnam</h3>
                                <p class="para sm_font-size-11">My soft-shell crab research led me to Vietnam. I left Thailand, as Vietnam has one of the best Scylla crabs in the world, and Thailand mostly import their Scylla crabs from Myanmar and Vietnam, so it was not optimal for obvious reasons to continue my work in Thailand.</p>
                                <div><img src="{{asset('timeline_images/image100.jpg')}}"></div>
                                <p class="para sm_font-size-11">A project office established in Vung Tau Vietnam.</p>
                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2018 Jan - Assistant, Ms.Van</h3>
                                <p class="para sm_font-size-11">My Vietnamese assistant, Ms.Van, with a B.A. in both Business law and Aquaculture, started to work for the project, and later become my business partner and co-founder.</p>
                                <div><img src="{{asset('timeline_images/image106.png')}}"></div>
                                <p class="para sm_font-size-11">Ms. Van's happiness shines as the sun </p>
                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2018 - Early 3D printing</h3>
                                
                                <p class="para sm_font-size-11">Began 3D printing concept part for testing</p>
                                <div><img src="{{asset('timeline_images/image104.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image111.png')}}"></div>
                                <p class="para sm_font-size-11">Our first 3D-printed part. Here are fixtures printed for accuratly bending our acrylic boxes.</p>
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2018 - Prototyping</h3>
                                <p class="para sm_font-size-11">After my concept seemed to work, I had a clear picture of how to design our test equipment with real crabs.</p>
                                <div><img src="{{asset('timeline_images/image108.png')}}"></div>
                                <p class="para sm_font-size-11">Our first ever crab box on my kitchen table. It is made of a laser cut acrylic which was then heat-bended to shape, to be used for our live crab testing equipment.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2018 - Our laboratory</h3>
                                <p class="para sm_font-size-11">More research. We set up our own laboratory in collaboration with the Research Institute for Aquaculture in Vung Tau with the goal of testing equipment, concepts and everything else needed to keep the crabs healthy.</p>
                                <div><img src="{{asset('timeline_images/image110.jpg')}}"></div>
                                <p class="para sm_font-size-11">National Breeding Center for Southern Marine Aquaculture.</p>
                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2018 - 2019 - Live crabs</h3>
                                <p class="para sm_font-size-11">Research, laboratory tests with live crabs, experimenting with different box designs, different box colors, different light inlets, different feeds, different water compositions etc.</p>
                                <div><img src="{{asset('timeline_images/image113.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image115.jpg')}}"></div>
                                <p class="para sm_font-size-11">Our “test bench“ for the next coming year with room for 120 crabs in boxes of different size and 30 different light conditions.</p> 
                                <div><img src="{{asset('timeline_images/image116.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image117.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image118.jpg')}}"></div>
                                <p class="para sm_font-size-11">An early stage in our RAS water treatment system, from which we learned a lot about minerals, water chemistry, and bacteriology.</p>
                                <div><img src="{{asset('timeline_images/image119.jpg')}}"></div>
                                <p class="para sm_font-size-11">Daily water testing</p>
                                <div><img src="{{asset('timeline_images/image120.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image121.png')}}"></div>
                                <p class="para sm_font-size-11">Crabs, The one on the green box is an empty shell from a newly molted soft-shell crab which resides inside the box. </p>
                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2019 June - Our first potential customer</h3>
                                <p class="para sm_font-size-11">Our first potential customer, from Korea, loved our new high-tech concept and was very eager to come and visit us. They told us that it was impossible to find enough supply for their current demand of 20-30 ton soft-shell crabs per month, and that they mostly could only find 10 ton. With more supply, they said they could sell much more, and even offered us to buy at a price of 10-15% over market price, just to secure supply.</p>
                                <div><img src="{{asset('timeline_images/image84.jpg')}}"></div>
                                <p class="para sm_font-size-11">Our first and only customer meeting as they wanted to buy everything we could produce. Daniel, Minh, customer and me. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2019 - Lab testing finalized</h3>
                                <p class="para sm_font-size-11">Our lab research came to a successful end. We harvested all our laboratory crabs and had a BBQ and ate them, and no one had any complaints. The meat was perhaps slightly softer, one said, but that is all, and all agreed that the taste was as usual and delicious.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2019 - More 3D printed parts for testing</h3>
                                A few more 3D-printed parts. All for concept testing.
                                <div><img src="{{asset('timeline_images/image85.png')}}"></div>
                                <p class="para sm_font-size-11">3D printed parts</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2019 - Factory Design</h3>
                                <p class="para sm_font-size-11">The development and design of our future factory. This factory can hose 10 production lines (they work in pairs in this pict). We will build one section at the time first.</p>
                                <div><img src="{{asset('timeline_images/image86.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image88.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image89.jpg')}}"></div>
                                <p class="para sm_font-size-11">Factory building where the roof has been removed to better visualize the production line and water treatment.</p>
                                <div><img src="{{asset('timeline_images/image90.jpg')}}"></div>
                                <p class="para sm_font-size-11">Water treatment</p>
                                <div><img src="{{asset('timeline_images/image91.jpg')}}"></div>
                                <p class="para sm_font-size-11">The only stage that requires personnel, is where boxes on a conveyor belt are unloaded and loaded with crabs. The conveyor belt leads to a shuttles station where boxes are picked up and delivered to the automated production lines.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2019 - Plant site survey</h3>
                                <p class="para sm_font-size-11">Plant site survey in Ca Mau, Nam Can in South Vietnam for 10 months, surveyed suitable buildings, land areas, networking with government officials and landowners. Conducted building and land preparation cost surveys. Visited seed crab suppliers, as well as the machine design work continued.</p>
                                <div><img src="{{asset('timeline_images/image92.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image93.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image94.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image20.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image22.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image23.jpg')}}"></div>
                                </p>Plant site survey in Ca Mau</p>
                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2019 - We got invited</h3>
                                <p class="para sm_font-size-11">We got invited to an opening ceremony of IPEC (Investment Promotion And Enterprise Support Center) of Ca Mau province, in which we were offered governmental support, legal support, and tax exemption. The event was covered by Vietnamese press as well, so now we are famous, hahaha &#x1f60a;</p>
                                <div><img src="{{asset('timeline_images/image24.jpg')}}"></div>
                                <p class="para sm_font-size-11">Daniel and me on the upper row</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2020 - Final design ready</h3>
                                <p class="para sm_font-size-11">The final design is ready for machine parts and assemblies to be built and tested.</p>
                                <div><img src="{{asset('timeline_images/image25.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image26.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image27.png')}}"></div>
                                <p class="para sm_font-size-11">Some of the production line's all equipment ready to be built and tested.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2020 - Electronics development</h3>
                                <p class="para sm_font-size-11">Design, build and testing of our proprietary inspection electronics has begun.</p>
                                <div><img src="{{asset('timeline_images/image28.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image29.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image30.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image1.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image2.png')}}"></div>
                                <p class="para sm_font-size-11">Inspector unit electronics are ready for real life testing.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2020 - 2021 - Covid halted everything</h3>
                                <p class="para sm_font-size-11">Covid hit us, everything had to be placed on idle, and we could only continue with online research, and I got almost a full year for myself to spend on optimizing the machine design further. This design has become way better, cheaper, and faster to manufacture. I am VERY happy with this new design.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2021 April - photo shot session</h3>
                                <p class="para sm_font-size-11">We arranged a big photo shot session with professional chefs and photographers to produce pictures of a large numbers of soft-shell crab dishes to be used on our website in future promotional material.</p>
                                <div><img src="{{asset('timeline_images/image3.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image4.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image5.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image6.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image7.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image8.jpg')}}"></div>
                                <p class="para sm_font-size-11"> Food photo shooting</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2021 - Company mascot</h3>
                                <p class="para sm_font-size-11">Development of a company mascot/character and company colors and graphical patterns, the goal was not to make modern and stiff logotype, but to create a highly rememberable and charming character and recognizable company colors and patterns, to be uses on product packaging later on.</p>
                                <div><img src="{{asset('timeline_images/image9.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image10.png')}}"></div>
                                
                                <div><img src="{{asset('timeline_images/image43.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image44.jpg')}}"></div>
                                <p class="para sm_font-size-11">Our mascot Pete and logo, and our 5 robots.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 Jan - Warehouse and covid is over</h3>
                                <p class="para sm_font-size-11">Covid is over more or less. Renting a 500 sqm warehouse for further testing and the making and assembling of the first production line. Arranged an office space and built two living quarters inside the warehouse to save money on rents and be able to work much longer days and nights.</p>
                                <div><img src="{{asset('timeline_images/image45.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image46.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image47.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image48.jpg')}}"></div>
                                <p class="para sm_font-size-11">Our new warehouse where we will assemble and test machine components, and finally build all machines needed for a full production line to work. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2021-2022 - Website developed</h3>
                                <p class="para sm_font-size-11">Our website developed, from scratch, and with a fairly advanced backend system for managing, website, future distributors and investors. </p>
                                <div><img src="{{asset('timeline_images/image49.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image50.png')}}"></div>
                                <p class="para sm_font-size-11">Our website </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Explainer video graphics</h3>
                                <p class="para sm_font-size-11">A ton of whiteboard graphics and animations were produced for a coming distributor explainer video.</p>
                                <div><img src="{{asset('timeline_images/image51.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image52.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image42.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image33.png')}}"></div>
                                <p class="para sm_font-size-11">Some of many whiteboard graphics for our explainer video. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Video production</h3>
                                <p class="para sm_font-size-11">A product explainer video for distributors was produced. </p>
                                <div><img src="{{asset('timeline_images/image34.png')}}"></div>
                                <p class="para sm_font-size-11">Group picture of all characters in the video </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Financial model and budget</h3>
                                <p class="para sm_font-size-11">Financial model and budget finalized. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Investor promotion videos</h3>
                                <p class="para sm_font-size-11">Two investor promotion videos were produced. The videos are a bit overselling, so I need to rework them later when it is time to use them.</p>
                                <div><img src="{{asset('timeline_images/image35.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image36.png')}}"></div>
                                <p class="para sm_font-size-11">investor promotion videos </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Hard-to-get parts</h3>
                                <p class="para sm_font-size-11">Researched suppliers of time consuming hard-to-get parts for the short line and began to order them. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Custom made self-clinching nuts arrived</h3>
                                <p class="para sm_font-size-11">Our custom designed and very difficult to-get-manufactured screws and self-clinching nuts arrived to us at last.</p>
                                <div><img src="{{asset('timeline_images/image37.png')}}"></div>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Inspection unit</h3>
                                <p class="para sm_font-size-11">We built a prototype of our inspection unit.</p>
                                <div><img src="{{asset('timeline_images/image38.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image39.png')}}"></div>
                                <p class="para sm_font-size-11">Inspection unit (blurred) </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Updated electronics</h3>
                                <p class="para sm_font-size-11">Inspector unit electronics got an update.</p>
                                <div><img src="{{asset('timeline_images/image40.jpg')}}"></div>
                                <p class="para sm_font-size-11">Updated electronics </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 - Mid-chassis prototype</h3>
                                <p class="para sm_font-size-11">Build and tested a part of the final mid-chassis.</p>
                                <div><img src="{{asset('timeline_images/image41.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image31.png')}}"></div>
                                <p class="para sm_font-size-11">&nbsp; A few sections of the mid-chassis. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 Dec - Light tent</h3>
                                <p class="para sm_font-size-11">We build this contraption to be able to test different light sources for our machine vision system.</p>
                                <div><img src="{{asset('timeline_images/image32.jpg')}}"></div>
                                <p class="para sm_font-size-11">Temporary light testing rig </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 Dec - AI vision testing rig</h3>
                                <p class="para sm_font-size-11">We started to test our AI software and needed as rig for it</p>
                                <div><img src="{{asset('timeline_images/image67.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image68.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image69.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image70.png')}}"></div>
                                <p class="para sm_font-size-11">Test rig for inspection unit and AI tests. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2022 Dec - 2023 May - Endurance testing</h3>
                                <p class="para sm_font-size-11">Long term endurance testing of different CNC parts, 3D printed parts, 3D resins, model servos, geared motors etc, etc. Some tests lasted for 6 month which equals to 10-210 years of production, yea 210+ years :-D depending which test run. All these testing to ensure that all equipment and components will last.</p>
                                <div><img src="{{asset('timeline_images/image71.png')}}"></div>
                                <p class="para sm_font-size-11">Different machine assemblies in a longevity test with different loads. Not so pretty perhaps, but very efficient. </p>

                              
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 - Corrosion testing</h3>
                                <p class="para sm_font-size-11">Aggressive long-term corrosion testing of different materials as our crabs will be kept in a saltwater environment, we made our own simple, but yet very effective saltwater spray enclosure, to test how well all our equipment can withstand corrosion, down to individual screws and nuts </p>
                                <div><img src="{{asset('timeline_images/image72.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image73.jpg')}}"></div>
                                <p class="para sm_font-size-11">Parts tested in saltwater spray for a while. The right hand stainless 304 screw will not last long. But the left hand anodized Alu-6061 screw will last. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 13th Jan - AI vision works</h3>
                                <p class="para sm_font-size-11">Tested the inspection AI&#39;s machine vision electronics live for the first time, and it works even better than expected. It is VERY accurate but perhaps a bit slow, but fast enough for our application. I&rsquo;m very happy with it.</p>
                                <div><img src="{{asset('timeline_images/image74.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image64.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image65.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image66.png')}}"></div>
                                <p class="para sm_font-size-11">Our vision system works perfectly well. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 21 st &nbsp;Feb - Our customer's second visit</h3>
                                <p class="para sm_font-size-11">Our customer, from Korea, visited us again for a second time and we began discussing our cooperation more in depth for the next coming years.</p>
                                <div><img src="{{asset('timeline_images/image57.png')}}"></div>
                                <p class="para sm_font-size-11">Our biggest fan &#x1f60a; &nbsp;and me </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 - Testing of large water valves</h3>
                                <p class="para sm_font-size-11">A setup for longevity testing of large water valves used for our sections has been built and testing begun. As &ldquo;section valves&rdquo; are such a critical part of the crab&rsquo;s wellbeing, we want to evaluate a few different valve variants from different makers to be sure that we will get good ones, and the test will also tell us after how many cycles they will be due for replacement. </p>
                                <div><img src="{{asset('timeline_images/image58.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image59.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image60.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image61.png')}}"></div>
                                <p class="para sm_font-size-11">A temporary large valve longevity test rig. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 - Autonomous shuttle electronics</h3>
                                <p class="para sm_font-size-11">Began developing of our proprietary electronics for our autonomous shuttles</p>
                                <div><img src="{{asset('timeline_images/image62.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image63.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image53.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image54.png')}}"></div>
                                <p class="para sm_font-size-11">Our proprietary upper and lower control electronics for our autonomous delivery shuttles. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 - Machines and equipment</h3>
                                <p class="para sm_font-size-11">Research and purchasing of machines and equipment needed for assembling parts and building our first full size production line. </p>
                                <div><img src="{{asset('timeline_images/image55.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image56.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image101.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image103.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image105.png')}}"></div>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 - Aluminum profiles arrived</h3>
                                <p class="para sm_font-size-11">Our own custom designed aluminum profiles finally arrived, used for the production line&rsquo;s shuttle tracks, robot tracks and rubber curtains. </p>
                                <div><img src="{{asset('timeline_images/image107.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image109.jpg')}}"></div>
                                <p class="para sm_font-size-11">Custom made aluminum profiles </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 - Aluminum sheets arrived</h3>
                                <p class="para sm_font-size-11">Our laboratory tested and approved aluminum sheets finally arrived and will be laser cut and used to build the production line and robot chassis from.</p>

                                <div><img src="{{asset('timeline_images/image112.jpg')}}"></div>
                                <p class="para sm_font-size-11">1.5 ton lab tested and approved aluminum sheets. </p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 - Faster inspector electronics</h3>
                                <p class="para sm_font-size-11">A faster inspector AI microprocessor was decided, and a higher resolution image sensor, so a new revision of the inspector electronics began development. The added speed might help to increase production capacity a bit as we have been able to speed up other steps in the process as well.</p>
                                {{-- <div><img src="{{asset('timeline_images/image17.png')}}"></div> --}}
                                {{-- <div><img src="{{asset('timeline_images/image21.png')}}"></div> --}}
                                {{-- <div><img src="{{asset('timeline_images/image19.png')}}"></div> --}}
                                
                                <div><img src="{{asset('timeline_images/image18.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image17.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image21.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image19.png')}}"></div>
                                <p class="para sm_font-size-11">Inspector machine vision PCB in development.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Sept - Robot and shuttle &nbsp;parts delivered</h3>
                                <p class="para sm_font-size-11">Got delivery of a lot of CNC parts, motors, electronics for the service robots and shuttles.</p>
                                <div><img alt="Several tables with papers on it" src="{{asset('timeline_images/image14.png')}}"></div>
                                <p class="para sm_font-size-11">A lot of CNC parts and electronics arrived.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Sept - Robot and shuttle &nbsp;assembling</h3>
                                <p class="para sm_font-size-11">Started to assembly service robot drivers, shuttles, and Scara arm.</p>
                                <div><img src="{{asset('timeline_images/image13.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image16.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image15.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image12.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image11.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image87.jpg')}}"></div>
                                <p class="para sm_font-size-11">Assembling robot driver, shuttles and a scara arm.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Sept - Shuttle electronics in testing</h3>
                                <p class="para sm_font-size-11">Shuttle electronics are manufactured and are in testing, waiting for them to arrive here.</p>
                                <div><img src="{{asset('timeline_images/image81.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image80.png')}}"></div>
                                <p class="para sm_font-size-11">Shuttle electronics are ready for testing</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Sept - New inspecton PCB ready</h3>
                                <p class="para sm_font-size-11">The new revision inspection image detection PCBs are manufactured and are waiting for their components to be assembled.</p>
                                <div><img src="{{asset('timeline_images/image83.png')}}"></div>
                                <div><img src="{{asset('timeline_images/image82.png')}}"></div>
                                <p class="para sm_font-size-11">New faster machine vision PCBs.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Sept - Design of robots drive electronics</h3>
                                <p class="para sm_font-size-11">The design of the main service robot drive electronics has been initiated, as well as the robot arm controller.</p>
                                <div><img src="{{asset('timeline_images/image77.png')}}"></div>
                                <p class="para sm_font-size-11">Schematics for the service robot drive electronic.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Sept - Custom made close loop servos arrived</h3>
                                <p class="para sm_font-size-11">Our close loop servos has arrived. These have been specially made for us and tested by ourselves to last for over 5 million cycles with our expected load. </p>
                                <div><img src="{{asset('timeline_images/image76.jpg')}}"></div>
                                <p class="para sm_font-size-11">Custom made close loop servos.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Oct - Welding chassis sections and fixtures</h3>
                                <p class="para sm_font-size-11">We began to test build and weld the chassis sections. And tested our welding fixtures as well </p>
                                <div><img src="{{asset('timeline_images/image79.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image78.jpg')}}"></div>
                                <div><img src="{{asset('timeline_images/image75.jpg')}}"></div>
                                <p class="para sm_font-size-11">Leg and pillar on their test fixtures.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Oct - First pillar leg</h3>
                                <p class="para sm_font-size-11">Test welded a pillar leg for the production line to evaluate optimal weld bead order based on deformation. Small adjustments have been made to the fixtures based on this test.</p>
                                <div><img src="{{asset('timeline_images/image114.jpg')}}"></div>
                                <p class="para sm_font-size-11">Pillar leg assembled.</p>
                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Nov - More information will be added as we progresses</h3>
                                <p class="para sm_font-size-11">One of our new inspector unit PCBs is completed and ready for testing</p>
                                <div><img src="{{asset('timeline_images/Inspector_got_compnents-1.png')}}"></div>
                                <div><img src="{{asset('timeline_images/Inspector_got_compnents-2.png')}}"></div>
                                <p class="para sm_font-size-11">PCB completed and ready for testing.</p>

                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">2023 Nov - More information is comming soon</h3>
                                <p class="para sm_font-size-11"></p>
                                

                                
                                <h3 class="text-black mt-20 font-size-25 sm_font-size-18 text-center mb-10">Tasks left to do</h3>
                                <p class="para sm_font-size-11"><span class="text-bold">2023 Dec</span> - Line chassis must be finished. But laser cut quality may delay this goal. Lets hope not.</p>
                                <p class="para sm_font-size-11"><span class="text-red text-bold">2024 Feb-Mar</span> - Finalize the build of the line's chassis and assembly of most chassis peripherals and show it for Offering A box buyers before their second payment.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q1</span> - Order CNC parts to 3 more robot drivers and one more Scara arm.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q1</span> - Test more section valves</p>
                                <p class="para sm_font-size-11"><span class="text-red text-bold">2024 May-June</span> - Finalize the building of the short line including electronics and show it for Offering A box buyers prior to their last payment. Some electronics/programming/fine tuning might not be 100% finished yet though.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q2</span> - Finalizing all programming of all electronics and be ready for testing when the short line is up and ready for testing.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q2</span> - Order a plastic injection machine and all plastic injection tools for all boxes and peripherals. </p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q2</span> - Test my theory of a “cryo chamber” for transportation of seed crabs. If it works, build a full scale one and test it further. This would be better than tying each and every crab as everyone do all do today which is very time consuming.</p>
                                <p class="para sm_font-size-11"><span class="text-red text-bold">2024 Q3</span> - A fully functional short production line is expected to be completed and shown for “Offering B” box buyers.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q3</span> - Project and machine ready to be presented to larger investors.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q3</span> - Start planning workflows and get it working with building layouts.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q3</span> - Order the freezer rooms.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q3</span> - Design and build worktables, and material handling equipment.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q3</span> - Rent land in Ca Mau, Nam Can. Negotiation with construction companies for building our first line building. This is a simple building to protect the crabs from wind, direct sun, and the machine from direct rain. It has a concrete floor and sheet metal walls and translucent polycarbonate panels as light inlets.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q3</span> - Live test run of the test-short line with live crabs on site at our workshop for a few weeks with a few live crabs to verify that all working smoot before extending the short line to its full length. We can’t have too many crabs as we don’t have any seawater supply near the workshop.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q4</span> - Build 2 drum-filters from my earlier design.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q4</span> - With preliminary orders from customers in hand, a fundraising campaign will be launched in cooperation with larger investment agencies.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2024 Q4</span> - Construction of a full capacity production line and its building and freezer storage begins and is planned to be finished at the beginning of 2025.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2025 Q2</span> - First production line runs at full production </p>
                                <p class="para sm_font-size-11"><span class="text-bold">2025 H2</span> The second line will be up and running at full production.</p>
                                <p class="para sm_font-size-11"><span class="text-bold">2026</span> - This year we plan to build 2-3 additional production lines. </p>
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
