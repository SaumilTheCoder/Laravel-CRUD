@extends('admin/layout/projectlayout1')
@section('content')
<div class="content-wrapper">
  <aside class="main-sidebar" style="height: 745px;">
    <!-- sidebar -->
    @include('admin/sidebar/sidebarparking')
    <!-- /.sidebar -->
  </aside>
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
            <h5 class="m-b-0">Parking</h5>
          </div>


          <div class="card-body">
            <form action="{{URL('admin/parking')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data" style="margin:-7px">
             @csrf
              <div class="form-body">
                <div class="form-group row">

                  <div class="col-md-9">

                      <input type="hidden" name='idparking' value="">

                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-right col-md-3">Four Wheeler total Parkinig</label>
                  <div class="col-md-9">
                    {{-- <input placeholder="Four Wheeler" name="fourwheeler" class="form-control" type="text" value=""> --}}
                    {!! Form::text('fourwheeler',$parkingmodel->fourwheeler, ['class' => 'form-control', 'placeholder' => 'fourwheeler']) !!}
                    </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-right col-md-3">Two Wheeler total Parkinig</label>
                  <div class="col-md-9">
                    {{-- <input placeholder="Two Wheeler" name="twowheeler" class="form-control" type="text" value=""> --}}
                    {!! Form::text('twowheeler', $parkingmodel->twowheeler, ['class' => 'form-control', 'placeholder' => 'twowheeler']) !!}

                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label text-right col-md-3">Tempo total Parkinig</label>
                  <div class="col-md-9">
                    {{-- <input placeholder="Tempo" name="tempo" class="form-control" type="text" value=""> --}}
                    {!! Form::text('tempo', $parkingmodel->tempo, ['class' => 'form-control', 'placeholder' => 'tempo']) !!}

                  </div>
                </div>


                  <div class="form-group row last">
                  <label class="control-label text-right col-md-3" >Country</label>
                  <div class="col-md-9">
                    {!!  Form::select('select',$parkingcountry,$parkingmodel->country, ['class' => 'form-control' ]) !!}

                    {{-- <select class="form-control" id="countrydd" name="country" onchange="change_country(this.value)">
                     <option>Select</option>

                   <option value="">

                   </option>

                    </select> --}}
                  </div>
                </div>

                  <div class="form-group row">
                  <label class="control-label text-right col-md-3" >State</label>
                  <div class="col-md-9">
                    {!!  Form::select('select',$parkingstate,$parkingmodel->state, ['class' => 'form-control' ]) !!}

                    {{-- <select class="form-control" id="txtHint" name="state" onchange="change_state(this.value)">
                    <option value=" ">Select</option>

                    <option value="">
                    </option>

                  </select> --}}
                  </div>
                </div>




                <div class="form-group row">
                  <label class="control-label text-right col-md-3">City</label>
                  <div class="col-md-9">
                    {!!  Form::select('select',$parkingcity,$parkingmodel->city , ['class' => 'form-control' ]) !!}

                    {{-- <select class="form-control" id="txtHint1" name="city">
                     <option value=" ">Select</option>

                     <option value="">

                   </option>

                    </select> --}}
                  </div>
                </div>


                <div class="form-group row">
                  <label class="control-label text-right col-md-3">Area Name</label>
                  <div class="col-md-9">

                    {!!  Form::select('select',$parkingarea,$parkingmodel->areaname , ['class' => 'form-control' ]) !!}



                  </div>
                </div>


<div class="form-group row">
                  <label class="control-label text-right col-md-3">Parking Name</label>
                  <div class="col-md-9">
                    {{-- <input placeholder="Area Name" name="parkingname" class="form-control" type="text" value=""> --}}
                    {!! Form::text('parkingname',$parkingmodel->parkingname, ['class' => 'form-control', 'placeholder' => 'parkingname']) !!}

                    </div>
                </div>


                  <div class="form-group row">
                  <label class="control-label text-right col-md-3" >Images</label>

                <div class="col-md-9">
                   {{-- <input type="file" name="image1"> --}}
                   {!! Form::file('image1', $value = null, ['class' => 'form-control',]) !!}

                    {{-- <img style="height: 50px;width: 50px;margin: -115px 267px -56px;"src="" > --}}

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

                           <button type="update" value="update" name="submit" class="btn btn-success" style="background-color: grren"> Submit</button>


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

