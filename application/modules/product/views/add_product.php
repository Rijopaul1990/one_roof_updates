<script>
    $(document).ready(function(){
        $('#cat_select').change(function(){
            var catid = $('#cat_select').val();
            var base_url = $(this).data("id");
            $.ajax({
                url: base_url+'fetchSubCat',
                type: 'POST',
                data: {catid:catid},
                success: function(data){
                    //alert(data);
                    $("#sub_cat_select").append(data);
                }
            });
        });
    });
</script>
<?php $this->load->view($button_view); ?>
<section id="basic-input">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Product</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="<?php echo base_url(); ?>addProduct" method="post">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <h6>Choose Category</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="category" id="cat_select" data-id="<?php echo base_url();?>">
                                                    <?php foreach($categories as $key => $value) { ?>
                                                        <option value="<?php echo $value->cat_id; ?>"><?php echo $value->cat_name; ?></option>
                                                    <?php } ?>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Choose Sub Category</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="sub_category" id="sub_cat_select">
                                                        
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Product Name</label>
                                                    <input type="text" class="form-control" name="product" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Select Brand</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="brand" id="basicSelect">
                                                        <option>brand One</option>
                                                        <option>Brand two</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Product Quantity</label>
                                                    <input type="text" class="form-control" name="quantity" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Unit</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="unit" id="basicSelect">
                                                        <option>Kg</option>
                                                        <option>Number</option>
                                                    </select>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInput">Price Per Unit</label>
                                                    <input type="text" name = "price" class="form-control" id="basicInput" placeholder="Enter Sub Category">
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <h6>Choose Colour</h6>
                                                <fieldset class="form-group">
                                                    <select class="form-control" name="colour" id="basicSelect">
                                                        <option>Red</option>
                                                        <option>Green</option>
                                                    </select>
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
                                                <button class="btn btn-lg btn-danger">Add Product</button>
                                            </div>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>