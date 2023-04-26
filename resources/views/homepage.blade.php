<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<li class="nav-item">
                            <a href="{{ route('setLanguage','lt') }}" class="nav-link">LT</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('setLanguage','en') }}" class="nav-link">EN</a>
                        </li>

    <nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #0dcaf0;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    
                  
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __("Login") }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{__("Register")}}</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
</body>
</html>