<script src="https://cdn.tailwindcss.com"></script>
<center>
    <div class="AddProduct w-1/3">
        <h1 class="text-xl font-semibold text-sky-800 my-8">Add Product</h1>
        <form action="?p=Dashboard&a=addCategory" method="post" enctype="multipart/form-data" class="border p-6">

            <!-- <label class="block">
                <span class="sr-only">Choose Category pic</span>
                <input type="file" name="categoryPic" required class="block w-full text-sm text-sky-700
              file:mr-4 file:py-2 file:px-4
              file:rounded-full file:border-0
              file:text-sm file:font-semibold
              file:bg-sky-50 file:text-sky-700
              hover:file:bg-sky-100
            " />
            </label> -->
            <label class="block">
                <span class="sr-only">Category Name</span>
                <input type="text" name="categoryName" required placeholder="Category Name" class="block px-2 border w-full text-sm text-sky-700 h-10 rounded-sm my-4 px-2
            " />
            </label>
            <label class="block">
                <span class="sr-only">Category Description</span>
                <textarea name="categoryDescription" required placeholder="Description" class="block border border w-full text-sm text-sky-700 h-20 rounded-sm my-4 px-2" id="" cols="30" rows="10">
            Category Description
            </textarea>
            </label>


            <input type="submit" name="submit" class="w-full bg-sky-800 rounded-xl font-bold text-white h-8 cursor-pointer hover:bg-sky-700 " value="Submit">
        </form>
</center>