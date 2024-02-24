    <div class="page-header">
      <h3 class="page-title"> Add Public Notice </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Add Public Notice</li>
        </ol>
      </nav>
    </div>
    <div class="row">

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <form class="forms-sample" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleInputName1">Notice Title</label>
                <input type="text" name="NoticeTitle" value="" class="form-control" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Notice Message</label>
                <textarea name="NoticeMessage" class="form-control" required='true'></textarea>
              </div>
              <button type="submit" class="btn btn-primary mr-2" >Add</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>