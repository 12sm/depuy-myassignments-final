<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body class="my_assign show_seq">
    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close seq-cancel" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Skip Ahead?</h4>
          </div>
          <div class="modal-body">
            <p>Your director has recommended that you complete this assignment in the sequence specified. Are you sure that you want to skip the next step in this assignment.</p>
          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-xs-3 col-sm-4">
                <button type="button" class="seq-confirm pull-left btn button-lg button-modal" data-dismiss="modal">OK</button>
              </div>
              <div class="col-xs-6 col-sm-4"></div>
              <div class="col-xs-3 col-sm-4">
                <button type="button" class="seq-cancel pull-right btn button-lg button-modal gray closeBtn" data-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include '../templates/sign-in-out.php';?>
    <div class="main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3 residents-menu">
        <?php include '../templates/logo-search-sm.php';?>
        <?php include '../templates/nav-sm.php';?>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9 show-sequential">
        <?php include '../templates/mobile-header.php';?>
        <div id="smt_col1Wrapper">
          <div id="smt_col1" class="">
            <div class="modSpacer name-assignment">
              <div class="smtContentWrapper">
                <div class="myAssignments">
                  <div class="row">
                    <div class="col-xs-12">
                      <div class="pull-left section-title">
                        <h2>Name Of Resident Assignment</h2>
                        <h3>DUE JUNE 19, 2015</h3>
                        <p class="small-grey">Assigned on 03/21/2015, updated on 03/27/2015</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modSpacer assigned-by">
              <div class="smtContentWrapper">
                <div class="myAssignments">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3>Assigned by: William Hodgins<span> (<a class="my_email" href="#">whodgins@depuysynthesinstitute.com</a>)</span></h3>
                      <p>I've put together this assignment to prepare you for your practum on June 19. Please take some time to look at the resources attached. I also highly reccomend that you attend Dr. Mark Marcus' talk on sore throats and take the online course for the common cold. Let me know if you have any questions.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="modSpacer assignments sequential">
              <div class="smtContentWrapper">
                <div class="myAssignments">

                  <div class="row">
                    <div class="col-xs-12">
                      <p>Mark As Completed</p>
                    </div>
                  </div>

                  <div id="these-are-not-checked">

                    <div id="sc1" class="single-class">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">1</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label>
                                            <input class="forget" type="checkbox" value="" name="">
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row procedure_details">
                                    <h4>
                                      ORTHOPAEDICS
                                    </h4>
                                    <h3 class="procedure_description">
                                      <a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a>
                                    </h3>
                                  </div>
                                  <div class="row list-item-content">
                                    <div class="pull-left list-thumb">
                                      <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                        <img src="../../img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                      </a>
                                    </div>
                                    <div>
                                      <p class="list-item-type">
                                        eLearning, 50 credits
                                      </p>
                                      <p>
                                        With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                        <li role="presentation">
                                          <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook</a>
                                        </li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter</a></li>
                                        <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email</a></li>
                                      </ul>
                                      <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">879 views</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="sc2" class="single-class">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">2</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label>
                                            <input class="forget " type="checkbox" value="" name="">
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row procedure_details">
                                    <h4>
                                      ORTHOPAEDICS
                                    </h4>
                                    <h3 class="procedure_description">
                                      <a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a>
                                    </h3>
                                  </div>
                                  <div class="row list-item-content">
                                    <div class="pull-left list-thumb">
                                      <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                        <img src="../../img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                      </a>
                                    </div>
                                    <div>
                                      <p class="list-item-type">
                                        eLearning, 50 credits
                                      </p>
                                      <p>
                                        With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email
                                      </a></li>
                                    </ul>
                                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">879 views</span>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="sc3" class="single-class">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">3</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label>
                                            <input class="forget" type="checkbox" value="" name="">
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row procedure_details">
                                    <h4>
                                      ORTHOPAEDICS
                                    </h4>
                                    <h3 class="procedure_description">
                                      <a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a>
                                    </h3>
                                  </div>
                                  <div class="row list-item-content">
                                    <div class="pull-left list-thumb">
                                      <a href="/views/my-assignments/single.php" class="play-icon">
                                        <img src="../../img/play-button.png">
                                      </a>
                                      <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                        <img src="../../img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                      </a>
                                    </div>
                                    <div>
                                      <p class="list-item-type">
                                        eLearning, 50 credits
                                      </p>
                                      <p>
                                        With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email
                                      </a></li>
                                    </ul>
                                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">879 views</span>
                                    </div>
                                  </div>
                                </div>

                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="sc4" class="single-class">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">4</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label>
                                            <input class="forget" type="checkbox" value="" name="">
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row procedure_details">
                                    <h4>
                                      ORTHOPAEDICS
                                    </h4>
                                    <h3 class="procedure_description">
                                      <a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a>
                                    </h3>
                                  </div>
                                  <div class="row list-item-content">
                                    <div class="pull-left list-thumb">
                                      <a href="/views/my-assignments/single.php" class="play-icon">
                                        <img src="../../img/play-button.png">
                                      </a>
                                      <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                        <img src="../../img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                      </a>
                                    </div>
                                    <div>
                                      <p class="list-item-type">
                                        eLearning, 50 credits
                                      </p>
                                      <p>
                                        With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email
                                      </a></li>
                                    </ul>
                                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">879 views</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="sc5" class="single-class single-date">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">5</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label>
                                            <input class="forget" type="checkbox" value="" name="">
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row list-item-content">
                                    <div class="pull-left">
                                      <div class="calendar">
                                        <p class="calendar_month">JUN</p>
                                        <p class="calendar_date">19</p>
                                      </div>
                                      <p class="tiny-grey"><strong>2 Days</strong></p>
                                    </div>
                                    <div class="row procedure_details">
                                      <h3 class="procedure_description">
                                        <a href="/views/my-assignments/single.php">Codman Neuro MedStreamTM Therapy Maintenance Course</a>
                                      </h3>
                                      <p class="tiny-grey">
                                        Dallas, TX
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email
                                      </a></li>
                                    </ul>
                                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">26 views</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="sc6" class="single-class">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">6</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label>
                                            <input class="forget" type="checkbox" value="" name="">
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row procedure_details">
                                    <h4>
                                      ORTHOPAEDICS
                                    </h4>
                                    <h3 class="procedure_description">
                                      <a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a>
                                    </h3>
                                  </div>
                                  <div class="row list-item-content">
                                    <div class="pull-left list-thumb">
                                      <a href="/views/my-assignments/single.php" class="play-icon">
                                        <img src="../../img/play-button.png">
                                      </a>
                                      <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                        <img src="../../img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                      </a>
                                    </div>
                                    <div>
                                      <p class="list-item-type">
                                        eLearning, 50 credits
                                      </p>
                                      <p>
                                        With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email
                                      </a></li>
                                    </ul>
                                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">879 views</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>

                  <div id="these-are-so-checked" class="grey-bg-top">

                    <div id="sc7" class="single-class grey-bg">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10 grey-bg-content">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">7</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label class="input_checked">
                                            <input class="forget" type="checkbox" value="" name="" checked>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row procedure_details">
                                    <h4>
                                      ORTHOPAEDICS
                                    </h4>
                                    <h3 class="procedure_description">
                                      <a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a>
                                    </h3>
                                  </div>
                                  <div class="row list-item-content">
                                    <div class="pull-left list-thumb">
                                      <a href="/views/my-assignments/single.php" class="play-icon">
                                        <img src="../../img/play-button.png">
                                      </a>
                                      <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                        <img src="../../img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                      </a>
                                    </div>
                                    <div>
                                      <p class="list-item-type">
                                        eLearning, 50 credits
                                      </p>
                                      <p>
                                        With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email
                                      </a></li>
                                    </ul>
                                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">879 views</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div id="sc8" class="single-class grey-bg">
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12 no-padding">
                          <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                          <hr>
                          <div class="indention row indent">
                            <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10 grey-bg-content">
                              <div class="row">
                                <div class="checkBiz col-xs-1">
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <h1 class="numberz">8</h1>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="col-xs-12">
                                      <div class="panel-default">
                                        <div class="checkbox panel-heading">
                                          <label class="input_checked">
                                            <input class="forget" type="checkbox" value="" name="" checked>
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="col-xs-11">
                                  <div class="row procedure_details">
                                    <h4>
                                      ORTHOPAEDICS
                                    </h4>
                                    <h3 class="procedure_description">
                                      <a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a>
                                    </h3>
                                  </div>
                                  <div class="row list-item-content">
                                    <div class="pull-left list-thumb">
                                      <a href="/views/my-assignments/single.php" class="play-icon">
                                        <img src="../../img/play-button.png">
                                      </a>
                                      <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                        <img src="../../img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                      </a>
                                    </div>
                                    <div>
                                      <p class="list-item-type">
                                        eLearning, 50 credits
                                      </p>
                                      <p>
                                        With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                      </p>
                                    </div>
                                  </div>
                                  <div class="row course_interaction">
                                    <div class="share-like-list dropdown btn-group">
                                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                                      </span>
                                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/fb.jpg"> Facebook
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/tw.jpg"> Twitter
                                      </a></li>
                                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');"> <img src="../../img/mail.jpg"> Email
                                      </a></li>
                                    </ul>
                                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">879 views</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php include '../templates/footer.php';?>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
