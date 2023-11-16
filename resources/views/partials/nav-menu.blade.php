<div class="container">
    <a class="navbar-brand" href="index.html">
    <img width="60px" src="img/printlogo.png" alt="">
    </a>
    <button class="navbar-toggler" style="background-color:#F7913E;" type="button" data-bs-toggle="collapse"
    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
        <li class="nav-item px-3">
        <a class="nav-link active text-dark fw-bold" aria-current="page" href="/">Home</a>
        </li>

        <li class="nav-item dropdown px-3">
        <a class="nav-link dropdown-toggle text-dark fw-bold" href="#products" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item text-dark" href="/business-card">Business Card</a></li>
            <li><a class="dropdown-item text-dark" href="/thankyou-card">Thank You Card</a></li>
            <li><a class="dropdown-item text-dark" href="/notebook">Notebook</a></li>
            <li><a class="dropdown-item text-dark" href="planner.html">Planner</a></li>
            <li><a class="dropdown-item text-dark" href="devotional-journal.html">Devotional Journal</a></li>
            <li><a class="dropdown-item text-dark" href="magnetic-bookmark.html">Magnetic Bookmark</a></li>
            <li><a class="dropdown-item text-dark" href="calendar.html">Calendar</a></li>
            <li><a class="dropdown-item text-dark" href="mug.html">Mug</a></li>
            <li><a class="dropdown-item text-dark" href="photoprint.html">Photoprint</a></li>
            <li><a class="dropdown-item text-dark" href="hangtag.html">Hangtag</a></li>
            <li><a class="dropdown-item text-dark" href="refmagnet.html">Fridge/Ref Magnet</a></li>
            <li><a class="dropdown-item text-dark" href="chipbag.html">Chipbag</a></li>
            <li><a class="dropdown-item text-dark" href="keychain.html">Keychain</a></li>
            <li><a class="dropdown-item text-dark" href="kids-books.html">Kid's Books</a></li>
        </ul>
        </li>

        <!-- <li class="nav-item px-3">
        <a class="nav-link text-dark fw-bold" data-bs-toggle="modal" data-bs-target="#howtoordermodal" aria-current="page" href="">How to order</a>
        </li> -->
        <li class="nav-item px-3">
        <a class="nav-link text-dark fw-bold" aria-current="page" href="/faq">FAQs</a>
        </li>
        <li class="nav-item px-3">
        <a class="nav-link text-dark fw-bold" aria-current="page" href="getaquote.html">Get a Quote</a>
        </li>
        <li class="nav-item px-3">
        <a class="nav-link text-dark fw-bold" aria-current="page" href="contact.html">Contact Us</a>
        </li>
        <li class="nav-item px-3">
        <a class="nav-link text-dark fw-bold" aria-current="page" href="paymentmethod.html">Payment Method</a>
        </li>
    </ul>
    <!-- <a data-bs-toggle="modal" data-bs-target="#logInform"  class="text-decoration-none aLogin mx-2">Login</a>|
    <a data-bs-toggle="modal" data-bs-target="#signUp"  class="text-decoration-none aLogin mx-2">Signup</a> -->
    @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-decoration-none aLogin mx-2">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-decoration-none aLogin mx-2">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="text-decoration-none aLogin mx-2">Register</a>
                @endif
            @endauth
        </div>
    @endif
    </div>
    

</div>