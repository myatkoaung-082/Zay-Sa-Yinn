@extends('UserLayout.layout')
@section('title', 'Dashboard')

@section('custom-css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection

@section('contents')

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
                                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                                aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                Used: 100%
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column mt-3">
                                            <!-- Row 1: Total & Used (sm: side-by-side, xs: stacked) -->
                                            <div class="d-flex justify-content-between w-100 col-gap-5">
                                                <span
                                                    class="badge bg-primary rounded-pill p-2 mb-2 mb-sm-0 me-sm-2 flex-fill text-center">
                                                    <i class="bi bi-cash-stack me-1"></i> Total: $663,200
                                                </span>
                                                <span
                                                    class="badge bg-warning text-dark rounded-pill p-2 mb-2 mb-sm-0 flex-fill text-center">
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

@section('script')
    <!-- JavaScript for Multiple Image Upload and Preview -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const itemImages = document.getElementById('itemImages');
            const imagePreviews = document.getElementById('imagePreviews');
            const fileLabel = document.querySelector('.custom-file-label');
            const MAX_FILES = 5;
            const MAX_SIZE_MB = 2;

            // Multiple image preview handler
            itemImages.addEventListener('change', function(e) {
                const files = e.target.files;
                imagePreviews.innerHTML = '';

                if (files.length > MAX_FILES) {
                    alert(`You can upload maximum ${MAX_FILES} images`);
                    this.value = '';
                    fileLabel.textContent = 'Choose images (Max 5)';
                    imagePreviews.classList.add('d-none'); // ပုံမပြဘူး
                    return;
                }

                if (files.length === 0) {
                    imagePreviews.classList.add('d-none'); // ပုံမရွေးရင် မပြ
                    fileLabel.textContent = 'Choose images (Max 5)';
                    return;
                }

                // ပုံတစ်ခုခု ရွေးထားရင် `d-none` ဖြုတ်
                imagePreviews.classList.remove('d-none');

                for (let i = 0; i < files.length; i++) {
                    const file = files[i];

                    // Check file size
                    if (file.size > MAX_SIZE_MB * 1024 * 1024) {
                        alert(`File ${file.name} is too large (max ${MAX_SIZE_MB}MB)`);
                        this.value = '';
                        fileLabel.textContent = 'Choose images (Max 5)';
                        imagePreviews.innerHTML = '';
                        imagePreviews.classList.add('d-none'); // ပုံမပြ
                        return;
                    }

                    const reader = new FileReader();

                    reader.onload = function(event) {
                        const previewCol = document.createElement('div');
                        previewCol.className = 'col-4 col-md-3 mb-2';

                        previewCol.innerHTML = `
                    <div class="image-preview-item position-relative">
                        <img src="${event.target.result}" alt="Preview" class="img-thumbnail" style="height: 80px; width: 100%; object-fit: cover;">
                        <button type="button" class="btn btn-sm btn-danger remove-image" style="position: absolute; top: 0; right: 0;">
                            <i class="fas fa-times"></i>
                        </button>
                        <small class="d-block text-truncate">${file.name}</small>
                    </div>
                `;

                        imagePreviews.appendChild(previewCol);
                    };

                    reader.readAsDataURL(file);
                }

                if (files.length > 0) {
                    fileLabel.textContent = `${files.length} file(s) selected`;
                } else {
                    fileLabel.textContent = 'Choose images (Max 5)';
                }
            });

            // Remove image handler
            imagePreviews.addEventListener('click', function(e) {
                if (e.target.classList.contains('remove-image') ||
                    e.target.parentElement.classList.contains('remove-image')) {
                    const previewItem = e.target.closest('.image-preview-item');
                    previewItem.remove();

                    // Update file input
                    updateFileInput();

                    // Update label
                    const remainingPreviews = imagePreviews.querySelectorAll('.image-preview-item').length;
                    fileLabel.textContent = remainingPreviews > 0 ?
                        `${remainingPreviews} file(s) selected` :
                        'Choose images (Max 5)';

                    // ပုံအားလုံးဖျက်လိုက်ရင် `d-none` ပြန်ထည့်
                    if (remainingPreviews === 0) {
                        imagePreviews.classList.add('d-none');
                    }
                }
            });

            function updateFileInput() {
                const dataTransfer = new DataTransfer();
                const previewItems = imagePreviews.querySelectorAll('.image-preview-item');
                const currentFiles = Array.from(itemImages.files);

                const keptFiles = currentFiles.filter(file => {
                    return Array.from(previewItems).some(item =>
                        item.querySelector('small').textContent === file.name
                    );
                });

                keptFiles.forEach(file => dataTransfer.items.add(file));
                itemImages.files = dataTransfer.files;
            }
        });
    </script>
    <script>
          $(document).ready(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#add-itemform").submit(function(e) {
                e.preventDefault();
                var formData = new FormData(this);

                $.ajax({
                    url: "/buyer/add-item",
                    type: 'POST',
                    dataType: 'json',
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        if (response.status == true) {
                            window.location.href = "{{ route('buyed.items') }}";

                        } else {
                            var errors = response.errors ?? {};

                            var fields = [
                                'itemBuyedDate',
                                'itemName',
                                'itemPrice',
                                'itemImages'
                            ];

                            fields.forEach(function(field) {
                                if (errors[field]) {
                                    $('#' + field)
                                        .closest('.input-box')
                                        .find('span.invalid-feedback')
                                        .addClass('d-block')
                                        .html(errors[field]);
                                } else {
                                    $('#' + field)
                                        .closest('.input-box')
                                        .find('span.invalid-feedback')
                                        .removeClass('d-block')
                                        .html('');
                                }
                            });
                        }
                    }
                });
            });

            $('#cancel-btn').click(function() {
                $('.invalid-feedback').text('');
                $('#shopRequestForm input[type="checkbox"]').prop('checked', false);
            });
        });
    </script>
@endsection
