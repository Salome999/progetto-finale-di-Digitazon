@extends('layouts.app')
@section('content')
    <div class="title"><br><br><br><br><br>
        <h1>Come aprire un food blog
            </h1><br><br>
            <h3>e unirti alla più grande community di creator e influencer food in Italia</h3>
            <h3>Blog di cucina Giallozafferano, spazio illimitato per le tue ricette</h3>
            <button  type="button" class="btn btn-warning"><a class="link" href="{{ url('/contacts') }}">Crea food blog</a></button>
    </div>
    <div class="cards">
        <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://images.unsplash.com/photo-1490914327627-9fe8d52f4d90?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzV8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title">Food blogger italiani</h2><br><br>
                  <p class="card-text"><h3> struttura tecnologica del tuo blog di ricette è pronta per essere usata.
                    I temi proprietari Design Seamless sono perfetti per la visualizzazione da mobile, veloci e scorrevoli.</h3></p><hr><br><br>
                    <h2 class="card-title">I WordPress custom post type ricetta e lista comunicano a Google i dati strutturati, aiutando il posizionamento delle tue ricette.</h2><br><br>
                  <p class="card-text"><h3> Hai a disposizione un esclusivo qualificatore delle ricette per fornire informazioni preziose sui macronutrienti ai tuoi visitatori.</h3></p><hr><br>
                    <button  type="button" class="btn btn-warning"><a class="link" href="{{ url('/contacts') }}">Crea food blog</a></button>
                </div>
              </div>
            </div>
          </div>
          <br><br>
          <div class="card mb-3" style="max-width: 100%;">
            <div class="row g-0">
              
              <div class="col-md-8">
                <div class="card-body">
                  <h2 class="card-title">Come diventare creator e food influencer</h2><br><br>
                  <p class="card-text"><h3> sIl mercato degli influencer food è in forte crescita e avere un blog food Giallozafferano è un’ottima rampa di lancio!
                    Per guadagnare come food influencer non servono milioni di follower, ma genuinità e contatto con il tuo pubblico
                    
                    </h3></p><hr><br><br>
                    <h2 class="card-title">Puoi entrare in contatto con importanti aziende e diventare Creator Food per Giallozafferano</h2><br>
                  <p class="card-text"><h3> Un food blogger cresce grazie al traffico che porta Google e alle community che riesce a creare sui social network

                </h3></p><hr><br><br>
                    <button  type="button" class="btn btn-warning"><a class="link" href="{{ url('/contacts') }}">Crea food blog</a></button>
                </div>
                
              </div>
              <div class="col-md-4" >
                <img src="https://images.unsplash.com/photo-1624462966627-f93795ad656d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mzd8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="img-fluid rounded-start" alt="...">
              </div>
            </div>
          </div><br><br>
          <div class="support">
            <h1 style="text-align: center; ">Supporto e formazione dedicata</h1>
            <button  type="button" class="btn btn-warning"><a class="link" href="{{ url('/contacts') }}"> Crea food blog</a></button>
          </div>
    </div>
    <div class="text-center">
        <img src="https://images.unsplash.com/photo-1548324428-df2464eeae6f?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NjR8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="rounded" alt="...">
        <img src="https://images.unsplash.com/photo-1604740795024-c06eeca4bf89?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTR8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="rounded" alt="...">
        <img src="https://images.unsplash.com/photo-1454944338482-a69bb95894af?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NTh8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="rounded" alt="...">
        <img src="https://images.unsplash.com/photo-1481671703460-040cb8a2d909?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDV8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="rounded" alt="...">
        <img src="https://images.unsplash.com/photo-1613844237701-8f3664fc2eff?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NDd8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60" class="rounded" alt="...">
      </div>
@endsection

<style>
    .title {
        text-align: center;
        background-image: url("https://images.unsplash.com/photo-1576659185898-ed54d56a55c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mjl8fGZvb2QlMjBibG9nfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=800&q=60");
        height: 35em;
        background-size: cover;
    }
    .btn {
        margin-top: 30px;
    }
    .cards {
        text-align: center;
    }
   .support {
    background-color: rgb(237, 231, 231);
    height: 20vh
   }
   .link {
    text-decoration: none;
    color: black;
   }
   .rounded {
        height: 200px;
        width: 200px
    }

</style>

