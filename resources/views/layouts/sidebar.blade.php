<aside class="main-sidebar-custom">
     <style>
        .main-sidebar-custom {
    background-color: #1f2937;
    color: #ffffff;
    width: 230px;
    min-height: 100vh;
    position: fixed;
    padding: 1rem 0;
    overflow-y: auto;
}

.sidebar-header {
    padding: 0 1rem 1rem;
    border-bottom: 1px solid #374151;
}

.user-info {
    display: flex;
    align-items: center;
    gap: 0.8rem;
}

.user-avatar {
    width: 48px;
    height: 48px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #4b5563;
}

.user-name {
    font-weight: bold;
    margin: 0;
}

.user-status {
    font-size: 0.85rem;
    color: #9ca3af;
    margin: 0;
}

.sidebar-nav {
    list-style: none;
    padding: 0;
    margin-top: 1rem;
}

.sidebar-nav li {
    margin-bottom: 0.5rem;
}

.sidebar-nav li a {
    display: block;
    color: #d1d5db;
    padding: 0.6rem 1.5rem;
    text-decoration: none;
    transition: background 0.3s, color 0.3s;
    border-left: 4px solid transparent;
}

.sidebar-nav li a:hover,
.sidebar-nav li a.active {
    background: #374151;
    color: #fff;
    border-left: 4px solid #3b82f6;
}

.nav-section {
    padding: 0.8rem 1.5rem 0.4rem;
    font-size: 0.8rem;
    font-weight: bold;
    color: #9ca3af;
    text-transform: uppercase;
}

    </style>
    <ul class="sidebar-nav">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>

        @if (auth()->user()->level == 1)
        <li class="nav-section">Master</li>
        <li><a href="{{ route('kategori.index') }}"><i class="fa fa-cube"></i> Kategori</a></li>
        <li><a href="{{ route('produk.index') }}"><i class="fa fa-cubes"></i> Produk</a></li>
        <li><a href="{{ route('member.index') }}"><i class="fa fa-id-card"></i> Member</a></li>
        <li><a href="{{ route('supplier.index') }}"><i class="fa fa-truck"></i> Supplier</a></li>

        <li class="nav-section">Transaksi</li>
        <li><a href="{{ route('pengeluaran.index') }}"><i class="fa fa-money"></i> Pengeluaran</a></li>
        <li><a href="{{ route('pembelian.index') }}"><i class="fa fa-download"></i> Pembelian</a></li>
        <li><a href="{{ route('penjualan.index') }}"><i class="fa fa-upload"></i> Penjualan</a></li>
        <li><a href="{{ route('transaksi.index') }}"><i class="fa fa-cart-arrow-down"></i> Transaksi Aktif</a></li>
        <li><a href="{{ route('transaksi.baru') }}"><i class="fa fa-cart-plus"></i> Transaksi Baru</a></li>

        <li class="nav-section">Report</li>
        <li><a href="{{ route('laporan.index') }}"><i class="fa fa-file-pdf-o"></i> Laporan</a></li>

        <li class="nav-section">System</li>
        <li><a href="{{ route('user.index') }}"><i class="fa fa-users"></i> User</a></li>
        <li><a href="{{ route('setting.index') }}"><i class="fa fa-cogs"></i> Pengaturan</a></li>
        @else
        <li><a href="{{ route('transaksi.index') }}"><i class="fa fa-cart-arrow-down"></i> Transaksi Aktif</a></li>
        <li><a href="{{ route('transaksi.baru') }}"><i class="fa fa-cart-plus"></i> Transaksi Baru</a></li>
        @endif
    </ul>
</aside>
