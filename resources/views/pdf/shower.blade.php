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
            <div class="date">Created At {{$shower->created_at}}</div>
          </div>
        </div>
        <table border="0" cellspacing="0" cellpadding="0">
          <thead>
            <tr>
              <th class="no">#</th>
              <th class="desc">NAME & EMAIL</th>
              <th class="unit">CLASS</th>
              <th class="qty">TEACHER</th>
              <th class="unit">LEVEL</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="no">{{$shower->id}}</td>
              <td class="desc"><h3>{{$shower->name}}</h3>{{$shower->email}}</td>
              <td class="unit">{{$shower->class}}</td>
              <td class="qty">{{$shower->teacher}}</td>
              <td class="unit">{{$shower->level_id}}</td>
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

    <!--
    <header class="clearfix">
      <div id="logo">
        <img src="img/logopdf.png">
      </div>
      <div id="company">
        <h2 class="name">Small City</h2>
        <div>American Language Center, Tangier, Morocco</div>
        <div>212 5399-33616</div>
        <div><a href="#">Msassi@mohamed.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">Administration Of: </div>
          <h2 class="name">American Language Center</h2>
          <div class="address">1, Street Emsallah, 90000 - Tangier</div>
          <div class="email"><a href="#">info@alctangier.org</a></div>
        </div>
        <div id="invoice">
          <h1>ALC Tangier</h1>
          <div class="date">  Annex : 6 Av. Prince Heritier, level 2, Tangier, Morocco</div>
          <div class="date">+212 539 936 716</div>
        </div>
      </div>
      <!--<table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th class="noo">Image</th>
            <th class="desc">Name</th>
            <th class="unit">Email</th>
            <th class="qty">Stars</th>
            <th class="total">Class</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no"><img id="noo" src="images/{{ $shower->name }}"></td>
            <td class="desc">{{ $shower->name }}</td>
            <td class="unit">{{ $shower->email }}</td>
            <td class="qty">{{ $shower->stars }}</td>
            <td class="total">{{ $shower->class }}</td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td colspan="2">EMAIL ID</td>
            <td>{{$shower->id}}</td>
          </tr>
        </tfoot>
      </table>
      <table>
        <div id="band">
          Name : {{ $shower->name }}
        </div>
      </table>
      <div id="thanks">Thank you!</div>
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">The backend of the application was created by the web developer Merghad Abdennour.</div>
      </div>
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>-->
      </body>
</html>
