<header>
      <nav style="width:100%;position:fixed;" class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a style="font-size:30px;font-weight:bolder;" class="navbar-item logo" href="home">
            <span style="color:green;margin-right:5px;">Business</span> Service
          </a>
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a style="font-size:16px;" href="home" class="navbar-item">
              Home
            </a>

            <a style="font-size:16px;" class="navbar-item">
              Useful Terms
            </a>

            <div class="navbar-item has-dropdown is-hoverable">
              <a style="font-size:16px;" class="navbar-link">
                Business
              </a>

              <div class="navbar-dropdown">
                <a style="font-size:14px;"  href="/admin/businesses/create" class="navbar-item">
                  Create New Business
                </a>
                <a style="font-size:14px;" href="/admin/businesses" class="navbar-item">
                  Business Lists
                </a>
                
                <hr class="navbar-divider">
                <a style="font-size:14px;" class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
            <div class="navbar-item has-dropdown is-hoverable">
              <a style="font-size:16px;" class="navbar-link">
                Categories
              </a>

              <div class="navbar-dropdown">
                <a style="font-size:14px;" href="/admin/categories/create" class="navbar-item">
                  Create New Category
                </a>
                <a style="font-size:14px;" href="/admin/categories" class="navbar-item">
                  Category Lists
                </a>
                
                <hr class="navbar-divider">
                <a style="font-size:14px;" class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>

          <div class="navbar-end">
          <div class="navbar-item has-dropdown is-hoverable">
              <a style="font-size:16px;" class="navbar-link">
              <i style="margin-right:5px;" class="fa fa-user-circle"></i> <?php echo $_SESSION['firstname']; ?>
              </a>

              <div class="navbar-dropdown">
                <a class="navbar-item">
                <a style="font-size:14px;" class="dropdown-item" href="/admin/logout">
                    Logout
                </a>
                </a>
                
                <hr class="navbar-divider">
                <a style="font-size:14px;" class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>