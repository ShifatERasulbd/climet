
@php
    $news = App\Models\news::orderby('id','DESC')->get();

@endphp


<li class="nav-item dropdown">
                                                <div class="container-one single-menu-btn">
                                                    <div class="single-menu">
                                                        <a class="nav-link" href="#">News</a>
                                                        <!-- <span class="sub_heading">Sub Heading Here ........</span> -->
                                                    </div>
                                                </div>
                                                <div class="menucontent">
                                                    <div class="description news position-relative">
                                                        <div class="description-wrap">
                                                            <ul class="news-list">
                                                        
                                                             
                                                              
                                                                @foreach($news as $news)
                                                                <li>
                                                                    <div class="container-one">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="single-news">
                                                                                    <div class="single-menu-btn2">
                                                                                        <h3>{{$news->title}}</h3>
                                                                                                <span>{{$news->publish_date}}</span>
                                                                                    </div>
                                                                                    <div class="menucontent">
                                                                                        <p>{!!$news->short_description!!} <a
                                                                                                href="{{$news->redirect_link}}">https://www.articasvalbard.no/2024/exhibition-from-the-frontline-of-land-rights-in-spmi</a>
                                                                                        </p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>  
                                                                </li>
                                                                @endforeach
                                                               
                                                               
                                                                

                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                           