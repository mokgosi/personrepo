<div class="form-group">
    {!! Form::label('first_name', 'First Name:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('first_name', $value=null,
            ['placeholder' => 'Type first name', 'class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('surname', 'Last Name:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('surname', $value=null, 
            ['placeholder' => 'Type surname', 'class' => 'form-control col-sm-4']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('email', 'Email:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('email', $value=null, 
            ['placeholder' => 'email@mail.com','class' => 'form-control col-sm-4']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('Mobile', 'Mobile:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('mobile', $value=null, 
            ['placeholder' => 'Type mobile number','class' => 'form-control col-sm-4']) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('date_of_birth', 'D.O.B:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
    {!! Form::text('date_of_birth', $value=null,
        ['placeholder' => 'yyyy-mm-dd', 'class' => 'form-control col-sm-4']) !!}
    </div>  
</div>
<div class="form-group">
    {!! Form::label('language_id', 'Language:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
    {!! Form::select('language_id', $items, $value=null,
        ['placeholder' => 'Select language...', 'class' => 'form-control col-sm-4']) !!}
    </div>  
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Html::linkRoute('person.index', 'Cancel',array(), array('class' => 'btn btn-default btn-sm')) !!}
        {!! Form::submit($submit_text, ['class'=>'btn btn-primary btn-sm']) !!}
    </div>
</div>