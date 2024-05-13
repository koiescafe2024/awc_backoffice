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
            <h1>Win / Loss Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reports</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="col-md-12">
            <div class="card">
              <div class="card-header">
               

              <br/>
                <div class="row">
                <div class="form-group">
                        <label>Date Time</label>
                        <input type="text" class="form-control" placeholder="Date Time">
                      </div>
                      <div class="form-group">
                        <label>Timezone</label>
                        <input type="text" class="form-control" placeholder="Timezone">
                      </div>
                      <div class="form-group">
                        <label>Platform</label>
                        <input type="text" class="form-control" placeholder="Platform">
                      </div>
                      <div class="form-group">
                        <label>Type</label>
                        <input type="text" class="form-control" placeholder="Type">
                      </div>
                      <div class="form-group">
                        <label>Location</label>
                        <input type="text" class="form-control" placeholder="Location">
                      </div>
                      <div class="form-group">
                        <label>Currency</label>
                        <input type="text" class="form-control" placeholder="Currency">
                      </div>

                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
              <h3 class="card-title">Win / Loss Stats</h3>
                <table class="table" style="width:100%;overflow:scroll">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>User ID</th>
                      <th>User Name</th>
                      <th>Platform</th>
                      <th>Type</th>
                      <th>Location</th>
                      <th>Bet Count</th>
                      <th>Valid Turnover</th>
                      <th>Bet Amount</th>
                      <th>Total Bet</th>
                      <th><span style="color:blue;font-weight:bold">Player</span> Win/Loss</th>
                      <th>Adjustment</th>
                      <th>Total P/L</th>
                      <th>Margin(%)</th>
                      <th><span style="color:blue;font-weight:bold">Agent</span> PT Win/Loss</th>
                      <th>Adjustment</th>
                      <th>Total P/L</th>
                     
                      <th><span style="color:blue;font-weight:bold">Franchise Agent</span> Win/Loss</th>
                      <th>Adjustment</th>
                      <th>Total P/L</th>
                     
                      <th><span style="color:blue;font-weight:bold">Company</span> Total P/L</th>
                     
                     
                     
                     
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
                      <td ></td>
                      <td></td>
                      <td ></td>
                      <td></td>
                      <td ></td>
                      <td></td>
                      <td ></td>
                      <td></td>
                      <td></td>
                      <td ></td>
                      <td ></td>
                      <td></td>
                      <td ></td>
                      <td></td>
                      <td ></td>
                      <td></td>
                      <td ></td>
                      <td></td>
                      <td></td>
                       <td ></td>
                    
                     
                     
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
 