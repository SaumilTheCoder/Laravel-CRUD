
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
              <h5 class="m-b-0">User Form Update</h5>
            </div>


            <div class="card-body">
                {!!Form::open(['action'=>['admin\User@update', $usermodel->id ] , 'method' => 'put' , 'enctype'=>'multipart/form-data']  ) !!}

               {{-- <form action="{{URL('admin/user/')}}" method="post" class="form-horizontal form-bordered" enctype="multipart/form-data"> --}}
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
                      {!! Form::text('fname', $usermodel->fname, ['class' => 'form-control', 'placeholder' => 'First Name']) !!}
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Last Name</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Last Name" name="lname" value="" class="form-control" type="text"> --}}
                      {!! Form::text('lname', $usermodel->lname, ['class' => 'form-control', 'placeholder' => 'Last Name']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Profile Pictures</label>
                    <div class="col-md-9">

                        {{-- <input type="file" name="image1"> --}}
                        {!! Form::file('image1', ['class' => 'form-control',]) !!}
                        <?php

                        if(!empty($usermodel->image1))
                        {

                        ?>
                        <img src="<?php echo url('/')  ?>/storage/cover_images/{{$usermodel->image1}}" height="50px" width="50px" />
                        <?php
                        }
                        ?>
                      {{-- <img style="height: 50px;width: 50px;margin: -115px 267px -56px;"> --}}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Email</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Email" name="email" value="" class="form-control" type="text"> --}}
                      {!! Form::email('email',$usermodel->email, ['class' => 'form-control', 'placeholder' => 'Email']) !!}
                      </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Mobile Number</label>
                    <div class="col-md-9">
                      {{-- <input placeholder="Mobile Number" name="mobilenumber" value="" class="form-control" type="tel"> --}}
                      {!! Form::text('mobilenumber',$usermodel->mobilenumber, ['class' => 'form-control', 'placeholder' => 'mobilenumber']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Gender</label>
                    <div class="col-md-9">
                      <div class="radio">
                        {{-- {!! Form::label('radio1', 'male') !!}
                        {!! Form::radio('radio', 'option1', true, ['id' => 'radio1']) !!} --}}

                    </div>
                    <div class="radio">
                        {{-- {!! Form::label('radio2', 'female') !!}
                        {!! Form::radio('radio', $usermodel->gender) !!} --}}

                        {{-- {{ Form::label('visible', 'Visibility') }} --}}
                        {{ Form::radio('gender', 'male', $usermodel->gender=='male' ? true : false ) }} male
                        <br/>
                        {{ Form::radio('gender', 'female', $usermodel->gender=='female' ? true : false , []) }} female

                    </div> </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Date of Birth</label>
                    <div class="col-md-9">
                      {{-- <input class="form-control" name="date" value="" placeholder="dd/mm/yyyy" type="date"> --}}
                      {!! Form::date('date', $usermodel->date, ['class' => 'form-control', 'placeholder' => 'date']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Address</label>
                    <div class="col-md-9">
                      {{-- <input class="form-control" name="address" value="" type="text" placeholder="Street"> --}}
                      {!! Form::text('address',  $usermodel->address, ['class' => 'form-control', 'placeholder' => 'address']) !!}
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">Hobbies</label>
                    <div class="form-group">
                      {{-- {!! Form::label('password', 'Password:', ['class' => 'col-lg-2 control-label']) !!} --}}
                      <div class="col-lg-10">
                          {{-- {!! Form::password('password',['class' => 'form-control', 'placeholder' => 'Password', 'type' => 'password']) !!} --}}
                          <div class="checkbox">
                            {{-- {!! Form::checkbox('swimming') !!} --}}
                           <?php  $temp = $usermodel->hobby;
                                $array = explode(",",$temp);
                           ?>
                           {{-- Form::checkbox('name', 'value', true); --}}

                            {!! Form::checkbox('hobby[]', 'cricket' , in_array('cricket', $array) ? true:false) !!}
                              {!! Form::label('cricket', 'cricket') !!}

                              {{-- {{ Form::radio('visible', '1', $usermodel->gender=='male' ? true : false ) }} male --}}
                              {!! Form::checkbox('hobby[]','volleyball',in_array('volleyball',$array) ? true:false) !!}
                              {!! Form::label('volleyball', 'volleyball') !!}

                              {!! Form::checkbox('hobby[]','music',in_array('music',$array) ? true:false) !!}
                              {!! Form::label('Music', 'music') !!}

                              {{-- {!! Form::label('singing', 'Singing') !!} --}}

                              {{-- {!! Form::checkbox('travelling') !!} --}}

                              {{-- {!! Form::label('travelling', 'Travelling') !!} --}}
                              {{-- {!! Form::checkbox('cricket') !!} --}}


                          </div>
                      </div>
                    {{-- <div class="col-md-9">

                      <input type="checkbox" name="hobby[]" value="Cricket"/>Cricket


                      <input type="checkbox" name="hobby[]" value="Swimming">Swimming
                      <input type="checkbox" name="hobby[]" value="Vollyball">Vollyball
                      <input type="checkbox" name="hobby[]" value="Reading">Reading
                    </div> --}}
                  </div>
                  </div>
                    <div class="form-group row last">
                    <label class="control-label text-right col-md-3" >Country</label>
                    <div class="col-md-9">
                      <div class="form-group">
                        {{-- {!! Form::label('select', 'Select', ['class' => 'col-lg-2 control-label'] )  !!}
                        <div class="col-lg-10"> --}}

                {!!  Form::select('country',$user, $usermodel->country, ['class' => 'form-control' ]) !!}

                        </div>
                    </div>

                    </div>
                  </div>

                    <div class="form-group row">
                    <label class="control-label text-right col-md-3" >State</label>
                    <div class="col-md-9">

                        {!!  Form::select('state',$userstate, $usermodel->state, ['class' => 'form-control' ]) !!}


                      {{-- {!!  Form::select('select', ['S' => 'Select', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!} --}}
                    {{-- <select class="form-control" id="txtHint" name="state" onchange="change_state(this.value)">
                      <option value=" ">Select</option>

                     </option>
                    </select> --}}
                    </div>
                  </div>


                  <div class="form-group row">
                    <label class="control-label text-right col-md-3">City</label>
                    <div class="col-md-9">


                        {!!  Form::select('city',$usercity, $usermodel->city, ['class' => 'form-control' ]) !!}


                      {{-- {!!  Form::select('select', ['S' => 'Select', 'L' => 'Large', 'XL' => 'Extra Large', '2XL' => '2X Large'],  'S', ['class' => 'form-control' ]) !!} --}}
                      {{-- <select class="form-control" id="txtHint1" name="city">
                       <option value=" ">Select</option>

                      </select> --}}
                    </div>
                  </div>


                        {{-- {!! Form::text('countryname', $data->countryname, ['class' => 'form-control', 'placeholder' => 'countryname']) !!} --}}
                       {{-- <input type="text" name="fname" class="form-control" placeholder="fname"> --}}


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

                          <button type="button" class="btn btn-inverse">Cancel</button>
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

