@if (session('success'))
    <div class="my-8 p-4 bg-green-100 border-l-4 border-green-500 text-green-700 rounded-xl shadow">
        <strong>Berhasil!</strong> {{ session('success') }}
    </div>
@endif

@if (session('warning'))
    <div class="my-8 p-4 bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 rounded-xl shadow">
        <strong>Peringatan!</strong> {{ session('warning') }}
    </div>
@endif

@if ($errors->any())
    <div class="my-8 p-4 bg-red-100 border-l-4 border-red-500 text-red-700 rounded-xl shadow">
        <strong>Kesalahan!</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
