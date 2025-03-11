<div class="col-6">
    <h2>TikTok User Details</h2>
    <?php echo "<pre>";
    print_r($viewData);
    echo "</pre>"; ?>
    @if(!empty($viewData))
        <div class="card">
            <div class="card-body text-center">
                <!-- Display TikTok Profile Image -->
                <img src="{{ $viewData['user']['avatarLarger'] ?? 'https://via.placeholder.com/150' }}"
                     alt="Profile Image"
                     class="rounded-circle"
                     width="120" height="120">

                <h4 class="mt-3">{{ $viewData['user']['nickname'] ?? 'N/A' }}</h4>
                <p>@{{ $viewData['user']['uniqueId'] ?? 'N/A' }}</p>

                <ul class="list-group text-left mt-3">
                    <li class="list-group-item"><strong>Followers:</strong> {{ $viewData['stats']['followerCount'] ?? 'N/A' }}</li>
                    <li class="list-group-item"><strong>Likes:</strong> {{ $viewData['stats']['heart'] ?? 'N/A' }}</li>
                    <li class="list-group-item"><strong>Videos:</strong> {{ $viewData['stats']['videoCount'] ?? 'N/A' }}</li>
                </ul>
            </div>
        </div>
    @else
        <p class="text-danger">User not found on TikTok.</p>
    @endif
</div>
