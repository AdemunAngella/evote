<!-- ============================ Sidebar================================== -->  
<aside class="left-sidebar bg-light shadow">
            <div class="scroll-sidebar">
                <nav class="sidebar-nav">
                    <div class="sidebar-header p-3 mt-2">
                        <span class="hidden-xs">
                            <span class="font-bold">
                                <img src="./assets/images/icons/evote.png" alt="homepage-logo" width="80" height="50"/>
                                <hr>
                            </span>
                        </span>
                    </div>
                    <ul id="sidebarnav">
                        <li> <a class="waves-effect waves-dark" href="./evote.kyu.ac.ug/home"><i class="fas fa-home    mr-3"></i><span class="hide-menu">Dashboard</span></a></li>
                        <li class="nav-small-cap">&nbsp;&nbsp;&nbsp; KYU | VOTE </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-bookmark mr-3"></i><span class="hide-menu">Course / Category</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./evote.kyu.ac.ug/courses"><b>ALL</b> | Courses / Categories</a></li>
                                <li><a href="./evote.kyu.ac.ug/courses/create"><b>ADD</b> | Course / Category</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-check-square mr-3"></i><span class="hide-menu">Elections</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./evote.kyu.ac.ug/elections"><b>ALL</b> | Election Campaigns</a></li>
                                <li><a href="./evote.kyu.ac.ug/elections/create"><b>ADD</b> | Election Campaign</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-puzzle-piece mr-3"></i><span class="hide-menu">Posts</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./evote.kyu.ac.ug/posts"><b>ALL</b> | Posts</a></li>
                                <li><a href="./evote.kyu.ac.ug/posts/create"><b>ADD</b> | Post</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users mr-3"></i><span class="hide-menu">Candidates</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./evote.kyu.ac.ug/candidates"><b>ALL</b> | Candidates</a></li>
                                <li><a href="./evote.kyu.ac.ug/candidates/create"><b>ADD</b> | Candidate</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">&nbsp;&nbsp;&nbsp; KYU | REG </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-book mr-3"></i><span class="hide-menu">Voter Registry</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./evote.kyu.ac.ug/voters"><b>ALL</b> | Registered Voters</a></li>
                                <li><a href="./evote.kyu.ac.ug/voters/create"><b>ADD</b> | New Voter</a></li>
                            </ul>
                        </li>
                        <li class="nav-small-cap">&nbsp;&nbsp;&nbsp; USER</li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-users mr-3"></i><span class="hide-menu">Users</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="./evote.kyu.ac.ug/users"><b>ALL</b> | user</a></li>
                                <li><a href="./evote.kyu.ac.ug/users/create"><b>ADD</b> | user</a></li>
                            </ul>
                        </li>
                        <li> <a class="waves-effect waves-dark text-danger" href="./evote.kyu.ac.ug/logout" aria-expanded="false"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-power-off    mr-3 "></i><span class="hide-menu">Logout</span></a>

                            <form id="logout-form" action="./evote.kyu.ac.ug/logout" method="POST" class="d-none">
                                <input type="hidden" name="_token" value="jarssdfVIMYbl4fPf1tlxlY7MK8t2bKMIVBldx2n">            
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- ============================================================== --> 