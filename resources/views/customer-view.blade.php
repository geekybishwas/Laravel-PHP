<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
        <input type="text" name="search" placeholder='Search by name n email' value={{$search}}>
        <button>Search</button>
        <a href="{{url('/customer/view')}}">
            <button type='button'>Reset</button>
        </a>
    </form>
    <a href="{{route('customer.create')}}">
        
        <button>Add</button>
    </a>
    <a href="{{route('customer.trash')}}">
        
        <button>Go to trash</button>
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
                {{-- <td>{{get_formatted_date($customer->dob,'d-M-Y')}}</td> --}}
                <td>{{$customer->dob,'d-M-Y'}}</td>
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
                    {{-- <a href="{{url('/customer/delete')}}/{{$customer->customer_id}}"> --}}
                    <a href="{{route('customer.delete',['id'=>$customer->customer_id])}}">
                        <button>Trash</button>
                    </a>
                    <a href="{{route('customer.edit',['id'=>$customer->customer_id])}}">
                        <button>Edit</button>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>


    </table>
</body>
</html>