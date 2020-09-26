<?php $this->load->view($button_view); ?>
<section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Category</h4>
                                </div>
                                <div class="card-content">
                                    
                                    <div class="card-body">
                                    <form action="<?php echo base_url(); ?>updateCategory/<?= $categories->cat_id; ?>" method="POST">
                                        <div class="row">    
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Category Name</label>
                                                    <input type="text" class="form-control" name="category" value="<?= $categories->cat_name; ?>" id="basicInput" placeholder="Enter Category">
                                                </fieldset>
                                                </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="disabledInput">Discription</label>
                                                    <fieldset class="form-group">
                                                        <textarea class="form-control" name="cat_description" id="basicTextarea" rows="3" placeholder="Category Description"><?= $categories->description; ?></textarea>
                                                    </fieldset>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <button class="btn btn-lg btn-danger">Update Category</button>
                                            </div>  
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>