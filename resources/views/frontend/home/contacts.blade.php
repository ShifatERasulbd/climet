@php
    $contacts = App\Models\general_data::where('title', 'Contacts')->get();

@endphp
@foreach($contacts as $contact)
<li class="nav-item dropdown">
                                                <div class="container-one single-menu-btn">
                                                    <div class="single-menu">
                                                        <a class="nav-link" href="#">{{$contact->title}}</a>
                                                        <!-- <span class="sub_heading">Sub Heading Here ........</span> -->
                                                    </div>
                                                </div>
                                                <div class="menucontent">
                                                    <div class="description contacts">
                                                        <div class="container-one">
                                                            <div class="description-wrap">
                                                               {!!$contact->details!!}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>


                        @endforeach