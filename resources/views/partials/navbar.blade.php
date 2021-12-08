<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Pet Shop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home") ? 'active' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Login") ? 'active' : '' }}" href="/login">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Product") ? 'active' : '' }}" href="/barang">Product</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Article") ? 'active' : '' }}" href="/article">Article</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/hubungi">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
