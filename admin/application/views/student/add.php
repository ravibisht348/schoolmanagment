    <div class="page-header">
      <h3 class="page-title"> Add Students </h3>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"> Add Students</li>
        </ol>
      </nav>
    </div>
    <div class="row">

      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title" style="text-align: center;">Add Students</h4>
            <br>

            <form class="forms-sample" method="post" enctype="multipart/form-data">

              <div class="form-group">
                <label for="exampleInputName1">Student Name</label>
                <input type="text" name="stuname" value="<?= isset($row->StudentName)?$row->StudentName:'' ?>" class="form-control" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Student Email</label>
                <input type="text" name="stuemail" value="<?= isset($row->StudentEmail)?$row->StudentEmail:'' ?>" class="form-control" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail3">Student Class</label>
                <select name="stuclass" class="form-control" required='true'>
                  <option value="<?= isset($row->StudentClass)?$row->StudentClass:'' ?>">Select Class</option>



                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Gender</label>
                <select name="gender" value="" class="form-control" required='true'>
                  <option value="">Choose Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Date of Birth</label>
                <input type="date" name="dob" value="" class="form-control" required='true'>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Student ID</label>
                <input type="text" name="stuid" value="" class="form-control" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Student Photo</label>
                <input type="file" name="image" value="" class="form-control" required='true'>
              </div>
              <h3>Parents/Guardian's details</h3>
              <div class="form-group">
                <label for="exampleInputName1">Father's Name</label>
                <input type="text" name="fname" value="" class="form-control" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Mother's Name</label>
                <input type="text" name="mname" value="" class="form-control" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Contact Number</label>
                <input type="text" name="connum" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Alternate Contact Number</label>
                <input type="text" name="altconnum" value="" class="form-control" required='true' maxlength="10" pattern="[0-9]+">
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Address</label>
                <textarea name="address" class="form-control" required='true'></textarea>
              </div>
              <h3>Login details</h3>
              <div class="form-group">
                <label for="exampleInputName1">User Name</label>
                <input type="text" name="uname" value="" class="form-control" required='true'>
              </div>
              <div class="form-group">
                <label for="exampleInputName1">Password</label>
                <input type="Password" name="password" value="" class="form-control" required='true'>
              </div>
              <button type="submit" class="btn btn-primary mr-2" name="submit">Add</button>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>