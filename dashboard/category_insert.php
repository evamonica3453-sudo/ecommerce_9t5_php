<?php include "header.php" ?>


        <div class="card">
            <div class="card-body">
                <h5 class="card-title fw-semibold mb-4">Category Insert</h5>
                <div class="card">
                    <div class="card-body">
                        <form action="category_insert_action.php" method="post" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="category_name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="category_name" id="category_name" placeholder="Electronic , Hardware etc.." >
                               
                            </div>
                            <div class="mb-3">
                                <label for="category_image" class="form-label">Upload Image</label>
                                <input type="file" class="form-control" name="category_img" id="category_image">
                            </div>
                           
                            <button type="submit" class="btn btn-primary">Submit Form</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
   


<?php include "footer.php" ?>