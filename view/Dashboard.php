<script src="https://cdn.tailwindcss.com?<?php time() ?>"></script>
<div class="flex ">
<div class="sideBar transition-all duration-300 ease-linear w-[60px] flex flex-col h-screen p-2 top-0 bg-sky-900 px-2 border-r border-gray-700 relative">
  <div id="btnDashboard" class="absolute cursor-pointer text-white rounded-lg left-[99%] p-2 bg-sky-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
</svg>
</div>
    <div class="flex flex-col items-center mt-6 -mx-2">
        <img src="public/img/Profile/507-1664881372-removebg-preview.png" class="image object-cover w-24 h-24  mx-2 rounded-full h-8 w-8" alt="Avatar" />
        <h4 class="side hidden mx-2 mt-2 font-medium text-white">Elasri Abdelillah</h4>
    </div>

    <div class="flex flex-col justify-between flex-1 mt-6">
        <div>
            <a href="?p=Dashboard&pd=commands" class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-lg text-white hover:bg-gray-100 hover:bg-gray-800 hover:text-gray-200 " >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
    </svg>

                <span class="side hidden mx-4 font-medium">Commands</span>
            </a>

            <a href="?p=Dashboard&pd=clients" class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-lg text-white hover:bg-gray-100 hover:bg-gray-800 hover:text-gray-200" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
    </svg>

                <span class="side hidden mx-4 font-medium">Clients</span>
            </a>

            <a  href="?p=Dashboard&pd=product" class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-lg text-white hover:bg-gray-100 hover:bg-gray-800 hover:text-gray-200" >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 ">
      <path stroke-linecap="round" stroke-linejoin="round" d="M21 7.5l-9-5.25L3 7.5m18 0l-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9" />
    </svg>

                <span class="side hidden mx-4 font-medium">Products</span>
            </a>

            <a  href="?p=Dashboard&pd=categories" class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-lg text-white hover:bg-gray-100 hover:bg-gray-800 hover:text-gray-200" >
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
    </svg>

                <span class="side hidden mx-4 font-medium">Categories</span>
            </a>
            <a href="?p=home" class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-lg text-white hover:bg-gray-100 hover:bg-gray-800 hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                        <span class="side hidden mx-4 font-medium">Home</span>
                    </a>
                    <a href="?p=home&a=Logout" class="flex items-center px-2 py-2 mt-5 transition-colors duration-300 transform rounded-lg text-white hover:bg-gray-100 hover:bg-gray-800 hover:text-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 9V5.25A2.25 2.25 0 0013.5 3h-6a2.25 2.25 0 00-2.25 2.25v13.5A2.25 2.25 0 007.5 21h6a2.25 2.25 0 002.25-2.25V15m3 0l3-3m0 0l-3-3m3 3H9" />
                        </svg>
                        <span class="side hidden mx-4 font-medium">Logout</span>
                    </a>
        </div>
    </div>
</div>


<main class="all mx-4 w-full h-screen overflow-auto ">
<?php 

  if(isset($_GET['pd'])&&$_GET['p']=='Dashboard'){
  $dashboardPages = ['commands', 'clients', 'categories', 'product'];
  if(in_array($_GET['pd'],$dashboardPages)){
    require './view/'.$_GET['pd'].'Dashboard.php';
  }else require './view/productDashboard.php';
  }else require './view/productDashboard.php';
?>  
  </div>
  </div>
  </div>
</main>
<script>
  var side = document.querySelectorAll('.side');
  var btn = document.getElementById('btnDashboard');
  var sideBar = document.querySelectorAll('.sideBar');
  var image = document.querySelectorAll('.image')
  btn.addEventListener('click',e=>{
    image[0].classList.toggle('w-8');
    image[0].classList.toggle('h-8');
    if (sideBar[0].classList.contains('w-[60px]')) {
      sideBar[0].classList.replace('w-[60px]','w-60');
    }else sideBar[0].classList.replace('w-60','w-[60px]');
    
    for(var i in side){
      side[i].classList.toggle('hidden');
    }
  })

</script>