<div class="sidebar"> 
    <!-- Sidebar user panel -->
    <div class="user-panel">
      
      <div class="image text-center"><img src="{{asset('assets/img/professional.jpg')}}" class="img-circle" alt="User Image"> </div>
      <div class="info">
        <p>Saumil Rana</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a> </div>
    </div>
    
    <!-- sidebar menu -->
    <ul class="sidebar-menu" data-widget="tree">
      
     <li> <a href="{{asset('admin/dashboard')}}"><i class="icon-home"></i> <span>Dashboard</span> </a>
      {{-- <link rel="stylesheet" href="{{asset('assets/css/font-awesome/css/font-awesome.min.css')}}"> --}}
      </li>
   
     
      <li class="active treeview"> <a href="#"> <i class="icon-note"></i> <span>Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
          <li class="active"><a href="{{asset('admin/add1')}}"><i class="fa fa-angle-right"></i> Add</a></li>
         
          <li><a href="{{asset('http://127.0.0.1:8000/admin/adminform')}}"><i class="fa fa-angle-right"></i> View</a></li>
        </ul>
      </li>

<!-- Parking
-->

<li class="treeview"> <a href="#"><i class="fas fa-car"></i> <span>Parking</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
  <ul class="treeview-menu">
    
    <li><a href="{{asset('admin/parking')}}"><i class="fa fa-angle-right"></i> Add category</a></li>
   
    <li><a href="{{asset('admin/parkingmanage')}}"><i class="fa fa-angle-right"></i> Manage category</a></li>
  </ul>
</li>

      <!--Add category-->

      {{-- <li class="treeview"> <a href="#"><i class="fas fa-car"></i> <span>Vehicle Category</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
          <li><a href="vehiclecategory.php"><i class="fa fa-angle-right"></i> Add category</a></li>
         
          <li><a href="managecategory.php"><i class="fa fa-angle-right"></i> Manage category</a></li>
        </ul>
      </li> --}}

      

      <li class="treeview"> <a href="#"><i class='fas fa-globe-asia'></i> <span>Manage Area</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
         
    <li><a href="{{asset('admin/addarea')}}"><i class="fa fa-angle-right"></i> Add Area And Vehicle</a></li>
         
          <li><a href="{{asset('admin/viewvehicleandarea')}}"><i class="fa fa-angle-right"></i> View Area</a></li>
        </ul>
      </li>

      <li class="treeview"> <a href="#"><i class='fas fa-chart-line'></i> <span>Reports</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
          <li><a href="{{asset('admin/reports')}}"><i class="fa fa-angle-right"></i> Reports</a></li>
        </ul>
      </li>

       <li class="treeview"> <a href="#"><i class="fa fa-search"></i> <span>Search</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
          <li><a href="{{asset('admin/search')}}"><i class="fa fa-angle-right"></i> Search</a></li>
        </ul>
      </li>
  <li class="treeview"> <a href="#"><i class='fas fa-globe-africa'></i><span> Country</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
        <li><a href="{{asset('admin/country')}}"><i class="fa fa-angle-right"></i> Add</a></li>
          <li><a href="{{asset('admin/viewcountry')}}"><i class="fa fa-angle-right"></i> View</a></li>
        </ul>
      </li>
      <li class="treeview"> <a href="#"><i class='fas fa-map-marker-alt'></i> <span> State</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
          <li><a href="{{asset('admin/state')}}"><i class="fa fa-angle-right"></i> Add</a></li>
           <li><a href="{{asset('admin/viewstate')}}"><i class="fa fa-angle-right"></i> View</a></li>
        </ul>
      </li>

      <li class="treeview"> <a href="#"><i class='fas fa-place-of-worship'></i> <span>City</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
          <li><a href="{{asset('admin/city')}}"><i class="fa fa-angle-right"></i> Add</a></li>
           <li><a href="{{asset('admin/viewcity')}}"><i class="fa fa-angle-right"></i> View</a></li>
        </ul>
      </li>
          <li class="treeview"> <a href="#"><i class='fas fa-place-of-worship'></i> <span>Checkout</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
          
          <li><a href="{{asset('admin/checkout')}}"><i class="fa fa-angle-right"></i>Checkout Page</a></li>

           <li class="active"><a href="{{asset('admin/checkoutview')}}"><i class="fa fa-angle-right"></i> View</a></li> 
        </ul>
      </li>


      <li class="treeview"> <a href="#"> <i class="fa fa-table"></i> <span>Tables</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
        <ul class="treeview-menu">
         
          <li><a href="table.php"><i class="fa fa-angle-right"></i> Data Tables</a></li>
         
        </ul>
      </li>
      
    </ul>
  </div>