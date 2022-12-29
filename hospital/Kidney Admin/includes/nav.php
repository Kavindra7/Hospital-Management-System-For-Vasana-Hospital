<!-- Navigation -->
<nav
  class="navbar navbar-default navbar-static-top"
  role="navigation"
  style="margin-bottom: 0"
>
  <div class="navbar-header">
    <button
      type="button"
      class="navbar-toggle"
      data-toggle="collapse"
      data-target=".navbar-collapse"
    >
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a
      class="navbar-brand"
      href="admindashboard.php"
      style="padding-left: 500px; text-align: center; font-size: 24px"
      >Vasana Hospital Kidney Management System</a
    >
  </div>
  <!-- /.navbar-header -->

  <ul class="nav navbar-top-links navbar-right">
    <!-- /.dropdown -->
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-user">
        <!-- <li class="divider"></li> -->
        <li>
          <a href="../logout.php"
            ><i class="fa fa-sign-out fa-fw"></i> Logout</a
          >
        </li>
      </ul>
      <!-- /.dropdown-user -->
    </li>

    <!-- /.dropdown -->
  </ul>

  <!-- /.navbar-top-links -->

  <div
    class="navbar-default sidebar"
    role="navigation"
    style="background-color: #a5c422"
  >
    <div class="sidebar-nav navbar-collapse">
      <ul class="nav" id="side-menu">
        <li>
          <a href="admindashboard.php"
            ><i class="fa fa-dashboard fa-fw"></i> Dashboard</a
          >
        </li>
        <li>
          <a href=""
            ><i class="fa fa-heartbeat"></i> Kidney Collection Details
            <span class="fa arrow"></span
          ></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="addKidney.php">Add Kidney</a>
            </li>
            <li>
              <a href="viewKidneyDetails.php">View Kidney</a>
            </li>
            <li>
              <a href="editkidney.php">Edit Kidney</a>
            </li>
            <li>
              <a href="deletekidney.php">Remove Kidney</a>
            </li>
          </ul>
          <!-- /.nav-second-level -->
        </li>

        <li>
          <a href=""
            ><i class="fa fa-bullhorn"></i>Donors<span class="fa arrow"></span
          ></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="adddonor.php">Add Donor</a>
            </li>
            <li>
              <a href="viewdonor.php">View Donor Details</a>
            </li>
            <li>
              <a href="editview.php">Edit Donor Details</a>
            </li>
            <li>
              <a href="deleteview.php">Delete Donor Details</a>
            </li>
          </ul>
        </li>

        <li>
          <a href=""
            ><i class="fa fa-bullhorn"></i> Announcements
            <span class="fa arrow"></span
          ></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="makeannouncement.php">Make Announcement</a>
            </li>
            <li>
              <a href="viewannouncement.php">View Announcement</a>
            </li>
            <li>
              <a href="editannounceform.php">Edit Announcement</a>
            </li>
            <li>
              <a href="deleteannouncement.php">Remove Announcement</a>
            </li>
          </ul>
        </li>

        <li>
          <a href=""
            ><i class="fa fa-flag"></i> Campaigns <span class="fa arrow"></span
          ></a>
          <ul class="nav nav-second-level">
            <li>
              <a href="newcampaign.php">New Campaign</a>
            </li>
            <li>
              <a href="viewcampaign.php">View Campaign</a>
            </li>
            <li>
              <a href="updatecampaign.php">Update Campaign</a>
            </li>
            <li>
              <a href="deletedcampaign.php">Delete Campaign</a>
            </li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.sidebar-collapse -->
  </div>
  <!-- /.navbar-static-side -->
</nav>
