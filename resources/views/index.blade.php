<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feedback</title>
    <style>
        table,tr,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        svg{
            width:1 0px;
            height: 10px;
        }
    </style>
</head>
<body>
    <h1>Inventory</h1>
    @if (session()->has('success'))
    <h1>{{session('success')}}</h1>
    @endif
    {{-- <button type="button" onclick="location.href='/form'" style="color: white; background-color:blue">go to survey form</button> --}}
    <button type="button" onclick="location.href='/form'" style="color: white; background-color:blue">Add Product</button>
    <table style="width:100%; text-align: center">
        <tr>
            {{-- <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Feedback</th>
            <th>Rate</th> --}}

            <th>Product Name</th>
            <th>Quantity</th>
            <th>Created at</th>

            <th>Action</th>
        </tr>
        @foreach ($feedback as $item)
            <tr>
                {{-- <td>{{$item['name']}}</td>
                <td>{{$item['email']}}</td>
                <td>{{$item['age']}}</td>
                <td>{{$item['feedback']}}</td>
                <td>{{$item['rate']}}</td> --}}

                <td>{{$item['p_name']}}</td>
                <td>{{$item['quantity']}}</td>
                <td>{{$item['created_at']}}</td>

                <td>
                    <a href="{{route('edit',$item['id'])}}">Edit</a>

                    <form action="{{route('delete',$item['id'])}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    <div>
        {{$feedback->links()}}
    </div>
</body>
</html>
