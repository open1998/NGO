<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hope horizon</title>
    @vite (['resources/js/app.js', 'resources/css/app.css'])

</head>

<body class="bg-primary h-screen bg-cover bg-center bg-no-repeat"
style="background-image: url('{{ asset('images/bg.jpg') }}')">
<header class="w-full header rounded-b-lg bg-white/70 ">
    <nav class="flex w-full 2xl:w-7xl mx-auto justify-between items-center space-y-2 p-4">
    <div class="flex items-center space-x-2">
        <img  class="w-12 "src="{{ asset('images/logo/logo.png') }}" alt="logo">
       <p>Hope Horizon</p> 
    </div>
   <ul class=" flex mx-auto space-x-4 ">
    <li> <a href="Home" class="hover:text-green-600">Home</a></li>
    <li> <a href="About Us" class="hover:text-green-600">About Us</a> </li>
    <li><a href="Our Causes" class="hover:text-green-600">Our Causes</a> </li>
    </li><a href="Stories" class="hover:text-green-600">Stories</a></li>
    </ul>

    <div>
        <a href="#Donate Now" class="block bg-gray-300 p-3 rounded-full hover:text-green-600">Donate Now</a>
        
    </div>
    </nav>
    </header>

   <main>
     <section>

     <div class="relative h-screen flex flex-col items-center justify-center">
        <h1 class="text-6xl font-extrabold mb-4 text-white">
            Welcome to <span class="text-green-600">Green World</span>
        </h1>

        <p class="text-2xl mx-auto text-white">
           Be a part of the solution, not part of the pollution
        </p>

        
        <div class="flex flex-row space-x-2.5">
            <a href="#Explore"
           class="mt-8 block text-lg bg-gray-300 p-3 rounded-full hover:text-green-600">
            Explore More
        </a>
        <a href="#Causes"
           class="mt-8 block text-lg bg-gray-300 p-3 rounded-full hover:text-green-600">
            View Causes
        </a>
        </div>
        </section>

        <section>

        <div class="-mt-16">
        <div class="bg-white rounded-b-xl grid grid-cols-4 text-center py-6 w-full  ">
           
        <div>
            <h3 class="text-blue-600 text-2xl font-bold">50k+</h3>
            <p class="text-sm text-gray-500">Lives Impacted</p>
        </div>
        <div>
            <h3 class="text-blue-600 text-2xl font-bold">120</h3>
            <p class="text-sm text-gray-500">Projects Done</p>
        </div>
        <div>
            <h3 class="text-blue-600 text-2xl font-bold">800+</h3>
            <p class="text-sm text-gray-500">Volunteers</p>
        </div>
        <div>
            <h3 class="text-blue-600 text-2xl font-bold">15</h3>
            <p class="text-sm text-gray-500">Years Active</p>
        </div>
        </div>
        
        </section>
        <section class="bg-gray-300 pt-32 pb-20">
        <div class="mx-auto px-6 text-center">

            <h2 class="text-3xl font-bold mb-4">
                Why We Do What We Do
            </h2>

            <p class="text-gray-600 max-w-2xl mx-auto mb-12">
                We believe that every human being deserves a dignified life.
                Our mission is to bridge the gap between resources and needs.
            </p>

            
            <div class="grid grid-cols-3 gap-8">

                
                <div class="bg-white rounded-xl p-6">
                    <div class="w-10 h-10 bg-blue-200 rounded-lg flex items-center justify-center mb-4 mx-auto">
                      
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Sustainability</h3>
                    <p class="text-sm text-gray-600">
                        We focus on long-term solutions, ensuring communities can
                        thrive independently after our projects conclude.
                    </p>
                </div>

               
                <div class="bg-white rounded-xl p-6 ">
                    <div class="w-10 h-10 bg-blue-200 rounded-lg flex items-center justify-center mb-4 mx-auto">
                        
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Healthcare</h3>
                    <p class="text-sm text-gray-600">
                        Providing essential medicines and health checkups to remote
                        villages where access is scarce.
                    </p>
                </div>

             
                <div class="bg-white rounded-xl p-6 ">
                    <div class="w-10 h-10 bg-blue-200 rounded-lg flex items-center justify-center mb-4 mx-auto">
                        
                    </div>
                    <h3 class="font-semibold text-lg mb-2">Education</h3>
                    <p class="text-sm text-gray-600">
                        Building schools and providing supplies to ensure every child
                        has the power of knowledge.
                    </p>
                </div>

            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-20">
    <div class=" mx-auto px-6">

        
        <div class="flex items-center justify-between mb-10">
            <div>
                <h2 class="text-2xl font-bold text-gray-900">Featured Causes</h2>
                <p class="text-gray-500 text-sm mt-1">
                    Help us reach our goals. Your donation goes directly to the field.
                </p>
            </div>

            <a href="#causes" class="text-blue-600 text-sm font-medium hover:underline">
                View All Causes →
            </a>
        </div>

        
        <div class="grid grid-cols-3 gap-8">

            
            <div class="bg-white rounded-xl ">
                <img src="" class="h-44 w-full object-cover" alt="Education">

                <div class="p-5">
                    <span class="text-xs text-blue-600 font-semibold">Education</span>

                    <h3 class="font-semibold text-lg mt-2">Books for Bright Minds</h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Provide textbooks and stationery to 500 rural students.
                    </p>

                   

                    <button class="mt-5 w-full border border-blue-600 text-blue-600 py-2 rounded-full text-sm font-medium hover:bg-blue-600 hover:text-white ">
                        Donate Now
                    </button>
                </div>
            </div>

            
            <div class="bg-white rounded-xl">
                <img src="" class="h-44 w-full object-cover" alt="Water">

                <div class="p-5">
                    <span class="text-xs text-green-600 font-semibold">Clean Water</span>

                    <h3 class="font-semibold text-lg mt-2">Clean Water Initiative</h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Solar-powered water pumps in drought areas.
                    </p>

                    

                    <button class="mt-5 w-full border border-green-600 text-green-600 py-2 rounded-full text-sm font-medium hover:bg-green-600 hover:text-white ">
                        Donate Now
                    </button>
                </div>
            </div>

            
            <div class="bg-white rounded-xl ">
                <img src="" class="h-44 w-full object-cover" alt="Food">

                <div class="p-5">
                    <span class="text-xs text-orange-600 font-semibold">Hunger Relief</span>

                    <h3 class="font-semibold text-lg mt-2">Feed a Family</h3>

                    <p class="text-sm text-gray-600 mt-2">
                        Monthly food rations for families affected by floods.
                    </p>

                    

                    <button class="mt-5 w-full border border-orange-600 text-orange-600 py-2 rounded-full text-sm font-medium hover:bg-orange-600 hover:text-white ">
                        Donate Now
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="bg-[#0b4a6f] py-24 text-center text-white">
    <div class="mx-auto px-6">

        <h2 class="text-2xl font-semibold mb-10">Stories of Change</h2>

        <div class="text-5xl text-blue-300 mb-6">“</div>

        <p class="text-lg italic mb-8">
            Before Hope Horizon came to our village, we had to walk 5 miles for water.
            Now, my children can go to school instead of fetching water.
            It changed everything.
        </p>

        <p class="font-semibold">
            Amina K.
        </p>

        <p class="text-sm text-blue-200 uppercase">
            Beneficiary, Clean Water Project
        </p>
    </div>
</section>

   </main>
    
</body>
</html>
   
       