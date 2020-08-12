
@extends('admin/layout/projectlayout1')
@section('content')

<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header sty-one">
      <h1>Form layouts</h1>
      <ol class="breadcrumb">
        <li><a href="#">Home  </a></li>
        <li><i class="fa fa-angle-right"></i> Add User</li>
      </ol>
    </div>
    <aside class="main-sidebar" style="height: 937px;">
      <!-- sidebar -->
      @include('admin/sidebar/sidebaruser')
      <!-- /.sidebar -->
    </aside>
    <!-- Main content -->


      <div class="row m-t-3">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header bg-blue">
              <h5 class="m-b-0">User Form</h5>
            </div>


            <div class="card-body">
                {{-- {!!Form::open(['action'=>'Country@update','method'=>'post'])!!} --}}
              <form action="{{URL('admin/user')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data">
              @csrf
                <div class="form-body">
                  <div class="form-group row">

                    <div class="col-md-9">
                        <input type="hidden" name='id1' value="">
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">First Name</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="First Name" value="" name="fname" class="form-control" type="text"> --}}
                      {!! Form::text('fname',$value = null, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Last Name</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Last Name" name="lname" value="" class="form-control" type="text"> --}}
                      {!! Form::text('lname', $value = null, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Profile Pictures</label>
                    <div class="col-md-9">

                        {{-- <input type="file" name="image1"> --}}
                        {!! Form::file('image1', $value = null, ['class' => 'form-control',]) !!}

                      {{-- <img style="height: 50px;width: 50px;margin: -115px 267px -56px;"> --}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Email</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Email" name="email" value="" class="form-control" type="text"> --}}
                      {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Mobile Number</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Mobile Number" name="mobilenumber" value="" class="form-control" type="tel"> --}}
                      {!! Form::text('mobilenumber', $value = null, ['class' => 'form-control', 'placeholder' => 'mobilenumber']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Gender</label>
                    <div class="col-md-9">
                      <div class="radio">
                        {{ Form::radio('gender', $value = 'male')  }}male
                        {{ Form::radio('gender', $value = 'female') }}female
                    </div>
                    </div>
                  </div>
                    {{-- <div class="radio">
                        {!! Form::label('radio2', 'female') !!}
                        {!! Form::radio('radio', 'option2', false, ['id' => 'radio2']) !!}
                    </div> </div> --}}

                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Date of Birth</label>
                    <div class="col-md-9">
                      {{-- <input class="form-control" name="date" value="" placeholder="dd/mm/yyyy" type="date"> --}}
                      {!! Form::date('date', $value = null, ['class' => 'form-control', 'placeholder' => 'date']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Address</label>
                    <div class="col-md-9">
                      {{-- <input class="form-control" name="address" value="" type="text" placeholder="Street"> --}}
                      {!! Form::text('address', $value = null, ['class' => 'form-control', 'placeholder' => 'address']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Hobbies</label>
                    <div class="form-group">
                      {{-- {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!} --}}
                      <div class="col-lg-10">
                          {{-- {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!} --}}
                          <div class="checkbox">
                              <label>Cricket</label>
                            {{ Form::checkbox('hobby[]', 'cricket') }}
                            <label>Volleyball</label>
                            {{ Form::checkbox('hobby[]', 'volleyball') }}
                            <label>Music</label>
                            {{ Form::checkbox('hobby[]', 'music') }}
                        </div>
                      </div>
                    </div>

                    </div>
                  </div>
                  </div>

                    <div class="form-group row last">
                    <label class="control-label text-right col-md-3" >Country</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        {!!  Form::select('country', $country,'S', ['class' => 'form-control' ]) !!}

                        {{-- {!! Form::select('country',$country,['class' => 'form-control'] ) !!} --}}

                        </div>
                    </div>
                    </div>

                    <div class="form-group row last">
                        <label class="control-label text-right col-md-3" >State</label>
                        <div class="col-md-9">
                          <div class="form-group">

                            {!! Form::select('state',$state,'s',['class' => 'form-control'] ) !!}

                            </div>
                        </div>
                    </div>

                    <div class="form-group row row">
                        <label class="control-label text-right col-md-3" >City</label>
                        <div class="col-md-9">
                          <div class="form-group">

                            {!! Form::select('city',$city,'s',['class' => 'form-control'] ) !!}

                            </div>
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


                        <button type="submit" value="submit" name="submit" class="btn btn-success"> Submit</button>
                          {{-- <button type="button" class="btn btn-inverse">Cancel</button> --}}
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
              {!!Form::close()!!}
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('content1')
&copy; copyright 2020 Vehicle parking
@endsection

