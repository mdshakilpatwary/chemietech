<!-- 
- Design By: Binary Byte
- Description: This file contains code for web design of index file.
- Author: Binary Byte
-->
@include('frontend.includes.head')


<body>
  <!-- Spinner Start -->
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div>
  <!-- Spinner End -->
  @include('frontend.includes.header')
  <!-- main body -->
@yield('mainContent')



@include('frontend.includes.footer')


    <!---->
</div>
<!-- script part  -->
@include('frontend.includes.script')

</body>
</html>
