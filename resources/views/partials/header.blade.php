<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('blog.index') }}">Laravel Guide</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <!-- <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a> -->
      <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
      <a class="nav-link" href="{{ route('other.about') }}">About</a>
      <!-- <a class="nav-link disabled">Disabled</a> -->
    </div>
  </div>
</nav>