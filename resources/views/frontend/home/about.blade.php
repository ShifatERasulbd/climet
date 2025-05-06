@php
    $about = App\Models\general_data::where('title', 'About')->get();

@endphp

<li class="nav-item dropdown">
                                                <div class="container-one single-menu-btn">
                                                    @foreach($about as $about)
                                                    <div class="single-menu">
                                                        <a class="nav-link" href="#">{{$about->title}}</a>
                                                        <!-- <span class="sub_heading">Sub Heading Here ........</span> -->
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="menucontent">
                                                    <div class="description about">
                                                        <div class="container-one">
                                                            <div class="description-wrap">
                                                                {!!$about->details!!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>