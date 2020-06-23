<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee</title>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/formInput.css">
</head>
<body>
    <section>
        <h1><i class="fas fa-user-tie"></i></i>Add New Employee Biodata</h1>
        <form action="{{route('employee.store', $employee->id)}}" method="POST">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput">Employee Name</label>
                    <input type="text" name="e_name" class="form-control" id="formGroupExampleInput" value="{{$employee->employee_name}}" required>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput2">Employee Address</label>
                    <input type="text" name="e_address" class="form-control" id="formGroupExampleInput2" value="{{$employee->employee_address}}" required>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="formGroupExampleInput2">Employee Company</label>
                    <select name="c_id" class="form-control" id="" value="{{}}">
                    @foreach($company as $comp)
                        <option value="{{$comp->id}}">{{$comp->company_name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col">
                    <label for="formGroupExampleInput2">Employee Position</label>
                    <input type="text" name="e_position" class="form-control" id="formGroupExampleInput4" value="{{$employee->employee_position}}" required>
                </div>
            </div>
            <button type="submit">Add Employee<i class="fas fa-user-plus"></i></button>
        </form>
        <a href="/employee-list"><i class="fas fa-list-alt"></i>Employee Biodata List</a>
    </section>
</body>
</html>