<?php
    session_start();
    require("../layout/header.php");
?>
<?php
    $link=mysqli_connect("localhost", "root","");
    mysqli_select_db($link,"registration");
?>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Add product</h2>
                </div>
                <form action="admin.php" method="post" enctype="multipart/form-data">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="product_name">Product name</label>
                            <input type="text" class="form-control" name="productname" placeholder="product name">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="poduct_price">Product price</label>
                            <input type="text" class="form-control" name="productprice" placeholder="product price">
                        </div>
                        <div class="form-group col-md-6">
                        <label id="upload" for="product_description">Select file to upload: <input type="file" name="upload" placeholder="Image URL"/></label>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_description">Description</label>
                            <input type="text" class="form-control" name="productdescription" placeholder="Description">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_requirements">Requirements</label>
                            <input type="text" class="form-control" name="productrequirements">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="product_category" name="productcategory">category</label>
                            <select name="games">
                                <option value="Bethesda">Bethesda</option>
                                <option value="EA">EA</option>
                                <option value="Epic games">Epic games</option>
                                <option value="Ubisoft">Ubisoft</option>
                                <option value="Steam">Steam</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="action" value="upload"/>
                    <input type="submit" name="submit" value="upload"/>
                    </div>
                </form>
                <?php
                if(isset($_POST["submit"]))/* */
                {
                    $v1=rand(1111,9999);
                    $v2=rand(1111,9999);

                    $v3=$v1.$v2;

                    $v3=md5($v3);

                $fnm = $_FILES["upload"] ["name"];
                $dst="./product_image/".$v3.$fnm;
                $dst1="product_image/".$v3.$fnm;
                move_uploaded_file($_FILES["upload"] ["tmp_name"],$dst);
                    }
                mysqli_query($link,"INSERT INTO products VALUES ('', '$_POST[productname]', '$_POST[productprice]', '$dst1', '$_POST[productdescription]', '$_POST[productrequirements]', '$_POST[games]') "  );
                ?>
            </div>
        </div>
    </main>
<?php
    include("../layout/footer.php");
?>
