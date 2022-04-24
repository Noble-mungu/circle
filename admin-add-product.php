<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
    <title>Document</title>
</head>
<body>
<form method="POST" action="add-product.php" style="margin-top:30px;">
      <div class="row">
        <div class="small-8">

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Product Name</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="product_name" placeholder="Product Name" name="product_name">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Code</label>
            </div>
            <div class="small-8 columns">
              <input type="text" id="product_code" placeholder="product code" name="product_code">
            </div>
          </div>

          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Description</label>
            </div>
            <div class="small-8 columns">
                <textarea id="product_desc" name="product_desc">
                </textarea>
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Image</label>
            </div>
            <div class="small-8 columns">
              <input type="file" id="product_img_name"  name="product_img_name">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Quantity</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="qty" placeholder="Quantity" name="qty">
            </div>
          </div>
          <div class="row">
            <div class="small-4 columns">
              <label for="right-label" class="right inline">Price</label>
            </div>
            <div class="small-8 columns">
              <input type="number" id="price" placeholder="400056" name="price">
            </div>
          </div>
         
            <div class="small-8 columns">
              <input type="submit" id="right-label" value="Add" style="background: #0078A0; border: none; color: #fff; font-family: 'Helvetica Neue', sans-serif; font-size: 1em; padding: 10px;">
            </div>
          </div>
        </div>
      </div>
    </form>
</body>
</html>