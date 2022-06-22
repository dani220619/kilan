  <style>
      .center {
          text-align: center;
      }
  </style>
  <div class="main-panel">
      <div class="content">
          <div class="page-inner">
              <div class="col-md-12">
                  <div class="card">
                      <div class="card-header">
                          <div class="d-flex align-items-center">
                              <h4 class="card-title"><?= $title ?></h4>
                              <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#usermodal">
                                  <i class="fa fa-plus"></i>
                                  Add Network
                              </button>
                          </div>
                      </div>

                      <div class="card-body">
                          <!-- Modal -->
                          <div class="table-responsive">
                              <table id="datatable" class="display table table-striped table-hover">
                                  <thead class="center">
                                      <tr>
                                          <th>NO</th>
                                          <th>TITLE</th>
                                          <th>SECTOR</th>
                                          <th>FOUNDED</th>
                                          <th>LOCATION</th>
                                          <th>IMAGE</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody class="center">
                                      <?php
                                        $no = 1;
                                        foreach ($network as $a) { ?>

                                          <tr>
                                              <td><?= $no++ ?></td>
                                              <td><?= $a->title ?></td>
                                              <td><?= $a->sector ?></td>
                                              <td><?= $a->founded ?></td>
                                              <td><?= $a->location ?></td>
                                              <td><?= $a->image ?></td>
                                              <td>
                                                  <div class="form-button-action">
                                                      <button data-target="#edit-category<?= $a->id ?>" type="button" data-toggle="modal" title="Edit Data" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                          <i class="fa fa-edit"></i>
                                                      </button>
                                                      <a href="#!" onclick="deleteConfirm('<?php echo site_url('network/delete/' . $a->id) ?>')" class="btn btn-link btn-danger btn-lg"><i class="fa fa-times"></i></a>
                                                  </div>
                                              </td>
                                          </tr>
                                          <div class="modal fade" id="edit-category<?= $a->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                      <div class="modal-header no-bd">
                                                          <h5 class="modal-title">
                                                              <span class="fw-mediumbold">
                                                                  Edit</span>
                                                              <span class="fw-light">
                                                                  Network
                                                              </span>
                                                          </h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">&times;</span>
                                                          </button>
                                                      </div>
                                                      <div class="modal-body">

                                                          <form action="<?= base_url('network/update'); ?>" method="post" enctype="multipart/form-data">
                                                              <div class="row">
                                                                  <input hidden type="text" class="form-control" id="id" name="id" placeholder="id" value="<?= $a->id ?>">
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Title</label>
                                                                          <input type="text" class="form-control" id="title" name="title" placeholder="title" value="<?= $a->title ?>" required>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Description</label>
                                                                          <textarea class="ckeditor" id="ckedtor" name="about" rows="5"><?= $a->about ?></textarea>
                                                                          <?= form_error('about', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Sector</label>
                                                                          <input type="text" class="form-control" id="sector" name="sector" placeholder="Sector" value="<?= $a->sector ?>" required>
                                                                          <?= form_error('sector', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Founded</label>
                                                                          <input type="text" class="form-control" id="founded" name="founded" placeholder="Founded" value="<?= $a->founded ?>" required>
                                                                          <?= form_error('founded', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Location</label>
                                                                          <input type="text" class="form-control" id="location" name="location" placeholder="Location" value="<?= $a->location ?>" required>
                                                                          <?= form_error('location', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Web</label>
                                                                          <input type="text" class="form-control" id="web" name="web" placeholder="Web" value="<?= $a->web ?>">
                                                                          <?= form_error('web', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Email</label>
                                                                          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= $a->email ?>">
                                                                          <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Instagram</label>
                                                                          <input type="text" class="form-control" id="ig" name="ig" placeholder="instagram" value="<?= $a->ig ?>">
                                                                          <?= form_error('ig', '<small class="text-danger pl-3">', '</small>'); ?>
                                                                      </div>
                                                                  </div>
                                                                  <div class="col-sm-12">
                                                                      <div class="form-group form-group-default">
                                                                          <label>Image</label>
                                                                          <input type="file" class="form-control" id="imagefile" name="imagefile" placeholder="Full Name" value="<?= $a->image ?>">
                                                                      </div>
                                                                  </div>

                                                              </div>
                                                              <div class="modal-footer no-bd">
                                                                  <button type="submit" id="addRowButton" class="btn btn-primary">Edit</button>
                                                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                              </div>
                                                          </form>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                          <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                              <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                      <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Are you sure?</h5>
                                                          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                              <span aria-hidden="true">×</span>
                                                          </button>
                                                      </div>
                                                      <div class="modal-body">Data yang dihapus tidak akan bisa dikembalikan.</div>
                                                      <div class="modal-footer">
                                                          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                          <a id="btn-delete" class="btn btn-danger" href="#">Delete</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>

                                      <?php } ?>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <div class="modal fade" id="usermodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header no-bd">
                  <h5 class="modal-title">
                      <span class="fw-mediumbold">
                          Network</span>
                      <span class="fw-light">
                          Add
                      </span>
                  </h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <!-- <p class="small">Create a new row using this form, make sure you fill them all</p> -->
                  <form class="admin" method="post" action="<?= base_url('network/insert'); ?>" enctype="multipart/form-data">
                      <div class="row">
                          <input hidden type="text" class="form-control" id="id" name="id" placeholder="id" value="<?= set_value('id'); ?>">
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Title</label>
                                  <input type="text" class="form-control" id="title" name="title" placeholder="title" value="<?= set_value('title'); ?>" required>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Description</label>
                                  <textarea class="ckeditor" id="ckedtor" name="about" rows="5" required><?= set_value('about'); ?></textarea>
                                  <?= form_error('about', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Sector</label>
                                  <input type="text" class="form-control" id="sector" name="sector" placeholder="Sector" value="<?= set_value('sector'); ?>" required>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Founded</label>
                                  <input type="text" class="form-control" id="founded" name="founded" placeholder="Founded" value="<?= set_value('founded'); ?>" required>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Location</label>
                                  <input type="text" class="form-control" id="location" name="location" placeholder="Location" value="<?= set_value('location'); ?>" required>
                                  <?= form_error('location', '<small class="text-danger pl-3">', '</small>'); ?>
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Web</label>
                                  <input type="text" class="form-control" id="web" name="web" placeholder="Web" value="<?= set_value('web'); ?>">

                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Email</label>
                                  <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">

                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Instagram</label>
                                  <input type="text" class="form-control" id="ig" name="ig" placeholder="Instagram" value="<?= set_value('ig'); ?>">
                              </div>
                          </div>
                          <div class="col-sm-12">
                              <div class="form-group form-group-default">
                                  <label>Image</label>
                                  <input type="file" class="form-control" id="imagefile" name="imagefile" placeholder="Full Name" value="<?= set_value('image'); ?>" required>
                              </div>
                          </div>

                      </div>
                      <div class="modal-footer no-bd">
                          <button type="submit" id="addRowButton" class="btn btn-primary">Add</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      </div>
                  </form>
              </div>

          </div>
      </div>
  </div>
  <script>
      function deleteConfirm(url) {
          $('#btn-delete').attr('href', url);
          $('#deleteModal').modal();
      }
  </script>

  <script>
      $(document).ready(function() {
          $('#datatable').DataTable();
      });
  </script>