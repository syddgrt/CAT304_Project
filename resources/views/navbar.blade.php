<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav" >
            <div class="container">
                <a class="navbar-brand" href="/main">ReportTruzz</a>
            </div>
                <a class="navbar-brand">{{ Auth::user()->name }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="/main">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/googleMaps">Maps</a></li>

                        <form method="POST" action="{{ route('logout') }}">
                         @csrf
                            <button type="submit" class="btn btn-danger">Logout</button>
                        </form>

                    </ul>
                </div>
            </div>
        </nav>
