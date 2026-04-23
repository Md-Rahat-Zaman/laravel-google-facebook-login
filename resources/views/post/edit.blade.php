<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<h1>Edit Post</h1>

<div class="row" >
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            <form action="{{ route('posts.update',$post->id) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group col-md-4 col-sm-4 col-4">
                        <input class="form-control" type="text" name="title" value="{{ $post->title }}">
                </div>
                <div class="form-group col-md-4 col-sm-4 col-4">
                        <input  class="form-control" type="text" name="description" value="{{ $post->description }}">
                </div>
                <div class="col-md-4 col-sm-4 col-4">
                       <button type="submit">Update</button>
                </div>
            </form>
            <a href="{{ route('posts.index') }}">Back</a>
    
</div>