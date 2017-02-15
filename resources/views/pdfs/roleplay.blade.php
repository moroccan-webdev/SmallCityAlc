<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Small City</title>
    <link rel="stylesheet" href="assets/css/pdf.css" media="all" />
  </head>
    <body>
      <header class="clearfix">
        <div id="logo">
          <img src="{{ public_path().'/images/ALClogo.png'}}">
        </div>
        <div id="company">
          <h2 class="name"></h2>
          <div></div>
          <div></div>
          <div><a href="#"></a></div>
        </div>
        </div>
      </header>
      <main>
        <div id="details" class="clearfix">
          <div id="client">
            <div class="to">Administrator Of:</div>
            <h2 class="name">ALC</h2>
            <div class="address"> 1, Street Emsallah, Tanger Morocco</div>
            <div class="email"><a href="#">info@alctangier.org</a></div>
          </div>

          <div id="invoice">
            <h1>ALC Tangier</h1>
            <div class="date">Date  07th february, 2017</div>
            <div class="date">Created At {{$roleplay->created_at}}</div>
          </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th class="no">#</th>
              <th class="desc">NAME & BODY</th>
                <th class="unit">CITY</th>
              <th class="qty">CENTER</th>
              <th class="unit">LEVEL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="no">{{$roleplay->id}}</td>
              <td class="desc"><h3>{{$roleplay->name}}</h3>{{strip_tags($roleplay->body)}}</td>
              <td class="unit">{{$roleplay->city}}</td>
              <td class="qty">{{$roleplay->center}}</td>
              <td class="unit">{{$roleplay->level->level}}</td>
            </tr>
          </tbody>
        </table>
        <div id="thanks">Thank you!</div>
        <div id="notices">
          <div>NOTICE:</div>
          <div class="notice">Small City is desined to allow our student to practice practice speaking skills in real life situations.</div>
        </div>
      </main>
      <footer>
        Invoice was created on a computer and designed designed by Mohamed Msassi.
      </footer>
      </body>
</html>
