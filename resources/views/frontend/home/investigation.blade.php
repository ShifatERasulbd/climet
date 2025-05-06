@php
    $investigations = App\Models\investigarions::with('investigation_contents')->orderby('id','DESC')->get();
   
@endphp


                                         

<li class="nav-item dropdown">
                                                <div class="container-one single-menu-btn">
                                                    <div class="single-menu">
                                                        <a class="nav-link" href="#">Investigations</a>
                                                        <!-- <span class="sub_heading">Sub Heading Here ........</span> -->
                                                    </div>
                                                </div>
                                                <div class="menucontent">
                                                    <div class="description investigations">
                                                        <div class="description-wrap">
                                                            <ul class="news-list">
                                                                @foreach($investigations as $investigation)

                                                               
                                                                <li>
                                                                    <div class="container-one">
                                                                        <div class="row">
                                                                            <div class="col-lg-12">
                                                                                <div class="single-news">
                                                                                    <div class="single-menu-btn2">
                                                                                        <h3>{{$investigation->title}}</h3>
                                                                                    </div>
                                                                               @foreach($investigation->investigation_contents as $c_investigation)
                                                                               
                                                                               <div class="menucontent">
                                                                                        <p><strong>{{$c_investigation->sub_title}}
                                                                                            </strong></p>
                                                                                        <br>
                                                                                       {!! $c_investigation->description  !!}
                                                                                    </div>
                                                                                    @endforeach
                                                                                        <!-- <p><strong>Background</strong>
                                                                                        </p>
                                                                                        <br> -->
                                                                                        <!-- <div class="single-images">
                                                                                            <img src="/wp-custom/images/Community Clean-Up Effort 1.jpg"
                                                                                            alt="">
                                                                                        </div>
                                                                                        <br>
                                                                                        <br>
                                                                                        <p>Veraibari is a coastal
                                                                                            village located at the
                                                                                            mouth of the Kikori
                                                                                            River—known as Ouro in the
                                                                                            local Urama language—where
                                                                                            the river flows into
                                                                                            the Kikori Delta and meets
                                                                                            the Gulf of Papua.
                                                                                            The community, part of the
                                                                                            Paia'a tribe, is one
                                                                                            of only 11 villages where
                                                                                            the endangered Urama
                                                                                            language is still spoken,
                                                                                            with deep ancestral
                                                                                            and cultural ties to the
                                                                                            land and sea.</p>
                                                                                        <p>The history of Veraibari is
                                                                                            deeply intertwined
                                                                                            with the impacts of climate
                                                                                            change. In the early
                                                                                            1980s, the nearby village of
                                                                                            Damaibari—once
                                                                                            located behind Veraibari on
                                                                                            the other side of
                                                                                            the island—was completely
                                                                                            destroyed by rising
                                                                                            sea levels, forcing the
                                                                                            community to relocate to
                                                                                            what is now Veraibari.
                                                                                            Today, Veraibari remains
                                                                                            one of the few surviving
                                                                                            villages in the region,
                                                                                            but it faces increasing
                                                                                            environmental threats.
                                                                                        </p> -->
                                                                                        <!-- <br>
                                                                                        <div class="single-images">
                                                                                            <img src="/wp-custom/images/March for Climate Justice 1.jpg"
                                                                                            alt="">
                                                                                        </div> -->
                                                                                       
                                                                                        <!-- <br>
                                                                                        <br>
                                                                                        <p>This province is rich in
                                                                                            resources, with
                                                                                            extensive logging and
                                                                                            extractive industries,
                                                                                            including oil and gas
                                                                                            projects operated by Exxon
                                                                                            and Total. However,
                                                                                            communities like Veraibari
                                                                                            are left to bear the brunt
                                                                                            of climate change
                                                                                            impacts, without receiving
                                                                                            any meaningful
                                                                                            economic benefits from these
                                                                                            industries. In
                                                                                            Veraibari, these impacts
                                                                                            include rising sea
                                                                                            levels, storm surges, the
                                                                                            previously
                                                                                            unexperienced occurrence of
                                                                                            cyclones, the
                                                                                            decline and extinction of
                                                                                            marine life, as well
                                                                                            as the degradation of
                                                                                            mangroves and other plant
                                                                                            species. Freshwater sources
                                                                                            have been damaged or
                                                                                            contaminated, and the
                                                                                            community faces the
                                                                                            gradual loss of cultural
                                                                                            heritage, social
                                                                                            cohesion, and traditional
                                                                                            political structures.
                                                                                        </p>
                                                                                        <br>
                                                                                        <div class="single-images">
                                                                                            <video
                                                                                            src="/wp-custom/images/Community Clean-Up Effort 1.jpg"
                                                                                            poster="/wp-custom/images/Community Clean-Up Effort 1.jpg"></video>
                                                                                        </div>
                                                                                       
                                                                                        <br>
                                                                                        <p>The project began as a short
                                                                                            multimedia evidence
                                                                                            video to support the
                                                                                            Melanesian Spearhead Group
                                                                                            (MSG) in their oral
                                                                                            statements to the UN’s
                                                                                            International Court of
                                                                                            Justice in December 2024.
                                                                                            In partnership with INTERPRT
                                                                                            and in
                                                                                            collaboration with
                                                                                            BlueOceanLaw, a field trip
                                                                                            was conducted in Veraibari.
                                                                                        </p>
                                                                                        <br>
                                                                                        <div class="single-images">
                                                                                            <img src="/wp-custom/images/March for Climate Justice 1.jpg"
                                                                                            alt="">
                                                                                        </div>
                                                                                        
                                                                                        <br><br>
                                                                                        <p>The fieldwork was made
                                                                                            possible through the
                                                                                            longstanding efforts and
                                                                                            community engagement of
                                                                                            the Piku Biodiversity
                                                                                            Network, a local
                                                                                            grassroots organization
                                                                                            dedicated to
                                                                                            environmental conservation
                                                                                            of aquatic species
                                                                                            and Indigenous advocacy. The
                                                                                            project is
                                                                                            continuing working closely
                                                                                            with the Piku
                                                                                            Biodiversity Network to
                                                                                            develop an expanded
                                                                                            multimedia report. </p>
                                                                                        <br>
                                                                                        <br> -->
                                                                                        <!-- <p><strong>Methodology </strong>
                                                                                        </p>
                                                                                        <br>
                                                                                        <p>Our methodology integrates
                                                                                            fieldwork with
                                                                                            visual-spatial
                                                                                            investigations, including
                                                                                            remote
                                                                                            sensing, GIS modeling,
                                                                                            climate science, and
                                                                                            legal research. During
                                                                                            fieldwork, we video
                                                                                            recorded testimonies and
                                                                                            organized three days
                                                                                            long participatory mapping
                                                                                            workshops on the
                                                                                            impacts of climate change in
                                                                                            Veraibari. We also
                                                                                            conducted aerial surveys
                                                                                            using UAV drones, along
                                                                                            with detailed video and
                                                                                            image documentation,
                                                                                            which formed the basis for
                                                                                            developing an
                                                                                            accurate 3D environment in
                                                                                            Unreal Engine in
                                                                                            collaboration with INTERPRT.
                                                                                            This 3D environment
                                                                                            integrates testimonies and
                                                                                            participatory
                                                                                            workshops, visual evidence,
                                                                                            and field recordings
                                                                                            along with geospatial,
                                                                                            environmental, and
                                                                                            climate data. </p>
                                                                                        <p>Our next steps focus on
                                                                                            extending the video to
                                                                                            reconstruct the historical
                                                                                            landscape in more
                                                                                            detail, develop visual
                                                                                            strategies in
                                                                                            representing cultural and
                                                                                            biodiversity loss
                                                                                            based on the participatory
                                                                                            workshops and
                                                                                            analyzing the role of
                                                                                            anthropogenic climate
                                                                                            change </p>
                                                                                        <br> -->
                                                                                        <!-- <div class="row"
                                                                                            style="display: flex !important;">
                                                                                            <div class="col-md-4">
                                                                                                <img src="/wp-custom/images/Climate Refugees 1.jpg"
                                                                                                    alt="">
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <img src="/wp-custom/images/Community Clean-Up Effort 1.jpg"
                                                                                                    alt="">
                                                                                            </div>
                                                                                            <div class="col-md-4">
                                                                                                <img src="/wp-custom/images/Renewable Energy Revolution 1.jpg"
                                                                                                    alt="">
                                                                                            </div>
                                                                                        </div> -->
                                                                                    
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