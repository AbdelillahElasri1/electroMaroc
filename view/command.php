<?php
include_once 'includes/header.php';
?> 
<p class="font-medium text-lg text-center color-gray-500 mt-28">Your Orders</p>
    <hr class="color-gray-900 mt-4">
<div class="relative overflow-auto h-screen mx-4 shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Orders
                </th>
                <th scope="col" class="px-6 py-3">
                    order status
                </th>
                <th scope="col" class="px-6 py-3">
                    Creation Date
                </th>
                <th scope="col" class="px-6 py-3">     
                    sending date
                </th>
                <th scope="col" class="px-6 py-3">     
                    delivery date
                </th>
                <th scope="col" class="px-6 py-3">
                    Total Price
                </th>
                <th scope="col" class="px-6 py-3">
                    Validation
                </th>
            </tr>
        </thead>
        <tbody>
        <?php
      $test = new orderController;
      $post = $test->orderInfo();
      $i=1;
        foreach ($post as $key => $value) {
            if ($value['clientId'] == $_SESSION['clientId']) {
                ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    order N°<?= $i ?>
                </th>
                <td class="px-6 py-4">
                    <?=!empty($value['orderStatus']) ? $value['orderStatus'] : 'In progress...'; ?>
                </td>
                <th scope="col" class="px-6 py-3 font-medium">
                <?=!empty($value['dateOfCreation']) ? $value['dateOfCreation'] : 'Creation Date'; ?> 
                </th>
                <th scope="col" class="px-6 py-3 font-medium">     
                <?=!empty($value['sendingDate']) ? $value['sendingDate'] : 'sending date'; ?>
                </th>
                <th scope="col" class="px-6 py-3 font-medium">     
                <?=!empty($value['deliveryDate']) ? $value['deliveryDate'] : 'delivery date'; ?> 
                </th>
                <td class="px-6 py-4 font-medium">
                    $<?= $value['total'] ?>
                </td>
                <td class="px-6 py-4 flex justify-between">
                    <div class="flex space-x-2">
                        <a href="?p=Dashboard&pd=commands&status=in&id=<?= $value['commandID'] ?>" class="rounded-lg p-[4px] hover:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                           <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        </a>
                        <a href="#" class="rounded-lg p-[4px] hover:bg-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                       </a>
                       

                    </div>
                    
                </td>
            </tr>
<?php $i++;
            }
            } ?>
        </tbody>
    </table>
</div>
<?php 
  include_once 'includes/footer.php'
?>