<script src="https://cdn.tailwindcss.com"></script>
<?php
                    $test=new productController;
        ?>
<center>
    <div class="AddProduct w-1/3">
        <h1 class="text-xl font-semibold text-sky-800 my-8">Add Product</h1>
    <form action="?p=Dashboard&a=updateP&id=<?=$_GET['id']?>" method="post" enctype="multipart/form-data" class="border p-6">
        
        <label class="block">
            <span class="sr-only">Choose profile photo</span>
            <input type="file" name="productPic" required class="block w-full text-sm text-sky-700
              file:mr-4 file:py-2 file:px-4
              file:rounded-full file:border-0
              file:text-sm file:font-semibold
              file:bg-sky-50 file:text-sky-700
              hover:file:bg-sky-100
            "/>
          </label>
          <label class="block">
            <span class="sr-only">Product Name</span>
            <input type="text" value="<?=($test->select('productName',$_GET['id']))['productName']?>" name="productName" required placeholder="Product Name" class="block px-2 border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            "/>
          </label>
          <label class="block">
            <span class="sr-only">Referance</span>
            <input type="text" value="<?=($test->select('referenceProduct',$_GET['id']))['referenceProduct']?>" name="referenceProduct" required placeholder="Referance" class="block border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            "/>
          </label>
          <label class="block">
            <span class="sr-only">CodeBar</span>
            <input type="text" value="<?=($test->select('codeBar',$_GET['id']))['codeBar']?>" name="codeBar" required placeholder="Code Bar" class="block border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            "/>
          </label>
          <label class="block">
            <span class="sr-only">Label</span>
            <input type="text" value="<?=($test->select('labelProduct',$_GET['id']))['labelProduct']?>" name="labelProduct" required placeholder="Label" class="block border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            "/>
          </label>
          <label class="block">
            <span class="sr-only">purchase Price</span>
            <input type="text" value="<?=($test->select('purchasePrice',$_GET['id']))['purchasePrice']?>" name="purchasePrice" required placeholder="purchase Price" class="block border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            "/>
          </label>
          <label class="block">
            <span class="sr-only">final Price</span>
            <input type="text" value="<?=($test->select('finalPrice',$_GET['id']))['finalPrice']?>" name="finalPrice" required placeholder="final Price" class="block border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            "/>
          </label>
          <label class="block">
            <span class="sr-only">offre Price</span>
            <input type="text" value="<?=($test->select('offrePrice',$_GET['id']))['offrePrice']?>" name="offrePrice" required placeholder="offre Price" class="block border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            "/>
          </label>
          <label class="block">
            <span class="sr-only" >Product Category</span>
            <select required name="productCategory" class="block border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
                " id="">
                <option value="<?=($test->select('productCategory',$_GET['id']))['productCategory']?>" ><?=($test->select('productCategory',$_GET['id']))['productCategory']?></option>
                <?php
                    $test=new categoryController;
                    $post=$test->getCategories();
                    foreach ($post as $key => $value){?>
                      <option value="<?= $value['categoryName'] ?>" ><?= $value['categoryName'] ?></option>
                    <?php
                    }
                ?>
            </select>
          </label>
          <textarea name="description" required placeholder="Description" class="block border border w-full text-sm text-sky-700 h-20 rounded-sm my-4 px-2" id="" cols="30" rows="10">Description
          </textarea>
          <input type="submit" name="submit" class="w-full bg-sky-800 rounded-xl font-bold text-white h-8 cursor-pointer hover:bg-sky-700 " value="Submit">
    </form>
</center>