<form enctype="multipart/form-data" method="post" action="{{url('post-upload')}}">
    {{ csrf_field() }}
    <div class="form-group">
        <label for="imageInput">File input</label>
        <input data-preview="#preview" name="input_img" type="file" id="imageInput">
        <img class="col-sm-6" id="preview"  src=""></img>
        <p class="help-block">Example block-level help text here.</p>
    </div>
    <div class="form-group">
        <label for="">submit</label>
        <input class="form-control" type="submit"/>
    </div>
</form>