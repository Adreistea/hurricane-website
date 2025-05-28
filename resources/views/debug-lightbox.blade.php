<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lightbox Debug</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .debug-section { margin: 20px 0; padding: 15px; border: 1px solid #ddd; border-radius: 5px; }
        .debug-title { font-weight: bold; color: #333; margin-bottom: 10px; }
        pre { background: #f5f5f5; padding: 10px; border-radius: 3px; overflow-x: auto; }
        .error { color: red; }
        .success { color: green; }
    </style>
</head>
<body>
    <h1>Lightbox Debug Information</h1>
    
    <div class="debug-section">
        <div class="debug-title">Environment Information</div>
        <pre>
Environment: {{ app()->environment() }}
Database Connection: {{ config('database.default') }}
Current Time: {{ now() }}
        </pre>
    </div>

    <div class="debug-section">
        <div class="debug-title">All Lightboxes in Database</div>
        <pre>{{ json_encode($allLightboxes, JSON_PRETTY_PRINT) }}</pre>
    </div>

    <div class="debug-section">
        <div class="debug-title">Active Lightboxes (Status + Date Check)</div>
        <pre>{{ json_encode($activeLightboxes, JSON_PRETTY_PRINT) }}</pre>
    </div>

    <div class="debug-section">
        <div class="debug-title">Filtered Lightboxes for 'home' Page</div>
        <pre>{{ json_encode($filteredLightboxes, JSON_PRETTY_PRINT) }}</pre>
    </div>

    <div class="debug-section">
        <div class="debug-title">Debug Analysis</div>
        <pre>
Total lightboxes: {{ $allLightboxes->count() }}
Active lightboxes: {{ $activeLightboxes->count() }}
Filtered for 'home': {{ $filteredLightboxes->count() }}

@foreach($activeLightboxes as $lightbox)
Lightbox ID {{ $lightbox->lightbox_id }}:
  - Status: {{ $lightbox->status }}
  - Display Pages: {{ json_encode($lightbox->display_pages) }}
  - Display Pages Type: {{ gettype($lightbox->display_pages) }}
  - Start Date: {{ $lightbox->start_date }}
  - End Date: {{ $lightbox->end_date }}
  - Matches 'home': {{ in_array('home', is_array($lightbox->display_pages) ? $lightbox->display_pages : json_decode($lightbox->display_pages, true) ?? []) ? 'YES' : 'NO' }}

@endforeach
        </pre>
    </div>

    <div class="debug-section">
        <div class="debug-title">API Test</div>
        <button onclick="testAPI()">Test /api/lightboxes/active?page=home</button>
        <div id="api-result"></div>
    </div>

    <script>
        async function testAPI() {
            const resultDiv = document.getElementById('api-result');
            resultDiv.innerHTML = 'Loading...';
            
            try {
                const response = await fetch('/api/lightboxes/active?page=home');
                const data = await response.json();
                resultDiv.innerHTML = '<pre>' + JSON.stringify(data, null, 2) + '</pre>';
            } catch (error) {
                resultDiv.innerHTML = '<div class="error">Error: ' + error.message + '</div>';
            }
        }
    </script>
</body>
</html> 