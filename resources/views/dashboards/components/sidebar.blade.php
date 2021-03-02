<div class="sidebar" data-color="purple" data-background-color="white" >
    <div class="logo"><a href="{{route('web.home')}}" class="simple-text logo-normal">
        <img style="with:100%; height:100%" src="{{asset('karma/img/logo.png')}}" alt="">
      </a></div>
    <div class="sidebar-wrapper">
      <?php
        if (\Request::route()->getName()) {
          $pageName = \Request::route()->getName();
        }
      ?>
      <ul class="nav">
        <li class="nav-item {{ strlen(strstr($pageName, 'home')) > 0 ?'active':''}}">
          <a class="nav-link " 
            href="{{route('dashboard.home')}}">
            <i class="fa fa-home"></i>
            <p>Dashboard</p>
          </a>
        </li>
        <li class="nav-item {{ strlen(strstr($pageName, 'user')) > 0 ?'active':''}}">
          <a class="nav-link"  href="{{route('dashboard.user.list')}}" >
            <i class="fa fa-user"></i>
            <p>User</p>
          </a>
        </li>
        <li class="nav-item {{ strlen(strstr($pageName, 'product')) > 0 ?'active':''}}">
          <a class="nav-link" href="{{route('dashboard.product.list')}}">
            <i class="fab fa-product-hunt"></i>
            <p>Product</p>
          </a>
        </li>
        <li class="nav-item {{ strlen(strstr($pageName, 'order')) > 0 ?'active':''}}">
          <a class="nav-link" href="./typography.html">
            <i class="fab fa-opera"></i>
            <p>Order</p>
          </a>
        </li>
        <li class="nav-item {{ strlen(strstr($pageName, 'category')) > 0 ?'active':''}}">
          <a class="nav-link" href="{{route('dashboard.category.list')}}">
            <i class="fa fa-copyright"></i>
            <p>Categories</p>
          </a>
        </li>
        {{-- <li class="nav-item {{ strlen(strstr($pageName, 'image')) > 0 ?'active':''}}">
          <a class="nav-link" href="./map.html">
            <i class="fa fa-image"></i>
            <p>Images</p>
          </a>
        </li> --}}
      </ul>
    </div>
  </div>