<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Local CSS -->
  <link rel="stylesheet" href="/css/style.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
    integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous" />
  <title>Admin Panel</title>
</head>
<body>
  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-sm navbar-dark background-dark p-0">
    <div class="container">
      <a href="index.html" class="navbar-brand">Admin Panel</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span
          class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="index.html" class="nav-link">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.html" class="nav-link">Posts</a>
          </li>
          <li class="nav-item px-2">
            <a href="categories.html" class="nav-link">Categories</a>
          </li>
          <li class="nav-item px-2">
            <a href="users.html" class="nav-link">Users</a>
          </li>
        </ul>

        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown mr-3">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
              <i class="fas fa-user"></i> Welcome User
            </a>
            <div class="dropdown-menu">
              <a href="profile.html" class="dropdown-item">
                <i class="fas fa-user-circle"></i> Profile
              </a>
              <a href="settings.html" class="dropdown-item">
                <i class="fas fa-cog"></i> Settings
              </a>
            </div>
          </li>
          <li class="nav-item">
            <a href="login.html" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- HEADER -->
  <header id="main-header" class="py-2 background-primary">
    <div class="container">
      <div class="row">
        <div class="col align-self-center" id="header-div">
          <h3><i class="fas fa-cog"></i> Settings</h3>
        </div>
      </div>
    </div>
  </header>
  <!-- ACTIONS -->
  <section id="actions" class="py-4">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <a href="index.html" class="btn background-light btn-block">
            <i class="fas fa-arrow-left"></i> Back To Dashboard
          </a>
        </div>
        <div class="col-md-3">
          <a href="index.html" class="btn background-accent btn-block">
            <i class="fas fa-check"></i> Save Changes
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- SETTINGS -->
  <section id="settings">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header text-center">
              <h4>Edit Settings</h4>
            </div>
            <div class="card-body">
              <form>
                <fieldset class="form-group">
                  <legend>Allow User Registration</legend>
                  <div class="form-check mb-2 px-4">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="Yes" checked> Yes
                    </label>
                  </div>
                  <div class="form-check px-4">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="No"> No
                    </label>
                  </div>
                </fieldset>

                <fieldset class="form-group">
                  <legend>Homepage Format</legend>
                  <div class="form-check mb-2 px-4">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="posts" checked> Blog Page
                    </label>
                  </div>
                  <div class="form-check px-4">
                    <label class="form-check-label">
                      <input type="radio" class="form-check-input" value="page"> Homepage
                    </label>
                  </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  <footer id="main-footer" class="background-dark mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy; <span id="year"></span>
            Admin Panel
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- MODALS -->
  <!-- ADD POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Add Post</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <select class="form-control">
                <option>Web Development</option>
                <option>Tech Gadgets</option>
                <option>Business</option>
                <option>Health & Wellness</option>
              </select>
            </div>
            <div class="form-group">
              <label for="image">Upload Image</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input" id="image">
                <label for="image" class="custom-file-label">Choose File</label>
                <small class="form-text text-muted">Max Size 3Mb</small>
              </div>
              <div class="form-group">
                <label for="body">Body</label>
                <textarea name="editor1" class="form-control"></textarea>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-primary" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ADD CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Category</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="title">Title</label>
              <input type="text" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>
  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- WYSWYG Editor -->
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    // Modal Editor
    CKEDITOR.replace('editor1');
  </script>
  <script src="./js/app.js"></script>
</body>

</html>