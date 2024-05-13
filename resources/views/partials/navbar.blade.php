

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
  </head>
  <body>
    <div class="navbar" id="navbar">
      <div class="navbar-header">
        <a class="logo" href="#">
          <img src="../images/logo.png" alt="Logo">
        </a>
      </div>
      <div class="search-bar">
        <input type="text" name="search-bar" placeholder="&#xf002; Rechercher...">
        <button type="submit"><i class="fas fa-search"></i></button>
      </div>
      <div class="nav-list">
        <ul>
          <li><span class="status">En ligne</span></li>
          <li><a href="{{ asset('#') }}"><i class="fas fa-bell"></i></a>
          </li>
          <li><a href="{{ asset('#') }}"><i class="fas fa-user"></i></a></li>
        </ul>
      </div>
    </div>
  </body>
  </html>