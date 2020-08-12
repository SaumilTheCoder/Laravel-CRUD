@extends('admin/layout/projectlayout1')
@section('content')
<aside class="main-sidebar" style="height: 745px;">
    <!-- sidebar -->
    @include('admin/sidebar/sidebarstate')
    <!-- /.sidebar -->
  </aside>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Admin</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i>Add category</li>
      </ol>
    </div>

    <!-- Main content -->


      <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0"> Add Category</h5>
            </div>
            <div class="card-body">
            <form action="{{URL('admin/state')}}" method="post" class="form-horizontal form-bordered">
              @csrf
              <div class="form-body">
                  <div class="form-group row">

                    <div class="col-md-9">

                         <input type="hidden" name="idstate" value="">

                      </div>
                  </div>

                  <div class="form-group row last">
                    <label class="control-label text-right col-md-3" >Country</label>
                    <div class="col-md-9">
                      <div class="form-group">

                        {!! Form::select('country',$country,'s',['class' => 'form-control'] ) !!}


                        </div>
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="control-label text-right col-md-3">Add State</label>
                        <div class="col-md-9">
                         {{-- <input type="text" name="statename"   placeholder="State name" value="" style="    width: 500px;"> --}}
                         {!! Form::text('statename', $value = null, ['class' => 'form-control', 'placeholder' => 'statename']) !!}

                        </div>
                      </div>
                 <!--  <div class="form-group row">
                    <label class="control-label text-right col-md-3">New Password</label>
                    <div class="col-md-9">
                      <input type="password" name="newpwd" class="form-control">
                      </div>
                  </div>
                   <div class="form-group row">
                    <label class="control-label text-right col-md-3">Confirmed Password</label>
                    <div class="col-md-9">
                      <input type="password" name="confirmedpwd" class="form-control">
                      </div>
                  </div> -->

                  <!--<div class="form-group row">
                    <label class="control-label text-right col-md-3">Post Code</label>
                    <div class="col-md-9">
                      <input class="form-control" type="text">
                    </div>
                  </div>-->

                </div>
                <div class="form-actions">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="row">
                        <div class="offset-sm-3 col-md-9">

                          <button type="submit" value="submit" name="submit" class="btn btn-success"> Submit</button>

                         <!--  <button type="button" class="btn btn-inverse">Cancel</button> -->
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('content1')
&copy; copyright 2020 Vehicle parking
@endsection

