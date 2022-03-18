<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Proudluhya</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gradient-to-r from-gray-200 to-gray-500 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    <header class="bg-gray-600 py-4">
        <h1 class="no-underline  text-sm font-normal text-gray-100  font-semi-bold p-1 px-2">Proudluhya</h1>
        @if(Route::has('login'))
            <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @auth
                    <a href="{{ url('/home') }}" class="no-underline  text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
                @else
                    <a href="{{ route('login') }}" class="no-underline  text-sm font-normal text-gray-100  font-semi-bold p-1">{{ __('Login') }}</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="no-underline  text-sm font-normal text-gray-100  font-semi-bold p-1">{{ __('Register') }}</a>
                    @endif
                @endauth
                </nav>
            </div>
        @endif
    </header>

    <div class="min-h-screen flex items-center justify-center">
        <div class="flex flex-col justify-around h-full">
            <div class="container px-5 py-24 mx-auto">
                <div class="text-center mb-12">
                    
                    <h1 class="text-2xl md:text-4xl text-gray-700 font-semibold mb-1">The Luhya Community </h1>
                    <h3 class="text-base md:text-lg text-black-700  font-semibold animate-pulse ">(Proudluhya)</h3>
                </div>
                <div class="flex flex-wrap -m-4" >
                    <div class="p-4 sm:w-1/2 lg:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/luhcircum.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                            <div class="p-6 h-full hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                <h2 class="text-base font-medium text-gray-900 mb-1 text-center uppercase font-bold underline p-1 ">Rites of passage</h2>
                                <p class="leading-relaxed mb-3">
                                    The luhya community is characterized by a series of events which make them unique among other tribes in Kenya.
                                    Circumcision is a rite of passage through which one is considered to be a grown up and full member of the society...

                                </p>
                                <hr class="p-2 gray-600 bold">
                                <div class="flex items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0  font-bold">Read more
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="p-4 sm:w-1/2 lg:w-1/3" >
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/couple.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                            <div class="p-6 h-full hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                <h2 class="text-base font-medium text-gray-900 mb-1 text-center uppercase font-bold underline p-1 ">Marriage and Relationships</h2>
                                <p class="leading-relaxed mb-3">
                                    In the luhya community marriage partners must be chosen from outside one’s parents’ clans. 
                                    Traditionally a request for marriage was made between the parents of the man and the woman if the marriage was agreed upon bride wealth of cattle and cash was paid... 
                                  

                                </p>
                                <hr class="p-2 gray-600 bold">
                                <div class="flex items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0  font-bold">Read more
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                   
                    <div class="p-4 sm:w-1/2 lg:w-1/3" >
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/food.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                            <div class="p-6 h-full hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                <h2 class="text-base font-medium text-gray-900 mb-1 text-center uppercase font-bold underline p-1">Food</h2>
                                <p class="leading-relaxed mb-3">
                                    The main food for the Luhya people like most Kenyans is ugali <b>Ovusuma</b>(made from Maize flour, cassava flour, sorghum flour or a mixture) served with vegetables and meat of cattle, goat, fish or chicken, 
                                    hence food production in the region is targeted to meet this need...

                                </p>
                                <hr class="p-2 gray-600 bold">
                                <div class="flex items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="text-blue-500 inline-flex items-center md:mb-2 lg:mb-0  font-bold ">Read more
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="p-4 sm:w-1/2 lg:w-1/3" >
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/religion.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                            <div class="p-6 h-full hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                <h2 class="text-base font-medium text-gray-900 mb-1 text-center uppercase font-bold underline p-1">Religion</h2>
                                <p class="leading-relaxed mb-3">
                                    Traditionally the luhya religion featured animism and spirits they believed in one god known as <b><i>(Nyasaye)</i></b>.
                                    The spirits had positive and destructive powers thus sacrifices were offered inform of goat’s chicken and cattle to appease the spirits...

                                </p>
                                <hr class="p-2 gray-600 bold">
                                <div class="flex items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="text-blue-500 text-bold inline-flex items-center md:mb-2 lg:mb-0 bold  font-bold ">Read more
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                    
                    <div class="p-4 sm:w-1/2 lg:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/mudavadi.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                            <div class="p-6 h-full hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                <h2 class="text-base font-medium text-gray-900 mb-1 text-center uppercase font-bold underline p-1">Political organization</h2>
                                <p class="leading-relaxed mb-3">
                                    Prior to colonial period the highest level of political integration was the clan and the clan headman was the most powerful figure.
                                    The traditional headman system changed in 1926 with the institution of <b><i>milango</i></b> headmen.
                                    Currently villages are headed by Luguru...
                                    
                                    

                                </p>
                                <hr class="p-2 gray-600 bold">
                                <div class="flex items-center flex-wrap">
                                    <a href="{{ route('home') }}" class="text-blue-500 text-bold inline-flex items-center md:mb-2 lg:mb-0 bold  font-bold">Read more
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="p-4 sm:w-1/2 lg:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img src="{{ asset('images/bullfightnoma.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                            <div class="p-6 h-full hover:bg-gray-400 hover:text-white transition duration-300 ease-in cover">
                                <h2 class="text-base font-medium text-gray-900 mb-1 text-center uppercase font-bold underline p-1">Sports and Holidays</h2>
                                <p class="leading-relaxed mb-3">
                                    Numerous games and sports are played by the luhyas especially rugby and soccer.
                                    In Kenya AFC Leopards which is a soccer club formed in 1960s enjoys wider support among the luhyas.
                                    Several indigenous sports i.e., Bullfighting among the idakho and isukha...

                                </p>
                                <hr class="p-2 gray-600 bold">
                                <div class="flex items-center flex-wrap center">
                                    <a href="{{ route('home') }}" class="text-blue-500 text-bold inline-flex items-center md:mb-2 lg:mb-0 bold  font-bold  center">Read more
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                    
                    

                    
                    

                </div>
                        
                    

               
                
                
            </div>
        </div>
    </div>
</div>
</body>
<footer class="bg-gray-600 py-37 mt-37  ">
    <div class="sm:grid grid-cols-3 w-4/5 pb-5 m-auto p-5">
        <div class="p-3">



            <h3 class="text-lxl sm:font-bold text-gray-100 ">
                Proudluhya
            </h3>
            <ul class="py-4 sm:text-s pt-4 text-gray-400 ">
                <li class="pb-1 text-gray-300"> All about the Luhya Community</li>

            </ul>
            
           

            

        </div>
        <div class="p-3">
            <h3 class="text-l sm:font-bold text-gray-100">
                Pages
            </h3>
            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                <li class="pb-1 text-gray-300"><a href="{{ route('home') }}">Home</a></li>
                <li class="pb-1 text-gray-300"><a href="{{ route('posts') }}">Posts</a></li>
                
                               
                
                

            </ul>

            

        </div>
        <div class="p-3">
            <h3 class="text-l sm:font-bold text-gray-100">
                Contact us
            </h3>
            <ul class="py-4 sm:text-s pt-4 text-gray-400">
                <li class="pb-1 text-gray-300 "><a href="mailto:mbarasa454@gmal.com"><b>Address</b> mbarasa454@gmail.com</a></li>
                <li class="pb-1 text-gray-300 "><a href="tel:+254748635972"><b>phone</b> +254748635972</a></li>
                
                
                

            </ul>

            

        </div>
    </div>
    
    

    
    

</footer>
</html>
