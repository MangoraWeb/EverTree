<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Cabin+Condensed" rel="stylesheet">
    <title>EverTree - make the world greener</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>

    <div class="album py-5">
    <div class="box container-fluid ">

                <div class="row">
                        <div class="col-xl-5 col-lg-4 col-md-3 hidden-xs row1">

                          <div class="ever">
                            <div class="header-wrap">
                          
                          
                                    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3">
                                   
                                        <div class="row col-md-12">

                                            <div class="col-md-7">
                                              <nav class="nav d-flex justify-content-between">
                                                <img class="png" src="/img/logo.png"/>
                                                    <a style="margin-right: 190px; margin-top: 8px; text-decoration: none;" class="p-2 text-muted" href="#"><h2 class="activet">EverTree</h2></a>

                                            </nav>
                                            

                                            </div>
                                            
                                            
                                            <div class="col-md-5">

                                            <div style="display:inline-block; margin-top: 5px; float:right;" class="nav justify-content-end">
                                               <a href="#"><div style="float:left;" class="serch">
                                                  <img class="serch" src="evertree/search.png"/>
                                              </div>
                                              </a>
                                              <a style="float:right; text-decoration: none;"  href="#"><h2 class="text1 p-2 text-muted">Մեր մասին</h2></a>

                                            </div>
                                          </div>

                                          </div>
                                        </div>
                                    
    
                            </div>
                        </div>


                        <div class="container">
                          <div class="row">
                            <div class="col-xl-12">
                              
                              <div class="col-md-12 roundeds">
                                <img class="big-logo rounded mx-auto d-block center-block" src="evertree/43333376_579577592462250_96139591630716928_n.png">
                                <p class="headling">ԱՄԵՆ ԹՂԹԻ ԿՏՈՐ ԿՏՐՎԱԾ ԾԱՌԻ ՄԻ ՄԱՍ Է</p>
                              </div>


                              <div class="col-md-12 roundeds">

                                  <h3 class="slogan">
                                   <div style="bottom: 100px; position: relative; left: 50px;" class="pass"> ԱՎԵԼԱՑՐՈւ՛, <br>
                                      ԿՅԱՆՔ<br>
                              <div class="active">ԲՆՈւԹՅԱՆԸ</div><br> </h3>
                              <div style="bottom: 200px; left: 27px;" class="col-md-10 quote">
                                  «  Մարդիկ հավանաբար չգիտեն, որ 60 կիլոգրամ
                                    թուղթը  արժե  մեկ  ծառ։  Թղթի  վերամշակման
                                    ուղղությամբ  այսօր քիչ մարդիկ են աշխատում։
                                    Հանձնելով՝  որպես   աղբ  դիտարկվող  թուղթը,
                                    դուք   կկարողանաք  կյանք  տալ  բնությանը ։ »
                                  </div>
                              <img class="fly" src="evertree/paperfly.png"/>
                             
                              </div>
                             
                                
                            </div>
                          </div>
                        </div>

            
                               
                                 <div class="head">
                                     
            
            
                                       
                                </div>  
            
                                

                        </div>
                        <div class="col-sm-7 row2">
                            
                                <div class="ever">
                                        <div class="header-wrap">
                                      
                                      
                                                <div class="d-flex flex-column flex-md-row p-3 px-md-4 mb-3">
                                               


                                                              <div  style="margin-top:6px;" class="col-sm-5 col-md-8 nav justify-content">

                                                              
                                                                  @foreach($menu as $pages) 

                                                                  <a style="text-decoration: none;" class="p-2 text-muted" href="#">
                                                                    
                                                                      @if(Request::url() === '/')
                                                              
              
                                                                    <h2 class="activet">
                                                                      @else

                                                                      <h2 class="text1">
                                                                        @endif

                                                                      {{$pages['title']}}

                                                                   </h2></a>
   
                                                                @endforeach

                                                               
                                                               
                                  
                                                               
                                                              </div>

                                                              @if (Auth::check())
 
                                                             


                                                              <div class="col-sm-6 col-md-4 nav justify-content-end">
                                                                    <a href="#"> 
                                                                        <img class="avatar" src="evertree/avatar.png"/>
                                                                    </a>
                                                                    <a class="p-2 text-muted" href="#">
                                                                    <h5 style="
                                                                        font-size: 12px;
                                                                    ">{{ Auth::user()->name }} {{ Auth::user()->surname }}
                                                                    </h5>
                                                                    
                                                                    <h6 style="font-size: 11px;">100000 միավոր</h6></a>

                                                                        <a class="p-2 text-muted" href="{{ route('register') }}">
                                                                            <h2 class="text1">  
                                                                                <img style="position:relative; top:5px;" class="settings" src="evertree/settings.png"/>
                                                                            </h2></a>


                                                                         
                                                                        <h2 class="text1">  
                                                                          <div class="settings">
                                                                            <a style="position:relative; top:15px;" class="p-2 text-muted" href="{{ route('logout') }}"
                                                                            onclick="event.preventDefault();
                                                                                          document.getElementById('logout-form').submit();">
                                                                             <img class="logout" src="evertree/exit.png"/>
                                                                            </a>   </div>
         
                                                                        </h2>
                                     
                                                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                             @csrf
                                                                         </form></a>

                                                                  
                                                                   
                                                                              
                                                                  </div>
                                                                </div>

                                                                

                                                                   @else
                                                                   <div style="margin-top: 8px;" class="col-sm-5 col-md-4 nav justify-content-end">
                                                                        <a class="p-2 text-muted" href="{{ route('login') }}"><h2 class="text1">Մուտք</h2></a>
                                                                        <a class="p-2 text-muted" href="{{ route('register') }}"><h2 class="text1">Գրանցվել</h2></a>
                                                                        
                                                                        <div class="flags">
                                                                        <a href="#">
                                                                          <div class="arm d-flex">
                                                                          <img class="armflag " src="evertree/001-armenia.png"/>
                                                                        </a>
                                                                       
                                                                        <a href="#">
                                                                        <div class="eng">
                                                                        <img class="engflag" src="evertree/002-uk.png"/>
                                                                        </div>
                                                                      </a>
                                                                      </div>
                                                                    </div>   </div>


