            <div class="page-header">
              <h3 class="page-title"> Add Class </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                  <li class="breadcrumb-item active" aria-current="page"> Add Class</li>
                </ol>
              </nav>
            </div>
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Class</h4>
                   
                    <form class="forms-sample" method="post" action="<?=base_url()?>addclass/create">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Class Name</label>
                        <input type="text" name="ClassName" value="" class="form-control" required='true'>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Section</label>
                        <select  name="Section" class="form-control" required='true'>
                          <option value="">Choose Section</option>
                          <option value="A">A</option>
                          <option value="B">B</option>
                          <option value="C">C</option>
                          <option value="D">D</option>
                          <option value="E">E</option>
                          <option value="F">F</option>
                        </select>
                      </div>
                      <input type="submit" class="btn btn-primary mr-2" >
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
</div>