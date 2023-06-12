<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/logo.png">
    
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.css"
      rel="stylesheet"
    />
    <style>
        .imageSystem {
      width: 20%;
      height: 20%;
      margin-right: 8%;
    }
  </style>
    <title>AMS</title>
  </head>
  <body>
    <section class="vh-100" style="background-color: #062757">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col col-xl-10">
            <div class="card" style="border-radius: 1rem">
              <div class="row g-0">
                <div class="col-md-6 col-lg-5 d-none d-md-block">
                  <img
                    src="images/utas-nizwa.jpg"
                    alt="login form"
                    class="img-fluid"
                    style="border-radius: 1rem 0 0 1rem"
                  />
                </div>
                <div class="col-md-6 col-lg-7 d-flex align-items-center">
                  <div class="card-body p-4 p-lg-5 text-black">
                    <form method="POST" action="/authenticate">
                      @csrf
                      <div class="d-flex align-items-center mb-3 pb-1">
                        <img src="images/logo.png" class="rounded float-start imageSystem" alt="...">
                        <span class="h1 fw-bold mb-0">Advisee Management System</span>
                      </div>

                      <h5
                        class="fw-normal mb-3 pb-3"
                        style="letter-spacing: 1px"
                      >
                        Sign into System
                      </h5>

                      <div class="form-outline mb-4">
                        <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" value="{{ old('email') }}" required />
                        <label class="form-label" for="form2Example17"
                          >Email</label
                          >
                         
                      </div> @if ($errors->has('email'))
                          <span style="color: red"> {{ $errors->first('email') }}</span>
                         @endif

                      <div class="form-outline mb-4">
                        <input
                          type="password"
                          id="form2Example27"
                          class="form-control form-control-lg"
                          name="password"
                          required
                        />
                        <label class="form-label" for="form2Example27" 
                          >Password</label
                        >
                      </div>
                        @if ($errors->has('password'))
                            <span style="color: red">{{ $errors->first('password') }}</span>
                        @endif

                      <div class="pt-1 mb-4">
                        <a href="/temps"><button
                          class="btn btn-primary btn-lg btn-block"
                          type="submit"
                        >
                          Login
                        </button></a>
                      </div>

                      <p class="small text-muted" href="#!">Building by Group - 7</p>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->
    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.2.0/mdb.min.js"
    ></script>
  </body>
</html>
