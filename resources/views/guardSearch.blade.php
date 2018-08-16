<section class="filter-bar">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="tabs">
                    <form action="{{url('/search/guards')}}" method="post">
                        {{ csrf_field() }}
                        <h2>Filter:-</h2>
                        <select class="loccation" name="location">
                            <option value="0">Select Location</option>
                            @foreach($data as $loc)
                            <option value="{{$loc->PreferedLocation->user_id}}">{{$loc->PreferedLocation->loc1}}</option>
                            <option value="{{$loc->PreferedLocation->user_id}}">{{$loc->PreferedLocation->loc2}}</option>
                            <option value="{{$loc->PreferedLocation->user_id}}">{{$loc->PreferedLocation->loc3}}</option>
                            <option value="{{$loc->PreferedLocation->user_id}}">{{$loc->PreferedLocation->loc4}}</option>
                            @endforeach
                        </select>
                        <select class="Type" name="jobType">
                            <option value="0">Select job type</option>
                            @foreach($data as $type)
                            <option value="{{$type->GuardProfile->user_id}}">{{$type->GuardProfile->jobType}}</option>
                            @endforeach
                        </select>
                </div>
            </div>
            <div class="col-md-4">
            <div class="tabs">
            <button id="newsfeed">find guard</button>
            </form>
            </div>
            </div>
        </div>
    </div>
</section>