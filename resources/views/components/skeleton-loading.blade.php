<div class="skeleton-wrapper">
    @for ($i = 0; $i < ($count ?? 3); $i++)
    <div class="skeleton-card">
        <div class="shimmer-img"></div>
        <div class="shimmer-line"></div>
        <div class="shimmer-line-short"></div>
    </div>
    @endfor
</div>

<style>
    .skeleton-wrapper { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; padding: 20px; }
    .skeleton-card { background: rgba(255,255,255,0.05); border-radius: 15px; padding: 15px; border: 1px solid rgba(255,255,255,0.1); }
    .shimmer-img, .shimmer-line, .shimmer-line-short {
        background: linear-gradient(90deg, rgba(255,255,255,0.05) 25%, rgba(255,255,255,0.1) 50%, rgba(255,255,255,0.05) 75%);
        background-size: 200% 100%;
        animation: shimmer 1.5s infinite;
        border-radius: 8px;
    }
    .shimmer-img { height: 150px; margin-bottom: 15px; }
    .shimmer-line { height: 15px; margin-bottom: 10px; width: 90%; }
    .shimmer-line-short { height: 15px; width: 50%; }

    @keyframes shimmer {
        0% { background-position: -200% 0; }
        100% { background-position: 200% 0; }
    }
</style>
