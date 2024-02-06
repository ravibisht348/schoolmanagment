<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Class</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
              <div class="card card-primary card-outline">
                  <div class="card-header">
                    <div class="card-title">
                      <form id="searhFrm" name="searhFrm" method="get" action="">
                          <div class="input-group mb-0">
                              <input type="text" value="" class="form-control" placeholder="Search" name="q">
                              <div class="input-group-append">
                                  <button class="input-group-text" id="basic-addon1">
                                      <i class="fas fa-search"></i>
                                  </button>
                              </div>
                          </div>
                      </form>
                    </div>
                    <div class="card-tools">
                      <a href="" download class="btn btn-success"><i class="fas fa-download"></i> Download PDF</a>
                      <a href="<?= base_url()?>addclass/create()" class="btn btn-primary"><i class="fas fa-plus"></i> Create</a>
                    </div>
                  </div>
                  <div class="card-body">
                    <table class="table">
                      <tr>
                        <th width="10%">S.No.</th>
                        <th>Class</th>
                        <th>Section</th>
                        <th width="20%" class="text-center">Action</th>
                      </tr>
                      <?php

foreach ($result as $row) 
{
?>
                      <tr>
                        <td><?= $row->ID?></td>
                        <td><?= $row->ClassName?></td>
                        <td><?= $row->Section?></td>
                        <td href="<?= base_url()?>addclass/create/<?=$row->{'ID'}?>"class="text-center"><a class="btn btn-primary btn-sm"><i class="far fa-edit"></i> Edit</a>
                            <a href="<?= base_url()?>addclass/delete/<?=$row->{'ID'}?>" onclick="return confirm('Are you sure you want to delete this product?')"class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i> Delete</a>
                          </td>
                      </tr>
<?php
}
?>                      
                    </table>
                  </div>
              </div>
          </div>
          
        </div>
       
      </div>
    </div>
   
  </div>