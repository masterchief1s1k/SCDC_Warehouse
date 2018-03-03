<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products List
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?task=id"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Products & Inventory</li>
        <li class="active">Products </li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a href="" style="padding-right: 10px"><i class="fa fa-download"></i> Import</a>
              <a href=""><i class="fa fa-upload"> Export</i></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table 
              table-bordered table-striped">
                <thead>
                <tr>
                  <th>Image</th>
                  <th>Sku</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Created</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Select</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>
                    <img src="../assets/images/admin/no-image.png" alt="No image" class="img-circle" style="height: 50px; width: 50px">
                  </td>
                  <td>Internet
                    Explorer 4.0
                  </td>
                  <td>Win 95+</td>
                  <td> 4</td>
                  <td>X</td>
                  <td>X</td>
                  <td>
                    <div class="btn-group">
                      <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                          Action <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#"><i class="fa fa-search"></i>View</a></li>
                          <li><a href="#"><i class="fa fa-pencil"></i>Edit</a></li>
                          <li><a href="#"><i class="fa fa-history"></i>Transactions History</a></li>
                        </ul>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <label>
                        <input type="checkbox" class="flat-red" name="select[]">
                      </label>
                    </div>
                  </td>
                </tr>
                </tbody>
                <tfoot>
                <tr>
                  <th>Image</th>
                  <th>Sku</th>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Created</th>
                  <th>Status</th>
                  <th>Action</th>
                  <th>Select</th>
                </tr>
                </tfoot>
              </table>
              <div>
                <a href="index.php?task=addproduct" style="padding-right: 10px">
                  <button type="button" class="btn btn-primary">
                    <span class="glyphicon glyphicon-star"></span> Add New Product
                  </button>
                </a>
                <button onclick="return kiem_tra_xoa();" type="submit" class="btn btn-danger">
                  <span class="glyphicon glyphicon-remove"></span> Delete Selected Products
                </button>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
 
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->




 
