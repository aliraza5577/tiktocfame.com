
<div class="container p80">
    <h2>TikTok User Data</h2>

    @if(!empty($viewData))
        <pre>{{ print_r($viewData, true) }}</pre>
    @else
        <p>No data found for this TikTok user.</p>
    @endif
</div>
