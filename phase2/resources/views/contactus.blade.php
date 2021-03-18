<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

    <title>UB Market</title>

    <meta name="description" content="UB CSE442 Project">
    <meta name="author" content="Dr. Hertz Fan Club">

    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<body>

<div class="container-fluid" style="margin-top: 150px">
    <nav class="navbar fixed-top">
        <!-- Header -->
        <div class="brand-title">
            UB Market <small>A place for UB community</small>
        </div>
        <a href="#" class="toggle-button">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
        <div class="navbar-links">
            <ul>
                <li>
                    <a href="main.blade.php">Home</a>
                </li>
                <li>
                    <a href="login.blade.php">LOG IN</a>
                </li>
            </ul>
        </div>
        <!--        </div>-->
    </nav>

    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="col-md-6">
            <h3 class="text-center">
                Need Help? Contact Us!
            </h3>
            <br>
            <br>
            <form role="form">
                <div class="form-group">

                    <label for="inputName">
                        Name
                    </label>
                    <input class="form-control" id="inputName">
                </div>
                <div class="form-group">

                    <label for="inputEmail">
                        Email
                    </label>
                    <input class="form-control" id="inputEmail">
                </div>
                <div class="form-group">

                    <label for="inputPhoneNumber">
                        Phone Number (Optional)
                    </label>
                    <input class="form-control" id="inputPhoneNumber">
                </div>
                <h6> Topic:
                </h6>
                <div class="dropdown">
                    <select class="btn btn-outline-primary dropdown-toggle" type="button" data-toggle="dropdown">
                        <option class="dropdown-item" value="Please Select A Topic"> Please Select A Topic</option>
                        <option class="dropdown-item" value="Unable to sign up or log in"> Unable to sign up or log in
                        </option>
                        <option class="dropdown-item" value="Request to delete account"> Request to delete account
                        </option>
                        <option class="dropdown-item" value="Report a bug"> Report a bug</option>
                        <option class="dropdown-item" value="Feedback"> Feedback</option>
                        <option class="dropdown-item" value="Other"> Other</option>
                    </select>
                </div>
                <br>
                <h6> Description:
                </h6>
                <label for="contactDescription"></label><textarea class="form-control" id="contactDescription" rows="10"
                                                                  required></textarea>
                <br>
                <div class="form-group">

                    <label for="inputFile">
                        File input
                    </label>
                    <input type="file" class="form-control-file" id="inputFile">
                    <p class="help-block">
                        Please attach all necessary files.
                    </p>
                </div>
                <button type="submit" class="btn btn-primary" onclick="document.location='landing.html'">
                    Send
                </button>
                <br>
                <br>
            </form>
        </div>
        <div class="col-md-3">
        </div>
    </div>
</div>


<script src={{asset('js/app.css')}}></script>
</body>
</html>