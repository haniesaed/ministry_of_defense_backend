
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="{{route('advertisements.create')}}">Create news</a>
                    <br>
                    <a href="{{route('happens.create')}}">Create news</a>
                    <br>
                    <a href="{{route('newss.create')}}">Create news</a>
                    <br>
                    <a href="{{route('services.create')}}">Create news</a>


                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <br>
                
    
</div>



                    

                    {{ __('You are logged in!') }}
                    

                </div>
            </div>
        </div>
    </div>
</div>
