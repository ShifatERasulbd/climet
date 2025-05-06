

@php
    $main_team = App\Models\team::where('category_name', 'main_team')->get();
    $Affiliated_researchers = App\Models\team::where('category_name', 'Affiliated_researchers')->get();
    $Collaborators = App\Models\team::where('category_name', 'Collaborators')->get();

@endphp
<li class="nav-item dropdown">
                                                <div class="container-one single-menu-btn">
                                                    <div class="single-menu">
                                                        <a class="nav-link" href="#">Team</a>
                                                        <!-- <span class="sub_heading">Sub Heading Here ........</span> -->
                                                    </div>
                                                </div>
                                                <div class="menucontent">
                                                    <div class="description team">
                                                        <div class="description-wrap">
                                                            <ul class="news-list">
                                                                @foreach($main_team as $main_team)
                                                                <li>
                                                                    <div class="container-one">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="single-news">
                                                                                    <div class="single-menu-btn2">
                                                                                        <h3>{{$main_team->name}} <br> <span>{{$main_team->position}}</span></h3>
                                                                                    </div>
                                                                                    <div class="menucontent">
                                                                                       {{$main_team->details}}
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                              
                                                              
                                                                <br>
                                                                <div class="container-one">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h3 class="team-title"><strong>Affiliated researchers:</strong>
                                                                            </h3>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                @foreach($Affiliated_researchers as $Affiliated_researchers)
                                                                <li class="no-hover">
                                                                    <div class="container-one">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="single-news">
                                                                                    <h3>{{$Affiliated_researchers->name}} <br> <span>{{$Affiliated_researchers->position}}</span></h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                              
                                                                <br>
                                                                <div class="container-one">
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <h3 class="team-title"><strong>Collaborators:</strong></h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                @foreach($Collaborators as $Collaborator)
                                                                <li class="no-hover">
                                                                    <div class="container-one">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="single-news">
                                                                                    <h3>{{$Collaborator->name}} <br>
                                                                                        <span>{{$Collaborator->position}}</span></h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                @endforeach
                                                                <li class="no-hover">
                                                                    <div class="container-one">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="single-news">
                                                                                    <h3>Jamon Van den Hoek <br> <span>(Oregon State
                                                                                        University)</span></h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="no-hover">
                                                                    <div class="container-one">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="single-news">
                                                                                    <h3>Ricardo Torres <br> <span>(Wageningen
                                                                                        University)</span></h3>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>