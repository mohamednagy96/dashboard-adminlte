<div class="form-group">
    <label for="">name</label>
    {{ Form::text('name', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- name --']) }}
</div>

<div class="form-group">
    <label for="">Email</label>
    {{ Form::email('email', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- Email --']) }}
</div>

<div class="form-group">
    <label for="">Password</label>
    {{ Form::password('password' , ['class' => 'form-control']) }}
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($admin) ? 'Update' : 'Create' }}</button>
</div>

