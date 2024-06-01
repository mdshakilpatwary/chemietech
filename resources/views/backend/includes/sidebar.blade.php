  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item" style="background:{{ Route::is('dashboard')? '#f6f9ff' : ' none !important' }} ; ">
        <a class="nav-link {{ Route::is('dashboard')? 'active' : '' }}" href="{{route('dashboard')}}" style="color:{{ Route::is('dashboard')? '' : 'inherit' }} ;">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->
      <li class="nav-heading">Pages Content</li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-1" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('header.info*') || Route::is('header.info.manage*')||Route::is('header.info.edit*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-menu-button-wide-fill"></i><span>Header Info</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-1" class="nav-content collapse {{ Route::is('header.info*') || Route::is('header.info.manage*')||Route::is('header.info.edit*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            {{-- class="{{ Route::is('header.info*')? 'active' : '' }}" --}}
            <a href="{{route('header.info')}}" class="{{ Route::is('header.info')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Banner</span>
            </a>
          </li>
          <li>
            <a href="{{route('header.info.manage')}}" class="{{ Route::is('header.info.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Banner</span>
            </a>
          </li>
        </ul>
      </li>



      <li class="nav-item ">
        @php
        $activeSidebar = Route::is('about.membership*') || Route::is('about.membership.manage*') ||Route::is('about.membership.edit*') ||Route::is('about.certification*') || Route::is('about.certification.manage*') ||Route::is('about.certification.edit*') ||Route::is('about.principal*') || Route::is('about.principal.manage*') ||Route::is('about.principal.edit*')||Route::is('about.client*') || Route::is('about.client.manage*') ||Route::is('about.client.edit*')||Route::is('about.team*') || Route::is('about.team.manage*') ||Route::is('about.team.edit*')||Route::is('about.management*') || Route::is('about.management.manage*') ||Route::is('about.management.edit*') ;
        @endphp

        <a class="nav-link collapsed " data-bs-target="#components-nav-3" data-bs-toggle="collapse" href="#" style="background:{{ $activeSidebar ? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-postcard"></i><span>About page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-3" class="nav-content collapse {{ $activeSidebar ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('about.membership.manage')}}" class="{{ Route::is('about.membership*') || Route::is('about.membership.manage*') ||Route::is('about.membership.edit*')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Membership</span>
            </a>
          </li>
          <li>
            <a href="{{route('about.certification.manage')}}" class="{{ Route::is('about.certification*') || Route::is('about.certification.manage*') ||Route::is('about.certification.edit*')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Our Certification</span>
            </a>
          </li>
          <li>
            <a href="{{route('about.principal.manage')}}" class="{{ Route::is('about.principal*') || Route::is('about.principal.manage*') ||Route::is('about.principal.edit*')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Our Principal</span>
            </a>
          </li>
          <li>
            <a href="{{route('about.client.manage')}}" class="{{ Route::is('about.client*') || Route::is('about.client.manage*') ||Route::is('about.client.edit*')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Our Client</span>
            </a>
          </li>
          <li>
            <a href="{{route('about.team.manage')}}" class="{{ Route::is('about.team*') || Route::is('about.team.manage*') ||Route::is('about.team.edit*')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Our Teams</span>
            </a>
          </li>
          <li>
            <a href="{{route('about.management.manage')}}" class="{{ Route::is('about.management*') || Route::is('about.management.manage*') ||Route::is('about.management.edit*')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Our Management</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-8" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('businessArea*') || Route::is('businessArea.manage*') ||Route::is('businessArea.common*') ||Route::is('businessArea.edit*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-wallet-fill"></i><span>Business Area page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-8" class="nav-content collapse {{ Route::is('businessArea*') || Route::is('businessArea.manage*') ||Route::is('businessArea.edit*')||Route::is('businessArea.common*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('businessArea')}}" class="{{ Route::is('businessArea')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Business Area</span>
            </a>
          </li>
          <li>
            <a href="{{route('businessArea.manage')}}"  class="{{ Route::is('businessArea.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Business Area</span>
            </a>
          </li>
          
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-8" data-bs-toggle="collapse" href="#" style="background:{{ Route::is('career*') || Route::is('career.manage*') ||Route::is('career.common*') ||Route::is('career.edit*')? '#f6f9ff' : '' }} ; ">
          <i class="bi bi-wallet-fill"></i><span>Career page</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-8" class="nav-content collapse {{ Route::is('career*') || Route::is('career.manage*') ||Route::is('career.edit*')||Route::is('career.common*')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('career')}}" class="{{ Route::is('career')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Career</span>
            </a>
          </li>
          <li>
            <a href="{{route('career.manage')}}"  class="{{ Route::is('career.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Career</span>
            </a>
          </li>
          <li>
            <a href="{{route('career.common')}}"  class="{{ Route::is('career.common')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Career Common Info</span>
            </a>
          </li>
        </ul>
      </li>
    
      <!-- End Components Nav -->


      <li class="nav-heading">Product Elements</li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-4" data-bs-toggle="collapse" href="#" style="background: {{ Route::is('product') || Route::is('product.manage')||Route::is('product.edit')? '#f6f9ff' : '' }} ;">
          <i class="bi bi-box2-fill"></i><span>Product</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-4" class="nav-content collapse {{ Route::is('product') || Route::is('product.manage')||Route::is('product.edit')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('product')}}" class="{{ Route::is('product')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Product</span>
            </a>
          </li>
          <li>
            <a href="{{route('product.manage')}}" class="{{ Route::is('product.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Product</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#components-nav-11" data-bs-toggle="collapse" href="#" style="background: {{ Route::is('category') || Route::is('category.manage')||Route::is('category.edit')? '#f6f9ff' : '' }} ;">
          <i class="bi bi-box2-fill"></i><span>Category</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-11" class="nav-content collapse {{ Route::is('category') || Route::is('category.manage')||Route::is('category.edit')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('category')}}" class="{{ Route::is('category')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add category</span>
            </a>
          </li>
          <li>
            <a href="{{route('category.manage')}}" class="{{ Route::is('category.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage category</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#subCategory" data-bs-toggle="collapse" href="#" style="background: {{ Route::is('subcategory') || Route::is('subcategory.manage')||Route::is('subcategory.edit')? '#f6f9ff' : '' }} ;">
          <i class="bi bi-box2-fill"></i><span>SubCategory</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="subCategory" class="nav-content collapse {{ Route::is('subcategory') || Route::is('subcategory.manage')||Route::is('subcategory.edit')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('subcategory')}}" class="{{ Route::is('subcategory')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add Subcategory</span>
            </a>
          </li>
          <li>
            <a href="{{route('subcategory.manage')}}" class="{{ Route::is('subcategory.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage Subcategory</span>
            </a>
          </li>
        </ul>
      </li>
 
      <!-- news event part  -->
      <li class="nav-heading">News Event Elements</li>

      <li class="nav-item ">
        <a class="nav-link collapsed " data-bs-target="#newsEvent" data-bs-toggle="collapse" href="#" style="background: {{ Route::is('news') || Route::is('news.manage')||Route::is('news.edit')? '#f6f9ff' : '' }} ;">
          <i class="bi bi-box2-fill"></i><span>news</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="newsEvent" class="nav-content collapse {{ Route::is('news') || Route::is('news.manage')||Route::is('news.edit')? 'show' : '' }} " data-bs-parent="#sidebar-nav">
 
          <li>
            <a href="{{route('news')}}" class="{{ Route::is('news')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Add News</span>
            </a>
          </li>
          <li>
            <a href="{{route('news.manage')}}" class="{{ Route::is('news.manage')? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Manage News</span>
            </a>
          </li>
        </ul>
      </li>
    <!-- End Profile Page Nav -->
        {{-- <li class="nav-heading">Nave-Item</li> --}}

      {{-- <li class="nav-item" style="background:{{ Route::is('menu.create')? '#f6f9ff' : ' none !important' }} ; ">
        <a class="nav-link {{ Route::is('menu.create')? 'active' : '' }}" href="{{route('menu.create')}}" style="color:{{ Route::is('menu.create')? '' : 'inherit' }} ;">
          <i class="bi bi-segmented-nav"></i>
          <span>Menu-Bar</span>
        </a>
      </li> --}}
      
    </ul>

  </aside>
  <!-- End Sidebar-->
