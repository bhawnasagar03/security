 <!-- @if (Route::has('login'))
    <section class="filter-bar">
    @if(Auth::check())
            <div class="container gutter">
                <div class="row gutter">
                <div class="col-md-2 gutter">
                <div class="menu-bar">
                <nav>
                 <script>
                    $(document).ready(function(){
                      $(".menu").hide();
                         });
                   $(document).ready(function(){
                       $(".button").click(function(){
                           $(".menu").toggle(
                            "slow");
                       });
                   });
                   </script>
                   <button --><!--  class="button"><i class="fa fa-bars"></i></button> -->
                  <!--  <ul class="menu">
                   <li><a href="#">Notifications</a></li>
                   <li><a href="#">Contacted Guard</a></li>
                   <li>
                   <a href="{{ route('getWishlist') }}">Wishlist
                         -->   <!-- <i class="fa fa-heart"></i> -->
                         <!--    <span class="badge badge-pill badge-light">{{ Session::has('wishlist') ? Session::get('wishlist')->totalQty : '' }}</span>
                        </a>
                   </li>
                   </ul>
                   </nav>
                </div>
            </div>
           
                    <div class="col-md-8 gutter">
                        <div class="tabs">
                           <h2>Filter:-</h2>
                           <div>
                            <select class="Type" id="jobType_id">
                                <option  value="0" disabled="true" selected="true">Select Job Type</option>
                                @foreach($data as $loc)
                                    <option value="{{$loc->guardProfile->id}}">{{$loc->guardProfile->jobType}}</option>
                                @endforeach
                            </select>
                           </div>
                            <select class="location" name="location" id="location_id">
                                <option value="0" disabled="true" selected="true">-Select Location- </option>
                     
                            </select>
                            <select class="Time">
                                <option>Select Time</option>
                                <option>Morning</option>
                                <option>Evening</option>
                                <option>Night</option>
                            </select>
                            <select class="price" id="price">
                                <option>Price</option>
                                <option value="$100">$100</option>
                                <option value="$200">$200</option>
                                <option value="300">$300</option>
                                <option value="150">$150</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-2 gutter">
                        <div class="tabs">
                            <a href="{{route('home')}}" id="newsfeed">Find me a Guard</a>
                           <!--  <button id="newsfeed"href="{{route('home')}}">Find me a Guard</button> -->
                     <!--    </div>
                       
                    </div>
                </div>
            </div>
             @endif
             @endif -->
           
       <!--  </section>  -->-->