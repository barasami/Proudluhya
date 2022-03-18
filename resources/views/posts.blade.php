<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proudluhya</title>

    <script src="{{ asset('js/app.js') }}" defer></script>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class=" bg-gradient-to-r from-gray-200 to-gray-500 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-gray-600 py-4">
            <div class="container mx-auto flex justify-between items-center px-4">
                <div>
                    <a href="{{ url('/home') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        Home
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span>{{ Auth::user()->name }}</span>

                        <a href="{{ route('logout') }}"
                           class="no-underline "
                           onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endguest
                </nav>
            </div>
        </header>
    </div>
    <div class="flex justify-center p-3 rounded-lg" id="mypost">
        <div class="p-4 rounded-lg sm:w-1/2 lg:w-8/12">
            <form  method="POST" action="{{ route('posts') }}">
                @csrf
            
                <div class="mb-4">
                    <label for="body" class="sr-only">body</label>
            
                    <textarea  name="body" id="body" cols="30" rows="4" 
                        class=" border-2 w-full p-6  rounded-lg   @error('body') border-red-500 @enderror"
                        placeholder="post anything about the luhya community!" ></textarea>
                    
            
                    @error('body')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                <div>
                    <button type="submit" class="bg-gray-600  bg-transparent hover:bg-gray-900 
                    text-gray-100 text-xs py-3 rounded-lg overflow-hidden border-opacity-60 px-6 ">Post</button>
                </div>
            
                
                
            </form>
    
        </div>
    
    </div>
    <div>
        <div class="flex justify-center  rounded-lg">
            <div class="p-4 rounded-lg sm:w-1/2 lg:w-8/12  ">
               @if ($posts->count())
                    @foreach ($posts as $post )
                        <div class="mb-4">
                    
                                <div class="bg-gray-200  rounded-lg border-opacity-60 overflow-hidden p-2 ">
                                       <div class="bg-gradient-to-r from-gray-300 to-gray-500 p-2  h-full w-full font-bold rounded-lg">
                                            <span class=" text-blue-500 p-2">
                                                {{ $post->user->name }}
                                            </span>{{$post->created_at->diffForHumans()  }}
                                       </div>
                                    
                                        <p class="mb-2 text-gray-700 p-1  ">
                                            {{ $post->body }}
                                        </p>
                                            <div class="flex items-center">
                                                @if(!$post->liked(auth()->user()))
                                                    <form action="{{ route('liky',$post->id) }}" method="POST" class="mr-1">
                                                        @csrf
                                                        <button type="submit" class="text-blue-500  py-3 px-2">Like</button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('liky',$post->id) }}" method="POST" class="mr-1">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="text-blue-500 py-3 px-2">Unlike</button>
                                                    </form>
                                                @endif

                                                <span class="text-blue-500 ">{{ $post->likes->count() }} {{ Str::plural('like',$post->likes->count()) }}</span>
                                                
                                            </div>
                                            @can('delete',$post)
                                                <form action="{{ route('posts.destroy', $post)}}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class=" bg-transparent 
                                                    text-blue-500 text-1xl  py-3 px-2 hover:bg-gray-300 rounded-lg">Delete</button>
                                                
                                                </form> 
                                                
                                            @endcan
                                    
                                       
                                        
                                    
                    
                                </div>
    
                        </div>

                        
                    @endforeach

                    {{$posts->links()}}

                   

                   
    
             
    
                   
                   
    
                @else
                
                    <p class="italic text-red-500 bg-gray-200 p-3 rounded-lg">
                     There are no posts currently!
                    </p>
    
                @endif
                
            </div>

            
          
        </div>
        
    
    </div>
    
</body>
</html>