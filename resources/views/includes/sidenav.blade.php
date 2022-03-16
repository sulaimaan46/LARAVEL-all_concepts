<div class="side-nav">
                <div class="side-nav-inner">
                    <div class="side-nav-logo">
                        <a href="index.blade.php">
                            <div class="logo logo-dark" style="background-image: url('assets/images/logo/sparklogo.png')"></div>
                            <div class="logo logo-white" style="background-image: url('assets/images/logo/logo-white.png')"></div>
                        </a>
                        <div class="mobile-toggle side-nav-toggle">
                            <a href="">
                                <i class="ti-arrow-circle-left"></i>
                            </a>
                        </div>
                    </div>
                    <ul class="side-nav-menu scrollable">
                        <li class="nav-item active">
                            <a class="mrg-top-30" href="index">
                                <span class="icon-holder">
										<i class="ti-home"></i>
									</span>
                                <span class="title">Dashboard</span>

                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-package"></i>
									</span>
                                <span class="title">Email</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href={{url('/')}}/email>Send Email</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-palette"></i>
									</span>
                                <span class="title">Student Details</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url('/')}}/studentdetails">Details</a>
                                </li>
                            </ul>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url('/')}}/studentsdetails">Add Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-file"></i>
									</span>
                                <span class="title">Form VALIDATION</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{url('/')}}/form">Form Elements</a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-layout-media-overlay"></i>
									</span>
                                <span class="title">CRUD</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Database Entry</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-map-alt"></i>
									</span>
                                <span class="title">Map</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="google-map.html">Google Map</a>
                                </li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
										<i class="ti-view-list-alt"></i>
									</span>
                                <span class="title">File Upload</span>
                                <span class="arrow">
										<i class="ti-angle-right"></i>
									</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item dropdown">
                                    <a href="indexfileupload.php">
                                        <span>Try To Upload</span>
                                    </a>

                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
