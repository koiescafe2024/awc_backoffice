<?php
include 'layout/header.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">

      <div class="row mb-2">
        <div class="col-sm-6">

          <div class="col-sm-3"></div>
          <h1>Manage Members</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Manage Members</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->


  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
       
          <div class="col-12 col-sm-6">
            <div class="card card-primary card-tabs">
              <div class="card-header p-0 pt-1">
                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                      href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                      aria-selected="true">Basic Settings</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                      href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile"
                      aria-selected="false">Product</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill"
                      href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages"
                      aria-selected="false">Currency</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill"
                      href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings"
                      aria-selected="false">PT Setting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-product-tab" data-toggle="pill"
                      href="#custom-tabs-one-product" role="tab" aria-controls="custom-tabs-one-product"
                      aria-selected="false">Product Setting</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="custom-tabs-one-bet-tab" data-toggle="pill" href="#custom-tabs-one-bet"
                      role="tab" aria-controls="custom-tabs-one-bet" aria-selected="false">Bet Limit</a>
                  </li>
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content" id="custom-tabs-one-tabContent">
                  <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                    aria-labelledby="custom-tabs-one-home-tab">
                    <div>


                      <form method="post" action="manage-members.php">
                        <div class="card-body">
                          <label style="color:#007bff;font-size:16px">Basic Details</label>
                          <div class="form-group">
                            <label>Account Type</label>
                            <input type="text" class="form-control" placeholder="Account Type">
                          </div>
                          <div class="form-group">
                            <label>User ID</label>
                            <input type="text" class="form-control" placeholder="User ID">
                          </div>

                          <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                          </div>

                          <div class="form-group">
                            <label>Prefix</label>
                            <input type="number" class="form-control" placeholder="Enter Prefix">
                          </div>

                          <div class="form-group">
                            <label>Client API Secret</label>
                            <input type="text" class="form-control" placeholder="Client API Secret">
                          </div>
                          <div class="form-group">
                            <label>Callback URL</label>
                            <input type="text" class="form-control" placeholder="Callback URL">
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                          </div>


                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                      </form>

                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                      aria-labelledby="custom-tabs-one-profile-tab">
                      <form method="post" action="manage-members.php">
                        <div class="card-body">
                          <label style="color:#007bff;font-size:16px">Product</label>
                          <div class="form-group">
                            <label>Account Type</label>
                            <input type="text" class="form-control" placeholder="Account Type">
                          </div>
                          <div class="form-group">
                            <label>User ID</label>
                            <input type="text" class="form-control" placeholder="User ID">
                          </div>

                          <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                          </div>

                          <div class="form-group">
                            <label>Prefix</label>
                            <input type="number" class="form-control" placeholder="Enter Prefix">
                          </div>

                          <div class="form-group">
                            <label>Client API Secret</label>
                            <input type="text" class="form-control" placeholder="Client API Secret">
                          </div>
                          <div class="form-group">
                            <label>Callback URL</label>
                            <input type="text" class="form-control" placeholder="Callback URL">
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                          </div>


                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel"
                      aria-labelledby="custom-tabs-one-messages-tab">
                      <form method="post" action="manage-members.php">
                        <div class="card-body">
                          <label style="color:#007bff;font-size:16px">Basic Details</label>
                          <div class="form-group">
                            <label>Account Type</label>
                            <input type="text" class="form-control" placeholder="Account Type">
                          </div>
                          <div class="form-group">
                            <label>User ID</label>
                            <input type="text" class="form-control" placeholder="User ID">
                          </div>

                          <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                          </div>

                          <div class="form-group">
                            <label>Prefix</label>
                            <input type="number" class="form-control" placeholder="Enter Prefix">
                          </div>

                          <div class="form-group">
                            <label>Client API Secret</label>
                            <input type="text" class="form-control" placeholder="Client API Secret">
                          </div>
                          <div class="form-group">
                            <label>Callback URL</label>
                            <input type="text" class="form-control" placeholder="Callback URL">
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                          </div>


                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel"
                      aria-labelledby="custom-tabs-one-settings-tab">
                      <form method="post" action="manage-members.php">
                        <div class="card-body">
                          <label style="color:#007bff;font-size:16px">Basic Details</label>
                          <div class="form-group">
                            <label>Account Type</label>
                            <input type="text" class="form-control" placeholder="Account Type">
                          </div>
                          <div class="form-group">
                            <label>User ID</label>
                            <input type="text" class="form-control" placeholder="User ID">
                          </div>

                          <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                          </div>

                          <div class="form-group">
                            <label>Prefix</label>
                            <input type="number" class="form-control" placeholder="Enter Prefix">
                          </div>

                          <div class="form-group">
                            <label>Client API Secret</label>
                            <input type="text" class="form-control" placeholder="Client API Secret">
                          </div>
                          <div class="form-group">
                            <label>Callback URL</label>
                            <input type="text" class="form-control" placeholder="Callback URL">
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                          </div>


                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-product" role="tabpanel"
                      aria-labelledby="custom-tabs-one-product-tab">
                      <form method="post" action="manage-members.php">
                        <div class="card-body">
                          <label style="color:#007bff;font-size:16px">Basic Details</label>
                          <div class="form-group">
                            <label>Account Type</label>
                            <input type="text" class="form-control" placeholder="Account Type">
                          </div>
                          <div class="form-group">
                            <label>User ID</label>
                            <input type="text" class="form-control" placeholder="User ID">
                          </div>

                          <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                          </div>

                          <div class="form-group">
                            <label>Prefix</label>
                            <input type="number" class="form-control" placeholder="Enter Prefix">
                          </div>

                          <div class="form-group">
                            <label>Client API Secret</label>
                            <input type="text" class="form-control" placeholder="Client API Secret">
                          </div>
                          <div class="form-group">
                            <label>Callback URL</label>
                            <input type="text" class="form-control" placeholder="Callback URL">
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                          </div>


                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                      </form>
                    </div>
                    <div class="tab-pane fade" id="custom-tabs-one-bet" role="tabpanel"
                      aria-labelledby="custom-tabs-one-bet-tab">
                      <form method="post" action="manage-members.php">
                        <div class="card-body">
                          <label style="color:#007bff;font-size:16px">Basic Details</label>
                          <div class="form-group">
                            <label>Account Type</label>
                            <input type="text" class="form-control" placeholder="Account Type">
                          </div>
                          <div class="form-group">
                            <label>User ID</label>
                            <input type="text" class="form-control" placeholder="User ID">
                          </div>

                          <div class="form-group">
                            <label>User Name</label>
                            <input type="text" class="form-control" placeholder="User Name">
                          </div>

                          <div class="form-group">
                            <label>Prefix</label>
                            <input type="number" class="form-control" placeholder="Enter Prefix">
                          </div>

                          <div class="form-group">
                            <label>Client API Secret</label>
                            <input type="text" class="form-control" placeholder="Client API Secret">
                          </div>
                          <div class="form-group">
                            <label>Callback URL</label>
                            <input type="text" class="form-control" placeholder="Callback URL">
                          </div>

                          <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Enter Password">
                          </div>
                          <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" placeholder="Confirm Password">
                          </div>


                          <!-- /.card-body -->

                          <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <button type="submit" class="btn btn-danger">Cancel</button>
                          </div>
                      </form>
                    </div>
                  </div>
                </div>
                <!-- /.card -->
              </div>
            </div>

          </div>


          <!-- /.col -->

          <!-- /.col -->
        


        <!-- /.row -->
      </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>

  <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>

<?php
include 'layout/footer.php';
?>