<?php require 'partials/navbar.php' ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <style>
        .contact {
            width: 630px;
            height: 50px;
            background-color: rgb(54, 197, 233);
            border: black solid;
            margin: auto;
            color: #0f180e;
            padding: 10px 0px 40px 230px;
            text-align: left;
            border-radius: 15px 15px 0px 0px;
        }

        .main {
            background-color: rgb(5, 5, 34);
            width: 630px;
            margin: auto;
            border: black solid;
        }

        form {
            padding: 10px;

        }

        .firstname {
            position: relative;
            left: 149px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .lastname {
            position: relative;
            left: 149px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .screenname {
            position: relative;
            left: 129px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .DOB {
            position: relative;
            left: 134px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .gender {
            position: relative;
            left: 168px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .country {
            position: relative;
            left: 172px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .E-mail {
            position: relative;
            left: 183px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .Mobile {
            position: relative;
            left: 153px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .password {
            position: relative;
            left: 160px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .confirmpassword {
            position: relative;
            left: 100px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .checkbox {
            position: relative;
            left: 200px;
            line-height: 40px;
            border-radius: 6px;
            padding: 0px 22px;
            font-size: 16px;
            color: whitesmoke;
        }

        .submit {
            position: relative;
            line-height: 40px;
            font-size: 16px;
            text-align: right;
            background-color: rgb(54, 197, 233);
            border: 15px 0px 0px 0px;
            border: black solid;
            margin: auto;
        }

        #padding {
            left: 90px;
        }

        .container {
            margin: 10px;
        }

        .every {
            margin: 5px;
        }
    </style>
  </head>
  <body>
  <div class="container">
        <div class="contact">
            <h2><b>Contact Us</b></h2>
        </div>
        <div class="main">
            <form action="#" method="get">

                <div class="firstname">
                    <label for="First Name">First Name </label>
                    <input type="text" class="every" placeholder="First Name" required>
                </div>

                <div class="lastname">
                    <label for="Last Name">Last Name </label>
                    <input type="text" id="Last Name" class="every" placeholder="Last name" required>
                </div>

                <div class="screenname">
                    <label for="Screen Name">Screen Name </label>
                    <input type="text" id="Screen Name" class="every" placeholder="Screen Name" required>
                </div>

                <div class="DOB">
                    <label for="Date Of Birth">Date Of Birth</label>
                    <input type="date" id="Dob" class="every" placeholder="Date Of Birth">
                </div>

                <div class="gender">
                    <label for="Gender">Gender</label>
                    <input type="radio" id="male" name="gender" value="male" checked>
                    <label for="male">MALE</label>
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">FEMALE</label>
                </div>

                <div class="country">
                    <label for="Country">Country </label>
                    <select name="Country">
                        <option>Country</option>
                        <option value="India">India</option>
                        <option value="America">America</option>
                        <option value="Russia">Russia</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                    </select>
                </div>

                <div class="E-mail">
                    <label for="E-mail"> E-mail</label>
                    <input type="text" id="E-mail" class="every" placeholder="E-Mail" required>
                </div>

                <div class="Mobile">
                    <label for="Mobile No.">Mobile No. </label>
                    <input type="text" id="Mobile No." class="every" placeholder="Mobile" required>
                </div>

                <div class="password">
                    <label for="Password">Password </label>
                    <input type="password" id="Password" class="every" placeholder="Password" required>
                </div>

                <div class="confirmpassword">
                    <label for="Confirm Password"> Confirm Password</label>
                    <input type="password" id="Confirm Password" class="every" placeholder="Confirm Password" required>
                </div>

                <div class="checkbox">
                    <input type="checkbox" name="I agree to the term of use" id="I agree to the term of use">
                    <label for="I agree to the term of use">I agree to the term of use</label>
                </div>
            </form>
            <div class="submit">
                <input type="submit" value="Submit" style="background-color:green">
                <input type="submit" value="Cancel" style="background-color:red">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
<?php require 'partials/footer.php' ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    
</head>
<body>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
        crossorigin="anonymous"></script>
</body>
</html>
