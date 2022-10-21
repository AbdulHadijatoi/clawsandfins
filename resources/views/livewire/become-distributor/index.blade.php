<div>
    <div class="content-wrapper">
        <section class="section" data-clip-id="1" style="background-image: url('{{asset('bg/grey4.jpg')}}');">
            <div class="content">
                <div class="full-width align-in-center pb-120">
                    <div class="_75-width md_90-width md_align-center flex-column justify-center max-w700">
                        <h1 class="h1 text-yellow sm_font-size-35 sm_mt-60 text-center">Become a Distributor</h1>
                        <span class="h4 text-white text-center mb-30">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna</span>
                        <form action="{{route('become-distributor.post')}}" method="POST" onsubmit="return inputValidation(this)" enctype="multipart/form-data">
                            @csrf
                            <div class="form-container">
                                <div class="full-width text-center">
                                    <div class="logo-container align-in-center flex-column mt-20">
                                        <label>Your Logo (Optional)</label>
                                        <div class="logo d-flex align-in-center">
                                            <img id="logo-img" alt="logo-img">
                                            <span class="material-icons">
                                                image
                                            </span>
                                            <button id="remove-logo" type="button">Remove Logo</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Company Name</label>
                                        <input type="text" id="company-name" placeholder="Company Name" name="company_name" value="{{old('company_name')}}">
                                    </div>
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Contact Name</label>
                                        <input type="text" id="contact-name" placeholder="Contact Name" name="contact_name" value="{{old('contact_name')}}">
                                    </div>
                                </div>
                                
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Country</label>
                                        <select id="country-dropdown" name="country" style="outline:none">
                                            <option value="0">--Select Country--</option>
                                            @if($countries)
                                                @foreach ($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                    <div class="input-text relative" required>
                                        <label label="(Must be filled in)">City</label>
                                        <div class="absolute top-0 mt-40 ml-5" wire:loading>
                                            <div class="lds-dual-ring"></div>
                                        </div>
                                        <select id="city-dropdown" name="city" style="outline:none">
                                            
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-textarea" required>
                                        <label style="font-size: 14px" label="(Must be filled in)">Postal Address</label>
                                        <textarea id="postal-address" placeholder="Postal Address" name="postal_address">{{old('postal_address')}}</textarea>
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Phone Number</label>
                                        <div class="input-group d-flex-important align-center full-width relative">
                                            {{-- <div id="phone-code" class="dropdown equal-width" value="1"> --}}
                                                <select id="dial_code" name="dial_code" style="outline:none; width: 100px; margin-right:3px;">
                                                    <option value="0" selected disabled>+1</option>
                                                </select>
                                            {{-- </div> --}}
                                            <input type="text" class="number-format" id="phone-number" parent=".input-text" placeholder="Phone Number" name="phone_number" value="{{old('phone_number')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text">
                                        <label>Website URL</label>
                                        <input type="text" id="website-url" placeholder="Website URL" name="website_url" value="{{old('website_url')}}">
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Administration Email</label>
                                        <input type="email" id="administration-email" placeholder="Administration Email" name="email" value="{{old('email')}}">
                                    </div>
                                    
                                    <div class="input-text">
                                        <label>Order Email</label>
                                        <input type="email" id="order-email" placeholder="Order Email" name="order_email" value="{{old('order_email')}}">
                                    </div>
                                </div>
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Password</label>
                                        <div class="input-group d-flex-important align-center full-width relative">
                                            <input type="password" id="password" placeholder="Password" name="password">
                                            <!-- <div class="d-flex align-center equal-width">
                                                <span class="material-icons password-visibility">visibility_off</span>
                                            </div> -->
                                        </div>
                                    </div>
                                    <div class="input-text" required>
                                        <label label="(Must be filled in)">Confirm Password</label>
                                        <input type="password" id="confirm-password" placeholder="Confirm Password" name="password_confirmation">
                                    </div>
                                </div>
                            </div>
                            <div class="form-container">
                                <div class="d-flex full-width form-responsive">
                                    <div class="input-text">
                                        <!-- <label style="font-size: 14px">Visiting Address</label> -->
                                        <div class="_mt_10">
                                            <div class="d-flex-important align-center">
                                                <span class="checkbox align-in-center">
                                                    <input type="checkbox" id="same-address" name="same_address">
                                                    <span class="material-icons">check</span>
                                                </span>
                                                <label label="(Must be filled in)">Visiting address (for customers) is same as postal address?</label>
                                            </div>
                                        </div>
                                        <div class="input-textarea p-0 input-fly-button" required>
                                            <textarea id="visiting-address" placeholder="Visiting Address" name="visiting_address">{{old('visiting_address')}}</textarea>
                                            <button type="button" id="update-map">Update Map</button>
                                        </div>
                                        
                                        <div class="mt-10">
                                            <div class="d-flex-important align-center">
                                                <span class="checkbox align-in-center">
                                                    <input type="checkbox" id="no-disclose" name="location_disclose">
                                                    <span class="material-icons">check</span>
                                                </span>
                                                <label>We don't want to disclose our location on the map</label>
                                            </div>
                                        </div>
                                        <div class="visiting-address">
                                            <div id="map" tabindex="-1"></div>
                                            <!-- <span title="Drive Direction" onclick="driveDirection()" class="material-icons drive-direction-button">directions_car</span> -->
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="d-flex full-width flex-column px-5 form-responsive">
                                    <div>
                                        <span class="text-white font-size-14" label="(Must be filled in)">Are you 100% sure your map location is correct? <font class="font-size-12">(Adjust the map manually so it better matches your location)</font></span>
                                        <div class="input-radio" required>
                                            <div class="radio-value" value=""></div>
                                            <div class="d-flex-important align-center">
                                                <span class="radio align-in-center">
                                                    <input type="radio" name="location_is_correct" value="yes">
                                                    <span class="material-icons">check</span>
                                                </span>
                                                <label class="font-size-12 opacity-8">YES, i am (Position will be locked)</label>
                                            </div>
                                            <div class="d-flex-important align-center">
                                                <span class="radio align-in-center">
                                                    <input type="radio" name="location_is_correct" value="no" name="location_is_correct">
                                                    <span class="material-icons">check</span>
                                                </span>
                                                <label class="font-size-12 opacity-8">No, I'm not sure (Map-pin is removed and we will contact you for further support)</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="info primary-info d-flex-important">
                                        <span class="material-icons">star</span>
                                        <label><strong>PLEASE NOTE!</strong> A correct map-location IS CRUCIAL for your customers to be able to find your
                                            business, and it is also
                                            needed for a correct display on our <strong>"Where to buy our products"</strong> page.</label>
                                    </div>
                                    <div class="info primary-info d-flex-important">
                                        <span class="material-icons">help</span>
                                        <label>If you encounters any problems, please tick the <span>I need some support</span> box, and we will contact
                                            you on your
                                            Administration email address registered here.</label>
                                    </div>
                                    <div>
                                        <div class="d-flex-important align-center">
                                            <span class="checkbox align-in-center">
                                                <input type="checkbox" id="need-support" name="need_support">
                                                <span class="material-icons">check</span>
                                            </span>
                                            <label>I need some support</label>
                                        </div>
                                    </div>
                                </div>
                               
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="info primary-warning d-flex-important">
                                            <label>{{$error}}</label>
                                        </div>
                                    @endforeach
                                @endif

                                <div class="d-flex full-width justify-center">
                                    <div class="button-secondary">
                                        <button type="submit">SUBMIT</button>
                                    </div>
                                </div>
                            </div>
                            <input id="logo-file" class="display-none" type="file" accept="image/*" onchange="loadFile(event)" name="image">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
