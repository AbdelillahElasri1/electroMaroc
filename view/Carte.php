<?php
include_once 'includes/header.php';
?>
<div class="w-full sm:px-6 my-40">
<a href="?p=command" class="bg-sky-500 py-2 px-4 text-white font-bold rounded-md">See Your Commands</a>
    <form action="?p=Carte&a=Confirm" class="my-4" method="POST">
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100  rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <p tabindex="0" class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800 flex"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 my-auto">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                    </svg>Carte</p>
            </div>
        </div>
        <div class="bg-white   shadow px-4 md:px-10 pt-4 md:pt-7 pb-5 overflow-y-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr tabindex="0" class="focus:outline-none h-16 w-full text-sm leading-none text-gray-800 ">
                        <th class="font-normal text-left pl-4">Product</th>
                        <th class="font-normal text-left pl-12">Quantite</th>
                        <th class="font-normal text-left pl-12">Unit Price</th>
                        <th class="font-normal text-left pl-20"></th>
                    </tr>
                </thead>
                <tbody class="w-full">
                    <?php
                    $test2 = new carteController;
                    $post = $test2->productInCarte();
                    foreach ($post as $key => $value) {
                        if ($value['hide'] == 0) {
                    ?>
                    
                            <tr class="focus:outline-none h-20 text-sm leading-none text-gray-800  bg-white   hover:bg-gray-100 ay-900  border-b border-t border-gray-100 -700 ">
                                <td class="pl-4 cursor-pointer">
                                    <div class="flex items-center">
                                        <div class="w-10 h-10">
                                            <img class="w-full h-full" src="<?= $value['productPic'] ?>" />
                                        </div>
                                        <div class="pl-4">
                                            <p class="font-medium"><?= $value['productName'] ?></p>
                                            <p class="text-xs leading-3 text-gray-600 00  pt-2"><?= $value['productCategory'] ?></p>
                                        </div>
                                    </div>
                                </td>
                                <td class="pl-12">
                                    <input class="quan text-sm border w-20 font-medium leading-none text-gray-800" type="number" value="1" min="1" placeholder="Quantite" name="<?='quantite'.$value['productId']?>">
                                </td>
                                <td class="pl-12">
                                    <p class="font-medium"> <span class="finalPrice"><?= $value['offrePrice'] ?></span> DH</p>
                                </td>
                                <td class="pl-20">
                                    <a href="?p=carte&a=c&id=<?= $value['productId']?>" class="text-red-600 hover:bg-red-200 p-2 rounded-lg font-medium">Cancel</a>
                                </td>
                            </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="px-4 md:px-10 py-4 md:py-7 bg-gray-100  rounded-tl-lg rounded-tr-lg">
            <div class="sm:flex items-center justify-between">
                <div class="flex max-sm:flex-col">
                    <p class="font-medium my-auto text-lg">Total Price :<span id="carteTotale">0</span> DH</p>
                    <a id="Calc" class="focus:ring-2 w-fit focus:ring-offset-2 focus:ring-sky-400 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-sky-500 hover:bg-sky-400 cursor-pointer focus:outline-none rounded">
                        <p class="text-sm font-medium leading-none text-white">calcul Total</p>
                    </a>
                    <input value="Confirm Order" type="submit" name="Confirm" class="focus:ring-2 w-fit focus:ring-offset-2 focus:ring-sky-600 inline-flex sm:ml-3 mt-4 sm:mt-0 items-start justify-start px-6 py-3 bg-sky-700 hover:bg-sky-600 focus:outline-none rounded text-sm font-medium leading-none text-white">
                </div>
            </div>
        </div>
    </form>
</div>
<?php
include_once 'includes/footer.php'
?>