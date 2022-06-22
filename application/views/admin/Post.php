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
                              <a href="<?= base_url('post/add_post') ?>" class="btn btn-primary btn-round ml-auto">
                                  <i class="fa fa-plus"></i>
                                  Add Post
                              </a>
                          </div>
                      </div>

                      <div class="card-body">
                          <!-- Modal -->
                          <div class="table-responsive">
                              <table id="datatable" class="display table table-striped table-hover">
                                  <thead class="center">
                                      <tr>
                                          <th>NO</th>
                                          <th>Date</th>
                                          <th>Title</th>
                                          <th>Author</th>
                                          <th>Category</th>
                                          <th>Action</th>
                                      </tr>
                                  </thead>
                                  <tbody class="center">
                                      <?php
                                        $no = 1;
                                        foreach ($post as $a) { ?>
                                          <tr>
                                              <td><?= $no++ ?></td>
                                              <td><?= $a->post_date ?></td>
                                              <td><?= $a->post_title ?></td>
                                              <td><?= $a->full_name ?></td>
                                              <td><?= $a->name ?></td>
                                              <td>
                                                  <div class="form-button-action">
                                                      <a href="<?= base_url('post/edit_post/' . $a->post_id . '') ?>" title="Edit Data" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task">
                                                          <i class="fa fa-edit"></i>
                                                      </a>
                                                      <a href="#!" onclick="deleteConfirm('<?php echo site_url('post/delete/' . $a->post_id) ?>')" class="btn btn-link btn-danger btn-lg"><i class="fa fa-times"></i></a>
                                                  </div>
                                              </td>
                                          </tr>

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