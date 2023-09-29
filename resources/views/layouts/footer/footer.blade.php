<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      <script>
        document.write(new Date().getFullYear())
      </script> © {{ config('dashboard.siteName') }}
    </div>
    <div class="mb-2 mb-md-0">
      Crafted with ❤ by <a href="{{ (!empty(config('dashboard.creatorUrl')) ? config('dashboard.creatorUrl') : '') }}" target="_blank" class="footer-link fw-bolder">{{ (!empty(config('dashboard.creatorName')) ? config('dashboard.creatorName') : '') }}</a>
    </div>
    
    </div>
  </div>
</footer>
<!--/ Footer-->
