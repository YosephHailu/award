@extends('layouts.guest')


@section('content')

<div class="slider sliderv2">
    <div class="container">
        <div class="row">
            <div class="slider-single-item">
                <div class="movie-item">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="title-in">
                                <div class="cate">
                                    <span class="blue"><a href="#">Sci-fi</a></span>
                                    <span class="yell"><a href="#">Action</a></span>
                                    <span class="orange"><a href="#">advanture</a></span>
                                </div>
                                <h1><a href="#">guardians of the<br>
                                        galaxy <span>2015</span></a></h1>
                                <div class="social-btn">
                                    {{-- <a href="#" class="parent-btn"><i class="ion-play"></i> HAHU PRODUCTION</a> --}}
                                    <a href="#" class="parent-btn"><i class="ion-heart"></i> 1654 VOTES</a>
                                    <div class="hover-bnt">
                                        <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                                        <div class="hvr-item">
                                            <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                            <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                            <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                            <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mv-details">
                                    <ul class="mv-infor">
                                        <li> Director: Bacha Debele </li>
                                        <li> Producer: Debele Bacha </li>
                                        <li> Release: 1 May 2015</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="mv-img-2">
                                <a href="#"><img src="{{asset('landing/images/uploads/poster1.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="movie-item">
                    <div class="row">
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="title-in">
                                <div class="cate">
                                    <span class="blue"><a href="#">Sci-fi</a></span>
                                    <span class="yell"><a href="#">Action</a></span>
                                    <span class="orange"><a href="#">advanture</a></span>
                                </div>
                                <h1><a href="#">guardians of the<br>
                                        galaxy <span>2015</span></a></h1>
                                <div class="social-btn">
                                    <a href="#" class="parent-btn"><i class="ion-play"></i> Watch Trailer</a>
                                    <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a>
                                    <div class="hover-bnt">
                                        <a href="#" class="parent-btn"><i class="ion-android-share-alt"></i>share</a>
                                        <div class="hvr-item">
                                            <a href="#" class="hvr-grow"><i class="ion-social-facebook"></i></a>
                                            <a href="#" class="hvr-grow"><i class="ion-social-twitter"></i></a>
                                            <a href="#" class="hvr-grow"><i class="ion-social-googleplus"></i></a>
                                            <a href="#" class="hvr-grow"><i class="ion-social-youtube"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mv-details">
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                    <ul class="mv-infor">
                                        <li> Run Time: 2h21??? </li>
                                        <li> Rated: PG-13 </li>
                                        <li> Release: 1 May 2015</li>
                                    </ul>
                                </div>
                                <div class="btn-transform transform-vertical">
                                    <div><a href="#" class="item item-1 redbtn">more detail</a></div>
                                    <div><a href="#" class="item item-2 redbtn hvrbtn">more detail</a></div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="mv-img-2">
                                <a href="#"><img src="{{asset('landing/images/uploads/poster1.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="buster-light">
    <div class="movie-items  full-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>MOVIES</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                
                <div class="row">
                    <div class="slick-multiItem2">
                        @foreach ($movies as $movie)
                        
                        <div class="slide-it">
                            <div class="movie-item">
                                <div class="mv-img">
                                    <img src="{{asset('storage/uploads/movie/' . $movie->image)}}" alt="">
                                </div>
                                <div class="hvr-inner">
                                    <a href="{{url("movie/$movie->id")}}"> Vote <i
                                            class="ion-android-arrow-dropright"></i> </a>
                                </div>
                                <div class="title-in">
                                    <h6><a href="#">{{$movie->name}}</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="movie-items  full-width">
        <div class="row">
            <div class="col-md-12">
                <div class="title-hd">
                    <h2>MUSICS</h2>
                    <a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
                </div>
                
                <div class="row">
                    <div class="slick-multiItem2">
                        @foreach ($musics as $music)
                        
                        <div class="slide-it">
                            <div class="movie-item">
                                <div class="mv-img">
                                    <img src="{{asset('storage/uploads/music/' . $music->image)}}" alt="">
                                </div>
                                <div class="hvr-inner">
                                    <a href="{{url("music/$music->id")}}"> Vote <i
                                            class="ion-android-arrow-dropright"></i> </a>
                                </div>
                                <div class="title-in">
                                    <h6><a href="#">{{$music->title}}</a></h6>
                                    <p><i class="ion-android-star"></i><span>7.4</span> /10</p>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 
