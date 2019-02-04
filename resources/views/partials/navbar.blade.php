@if(Auth::check())
<navbar-component-user
    brand="{{config('app.name', 'Laravel')}}"
    :user="{{Auth::user()}}"
    :routes="{home : '{{url('/')}}', logout : '{{route('logout')}}' }"
    token='@csrf'
></navbar-component-user>
@else
<navbar-component-guest
    brand="{{config('app.name', 'Laravel')}}"
    :routes="{home : '{{url('/')}}', login : '{{route('login')}}', register : '{{route('register')}}' }"
></navbar-component-guest>
@endif