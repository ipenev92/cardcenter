@extends('layouts.app')

@section('content')
<div id="demo" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
    </ul>
    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://www.fowsystem.com/fr/Images/rhl9BAg/bRaTBj6jxtpZhg==/files/TCGFACTORY%20Y%20FOW%20INTERIOR.jpg" alt="Los Angeles" width="100%" height="300">
        </div>
        <div class="carousel-item">
            <img src="https://www.fowsystem.com/fr/Images/rhl9BAg/bRaTBj6jxtpZhg==/files/TCGFACTORY%20Y%20FOW%20INTERIOR.jpg" alt="Chicago" width="100%" height="300">
        </div>
        <div class="carousel-item">
            <img src="https://www.fowsystem.com/fr/Images/rhl9BAg/bRaTBj6jxtpZhg==/files/TCGFACTORY%20Y%20FOW%20INTERIOR.jpg" alt="New York" width="100%" height="300">
        </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev" href="#demo" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
    </a>
</div>
<div class="flex-container-main" style="margin:0">
    <div style="width:50%">
        <h1>Lastt Add</h1>
    </div>
    <div style="width:50%">
        <h1>Best Price</h1>
    </div>
</div>
<div class="flex-container-main">
    <div class="flex-container-main">
        @php ($i=0)
        @foreach ($all_cards as $item)
            @if($i<3)
                <div>
                    <a href="{{url('view/'.$item->id)}}" ><img src="{{$item->src}}" class="img-main"></a>
                    <br>
                    <b>{{$item->name}}</b>
                    <br>
                    <b class="titels">{{$item->expansion}}-{{$item->number}} ({{$item->rarity}})</b>
                    @php($i++)
                </div>
            @endif
        @endforeach
    </div>
    <div class="flex-container-main">
        @php($j=0)
        @foreach ($cardlist as $item)
        @if($j<3)
        <div>
            @foreach($all_cards as $img)
            @if($item->name == $img->name)
            <a href="{{url('view/'.$img->id)}}"><img src="{{$img->src}}" class="img-main"></a>
            @endif
            @endforeach
            @php($j++)
            <br>
            <b class="titles">{{$item->name}}</b>
            <br>
            <b class="titles">{{$item->price}}€ / unit</b>
            @endif
        </div>
        @endforeach
    </div>
</div>
</div>
<div class="flex-container-main" style="margin-top:0">
    <div style="width:50%;">
        <table>
            @php ($i=0)
            @foreach($all_cards as $item)
            @php($i++)
            @if($i>3)
            <tr>
                <td>{{$i}}</td>
                <td><a href="{{url('view/'.$item->id)}}" ><i class="fas fa-images"></i></a></td>
                <td>{{$item->name}}</td>
                <td>{{$item->expansion}}-{{$item->number}} ({{$item->rarity}})</td>
            </tr>
            @endif
            @endforeach
        </table>
    </div >
    <div style="width:50%">
        <table>
            @php ($j=0)

            @foreach($cardlist as $item)
            <tr>
                @php($j++)
                @if($j>3)
                <td>{{$j}}</td>
                @foreach($all_cards as $img)
                @if($item->name == $img->name)
                <td>
                    <a href="{{url('view/'.$img->id)}}"><i class="fas fa-images" ></i></a>
                </td>
                @endif
                @endforeach     
                <td>{{$item->name}}</td>
                <td>{{$item->price}}€ / unit</td>
            </tr>
            @endif
            @endforeach
        </table>
    </div>
</div>
</div>
@stop