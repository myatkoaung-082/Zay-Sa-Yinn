@extends('UserLayout.layout')
@section('title','Dashboard')


@section('contents')
<div class="desktop-header">
    <div class="card card-block topnav-left">
        <div class="card-body write-card">
             <div class="d-flex flex-wrap align-items-center justify-content-between">
                   <h4>Dashboard</h4>
                   <div class="media flex-wrap align-items-center">
                      <div class="iq-search-bar card-search mr-3 position-relative">
                         <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               <i class="ri-search-line"></i>
                         </a>
                         <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                               <form action="#" class="searchbox">
                                  <div class="form-group mb-0 position-relative">
                                  <input type="text" class="text search-input font-size-12" placeholder="Find Your Notebook..">
                                  <a href="#" class="search-link"><i class="ri-search-line"></i></a> 
                                  </div>
                               </form>
                         </div>
                      </div>
                      <a href="#" class="btn btn-primary add-btn" data-toggle="modal" data-target="#new-note"><i class="las la-plus pr-2"></i>New Folder</a>
                   </div>
             </div>
          </div>
    </div>

    {{-- notification section --}}
    <div class="card topnav-right">
        
        <div class="card-body card-content-right">
            <ul class="list-inline m-0 p-0 d-flex align-items-center justify-content-around">
                <li class="nav-item nav-icon dropdown">
                    <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="">
                        <svg width="20" class="svg-icon" id="main-n-01" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" style="stroke-dasharray: 82, 102; stroke-dashoffset: 0;"></path>
                        </svg>
                    </i>
                    <span class="badge badge-primary count-mail mail rounded-circle">2</span>
                    <span class="bg-primary"></span>
                    </a>
                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                        <div class="card shadow-none m-0">
                            <div class="card-body p-0 ">
                                <div class="p-3">
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center cust-card pb-3 border-bottom">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Emma Watson</h5>
                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                </div>
                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Ashlynn Franci</h5>
                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                </div>
                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center cust-card pt-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Kianna Carder</h5>
                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                </div>
                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item nav-icon dropdown pl-3"> 
                    <a href="#" class="search-toggle dropdown-toggle nav-icon-1" id="dropdownMenuButton002" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="">
                        <svg width="20" class="svg-icon" id="main-n-02" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" style="stroke-dasharray: 63, 83; stroke-dashoffset: 0;"></path>
                        </svg>
                    </i>
                    <span class="badge badge-primary count-mail rounded-circle">2</span>
                    <span class="bg-primary "></span>
                    </a>
                    <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton002">
                        <div class="card shadow-none m-0">
                            <div class="card-body p-0 ">
                                <div class="p-3">
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center cust-card pb-3 border-bottom">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/01.jpg" alt="01">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Emma Watson</h5>
                                                    <small class="text-dark"><b>12 : 47 pm</b></small>
                                                </div>
                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center cust-card py-3 border-bottom">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/02.jpg" alt="02">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Ashlynn Franci</h5>
                                                    <small class="text-dark"><b>11 : 30 pm</b></small>
                                                </div>
                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#" class="iq-sub-card">
                                        <div class="media align-items-center cust-card pt-3">
                                            <div class="">
                                                <img class="avatar-50 rounded-small" src="../assets/images/user/03.jpg" alt="03">
                                            </div>
                                            <div class="media-body ml-3">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <h5 class="mb-0">Kianna Carder</h5>
                                                    <small class="text-dark"><b>11 : 21 pm</b></small>
                                                </div>
                                                <small class="mb-0">Lorem ipsum dolor sit amet</small>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a class="btn btn-block btn-primary position-relative text-center" href="#" role="button">
                                    View All
                                </a>
                            </div>
                        </div>
                    </div>
                </li>  
            </ul>
        </div>
    </div>
    {{-- notification section --}}
</div>

