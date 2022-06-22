<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <form class="admin" method="post" action="<?= base_url('post/update_post'); ?>" enctype="multipart/form-data">
                <div class="row">
                    <input hidden type="text" class="form-control" id="post_id" name="post_id" value="<?= $post['post_id'] ?>" placeholder="Enter Title">
                    <input hidden type="text" class="form-control" id="id_user" name="id_user" value="<?= $post['id_user'] ?>" placeholder="Enter Title">
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Form Elements</div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="post_title" name="post_title" placeholder="Enter Title" value="<?= $post['post_title'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="format">Format</label>
                                            <input type="text" class="form-control" id="post_format" name="post_format" placeholder="Enter Format" value="<?= $post['post_format'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="topic">Topic</label>
                                            <input type="text" class="form-control" id="post_topic" name="post_topic" placeholder="Enter Topic" value="<?= $post['post_topic'] ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="title">Link</label>
                                            <input type="text" class="form-control" id="post_link" name="post_link" placeholder="Enter Link" value="<?= $post['post_link'] ?>">
                                        </div>
                                    </div>
                                    <div class=" col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="comment">Body</label>
                                            <textarea class="ckeditor" id="ckedtor" name="post_body" rows="5"><?= $post['post_body'] ?></textarea>
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
                                    <div class="col-md-12 ">
                                        <div class="form-group form-group-default">
                                            <label>Category</label>
                                            <div class="col-sm-12">
                                                <select class="form-control" name="category_id" id="category_id">
                                                    <option value="<?php $post['category_id'] ?>" selected="selected"></option>
                                                    <?php
                                                    foreach ($category as $ca) { ?>
                                                        <option <?= ($ca->id == $post['category_id'] ? 'selected=""' : '') ?> value="<?= $ca->id; ?>"><?= $ca->name; ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="Date">Date</label>
                                            <input type="date" class="form-control" id="post_date" name="post_date" placeholder="Enter Date" value="<?= date('Y-m-d') ?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-lg-12">
                                        <div class="form-group">
                                            <label for="Thumbnail">Thumbnail</label>
                                            <input type="file" class="form-control" id="imagefile" name="imagefile" placeholder="Enter Thumbnail">
                                        </div>
                                    </div>
                                    <div class="card-action">
                                        <button type="submit" id="addRowButton" class="btn btn-success">Submit</button>
                                        <a href="<?= base_url('post/index/') ?>" class="btn btn-danger">Kembali</a>
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