<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Small City</title>
    <link rel="stylesheet" href="assets/css/result.css" media="all" />
  </head>
  <body>
    <div id="logo">
      <img src="{{ public_path().'/images/ALClogo.png'}}" id="img">
    </div>
    <div id="header">
      <div id="center">
        Center : ALC Tangier<br>
        Director : *******<br>
        Phone : +212666666666<br>
        Email : email@center.com
      </div>
      <div id="teacher">
        Room : {{$worksheet->room}} - {{$worksheet->level->level}}<br>
        Teacher: {{$user->name}}<br>
        Phone : {{$user->phone}}<br>
        Email : {{$user->email}}
      </div>
    </div>
    @if($array)
      @foreach($array as $random_roleplays)
      <span id="br">----------------------------------------------------------------------------------------------------------------------------------------------------------</span>
      <span id="spn">Worksheet : {{ $loop->iteration }} </span>
        @foreach($random_roleplays as $roleplay)
        <div id="roleplay">
          <div id="name">
            roleplay: {{$roleplay->name}}
          </div>
          <div id="body">
            Body : {!! $roleplay->body !!}
          </div>
        </div>
        @endforeach
      @endforeach
    @endif
  </body>
</html>
