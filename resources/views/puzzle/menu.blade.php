
                                                              <div  style="margin-top:6px;" class="col-sm-5 col-md-8 nav justify-content">

                                                              
                                                                    @foreach($menu as $pages) 
  
                                                                    <a style="text-decoration: none;" class="p-2 text-muted" href="#">
                           
                                                                     
                                                                         
                                                                          @if( $pages['slug'] == '/handstep')
  
                                                                          <h2 class="active text1">
                                                                            
                                                                            @else 
  
                                                                            <h2 class="text1">
  
                                                                            @endif
                                                                        {{$pages['title']}}
  
                                                                     </h2></a>
     
                                                                  @endforeach
  
                                                                 
                                                                 
                                    
                                                                 
                                                                </div>