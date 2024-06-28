<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     <h1>Publisher</h1>
     <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
     </div>
     <div>
          <table border="1">
              <tr>
                  <th>ID</th>
                  <th>Publisher Name</th>
                  <th>Publisher Address</th>
                  <th>Publisher Phone</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
              @foreach($publishers as $publisher )
                  <tr>
                    <td>{{ $publisher->id }}</td>
                    <td>{{ $publisher->publisher_name }}</td>
                    <td>{{ $publisher->publisher_address }}</td>
                    <td>{{ $publisher->publisher_phone }}</td>
                      <td>
                          <a href="{{route('library.edit', ['publisher' => $publisher])}}">Edit</a>
                      </td>
                      <td>
                        <form method="post" action="{{route('library.destroy', ['publisher' => $publisher])}}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                  </tr>
              @endforeach
          </table>
        </br> </br> </br>
          <div>
            <a href="{{route('library.create')}}">Create a Publisher</a>
        </div>
    </div>
</body>
</html>