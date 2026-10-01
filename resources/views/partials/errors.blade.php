{{-- Cara panggil error di view @include('partials.errors')) --}}

@if ($errors->any())
    <div style="background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; padding: 10px 15px; border-radius: 4px; margin-bottom: 15px;">
        <strong style="display: block; margin-bottom: 5px;">Terjadi Kesalahan:</strong>
        <ul style="margin: 0; padding-left: 20px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- --}}