<div class="trailers full-width">
		<div class="row ipad-width">
			<div class="col-md-9 col-sm-12 col-xs-12">
				<div class="title-hd">
					<h2>in theater</h2>
					<a href="#" class="viewall">View all <i class="ion-ios-arrow-right"></i></a>
				</div>
				<div class="videos">
				 	<div class="slider-for-2 video-ft">
					   <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/1Q8fG0TtVAY"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/w0qQkSuWOS8"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/44LdLqgOpjo"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/gbug3zTm3Ws"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/e3Nl_TCQXuw"></iframe>
					    </div>
					    <div>
					    	<iframe class="item-video" src="#" data-src="https://www.youtube.com/embed/NxhEZG0k9_w"></iframe>
					    </div>

					</div>
					<div class="slider-nav-2 thumb-ft">
						<div class="item">
							<div class="trailer-img">
								<img src="{{asset('landing/images/uploads/trailer7.jpg')}}" alt="photo by Barn Images" width="4096"
    height="2737">
</div>
<div class="trailer-infor">
    <h4 class="desc">Wonder Woman</h4>
    <p>2:30</p>
</div>
</div>
<div class="item">
    <div class="trailer-img">
        <img src="{{asset('landing/images/uploads/trailer2.jpg')}}" alt="photo by Barn Images" width="350" height="200">
    </div>
    <div class="trailer-infor">
        <h4 class="desc">Oblivion: Official Teaser Trailer</h4>
        <p>2:37</p>
    </div>
</div>
<div class="item">
    <div class="trailer-img">
        <img src="{{asset('landing/images/uploads/trailer6.jpg')}}" alt="photo by Joshua Earle" width="509"
            height="301">
    </div>
    <div class="trailer-infor">
        <h4 class="desc">Exclusive Interview: Skull Island</h4>
        <p>2:44</p>
    </div>
</div>
<div class="item">
    <div class="trailer-img">
        <img src="{{asset('landing/images/uploads/trailer3.png')}}" alt="photo by Alexander Dimitrov" width="100"
            height="56">
    </div>
    <div class="trailer-infor">
        <h4 class="desc">Logan: Director James Mangold Interview</h4>
        <p>2:43</p>
    </div>
</div>
<div class="item">
    <div class="trailer-img">
        <img src="{{asset('landing/images/uploads/trailer4.png')}}" alt="photo by Wojciech Szaturski" width="100"
            height="56">
    </div>
    <div class="trailer-infor">
        <h4 class="desc">Beauty and the Beast: Official Teaser Trailer 2</h4>
        <p>2: 32</p>
    </div>
</div>
<div class="item">
    <div class="trailer-img">
        <img src="{{asset('landing/images/uploads/trailer5.jpg')}}" alt="photo by Wojciech Szaturski" width="360"
            height="189">
    </div>
    <div class="trailer-infor">
        <h4 class="desc">Fast&Furious 8</h4>
        <p>3:11</p>
    </div>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-12 col-xs-12">
    <div class="sidebar">
        <div class="celebrities">
            <h4 class="sb-title">Spotlight Celebrities</h4>
            <div class="celeb-item">
                <a href="#"><img src="{{asset('landing/images/uploads/ava1.jpg')}}" alt="" width="70" height="70"></a>
                <div class="celeb-author">
                    <h6><a href="#">Samuel N. Jack</a></h6>
                    <span>Actor</span>
                </div>
            </div>
            <div class="celeb-item">
                <a href="#"><img src="{{asset('landing/images/uploads/ava2.jpg')}}" alt="" width="70" height="70"></a>
                <div class="celeb-author">
                    <h6><a href="#">Benjamin Carroll</a></h6>
                    <span>Actor</span>
                </div>
            </div>
            <div class="celeb-item">
                <a href="#"><img src="{{asset('landing/images/uploads/ava3.jpg')}}" alt="" width="70" height="70"></a>
                <div class="celeb-author">
                    <h6><a href="#">Beverly Griffin</a></h6>
                    <span>Actor</span>
                </div>
            </div>
            <div class="celeb-item">
                <a href="#"><img src="{{asset('landing/images/uploads/ava4.jpg')}}" alt="" width="70" height="70"></a>
                <div class="celeb-author">
                    <h6><a href="#">Justin Weaver</a></h6>
                    <span>Actor</span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div> --}}
