
<div class="form-group">
    <label for="">title</label>
    {{ Form::text('title', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- title --']) }}
</div>
<div class="form-group">
    <label for="">short brief</label>
    {{ Form::text('shortbrief', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- short brief --']) }}
</div>
<div class="form-group">
    <label for="">readmore</label>
    {{ Form::text('readmore', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- readmore --']) }}
</div>
<div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control" name="image" required>   
</div>
<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($post) ? 'Update' : 'Create' }}</button>
</div>