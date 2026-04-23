<h1>Create Post</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


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
            <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group col-md-4 col-sm-4 col-4">
                        <input class="form-control" type="text" name="title" placeholder="Title">
                </div>
                <div class="form-group col-md-4 col-sm-4 col-4">
                        <input  class="form-control" type="text" name="description" placeholder="Description">
                </div>
                <div class="form-group col-md-4 col-sm-4 col-4">
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="col-md-4 col-sm-4 col-4">
                       <button type="submit">Save</button>
                </div>
            </form>
            <a href="{{ route('posts.index') }}">Back</a>
    
</div>