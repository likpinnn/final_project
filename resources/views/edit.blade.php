<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Survey Form</title>
</head>
<body>
    <h1>Edit Inventory Form</h1>
    <form action="{{route('update',$member->id)}}" method="post">
        @if (session()->has('error'))
            <p>{{session('error')}}</p>
        @endif
        @csrf
        @method('PUT')
        {{-- @method('PUT')
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name" placeholder="Enter Your Name" value="{{$member->name}}"><br>
        @error('name')
            <p style="color: red">*{{$message}}</p>
        @enderror

        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email" placeholder="Enter Your Email" value="{{$member->email}}"><br>
        @error('email')
            <p style="color: red">*{{$message}}</p>
        @enderror

        <label for="age">Age:</label><br>
        <input type="number" min="0" name="age" id="age" placeholder="Enter Your Age" value="{{$member->age}}"><br>
        @error('age')
            <p style="color: red">*{{$message}}</p>
        @enderror

        <label for="feedback">Feedback:</label><br>
        <textarea name="feedback" id="feedback" cols="30" rows="10" placeholder="Enter Your Feedback">{{$member->feedback}}</textarea><br>
        @error('feedback')
            <p style="color: red">*{{$message}}</p>
        @enderror

        <label for="rate">Rate your experience:</label><br>
        <select name="rate" id="rate" style="width:11%">
            <option value="Exellent">Exellent</option>
        </select>
        @error('rate')
            <p style="color: red">*{{$message}}</p>
        @enderror --}}

        <label for="name">Product Name:</label><br>
        <input type="text" name="p_name" id="name" placeholder="Enter Your Product Name" value="{{$member->p_name}}"><br>
        @error('p_name')
            <p style="color: red">*{{$message}}</p>
        @enderror

        <label for="age">Quantity:</label><br>
        <input type="number" min="0" name="quantity" id="age" placeholder="Enter Your Quantity" value="{{$member->quantity}}"><br>
        @error('quantity')
            <p style="color: red">*{{$message}}</p>
        @enderror

        <br><br>

        <input type="submit" value="Submit" style="width:11%"><br>
        <button type="button" onclick="location.href='{{route('list')}}'"  style="width:11%">Back</button>
    </form>
</body>
</html>