<!-- latest new v2 section-->
<div class="latestnew full-width">
    <div class="row">
        <div class="col-md-9">
            <div class="ads adsv2">
                <img src="{{asset('landing/images/uploads/ads2.png')}}')}}" alt="">
            </div>
            <div class="title-hd">
                <h2>Latest news</h2>
                <a href="bloggrid.html" class="viewall">see all news <i class="ion-ios-arrow-right"></i></a>
            </div>
            <div class="latestnewv2">
                <div class="blog-item-style-2">
                    <a href="blogdetail.html"><img src="{{asset('landing/images/uploads/blogv21.jpg')}}" alt=""></a>
                    <div class="blog-it-infor">
                        <h3><a href="blogdetail.html">Godzilla: King Of The Monsters Adds O???Shea Jackson Jr</a></h3>
                        <span class="time">27 Mar 2017</span>
                        <p>Looks like Kong: Skull Island started a tradition with its casting of Straight ...</p>
                    </div>
                </div>
                <div class="blog-item-style-2">
                    <a href="blogdetail.html"><img src="{{asset('landing/images/uploads/blogv22.jpg')}}" alt=""></a>
                    <div class="blog-it-infor">
                        <h3><a href="blogdetail.html">First Official Images of Alicia Vikander As Tomb Raider???s Lara
                                Croft</a></h3>
                        <span class="time">27 Mar 2017</span>
                        <p>Aside from the her digital incarnation, the most recognisable image of Tomb ...</p>
                    </div>
                </div>
                <div class="blog-item-style-2">
                    <a href="blogdetail.html"><img src="{{asset('landing/images/uploads/blogv23.jpg')}}" alt=""></a>
                    <div class="blog-it-infor">
                        <h3><a href="blogdetail.html">New Spider-Man: Homecoming Poster Finds Peter Parker At Rest</a>
                        </h3>
                        <span class="time">27 Mar 2017</span>
                        <p>He might be a primary protector of New York City, but at heart, Peter Parker is ...</p>
                    </div>
                </div>
                <div class="blog-item-style-2">
                    <a href="blogdetail.html"><img src="{{asset('landing/images/uploads/blogv24.jpg')}}" alt=""></a>
                    <div class="blog-it-infor">
                        <h3><a href="blogdetail.html">Joseph Gordon-Levitt Directing Moive Musical Comedy Wingmen</a>
                        </h3>
                        <span class="time">27 Mar 2017</span>
                        <p>A little over a year ago, we learned that Joseph Gordon-Levitt and Channing ...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="sidebar">
                <div class="sb-facebook sb-it">
                    <h4 class="sb-title">Find us on Facebook</h4>
                    <iframe src="#"
                        data-src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Ftemplatespoint.net%2F%3Ffref%3Dts&tabs=timeline&width=340&height=315px&small_header=true&adapt_container_width=false&hide_cover=false&show_facepile=true&appId"
                        height="315" style="width:100%;border:none;overflow:hidden"></iframe>
                </div>
                <div class="sb-twitter sb-it">
                    <h4 class="sb-title">Tweet to us</h4>
                    <div class="slick-tw">
                        <div class="tweet item" id="">
                            <!-- Put your twiter id here -->
                        </div>
                        <div class="tweet item" id="">
                            <!-- Put your 2nd twiter account id here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection