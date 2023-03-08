<?php
include_once 'includes/header.php';
?>
</header>

<main>
    <h1 class="font-bold text-3xl my-14 mt-20 text-center text-sky-900 ">Products</h1>
    <div class="inputs">
        <div class="w-full flex justify-center">
            <select name="" id="selectPrice" class="bg-gray-50 border border-amber-300 text-gray-900 text-sm rounded-sm focus:ring-sky-500 focus:border-sky-500 w-1/4 p-2.5">
                <option value="">Price</option>
                <option value="100">100</option>
                <option value="1000">1000</option>
                <option value="1500">15000</option>
                <option value="30000">30000</option>
                <option value="100000">100000</option>
            </select>
            <select name="" id="selectCategory" class="bg-gray-50 border border-amber-300 text-gray-900 text-sm rounded-sm focus:ring-blue-500 focus:border-blue-500 w-1/4 p-2.5">
            <?php
                    $test=new categoryController;
                    $post=$test->getCategories();
            foreach ($post as $key => $value) {
                if ($value['hide'] == 0) { ?>
                      <option value="<?= $value['categoryName'] ?>" ><?= $value['categoryName'] ?></option>
                    <?php
                }
            }
                ?>
            </select>
            <input id="submit" value="Filtrer" type="button" class="bg-amber-600 cursor-pointer border font-bold text-white text-sm rounded-sm w-1/6 p-2.5">
        </div>

    </div>
    <div class="all m-14">
        <div class="Home-Category">
            <?php
            $test2 = new productController;
            $post = $test2->getproducts();
            foreach ($post as $key => $value) {
                if ($value['hide'] == 0) { ?>
                    <div class="<?= $value['productCategory'] ?> productss h-80 w-60 border-2 border-solid mx-auto border-amber-100 bg-gray-50">
                        <a href="?p=ProductInfo&id=<?= $value['productId'] ?>">
                            <img src="<?= $value['productPic'] ?>" alt="" class="w-5/6 rounded-sm h-3/6 mx-6 my-4">
                            <h3 class="text-center text-l font-semibold"><?= $value['productName'] ?></h3>
                            <p class="text-sm font-light p-4"><span class="font-medium">Category : </span> <span id="filterCategory"></span> <?= $value['productCategory'] ?></p>
                            <div class="flex space-x-20 items-center">
                                <p class="font-bold px-4 text-lime-500"> <span class="filterPrice"><?= $value['finalPrice'] ?></span> DH</p>
                                <a href="<?php if (isset($_SESSION['clientId'])) { ?>?p=Products&a=shop&pId=<?= $value['productId'] ?>&cId=<?php echo $_SESSION['clientId'];
                    } else {?>?p=Login<?php
                    }?>" class="shop p-2 w-fit rounded-xl hover:text-lime-500 hover:bg-lime-200 bg-lime-500">
                                    <svg class="w-6 h-6 text-white hover:text-lime-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                    </svg>
                                </a>
                            </div>
                        </a>
                    </div>
            <?php }
            } ?>


        </div>
</main>
<?php
include_once 'includes/footer.php'
?>