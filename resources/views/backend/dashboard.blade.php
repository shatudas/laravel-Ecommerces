@extends('backend.index')

@section('backcontent')


<main class="main-content">
 <!--page title start-->
 <div class="page-title">
  <div class="container-fluid p-0">
   <div class="row">
    <div class="col-8">
     <h4 class="mb-0"> Dashboard</h4>
     <ol class="breadcrumb mb-0 pl-0 pt-1 pb-0">
      <li class="breadcrumb-item"><a href="#" class="default-color">Home</a></li>
      <li class="breadcrumb-item active">Dashboard</li>
     </ol>
    </div>
    <div class="col-4">
    </div>
   </div>
  </div>
 </div>

 <!--page title end-->


 <div class="container-fluid">

  <div class="row">

   <div class="col-xl-3 col-sm-6 mb-4">
    <form method="post" action="">
     @php
     $vardata=DB::table('users')->where('status',1)->get();
     @endphp
     <div class="card card-shadow">
      <div class="card-body ">
       <i class="icon-people text-primary f30"></i>
       <h6 class="mb-0 mt-3">New Users</h6>
       <p class="f12 mb-0">{{Count($vardata)}}&nbsp;&nbsp;&nbsp;User</p>
      </div>
     </div>
    </form>
   </div>
   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varstatus=DB::table('invoece')->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
      <i class="icon-basket-loaded text-info f30"></i>
      <h6 class="mb-0 mt-3">Total Order Placed</h6>
      <p class="f12 mb-0">{{Count($varstatus)}}&nbsp;&nbsp;&nbsp;New Order Placed</p>
     </div>
    </div>
   </div>

  </div>

  <div class="row">
   
   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varpanding=DB::table('invoece')->where('status',0)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
      <img src="{{url('public/backend')}}/Dual Ring-10s-38px.gif">
      {{-- <i class=" icon-handbag text-danger f30"></i> --}}

      <h6 class="mb-0 mt-3">Order Pading</h6>
      <p class="f12 mb-0">{{Count($varpanding)}}&nbsp;&nbsp;&nbsp;Order Pading</p>
     </div>
    </div>
   </div>
   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varproseccing=DB::table('invoece')->where('status',1)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
     <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
      <h6 class="mb-0 mt-3">Product Processing</h6>
      <p class="f12 mb-0">{{Count($varproseccing)}}&nbsp;&nbsp;&nbsp;Product Processing</p>
     </div>
    </div>
   </div>

   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varshiping=DB::table('invoece')->where('status',2)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
     <i class='fas fa-shipping-fast' style="font-size:24px"></i>
      <h6 class="mb-0 mt-3">Product Shiping</h6>
      <p class="f12 mb-0">{{Count($varshiping)}}&nbsp;&nbsp;&nbsp;Product Shiping</p>
     </div>
    </div>
   </div>

   <div class="col-xl-3 col-sm-6 mb-4">
    @php
    $varComplated=DB::table('invoece')->where('status',3)->get();
    @endphp
    <div class="card card-shadow">
     <div class="card-body ">
     {{-- <i class='fas fa-shipping-fast' style="font-size:24px"></i> --}}
     <img src="{{url('public/backend')}}/8e2b58f62b56eb8a7f10045781b47def.svg" style="height:38px;">
      <h6 class="mb-0 mt-3">Product Complated</h6>
      <p class="f12 mb-0">{{Count($varComplated)}}&nbsp;&nbsp;&nbsp;Product Complated</p>
     </div>
    </div>
   </div>

  </div>


  <div class="row">
   <div class="col-md-4">
    <div class="card card-shadow mb-4">
     <div class="card-body pb-0 ">
      <div class="btn-group float-right">
       <div class="dropdown ">
        <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class=" icon-options"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right ">
         <a class="dropdown-item" href="#"> <i class="icon-note text-info pr-2"></i> Edit</a>
         <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Delete</a>
         <a class="dropdown-item" href="#"><i class="icon-shield text-warning pr-2"></i> Cancel</a>
        </div>
       </div>
      </div>
      <h4 class="mb-0 ">12083</h4>
      <p class="">New Users</p>
     </div>
     <div class="">
      <canvas id="myChart-light" height="100"></canvas>
     </div>
    </div>
   </div>
   <div class="col-md-4">
    <div class="card card-shadow mb-4">
     <div class="card-body pb-0">
      <div class="btn-group float-right">
       <div class="dropdown ">
        <a href="#" class="btn btn-transparent default-color dropdown-hover p-0" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <i class=" icon-options"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right ">
         <a class="dropdown-item" href="#"> <i class="icon-note text-info pr-2"></i> Edit</a>
         <a class="dropdown-item" href="#"><i class="icon-close text-danger pr-2"></i> Delete</a>
         <a class="dropdown-item" href="#"><i class="icon-shield text-warning pr-2"></i> Cancel</a>
        </div>
       </div>
      </div>
      <h4 class="mb-0">234</h4>
      <p class="">New Orders</p>
     </div>
     <div class="px-">
      <canvas id="myChart-tow-light" height="100"></canvas>
     </div>
    </div>
   </div>
   <div class="col-md-4">
    <div class="card card-shadow">
     <div class="card-body">
      <div class="row pt-4 pb-3">
       <div class="col-12">
        <div class="float-right">
         <i class="f30 opacity-3 icon-basket-loaded"></i>
        </div>
        <h3 class="text-success">234</h3>
        <p class="card-subtitle text-muted fw-500">New Orders</p>
       </div>
       <div class="col-12">
        <div class="progress mt-3 mb-1" style="height: 6px;">
         <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> </div>
        </div>
        <div class="text-muted f12">
         <span>Progress</span>
         <span class="float-right">83%</span>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>

 </div>

