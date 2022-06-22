<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <form class="edit_gallery" method="post" action="<?= base_url('gallery/update_gallery'); ?>" enctype="multipart/form-data">
                <div class="row">
                    <input hidden type="text" class="form-control" id="id_user" name="id_user" value="<?= $PO['id_user'] ?>" placeholder="Enter Title">
                    <input hidden type="text" class="form-control" id="id" name="id" value="<?= $PO['id'] ?>" placeholder="Enter Title">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Post Gallery</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title" value="<?= $PO['title'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="title">Link</label>
                                            <input type="text" class="form-control" id="link" name="link" placeholder="Enter Link" value="<?= $PO['link'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="coach">Coach</label>
                                            <input type="text" class="form-control" id="coach" name="coach" placeholder="Enter Coach" value="<?= $PO['coach'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="harga">Harga</label>
                                            <input type="text" class="form-control" id="harga" name="harga" placeholder="Enter Harga" value="<?= $PO['harga'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="comment">Discourse</label>
                                            <textarea class="ckeditor" id="ckedtor" name="discourse" rows="5"><?= $PO['discourse'] ?></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Post Info</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="format">Format</label>
                                            <input type="text" class="form-control" id="format" name="format" placeholder="Enter Coach" value="<?= $PO['coach'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="topic">Topic</label>
                                            <input type="text" class="form-control" id="topic" name="topic" placeholder="Enter Harga" value="<?= $PO['topic'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="ket">Keterangan</label>
                                            <input type="text" class="form-control" id="ket" name="ket" placeholder="Enter Keterangan" value="<?= $PO['ket'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 ">
                                        <div class="form-group form-group-default">
                                            <label>Gallery</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="gallery_id" id="gallery_id">
                                                    <option value="<?php $PO['gallery_id'] ?>" selected="selected"></option>
                                                    <?php
                                                    foreach ($gallery as $ca) { ?>
                                                        <option <?= ($ca->id == $PO['gallery_id'] ? 'selected=""' : '') ?> value="<?= $ca->id; ?>"><?= $ca->title; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="Thumbnail">Thumbnail</label>
                                            <input type="file" class="form-control" id="imagefile" name="imagefile" placeholder="Enter Thumbnail">
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button class="btn btn-success">Submit</button>
                                        <a href="<?= base_url('gallery/post_gallery/') ?>" class="btn btn-danger">Kembali</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>