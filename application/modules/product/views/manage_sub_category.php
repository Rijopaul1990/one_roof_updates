<?php $this->load->view($button_view); ?>
<section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                        <?php echo $this->session->flashdata('cat_success'); ?>
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                        <th>Sub Category</th>
                                                        <th>Category</th>
                                                        <th>description</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($subCategories as $key => $value) { ?>
                                                    <tr>
                                                        <td><?php echo $value->sub_cat_name; ?></td>
                                                        <td><?php echo  $value->cat_name; ?></td>
                                                        <td><?php echo  $value->description; ?></td>
                                                        <td>
                                                            <a href="<?= base_url(); ?>editSubcategory/<?= $value->sub_cat_id; ?>">Edit</a>
                                                            <a href="<?= base_url(); ?>deleteSubCat/<?= $value->sub_cat_id; ?>">Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>