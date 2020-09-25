<?php $this->load->view($button_view); ?>
<section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Sub Category</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="<?php echo base_url(); ?>addSubCategory" method="POST">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Choose Category</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="category" id="basicSelect">
                                                        <?php foreach($categories as $key => $value) { ?>
                                                            <option value="<?php echo $value->cat_id; ?>"><?php echo $value->cat_name; ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Sub Category Name</label>
                                                    <input type="text" class="form-control" name="sub_category" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Discription</label>
                                                        <fieldset class="form-group">
                                                            <textarea class="form-control" name="description" id="basicTextarea" rows="3" placeholder="Sub Category Description"></textarea>
                                                        </fieldset>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-8">
                                                <button class="btn btn-lg btn-danger">Add Sub Category</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>