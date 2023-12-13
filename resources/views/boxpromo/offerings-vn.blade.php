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
                            <a class="margin-auto mb-10" href="{{url('/boxpromo/offerings')}}"><img alt="English flag" src="{{asset('svg/engflag.svg')}}" style="width: 40px;">
                            <a class="margin-auto mb-10" href="{{url('/boxpromo/offerings-swe')}}"><img alt="Swedish flag" src="{{asset('svg/sweflag.svg')}}" style="width: 40px;"></a>

                            
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Kiếm khoản thu nhập tốt với những chiếc hộp của bạn</h1>
                            <div class="text-white font-size-12 p-10 mb-20">

                                <a class="text-yellow text-center mb-20 expand-link" data-target="offerings" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Hãy mua cho mình vài hộp</strong>
                                </a>
                                
                                <p class="para sm_font-size-11 mt-20 mb-20 expandable-content" id="long-introduction">
                                    
                                    <strong class="text-yellow">Số lượng sẵn có </strong>– Những hộp này sẽ bán dưới dạng gói, 500 hộp/gói. Tôi chỉ có 33 gói và sẽ không có gói mới nào được chào bán ra với mức thu nhập hào phóng như này khi tất cả những gói này được đặt hàng hết. 
                                    
                                   <br><br>Khi bạn chắc chắn về việc muốn trở thành một phần trong dự án và sở hữu những chiếc hộp, vui lòng cho tôi biết bằng cách gửi tin nhắn qua Facebook và tôi sẽ gửi cho bạn một hợp đồng (tóm tắt tất cả văn bản ở đây) mà tôi đã ký trên đó thay mặt cho công ty của tôi - Yat Fung International Holding Ltd. 
                                   <br><br>
                                   Lý do của các gói này là để giảm thiểu khối lượng công việc quản trị trong tương lai. Nếu bạn muốn mua ít hộp hơn, hãy xem liệu bạn có thể hợp tác với một số người bạn hay không, hoặc liên hệ với tôi và tôi sẽ xem có thể hợp tác với bạn với người có cùng hoàn cảnh hay không. Nhưng hãy nhớ rằng người mua gói đầy đủ sẽ được ưu tiên trước, vì vậy bạn có thể không có gói nào.
                                    <br><br>
                                    <strong class="text-yellow">Giá cho một gói </strong>- Giá cho một gói 500 hộp là 4000 USD. Nhưng bây giờ bạn chỉ phải trả trước một phần ba số tiền là 1334 USD, số tiền này sẽ đảm bảo cho đặt hàng của bạn được giữ chỗ. 
                                    
                                    <br>Đối với các công ty, chúng tôi có thể xuất hóa đơn. <br><br>
                                    
                                    <strong class="text-yellow">Khoản thanh toán thứ hai </strong>- Vào khoảng tháng 2 - 3 năm 2024, sau khi bạn thấy tiến độ việc chế tạo chiếc máy có kích thước đầy đủ, cao 5,5 mét nhưng ngắn hơn với chiều dài 15 mét, bạn sẽ thanh toán cho chúng tôi một phần ba tiếp theo - 1334 USD. Máy bạn nhìn thấy vẫn chưa được hoàn thiện cũng như chưa hoạt động, nhưng nó sẽ cho bạn thấy chúng tôi đang tiến triển. <br><br>
                                    
                                    <strong class="text-yellow">Khoản thanh toán cuối cùng </strong>- Vào khoảng tháng 5 - 6 năm 2024, sau khi bạn được xem một chiếc máy hoàn chỉnh ở phiên bản ngắn 15 mét, với 5 robot nhiệm vụ (tuy nhiên, phần mềm có thể chưa phải là phiên bản cuối cùng, vì vậy thời gian sẽ cho biết chúng sẽ tự động di chuyển như thế nào trong mô hình này), bạn sẽ trả một phần ba cuối cùng là 1333 đô la Mỹ cho chúng tôi và hộp bây giờ chính thức là của bạn để kiếm thu nhập.<br><br>
                                    
                                    
                                    <strong class="text-yellow">Kế hoạch </strong>- Thời gian ước tính để chiếc máy có chiều dài đầy đủ đầu tiên được sản xuất là hơn một năm kể từ bây giờ, vào khoảng đầu năm 2025. Thông thường, bạn sẽ nhận được phí thuê sau khi hộp của bạn đã được sản xuất hoàn chỉnh trong cả một năm, NHƯNG, vì có thể bạn đã chờ đợi rất lâu nên tôi sẽ cố gắng ưu tiên khoản tiền thuê đầu tiên của bạn ngay khi thu nhập sản xuất cho phép. Ước tính hiện tại là bạn sẽ nhận được khoản thanh toán tiền thuê đầu tiên vào khoảng giữa năm 2025. Nhưng hãy nhớ rằng, những khung thời gian này chỉ là ước tính sơ bộ.
                                    </p>

                                <!-- <p class="para sm_font-size-11 mt-20 mb-20 expandable-content" id="offerings">
                                    Book all your boxes and pay only 1/3 now. Boxes are sold in bundles of 500 boxes for US$4000-6000 each depending on which offering you choose below. The reason for these bundles is to minimize future administrative workload. If you wish to buy fewer boxes, see if you can partner with some friends, or contact me and I will see if I can partner you with someone in the same situation. But remember full bundle buyers will have priority on availability, so you might end up without any.   
                                    <ul style="display: block; list-style: disc" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <li>
                                            <strong class="text-yellow">Offering A - US$8 box with US$1.2 return, unlimited growth - Early adopters, Available now, pay only 33% now (US$1334 per bundle).</strong><br></a>
                                            <strong>Book them now as first come, first served is the rule.</strong> <u>
                                                <br>Only 33 bundles are available with this unlimited growth. </u>High risk, machine still in building stage, longer waiting. But it will also have the highest long-term rewards with unlimited growth. You will be given free boxes as the project grows, if we grow for example to having 100 machines in the future, you will be given 99 free boxes, for every box you initially purchased, totaling 100 boxes including the one you purchased for US$8, and earn you a rental fee of US$120 which equals to a 1500% yearly return from them. AND you will also be given first priority on any future offerings as well, based on your box holding volume. Price per bundle is US$4000, but you only pay a third now, US$1334 which will secure your 1 bundle of 500 boxes. Later in February-March 2024, you will pay the next third US$1334, after you have been shown our progress with a full-sized machine, 5.5 meters tall, but shorter at 15 meters long. (it will be fully extended to about 120 meters with two rows with 49,500 boxes each when all fine adjustments are completed) The machine you will be shown will still not be completed nor operational, but it will show you our progress. In May-June 2024, you will pay the last third, US$1333 after you have been shown a complete but still short version, with 5 service robots (software might not be final yet though, so time will tell how much they will move around automatically at this demonstration. If interested, send me an email with the subject: <strong>"Box offering A"</strong> to
                                            <strong class="text-yellow">                                        <a href="mailto:tramsrepus@gmail.com?subject=Box offering A" class="text-yellow">tramsrepus@gmail.com</a>
                                              </strong>
                                        </li>
                                        <br>
                                        <li>
                                            <strong class="text-yellow">Offering B - US$10 box with US$1.2 return. The number of free boxes will be limited. - Soon available . </strong><br></a>
                                            33 bundles will be available after when all boxes in offering A have been taken. This offering can be changed in any way up till we make it available.
                                        </li>
                                        <br>
                                        <li>
                                            <strong class="text-yellow">Offering C - US$12 box with US$1.2 return, limited to 14 free boxes – For more careful adopters. Available quarter 3, 2024 but can be booked now (10% deposit).</strong><br>
                                            33 bundles will be available. Machine fully tested and operational so less risk, shorter waiting till you first rental payment. Shortly after mid 2024 you will be asked to pay 40% of your total bundle value within 14 days. After that you and all the other box holders will be invited to visit us here on site in Vietnam, and you will be shown our full size but short version of our production machine in action with live crabs. 4 weeks later you will be asked to pay for your booked bundles in full at US$6000 per bundle.  This offer will come with a limit of a maximum of 14 free boxes, which will limit your maximal returns to 150% per year, regardless of how many machines we will have in production. If interested, send me an email with the subject: <strong>"Box offering C"</strong> to
                                            <strong class="text-yellow">                                        <a href="mailto:tramsrepus@gmail.com?subject=Box offering C" class="text-yellow">tramsrepus@gmail.com</a>
                                              </strong>
                                            <br>
                                        
                                       
                                            <span style="font-weight: bold; text-decoration: underline">
                                                This offering's price and benefits can be changed or even be canceled at anytime without any prior notice depending of how things develops. Your prebooked boxes will still be available for you in this current state though. 
                                            </span>
                                         </li>
                                         <br>
                                         <li>
                                            <strong class="text-yellow">
                                                If you wish to become a significant partner and have the means for it (>$500k),
                                                feel free to email me to
                                                <a href="mailto:tramsrepus@gmail.com?subject=Box offerings" class="text-yellow">tramsrepus@gmail.com</a> with the subject: "Crab shareholder"
                                              </strong>                                              
                                         </li>
                                    </ul>
                                   
                                    </p> -->
                                 
                                   
                                    
                                
                                    <br>
                                    <br>
                                   
                                <a href="{{url('/timeline')}}" class="text-yellow text-center mb-20 expand-link" data-target="short-introduction" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong><u>Tiến độ qua hình ảnh</u></strong><br>
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
