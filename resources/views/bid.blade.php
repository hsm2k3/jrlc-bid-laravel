@section('content')
    <div>
        @foreach($bids as $bid)
            <div>{{$bid->name}}</div>
        @endforeach
    </div>
@endsection
