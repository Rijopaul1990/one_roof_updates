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
                                                        <th>Product</th>
                                                        <th>Category</th>
                                                        <th>Sub-category</th>
                                                        
                                                        <th>Price</th>
                                                        <th>Quantity</th>
                                                        
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach($products as $key => $value) { ?>
                                                    <tr>
                                                        <td><?php echo $value->product_name; ?></td>
                                                        <td><?php echo  $value->cat_name; ?></td>
                                                        <td><?php echo  $value->sub_cat_name; ?></td>
                                                        <td><?php echo  $value->price; ?></td>
                                                        <td><?php echo  $value->quantity; ?></td>
                                                        
                                                        <td>
                                                            <a href="">Edit</a>
                                                            <a href="">Delete</a>
                                                            <a href="">Details</a>
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