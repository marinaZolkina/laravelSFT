<h1 class="my-4">Leangue table:</h1>
<table class="table">
    <thead>
    <tr>
        <th scope="col">Teams</th>
        <th scope="col">PTS</th>
        <th scope="col">P</th>
        <th scope="col">W</th>
        <th scope="col">D</th>
        <th scope="col">L</th>
        <th scope="col">GD</th>
    </tr>
    </thead>
    <tbody>
    @foreach($leangue as $leang)
        <tr>
            <td>{{$leang->name}}</td>
            <td>{{$leang->PTS}}</td>
            <td>{{$leang->P}}</td>
            <td>{{$leang->W}}</td>
            <td>{{$leang->D}}</td>
            <td>{{$leang->L}}</td>
            <td>{{$leang->GD}}</td>
        </tr>
    @endforeach
    </tbody>
</table>
<h1 class="my-4">Match Results:</h1>
<p>{{$week}} week</p>
<table class="table">
    <tbody>
    @foreach($matches as $match)
        <tr>
            <td>{{$match['home_name']}}</td>
            <td>{{$match['home_result']}}</td>
            <td>-</td>
            <td>{{$match['visit_result']}}</td>
            <td>{{$match['visit_name']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
<h1 class="my-4">Percentages:</h1>
<p>{{$week}} week</p>
<table class="table">
    <tbody>
    @foreach($percentages as $percentage)
        <tr>
            <td>{{$percentage->name}}</td>
            <td>%{{$percentage->percentage}}</td>
        </tr>
    @endforeach
    </tbody>
</table>


