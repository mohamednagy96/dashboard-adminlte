
<div class="form-group">
    <label for="">title</label>
    {{ Form::text('title', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- title --']) }}
</div>
<div class="form-group">
    <label for="">fulltext</label>
    {{ Form::text('fulltext', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- fulltext --']) }}
</div>
<div class="form-group">
    <label for="">date</label>
    {{ Form::date('date', null , ['class' => 'form-control','required' => true, 'placeholder' => '-- fulltext --']) }}
</div>
<div class="form-group">
    <label for="">Image</label>
    <input type="file" class="form-control" name="image" required>   
</div>



<div class="form-group">
    <button type="submit" class="btn btn-primary">{{ isset($page) ? 'Update' : 'Create' }}</button>
</div>

