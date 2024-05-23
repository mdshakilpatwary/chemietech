<?php
$siteInfoData = siteInfoData();
use App\Models\MenuName;
?>

<section id="pre-footer">
    <div class="container">
      <div class="row g-3" >
        <div class="col-md-3 col-lg-3 col-xl-3 col-12 col-sm-6">
            <div class="footer-logo">
              @if($siteInfoData->logo != '')
              <a href="{{route('homepage')}}"><img src="{{asset('uploads/siteinfo/'.$siteInfoData->logo)}}" alt="" style="max-height: 40px"></a>
              @else
              {{-- {{$siteInfoData->address_1}} --}}
              <a href="{{route('homepage')}}" class="" style="font-size: 25px; text-decoration: none; color: #fff; font-weight: 700;">{{$siteInfoData->name}}</a>
              @endif
            </div>
            <div class="footer-address-line">
              <p >{{$siteInfoData->address_1}}</p>
              <p class="mt-3"><i class="fa fa-phone"></i> {{$siteInfoData->phone_1}}</p>
            </div>
        </div>
        <div class="col-md-3 col-lg-3 col-xl-3 col-12 col-sm-6">
            <div class="hide-space"></div>
            <div class="footer-address-line">
              <p class="pt-3">{{$siteInfoData->address_2}}</p>
              <p class="mt-3"><i class="fa fa-phone"></i> {{$siteInfoData->phone_2}}</p>

              
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 col-12 col-sm-6">
         <div class="heading"><h3>COMPANY</h3></div>
            <div class="footer-contact-line">
              <ul style="padding:0;">
                @if(MenuName::where('status', 1)->where('type',5)->first())
                  @php
                  $menu =MenuName::where('status', 1)->where('type',5)->first();
                  @endphp
                    <li class="mb-2">
                      <a class=" {{Route::is('contact*')? 'active' : '' }}" href="{{route('contact')}}">{{$menu->menuName}}</a>
                    </li>
                  @endif
                  @if(MenuName::where('status', 1)->where('type',6)->first())
                  @php
                  $menu =MenuName::where('status', 1)->where('type',6)->first();
                  @endphp
                    <li class="">
                      <a class="{{Route::is('career.page*')? 'active' : '' }}" href="{{route('career.page')}}">{{$menu->menuName}}</a>
                    </li>
                  @endif
              </ul>
            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 col-12 col-sm-6">
            <div class="heading"><h3>Contact US</h3></div>
            <div class="footer-contact-line">
              <a href="mailto:{{$siteInfoData->email}}" class="pb-2 d-block">{{$siteInfoData->email}}</a>
                <a href="mailto:{{$siteInfoData->email_2}}">{{$siteInfoData->email_2}}</a>

            </div>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 col-12 col-sm-6">
            <div class="heading"><h3>Follow US</h3></div>
            <div class="footer-contact-line">
              <a class="pb-2 d-block" href="https://www.linkedin.com/company/republicexport/?lipi=urn%3Ali%3Apage%3Ad_flagship3_search_srp_all%3BpAM%2BPfHMQmWhJ5PbXhxMPQ%3D%3D" target="_blank">Linkedin</a>
              <a href="https://www.instagram.com/republic.export" target="_blank">Instagram</a>
            </div>
        </div>
      </div>
          <div class="mt-5" style="height: 1px; width:100%; background:white; margin-top:10px;"></div>
    </div>
  </section>
  <footer id="footer">
    <div class="container">
      <div class="row text-center">
        <p>&copy; All Rights Reserved by <b>{{$siteInfoData->name}}</b> | Develop By:  <a href="https://binarytobyte.com" style="text-decoration: none;">Binary Byte</a>
        </p>
        <div class="credits">
        </div>
      </div>
    </div>
  </footer>