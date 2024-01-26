                  <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div>
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="../assets/images/avatar-4.jpg" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details"><span class="js-name-hjfrdsaqwuif">[Lastname F.]</span><i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="user-profile.php"><i class="ti-user"></i>View Profile</a>
                                          <a href="#!"><i class="ti-settings"></i>Settings</a>
                                          <a href="auth-normal-sign-in.php"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Layout</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="<?php if($page_name == 'home') { echo "active"; } ?>">
                                  <a href="home.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Barangay</div>
                          <ul class="pcoded-item pcoded-left-item">
                            <li class="<?php if($page_name == 'barangay-sitio') { echo "active"; } ?>">
                                  <a href="barangay-sitio.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-map"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Sitio</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                            </li>
                            <li class="<?php if($page_name == 'barangay-purok') { echo "active"; } ?>">
                                  <a href="barangay-purok.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-map"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Purok</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                            </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Residents</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="<?php if($page_name == 'resident-registration') { echo "active"; } ?>">
                                  <a href="resident-registration.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Registration</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'resident-bulkupload') { echo "active"; } ?>">
                                  <a href="resident-bulkupload.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-upload"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Bulk upload</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'resident-masterlist') { echo "active"; } ?>">
                                  <a href="resident-masterlist.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-printer"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Masterlist</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Household</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="<?php if($page_name == 'household-registration') { echo "active"; } ?>">
                                  <a href="household-registration.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-pin2"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Registration</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'household-masterlist') { echo "active"; } ?>">
                                  <a href="household-masterlist.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-printer"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Masterlist</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'household-map-view') { echo "active"; } ?>">
                                  <a href="household-map-view.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-map"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Map View</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>

                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Incident Reports</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="<?php if($page_name == 'incident-report-registration') { echo "active"; } ?>">
                                  <a href="incident-report-registration.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-write"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">New Report</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'incident-report-masterlist') { echo "active"; } ?>">
                                  <a href="incident-report-masterlist.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-printer"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Masterlist</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Printables</div>
                          <ul class="pcoded-item pcoded-left-item">
                             <li class="<?php if($page_name == 'printables-brgy-clearance') { echo "active"; } ?>">
                                  <a href="printables-brgy-clearance.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Brgy Clearance</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'printables-cert-of-residency') { echo "active"; } ?>">
                                  <a href="printables-cert-of-residency.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Cert. of Residency</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'printables-cert-of-indigency') { echo "active"; } ?>">
                                  <a href="printables-cert-of-indigency.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Cert. of Indigency</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li class="<?php if($page_name == 'printables-subpoena') { echo "active"; } ?>">
                                  <a href="printables-subpoena.php" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Subpoena</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                          </ul>
                      </div>
                  </nav>