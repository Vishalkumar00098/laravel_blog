<div class="global-navbar">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <img src="{{ asset('assets/images/logo.png')}}" style="width: 100px;height:100px" alt="logo">
            </div>
            <div class="col-md-8">
                <div class="border test-center p-2">
                <h5>Advertise Here</h5>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-green">
        <div class="container">
    
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
              </li>
              {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li> --}}
              @php
                  $categories = App\Models\Category::where('navbar_status','0')->where('status','0')->get();
              @endphp 
              @foreach ($categories as $cateitem)
              <li class="nav-item">
                <a class="nav-link" href= "{{ url('tutorial/'.$cateitem->slug) }}">{{ $cateitem->name }}</a>
              </li>
              @endforeach
            </ul>
          </div>
        </div>
      </nav>
</div>