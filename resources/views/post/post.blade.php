<h1>Post List</h1>

    <table>
        <thead>
            <th>Id</th>
            <th>Item</th>
            <th>Description</th>    
            <th>Image</th>
        </thead>
        <tbody>
            @foreach ($post as $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
               
                @if ($value->image)
                 <td><img src="{{ asset('storage/'.$value->image) }}" width="50"></td>
                @else
                 <td><img src="{{ asset('uploads/'.'subahanAllah.jpg') }}" width="50"></td>
                @endif
                <td><a href="{{ route('posts.edit',$value->id) }}">Edit</a></td>
                <td><a href="{{ route('posts.create') }}">Create</a></td>
                <td>
                    <form action="{{ route('posts.destroy',$value->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
                 
            @endforeach
        </tbody>
        
    </table>
