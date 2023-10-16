<nav class="navbar navbar-expand-lg p-3" style="background-color:#BEADFA">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Let's Cure</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class=" collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto ">
          <li class="nav-item">
            <a class="nav-link mx-2" aria-current="page" href="/dashboard">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="/medicine">Medicine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-2" href="/logs">Logs</a>
          </li>
          <li class="nav-item">
            <form method="POST" action="{{ route('logout') }}">
                @csrf <!-- Include a CSRF token for security -->
                <button type="submit" class="nav-link btn btn-link mx-2">Logout</button>
            </form>
        </li>

        </ul>
      </div>
    </div>
  </nav>
