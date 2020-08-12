@extends('admin/layout/projectlayout1')
@section('content')
<div class="content-wrapper"> 
    <!-- Content Header (Page header) -->
    {{-- <div class="content-header sty-one">
      <h1>Form layouts</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Add User</li>
      </ol>
    </div> --}}
    <aside class="main-sidebar" style="height: 751px;"> 
      <!-- sidebar -->
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
       
         
          <li class="treeview"> <a href="#"> <i class="icon-note"></i> <span>Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              
              <li ><a href="{{asset('admin/add1')}}"><i class="fa fa-angle-right"></i> Add</a></li>
             
              <li><a href="{{asset('admin/view1')}}"><i class="fa fa-angle-right"></i> View</a></li>
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
              
            <li><a href="{{asset('admin/admincountry')}}"><i class="fa fa-angle-right"></i> Add</a></li>
              <li><a href="{{asset('admin/viewcountry')}}"><i class="fa fa-angle-right"></i> View</a></li>
            </ul>
          </li>
          <li class="treeview"> <a href="#"><i class='fas fa-map-marker-alt'></i> <span> State</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              
              <li><a href="{{asset('admin/adminstate')}}"><i class="fa fa-angle-right"></i> Add</a></li>
               <li><a href="{{asset('admin/viewstate')}}"><i class="fa fa-angle-right"></i> View</a></li>
            </ul>
          </li>
  
          <li class="treeview"> <a href="#"><i class='fas fa-place-of-worship'></i> <span>City</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
            <ul class="treeview-menu">
              
              <li><a href="{{asset('admin/admincity')}}"><i class="fa fa-angle-right"></i> Add</a></li>
               <li><a href="{{asset('admin/viewcity')}}"><i class="fa fa-angle-right"></i> View</a></li>
            </ul>
          </li>
              <li class="active treeview"> <a href="#"><i class='fas fa-place-of-worship'></i> <span>Checkout</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
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
      <!-- /.sidebar --> 
    </aside>
    <!-- Main content -->
    <div class="content-wrapper"style="margin: initial;"> 
        <!-- Content Header (Page header) -->
        <div class="content-header sty-one">
          <h1>View</h1>
          <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><i class="fa fa-angle-right"></i> View</li>
          </ol>
        </div>
        
        <!-- Main content -->
    
    <?php
    $conn=mysqli_connect("localhost","root","","vehicle")or die("Connection is not successfull");
    
    $query="select * from payumoney";
    
    $result=mysqli_query($conn,$query)or die("Query isnot Executed.");
    ?>
    
        <div class="content">
          <div class="table-responsive">
    
               <table id="example2" class="table table-bordered table-hover" data-name="cool-table">
    
              <!-- Head Section-->
    
    
              <thead>
                <tr style="font-size: 14px;">
                    <th>checkout_id</th>
                  <th>Amount</th>
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>Vehicle Information</th>
                   <th>Action</th>   
                </tr>
              </thead>
    
    <!--Body-->
     <?php 
     while($row=mysqli_fetch_array($result))
     {
      ?>
     <tbody>
       <tr>
         <td><?php echo $row['payumoneyid'];?></td>
          <td><?php echo $row['amount'];?></td>
          <td><?php echo $row['fname'];?></td>
          <td><?php echo $row['email'];?></td>
          <td><?php echo $row['phone'];?></td>
          <td><?php echo $row['vehicleinfo'];?></td>
    
            <td>
              <button style="width: 55px;">  
                <a href="checkout.php?eid="><i class='far fa-edit'></i>       
                    <a href="checkoutview.php?did="><i class="fa fa-trash-o"></i>
            
          </button>
        </td>
       </tr>
       <?php 
     }
        ?>
     </tbody>
    
    
    
            </table>
          </div>
        </div>
        <!-- /.content --> 
      </div>
@endsection
@section('content1')
&copy; copyright 2020 Vehicle parking    
@endsection

