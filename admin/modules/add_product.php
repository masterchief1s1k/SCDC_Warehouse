<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Add New Product
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php?task=id"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Add New Product</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header" style="background-color: #4b77be">
          <i class="fa fa-barcode"></i> <h3 class="box-title" style="color: white; font-size: 24px"> Add New Product</h3>
        </div>
            <!-- /.box-header -->
        <div class="box-body">
         <!-- Tab links -->
          <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'London')">Basics</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Dimensions</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">URL</button>
            <button class="tablinks" onclick="openCity(event, 'London')">Logistics</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')">Packaging</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')">Attributess</button>
          </div>

          <!-- Tab content -->
          <div id="London" class="tabcontent" style="display: block;">
            <div class="form">
              <form class="form-validate form-horizontal " id="register_form" method="get" action="">
                  <div class="form-group ">
                      <label for="name" class="control-label col-lg-2">Name: <span class="required" style="color: red">*</span></label>
                      <div class="col-lg-10">
                          <input class=" form-control" id="name" name="name" type="text" />
                          <p>Product name, cannot be longer than 50 characters. </p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="address" class="control-label col-lg-2">Description: </label>
                      <div class="col-lg-10">
                          <input class=" form-control" id="description" name="description" type="text" />
                          <p>Product description, cannot be longer than 255 characters.</p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="uom" class="control-label col-lg-2">UOM: </label>
                      <div class="col-lg-10">
                        <select class="form-control select2" style="width: 300px" name="uom" id="uom">
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                        <p>Uniquely identifies a product. </p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="category" class="control-label col-lg-2">Category: </label>
                      <div class="col-lg-10">
                        <select class="form-control select2" style="width: 300px" name="category" id="category" >
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                        <a href="index.php?task=id" class="btn btn-primary"><i class="fa fa-pencil"></i> Create New Category</a>
                        <p>Create your own categories to classify your products.You can search for products by category.</p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="category" class="control-label col-lg-2">Group: </label>
                      <div class="col-lg-10">
                        <select class="form-control select2" style="width: 300px" name="group" id="group" >
                          <option selected="selected">Alabama</option>
                          <option>Alaska</option>
                          <option>California</option>
                          <option>Delaware</option>
                          <option>Tennessee</option>
                          <option>Texas</option>
                          <option>Washington</option>
                        </select>
                        <p>Classifies your products with the pre-defined groups. </p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="sku" class="control-label col-lg-2">SKU: <span class="required" style="color: red">*</span></label>
                      <div class="col-lg-10">
                          <input class="form-control " id="sku" name="sku" type="text" />
                          <p>Uniquely identifies a product. </p>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="bin" class="control-label col-lg-2">BIN: </label>
                      <div class="col-lg-10">
                          <input class="form-control " id="bin" name="bin" type="text" />
                           <a href="index.php?task=id" class="btn btn-primary"><i class="fa fa-pencil"></i> Create New BIN</a>
                      </div>
                  </div>
                  <div class="form-group ">
                      <label for="price" class="control-label col-lg-2">Price (USD): </label>
                      <div class="col-lg-10">
                          <input class="form-control " id="price" name="price" type="text" step=0.01 placeholder="12.3" />
                          <p>Estimated value of a product. Used for inventory value calculation.</p>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-lg-offset-2 col-lg-10">
                          <button class="btn btn-success" type="submit">Save</button>
                          <button class="btn btn-default" type="button">Cancel</button>
                      </div>
                  </div>
              </form>
          </div>

          <div id="Paris" class="tabcontent">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p> 
          </div>

          <div id="Tokyo" class="tabcontent">
            <h3>Tokyo</h3>
            <p>Tokyo is the capital of Japan.</p>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button class="btn btn-success">Save</button>
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->