@extends('UserLayout.layout')
@section('title','All Items')
@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/items.css') }}">
@endsection

@section('contents')


<div class="row">
    <div class="col-lg-12">
       <div class="card card-block card-stretch card-height note-table">
        <div class="card-body">
            <div class="table-responsive">
               <div class="row justify-content-between">
                  <div class="col-sm-6 col-md-6">
                     <div id="user_list_datatable_info" class="dataTables_filter">
                        <form class="mr-3 position-relative">
                           <div class="form-group mb-0">
                              <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                           </div>
                        </form>
                     </div>
                  </div>
                  <div class="col-sm-6 col-md-6">
                     <div class="user-list-files d-flex">
                        <a class="bg-primary" href="javascript:void();">
                           Print
                        </a>
                        <a class="bg-primary" href="javascript:void();">
                           Excel
                        </a>
                        <a class="bg-primary" href="javascript:void();">
                           Pdf
                        </a>
                     </div>
                  </div>
               </div>
               <table id="user-list-table" class="table table-striped tbl-server-info mt-4" role="grid" aria-describedby="user-list-page-info">
                <thead>
                    <tr class="ligth">
                        <th>Images</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Buyer</th>
                        <th>Buyed Date</th>
                        <th style="min-width: 100px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>
                            <div class="iq-media-group d-flex flex-wrap">
                                @if($item->images->count() > 0)
                                <!-- First image larger -->
                                <a href="{{ asset('images/items/'.$item->images[0]->image_name) }}" class="iq-media mr-2 mb-2" data-lightbox="item-{{ $item->id }}">
                                    <img class="img-fluid avatar-80 rounded" src="{{ asset('images/items/'.$item->images[0]->image_name) }}" alt="{{ $item->name }}">
                                </a>
                                
                                <!-- Smaller thumbnails for remaining images -->
                                <div class="d-flex flex-wrap" style="max-width: 180px;">
                                    @foreach($item->images->slice(1) as $image)
                                        <a href="{{ asset('images/items/'.$image->image_name) }}" class="iq-media mr-2 mb-2" data-lightbox="item-{{ $item->id }}">
                                            <img class="img-fluid avatar-40 rounded" src="{{ asset('images/items/'.$image->image_name) }}" alt="{{ $item->name }}">
                                        </a>
                                    @endforeach
                                </div>
                            @else
                                <span class="text-muted">No images available</span>
                            @endif
                            </div>
                        </td>
                        <td>{{ $item->name }}</td>
                        <td>${{ number_format($item->price, 2) }}</td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->buyed_date}}</td>
                        <td>
                            <div class="flex align-items-center list-user-action">
                                <a href="#" class="badge badge-success mr-3 edit-note" data-toggle="modal" data-target="#edit-note"><i class="ri-pencil-line"></i></a>
                                <a href="#" class="badge badge-danger" data-extra-toggle="delete" data-closest-elem="tr"><i class="ri-delete-bin-line"></i></a>
                            </div>
                        </td>
                    </tr>
                 
                    @endforeach
                </tbody>
            </table>
            </div>
               <div class="row justify-content-between mt-3">
                  <div id="user-list-page-info" class="col-md-6">
                     <span>Showing 1 to 5 of 5 entries</span>
                  </div>
                  <div class="col-md-6">
                     <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-end mb-0">
                           <li class="page-item disabled">
                              <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                           </li>
                           <li class="page-item active"><a class="page-link" href="#">1</a></li>
                           <li class="page-item"><a class="page-link" href="#">2</a></li>
                           <li class="page-item"><a class="page-link" href="#">3</a></li>
                           <li class="page-item">
                              <a class="page-link" href="#">Next</a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
         </div>
       </div>
    </div>
</div>
@endsection