<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD OOps</title>

  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

  <!-- DataTables BS_4 - CSS -->
  <link href="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.css" rel="stylesheet" />
</head>

<body>

  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <!-- Brand -->
    <a class="navbar-brand" href="#"> <i class="fab fa-wolf-pack-battalion"></i>&nbsp;Navbar</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="text-center text-danger font-weight-normal my-3">CRUD using OOps</h4>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <h4 class="mt-2 text-primary">All users in database</h4>
      </div>
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary m-1 float-right" data-toggle="modal" data-target="#addUserModel"><i class="fas fa-user-plus fa-lg"></i>&nbsp;&nbsp;
          Add New User</button>
        <a href="#" class="btn btn-success m-1 float-right"><i class="fas fa-lg fa-table"></i> Export To Excel</a>
      </div>
    </div>
    <hr class="my-1">

    <div class="row">
      <div class="col-lg-12 ">
        <div class="table-responsive p-1" id="showUser">
          <table class="table table-striped table-sm table-bordered">
              <thead class="text-center">
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </thead>
              <tbody>
                <?php
                  for ($i=0; $i < 100 ; $i++) { 
                    ?>
                    <tr class="text-center text-secondary">
                      <td><?php echo $i; ?></td>
                      <td>Yagnik <?php echo $i; ?></td>
                      <td>Padaliya <?php echo $i; ?></td>
                      <td>yagnik<?php echo $i; ?>@gmail.com</td>
                      <td>77945612<?php echo $i; ?></td>
                      <td>
                        <a href="#" title="View Details" class="text-success"><i class="fas fa-info-circle fa-lg"></i></a>&nbsp;&nbsp;
                        <a href="#" title="Edit Details" class="text-primary"><i class="fas fa-edit fa-lg"></i></a>&nbsp;&nbsp;
                        <a href="#" title="View Details" class="text-danger"><i class="fas fa-trash fa-lg"></i></a>&nbsp;&nbsp;
                      </td>
                    </tr>
                    <?php
                  }
                ?>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

  <!-- Add new User Modal -->
  <div class="modal fade" id="addUserModel" >
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addUserModelLongTitle">Add New User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body px-4">
          <form action="" method="post" id="form-data">
            <div class="form-group">
              <input type="text" name="fname" class="form-control" placeholder="First Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="lname" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="tel" name="phone" class="form-control" placeholder="Phone" required>
            </div>
            <div class="form-group">
              <input type="submit" name="insert" id="insert" class="btn btn-primary btn-block" value="Add User">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <!-- jQuery library -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

  <!-- DataTables BS_4 -->
  <script src="https://cdn.datatables.net/v/bs4/dt-1.13.4/datatables.min.js"></script>

  <!-- https://sweetalert2.github.io/#download:~:text=Or%20grab%20from%20jsdelivr%20CDN -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    $(document).ready(function(){
      $('table').DataTable();
    })
  </script>
</body>

</html>