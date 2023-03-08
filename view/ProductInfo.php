<?php
include_once 'includes/header.php';
$test=new productController;
?> 
    </header>
    
    <main class="mx-10 my-24 max-sm:mx-2 flex max-lg:flex-col">
        <img class="w-1/2 mx-auto" src="<?=($test->select('productPic',$_GET['id']))['productPic']?>" alt="">
        <div class="w-full mt-10">
            <h3 class="text-3xl font-bold text-center"><?=($test->select('productName',$_GET['id']))['productName']?></h3>
            <p class="m-8 font-light text-gray-00"><?=($test->select('description',$_GET['id']))['description']?></p>
            <div class="mx-4">
                <p><span class=" font-bold text-lg p-4">Category :</span><?=($test->select('productCategory',$_GET['id']))['productCategory']?></p>
                <p><span class=" font-bold mt-8 text-lg p-4">Reference :</span><?=($test->select('referenceProduct',$_GET['id']))['referenceProduct']?></p>
                <label for="" class="font-bold mt-8 text-lg p-4 ">Quantite :</label>
                <input type="number" class=" form-control w-40 px-3  text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600focus:outline-none
                "
                placeholder="Quantite"
              />
                <div class="flex justify-center  max-sm:space-x-4 mt-10 space-x-20 items-center items-center">
                    <p class="font-bold max-sm:text-2xl text-3xl px-4 text-lime-500">999 DH</p>
                    <div class="shop flex max-sm:px-5 max-sm:text-sm px-10 text-white font-bold p-2 w-fit rounded-xl hover:text-lime-500 hover:bg-lime-200 bg-lime-500">
                    <svg class="w-6 h-6 text-white hover:text-lime-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg><span class="max-sm:hidden">Add To Carte</span> 
             </div>
            </div>
            

        </div>
    </main>
    
    <?php 
  include_once 'includes/footer.php'
?>