<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Company</title>
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="stylesheet" href="/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/formInput.css">
</head>
<body>
    <section>
        <h1><i class="fas fa-building"></i>Add Company</h1>
        <form action="{{route('company.store')}}" method="POST">
            @csrf
            <label for="formGroupExampleInput">Company Name</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"><i class="far fa-building"></i></span>
                </div>
                <input type="text" name="c_name" class="form-control" placeholder="Input Company name" required>
            </div>
            <button type="submit">Add Company<i class="fas fa-plus"></i></button>
        </form>
        <a href="/company-list"><i class="fas fa-list-alt"></i>Company List</a>
    </section>
</body>
</html>