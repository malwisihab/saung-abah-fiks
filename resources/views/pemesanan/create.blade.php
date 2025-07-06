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
    --primary: #e63946; /* Merah terang dari tombol login */
    --primary-dark: #d62828;
    --background-glass: rgba(255, 255, 255, 0.2);
    --blur: blur(12px);
    --light: #ffffff;
    --dark: #1d1d1d;
    --border: rgba(255, 255, 255, 0.3);
}

body {
    /* background: url('/path-to-your-background.jpg') no-repeat center center fixed; */
    background: #f3f4f6; /* fallback warna background polos abu muda */
    background-size: cover;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}
.product-image {
    height: 120px;
    width: 100%;
    max-width: 300px; /* tambahkan ini */
    margin: 0 auto; /* biar center */
    aspect-ratio: 4/3;
    object-fit: cover;
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}
.product-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
    gap: 20px;
}

.pos-container {
    width: 95%;
    max-width: 1300px;
    background: var(--background-glass);
    backdrop-filter: var(--blur);
    border: 1px solid var(--border);
    border-radius: 30px;
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.25);
    padding: 30px;
}

.pos-card {
    border: none;
    background: transparent;
    box-shadow: none;
}

.pos-card-header {
    background-color: transparent;
    color: var(--dark);
    padding: 15px 20px;
    font-weight: 700;
    font-size: 1.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.pos-card-header .badge {
    background-color: rgba(230, 57, 70, 0.2); /* warna badge table */
    color: var(--primary); /* warna teks badge */
    font-weight: 600;
    border-radius: 10px;
    padding: 8px 12px;
}
.form-label {
    color: white;
    font-weight: 500;
    margin-bottom: 6px;
}

.form-select,
.form-control {
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid #ddd;
    border-radius: 12px;
    padding: 10px;
    font-size: 1rem;
    color: var(--dark); /* warna teks */
    backdrop-filter: var(--blur); /* efek glass */
    box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
}



.product-card {
    border-radius: 15px;
    background: rgba(255, 255, 255, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.5);
    transition: all 0.3s;
    cursor: pointer;
}

.product-card:hover {
    transform: scale(1.03);
    box-shadow: 0 6px 20px rgba(0, 0, 0, 0.2);
}

.product-card.selected {
    border: 2px solid var(--primary);
    background-color: rgba(230, 57, 70, 0.1);
}

.btn-pos,
.btn-primary {
    background-color: var(--primary);
    color: white;
    font-weight: bold;
    border-radius: 25px;
    padding: 12px 25px;
    font-size: 1.1rem;
    transition: 0.3s ease-in-out;
    border: none;
}

.btn-pos:hover,
.btn-primary:hover {
    background-color: var(--primary-dark);
    transform: scale(1.02);
}

.payment-method {
    background: rgba(255, 255, 255, 0.6);
    border-radius: 15px;
    padding: 15px;
    transition: 0.3s;
    cursor: pointer;
    text-align: center;
}
.payment-method-desc {
    color: #1d1d1d;
}
h5,
.summary-row span {
    color: #1d1d1d;
}

.payment-method.selected {
    border: 2px solid var(--primary);
    background-color: rgba(230, 57, 70, 0.1);
}

.selected-items,
.summary-card {
    background: rgba(255, 255, 255, 0.7);
    border-radius: 15px;
    padding: 15px;
    border: 1px solid rgba(255, 255, 255, 0.4);
}

.empty-state {
    color: white;
    text-align: center;
    padding: 30px;
}

.item-controls button,
.qty-btn {
    background-color: var(--primary);
    border: none;
    color: white;
    font-weight: bold;
    border-radius: 50%;
}

.remove-item {
    color: #dc3545;
    cursor: pointer;
    font-size: 1.2rem;
}

.item-price {
    font-weight: bold;
    color: var(--dark);
}
.product-name {
    color: #1d1d1d;
    font-weight: 600;
}

.product-price {
    color: var(--primary);
    font-weight: bold;
}


    </style>
</head>
<body>
    <div class="pos-container">
        <div class="pos-card">
            <div class="pos-card-header d-flex justify-content-between align-items-center">
                <span>New Order</span>
                <span class="badge bg-light text-dark">Table: {{ $selectedMejaId ? $meja->find($selectedMejaId)->nama : 'Select table' }}</span>
            </div>
            <div class="pos-card-body">
                <form action="{{ route('pemesanans.store') }}" method="POST">
                    @csrf

                    <div class="row">
                        <div class="col-md-8">
                            <!-- Table Selection -->
                            <div class="mb-4">
                                <label class="form-label">Select Table</label>
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

                            <!-- Products Grid -->
                            <div class="mb-4">
                                <label class="form-label">Select Products</label>
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
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Order Summary -->
                            <div class="selected-items">
                                <h5 class="mb-3">Order Summary</h5>
                                <div id="selected-products-container">
                                    <div class="empty-state">
                                        <i class="fas fa-shopping-basket"></i>
                                        <p>No items selected</p>
                                    </div>
                                </div>

                                <div class="summary-card d-none" id="order-summary">
                                    <div class="summary-row">
                                        <span>Subtotal:</span>
                                        <span id="subtotal">Rp 0</span>
                                    </div>

                                    <div class="summary-row summary-total">
                                        <span>Total:</span>
                                        <span id="total">Rp 0</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Payment Method -->
                            <div class="mt-4">
                                <label class="form-label">Payment Method</label>
                                <div class="payment-methods">
                                    <div class="payment-method selected" data-method="cash">
                                        <i class="fas fa-money-bill-wave"></i>
                                        <div class="payment-method-title">Cash</div>
                                        <div class="payment-method-desc">Pay at counter</div>
                                        <input type="radio" name="pembayaran" value="kasir" checked hidden>
                                    </div>
                                    <div class="payment-method" data-method="online">
                                        <i class="fas fa-credit-card"></i>
                                        <div class="payment-method-title">Online</div>
                                        <div class="payment-method-desc">Pay now</div>
                                        <input type="radio" name="pembayaran" value="online" hidden>
                                    </div>
                                </div>
                            </div>

                         <div class="d-grid mt-4">
    <button type="submit" class="btn btn-primary btn-lg">
        <i class="fas fa-paper-plane me-2"></i> Place Order
    </button>
</div>



                    <!-- Hidden inputs for products -->
                    <div id="product-inputs"></div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            let selectedProducts = [];
        

            // Product selection
            $('.product-card').click(function() {
                const productId = $(this).data('id');
                const productName = $(this).data('nama');
                const productPrice = $(this).data('harga');
                const productKategori = $(this).data('kategori');
const productPaket = $(this).data('paket');
const productDeskripsi = $(this).data('deskripsi');


                // Check if product already selected
                const existingProduct = selectedProducts.find(p => p.id === productId);

                if (existingProduct) {
                    existingProduct.quantity += 1;
                } else {
                    selectedProducts.push({
                        id: productId,
                        name: productName,
                        price: productPrice,
                        kategori: productKategori,
paket: productPaket,
deskripsi: productDeskripsi,

                        quantity: 1
                    });
                }

                updateSelectedProductsUI();
            });

            // Update selected products UI
            function updateSelectedProductsUI() {
                const container = $('#selected-products-container');
                const summary = $('#order-summary');

                if (selectedProducts.length === 0) {
                    container.html(`
                        <div class="empty-state">
                            <i class="fas fa-shopping-basket"></i>
                            <p>No items selected</p>
                        </div>
                    `);
                    summary.addClass('d-none');
                    return;
                }

                let html = '';
                let subtotal = 0;

                selectedProducts.forEach((product, index) => {
                    const itemTotal = product.price * product.quantity;
                    subtotal += itemTotal;

                    html += `
                        <div class="selected-item" data-id="${product.id}">
<div class="item-name">
    ${product.name}<br>
    <small class="text-muted">Kategori: ${product.kategori}</small><br>
    <small class="text-muted">Paket: ${product.paket}</small><br>
    <small class="text-muted">${product.deskripsi}</small>
</div>
                            <div class="item-controls">
                                <button class="qty-btn minus" data-index="${index}">-</button>
                                <input type="number" class="item-qty" value="${product.quantity}" min="1" data-index="${index}">
                                <button class="qty-btn plus" data-index="${index}">+</button>
                                <span class="remove-item" data-index="${index}"><i class="fas fa-times"></i></span>
                            </div>
                            <div class="item-price">Rp ${(itemTotal).toLocaleString('id-ID')}</div>
                        </div>
                    `;
                });

                container.html(html);
                summary.removeClass('d-none');

                // Calculate totals

                const total = subtotal ;

                $('#subtotal').text(`Rp ${subtotal.toLocaleString('id-ID')}`);

                $('#total').text(`Rp ${total.toLocaleString('id-ID')}`);

                // Update hidden inputs
                $('#product-inputs').empty();
                selectedProducts.forEach(product => {
                    $('#product-inputs').append(`<input type="hidden" name="produk_id[]" value="${product.id}">`);
                    $('#product-inputs').append(`<input type="hidden" name="jumlah[]" value="${product.quantity}">`);
                });
            }

            // Quantity controls
            $(document).on('click', '.qty-btn.plus', function() {
                const index = $(this).data('index');
                selectedProducts[index].quantity += 1;
                updateSelectedProductsUI();
            });

            $(document).on('click', '.qty-btn.minus', function() {
                const index = $(this).data('index');
                if (selectedProducts[index].quantity > 1) {
                    selectedProducts[index].quantity -= 1;
                    updateSelectedProductsUI();
                }
            });

            $(document).on('change', '.item-qty', function() {
                const index = $(this).data('index');
                const value = parseInt($(this).val());

                if (value >= 1) {
                    selectedProducts[index].quantity = value;
                    updateSelectedProductsUI();
                } else {
                    $(this).val(selectedProducts[index].quantity);
                }
            });

            $(document).on('click', '.remove-item', function() {
                const index = $(this).data('index');
                selectedProducts.splice(index, 1);
                updateSelectedProductsUI();
            });

            // Payment method selection
            $('.payment-method').click(function() {
                $('.payment-method').removeClass('selected');
                $(this).addClass('selected');
                $(this).find('input[type="radio"]').prop('checked', true);
            });

            // Form validation
            $('form').submit(function(e) {
                if (selectedProducts.length === 0) {
                    e.preventDefault();
                    Swal.fire({
                        icon: 'error',
                        title: 'Empty Order',
                        text: 'Please select at least one product',
                        confirmButtonColor: 'var(--primary)'
                    });
                }
            });

            @if(session('success'))
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    confirmButtonColor: 'var(--primary)'
                });
            @endif
        });
    </script>
</body>
</html>
