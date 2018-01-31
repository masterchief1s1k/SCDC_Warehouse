<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Products List
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Products and Inventory</a></li>
        <li class="active">Products</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-xs-12">
            <div class="box">
              <div class="box-header" style="font-size: 20px!important;">
                <a href="" style="padding-right: 10px"><i class="fa fa-download"></i> Export</a>
                <a href=""><i class="fa fa-upload"></i> Import</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
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
                    <td>Trident</td>
                    <td>Internet
                      Explorer 4.0
                    </td>
                    <td>Win 95+</td>
                    <td> 4</td>
                    <td>X</td>
                    <td>X</td>
                    <td>X</td>
                    <td><input type="checkbox" name="del_product[]"></td>
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
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                  <a href="index.php?task=addproduct" style="padding-right: 10px">
                    <button type="button" class="btn btn-primary">
                      <span class="glyphicon glyphicon-star"></span> Add New Product
                    </button>
                  </a>
                  <button onclick="return kiem_tra_xoa();" type="submit" class="btn btn-danger">
                    <span class="glyphicon glyphicon-remove"></span> Delete Selected Product
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
