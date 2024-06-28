<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <title>Document</title>
</head>
<body>
     <h1>Edit a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>

        @endif
    </div>
    <form method="post" action="{{route('library.update', ['publisher' => $publisher])}}">
        @csrf
        @method('put')
        <div>
            <label>Publisher Name</label>
            <input type="text" name="name" value="{{$publisher->publisher_name}}" />
        </div>
        <div>
            <label>Publisher Address</label>
            <input type="text" name="address" value="{{$publisher->publisher_address}}" />
        </div>
        <div>
            <label>Publisher Phone</label>
            <input type="text" name="phone" value="{{$publisher->publisher_phone}}" />
        </div>
        <div>
            <input type="submit" value="Update" />
        </div>
    </form>
</body>
</html>