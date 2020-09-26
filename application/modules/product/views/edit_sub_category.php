<?php $this->load->view($button_view); ?>
<section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Sub Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="<?php echo base_url(); ?>updateSubCategory/<?=$sub_categories->sub_cat_id; ?>" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Choose Category</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="category" id="basicSelect">
                                                        <?php foreach($categories as $key => $value) { ?>
                                                            <option value="<?php echo $value->cat_id; ?>"<?php if($value->cat_id == $sub_categories->cat_id) { echo "selected"; } ?>><?php echo $value->cat_name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Sub Category Name</label>
                                                    <input type="text" class="form-control" name="sub_category" value="<?= $sub_categories->sub_cat_name ;?>" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Discription</label>
                                                        <fieldset class="form-group">
                                                            <textarea class="form-control" name="description" id="basicTextarea" rows="3" placeholder="Sub Category Description"><?= $sub_categories->description ;?></textarea>
                                                        </fieldset>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-8">
                                                <button class="btn btn-lg btn-danger">Update Sub Category</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>