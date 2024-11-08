

@section('content')
<div class="verification-section">
    <h2>Image Verification</h2>

    @foreach ($dataToVerify as $index => $item)
        <div class="car-data">
            <h3>{{ $item['data']['make'] }} - {{ $item['data']['model'] }} ({{ $item['data']['year'] }})</h3>
            
            @foreach ($item['images'] as $imageUrl)
                <div class="image-container">
                    <img src="{{ $imageUrl }}" alt="Car Image" width="200" height="150" class="verify-image" data-url="{{ $imageUrl }}" />
                    <button class="download-button" data-url="{{ $imageUrl }}">Download</button>
                </div>
            @endforeach
        </div>
    @endforeach
</div>

<script>
    document.querySelectorAll('.download-button').forEach(button => {
        button.addEventListener('click', function() {
            const imageUrl = this.getAttribute('data-url');

            fetch("{{ route('cars.downloadImage') }}", {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ image_url: imageUrl })
            })
            .then(response => response.json())
            .then(data => {
                if (data.local_path) {
                    alert(data.message);
                    // You can update the database with the local image path if needed
                } else {
                    alert(data.error);
                }
            })
            .catch(error => console.error('Error:', error));
        });
    });
</script>
@endsection
