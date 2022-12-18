@php

$setting=DB::table('setting_information')->first();

@endphp



<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
 <meta name="description" content="">
 <meta name="author" content="MHS">
 <!--favicon icon-->
 <link rel="icon" type="image/png" href="{{url($setting->favicon)}}">
 <title>Dashboard ||{{$setting->title}}</title>
 <!--google font-->
 <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
 <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <!--common style-->
 <link href="{{url('public/backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <link href="{{url('public/backend')}}/assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
 <link href="{{url('public/backend')}}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="{{url('public/backend')}}/assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
 <link href="{{url('public/backend')}}/assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
 <link href="{{url('public/backend')}}/assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">
 <!--easy pie chart-->
 <link href="{{url('public/backend')}}/assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">
 <!--custom css-->
 <link href="{{url('public/backend')}}/assets/css/main.css" rel="stylesheet">

 <link href="{{url('public/backend')}}/assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
 <!-------text editor------->
 <link href="{{url('public/backend')}}/assets/vendor/summernote/summernote-bs4.css" rel="stylesheet">
 <!-------multi select------->
 <link href="{{url('public/backend')}}/assets/vendor/select2/css/select2.css" rel="stylesheet">
 <!-----notification--------->
 <link rel="stylesheet" href="{{ asset('public/backend')}}/assets/css/toast.css">
 <!-------image view js------->
 <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!-----google font------>
 <link rel="preconnect" href="https://fonts.googleapis.com">
 <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
 <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300&display=swap" rel="stylesheet">
