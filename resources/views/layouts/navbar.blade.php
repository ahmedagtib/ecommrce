 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="{{url('/')}}">EcoSafi</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="{{url('/')}}">home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">product</a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="{{route('cart.index')}}"><i class="fas fa-shopping-cart"></i> <span class="badge badge-danger">{{Cart::content()->count()}}</span></a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      @auth {{auth()->user()->name}} @else compet @endauth
      </a>
      <div class="dropdown-menu">
        @auth
         <a class="dropdown-item" href="{{route('user.logout')}}">logout</a>
         @else
        <a class="dropdown-item" href="{{route('login')}}">log in</a>
        <a class="dropdown-item" href="{{route('user.create')}}">sgin up</a>
        @endauth
      </div>
    </li>
    @auth
    @if(auth()->user()->isadmin)
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      Manage
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="{{route('route.index')}}">Category</a>
        <a class="dropdown-item" href="{{route('product.index')}}">Product</a>
      </div>
    </li>
    @endif
    @endauth
  </ul>
</nav> 

