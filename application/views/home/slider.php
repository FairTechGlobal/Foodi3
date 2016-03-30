<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
<!--    <ol class="carousel-indicators">-->
<!--        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>-->
<!--        <li data-target="#myCarousel" data-slide-to="1"></li>-->
<!--        <li data-target="#myCarousel" data-slide-to="2"></li>-->
<!--    </ol>-->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="<?php echo base_url()."assets/images/slider6.jpg"?>" alt="First slide">
            <div class="container" style="background-color: #00a157">
                <div class="carousel-caption">
                    <form class="form-horizontal">
                        <div class="row" style="margin-left: 10%; -webkit-align-content: center">
                            <div class="col-lg-12">
                                <label style="margin-left: -9%">Do a Job Search</label>
                            </div>
                            <div class="col-lg-12">
                                <div class="search">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
<!--                                                <label>Expertise</label>-->
                                                <div>
                                                    <select  name="user_type" class="form-control" type="text">
                                                        <option value="">Any Expertise</option>
                                                        <option value="">----------------</option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <div class="form-group">
<!--                                                <label>Location</label>-->
                                                <div>
                                                    <select  name="user_type" class="form-control" type="text">
                                                        <option value="">Any Location</option>
                                                        <option value="">----------------</option>
                                                        <option value=""></option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-1"></div>
                                        <div class="col-md-3">
                                            <div class="form-group">
<!--                                                <label>Key Word</label>-->
                                                <div class="input-group">
                                                    <input type="text" class="form-control " name="key" placeholder="Key Word">
                                                </div><!-- /.input group -->
                                            </div><!-- /.form group -->
                                        </div>
                                        <div class="col-md-1">
                                            <button class="btn btn-primary">Find</button>
                                        </div>
                                    </div>
<!--                                    <input class="form-control">-->
                                </div>
                            </div
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">-->
<!--        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Previous</span>-->
<!--    </a>-->
<!--    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">-->
<!--        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
<!--        <span class="sr-only">Next</span>-->
<!--    </a>-->
</div><!-- /.carousel -->
