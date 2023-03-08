<script src="https://cdn.tailwindcss.com"></script>
<p class="font-medium text-lg text-center color-gray-500 mt-4">Your Orders</p>
    <hr class="color-gray-900 mt-4">
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Orders
                </th>
                <th scope="col" class="px-6 py-3">
                    Client
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
      $client = new clientController;
      $test = new orderController;
      $post = $test->orderInfo();
      $i=1;
        foreach ($post as $key => $value) { ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    order N°<?= $i ?>
                </th>
                <td class="px-6 py-4">
                    <?= $client->getOneClient($value['clientId']) ?>
                </td>
                <td class="px-6 py-4">
                    <?= !empty($value['orderStatus'])? $value['orderStatus'] :'In progress...' ; ?>
                </td>
                <th scope="col" class="px-6 py-3 font-medium">
                <?= !empty($value['dateOfCreation'])? $value['dateOfCreation'] :'Creation Date' ; ?> 
                </th>
                <th scope="col" class="px-6 py-3 font-medium">     
                <?= !empty($value['sendingDate'])? $value['sendingDate'] :'sending date' ; ?>
                </th>
                <th scope="col" class="px-6 py-3 font-medium">     
                <?= !empty($value['deliveryDate'])? $value['deliveryDate'] :'delivery date' ; ?> 
                </th>
                <td class="px-6 py-4 font-medium">
                    $<?= $value['total'] ?>
                </td>
                <td class="px-6 py-4 flex justify-between">
                    <div class="flex space-x-2">
                        <a href="?p=Dashboard&pd=commands&status=Valid&id=<?=$value['commandID']?>" class="rounded-lg p-[4px] hover:bg-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 109.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1114.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125z" />
                            </svg>
                        </a>
                        <a href="?p=Dashboard&pd=commands&status=in&id=<?=$value['commandID']?>" class="rounded-lg p-[4px] hover:bg-gray-300">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                        </a>
                        <a href="#" class="rounded-lg p-[4px] hover:bg-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                       </a>
                       
                        <a href=""></a>
                    </div>
                    
                </td>
            </tr>
<?php $i++; } ?>
        </tbody>
    </table>
</div>
