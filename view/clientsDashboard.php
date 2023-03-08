<div id="Clients">
    <p class="font-medium text-lg text-center color-gray-500 mt-4">Your Clients</p>
    <hr class="color-gray-900 mt-4">
    <?php
    $test3 = new clientController;
    $post = $test3->getClient();
    $i = 1;
    foreach ($post as $key => $value) { ?>

      <div class="flex justify-between p-4 max-sm:flex-col">
        <p class="text-md font-medium my-auto">#<?= $i; ?></p>
        <p class="text-md font-medium hover:font-bold my-auto"><?= $value['fullName'] ?></p>
        <p class="text-md text-gray-400 my-auto"><?= $value['phoneNumber'] ?></p>
        <p class="text-md text-gray-400 my-auto"><?= $value['email'] ?></p>
      </div>
      <hr class="color-gray-900">

    <?php
      $i++;
    }
    ?>
  </div>