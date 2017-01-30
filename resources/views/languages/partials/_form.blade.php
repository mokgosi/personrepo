<div class="form-group">
    {!! Form::label('name', 'Name:', ['class' => 'control-label col-sm-2']) !!}
    <div class="col-sm-10">
        {!! Form::text('name', $value=null, 
            ['placeholder' => 'Type language name', 'class' => 'form-control','required'=>'', minlength="3", maxlength="255"]) !!}
    </div>
</div>
<div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        {!! Html::linkRoute('language.index', 'Cancel',array(), array('class' => 'btn btn-default btn-sm')) !!}
        {!! Form::submit($submit_text, ['class'=>'btn btn-primary btn-sm']) !!}
    </div>
</div>