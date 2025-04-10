@extends('UserLayout.layout')
@section('title','Dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/home.css') }}">
@endsection

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
                      <a href="#" class="btn btn-primary add-btn" data-toggle="modal" data-target="#new-item"><i class="las la-plus pr-2"></i>Add Item</a>
                   </div>
             </div>
          </div>
    </div>

    {{-- add new item model start --}}
    <div class="modal fade" id="new-item" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="popup text-left">
                        <h4 class="mb-4">Add New Item</h4>
                        <div class="content create-workform">
                            <h5 class="mb-2">Name</h5>
                            <input type="text" class="form-control" placeholder="Notebook Name">
                            <h5 class="mb-2">Description</h5>
                                <textarea class="form-control" name="address" rows="5"> 
                                </textarea>
                            <div class="col-lg-12 mt-4">
                                <div class="d-flex flex-wrap align-items-ceter justify-content-center">
                                    <div class="btn btn-primary mr-4" data-dismiss="modal">Cancel</div>
                                    <div class="btn btn-outline-primary" data-dismiss="modal">Create</div>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- add new item model end --}}

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
            {{-- finanial result show start --}}

            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h1 class="text-center mb-5 fw-bold">Financial Summary</h1>
                        
                        <div class="row row-gap-20">
                            <!-- Total Money Card -->
                            <div class="col-md-4">
                                <div class="card financial-card total-money h-100">
                                    <div class="card-body text-center p-4">
                                        <i class="bi bi-cash-stack card-icon mb-3"></i>
                                        <h3 class="card-title mb-3">Total Money</h3>
                                        <div class="money-value">$663,200.00</div>
                                        <p class="mt-3 mb-0">
                                            <i class="bi bi-info-circle"></i> All funds received
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Used Money Card -->
                            <div class="col-md-4">
                                <div class="card financial-card used-money h-100">
                                    <div class="card-body text-center p-4">
                                        <i class="bi bi-cart-check card-icon mb-3"></i>
                                        <h3 class="card-title mb-3">Used Money</h3>
                                        <div class="money-value">$663,200.00</div>
                                        <p class="mt-3 mb-0">
                                            <i class="bi bi-info-circle"></i> Allocated expenses
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Current Money Card -->
                            <div class="col-md-4">
                                <div class="card financial-card current-money h-100">
                                    <div class="card-body text-center p-4">
                                        <i class="bi bi-wallet2 card-icon mb-3"></i>
                                        <h3 class="card-title mb-3">Current Money</h3>
                                        <div class="money-value">$0.00</div>
                                        <p class="mt-3 mb-0">
                                            <i class="bi bi-info-circle"></i> Available balance
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Summary Chart (Optional) -->
                        <div class="card mt-5">
                            <div class="card-header bg-white">
                                <h5 class="mb-0"><i class="bi bi-pie-chart me-2"></i>Financial Overview</h5>
                            </div>
                            <div class="card-body">
                                <div class="progress" style="height: 30px;">
                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                        Used: 100%
                                    </div>
                                </div>
                                <div class="d-flex flex-column mt-3">
                                    <!-- Row 1: Total & Used (sm: side-by-side, xs: stacked) -->
                                    <div class="d-flex justify-content-between w-100 col-gap-5">
                                        <span class="badge bg-primary rounded-pill p-2 mb-2 mb-sm-0 me-sm-2 flex-fill text-center">
                                            <i class="bi bi-cash-stack me-1"></i> Total: $663,200
                                        </span>
                                        <span class="badge bg-warning text-dark rounded-pill p-2 mb-2 mb-sm-0 flex-fill text-center">
                                            <i class="bi bi-cart-check me-1"></i> Used: $663,200
                                        </span>
                                    </div>
                                
                                    <!-- Row 2: Current -->
                                    <div class="d-flex justify-content-center w-100 mt-2">
                                        <span class="badge bg-success rounded-pill p-2 text-center w-75">
                                            <i class="bi bi-wallet2 me-1"></i> Current: $0
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        
                        <!-- Action Buttons -->
                        <div class="d-flex justify-content-center col-gap-5 mt-5">
                            <button class="btn btn-primary btn-lg px-4">
                                <i class="bi bi-plus-circle me-2"></i>Add Funds
                            </button>
                            <button class="btn btn-outline-secondary btn-lg px-4">
                                <i class="bi bi-file-earmark-text me-2"></i>Generate Report
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- finanial result show end --}}        
          </div>
       </div>
    </div>
</div>
@endsection