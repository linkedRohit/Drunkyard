@extends('layout')

@section('content')
            <div class="container greyText mt50 mb150">
                <div class="row">
                    <div class="col-md-4 visible-lg visible-md mt10" id="leftPane"> <!-- data-spy="affix" data-offset-top="1200"-->
                        <div class="featured">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <div class="col-md-4">
                                        <a href="/profile/123123/edit" class="change"><img src={{ $avatar }} class="image" height="75px" width="75px">
                                        Change pic</a>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h4>Rohit Sharma</h4>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4 taCenter"><a href="/MyStories">23</a> Stories</div>
                                            <div class="col-sm-4 taCenter"><a href="/Profile">46</a> Following</div>
                                            <div class="col-sm-4 taCenter"><a href="/Profile">69</a> Followers</div>
                                        </div>
                                    </div>
                                </div>                              
                            </div>
                            <div class="panel panel-danger">
                                <div class="panel-body grey">
                                    <div class="col-sm-12 storyListItem">
                                    <a href="/story/123123" >Hangout after our office on friday.</a><br/>
                                    <a href="/Message/13213" class="pull-right fa fa-send" title="Message"></a>                                    
                                    <span class="pull-right"><a href="/profile/12123" class="author">Rohit Sharma</a></span><br/><br/>
                                    <i>
                                    Suddenly we made a plan to go to India gate and have dinner at murthal.

                                    It was a new year eve. We were very hap...

                                    </i><br/>
                                    <span>
                                        <label class="label label-success">Story</label>
                                        <label class="label label-danger">Success</label>
                                        <label class="label label-primary">College</label>
                                    </span>
                                </div><br/>
                                    <div class="col-sm-12 storyListItem-last">
                                    <a href="/story/234234" >What we give is what we get.</a><br/>
                                    <a href="/Message/13213" class="pull-right fa fa-send" title="Message"></a>                                    
                                    <span class="pull-right"><a href="/profile/12123" class="author">Wilfrey Sharma</a></span><br/><br/>
                                    <i>
                                    He stopped us for a challan, we stopped but once we realized he has just stopped ...</i><br/>
                                    </i><br/>
                                    <span>
                                        <label class="label label-success">Story</label>
                                        <label class="label label-danger">Success</label>
                                        <label class="label label-primary">College</label>
                                    </span>
                                </div>
                                </div>
                                <div class="panel-footer">Trending stories for the day</div>                                
                            </div>
                            <div class="panel panel-danger">
                                    <div class="panel-body">
                                        <label class="dyLabel"><a href="" class="anchor">Story</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Drunken</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Startup</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Art</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">College</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Story</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Justin</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Facebook</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Enterpreneur</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Success</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Story</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Kids</a></label> 
                                    </div>
                                    <div class="panel-footer">Recommended Tags</div>                                
                                </div>
                            </div>
                            <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <label class="dyLabel"><a href="" class="anchor">Story</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Drunken</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Startup</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Art</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">College</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Story</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Justin</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Facebook</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Enterpreneur</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Success</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Story</a></label>
                                        <label class="dyLabel"><a href="" class="anchor">Kids</a></label> 
                                    </div>
                                    <div class="panel-footer">Your areas of interest</div>                                
                                </div>

                            <div class="panel panel-primary">
                                <div class="panel-body grey">
                                    <div class="col-sm-12 storyListItem">
                                        <a href="/story/123123" >Hangout after our office on friday.</a><br/>
                                        <i>
                                        Suddenly we made a plan to go to India gate and have dinner at murthal.

                                        It was a new year eve. We were very hap...

                                        </i><br/>

                                        <span>
                                            <span class="fa fa-eye" title="views">23</span>
                                            <span class="fa fa-beer ml10" title="Cheers">123</span>
                                            <span class="fa fa-share ml10" title="Shares">5</span>
                                        </span>
                                        <span class="pull-right">Posted 5 days ago</span>
                                    </div>
                                    <div class="col-sm-12 storyListItem-last">
                                        <a href="/story/123123" >A ghost in the jungle</a><br/>
                                        <i>
                                        We went to jungle. we made a plan to go to India gate and have dinner at murthal.

                                        It was a new year eve. We were very hap...

                                        </i><br/>

                                        <span>
                                            <span class="fa fa-eye" title="views">23</span>
                                            <span class="fa fa-beer ml10" title="Cheers">123</span>
                                            <span class="fa fa-share ml10" title="Shares">5</span>
                                        </span>
                                        <span class="pull-right">Posted 5 days ago</span>
                                    </div>
                                </div>
                                <div class="panel-footer">Your most popular stories</div>                                
                            </div>
                            <div class="lbbordr2px">
                                <span class="footerAnchor">&copy; 2016 Drunkyard</span>
                                <a href="" class="footerAnchor">About us</a>
                                <a href="" class="footerAnchor">Feedback</a>
                                <a href="" class="footerAnchor">Careers </a>
                                <a href="" class="footerAnchor">Privacy </a>
                                <a href="" class="footerAnchor">Terms </a>
                            </div>
                            </div>
                            <div class="col-md-8 col-xs-12 pull-right feed col-md-4-offset">
                                <div class="row mt10">
                                    <div class="panel panel-default border">
                                        <div class="panel-body">
                                            <div class="col-md-1">
                                                <img src= {{ $avatar }} class="image" height="46px" width="46px">
                                            </div>
                                            <div class="col-md-11">
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <textarea id="inlineTextEditor" placeholder="Share your crazy story here ..."></textarea>
                                                        <input type="button" class="inlineBtn  pull-right" value="Create Story" id="createStoryId"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>                            
                                    </div>
                                    <h4 class="col-sm-12" id="topStoriesHead">Top Stories as per your interest
                                    <a href="#" id="close"><span class="pull-right fa fa-close"></span></a></h4>
                                    <div class="TopStoryPanel">
                                        <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                    <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-11 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a><br/>
                                                    <span title="(Begineering) Rank of the user">Beginnering</span><br/>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <h4>Story heading is written here
                                                                    <a href="" class="fa fa-eye-slash pull-right" title="Not my taste"></a></h4>
                                                            </div>
                                                            <h><a href="/profile/123132231">Yogesh Kumar</a>
                                                            <a href="/Message/13213" class=" fa fa-send" title="Message"></a></h>
                                                            posted in
                                                            <span class="grey"><a href="/tags/23123123/">  Chilly night </a>
                                                                <span class="fa fa-group" title="Group"></span>
                                                            </span>
                                                            <p>THis is a story of epsum lopsei laravel new year sample story. THis is a story of happy new year sample story.THis is a story of happy new year sample story.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="renderFeed">
                                    <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                     <div class="row">
                                        <div class="col-md-1 mt10">
                                            <a href="/profile/123132231">
                                                <div class="col-md-12">
                                                    <img src={{ $avatar }} class="image" height="50px" width="50px">
                                                </div>
                                                <div class="col-sm-12 mt10">
                                                    <a href="#"><span class="fa fa-arrow-up taCenter ml10"></span></a>
                                                        <span title="Rank of the user">Writer</span>
                                                    <a href="#"><span class="fa fa-arrow-down taCenter ml10"></span></a>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-md-11">
                                            <div class="panel panel-default border">
                                            <div class="panel-body">
                                                <div class="col-md-11">
                                                    <div class="row">
                                                        <div class="col-sm-12">
                                                            <h5><a href="/profile/123132231">Rakesh Kumar</a></h5>
                                                            <p>THis is a story of <br/><br/>happy new year sample <br/><br/>story. THis is a story of happy new year sample story.<br/><br/><br/>THis is a story of happy new year <br/><br/>sample story. <br/>
                                                            <b><a href="#" class="smallText">Read more...</a></b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="panel-footer row">
                                                <span class="col-sm-6">
                                                    <!--<a href="#"><span class="fa fa-eye" title="views">23</span></a>-->
                                                    <a href="#"><span class="fa fa-beer ml10" title="Cheers">123</span></a>
                                                    <a href="#"><span class="tab fa fa-share ml10" title="Shares">5</span></a>
                                                    <a href="#"><span class="tab fa fa-bookmark ml10" title="Watch Later"></span></a>    
                                                    <a href="#"><span class="tab fa fa-facebook ml10" title="Share on facebook"></span></a>    
                                                    <a href="#"><span class="tab fa fa-twitter ml10" title="Share on twitter"></span></a>    
                                                </span>
                                                <span class="col-sm-6 pull-right">                                                    
                                                    <span class="fa fa-clock-o" title="views"></span>  5 days ago 
                                                    <span class="grey tab"><a href="/tags/23123123/">  Chilly night </a>
                                                        <span class="fa fa-group" title="Group"></span>
                                                    </span>
                                                </span>
                                            </div>                          
                                        </div>
                                        </div>
                                    </div>
                                    <div class="feedItem"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection