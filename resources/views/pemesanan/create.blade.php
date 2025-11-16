<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS System - New Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary: #4361ee;
            --primary-light: #4895ef;
            --primary-dark: #3a0ca3;
            --secondary: #f72585;
            --light: #f8f9fa;
            --dark: #212529;
            --gray: #6c757d;
            --light-gray: #e9ecef;
            --border-radius: 12px;
            --box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: #f5f7ff;
            color: var(--dark);
            padding: 2rem 0;
        }

        .pos-container {
            background: white;
            border-radius: var(--border-radius);
            box-shadow: var(--box-shadow);
            overflow: hidden;
        }

        .pos-header {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: white;
            padding: 1.25rem 1.5rem;
            border-radius: var(--border-radius) var(--border-radius) 0 0;
        }

        .table-badge {
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            font-weight: 600;
            padding: 0.5rem 1rem;
            border-radius: 50px;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
            gap: 1.25rem;
            padding: 1.5rem;
        }

        .product-card {
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius);
            overflow: hidden;
            transition: var(--transition);
            cursor: pointer;
            background: white;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--box-shadow);
            border-color: var(--primary-light);
        }

        .product-card.selected {
            border: 2px solid var(--primary);
            box-shadow: 0 0 0 3px rgba(67, 97, 238, 0.2);
        }

        .product-image {
            width: 100%;
            height: 160px;
            object-fit: cover;
            border-bottom: 1px solid var(--light-gray);
        }

        .product-info {
            padding: 1rem;
        }

        .product-name {
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .product-price {
            font-weight: 700;
            color: var(--primary);
            font-size: 1.1rem;
        }

        .product-meta { /* This class is now used in product cards as well */
            font-size: 0.8rem;
            color: var(--gray);
            margin-top: 0.5rem; /* Added or confirmed for this context */
        }

        .order-panel {
            background: var(--light);
            border-left: 1px solid var(--light-gray);
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .order-header {
            padding: 1.25rem 1.5rem;
            border-bottom: 1px solid var(--light-gray);
            background: white;
        }

        .order-items {
            flex: 1;
            overflow-y: auto;
            padding: 1.5rem;
        }

        .order-item {
            display: flex;
            align-items: center;
            padding: 0.75rem 0;
            border-bottom: 1px solid var(--light-gray);
        }

        .item-name {
            flex: 1;
            font-weight: 500;
        }

        .item-meta {
            font-size: 0.8rem;
            color: var(--gray);
            margin-top: 0.25rem;
        }

        .item-controls {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .qty-btn {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            background: var(--primary);
            color: white;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            cursor: pointer;
            transition: var(--transition);
        }

        .qty-btn:hover {
            background: var(--primary-dark);
        }

        .qty-input {
            width: 40px;
            text-align: center;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
            padding: 0.25rem;
        }

        .remove-item {
            color: var(--secondary);
            cursor: pointer;
            margin-left: 0.5rem;
            transition: var(--transition);
        }

        .remove-item:hover {
            transform: scale(1.1);
        }

        .item-price {
            font-weight: 600;
            min-width: 80px;
            text-align: right;
        }

        .order-summary {
            padding: 1.5rem;
            border-top: 1px solid var(--light-gray);
            background: white;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            margin-bottom: 0.75rem;
        }

        .summary-total {
            font-weight: 700;
            font-size: 1.1rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid var(--light-gray);
        }

        .btn-checkout {
            background: var(--primary);
            color: white;
            border: none;
            padding: 0.75rem;
            font-weight: 600;
            border-radius: var(--border-radius);
            width: 100%;
            transition: var(--transition);
        }

        .btn-checkout:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .empty-state {
            text-align: center;
            padding: 2rem;
            color: var(--gray);
        }

        .empty-state i {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--light-gray);
        }

        .pending-orders .list-group-item {
            background-color: #fff;
            transition: all 0.3s ease;
        }
        
        .pending-orders .list-group-item:hover {
            box-shadow: 0 2px 6px rgba(0,0,0,0.05);
        }
        
        .pending-orders .badge {
            font-weight: 500;
            padding: 0.4em 0.7em;
            font-size: 0.75rem;
        }
        
        #finish-order-btn {
            transition: all 0.3s ease;
            background-color: #10b981;
            border: none;
            letter-spacing: 0.5px;
        }
        
        #finish-order-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(16, 185, 129, 0.2);
            background-color: #0da271;
        }
        
        #print-receipt-btn {
            transition: all 0.3s ease;
            border: 1px solid #cbd5e1;
        }
        
        #print-receipt-btn:hover {
            background-color: #f1f5f9;
            border-color: #94a3b8;
        }

        .order-time {
            font-size: 0.8rem;
            color: var(--gray);
        }

        .order-items-count {
            background: var(--primary);
            color: white;
            padding: 0.25rem 0.5rem;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        @media (max-width: 992px) {
            .order-panel {
                border-left: none;
                border-top: 1px solid var(--light-gray);
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="pos-container mb-4">
            <div class="pos-header d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <h4 class="mb-0 text-white me-3">New Order</h4>
                    <span class="table-badge">Table: {{ $selectedMejaId ? $meja->find($selectedMejaId)->nama : 'Select table' }}</span>
                </div>
                <a href="{{ url('/') }}" class="btn btn-light btn-sm d-flex align-items-center">
                    <i class="fas fa-home me-2"></i>Beranda
                </a>
            </div>
            <div class="pos-card-body">
                <form action="{{ route('pemesanans.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-8">
                            <div class="mb-4 p-3"> <label class="form-label fw-bold">Select Table</label>
                                <select class="form-select" name="meja_id" {{ $selectedMejaId ? 'disabled' : '' }}>
                                    @foreach($meja as $item)
                                        <option value="{{ $item->id }}" {{ $selectedMejaId == $item->id ? 'selected' : '' }}>
                                            {{ $item->nama }}
                                        </option>
                                    @endforeach
                                </select>
                                @if($selectedMejaId)
                                    <input type="hidden" name="meja_id" value="{{ $selectedMejaId }}">
                                @endif
                            </div>

                            <div class="mb-4">
                                <label class="form-label ps-3 fw-bold">Select Products</label>
                                <div class="product-grid">
                                    @foreach($produk as $item)
                                        <div class="product-card" 
                                             data-id="{{ $item->id }}" 
                                             data-harga="{{ $item->harga }}" 
                                             data-nama="{{ $item->nama }}"
                                             data-kategori="{{ $item->kategori ?? 'N/A' }}"
                                             data-paket="{{ $item->paket ?? 'N/A' }}"
                                             data-deskripsi="{{ $item->deskripsi ?? 'Tidak ada deskripsi' }}">
                                            <img src="{{ asset('storage/' . $item->foto) }}" class="product-image" alt="{{ $item->nama }}">
                                            <div class="product-info">
                                                <div class="product-name">{{ $item->nama }}</div>
                                                <div class="product-price">Rp {{ number_format($item->harga, 0, ',', '.') }}</div>
                                                {{-- START: Perubahan di sini untuk menampilkan deskripsi di product card --}}
                                                <div class="product-meta">{{ $item->deskripsi ?? 'Tidak ada deskripsi' }}</div>
                                                {{-- END: Perubahan --}}
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="selected-items order-panel">
                                <div class="order-header">
                                    <h5 class="mb-0">Order Summary</h5>
                                </div>
                                <div id="selected-products-container" class="order-items">
                                    <div class="empty-state">
                                        <i class="fas fa-shopping-basket"></i>
                                        <p>No items selected</p>
                                    </div>
                                </div>

                                <div class="order-summary d-none" id="order-summary">
                                    <div class="summary-row">
                                        <span>Subtotal:</span>
                                        <span id="subtotal">Rp 0</span>
                                    </div>

                                    <div class="summary-row summary-total">
                                        <span>Total:</span>
                                        <span id="total">Rp 0</span>
                                    </div>
                                    <div class="d-grid mt-4">
                                        <button type="submit" class="btn btn-primary btn-lg">
                                            <i class="fas fa-paper-plane me-2"></i> Place Order
                                        </button>
                                    </div>
                                </div>
                            </div>
                            
                            <div id="product-inputs"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="pending-orders mt-4">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">
                        @if($selectedMejaId)
                            <i class="fas fa-clock me-2"></i>Pesanan Pending - Meja {{ $meja->find($selectedMejaId)->nama }}
                        @else
                            <i class="fas fa-table me-2"></i>Pilih meja untuk melihat pesanan
                        @endif
                    </h5>
                </div>
                <div class="card-body">
                    @if($selectedMejaId)
                        @if($pendingOrders->count() > 0)
                            <div class="list-group">
                                @foreach($pendingOrders as $order)
                                <div class="list-group-item p-3 mb-2 rounded-3" style="border: 1px solid #e9ecef;">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <span class="fw-bold">Order #{{ $order->id }}</span>
                                            <span class="order-time ms-2">
                                                {{ $order->created_at->format('H:i') }} - {{ $order->created_at->format('d M Y') }}
                                            </span>
                                        </div>
                                        <span class="badge bg-warning text-dark">Pending</span>
                                    </div>
                                    
                                    <div class="order-details mt-2">
                                        @foreach($order->details as $detail)
                                        <div class="d-flex justify-content-between py-1">
                                            <div>
                                                <span>{{ $detail->produk->nama }}</span>
                                                <small class="text-muted d-block">x{{ $detail->jumlah }}</small>
                                            </div>
                                            <div class="text-end">
                                                <div>Rp {{ number_format($detail->produk->harga, 0, ',', '.') }}</div>
                                                <div class="fw-bold">Rp {{ number_format($detail->produk->harga * $detail->jumlah, 0, ',', '.') }}</div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                    <div class="d-flex justify-content-between mt-2 pt-2 border-top">
                                        <span class="fw-bold">Total Pesanan:</span>
                                        <span class="fw-bold">Rp {{ number_format($order->details->sum(function($item) {
                                            return $item->produk->harga * $item->jumlah;
                                        }), 0, ',', '.') }}</span>
                                    </div>
                                </div>
                                @endforeach
                                
                                <div class="list-group-item p-4 mt-3 rounded-3" style="background-color: #f8fafc; border: 1px solid #e2e8f0;">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <span class="fw-bold fs-5 text-dark">Total Keseluruhan</span>
                                        <span class="fw-bold fs-5 text-success">
                                            Rp {{ number_format($pendingOrders->flatMap->details->sum(function($item) {
                                                return $item->produk->harga * $item->jumlah;
                                            }), 0, ',', '.') }}
                                        </span>
                                    </div>
                                    
                                    <form id="completeOrderForm" action="{{ route('pemesanans.complete') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="meja_id" value="{{ $selectedMejaId }}">
                                        
                                        @foreach($pendingOrders as $order)
                                            <input type="hidden" name="pemesanan_ids[]" value="{{ $order->id }}">
                                        @endforeach
                                        
                                        <div class="d-grid">
                                            <button type="submit" class="btn btn-success btn-lg py-3" id="submitCompleteBtn" style="border-radius: 8px;">
                                                <i class="fas fa-cash-register me-2"></i> Selesaikan Pesanan
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @else
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>Tidak ada pesanan pending untuk meja ini
                            </div>
                        @endif
                    @else
                        <div class="alert alert-warning">
                            <i class="fas fa-exclamation-circle me-2"></i>Silakan pilih meja terlebih dahulu
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            let selectedProducts = [];

            // 1. Fix for Complete Order Form
            $('#completeOrderForm').on('submit', function(e) {
                e.preventDefault();
                const form = this;
                
                Swal.fire({
                    title: 'Konfirmasi Penyelesaian Pesanan',
                    text: "Apakah Anda yakin ingin menyelesaikan semua pesanan untuk meja ini?",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Selesaikan',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#submitCompleteBtn').html('<i class="fas fa-spinner fa-spin me-2"></i> Memproses...');
                        $('#submitCompleteBtn').prop('disabled', true);
                        
                        // Submit form via AJAX
                        $.ajax({
                            url: form.action,
                            method: 'POST',
                            data: $(form).serialize(),
                            success: function(response) {
                                Swal.fire({
                                    title: 'Sukses!',
                                    text: response.message,
                                    icon: 'success',
                                    confirmButtonText: 'OK'
                                }).then(() => {
                                    // Refresh halaman setelah sukses
                                    window.location.reload();
                                });
                            },
                            error: function(xhr) {
                                $('#submitCompleteBtn').html('<i class="fas fa-cash-register me-2"></i> Selesaikan Pesanan');
                                $('#submitCompleteBtn').prop('disabled', false);
                                
                                let errorMessage = 'Terjadi kesalahan saat menyelesaikan pesanan';
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    errorMessage = xhr.responseJSON.message;
                                }
                                
                                Swal.fire({
                                    title: 'Error!',
                                    text: errorMessage,
                                    icon: 'error',
                                    confirmButtonText: 'OK'
                                });
                            }
                        });
                    }
                });
            });

            // 2. Fix for New Order Form
            $('form[action="{{ route('pemesanans.store') }}"]').on('submit', function(e) {
                if (selectedProducts.length === 0) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Pesanan Kosong',
                        text: 'Silakan pilih minimal satu produk',
                        confirmButtonColor: 'var(--primary)'
                    });
                    return;
                }

                e.preventDefault();
                
                // Build order summary for confirmation
                let orderSummary = '<div style="text-align:left; margin-bottom:1rem;">';
                orderSummary += `<p><strong>Meja:</strong> ${$('.table-badge').text().replace('Table: ', '')}</p>`; // Updated selector
                orderSummary += '<p><strong>Pesanan:</strong></p><ul style="padding-left:1rem; margin-top:0.5rem;">';
                
                selectedProducts.forEach(product => {
                    orderSummary += `<li>${product.name} (${product.quantity}x) - Rp ${(product.price * product.quantity).toLocaleString('id-ID')}</li>`;
                });
                
                orderSummary += '</ul>';
                orderSummary += `<p><strong>Total: Rp ${$('#total').text().split('Rp ')[1]}</strong></p>`;
                orderSummary += '</div>';
                
                // Show confirmation dialog
                Swal.fire({
                    title: 'Konfirmasi Pesanan Baru',
                    html: orderSummary,
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: 'var(--primary)',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, pesan sekarang',
                    cancelButtonText: 'Periksa lagi'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Show loading state
                        $('form[action="{{ route('pemesanans.store') }}"] button[type="submit"]')
                            .html('<i class="fas fa-spinner fa-spin me-2"></i> Memproses...')
                            .prop('disabled', true);
                        
                        // Submit the form
                        $('form[action="{{ route('pemesanans.store') }}"]').unbind('submit').submit();
                    }
                });
            });

            // 3. Product Selection Logic
            $('.product-card').click(function() {
                const productId = $(this).data('id');
                const product = {
                    id: productId,
                    name: $(this).data('nama'),
                    price: $(this).data('harga'),
                    kategori: $(this).data('kategori'),
                    paket: $(this).data('paket'),
                    deskripsi: $(this).data('deskripsi'),
                    quantity: 1
                };

                const existing = selectedProducts.find(p => p.id === productId);
                if (existing) {
                    existing.quantity += 1;
                } else {
                    selectedProducts.push(product);
                }

                updateSelectedProductsUI();
            });

            function updateSelectedProductsUI() {
                const container = $('#selected-products-container');
                const summary = $('#order-summary');
                const productInputs = $('#product-inputs');
                
                if (selectedProducts.length === 0) {
                    container.html(`
                        <div class="empty-state">
                            <i class="fas fa-shopping-basket"></i>
                            <p>No items selected</p>
                        </div>
                    `);
                    summary.addClass('d-none');
                    productInputs.empty();
                    return;
                }
                
                // Clear and rebuild selected products list
                container.empty();
                productInputs.empty();
                
                let subtotal = 0;
                
                selectedProducts.forEach((product, index) => {
                    const itemTotal = product.price * product.quantity;
                    subtotal += itemTotal;
                    
                    // Construct the item-meta content to include description
                    let metaContent = `${product.kategori} • ${product.paket}`;
                    if (product.deskripsi && product.deskripsi !== 'N/A' && product.deskripsi !== 'Tidak ada deskripsi') {
                        metaContent += ` • ${product.deskripsi}`;
                    }

                    // Add to visible list
                    container.append(`
                        <div class="order-item" data-id="${product.id}">
                            <div class="item-name">
                                ${product.name}
                                <div class="item-meta">${metaContent}</div> </div>
                            <div class="item-controls">
                                <button type="button" class="qty-btn minus" data-id="${product.id}">-</button>
                                <input type="number" class="qty-input" value="${product.quantity}" min="1" data-id="${product.id}">
                                <button type="button" class="qty-btn plus" data-id="${product.id}">+</button>
                                <i class="fas fa-times remove-item" data-id="${product.id}"></i>
                            </div>
                            <div class="item-price">Rp ${itemTotal.toLocaleString('id-ID')}</div>
                        </div>
                    `);
                    
                    // Add hidden inputs for form submission
                    productInputs.append(`
                        <input type="hidden" name="produk_id[${index}]" value="${product.id}">
                        <input type="hidden" name="jumlah[${index}]" value="${product.quantity}">
                    `);
                });
                
                // Update summary
                $('#subtotal').text(`Rp ${subtotal.toLocaleString('id-ID')}`);
                $('#total').text(`Rp ${subtotal.toLocaleString('id-ID')}`);
                summary.removeClass('d-none');
                
                // Attach event handlers
                // Use event delegation for dynamically added elements
                container.off('click', '.qty-btn.minus').on('click', '.qty-btn.minus', function() {
                    const id = $(this).data('id');
                    const product = selectedProducts.find(p => p.id === id);
                    if (product.quantity > 1) {
                        product.quantity -= 1;
                        updateSelectedProductsUI();
                    }
                });
                
                container.off('click', '.qty-btn.plus').on('click', '.qty-btn.plus', function() {
                    const id = $(this).data('id');
                    const product = selectedProducts.find(p => p.id === id);
                    product.quantity += 1;
                    updateSelectedProductsUI();
                });
                
                container.off('change', '.qty-input').on('change', '.qty-input', function() {
                    const id = $(this).data('id');
                    const quantity = parseInt($(this).val()) || 1;
                    const product = selectedProducts.find(p => p.id === id);
                    product.quantity = quantity;
                    updateSelectedProductsUI();
                });
                
                container.off('click', '.remove-item').on('click', '.remove-item', function() {
                    const id = $(this).data('id');
                    selectedProducts = selectedProducts.filter(p => p.id !== id);
                    updateSelectedProductsUI();
                });
            }
        });
    </script>
</body>
</html>