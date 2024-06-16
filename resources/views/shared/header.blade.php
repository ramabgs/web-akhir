<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #3AA6B9">
  <div class="container">
    <a class="navbar-brand" href="#">Maa Electro</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end gap-4" id="navbarSupportedContent">
      <ul class="navbar-nav gap-4">
      <a class="nav-link" aria-current="page" href="{{ route('posts.index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts/shop">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/posts/about">Ulasan</a>
        </li>
      </ul>
      <div class="d-flex gap-4 align-items-center">
      <a class="btn btn danger" href="{{ route('posts.create') }}">Keranjang</a>
        
</div>
    </div>
  </div>
</nav>