<div class="row">
    <div class="col-lg-12">
       <div class="card card-block card-stretch card-height note-table">
          <div class="card-body custom-notes-space">
             <div class="table-responsive">
                <table id="tree-table-9" class="table tree mb-0 tbl-server-info">
                   <thead class="bg-white text-uppercase">
                      <tr class="ligth">
                         <th>Title</th>
                         <th>Created By</th>
                         <th>Updated</th>
                         <th>Shared With</th>
                         <th>Action</th>
                      </tr>
                   </thead>
                   <tbody>
                      <tr data-id="1" data-parent="0" data-level="1">
                         <td data-column="name">First Notebook</td>
                         <td>Bud Wiser</td>
                         <td>Dec 4</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="2" data-parent="1" data-level="1" style="display: none;">
                         <td data-column="name">Birthday Celebration</td>
                         <td>Bud Wiser</td>
                         <td>Dec 4</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="3" data-parent="1" data-level="1" style="display: none;">
                         <td data-column="name">Lecture Notes</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td><i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="4" data-parent="1" data-level="1" style="display: none;">
                         <td data-column="name">Meal Planner</td>
                         <td>Bud Wiser</td>
                         <td>Dec 6</td>
                         <td><i class="las la-user-friends mr-3 font-size-20"></i>
                            01 share</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="5" data-parent="0" data-level="1">
                         <td data-column="name">Project Plan</td>
                         <td>Bud Wiser</td>
                         <td>Dec 4</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="6" data-parent="5" data-level="1" style="display: none;">
                         <td data-column="name">Birthday</td>
                         <td>Bud Wiser</td>
                         <td>Dec 4</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="7" data-parent="5" data-level="1" style="display: none;">
                         <td data-column="name">Essay Outline</td>
                         <td>Bud Wiser</td>
                         <td>Dec 4</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="8" data-parent="5" data-level="1" style="display: none;">
                         <td data-column="name">Lecture Notes</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td><i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="9" data-parent="0" data-level="1">
                         <td data-column="name">Meeting Notes</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td><i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="10" data-parent="9" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Reminder</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td><i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="11" data-parent="9" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>to-do</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td><i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="12" data-parent="9" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Daily Reflection</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td><i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="13" data-parent="0" data-level="1">
                         <td data-column="name">Event Notes</td>
                         <td>Bud Wiser</td>
                         <td>Dec 8</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             05 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="14" data-parent="13" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Meal Planner</td>
                         <td>Bud Wiser</td>
                         <td>Dec 6</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             04 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="15" data-parent="13" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>to-do</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             02 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="16" data-parent="13" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Daily Reflection</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             02 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="17" data-parent="0" data-level="1">
                         <td data-column="name">Classic Notes</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             06 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="18" data-parent="17" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Note Planner</td>
                         <td>Bud Wiser</td>
                         <td>Dec 6</td>
                         <td>
                            05 Share
                            04 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="19" data-parent="17" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Event Note</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             02 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="20" data-parent="17" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Daily Meting</td>
                         <td>Bud Wiser</td>
                         <td>Dec 6</td>
                         <td>
                           <i class="las la-user-friends mr-3 font-size-20"></i>
                            05 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="21" data-parent="0" data-level="1">
                         <td data-column="name">New Classic</td>
                         <td>Bud Wiser</td>
                         <td>Dec 19</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             08 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="22" data-parent="21" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Event note</td>
                         <td>Bud Wiser</td>
                         <td>Dec 20</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            09 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="23" data-parent="0" data-level="1">
                         <td data-column="name">Second Note</td>
                         <td>Bud Wiser</td>
                         <td>Dec 5</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                             02 Share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="24" data-parent="23" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Daily Meting</td>
                         <td>Bud Wiser</td>
                         <td>Dec 6</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            04 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="25" data-parent="0" data-level="1">
                         <td data-column="name">New Meting</td>
                         <td>Bud Wiser</td>
                         <td>Dec 6</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="26" data-parent="25" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Meting Updates</td>
                         <td>Bud Wiser</td>
                         <td>Dec 6</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            02 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="27" data-parent="25" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Date List</td>
                         <td>Bud Wiser</td>
                         <td>Dec 9</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            08 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="28" data-parent="0" data-level="1">
                         <td data-column="name">Fresser List</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            08 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="29" data-parent="28" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Updated List</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            08 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="30" data-parent="28" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>New Date</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="31" data-parent="28" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Fress List</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="32" data-parent="0" data-level="1">
                         <td data-column="name">New Details</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="33" data-parent="32" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>New work</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td><i class="las la-lock mr-3 font-size-20"></i>Only You</td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="34" data-parent="0" data-level="1">
                         <td data-column="name">Updated List</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            08 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="35" data-parent="34" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Updated doc</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            07 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="36" data-parent="0" data-level="1">
                         <td data-column="name">New Updates</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            06 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="37" data-parent="36" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>New Updates</td>
                         <td>Bud Wiser</td>
                         <td>Dec 10</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            06 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="38" data-parent="0" data-level="1">
                         <td data-column="name">Work Notes</td>
                         <td>Bud Wiser</td>
                         <td>Dec 21</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            06 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                      <tr data-id="39" data-parent="38" data-level="2" style="display: none;">
                         <td data-column="name"><span class="treegrid-indent" style="width:30px"></span>Work Notes</td>
                         <td>Bud Wiser</td>
                         <td>Dec 22</td>
                         <td>
                             <i class="las la-user-friends mr-3 font-size-20"></i>
                            01 share
                         </td>
                         <td>
                            <div>
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="las la-pen mr-0"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="las la-trash-alt mr-0"></i></a>
                            </div>
                         </td>
                      </tr>
                   </tbody>
                </table>
             </div>
          </div>
       </div>
    </div>
</div>
@endsection