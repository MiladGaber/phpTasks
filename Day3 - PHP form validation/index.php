

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Day 3 PHP form validation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container">
        <h2>Register</h2>
        <form method="post" action="welcome.php"
            enctype="multipart/form-data">


            <div class="form-group">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" aria-describedby=""
                    placeholder="Enter Name">
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="text" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp" placeholder="Enter email">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" 
                placeholder="Enter Password">
            </div>
            <div class="form-group mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Your Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" name="address" rows="2"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="male" checked>
                <label class="form-check-label" for="male">
                    Male
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="female" >
                <label class="form-check-label" for="female">
                    Female
                </label>
            </div>
            <div class="my-3">
                <label for="linkedln" class="form-label">linkedln</label>
                <input class="form-control form-control-lg" id="linkedln" name="linkedln" type="text" placeholder="Linkedln Account link" aria-label=".form-control-lg example">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>