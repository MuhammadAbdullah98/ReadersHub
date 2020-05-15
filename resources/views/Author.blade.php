@extends('layouts.app')

@section('content')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="row bootstrap snippets">
    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="" class="img-md img-circle img-border mar-btm" src="images/569.jpg">
          <h4 class="mar-no">Khaled Hosseini</h4>
          <p>Novelist</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            Khaled Hosseini, Afghan-born American novelist who was known for his vivid depictions of Afghanistan, most notable in The Kite Runner (2003).
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="" class="img-md img-circle img-border mar-btm" src="images/download (1).jpg">
          <h4 class="mar-no">Suzanne Collins</h4>
          <p>American television writer</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            Suzanne Collins is an American television writer and author. She is known as the author of The New York Times best-selling series The Underland Chronicles and The Hunger Games trilogy.
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="Avatar" class="img-md img-circle img-border mar-btm" src="images/J._D._Salinger_(Catcher_in_the_Rye_portrait).jpg">
          <h4 class="mar-no">J. D. Salinger</h4>
          <p>American writer</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            Jerome David Salinger was an American writer best known for his novel The Catcher in the Rye. Salinger published several short stories in Story magazine in the early 1940s before serving in World War II.
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="" class="img-md img-circle img-border mar-btm" src="images/Stephenie_Meyer_by_Gage_Skidmore.jpg">
          <h4 class="mar-no"><a href="{{url('viewprofile')}}">Stephenie Meyer</a></h4>
          <p>American Novelist</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            Stephenie Meyer is an American novelist. She is best known for her vampire romance series Twilight, which has sold over 100 million copies.with translations into 37 different languages.
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="" class="img-md img-circle img-border mar-btm" src="images/JRR-Tolkien.jpg">
          <h4 class="mar-no">J. R. R. Tolkien</h4>
          <p>Writer</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            John Ronald Reuel Tolkien CBE FRSL was an English writer, poet, philologist, and academic. He was the author of the classic high fantasy works The Hobbit and The Lord of the Rings
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="" class="img-md img-circle img-border mar-btm" src="images/download (2).jpg">
          <h4 class="mar-no">Veronica Roth
            </h4>
          <p>American novelist</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            Veronica Anne Roth is an American novelist and short story writer, known for her debut New York Times bestselling Divergent trilogy, consisting of Divergent, Insurgent, and Allegiant.
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="" class="img-md img-circle img-border mar-btm" src="images/Shot_D_021_V2L-copy-1.jpg">
          <h4 class="mar-no"> J.K. Rowling</h4>
          <p>British author</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            Joanne Rowling CH, OBE, HonFRSE, FRCPE, FRSL, better known by her pen name J. K. Rowling, is a British author, film producer, television producer, screenwriter, and philanthropist.
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>
    <div class="col-md-3">
        <div class="panel text-center">
        <div class="panel-body">
          <img alt="Avatar" class="img-md img-circle img-border mar-btm" src="images/Zusak_Jacket-Photo-Cropped_Elena-Seibert.jpg">
          <h4 class="mar-no">Markus Zusak</h4>
          <p>Australian-German writer</p>
        </div>
        <div class="pad-all">
          <p class="text-muted">
            Markus Zusak is an Australian writer of German origin. He is best known for The Book Thief and The Messenger, two novels which became international bestsellers.
          </p>
          <div class="pad-btm">
            <button class="btn btn-primary">+Follow</button>

          </div>
        </div>
      </div>
    </div>

</div>

@endsection
