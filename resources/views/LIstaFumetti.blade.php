<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics-List</title>
</head>
    <body>
        
    
        @extends('layout.app')


        @section('content')
        <h1>Lista Fumetti</h1>
        <div class='cont'>
            
                @foreach ($Comics as $Comic)
                <div class='fumetti'>
                    <img src="{{$Comic['thumb']}}" alt=""> 
                    <h3>{{$Comic['title']}}</h3>
                    <span>{{$Comic['series']}}</span>
                    <span>{{$Comic['type']}}</span>

                </div>
                @endforeach

            
        </div>
        
        @endsection
        
        
    
    
    
    
    
    
    
    </body>
</html>