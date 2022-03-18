@extends('layouts.app')

@section('content')

    

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-gray-700 border-gray-600 bg-gray-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm sm:shadow-lg">

          

            <div class="min-h-screen flex items-center justify-center  bg-gradient-to-r from-gray-200 to-gray-500">
                <div class="flex flex-col justify-around h-full">
                    <div class="container px-5 py-24 mx-auto">
                        <div class="flex justify-center rounded-lg mb-12 px-2 ">
                            
                           <table class="border-2 border-gray-900 rounded-lg sm:w-1/2 lg:w-8/12">
                                <tbody>
                                    <tr class="hover:bg-gray-600 hover:text-white">
                                        <td class="font-bold  p-2 border-2 border-gray-200 border-opacity-60">Pronunciation</td>
                                        <td class=" p-2 border-2 border-gray-200 border-opacity-60">LOO-ee-ah</td>
                                        
                                    </tr>
                                    <tr class="hover:bg-gray-600 hover:text-white">
                                        <td class="font-bold  p-2 border-2 border-gray-200 border-opacity-60">Alternate Names</td>
                                        <td class=" p-2 border-2 border-gray-200 border-opacity-60">Luyia,Abaluhya</td>
                                        
                                    </tr>
                                    <tr class="hover:bg-gray-600 hover:text-white">
                                        <td class="font-bold   p-2 border-2 border-gray-200 border-opacity-60">Religion</td>
                                        <td class="  p-2 border-2 border-gray-200 border-opacity-60">Christianity,Islam,Indigenous beliefs</td>
                                        
                                    </tr>
                                    <tr class="hover:bg-gray-600 hover:text-white">
                                        <td class="font-bold  p-2 border-2 border-gray-200 border-opacity-60">Person</td>
                                        <td class=" p-2 border-2 border-gray-200 border-opacity-60">Omuluyia</td>
                                        
                                    </tr>
                                    <tr class="hover:bg-gray-600 hover:text-white">
                                        <td class="font-bold   p-2 border-2 border-gray-200 border-opacity-60">People</td>
                                        <td class=" p-2 border-2 border-gray-200 border-opacity-60">Abaluyia</td>
                                        
                                    </tr>
                                    <tr class="hover:bg-gray-600 hover:text-white">
                                        <td class="font-bold  p-2 border-2 border-gray-200 border-opacity-60">Language</td>
                                        <td class=" p-2 border-2 border-gray-200 border-opacity-60">Oluluyia <i>(Several bantu dialects)</i></td>
                                        
                                    </tr>
                                    <tr class="hover:bg-gray-600 hover:text-white">
                                        <td class="font-bold  p-2 border-2 border-gray-200 border-opacity-60">Location</td>
                                        <td class="  p-2 border-2 border-gray-200 border-opacity-60">Ebuluyia <i>(Western part of Kenya)</i></td>
                                    </tr>
                                    
                                    
                                </tbody>
                           </table>

                        </div>
                        <div class="flex flex-wrap -m-4">
                            <div class="p-4 sm:w-1/2 lg:w-1/3">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/house.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Location Language and Folklore</h2>
                                        <p class="leading-relaxed mb-3">
                                            The luhya people settlement area is in what was formerly western province and Nyanza province. 
                                            The luhya migration into the rift valley is recent after independence when firms formerly occupied by colonial white settlers were bought by, or given back to, indigenous (native) Africans. 
                                            Western Kenya is one of the most densely populated parts of Kenya. The word <b>Luhya</b> refers to the people and <b>Luyia</b> refers to the Language. 
                                            There is no single luhya language rather there are several mutually understood dialects that are principally Bantu. Luhya names have specific meanings. 
                                            Children are named after climatic seasons, and also after their ancestors.
        
                                        </p>
                                       
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3" id="rites">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/luhcircum.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Rites of passage</h2>
                                        <p class="leading-relaxed mb-3 ">
                                            The luhya community is characterized by a series of events which make them unique among other tribes in Kenya.
                                            Circumcision is a rite of passage through which one is considered to be a grown up and full member of the society.
                                            You cannot be a man prior to initiation. The ceremony which takes place every even year is a sign of bravery that everyone has to undergo to be considered a grown up in the society. 
                                            The process involves a series of events which include singing and dancing while the uncircumcised <b>(omusinde)</b> plays the jiggles <b>(chinyimba)</b> before actual circumcision takes place.
        
                                        </p>
                                       
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3" id="marriage">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/couple.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Marriage and Relationships</h2>
                                        <p class="leading-relaxed mb-3">
                                            In the luhya community marriage partners must be chosen from outside one’s parents’ clans. 
                                            Traditionally a request for marriage is made between the parents of the man and the woman if the marriage was agreed upon bride wealth of cattle and cash was paid. 
                                            Nowadays young people get married on their own with little input from their parents. Dating among the luhya is informal and not publicly displayed especially among teenagers. 
                                            Bride wealth differed from place to place, those representing the boy took what they had to the girl’s home where they met her parents and relatives. 
                                            A party was usually prepared and during that time important matters concerning the dowry was discussed. Items of dowry were cows bulls and goats.
        
                                        </p>
                                        
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/luhyaartifact.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Cultural Heritage</h2>
                                        <p class="leading-relaxed mb-3">
                                            Music and dance are an important part of the life of the luhya community.
                                            children sing songs and dance for play. Occasions such as weddings, funerals, circumcision and sports i.e., bullfighting are accompanied by singing and dancing.
                                            Musical instrument includes drums jiggles and flute. Luhyas are nationally renowned for their <b><i>isukuti</i></b> dance a celebratory performance involving rapid squatting and rising accompanied by rhythmic drumbeats.
                                            Some of the luhyas who have held high-profile in Art, Music and media include: <b>Bien-Aime-Baraza</b> sauti sol band member, <b>Yolanda Masinde</b> Miss world finalist (2000), <b>Gloria Muliro</b> Kenyan gospel artist. <b>Daddy Owen</b> Musician.
        
                                        </p>
                                       
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3" id="food">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/food.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Food</h2>
                                        <p class="leading-relaxed mb-3">
                                            The main food for the Luhya people like most Kenyans is ugali <b>Ovusuma</b> <i>(made from Maize flour, cassava flour, sorghum flour or a mixture)</i> served with vegetables and meat of cattle, goat, fish or chicken, hence food production in the region is targeted to meet this need.
                                            Chicken is a delicacy among the Luhya people, and it is a small leap from raising subsistence chickens to commercial chicken. While everyone speaks their language, food and commercial farming are very unifying endeavors, the language or dialect people speak do not define what they grow or raise – economics and proximity to market determine that.
                                            The main cooking utensils are pots made of steel or other metals.
        
                                        </p>
                                        
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3" id="Religion">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/religion.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Religion</h2>
                                        <p class="leading-relaxed mb-3">
                                            Traditionally the luhya religion featured animism and spirits they believed in one god known as <b><i>(Nyasaye)</i></b>.
                                            The spirits had positive and destructive powers thus sacrifices were offered inform of goat’s chicken and cattle to appease the spirits.
                                            Christianity was first introduced in the early 1900s by missionaries and majority of them converted to Christians <b><i>(Catholicism and Protestantism)</i></b>, Islam is also practiced in the luhya community.
                                            Despite conversion to Christianity, they have maintained some of their traditional beliefs blended with their more modern biblical beliefs thus some still consult witchdoctors when faced with problems.
                                            Some of the luhyas who have held high-profile in Religion include: <b>Festo Habakkuk Olang'</b> First African Archbishop of the Anglican Church of kenya. <b>Maurice Michael Otunga</b> Catholic Cardinal. <b>Eliud Wabukala</b> Kenyan Anglican Archbishop.
        
                                        </p>
                                       
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3"  id="political">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/mudavadi.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Political organization</h2>
                                        <p class="leading-relaxed mb-3">
                                            Prior to colonial period the highest level of political integration was the clan and the clan headman was the most powerful figure.
                                            The traditional headman system changed in 1926 with the institution of <i>milango</i> headmen.
                                            Currently villages are headed by Luguru, sublocation by assistant chiefs and location by chiefs.
                                            The luhya like any other community in Kenya exercise their democratic right by electing their leader of choice.
                                            The community is known for uniting and voting as a group for a specific political candidate and due to this and their high population numbers politicians scramble for the luhya votes.
                                            Some of the luhyas who have held high-profile political offices include, Musalia Mudavadi <b>(deputy prime minister)</b> and vice president <b>(sept 2002-Dec2002)</b> Michael Wamalwa Kijana <b>(vice president january2003-August2003)</b>
                                            Moody Awori <b>(vice president(september2003-jauary2008)</b>, Amos Wako <b>(Attorney General)</b> Kenneth Marende <b>(Speaker of the National Assembly)</b> and Zachaias Chesoni <b>(late former chief justice)</b>.
        
                                        </p>
                                      
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3"  id="sports">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/bullfightnoma.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Sports and Holidays</h2>
                                        <p class="leading-relaxed mb-3">
                                            Numerous games and sports are played by the luhyas especially rugby and soccer.
                                            In Kenya AFC Leopards which is a soccer club formed in 1960s enjoys wider support among the luhyas.
                                            Several indigenous sports i.e., Bullfighting among the idakho and isukha which happens on some Saturdays and public holidays at Malinya grounds, Kakamega.
                                            The event is popular among the locals and also attracts tourists. The event marked key events in the community such as funerals and also promoted peace. Other sports include netball and school-based sports e.g., track-and-field events.
                                            Children sports includes jumping rope among girls which is sometimes accompanied by rhythmic songs and hide and-seek which is played by both girls and boys. Some of the luhyas who have held high-profile in sports include <b>Victor Wanyama</b>, footballer <b>Ann Wafula </b> MBE, British Paralympic wheelchair racer.
                                           <b> Allan Wanga</b>, Kenyan footballer, <b>Collin Injera</b>, Kenyan rugby player, <b>Humphrey Kayange</b>, Kenyan rugby player. The Luhya people celebrate the national holidays of Kenya along with the rest of the nation. 
        
                                        </p>

                                        
                                       
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/burial.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Burial Ceremonies and rituals</h2>
                                        <p class="leading-relaxed mb-3">
                        

                                            The luhya community has its own way of celebrating the lives of the diseased,
                                            traditionally luhya people preserved the diseased in wet sand or charcoal and used animal skins to wrap their bodies which were later placed in reeds that acted as casket.
                                            It takes three days for a child’s funeral and about a week for an adult and during this period people will camp in the home of the deceased to sooth the bereaved.
                                            During this mourning period everyone views the body, grieves, and pays their respects. mourners are served meat such as cow goat and chicken <b><i>(Ingokho)</i></b> served with ugali <b><i>(obusuma)</i></b> or rice and vegetables.
                                            Local brew such as Chang’aa and busaa are also served. Senior community members are buried in front of the main house on the right-hand side and their spouses on the left-hand side beside their husbands.
                                            Girls who die in their parents’ home before they get married are buried behind the house near the fence or in banana plantations because they are considered as foreigners. After burial there is memorial service for 
                                            remembrance of the diseased and during this time mourners shave their head and personal belonging of the diseased are shared among family members.
                                            
                                            
                                            

        
                                        </p>
                                       
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/teacher.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class="p-6 h-full bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Education</h2>
                                        <p class="leading-relaxed mb-3">
                                            At independence, Kenya inherited a system of education designed to serve the interests of the colonizers: and it was elitist and politicized. 
                                            It ignored indigenous knowledge systems and focused on academic achievement as an end in itself. Until recently where <b>competence-based curriculum (CBC)</b> was introduced that puts emphasis on learners’ unique talents and abilities rather than focusing wholly on academic performances. 
                                            Children typically start school when they are 6 or 7, though some parents keep them at home longer to help care for farm animals. The literacy rate <b>(percentage of the population able to read and write)</b> among the Luhya is close to that of the country as a whole. Literacy among women is slightly lower than among men.
        
                                        </p>
                                       
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/luhyasubtribes.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class=" h-full p-6 bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Luhya Subtribes</h2>
                                        <p class="leading-relaxed mb-3">

                                            Luhyas are the second largest among the tribes in Kenya,They are based in the western part of kenya,each sub-tribe practices its own dialect of the luhya language.
                                            They include Bukusu<b>(Aba-Bukusu)</b>, Maragoli<b>(Aba-Logoli)</b>, Banyala<b>(Aba-nyala)</b>, Banyore<b>(Aba-nyore)</b>, Batsotso<b>(Abatsotso)</b>, Gisu, Idakho<b>(Av-Idakho)</b>, Isukha<b>(Av-Isukha)</b>,
                                            Kabras<b>(Aba-Kabras)</b>, Khayo<b>(Aba-Khayo)</b>, Kisa<b>(Aba-Kisa)</b>, Marachi<b>(Aba-Marachi)</b>, Marama<b>(Aba-Marama)</b>, Masaaba, Samia<b>(Aba-samia)</b>, Tachoni<b>(Aba-Tachoni)</b>, Tiriki<b>(Aba-tiriki)</b>,
                                            and Wanga<b>(Aba-wanga)</b>.

        
                                        </p>
                                        
        
                                    </div>
        
                                </div>
        
                            </div>
                            <div class="p-4 sm:w-1/2 lg:w-1/3">
                                <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                                    <img src="{{ asset('images/issues.jpg') }}" alt="image" class=" lg:h-72 md:h-48 w-full object-cover object-center ">
                                    <div class=" h-full p-6 bg-gray-300 hover:bg-gray-400 hover:text-white transition duration-300 ease-in">
                                        <h2 class="text-base font-bold text-gray-900 mb-1 text-center uppercase underline p-1">Current issues affecting the luhya people</h2>
                                        <p class="leading-relaxed mb-3">
                                            Luhya groups lack traditional chieftainship thus being organized into more or less politically autonomous patrilineal lineages each associated with a stretch of land.
                                            High rate of population growth has led to limited availability of arable land, with land shortage there has been considerable tribal interspersal.
                                            The Luhya community are struggling to maintain their culture due to encroaching modernity and intermarriage with other communities.
                                            Health problems arising from native diseases and Problems of alcoholism exists among the luhya community.
        
                                        </p>
                                        
        
                                    </div>
        
                                </div>
        
                            </div>
                          
                             
                        </div>

                        <hr class="gray-400 p-2">

                       

                        <div class=" p-3">
                            
                            

                            <div class="flex justify-center rounded-lg bg-gray-300">
                                
                                <div class="  p-4 rounded-lg sm:w-1/2 lg:w-8/12 " id="mik">
                                    <div class="p-2">
                                        <h1 class="text-2xl md:text-4xl text-gray-700  pb-4 text-center text-blue-500 uppercase"> Luhya Sub-tribes and their culture</h1>
                                    </div>
                                    <hr class="bold gray-600 p-2">
                                    <form  method="POST" action="{{ route('home') }}">
                                        @csrf

                                        <div class="mb-4">
                                            <label for="subtribe" class="sr-only">subtribe</label>
                                            <select name="subtribe" id="subtribe"  class=" border-2 hover:bg-gray-200 p-4 rounded-lg  @error('subtribe') border-red-500 @enderror">
                                                <option value="Kisa">Kisa</option>
                                                <option value="Bukusu">Bukusu</option>
                                                <option value="Maragoli">Maragoli</option>
                                                <option value="Banyala">Banyala</option>
                                                <option value="Banyore">Banyore</option>
                                                <option value="Batsotso">Batsotso</option>
                                                <option value="Gisu">Gisu</option>
                                                <option value="Idakho">Idakho</option>
                                                <option value="Isukha">Isukha</option>
                                                <option value="Kabras">Kabras</option>
                                                <option value="Khayo">Khayo</option>
                                                <option value="Kisa">Kisa</option>
                                                <option value="Marachi">Marachi</option>
                                                <option value="Marama">Marama</option>
                                                <option value="Samia">Samia</option>
                                                <option value="Tachoni">Tachoni</option>
                                                <option value="Tiriki">Tiriki</option>
                                                <option value="Wanga">Wanga</option>
                                                <option value="Masaaba">Masaaba</option>
                                            </select>
                                        </div>
                                    
                                        <div class="mb-4">
                                            <label for="description"  class="sr-only">description</label>
                                    
                                            <textarea  name="description" id="description" cols="30" rows="4" 
                                                class=" border-2 w-full p-4 rounded-lg @error('description') border-red-500 @enderror"
                                                placeholder="culture,values and norms" ></textarea>
                                            
                                    
                                            @error('description')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                            @enderror
                                        </div>
                                        <div class="p-2">
                                            <button type="submit" class="bg-gray-500  bg-transparent hover:bg-gray-900 
                                            text-gray-100 text-xs py-3 rounded-lg overflow-hidden border-opacity-60 px-6 ">Post</button>
                                        </div>
                                    
                                        
                                        
                                    </form>

                                   <div >
                                       <div>
                                            @if ($subtribs->count())
                                                @foreach ($subtribs as $subtrib )
                                                    <div class="mb-4 p-1 ">
                                                
                                                            <div class="bg-gray-200 p-1 rounded-lg border-opacity-60 overflow-hidden">
                                                                        <div class="bg-gradient-to-r from-gray-200 to-gray-500 p-2  h-full w-full font-bold rounded-lg">
                                                                            <span class="font-bold p-2">
                                                                                {{ $subtrib->user->name }}
                                                                            </span>{{$subtrib->created_at->diffForHumans() }}
                                                                        </div>

                                                                   

                                                                    <div class="p-2">
                                                                        <h1 class="mb-2 text-blue-700  font-semibold text-1xl">{{ $subtrib->subtribe}} sub-tribe</h1>
                                                                        <h2 class="mb-2 text-blue-700  text-1xl">Their culture:</h2>
                                                                        <p>{{ $subtrib->description }}</p>
                                                                    </div>

                                                                @if ($subtrib->ownedBy(auth()->user()))
                                                                    <div>
                                                                        <form action="{{ route('subtrib.destroy', $subtrib)}}" method="POST">
                                                                            @csrf
                                                                            @method('DELETE')
                                                                            <button type="submit" class=" font-bold  
                                                                            text-blue-600 text-xs py-3  px-2 hover:bg-gray-300 rounded-lg">Delete</button>
                                                                        
                                                                        </form> 
                                                                    </div>
                                                                    
                                                                @endif

                                                                
                                    
                                                            
                                                
        
                                                
                                                            </div>
                                
                                                    </div>
                        
                                                
                                                @endforeach

                                                {{ $subtribs->links() }}

                                                
                                                

                                            @else
                                            
                                                <p class="italic text-red-500 bg-gray-200 p-3 rounded-lg">
                                                    There are no posts currently!
                                                </p>
                                                
                                            @endif
                                       </div>
                                   </div>

                                </div>

                                

                            </div>
                     </div>

                       
                       
                        

                    </div>
                   
                </div>
                
                
            </div>
            
        </section>
        
    

@endsection
