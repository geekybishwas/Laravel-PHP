<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{route('customer.create')}}">
        
        <button>Add</button>
    </a>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Addresss</th>
                <th>DOB</th>
                <th>City</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->gender}}</td>
                <td>{{$customer->address}}</td>
                <td>{{$customer->dob}}</td>
                <td>{{$customer->city}}</td>
                <td>
                    @if($customer->status==1)
                        <a href="">
                            Active
                        </a>
                    @else
                        <a href="">
                            Inactive
                        </a>
                    @endif
                </td>
                <td>
                    <button>Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>


    </table>
</body>
</html>