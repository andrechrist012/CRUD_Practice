<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Company</title>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/css/tableData.css">
</head>
<body>
    <section>
        <h1><i class="fas fa-list-alt"></i>Company List</h1>
        <a href="/add/company">Add Company<i class="fas fa-plus"></i></a>
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Company Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($view as $company)
                <tr>
                    <td>{{$loop->iteration}}</th>
                    <td>{{$company->name}}</td>
                    <td>
						<div>
						<form action="{{route('company.edit', $company->id)}}" method="POST">
                            @csrf
                            @method('GET')
							<button type="submit">Edit</button>
						</form>
						<form action="{{route('company.delete', $company->id)}}" method="POST">
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
    <a href="/employee-list"><i class="fas fa-list-alt"></i>Employee Biodata List</a>
</body>
</html>