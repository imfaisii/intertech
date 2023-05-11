<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>InterTeach - Login Page</title>
    <link rel="stylesheet" href="css/app.css" >
    <!-- Favicons -->
    <link rel="icon" href="images/logo/favicon.png" sizes="32x32" type="image/png">
</head>
<body class="login-page">
    <main class="main-wrapper">
        <div class="main-bg left-bg h-full w-full fixed top-0 left-0 mix-blend-color-dodge">
            <img src="images/background/login-bg.png" class="w-full h-full" alt="">
        </div>
        <div class="body-wrapper relative grow flex items-center justify-center">
            <div class="max-w-lg w-full">
                <div class="card w-full bg-white/20 backdrop-blur-md border border-white/60 rounded-xl p-6 md:p-8">
                    <div class="text-center">
                        <a href="javascript:void(0);" class="inline-block logo-box mx-auto">
                            <img src="images/logo/logo.png" class="max-w-full h-16" alt="">
                        </a>
                    </div>
                    <form action="{{route('flogin')}}" method="POST" class="mt-10 space-y-6">
                        @csrf
                        <div class="form-group">
                            <label for="email" class="input-label">Email</label>
                            <input type="email" name="email" id="email" class="theme-input" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <label for="password" class="input-label">Password</label>
                            <input type="password" name="password" id="password" class="theme-input" placeholder="Enter Password">
                        </div>
                        <div class="form-group">
                            <div class="text-left">
                                <button class="theme-btn" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js" type="text/javascript"></script>
<script src="js/app.js" type="text/javascript"></script>
</html>
