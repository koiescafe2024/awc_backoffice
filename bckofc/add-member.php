<?php
  include 'layout/header.php'; 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
     

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
      

          <div class="col-md-6">

          <div class="card card-primary" style="margin-top:5px;">
              <div class="card-header">
                <h3 class="card-title">Add Member</h3>
              </div> 
              <form method="post" action="manage-members.php">
                <div class="card-body">

                <div class="form-group">
                    <label>Account Type</label>
                    <input type="text" class="form-control"  placeholder="Account Type">
                  </div>
                <div class="form-group">
                    <label>User ID</label>
                    <input type="text" class="form-control"  placeholder="User ID">
                  </div>

                  <div class="form-group">
                    <label>User Name</label>
                    <input type="text" class="form-control"  placeholder="User Name">
                  </div>

                  <div class="form-group">
                    <label>Prefix</label>
                    <input type="number" class="form-control"  placeholder="Enter Prefix">
                  </div>

                  <div class="form-group">
                    <label>Client API Secret</label>
                    <input type="text" class="form-control"  placeholder="Client API Secret">
                  </div>
                  <div class="form-group">
                    <label>Callback URL</label>
                    <input type="text" class="form-control"  placeholder="Callback URL">
                  </div>
                 
                  <div class="form-group">
                    <label >Password</label>
                    <input type="password" class="form-control"  placeholder="Enter Password">
                  </div>
                  <div class="form-group">
                    <label >Confirm Password</label>
                    <input type="password" class="form-control"  placeholder="Confirm Password">
                  </div>
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                  <button type="submit" class="btn btn-danger">Cancel</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.col -->
     
          <!-- /.col -->
        </div>
        

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>            

  <?php
  include 'layout/footer.php'; 
  ?>
 