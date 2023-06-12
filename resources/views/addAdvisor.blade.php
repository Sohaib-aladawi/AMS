<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png" />
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css" rel="stylesheet" />

    <style>
        #features {
            padding: 7% 15%;
            background-color: #062757;
            position: relative;
            z-index: 1;
        }

    </style>
    <title>AMS</title>
</head>

<body>
    <!-- navbar  -->
    <section id="navbar">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <!-- Container wrapper -->
            <div class="container">
                <!-- Navbar brand -->
                <a class="navbar-brand me-2" href="./homePage.html">
                    <img src="images/profile.jpg" height="60" alt="Photo"
                        loading="lazy" style="margin-top: -1px" />
                </a>

                <!-- Toggle button -->
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                    data-mdb-target="#navbarButtonsExample" aria-controls="navbarButtonsExample" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarButtonsExample">
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <br />
                            <p class="nav-link" href="#">{{ auth()->user()->advisor_name }}</p>
                        </li>
                    </ul>
                    <!-- Left links -->

                    <div class="d-flex align-items-center">
                        <a href="/logout"><button type="button" class="btn btn-primary me-3">
                                Logout
                            </button></a>
                    </div>
                </div>
                <!-- Collapsible wrapper -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </section>

    <!--  -->
    <section id="features">
        <form action="/addAdvisor/save" method="post" id="formEdit">
            @csrf
            <h2 class="text-center text-warning">ADD a new advisor</h2><br>
            <div class="d-flex justify-content-center">
                <div class="form-outline w-25">
                    <input type="text" id="input2" name="advisor_code" class="form-control " style="color: rgb(248,141,42);" />
                    <label class="form-label text-white "  id="adviserCode">Adviser Code </label>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div class="form-outline w-25">
                    <input type="text" id="adviserName" name="advisor_name" class="form-control" style="color: rgb(248,141,42);" />
                    <label class="form-label text-white" id="adviserName">Adviser Name </label>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div class="form-outline w-25">
                    <input type="email" id="email" name="email" class="form-control" style="color: rgb(248,141,42);" />
                    <label class="form-label text-white"  id="email">Email </label>
                </div>
            </div>
            <br>
            <div class="d-flex justify-content-center">
                <div class="form-outline w-25">
                    <select class="form-select" aria-label="Default select example" name="department_id"
                        style="background-color: transparent; color: rgb(248,141,42);">
                        <option value="x" selected>Department</option>
                        <option value="IT">information Technology</option>
                        <option value="2">Business</option>
                        <option value="3">Engineer</option>
                    </select>
                </div>
            </div>
            <br>
            <!-- Button Submit -->
            <div class="text-center">
                <button type="submit" class="btn btn-warning" name="">Add</button>
                <button type="reset" class="btn btn-white" name="">Clean</button>
            </div><br>
            <div class="text-center">
                <a href="/admainIndex"><button type="button" class="btn btn-white align-right"
                        type="button">Back</button></a>
            </div>
        </form>
    </section>

    <section id="copyright">
        <a href="">
            <div class="h-100 d-flex align-items-center justify-content-center" style="padding-top: 20px">
                <img src="images/logo.png" class="img_system" alt="" width="50rem" />
                <h5>Advisee Management System</h5>
            </div>
        </a>
    </section>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"></script>
</body>

</html>