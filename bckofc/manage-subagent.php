<?php
  include 'layout/header.php'; 
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="content-header">
      <div class="container-fluid">
        
        <div class="row mb-2">
          <div class="col-sm-6">

          <div class="col-sm-3"></div>
            <h1>Manage Sub Agents</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Sub Agents</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Sub Agents </h3>

                <div class="card-tools">
                <a class="btn btn-primary" href="add-mechanic.php" role="button">Add  Sub Agents</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <table class="table" >
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Mobile</th>
                      <th>Date Of Birth</th>
                      <th>Category</th>
                      <th>Experience</th>
                      <th>Status</th>
                      <th colspan="4" style="width:90px" >Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td >1.</td>
                      <td >Shobhit Garg</td>
                      <td>shobhit@gmail.com</td>
                      <td>8934532244</td>
                      <td>1-1-2022</td>
                      <td>Car</td>
                      <td>6 Month</td>
                      <td style="color:green;">Accepted</td>
                      <td><button type="button" class="btn btn-outline-success">Accept</button>
                      <button type="button" class="btn btn-info">View</button>
                      <button type="button" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>

                    <tr>
                      <td >2.</td>
                      <td >Rahul</td>
                      <td>rahul@gmail.com</td>
                      <td>8912233222</td>
                      <td>1-1-2022</td>
                      <td>Bike</td>
                      <td>4 Month</td>
                      <td style="color:red;">Rejected</td>
                      <td><button type="button" class="btn btn-outline-danger">Reject</button>
                      <button type="button" class="btn btn-info">View</button>
                      <button type="button" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>

                    <tr>
                      <td>3.</td>
                      <td>Yash</td>
                      <td>yash@gmail.com</td>
                      <td>7012421124</td>
                      <td>1-1-2021</td>
                      <td>car</td>
                      <td>10 Month</td>
                      <td>Acceptance Pending</td>
                      <td><button type="button" class="btn btn-outline-success">Accept</button>
                      <button type="button" class="btn btn-info">View</button>
                      <button type="button" class="btn btn-success">Update</button>
                      <button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>

                    

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
               
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>         

  <?php
  include 'layout/footer.php'; 
  ?>
 