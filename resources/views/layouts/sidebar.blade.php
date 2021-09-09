<aside class="left-sidebar" data-sidebarbg="skin5">
  <!-- Sidebar scroll-->
  <div class="scroll-sidebar">
    
      <!-- Sidebar navigation-->
      <nav class="sidebar-nav">
          <ul id="sidebarnav" class="p-t-30">
           
              <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="{{route('home')}}" aria-expanded="false"><em class="mdi mdi-view-dashboard"></em><span class="hide-menu">Dashboard</span></a></li>
              <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><em class="mdi mdi-account-key"></em><span class="hide-menu">Authentication </span></a>
                  <ul aria-expanded="false" class="collapse  first-level">
                      <li class="sidebar-item"><a href="{{route('login')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> Login </span></a></li>
                     
                  </ul>
              </li>
              @if(auth()->user()->level == 'admin')
              <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><em class="mdi mdi-account-key"></em><span class="hide-menu">Admin </span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{route('tbl_pemasukan')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu">Tabel Pemasukan </span></a></li>
                    <li class="sidebar-item"><a href="{{route('tbl_pengeluaran')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu">Tabel Pengeluaran </span></a></li>
                    <li class="sidebar-item"><a href="{{route('Form_pengeluaran')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu">Form Input Pengeluaran </span></a></li>
                    <li class="sidebar-item"><a href="{{route('Orderlist')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> List Order </span></a></li>
                    <li class="sidebar-item"><a href="{{route('chart')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> Chart Pemasukan </span></a></li>
                    <li class="sidebar-item"><a href="{{route('chartpengeluaran')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> Chart Pengeluaran</span></a></li>
                </ul>
            </li>
            @elseif(auth()->user()->level == 'owner')
            <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><em class="mdi mdi-account-key"></em><span class="hide-menu">Owner </span></a>
                <ul aria-expanded="false" class="collapse  first-level">
                    <li class="sidebar-item"><a href="{{route('tbl_pemasukan')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> Tabel Pemasukan </span></a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> Tabel Pengeluaran </span></a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu">Form Input Pengeluaran </span></a></li>
                    <li class="sidebar-item"><a href="#" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> List Order </span></a></li>
                    <li class="sidebar-item"><a href="{{route('register')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu">Register Admin</span></a></li>
                    <li class="sidebar-item"><a href="{{route('listadmin')}}" class="sidebar-link"><em class="mdi mdi-all-inclusive"></em><span class="hide-menu"> List Admin </span></a></li>
                </ul>
            </li>
            @endif
              <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><em class="mdi mdi-alert"></em><span class="hide-menu">Errors </span></a>
                  <ul aria-expanded="false" class="collapse  first-level">
                      <li class="sidebar-item"><a href="error-403.html" class="sidebar-link"><em class="mdi mdi-alert-octagon"></em><span class="hide-menu"> Error 403 </span></a></li>
                      <li class="sidebar-item"><a href="error-404.html" class="sidebar-link"><em class="mdi mdi-alert-octagon"></em><span class="hide-menu"> Error 404 </span></a></li>
                      <li class="sidebar-item"><a href="error-405.html" class="sidebar-link"><em class="mdi mdi-alert-octagon"></em><span class="hide-menu"> Error 405 </span></a></li>
                      <li class="sidebar-item"><a href="error-500.html" class="sidebar-link"><em class="mdi mdi-alert-octagon"></em><span class="hide-menu"> Error 500 </span></a></li>
                  </ul>
              </li>
          </ul>
      </nav>
      <!-- End Sidebar navigation -->
  </div>
  <!-- End Sidebar scroll-->
</aside>