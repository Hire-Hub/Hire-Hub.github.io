<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>SignUp</title>
  </head>
  <body>
    <h1 class="text-center my-3" >Sign Up Page</h1>

    <div class="container">
        <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Employer</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Student</button>
            </div>
        </nav>
        <div class="tab-content">
            <!-- employer creation -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <form class="my-3" action="signup.php" method="post" >
                 <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="enter name">
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Company Name</label>
                    <input type="text" class="form-control" name="companyname" aria-describedby="emailHelp" placeholder="enter company name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="mobile" placeholder="enter phone number">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="enter password">
                </div>

                <button type="submit" class="btn btn-primary">Create Account</button>
                <p class="my-2" >Already have an account? <a href="login.php">Click Here</a></p>
            </form>
            </div>

            <!-- student creation -->
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            <form class="my-3" action="signup.php" method="post" >
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="enter name">
                </div>
                <div class="mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="number" class="form-control" name="mobile" placeholder="enter phone number">
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="enter password">
                </div>

                <button type="submit" class="btn btn-primary">Create Account</button>
                <p class="my-2" >Already have an account? <a href="login.php">Click Here</a></p>

            </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>