<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Employee</title>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/tableData.css">
</head>
<body>
    <section>
        <h1><i class="far fa-address-card"></i>Employee Biodata</h1>
        <a href="/add/employee">Add Employee<i class="fas fa-user-plus"></i></a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Employee Name</th>
                    <th>Address</th>
                    <th>Company</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($viewList as $item)
                <tr>
                    <td>{{$loop->iteration}}</th>
                    <td>{{$item->employee_name}}</td>
                    <td>{{$item->employee_address}}</td>
                    <td>{{$item->company->name}}</td>
                    <td>{{$item->employee_position}}</td>
                    <td>
						<div>
						<form action="{{route('employee.edit', $item->id)}}" method="POST">
                            @csrf
                            @method('GET')
							<button type="submit">Edit</button>
						</form>
						<form action="{{route('employee.delete', $item->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="remove">Delete</button>
						</form>
						</div>
					</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </section>
    <a href="/company-list"><i class="fas fa-list-alt"></i>Company List</a>
</body>
</html>