</main>

<aside class="right-sidebar">

 <div class="widget">
  <h3 class="mb-4 widget-title">Notification</h3>

  <div class="notification-list">
   <ul class="list-unstyled">
    <li>
     <div class="nt-thumb mr-3">
      <img src="{{url('public/backend')}}/assets/img/n1.png" alt=""/>
     </div>
     <div class="nt-info">
      <a href="#"  class="nt-title">Diverse Ltd.</a>
      <small class="text-muted">2 days ago</small>
      <p><a href="#">www.diverse-test.com</a></p>
     </div>
    </li>
    <li>
     <div class="nt-thumb mr-3">
      <img src="{{url('public/backend')}}/assets/img/n3.png" alt=""/>
     </div>
     <div class="nt-info">
      <a href="#"  class="nt-title">Black Friday Discount Offer</a>
      <small class="text-muted">2 days ago</small>
      <p>Nam libero tempore cum soluta nobis est eligendi.</p>
     </div>
    </li>

    <li>
     <div class="nt-thumb mr-3">
      <img src="{{url('public/backend')}}/assets/img/n2.png" alt=""/>
     </div>
     <div class="nt-info">
      <a href="#"  class="nt-title">Task Failed</a>
      <small class="text-muted">2 days ago</small>
      <p>Error: Invalid command found ... after [this class]</p>
     </div>
    </li>

    <li>
     <div class="nt-thumb mr-3">
      <img src="{{url('public/backend')}}/assets/img/n4.png" alt=""/>
     </div>
     <div class="nt-info">
      <a href="#"  class="nt-title">John Doe</a>
      <small class="text-muted">3 days ago</small>
      <p>Send you a contact request.</p>
     </div>
    </li>

   </ul>
  </div>
 </div>

 <div class="widget">
  <h3 class="mb-4 widget-title">Activity Log</h3>
  <div class="baseline baseline-border">
   <div class="baseline-list">
    <div class="baseline-info">
     <div><a href="#" class="default-color"><strong>John Tasi</strong></a> Prepare for the Meeting <span class="badge badge-pill badge-success">status</span></div>
     <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
    </div>
   </div>
   <div class="baseline-list baseline-border baseline-primary">
    <div class="baseline-info">
     <div>Video conference to client</div>
     <span class="text-muted">05:00 PM Sun, 02 Feb 2018</span>
    </div>
   </div>
   <div class="baseline-list  baseline-border baseline-success">
    <div class="baseline-info">
     <div><a href="#" class="default-color"><strong>Tnisha</strong></a> Submit a blog post <a href="#" class="">best admin template in 2018.</a></div>
     <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
    </div>
   </div>
   <div class="baseline-list  baseline-border baseline-warning">
    <div class="baseline-info">
     <div><a href="#" class="default-color"><strong>New Request</strong></a> 10 user request to approve or remove</div>
     <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
    </div>
   </div>
   <div class="baseline-list  baseline-border baseline-info">
    <div class="baseline-info">
     <div><a href="#" class="default-color"><strong>Mark Henry</strong></a> added your friend list now</div>
     <span class="text-muted">10:00 PM Sat, 10 Jan 2018</span>
    </div>
   </div>
  </div>
 </div>

 <div class="widget">
  <h3 class="mb-4 widget-title">Stocks</h3>
  <div class="table-responsive">
   <table class="table">
    <tbody>
     <tr>
      <td>DOW</td>
      <td>1999</td>
      <td>
       <span class="badge badge-pill badge-primary">+ 0.10%</span>
      </td>
     </tr>
     <tr>
      <td>AAPL</td>
      <td>1299</td>
      <td>
       <span class="badge badge-pill badge-success">- 0.50%</span>
      </td>
     </tr>
     <tr>
      <td>SBUX</td>
      <td>1099</td>
      <td>
       <span class="badge badge-pill badge-danger">+ 0.20%</span>
      </td>
     </tr>
     <tr>
      <td>NKE</td>
      <td>2199</td>
      <td>
       <span class="badge badge-pill badge-warning">+ 1.25%</span>
      </td>
     </tr>
     <tr>
      <td>YOO</td>
      <td>999</td>
      <td>
       <span class="badge badge-pill badge-info">+ 3.00%</span>
      </td>
     </tr>

    </tbody>
   </table>
  </div>
 </div>


</aside>













@endsection