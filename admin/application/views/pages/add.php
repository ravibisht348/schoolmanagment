<div class="page-header">
      <h3 class="page-title"> Add Pages </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Add Page</li>
        </ol>
      </nav>
    </div>
    <div class="row">

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="post" enctype="multipart/form-data">              
              <div class="form-group">
                <label for="exampleInputName1">Page Title</label>
                <input type="text" name="altconnum" value="<?= isset($row->PageTitle)?$row->PageTitle:'' ?>" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Page Description</label>
                <br>
                <textarea rows="4" cols="50"  name="address" value="<?= isset($row->PageDescription)?$row->PageDescription:'' ?>" class="form-control" required='true'>
            </textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>