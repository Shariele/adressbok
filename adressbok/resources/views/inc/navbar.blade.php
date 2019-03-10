<ul class="nav nav-tabs">
  <li class="nav-item {{Request::is('/') ? 'active' : ''}}">
    <a class="nav-link" href="/">Home</a>
  </li>
  <li class="nav-item {{Request::is('addperson') ? 'active' : ''}}">
    <a class="nav-link" href="/addperson">Add Person</a>
  </li>
</ul>