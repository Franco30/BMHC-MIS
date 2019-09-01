			<?php 
        require 'require/config.php';
        $query = $conn->query("SELECT * FROM `users` WHERE `user_id` = $_SESSION[user_id]") or die(mysqli_error());
        $find = $query->fetch_array();
        ?>
			<!-- START PAGE SIDEBAR -->
			<div class="page-sidebar page-navigation">
				<!-- START X-NAVIGATION -->
				<ul class="x-navigation">
					<li class="xn-logo">
						<a href="dashboard">BMHC-MIS</a>
						<a href="#" class="x-navigation-control"></a>
					</li>
					<li class="xn-profile">
						<a href="#" class="profile-mini">
							<img src="assets/images/users/avatar.jpg" alt="John Doe" />
						</a>
						<div class="profile">
							<div class="profile-image">
								<img src="assets/images/users/avatar.jpg" alt="John Doe" />
							</div>
							<div class="profile-data">
								<div class="profile-data-name"><?php echo $find['fullname']?></div>
								<div class="profile-data-title"><i><?php echo $find['position']?></i></div>
							</div>
						</div>
					</li>
					<li>
						<a href="dashboard"><span class="fa fa-desktop"></span> <span class="xn-text">Dashboard</span></a>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-pencil-square-o"></span> <span class="xn-text">Transactions</span></a>
						<ul>
							<li> <a href="registration_table"><span class="fa fa-location-arrow"></span> <span class="xn-text">Registration</span></a> </li>
							<li> <a href="registration_table"><span class="fa fa-users"></span> <span class="xn-text">Family Planning</span></a> </li>
							<li> <a href="medication_dispensation.php"><span class="fa fa-wheelchair"></span> <span class="xn-text">Pre-natal</span></a> </li>
							<li> <a href="laboratory_request_table.php"><span class="fa fa-plus"></span> <span class="xn-text">Tuberculosis</span></a> </li>
							<li> <a href="patient_treatment_table.php"><span class="fa fa-heartbeat"></span> <span class="xn-text">Consultations & Walk-in</span></a> </li>
							<li> <a href="immunization_table.php"><span class="fa fa-medkit"></span> <span class="xn-text">Immunization</span></a> </li>
							<li> <a href="referral"><span class="fa fa-hospital-o"></span> <span class="xn-text">Referral</span></a> </li>
							<li> <a href="follow_up_table.php"><span class="fa fa-calendar"></span> <span class="xn-text">Follow-up Visit</span></a> </li>
							<li> <a href="medication_dispensation"><span class="fa fa-medkit"></span> <span class="xn-text">Medical Dispensation</span></a> </li>
						</ul>
                    </li>
                    <li class="xn-openable">
						<a href="#"><span class="fa fa-folder-open"></span> <span class="xn-text">Data Entry</span></a>
						<ul>
							<li><a href="medicine_table"><span class="fa fa-medkit"></span><span class="xn-text">Medicine</span></a></li>
							<li><a href="master_file_patient"><span class="fa fa-stack-overflow"></span><span class="xn-text">Patient Master File</span></a></li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-bar-chart"></span> <span class="xn-text">Reports</span></a>
						<ul>
							<li> <a href="patient_certification_table.php"><span class="fa fa-ticket"></span> <span class="xn-text">Certification</span></a> </li>
							<li><a href="reports_follow_up_table.php"><span class="fa fa-mail-reply-all"></span><span class="xn-text">Follow-up Visit</span></a></li>
							<li><a href="examination_reports_overview.php"><span class="fa fa-stethoscope"></span><span class="xn-text">Examination Report</span></a></li>
							<li><a href="reports.php"><span class="fa fa-line-chart"></span><span class="xn-text">TB Cases Report</span></a></li>
							<li><a href="patient_record_report.php"><span class="fa fa-user"></span><span class="xn-text">Patient Record Report</span></a></li>
							<li><a href="medication_dispense_table"><span class="fa fa-apple"></span><span class="xn-text">Medicine Dispensed</span></a></li>
							<li><a href="sputum_submission.php"><span class="fa fa-upload"></span><span class="xn-text">Sputum Submission</span></a></li>
						</ul>
					</li>
					<!-- <li class="xn-openable">
						<a href="#"><span class="fa fa-files-o"></span> <span class="xn-text">Pages</span></a>
						<ul>
							<li><a href="html/pages-gallery.html"><span class="fa fa-image"></span> Gallery</a></li>
							<li><a href="html/pages-profile.html"><span class="fa fa-user"></span> Profile</a></li>
							<li><a href="html/pages-address-book.html"><span class="fa fa-users"></span> Address Book</a></li>
							<li class="xn-openable">
								<a href="#"><span class="fa fa-clock-o"></span> Timeline</a>
								<ul>
									<li><a href="html/pages-timeline.html"><span class="fa fa-align-center"></span> Default</a></li>
									<li><a href="html/pages-timeline-simple.html"><span class="fa fa-align-justify"></span> Full Width</a></li>
								</ul>
							</li>
							<li class="xn-openable">
								<a href="#"><span class="fa fa-envelope"></span> Mailbox</a>
								<ul>
									<li><a href="html/pages-mailbox-inbox.html"><span class="fa fa-inbox"></span> Inbox</a></li>
									<li><a href="html/pages-mailbox-message.html"><span class="fa fa-file-text"></span> Message</a></li>
									<li><a href="html/pages-mailbox-compose.html"><span class="fa fa-pencil"></span> Compose</a></li>
								</ul>
							</li>
							<li><a href="html/pages-messages.html"><span class="fa fa-comments"></span> Messages</a></li>
							<li><a href="html/pages-calendar.html"><span class="fa fa-calendar"></span> Calendar</a></li>
							<li><a href="html/pages-tasks.html"><span class="fa fa-edit"></span> Tasks</a></li>
							<li><a href="html/pages-content-table.html"><span class="fa fa-columns"></span> Content Table</a></li>
							<li><a href="html/pages-faq.html"><span class="fa fa-question-circle"></span> FAQ</a></li>
							<li><a href="html/pages-search.html"><span class="fa fa-search"></span> Search</a></li>
							<li class="xn-openable">
								<a href="#"><span class="fa fa-file"></span> Blog</a>

								<ul>
									<li><a href="html/pages-blog-list.html"><span class="fa fa-copy"></span> List of Posts</a></li>
									<li><a href="html/pages-blog-post.html"><span class="fa fa-file-o"></span>Single Post</a></li>
								</ul>
							</li>
							<li class="xn-openable">
								<a href="#"><span class="fa fa-sign-in"></span> Login</a>
								<ul>
									<li><a href="html/pages-login.html">App Login</a></li>
									<li><a href="html/pages-login-website.html">Website Login</a></li>
									<li><a href="html/pages-login-website-light.html"> Website Login Light</a></li>
								</ul>
							</li>
							<li class="xn-openable">
								<a href="#"><span class="fa fa-warning"></span> Error Pages</a>
								<ul>
									<li><a href="html/pages-error-404.html">Error 404 Sample 1</a></li>
									<li><a href="html/pages-error-404-2.html">Error 404 Sample 2</a></li>
									<li><a href="html/pages-error-500.html"> Error 500</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Layouts</span></a>
						<ul>
							<li><a href="html/layout-boxed.html">Boxed</a></li>
							<li><a href="html/layout-nav-toggled.html">Navigation Toggled</a></li>
							<li><a href="html/layout-nav-top.html">Navigation Top</a></li>
							<li><a href="html/layout-nav-right.html">Navigation Right</a></li>
							<li><a href="html/layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
							<li><a href="html/layout-nav-custom.html">Custom Navigation</a></li>
							<li><a href="html/layout-frame-left.html">Frame Left Column</a></li>
							<li><a href="html/layout-frame-right.html">Frame Right Column</a></li>
							<li><a href="html/layout-search-left.html">Search Left Side</a></li>
							<li><a href="html/blank.html">Blank Page</a></li>
						</ul>
					</li>
					<li class="xn-title">Components</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-cogs"></span> <span class="xn-text">UI Kits</span></a>
						<ul>
							<li><a href="html/ui-widgets.html"><span class="fa fa-heart"></span> Widgets</a></li>
							<li><a href="html/ui-elements.html"><span class="fa fa-cogs"></span> Elements</a></li>
							<li><a href="html/ui-buttons.html"><span class="fa fa-square-o"></span> Buttons</a></li>
							<li><a href="html/ui-panels.html"><span class="fa fa-pencil-square-o"></span> Panels</a></li>
							<li><a href="html/ui-icons.html"><span class="fa fa-magic"></span> Icons</a>
								<div class="informer informer-warning">+679</div>
							</li>
							<li><a href="html/ui-typography.html"><span class="fa fa-pencil"></span> Typography</a></li>
							<li><a href="html/ui-portlet.html"><span class="fa fa-th"></span> Portlet</a></li>
							<li><a href="html/ui-sliders.html"><span class="fa fa-arrows-h"></span> Sliders</a></li>
							<li><a href="html/ui-alerts-popups.html"><span class="fa fa-warning"></span> Alerts & Popups</a></li>
							<li><a href="html/ui-lists.html"><span class="fa fa-list-ul"></span> Lists</a></li>
							<li><a href="html/ui-tour.html"><span class="fa fa-random"></span> Tour</a></li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-pencil"></span> <span class="xn-text">Forms</span></a>
						<ul>
							<li>
								<a href="html/form-layouts-two-column.html"><span class="fa fa-tasks"></span> Form Layouts</a>
								<div class="informer informer-danger">New</div>
								<ul>
									<li><a href="html/form-layouts-one-column.html"><span class="fa fa-align-justify"></span> One Column</a></li>
									<li><a href="html/form-layouts-two-column.html"><span class="fa fa-th-large"></span> Two Column</a></li>
									<li><a href="html/form-layouts-tabbed.html"><span class="fa fa-table"></span> Tabbed</a></li>
									<li><a href="html/form-layouts-separated.html"><span class="fa fa-th-list"></span> Separated Rows</a></li>
								</ul>
							</li>
							<li><a href="html/form-elements.html"><span class="fa fa-file-text-o"></span> Elements</a></li>
							<li><a href="html/form-validation.html"><span class="fa fa-list-alt"></span> Validation</a></li>
							<li><a href="html/form-wizards.html"><span class="fa fa-arrow-right"></span> Wizards</a></li>
							<li><a href="html/form-editors.html"><span class="fa fa-text-width"></span> WYSIWYG Editors</a></li>
							<li><a href="html/form-file-handling.html"><span class="fa fa-floppy-o"></span> File Handling</a></li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="html/tables.html"><span class="fa fa-table"></span> <span class="xn-text">Tables</span></a>
						<ul>
							<li><a href="html/table-basic.html"><span class="fa fa-align-justify"></span> Basic</a></li>
							<li><a href="html/table-datatables.html"><span class="fa fa-sort-alpha-desc"></span> Data Tables</a></li>
							<li><a href="html/table-export.html"><span class="fa fa-download"></span> Export Tables</a></li>
						</ul>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-bar-chart-o"></span> <span class="xn-text">Charts</span></a>
						<ul>
							<li><a href="html/charts-morris.html"><span class="xn-text">Morris</span></a></li>
							<li><a href="html/charts-nvd3.html"><span class="xn-text">NVD3</span></a></li>
							<li><a href="html/charts-rickshaw.html"><span class="xn-text">Rickshaw</span></a></li>
							<li><a href="html/charts-other.html"><span class="xn-text">Other</span></a></li>
						</ul>
					</li>
					<li>
						<a href="html/maps.html"><span class="fa fa-map-marker"></span> <span class="xn-text">Maps</span></a>
					</li>
					<li class="xn-openable">
						<a href="#"><span class="fa fa-sitemap"></span> <span class="xn-text">Navigation Levels</span></a>
						<ul>
							<li class="xn-openable">
								<a href="#">Second Level</a>
								<ul>
									<li class="xn-openable">
										<a href="#">Third Level</a>
										<ul>
											<li class="xn-openable">
												<a href="#">Fourth Level</a>
												<ul>
													<li><a href="#">Fifth Level</a></li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
					</li>

				</ul> -->

			</div>