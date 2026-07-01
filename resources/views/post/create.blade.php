<h1>Create Post</h1>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('tabler/css/tabler.min.css') }}">


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
                    <label>Select User</label>
                    <select name="user" class="form-control">
                        <option>Select One</option>
                        @foreach($user as $value)
                                <option value="{{ $value->id }}">{{ $value->name }}</option>     
                        @endforeach
                    </select>   
                </div>
                <div class="form-group col-md-4 col-sm-4 col-4">
                        <label>Select Title</label>
                        <input class="form-control" type="text" name="title" placeholder="Title">
                </div>
                <div class="form-group col-md-4 col-sm-4 col-4">
                    <label>Select Description</label>
                        <input class="form-control" type="text" name="description" placeholder="Description">
                </div>
                <div class="form-group col-md-4 col-sm-4 col-4">
                    <label>Select File</label>
                    <input class="form-control" type="file" name="image">
                </div>
                <div class="col-md-4 col-sm-4 col-4">
                       <button type="submit">Save</button>
                </div>
            </form>
            <a href="{{ route('posts.index') }}">Back</a>
    
</div>
<script src="{{ asset('tabler/js/tabler.min.js') }}"></script>