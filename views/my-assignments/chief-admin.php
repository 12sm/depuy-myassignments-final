<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body class="my_assign chief_admin">
    <?php include '../templates/sign-in-out.php';?>
    <div class="main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3 chief-resident-menu">
        <?php include '../templates/logo-search-sm.php';?>
        <?php include '../templates/nav-sm.php';?>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9">
        <?php include '../templates/mobile-header.php';?>



        <div class="row tabs-section">
          <div class="col-xs-6 col-sm-6 col-md-2 resident-tab inactive">
            <a href="/views/my-assignments/chief-resident.php">Resident View</a>
          </div>
          <div class="col-xs-6 col-sm-6 col-md-2 admin-tab active">
            <p>Admin View</p>
          </div>
          <div class="col-md-8 hidden-xs hidden-sm">
          </div>
        </div>


        <div id="smt_col1Wrapper">
          <div id="smt_col1" class="padding-wrap">
            <div class="modSpacer current-assignments">
              <div class="smtContentWrapper">
                <div class="myAssignments">
                  <div class="row">
                    <div class="col-xs-12 col-sm-4 pull-right how-many-residents">
                      <div class="row">
                        <div class="col-xs-12">
                          <h2> You Have 20 Residents </h2>
                        </div>
                      </div>
                      <div class="row padding-bottom-15">
                        <div class="col-xs-12">
                          <button class="btn btn-info btn-info-sm">Manage Residents</button>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12 col-sm-8">
                      <form class="form-inline" action="" method="" onsubmit="">
                        <div class="row">
                          <div class="col-xs-12">
                            <h2 class="top"> New Assignment </h2>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-12">
                            <p> You can create a collection of resources, courses and events to assign to your residents. </p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-xs-8">
                            <input class="form-control" type="text" placeholder="Assignment Name"> </div>
                          <div class="col-xs-4">
                            <button class="pull-left btn button-lg button-modal">Next</button>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <h2>Currently Assigned</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="date-width col-xs-3 col-sm-2 col-md-2 col-lg-1">
                      <p>
                        Due Date
                      </p>
                    </div>
                    <div class="col-xs-9 col-sm-10 col-md-10 col-lg-11">
                      <p>
                        Assignment
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <div class="pull-left">
                        <div class="calendar">
                          <p class="calendar_month">JUN</p>
                          <p class="calendar_date">19</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="course_contents course_location">
                            3/10 Residents have completed
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <div class="pull-left">
                        <div class="calendar">
                          <p class="calendar_month">DEC</p>
                          <p class="calendar_date">27</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                        <p class="course_contents course_location">
                          0/5 Residents have completed
                        </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <div class="pull-left">
                        <div class="calendar">
                          <p class="calendar_month">DUE</p>
                          <p class="calendar_date">NA</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="course_contents course_location">
                            1/8 Residents have completed
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <div class="pull-left">
                        <div class="calendar">
                          <p class="calendar_month">DUE</p>
                          <p class="calendar_date">NA</p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="course_contents course_location">
                            0/10 Residents have completed
                          </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <div class="modSpacer past-assignments">
              <div class="smtContentWrapper">
                <div class="myAssignments">
                  <div class="row">
                    <div class="col-xs-12">
                      <h2>Saved Assignments</h2>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <p>
                        Assignment
                      </p>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="course_contents course_location">
                            2 PDFs, 3 Videos, 2 Journal Articles, 1 Podcast, 1 Course, 1 Event
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <a href="#"><span class="glyphicon icon-trash"></span></a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="course_contents course_location">
                            2 PDFs, 3 Videos
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <a href="#"><span class="glyphicon icon-trash"></span></a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="course_contents course_location">
                            7 Events
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <a href="#"><span class="glyphicon icon-trash"></span></a>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
                      <div class="row">
                        <div class="col-xs-12">
                          <h3 class="course_description">
                            <a href="show-ordered.php">Name Of Resident Assignment</a>
                          </h3>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12">
                          <p class="course_contents course_location">
                            3 Courses, 1 Event
                          </p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                      <a href="#"><span class="glyphicon icon-trash"></span></a>
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
