@include('dashboard.headerLink')

  	@include('dashboard.sideBar')
    @include('dashboard.header')    
     

    	@yield('content')

    @include('dashboard.footer')
  
@include('dashboard.footerLink')
