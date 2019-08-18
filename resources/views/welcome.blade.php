<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    
    </head>
    <body>
       
                <!-- @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post->id}}</th>
                   
                    <td>{{ substr($post->title, 0, 30)}} {{strlen($post->title) > 30 ? "...." : ""}}</td>
                    <td>{{ substr($post->body, 0, 50)}} {{strlen($post->body) > 50 ? "...." : ""}}</td>
                    <td>{{ date('M j, Y', strtotime( $post->created_at))}}</td>
                    <td> 
                      
                    </td>
                </tr>
                @endforeach -->
    </body>
</html>
