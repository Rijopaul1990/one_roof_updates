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
                                                        <th>Category</th>
                                                        <th>description</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($categories as $key => $value) { ?>
                                                    <tr>
                                                        <td><?php echo $value->cat_name; ?></td>
                                                        <td><?php echo  $value->description; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url(); ?>editCat/<?= $value->cat_id; ?>">Edit</a>
                                                            <a href="<?php echo base_url(); ?>deleteCat/<?= $value->cat_id; ?>">Delete</a>
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