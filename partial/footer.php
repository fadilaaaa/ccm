<!-- Contact Section -->
<section id="contact" class="text-white py-16" style="background-color: #26778f">
    <div class="container mx-auto flex flex-wrap items-center justify-between px-4">
        <div class="w-full md:w-1/2 mb-6 md:mb-0">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.307637898451!2d105.23466907014732!3d-5.369966441784363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbcd47ce7835%3A0x234fee8ad9173d21!2sHETI%20Project%20Office!5e0!3m2!1sid!2sid!4v1741123722549!5m2!1sid!2sid"
                width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="w-full md:w-1/2 text-center md:text-left md:pl-8">
            <h2 class="text-3xl font-bold mb-4">Contact Us</h2>
            <p class="mb-6">
                Get in touch with us for more information about our programs and
                services.
            </p>
            <p class="mb-2">
                <i class="fas fa-envelope mr-2"></i><strong>Email:</strong>
                <a href="mailto:pmsc.unilaproject@gmail.com"
                    class="text-gray-200 hover:underline">pmsc.unilaproject@gmail.com</a>
            </p>
            <p class="mb-2">
                <i class="fas fa-phone-alt mr-2"></i><strong>Phone:</strong>
                <a href="https://wa.me/6285954041681" class="text-gray-200 hover:underline">+62 859-5404-1681</a>
            </p>
            <p class="mb-2">
                <i class="fas fa-map-marker-alt mr-2"></i><strong>Address:</strong> Jl. Sumantri Brojonegoro No.1, Bandar
                Lampung, Indonesia
            </p>
            <div class="mt-6">
                <h3 class="text-2xl font-bold mb-4">Follow Us</h3>
                <div class="flex justify-center md:justify-start space-x-4">
                    <a href="https://unilaprojectheti.id/#" class="text-gray-200 hover:underline">Facebook <i
                            class="fas fa-facebook-f"></i></a>
                    <a href="https://unilaprojectheti.id/#" class="text-gray-200 hover:underline">Twitter/X <i
                            class="fas fa-twitter"></i></a>
                    <a href="https://www.instagram.com/heti_unila/" class="text-gray-200 hover:underline">Instagram <i
                            class="fas fa-instagram"></i></a>
                    <a href="https://unilaprojectheti.id/#" class="text-gray-200 hover:underline"><i
                            class="fas fa-linkedin-in"></i>Linkedin
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="bg-gray-800 text-white py-6">
    <div class="container mx-auto text-center px-4">
        <p>
            © PMSC HETI ADB RSPTN UNILA 2025 | All rights reserved
        </p>
    </div>
</footer>

<script type="text/javascript" src="/Home - PMSC HETI ADB RSPTN UNILA_files/jquery-3.6.0.min.js.download"></script>
<script type="text/javascript" src="/Home - PMSC HETI ADB RSPTN UNILA_files/slick.min.js.download"></script>
<script type="text/javascript"
    src="/Home - PMSC HETI ADB RSPTN UNILA_files/jquery.fancybox.min.js.download"></script>

<script>
    window.addEventListener("load", function() {
        const preloader = document.getElementById("preloader");
        preloader.style.display = "none";
    });

    document
        .getElementById("menu-button")
        .addEventListener("click", function() {
            var menu = document.getElementById("mobile-menu");
            menu.classList.toggle("hidden");
        });

    document.addEventListener("DOMContentLoaded", function() {
        const tabs = document.querySelectorAll(".tab-link");
        const tabContents = document.querySelectorAll(".tab-content");
        const weekSelect = document.getElementById("week-select");

        tabs.forEach((tab) => {
            tab.addEventListener("click", function() {
                tabs.forEach((t) => t.classList.remove("active"));
                tabContents.forEach((content) =>
                    content.classList.remove("active")
                );
                this.classList.add("active");
                document.getElementById(this.dataset.tab).classList.add("active");
            });
        });

        $(".slider").slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 1500,
        });

        $(".gallery-slider").slick({
            dots: true,
            infinite: true,
            speed: 500,
            slidesToShow: 4,
            slidesToScroll: 1,
            adaptiveHeight: true,
            autoplay: true,
            autoplaySpeed: 1500,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        infinite: true,
                        dots: true,
                    },
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                    },
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    },
                },
            ],
        });
    });

    document.querySelector("button").addEventListener("click", function() {
        const dropdown = this.nextElementSibling;
        dropdown.classList.toggle("hidden");
    });
</script>