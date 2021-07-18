<nav class="navbar navbar-expand-lg navbar-dark fixed-top bg-dark">
    
    <div class="container">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Orders</a>
                </li>
            </ul>
            <form action="/search" class="d-flex">
                <div class="form-group">
                    <input name="query" class="form-control me-2 search-box" type="search" placeholder="Search..." aria-label="Search">
                </div>
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul class="nav navbar-nav navbar-right mr-5">
                <li><a href="#" class="nav-link">cart(0)</a></li>
            </ul>
        </div>
    </div>
</nav>