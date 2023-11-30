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
            <section class="section bg-white" data-clip-id="1" style="background-color: #1f2120">
                <div class="content">
                    <div class="full-width align-in-center pb-60">
                        <div class="_90-width md_90-width flex-column justify-center">
                            <h1 class="h1 text-yellow sm_font-size-35 text-center mb-10">Distributor request from our Korean customer</h1>
                            <div class="text-default font-size-12 p-10 mb-20">
                                <iframe src="{{url('storage/docs/korean_exclusive_distributor_request_for_year_2024_2027.pdf')}}" width="100%" height="1100px"></iframe>
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
