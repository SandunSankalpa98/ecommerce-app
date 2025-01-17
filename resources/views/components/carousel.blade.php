<div id="carousel" class="splide">
    <div class="splide__track">
        <ul class="splide__list">
            <li class="splide__slide">
                <img src="{{ asset('images/pic1.jpg') }}" alt="Image 1" class="w-full h-30 object-cover">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/pic2.jpg') }}" alt="Image 2" class="w-full h-30 object-cover">
            </li>
            <li class="splide__slide">
                <img src="{{ asset('images/pic3.jpg') }}" alt="Image 3" class="w-full h-30 object-cover">
            </li>
        </ul>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const splide = new Splite('#carousel', {
            type: 'loop',
            perPage: 1,
            autoplay: true,
            interval: 3000,
        });
        splide.mount();
    });
</script>