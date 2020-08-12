<div class="well">
 
    {!! Form::open(['url' => '/processform', 'class' => 'form-horizontal']) !!}
 
    <div class="form-group">
        
        {!! Form::label('email', 'Email:', ['class' => 'col-lg-2 control-label']) !!}
        <div class="col-lg-10">
            {!! Form::email('email', $value = null, ['class' => 'form-control', 'placeholder' => 'email']) !!}
        </div>
    </div>

    <button class="btn btn-success" type="submit">Add the Car!</button>

    {!! Form::close()  !!}
 
</div>