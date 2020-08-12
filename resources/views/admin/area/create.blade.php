@extends('admin/layout/projectlayout1')
@section('content')
<div class="content-wrapper">
  <aside class="main-sidebar" style="height: 706px;">
    <!-- sidebar -->
    @include('admin/sidebar/sidebaraddarea')
    <!-- /.sidebar -->
  </aside>
  <!-- Content Header (Page header) -->
  <div class="content-wrapper" style="    margin: initial;">
    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Form layouts</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li><i class="fa fa-angle-right"></i> Add User</li>
      </ol>
    </div>

    <!-- Main content -->


      <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">Add AREA</h5>
            </div>



            <div class="card-body">
              <form action="{{URL('admin/area')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" style="margin:25px">
              @csrf
                <div class="form-body">
                  <div class="form-group row">

                    <div class="col-md-9">

                        <input type="hidden" name='uid' value="">
                      </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Area Name</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Area Name" name="area" value="" class="form-control" type="text"> --}}
                      {!! Form::text('area', $value = null, ['class' => 'form-control', 'placeholder' => 'area']) !!}

                    </div>
                  </div>

                   <div class="form-group row">
                    <label class="control-label text-right col-md-3">Longitude</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Enter a Longitude" name="longitude" class="form-control" value="" type="text"> --}}
                      {!! Form::text('longitude', $value = null, ['class' => 'form-control', 'placeholder' => 'longitude']) !!}

                    </div>
                  </div>

                   <div class="form-group row">
                    <label class="control-label text-right col-md-3">Latitude</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Enter a Latitude" name="latitude" value="" class="form-control" type="text"> --}}
                      {!! Form::text('latitude', $value = null, ['class' => 'form-control', 'placeholder' => 'latitude']) !!}

                      </div>
                  </div>

                  {{-- {!! Form::checkbox($name, $value, $checked, [$options]) !!} --}}

                    <div class="form-group row last">
                    <label class="control-label text-right col-md-3" >Country</label>
                    <div class="col-md-9">

                        {!! Form::select('country',$country,'s',['class' => 'form-control'] ) !!}

    {{-- {{ Form::select('carname', $carnames, $carmodel->car_name_id, ['class' => 'form-control input-lg dynamic' , 'id'=>"carname" ]) }}
                  --}}


                    </div>
                  </div>

                    <div class="form-group row">
                    <label class="control-label text-right col-md-3" >State</label>
                    <div class="col-md-9">
                      {{-- {!!  Form::select('select', ['S' => 'Select', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!} --}}

                      {!! Form::select('state',$state,'s',['class' => 'form-control'] ) !!}

                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">City</label>
                    <div class="col-md-9">
                      {{-- {!!  Form::select('select', ['S' => 'Select', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!} --}}

                      {!! Form::select('city',$city,'s',['class' => 'form-control'] ) !!}

                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Near Areaname</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Enter a Near Area" name="neararea" value="" class="form-control" type="text"> --}}
                      {!! Form::text('neararea', $value = null, ['class' => 'form-control', 'placeholder' => 'neararea']) !!}

                      </div>
                  </div>




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

                             <button type="Submit" value="submit" name="update" class="btn btn-success" style="background-color: green"> Submit</button>

                          <button type="button" class="btn btn-inverse">Cancel</button>
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

