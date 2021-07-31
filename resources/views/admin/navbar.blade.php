<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="{{ route('admin.showUserList') }}">All-Users</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('admin.show') }}">Admin-top<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">Admin-Main</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/">Main</a>
      </li>
  
    </ul>
    <form class="form-inline my-2 my-lg-0" action="{{ route('admin.search') }}">
      <input class="form-control mr-sm-2" type="text" name="query" placeholder="Search" aria-label="Search">
    </form>
  </div>
</nav>