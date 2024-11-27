<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @vite('resources/css/app.css')
</head>

<body>
    <!-- Navbar -->
    <nav class=" p-4">
        <div class="container mx-auto flex justify-between items-center">
            <!-- Logo -->
            <div class="text-black text-xl ml-9">
                <a href="#" class="font-medium"><span class="font-extrabold">Nugroho </span>Dwi Riyanto</a>
            </div>

            <!-- Hamburger Menu (Mobile) -->
            <div class="lg:hidden">
                <button id="navbar-toggle" class="text-black focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <!-- Menu (Desktop) -->
            <div id="navbar-menu" class="hidden lg:flex space-x-8 mr-40">
                <a href="#about" class="text-black  px-3 py-2 rounded">About</a>
                <a href="#projects" class="text-black  px-3 py-2 rounded">Projects</a>
                <a href="#certificates" class="text-black  px-3 py-2 rounded">Certificate</a>
                <a href="#contact" class="text-black  px-3 py-2 rounded">Contact</a>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden hidden">
            <a href="#about" class="block text-black  p-2">Projects</a>
            <a href="#projects" class="block text-black  p-2">About</a>
            <a href="#certificates" class="block text-black  p-2">Certificate</a>
            <a href="#contact" class="block text-black  p-2">Contact</a>
        </div>
    </nav>

    <section class="flex items-center justify-center bg-gray-50 py-16 px-6 md:px-12">
        <div class="container mx-auto flex flex-col md:flex-row items-center">

            <!-- Text Content -->
            <div class="text-center md:text-left md:w-1/2">

                <h1 class="text-4xl font-bold text-gray-800 mb-4">I'm Nugroho Dwi Riyanto, <br> a fresh graduate!</h1>
                <p class="text-gray-600 mb-6">
                    I have experience as a website programmer, with expertise in developing sites
                    functional and responsive. Additionally, I have a passion for UI/UX design, which allows me
                    creating an intuitive and engaging user interface. I am also interested in the field of graphics and
                    video, in
                    where I often explore creativity through visual media. Apart from that, I am very enthusiastic about
                    the world
                    cryptocurrency, always keeping abreast of its developments and exploring innovative opportunities in
                    the industry.
                </p>
                <a href="#contact"
                    class="bg-red-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-red-600 transition duration-300">
                    Contact me
                </a>
            </div>

            <!-- Image Section -->
            <div class="relative mt-8 md:mt-0 md:w-1/2 flex justify-center">
                <div class="relative">

                    <!-- Profile Image -->
                    <img src="{{ 'img/1.png' }}" alt="Profile Picture" class="rounded-full w-80 h-96">

                    <!-- Small Icons Overlay -->
                    <div
                        class="absolute bottom-0 right-0 transform translate-x-6 -translate-y-6 bg-white p-2 rounded-full shadow-md">
                        <span class="text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M13 2H6c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h12c1.1 0 2-.9 2-2V9l-7-7zm2 15h-4v-2h4v2zm0-4h-4v-2h4v2zm-3-5V3.5L18.5 10H12z" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- About Section -->
    <section id="about" class="flex flex-col md:flex-row items-center justify-center bg-white py-16 px-6 md:px-12">
        <div class="container mx-auto flex flex-col md:flex-row items-start">

            <!-- About Me Text Section -->
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h2 class="text-3xl font-bold text-gray-800 mb-4">
                    <span class="text-red-500 mr-2">|</span> About me
                </h2>
                <p class="text-gray-600 mb-6">
                    I have experience as a website programmer, with expertise in developing sites
                    functional and responsive. Additionally, I have a passion for UI/UX design, which allows me
                    creating an intuitive and engaging user interface. I am also interested in the field of graphics and
                    video, in
                    where I often explore creativity through visual media. Apart from that, I am very enthusiastic about
                    the world
                    cryptocurrency, always keeping abreast of its developments and exploring innovative opportunities in
                    the industry.
                </p>
                <a href="#more"
                    class="bg-red-500 text-white font-semibold py-2 px-6 rounded-full hover:bg-red-600 transition duration-300">
                    Read more
                </a>
            </div>

            <!-- Stats Section -->
            <div class=" md:w-1/2 flex flex-col space-y-6 md:pl-12 md:ml-10">
                <div class="flex items-center space-x-4">
                    <span class="text-red-500 text-2xl">✓</span>
                    <div>
                        <p class="text-3xl font-bold text-gray-800">Hard Skill</p>
                        <p class="text-gray-600">UI/UX Desain, Web Developer</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-red-500 text-2xl">✓</span>
                    <div>
                        <p class="text-3xl font-bold text-gray-800">Soft Skill</p>
                        <p class="text-gray-600">Desain Gambar, Editing Video, Ms. Word, Ms. Point, Canva</p>
                    </div>
                </div>
                <div class="flex items-center space-x-4">
                    <span class="text-red-500 text-2xl">✓</span>
                    <div>
                        <p class="text-3xl font-bold text-gray-800">6 Month</p>
                        <p class="text-gray-600">Work Experience</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- Projects Section -->
    <section id="projects" class="bg-white py-16 px-6 md:px-12 relative">
        <div class="container mx-auto">
            <h2 class="text-2xl font-bold text-gray-800 mb-8 text-center">My Projects</h2>

            <!-- Project Slider Container -->
            <div class="relative flex items-center">
                <!-- Left Arrow -->
                <button id="prevButton" aria-label="Previous Project"
                    class="absolute left-0 z-10 bg-red-500 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-red-600 transition duration-300">
                    &#10094;
                </button>

                <!-- Project Slider -->
                <div id="projectSlider" class="flex overflow-x-hidden space-x-6 pb-8 w-full mx-12">
                    @foreach ($dataProject as $project)
                    <!-- Project Card -->
                    <div class="card min-w-[350px] md:min-w-[300px] bg-gray-100 rounded-lg shadow-lg overflow-hidden">
                        <img src="{{ asset('storage/images/' . $project->image )}}" alt="{{ $project->image }}"
                            class="w-full h-64 md:h-80 object-cover">
                        <div class="p-4">
                            <p class="text-sm text-gray-500">{{ $project->description }}</p>
                            <h3 class="text-lg font-semibold text-gray-800">{{ $project->name }}</h3>

                            <!-- GitLab Button -->
                            <a href="{{ $project->url_link }}" target="_blank"
                                class="inline-block mt-4 bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-300">
                                Code
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Right Arrow -->
                <button id="nextButton" aria-label="Next Project"
                    class="absolute right-0 z-10 bg-red-500 text-white rounded-full w-10 h-10 flex items-center justify-center hover:bg-red-600 transition duration-300">
                    &#10095;
                </button>
            </div>

        </div>
    </section>


    <!-- Certificates Section -->
    <section id="certificates" class="bg-white py-16 px-6 md:px-12 relative">
        <div class="container mx-auto">
            <div class="text-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-8">Certificate</h2>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach ($dataCertificate as $certificate)
                <!-- Certificate 1 -->
                <div class="bg-gray-100 shadow-lg rounded-lg overflow-hidden cursor-pointer"
                    onclick="toggleModal('modalCertificate1')">
                    <img src="{{ asset('storage/images/' . $certificate->image )}}" alt="Certificate 1"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $certificate->name }}</h3>
                        <p class="text-sm text-gray-700 mb-4">Issued by: {{ $certificate->publisher }}</p>
                        <p class="text-sm text-gray-500">Date: {{ $certificate->release_date }}</p>
                    </div>
                </div>

                <!-- Modal -->
                <div id="modalCertificate1"
                    class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
                    <div class="bg-white rounded-lg shadow-lg max-w-md w-full p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-lg font-semibold text-gray-800">Certificate Details</h2>
                            <button onclick="toggleModal('modalCertificate1')"
                                class="text-gray-600 hover:text-gray-800">&times;</button>
                        </div>
                        <img src="{{ asset('storage/images/' . $certificate->image )}}" alt="Certificate 1"
                            class="w-full h-48 object-cover mb-4">
                        <h3 class="text-lg font-semibold text-gray-800 mb-2">{{ $certificate->name }}</h3>
                        <p class="text-sm text-gray-700 mb-4">Issued by: {{ $certificate->publisher }}</p>
                        <p class="text-sm text-gray-500 mb-4">Date: {{ $certificate->release_date }}</p>
                        <button onclick="toggleModal('modalCertificate1')"
                            class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Close</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="bg-white text-gray-800 min-h-screen">
        <div class="flex flex-col md:flex-row h-screen justify-center items-center p-8 space-y-8 md:space-y-0">
            <!-- Left Sidebar with Icons -->
            <div class="flex flex-col justify-center items-center space-y-8 w-16 md:w-24 animate-fadeInLeft">
                <a href="https://www.linkedin.com/in/nugroho-dwi-riyanto/"
                    class="text-gray-500 hover:text-blue-600 transform hover:scale-125 transition duration-300 ease-in-out">
                    <i class="fab fa-linkedin-in text-3xl"></i> <!-- LinkedIn Icon -->
                </a>
                <a href="https://gitlab.com/users/nugroho1116/projects"
                    class="text-gray-500 hover:text-orange-500 transform hover:scale-125 transition duration-300 ease-in-out">
                    <i class="fab fa-gitlab text-3xl"></i> <!-- GitLab Icon -->
                </a>
                <a href="https://www.instagram.com/nugroho_d_r/profilecard/?igsh=MW53bzM1cjI0MGp2Ng=="
                    class="text-gray-500 hover:text-pink-500 transform hover:scale-125 transition duration-300 ease-in-out">
                    <i class="fab fa-instagram text-3xl"></i> <!-- Instagram Icon -->
                </a>
            </div>

            <!-- Vertical Divider Line -->
            <div class="hidden md:block w-px h-48 bg-gray-300 mx-8 animate-fadeIn"></div>

            <!-- Right Content -->
            <div class="text-center md:text-left animate-fadeInRight">
                <h2 class="text-gray-800 text-3xl font-bold mb-4">Contact</h2>
                <p class="text-xl mt-2 text-gray-700">+62 8998 9723 62</p>
                <p class="text-xl mt-2">
                    <a href="mailto:nugroho1116@gmail.com"
                        class="text-blue-600 hover:text-blue-700 hover:underline transition duration-200">
                        nugroho1116@gmail.com
                    </a>
                </p>
                <p class="text-lg mt-4 font-semibold text-gray-500">Surabaya, Jawa Timur</p>
                <p class="text-lg text-gray-600">Indonesia</p>

                <!-- Call Button -->
                <a href="tel:+628998972362"
                    class="inline-block mt-6 px-6 py-2 text-white bg-red-500 hover:bg-red-600 rounded-full font-semibold shadow-lg transition duration-200 ease-in-out transform hover:scale-105">
                    Call Now
                </a>
            </div>
        </div>

        <!-- Include Font Awesome for icons (CDN) -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

        <!-- Custom Animation Styles -->
        <style>
            /* Fade-in animations */
            .animate-fadeInLeft {
                animation: fadeInLeft 1s ease-in-out;
            }

            .animate-fadeInRight {
                animation: fadeInRight 1s ease-in-out;
            }

            .animate-fadeIn {
                animation: fadeIn 1.5s ease-in-out;
            }

            @keyframes fadeInLeft {
                0% {
                    opacity: 0;
                    transform: translateX(-20px);
                }

                100% {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes fadeInRight {
                0% {
                    opacity: 0;
                    transform: translateX(20px);
                }

                100% {
                    opacity: 1;
                    transform: translateX(0);
                }
            }

            @keyframes fadeIn {
                0% {
                    opacity: 0;
                }

                100% {
                    opacity: 1;
                }
            }
        </style>
    </section>


    <script>
        const navbarToggle = document.getElementById('navbar-toggle');
        const mobileMenu = document.getElementById('mobile-menu');

        navbarToggle.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    </script>

    <script>
        const slider = document.getElementById("projectSlider");
        const nextButton = document.getElementById("nextButton");
        const prevButton = document.getElementById("prevButton");
        const cardWidth = slider.querySelector(".card").offsetWidth + 24; // 24px for space-x-6 gap
        const visibleCards = 3; // Number of visible cards

        // Event listeners for buttons
        nextButton.addEventListener("click", () => {
            slider.scrollBy({
                left: cardWidth * visibleCards,
                behavior: "smooth"
            });
        });

        prevButton.addEventListener("click", () => {
            slider.scrollBy({
                left: -cardWidth * visibleCards,
                behavior: "smooth"
            });
        });
    </script>

    <!-- JavaScript to Toggle Modal -->
    <script>
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);

            // Toggle 'hidden' class
            modal.classList.toggle("hidden");

            // Ensure modal is displayed as flex if not hidden
            if (!modal.classList.contains("hidden")) {
                modal.classList.add("flex"); // Ensure it is flex when shown
                modal.querySelector("button").focus(); // Set focus on the close button
            } else {
                modal.classList.remove("flex"); // Remove flex when hidden
            }
        }
    </script>

</body>


</html>