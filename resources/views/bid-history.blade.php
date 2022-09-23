
<style>
    table, th, td {
        border: 1px solid black;
    }
    th, td {
        padding: 15px;
    }
</style>
@foreach($holidaysWithNestedBids as $holidayWithNestedBids)
    @foreach($holidayWithNestedBids as $keys => $values)
        @if($keys == 'title')
            <h1>{{$values}}</h1>
        @endif
        @if(is_array($values))
            @foreach($values as $bids)
                @foreach($bids as $biddingItem)
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">Start Date</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Comment</th>
                            <th scope="col">Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                    <td>{{$biddingItem['created_at']}}</td>
                    <td>{{$biddingItem['name']}}</td>
                    <td>{{$biddingItem['designation']}}</td>
                    <td>{{$biddingItem['email']}}</td>
                    <td>{{$biddingItem['phone']}}</td>
                    <td>{{$biddingItem['comment']}}</td>
                    <td>{{$biddingItem['amount']}}</td>
                        </tr>
                        </tbody>
                    </table>
                @endforeach
            @endforeach
        @endif
    @endforeach
@endforeach