<!----copy excel----->
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-------Show password------>
 <script type="text/javascript"> 
  function Function() {
   var x = document.getElementById("passChack");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>
<!---------Show comfirm password------->
 <script type="text/javascript"> 
  function MyFunction() {
   var x = document.getElementById("ConPassChack");
   if (x.type === "password") {
    x.type = "text";
   } else {
    x.type = "password";
   }
  }
 </script>

 <!--------password chack---------->
 <script type="text/javascript">
  var check = function()
  {
   if (document.getElementById('passChack').value ==
    document.getElementById('ConPassChack').value)
   {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matching';
   } 
   else 
   {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Not matching';
   }
  }
 </script>
<!---------scrollbar----------->
 <style>
  ::-webkit-scrollbar {
   width: 4px;
   height:5px;
  }
  ::-webkit-scrollbar-track {
   background:#34495E; 
  }
  ::-webkit-scrollbar-thumb {
   background:#85929E; 
  }
  ::-webkit-scrollbar-thumb:hover {
   background:#D7DBDD; 
  }
 </style>
</head>


<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden" onload="startTime()" onload="startTime()">

 <!------- start-------->
 <header class="app-header navbar bg-dark" >
  
  <div class="navbar-brand bg-dark text-center" style="background-color:#ccc;">
   <a class="" href="{{url('admin')}}">{{-- admin/home --}}
    <label class="logo_text text-uppercase text-white" style="font-size:24px; margin-top:-5px; font-weight:600;"><span style="color:#E67E22;">admin</span> panel</label>
   </a>
  </div>
  <!--brand end-->

  <!--left side nav toggle start-->
  <ul class="nav navbar-nav mr-auto" >
   <li class="nav-item d-lg-none" style="color:#fff;">
    <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-align-right" ></i></button>
   </li>
   <li class="nav-item d-md-down-none">
    <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-align-right"></i></a>
   </li>
   <li class="nav-item d-md-down-none-">
    <!--search start-->
    <a class="nav-link search-toggle" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <i class="ti-search"></i>
    </a>
    <div class="search-container" >
     <div class="outer-close search-toggle" style=" margin-top:70px;">
      <a class="close"><span>
       <i class="fa fa-close"></i>
      </span></a>
      <i></i>
     </div>

     <div class="container search-wrap" style="margin-top: ">
      <div class="row">
       <div class="col text-left">
        <a class="" href="#">
        </a>
        <form class="mt-3">
         <div class="form-row align-items-center">
          <input type="text" class="form-control custom-search"   style=" color:#fff;">
         </div>
        </form>
       </div>
      </div>
     </div>
    </div>
   </li>
  </ul>
  
  <ul class="nav navbar-nav ml-auto">

   <li class="nav-item dropdown dropdown-slide d-md-down-none">
    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <i class="ti-bell"></i>
     <span class="badge badge-danger notification-alarm"></span>
    </a>
    <div class="dropdown-menu dropdown-menu-right">

     <div class="dropdown-header pb-3">
      <strong>You have 6 Notifications</strong>
     </div>
     <a href="#" class="dropdown-item">
      <i class="icon-basket-loaded text-primary"></i> New order
     </a>
     <a href="#" class="dropdown-item">
      <i class="icon-user-follow text-success"></i> New registered member
     </a>
     <a href="#" class="dropdown-item">
      <i class=" icon-layers text-danger"></i> Server error report
     </a>
     <a href="#" class="dropdown-item">
      <i class=" icon-note text-warning"></i> Database report
     </a>
     <a href="#" class="dropdown-item">
      <i class=" icon-present text-info"></i> Order confirmation
     </a>
    </div>
   </li>
   <li class="nav-item dropdown dropdown-slide d-md-down-none">
    <a class="nav-link nav-pill" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <i class=" ti-view-grid"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-ql-gird">

     <div class="dropdown-header pb-3">
      <strong>Quick Links</strong>
     </div>
     <div class="quick-links-grid">
      <a href="#" class="ql-grid-item">
       <i class="  ti-files text-primary"></i>
       <span class="ql-grid-title">New Task</span>
      </a>
      <a href="#" class="ql-grid-item">
       <i class="  ti-check-box text-success"></i>
       <span class="ql-grid-title">Assign Task</span>
      </a>
     </div>
     <div class="quick-links-grid">
      <a href="#" class="ql-grid-item">
       <i class="  ti-truck text-warning"></i>
       <span class="ql-grid-title">Create Orders</span>
      </a>
      <a href="#" class="ql-grid-item">
       <i class=" icon-layers text-info"></i>
       <span class="ql-grid-title">New Orders</span>
      </a>
     </div>
    </div>
   </li>

   <li class="nav-item dropdown dropdown-slide">
    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
     <img src="{{ Auth()->user()->image }}" alt="John Doe">
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
     <div class="dropdown-header pb-3">
      <div class="media d-user">
       <img class="align-self-center mr-3" src="{{ Auth()->user()->image }}" alt="John Doe">
       <div class="media-body">
        <h5 class="mt-0 mb-0">{{ Auth()->user()->name }}</h5>
        <span>{{ Auth()->user()->email }}</span>
       </div>
      </div>
     </div>

     <a class="dropdown-item" href="#"><i class=" ti-reload"></i> Activity</a>
     <a class="dropdown-item" href="#"><i class=" ti-email"></i> Message</a>
     <a class="dropdown-item" href="#"><i class=" ti-user"></i> Profile</a>
     <a class="dropdown-item" href="#"><i class=" ti-layers-alt"></i> Projects <span class="badge badge-primary">4</span> </a>
     <div class="dropdown-divider"></div>
     <a class="dropdown-item" href="#"><i class=" ti-lock"></i> Lock Account</a>
     <a class="dropdown-item" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class=" ti-unlock"></i>Logout</a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
      @csrf
     </form>
    </div>
   </li>

   <li class="nav-item d-lg-none">
    <button class="navbar-toggler mobile-rightside-toggler" type="button"><i class="icon-options-vertical"></i></button>
   </li>
   <li class="nav-item d-md-down-none">
    <a class="nav-link navbar-toggler right-sidebar-toggler" href="#"><i class="icon-options-vertical"></i></a>
   </li>
  </ul>
 </header>

 <div class="app-body">

  <div class="left-sidebar">
   <nav class="sidebar-menu">
    <ul id="nav-accordion">
     <li class="sub-menu">
      <a href="javascript:;">
       <i class=" ti-home"></i>
       <span>Dashboard</span>
      </a>
      <ul class="sub">
       <li><a href="{{url('admin')}}">Dashboard 1</a></li>
      </ul>
     </li>
     <li class="nav-title">
      <h5 class="text-uppercase">Developer</h5>
     </li>
     <li class="sub-menu">
      <a href="javascript:;">
       <i class=" ti-layers"></i>
       <span>Development Tools</span>
      </a>
      <ul class="sub">
       <li><a  href="#">Main Menu</a></li>
       <li><a  href="#">Sub Menu</a></li>
      </ul>
     </li>
     <li class="nav-title">
      <h5 class="text-uppercase">Menu</h5>
     </li>
     <!-----admin setup-------->
     <li class="sub-menu" >
      <a href="javascript:;" class="@if(request()->path()==='create_admin' || request()->path()==='manage_admin'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Admin Setup</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('create_admin')}}" class="@if(request()->path()==='create_admin'){{'text-danger'}} @else @endif">Create Admin</a></li>
       <li><a  href="{{url('manage_admin')}}"  class="@if(request()->path()==='manage_admin'){{'text-danger'}} @else @endif">Magage Admin</a></li>
      </ul>
     </li>
     <!---------item info------>
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='item_info' || request()->path()==='manage_item'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Item Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('item_info')}}" class="@if(request()->path()==='item_info'){{'text-danger'}} @else @endif">Item Add</a></li>
       <li><a  href="{{url('manage_item')}}" class="@if(request()->path()==='manage_item'){{'text-danger'}} @else @endif">Magage Item</a></li>
       <li><a  href="{{url('all_item')}}" class="@if(request()->path()==='all_item'){{'text-danger'}} @else @endif" target="_blank">All Item</a></li>
      </ul>
     </li>
     <!-------category info------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='category_info' || request()->path()==='manage_category'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Category Information</span>
      </a>
      <ul class="sub">

      <!-----category------->
       <li><a  href="{{url('category_info')}}" class="@if(request()->path()==='category_info'){{'text-danger'}} @else @endif">Category Add</a></li>
       <li><a  href="{{url('manage_category')}}" class="@if(request()->path()==='manage_category'){{'text-danger'}} @else @endif">Magage Category</a></li>
       <li><a  href="{{url('all_category')}}" target="_blank" class="@if(request()->path()==='all_category'){{'text-danger'}} @else @endif" >All Category</a></li>


      <!---sub category-------->
       <li><a  href="{{url('subcategory_info')}}" class="@if(request()->path()==='subcategory_info'){{'text-danger'}} @else @endif">Sub Category Add</a></li>
       <li><a  href="{{url('manage_subcategory')}}" class="@if(request()->path()==='manage_subcategory'){{'text-danger'}} @else @endif">Magage SubCategory</a></li>
       <li><a  href="{{url('all_subcategory')}}" target="_blank" class="@if(request()->path()==='all_subcategory'){{'text-danger'}} @else @endif">All SubCategory</a></li>
      </ul>
     </li>
     <!-----brand info------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='brand_info' || request()->path()==='manage_brand'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Brand Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('brand_info')}}" class="@if(request()->path()==='brand_info'){{'text-danger'}} @else @endif">Brand Add</a></li>
       <li><a  href="{{url('manage_brand')}}" class="@if(request()->path()==='manage_brand'){{'text-danger'}} @else @endif">Magage Brand</a></li>
       <li><a  href="{{url('all_brand')}}" target="_blank" class="@if(request()->path()==='all_brand'){{'text-danger'}} @else @endif">All Brand</a></li>
      </ul>
     </li>
     <!---------product info-------->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='product_info' || request()->path()==='manage_product'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Product Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('product_info')}}" class="@if(request()->path()==='product_info'){{'text-danger'}} @else @endif">Product Add</a></li>
       <li><a  href="{{url('manage_product')}}" class="@if(request()->path()==='manage_product'){{'text-danger'}} @else @endif">Magage Product</a></li>
       <li><a  href="{{url('all_product')}}" target="_blank" class="@if(request()->path()==='all_product'){{'text-danger'}} @else @endif">All Product</a></li>
      </ul>
     </li>
     <!---------website setting----->
     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='slider_add' || request()->path()==='manage_slider' || request()->path()==='setting' || request()->path()==='about' || request()->path()==='contuct' || request()->path()==='term_condition' || request()->path()==='privacy_police' || request()->path()==='how_to_bay' || request()->path()==='faq' || request()->path()==='manage_faq'){{'active'}} @else @endif">
       <i class=" ti-layers"></i>
       <span>Website Setting</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('slider_add')}}" class="@if(request()->path()==='slider_add'){{'text-danger'}} @else @endif">Slider Add</a></li>
       <li><a  href="{{url('manage_slider')}}" class="@if(request()->path()==='manage_slider'){{'text-danger'}} @else @endif">Magage Slider</a></li>
       <li><a  href="{{url('setting')}}" class="@if(request()->path()==='setting'){{'text-danger'}} @else @endif">Setting</a></li>
       <li><a  href="{{url('about')}}" class="@if(request()->path()==='about'){{'text-danger'}} @else @endif">About</a></li>
       <li><a  href="{{url('contuct')}}" class="@if(request()->path()==='contuct'){{'text-danger'}} @else @endif">Contuct</a></li>
       <li><a  href="{{url('term_condition')}}" class="@if(request()->path()==='term_condition'){{'text-danger'}} @else @endif">Term & Condition</a></li>
       <li><a  href="{{url('privacy_police')}}" class="@if(request()->path()==='privacy_police'){{'text-danger'}} @else @endif">Privacy & Police</a></li>
       <li><a  href="{{url('how_to_bay')}}" class="@if(request()->path()==='how_to_bay'){{'text-danger'}} @else @endif">How To Bay</a></li>
       <li><a  href="{{url('faq')}}" class="@if(request()->path()==='faq'){{'text-danger'}} @else @endif">FAQ</a></li>
       <li><a  href="{{url('manage_faq')}}" class="@if(request()->path()==='manage_faq'){{'text-danger'}} @else @endif">manage FAQ</a></li>
      </ul>
     </li>

     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='customer_order'){{'active'}} @else @endif" >
       <i class=" ti-layers"></i>
       <span>Order Information</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('customer_order')}}" class="@if(request()->path()==='customer_order'){{'text-danger'}} @else @endif">Customer Order</a></li>
      </ul>
     </li>


      <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='User_Info'){{'active'}} @else @endif" >
       <i class=" ti-layers"></i>
       <span>Customer Account Info</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('User_Info')}}" class="@if(request()->path()==='User_Info'){{'text-danger'}} @else @endif">User Info</a></li>
      </ul>
     </li>


     <li class="sub-menu">
      <a href="javascript:;"  class="@if(request()->path()==='Message'){{'active'}} @else @endif" >
       <i class=" ti-layers"></i>
       <span>Customer Message</span>
      </a>
      <ul class="sub">
       <li><a  href="{{url('Message')}}" class="@if(request()->path()==='Message'){{'text-danger'}} @else @endif">Message</a></li>
      </ul>
     </li>



    </ul>
   </nav>
  </div>

  @yield('backcontent')

 </div>
 <!--===========app body end===========-->

 <!--===========footer start===========-->
 <footer class="app-footer">
  <div class="container-fluid">
   <div class="row">
    <div class="col-12">
     <div class="row">
      <div class="col-lg-4 col-sm-6 text-right ">
       <span id="clock"></span>
       <span id="date"> /  {{ date('l, F j, Y') }}</span>
      </div>
      <div class="col-lg-4"></div>
      <div class="col-lg-4 col-sm-6  text-right">
       <?php echo date("Y");?> © Develop by <a href="https://www.facebook.com/shatu.das.9">Shatu Chandra Das</a>
      </div>
     </div>
    </div>
   </div>
  </div>
 </footer>


 <!-------ooter end-------->
 <script type="text/javascript">
  function readURL(input)
  {
   if (input.files && input.files[0])
   {
    var reader = new FileReader();
    reader.onload = function (e)
    {
     $('#profile-img-tag').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
   }
  }
  $("#profile-img").change(function()
  {
   readURL(this);
  });
 </script>


 <script src="{{url('public/backend')}}/assets/vendor/jquery/jquery.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/popper.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
 <script class="include" type="text/javascript" src="{{url('public/backend')}}/assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/lobicard/js/lobicard.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/jquery.scrollTo.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/chartjs/Chart.min.js"></script>


 
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

 <script>
  @if (Session::has('messege'))
  var type="{{ Session::get('alert-type', 'info') }}"
  switch(type){
   case 'info':
   toastr.options.positionClass = 'toast-top-right';
   toastr.info("{{ Session::get('messege') }}");
   break;
   case 'success':
   toastr.options.positionClass = 'toast-top-right';
   toastr.success("{{ Session::get('messege') }}");
   break;
   case 'warning':
   toastr.options.positionClass = 'toast-top-right';
   toastr.warning("{{ Session::get('messege') }}");
   break;
   case 'error':
   toastr.options.positionClass = 'toast-top-right';
   toastr.error("{{ Session::get('messege') }}");
   break;
  }
  @endif
 </script>

 <script>

  var ctx = document.getElementById('myChart-light').getContext('2d');
  var chart = new Chart(ctx, {
   // The type of chart we want to create
   type: 'line',
   data: {
   labels: ["January", "February", "March", "April", "May", "June", "July"],
   datasets: [{
   label: "My First dataset",
   backgroundColor: 'rgba(167,104,243,.2)',
   borderColor: 'rgba(167,104,243,1)',
   data: [0, 20, 9, 25, 15, 25,18]
   }]
  },
           
  options: {
  maintainAspectRatio: false,
  legend: {
  display: false
  },
  scales: {
  xAxes: [{
  isplay: false
  }],
  yAxes: [{
  display: false
  }]
  },
  elements: {
  line: {
  tension: 0.00001,
  //tension: 0.4,
  borderWidth: 1
  },
  point: {
  radius: 4,
  hitRadius: 10,
  hoverRadius: 4
  }
  }
  }
  });

  var ctx = document.getElementById('myChart-tow-light').getContext('2d');
  var chart = new Chart(ctx, {
  // The type of chart we want to create
  type: 'line',
 data: {
  labels: ["January", "February", "March", "April", "May", "June", "July"],
  datasets: [{
  label: "My First dataset",
  backgroundColor: 'rgba(54,162,245,.2)',
  borderColor: 'rgba(54,162,245,1)',
  //data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
  data: [70, 45, 65, 50, 65, 35, 50]
  }]
  },
  // Configuration options go here
  options: {
  maintainAspectRatio: false,
  legend: {
  display: false
  },
  scales: {
  xAxes: [{
  display: false
  }],
  yAxes: [{
  display: false
  }]
  },
  elements: {
  line: {
  //tension: 0.00001,
  tension: 0.4,
  borderWidth: 1
  },
  point: {
  radius: 4,
  hitRadius: 10,
  hoverRadius: 4
  }
  }
  }
  });
</script>

<!--custom chart-->
 <script src="{{url('public/backend')}}/assets/vendor/custom-chart/Chart.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/custom-chart/underscore-min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/custom-chart/moment.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/custom-chart/accounting.min.js"></script>
 <!--custom chart init-->
 <script src="{{url('public/backend')}}/assets/vendor/custom-chart/custom-chart-init.js"></script>
 <!--easy pie chart-->
 <script src="{{url('public/backend')}}/assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js"></script>
 <!--vectormap-->
 <script src="{{url('public/backend')}}/assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/vmap-init.js"></script>
 <!--init scripts-->
 <script src="{{url('public/backend')}}/assets/js/scripts.js"></script>

 <script src="{{url('public/backend')}}/assets/vendor/select2/js/select2.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/select2-init.js"></script>
 
 <!-----data table---------------------->
 <script src="{{url('public/backend')}}/assets/vendor/data-tables/jquery.dataTables.min.js"></script>
 <script src="{{url('public/backend')}}/assets/vendor/data-tables/dataTables.bootstrap4.min.js"></script>
 <!-----datatable script----->
 <script>
  $(document).ready(function() {
   $('#bs4-table').DataaTble();
  } );
 </script>
<!----------excel print copy script------>
 <script>
  $(document).ready(function() {
   $('#table').DataTable();
  } );
 </script>

<!---------excel print copy cdn------>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>

<!----------excel print copy script------>
<script type="text/javascript">
 $(document).ready(function() {
  $('#example').DataTable( {
   responsive: true,
   "order": [[ 0, "desc" ]],
   "lengthMenu": [[10, 5, 15, 25, 50, -1], [10,5,15, 25, 50, "All"]],
   dom: 'Bfrtip',
   buttons: [
   {
    extend: 'copyHtml5',
    exportOptions: {
    columns: [ 0, ':visible' ]
    }
   },
   {
    extend: 'excelHtml5',
    exportOptions: {
    columns: ':visible'
    }
   },
  //  {
  //  extend: 'pdf',
  //  exportOptions: {
  //  columns: ':visible'
  //   }
  //  },
  // {
  // extend: 'print',
  // exportOptions: {
  // columns: ':visible'
  // }
  // },
  'colvis','pageLength'
   ]
   });
  });
</script>
<!----text editor  script --------->
<script src="{{url('public/backend')}}/assets/vendor/summernote/summernote-bs4.min.js"></script>
 <script>
  $(document).ready(function() {
  $('#summernote').summernote({
  height: 150,                 
  minHeight: null,             
  maxHeight: null,             
  focus: true                  
   });
  });
 </script>
 <script>
  $(document).ready(function() {
  $('#summernote1').summernote({
  height: 150,                 
  minHeight: null,             
  maxHeight: null,            
  focus: true                 
  });
  });
 </script>
 <script>
  $(document).ready(function() {
  $('#aboutsummernote').summernote({
  height:300,                 
  minHeight: null,             
  maxHeight: null,             
  focus: true                  
  });
  });
 </script>

 <script>
  function startTime() {
   var today = new Date();
   var hr = today.getHours();
   var min = today.getMinutes();
   var sec = today.getSeconds();
   ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
   hr = (hr == 0) ? 12 : hr;
   hr = (hr > 12) ? hr - 12 : hr;
   hr = checkTime(hr);
   min = checkTime(min);
   sec = checkTime(sec);
   document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
   var time = setTimeout(function(){ startTime() }, 500);
  }
  function checkTime(i) {
   if (i < 10) {
    i = "0" + i;
   }
   return i;
  }
 </script>

</body>
</html>

