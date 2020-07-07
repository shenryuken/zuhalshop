@extends('themes.colorAdmin.app')

@section('content')
 {{--    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">Dashboard</div>

            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                You are logged in!
                <br>
                You are from {{Auth::user()->country->name }} <br>
                @forelse(auth()->user()->referrals() as $referral)
                    <h4>
                        {{ $referral->name }}
                    </h4>
                @empty
                    No referrals
                @endforelse
                <br>
                Referred By:{{auth()->user()->referrer->name}}
            </div>
        </div>
    </div> --}}
    <div class="row">
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-blue md:inline-block">
                <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                <div class="stats-info">
                    @if(Auth::user()->type == 1)
                    <h4>TOTAL MEMBERS</h4>
                    <span><p>{{App\User::where('type','>',1)->count()}}</p></span>  
                    @else
                    <h4>TOTAL REFERRALS</h4>
                    <span><p>{{Auth::user()->referrals()->count()}}</p></span>
                    @endif
                </div>
                <div class="stats-link">
                    <a href="{{url('members')}}">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-orange">
                <div class="stats-icon"><i class="fa fa-users"></i></div>
                <div class="stats-info">
                    <h4>TOTAL SALES</h4>
                    <p>1,291,922</p>    
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-info">
                <div class="stats-icon"><i class="fa fa-link"></i></div>
                <div class="stats-info">
                    <h4>TOTAL ORDERS</h4>
                    @if(Auth::user()->isAdmin())
                    <p>{{App\Models\Order::count()}}</p>
                    
                    @else
                    <p>{{Auth::user()->orders()->count()}}</p>  
                    @endif
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
        <!-- begin col-3 -->
        <div class="col-xl-3 col-md-6">
            <div class="widget widget-stats bg-red">
                <div class="stats-icon"><i class="fa fa-clock"></i></div>
                <div class="stats-info">
                    <h4>TOTAL PAYOUT</h4>
                    <p>00:12:23</p> 
                </div>
                <div class="stats-link">
                    <a href="javascript:;">View Detail <i class="fa fa-arrow-alt-circle-right"></i></a>
                </div>
            </div>
        </div>
        <!-- end col-3 -->
    </div>
@endsection
