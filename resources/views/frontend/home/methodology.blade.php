@php
    $methedology = App\Models\general_data::where('title', 'Methodology')->get();

@endphp

@foreach($methedology as $methedology)
<li class="nav-item dropdown">
                                                <div class="container-one single-menu-btn">
                                                    <div class="single-menu">
                                                        <a class="nav-link" href="#">{{$methedology->title}}</a>
                                                        <!-- <span class="sub_heading">Sub Heading Here ........</span> -->
                                                    </div>
                                                </div>
                                                <div class="menucontent">
                                                    <div class="description approach">
                                                        <div class="container-one">
                                                            <div class="description-wrap">
                                                               {!!$methedology->details!!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach