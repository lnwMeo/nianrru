@include('layout.mainheadder')

<body class="bg-hero-bgindex bg-cover">
    

<div class="flex justify-center mt-36">

    <div class="w-full max-w-sm p-4 rounded-lg shadow sm:p-6 md:p-8 dark:bg-gray-800/50 ">
        <form class="space-y-6 font-body" action="#">
            <h5 class="text-4xl font-medium text-gray-900 dark:text-white">Login NIA</h5>
            <div>
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Username" required />
            </div>
            <div>
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
            </div>
         
            <button type="submit" class=" w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
            <div class="text-sm font-medium text-gray-500 dark:text-gray-300 text-center">
               
            </div>
        </form>
    </div>
</div>

 


</body>