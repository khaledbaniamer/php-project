<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/profile.css">
    <title>Document</title>
</head>
<body>

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">

                <div class="mt-3 text-center">
                <a class="btn btn-primary profile-button" href="profile.php">Profile</a>
                </div>

                <div class="mt-3 text-center">
                    <a class="btn btn-primary profile-button" href="history.php">History</a>
                </div>

            <span> </span></div>
        </div>

        
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12">
                        <label>Name</label>
                        <input type="text" class="form-control" placeholder="Name" value="">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label>Email</label>
                        <input type="text" class="form-control" placeholder="Email" value="">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label>Password</label>
                        <input type="text" class="form-control" placeholder="Password" value="">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label>Address</label>
                        <input type="text" class="form-control" placeholder="Adress" value="">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col-md-12">
                        <label>Phone</label>
                        <input type="text" class="form-control" placeholder="Phone" value="">
                    </div>
                </div>

                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>

        </div>
    </div>
</div>
</div>
</div>
 
</body>
</html>


