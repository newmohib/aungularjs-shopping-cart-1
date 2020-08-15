<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Project</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">Home</a>
          </li>
          
           <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="home.php?page=7">Add Product</a>
                  <a class="dropdown-item" href="home.php?page=8">Manage Product</a>
                  <a class="dropdown-item" href="home.php?page=9">View Products</a>
                </div>
           </li>
           
          <li class="nav-item">
            <a class="nav-link" href="home.php?page=11">Orders</a>
          </li>
                   
          <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                  <a class="dropdown-item" href="home.php?page=4">Add User</a>
                  <a class="dropdown-item" href="home.php?page=5">Manager User</a>
                  <a class="dropdown-item" href="home.php?page=6">View User</a>
                </div>
           </li>
          
          
        </ul>
        <ul class="navbar-nav mt-2 mt-md-0">
         <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
       
      </div>
    </nav>