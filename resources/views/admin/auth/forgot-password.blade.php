<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Password Recovery </title>
    <link href="css/styles.css" rel="stylesheet"/>
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Password
                                    Recovery</h3></div>
                            <div class="card-body">
                                <div class="small mb-3 text-muted">Enter your email address and we will send you a link
                                    to reset your password.
                                </div>
                                @if(session()->has('success'))
                                    <b style="color: green">{{session()->get('success')}}</b>
                                @endif
                                <form action="{{route('admin.forgot-password.send')}}"  method="post" >
                                    @csrf
                                    <div class="form-floating mb-3">

                                        <input class="form-control" id="inputEmail" type="email"
                                               placeholder="name@example.com" name="email"/>
                                        <label for="inputEmail">Email address</label>
                                        @error('email')
                                            <code>{{$message}}</code>
                                        @enderror
                                    </div>
                                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <a class="small" href="{{route('admin.login')}}">Return to login</a>
                                        <button  type="submit" class="btn btn-primary">Send Link</button>

                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>