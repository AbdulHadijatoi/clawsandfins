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
                            <a class="margin-auto mb-10" href="{{url('/boxpromo/important-notes')}}"><img alt="English flag" src="{{asset('svg/engflag.svg')}}" style="width: 40px;">
                            <a class="margin-auto mb-10" href="{{url('/boxpromo/important-notes-swe')}}"><img alt="Swedish flag" src="{{asset('svg/sweflag.svg')}}" style="width: 40px;">
                            </a>
                            
                            <h1 class="h1 font-size-25 sm_font-size-20 text-center mb-10 text-yellow">Có nguồn thu nhập tốt từ hộp cua của riêng bạn</h1>
                            <div class="text-white font-size-12 p-10 mb-20">
                                
                                
                                <a class="text-yellow text-center mb-20 expand-link" data-target="important_notes" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Ghi chú quan trọng</strong>
                                </a>

                                <p class="expandable-content" id="important_notes">
                                    <strong></strong>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Đặt chỗ và thanh toán</strong>
                                        - Đặt mua hộp bằng cách gửi tin nhắn cho tôi, Peter, qua Facebook với số lượng gói bạn muốn, cùng với địa chỉ email của bạn và vui lòng hỏi tôi bất kỳ thắc mắc nào nếu có. Bạn sẽ nhận được email xác nhận từ tôi kèm theo hướng dẫn thêm, sau đó bạn sẽ thanh toán khoản thanh toán ban đầu cho công ty Yat Fung International Holding ltd của tôi ở Hồng Kông trong vòng 5 ngày và vui lòng gửi cho tôi bằng chứng thanh toán ngay sau đó. Ngày tôi nhận được khoản thanh toán của bạn, tôi sẽ bảo đảm đặt hàng cho bạn. Việc thanh toán trễ sẽ có nguy cơ làm mất hộp. Liên hệ với tôi càng sớm càng tốt khi có sự chậm trễ như vậy.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Thanh toán không thành công</strong>
                                         - Vui lòng hiểu rằng nếu bạn không hoàn thành bất kỳ khoản thanh toán được quy định nào sau 2 tuần kể từ khi yêu cầu thanh toán của chúng tôi được gửi cho bạn, bạn sẽ mất TẤT CẢ các hộp đã đặt và tôi sẽ giữ lại các khoản thanh toán trước đó của bạn, nhưng tôi sẽ để bạn có được tiền thu nhập từ những chiếc hộp mà bạn thực sự đã trả tiền VÀ như một hành động tốt, tôi cũng có thể thêm vào những chiếc hộp miễn phí để tăng tốc thu nhập, nhưng chỉ cho đến khi bạn nhận lại được những khoản thanh toán ban đầu của mình và khi đó chúng tôi sẽ không còn nghĩa vụ nào nữa đối với Bạn. (Bạn cũng sẽ được trả lãi suất hợp lý). 
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Rủi ro</strong>
                                         - Hãy lưu ý rằng đầu tư vào một dự án như vậy có rủi ro rất cao và cuối cùng bạn có thể mất tất cả số tiền đầu tư của mình. Vì vậy, hãy chắc chắn chỉ đầu tư số tiền mà bạn có thể chấp nhận được và không sử dụng số tiền được dự định dùng cho các chi phí quan trọng và cho tương lai.
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">“Người giữ hộp”</strong>
                                         - Ở đây đề cập đến cá nhân hoặc công ty có hợp đồng cho thuê hộp với chúng tôi. </span>
                                         
                                         <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Một “hộp” </strong>
                                         - Ở đây chỉ bộ hộp và ngăn hộp trong máy. 
                                    </span>
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Ngăn hộp </strong>
                                         - Trong hợp đồng của bạn, mỗi hộp ban đầu của bạn sẽ được gán một số duy nhất bắt đầu bằng chữ “RB” viết tắt của “Hộp cho thuê”. Giả sử một hộp có số RB125. Con số này thể hiện một không gian ngăn cụ thể có cùng số trong phần được chỉ định cho những người có hợp đồng cho thuê trong chiếc máy đầu tiên của chúng tôi, nơi cung cấp cho bạn quyền kiếm thu nhập từ hộp trong đó.
                                    </span>
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Quyền sở hữu </strong>
                                         - Bạn sẽ sở hữu một hợp đồng cho phép bạn kiếm thu nhập cho thuê hàng năm từ một chiếc hộp trong một ngăn cụ thể trong máy. Bạn sẽ không bao giờ sở hữu bất kỳ hộp hoặc ngăn vật lý thực tế nào, kể cả những hộp được mua hoặc miễn phí. Tất cả các hộp và ngăn hoàn toàn thuộc về chúng tôi. 
                                    </span>
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Hộp miễn phí </strong>
                                         - Bất cứ khi nào một trong các hộp của bạn, được mua hoặc miễn phí, đã đi vào sản xuất đầy đủ trong cả năm hoặc hơn, bạn sẽ nhận được thêm một hộp miễn phí trong máy tiếp theo. <br><br>
                                            <u>Quy tắc hộp miễn phí rất đơn giản: </u><br>
                                             * Một trong các hộp của bạn, được mua hoặc miễn phí, đã được sản xuất đầy đủ trong một năm hoặc lâu hơn kể từ hộp miễn phí cuối cùng mà nó kiếm được.<br>
                                            VÀ<br>
                                             * Một máy mới đã được thêm vào sản xuất.<br>
                                            =<br>
                                             * Bạn sẽ nhận được một hộp miễn phí mới trong máy đó để tăng thu nhập.
   
                                         </span>
                                    
                                    
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Lạm phát</strong>
                                         - Vì tôi cung cấp cho bạn nhiều hộp/ngăn miễn phí nên thu nhập cho thuê của bạn sẽ cố định và sẽ không được điều chỉnh theo bất kỳ lạm phát, giảm phát hoặc mất giá cuối cùng nào của Đô la Mỹ.   
                                    </span>
                                    
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Chuyển nhượng hợp đồng</strong>
                                         - Bạn có thể tự do bán toàn bộ hợp đồng của mình, nếu bạn muốn, cho bất kỳ ai trong nhóm người có hợp đồng, (không có người ngoài) với giá thầu cao nhất. Hãy cho tôi biết và tôi sẽ đăng thông tin chuyển nhượng của bạn cho mọi người để đấu giá.   
                                    </span>
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Một “máy”</strong> 
                                       – Ở đây đề cập đến toàn bộ các máy khác nhau trong dây chuyền sản xuất tự động được lên kế hoạch để phù hợp với 99.000 hộp/ngăn. Vì vậy, mỗi hộp miễn phí sẽ được phân phối dựa trên vách ngăn 99.000 hộp bất kể bố cục trong tương lai của máy sẽ được thay đổi thành 33.000 hay 132.000 hộp/ngăn, điều đó có nghĩa là hợp đồng của bạn sẽ chỉ nhận được một hộp/ngăn mới cho mỗi 99.000 hộp mới /ngăn chúng tôi đưa vào sản xuất.
                                    </span>
                                   
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Tôi, bản thân tôi và công ty của tôi</strong>
                                         - Không gọi/nah65n định tôi với tư cách cá nhân mà là công ty của tôi ở Hồng Kông mà tôi điều hành, Yat Fung International Holding Ltd., người sở hữu hợp pháp các máy móc và bạn sẽ ký hợp đồng thuê với ai. Tất cả phí thuê của bạn cũng sẽ được công ty này thanh toán. 
                                    </span>
                                    <a class="text-yellow text-center mb-20 expand-link" data-target="important_notes" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong>Trong trường hợp thời điểm không thuận lợi</strong>
                                    </a>
                                    
                                      <p class="para sm_font-size-11 mt-20 mb-20 expandable-content">
                                    Hãy nhớ rằng trong những thời điểm thuận lợi, bạn có thể tăng gấp đôi thu nhập của mình nhiều lần, vì vậy trong những thời điểm khó khăn, bạn có thể phải chấp nhận rằng thu nhập của mình cũng chậm lại một chút. Chúng tôi sẽ cử kiểm toán viên bên thứ ba theo dõi hoạt động của chúng tôi và báo cáo lại cho bạn trong mọi trường hợp có rắc rối nghiêm trọng. </p>
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Nhu cầu giảm</strong>
                                         - Bạn vẫn sẽ kiếm được đủ 1,2 USD mỗi năm từ mỗi hộp miễn là máy của hộp đó chạy ở mức 80% công suất sản xuất tối đa trở lên. Nếu tỷ lệ này giảm xuống dưới 80%, thu nhập cho thuê hộp và thời gian chịu trách nhiệm đối với các hộp miễn phí đó cũng sẽ giảm xuống theo tỷ lệ tương tự, nhưng chỉ đối với máy cụ thể đó. Giả sử chúng tôi có 25 máy đang được sản xuất hoàn chỉnh, hộp 8 đô la ban đầu của bạn sẽ kiếm được 24 hộp miễn phí sau nhiều năm, điều này sẽ mang lại cho bạn thu nhập cho thuê hàng năm là 30 đô la. Nhưng thời điểm tồi tệ có thể buộc chúng ta phải tạm dừng 4,5 máy trong một thời gian, khi đó bạn sẽ chỉ kiếm được toàn bộ thu nhập và thời gian chịu trách nhiệm từ các hộp trong 20 máy và 50% từ máy chạy nửa công suất = 20,5 hộp x 1,2 USD = 24,6 USD. Điều này cũng áp dụng trong trường hợp xảy ra bất kỳ loại tai nạn hoặc thảm họa nào có thể hạn chế năng lực sản xuất của máy.
                                    </span>
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Giá thị trường giảm </strong>
                                         - Nếu giá thị trường của cua lột giảm, bạn vẫn sẽ nhận được 1,2 USD. Nhưng vui lòng hiểu rằng sẽ có giới hạn về mức giảm giá lớn mà chúng tôi có thể quản lý trước khi chúng tôi buộc phải điều chỉnh phí thuê của bạn. Nếu giá thị trường giảm xuống 11,99 USD/kg hoặc thấp hơn (hiện tại là 18 USD), thì thu nhập cho thuê của bạn sẽ giảm xuống 50% (0,6 USD) và thời gian chịu trách nhiệm đối với các hộp miễn phí sẽ bị tạm dừng cho đến khi giá ổn định ở mức 12 USD trở lên. Chúng tôi cũng có thể chọn tạm dừng một số máy trong thời gian này và đợi đến thời điểm tốt hơn.
                                    </span>
                                    
                                    <span style="display: block" class="para sm_font-size-11 mt-20 mb-20 ml-20">
                                        <strong class="text-yellow">Trách nhiệm khi có tổn thất </strong>
                                         -  Toàn bộ số tiền thu được từ việc bán hộp sẽ được dùng hoàn toàn vào việc hoàn thiện các hộp, ngăn và thiết bị cần thiết xung quanh chúng và không được sử dụng vào các mục đích khác. Tôi sẽ làm việc hết sức mình để bảo vệ khoản đầu tư của bạn, công ty cũng như danh dự và danh tiếng của mình, nhưng tôi, Peter Persson, KHÔNG BAO GIỜ chịu trách nhiệm cá nhân về bất kỳ tổn thất tài chính nào của bạn, dù trực tiếp hay gián tiếp. Bạn đã đồng ý tham gia vào một dự án kinh doanh có rủi ro cao nhưng cũng mang lại lợi nhuận rất cao, vì vậy bạn nên nhận thức rõ rằng bạn có thể mất tất cả số tiền đầu tư của mình. Nếu bạn không thể chấp nhận điều đó, xin vui lòng không tham gia vào dự án này. Nhưng nếu bạn đồng ý, hãy cùng nhau kiếm tiền. 
                                    </span>
                                    
                                    <a href="{{url('/timeline')}}" class="text-yellow text-center mb-20 expand-link" data-target="short-introduction" style="width: 100% !important; display: block; font-size: 1.2rem;">
                                    <strong><u>Nhấp vào đây để xem hình ảnh tiến độ của chúng tôi</u></strong><br>
                                    <span class="text-blue font-size-12"></span>
                                    
                                    
                                    
                                    
                                </a>
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