@endif



                                                   
                
                                      
                
                                        </div>
                                    </div>
                                    <div class="coose mx-auto ">


                                        <div class="choose">
                                           <div class="container col-md-8 row-eq-height top">

                                          <div class="col-md-3 bg1 paper  activediv text-center">
                                              <img class="type" src="evertree/activetype.png"/>
                                              <h4 class="papertext active mx-auto">Թղթերի քանակը</h4>
                                            </div>

                                            <div class="col-md-3 bg2 paper text-center">
                                              <img class="type" src="evertree/type.png"/>
                                            </div>

                                            <div class="col-md-3 bg3 paper text-center">
                                              <img class="type" src="evertree/type.png"/>
                                           
                                          </div>


                                          <div class="forms container col-lg-11 ">
                         
                                              <div class="row formbut">
                                                 
                                                <form style="display: inline-flex;" class="col-md-12">
                                                
                                                <div class="col-md-6 flo mb-3">
                                                    <label for="firstName">Քանակը</label>
                                                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                                                    <div class="invalid-feedback">
                                                      Valid first name is required.
                                                    </div>
                                                </div>



                                                <div class="col-md-6 flo mb-3">
                                                    <label for="lastName">Չափման միավորը</label>
                                                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                                                    <div class="invalid-feedback">
                                                      Valid last name is required.
                                                    </div>
                                                </div>
                                                
                                                <button type="button" class="but float-right btn btn-success" >ՀԱՋՈՐԴԸ ></button>

                                              </form>

                                                
                                                </div>
  
  
                                       
  
  
                                    </div>


                                  








                                          </div>

                                          
                                        </div>
                      </div>


                      <a href="#"><div class="rounded-circle contact img-responsive center-block">
                          <img class="chat" src="evertree/chat.png"/>
                      </div></a>
                      

    

    
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
         <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>



        </body>
</html>