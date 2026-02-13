@extends('layouts.app')

@section('content')

<!-- CONTACT HERO SECTION -->
<section class="bg-[#f6f2eb] py-16 md:py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 
                grid grid-cols-1 lg:grid-cols-2 
                gap-10 md:gap-14 items-center">

        <!-- IMAGE -->
        <div class="rounded-3xl overflow-hidden shadow-lg">
            <img src="/images/interior.jpg"
                 class="w-full h-[280px] sm:h-[350px] md:h-[450px] object-cover">
        </div>

        <!-- CONTENT -->
        <div class="text-center lg:text-left">

            <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-neutral-900 mb-4">
                Contact <span class="text-[#CEA56C]">Us</span>
            </h2>

            <p class="text-gray-600 mb-8 text-sm sm:text-base md:text-lg 
                      max-w-xl mx-auto lg:mx-0">
                Let’s start transforming your space — reach out to us for inquiries,
                design consultations, or custom project requirements.
            </p>

            <div class="space-y-8 text-gray-700">

                <!-- Address -->
                <div class="flex flex-col items-center lg:items-start">
                    <i class="text-[#CEA56C] text-2xl mb-2 fas fa-map-marker-alt"></i>
                    <h4 class="font-semibold text-neutral-900">Office Address</h4>
                    <p>Rosary Civil Interior Projects</p>
                    <p>Delhi NCR, India</p>
                </div>

                <!-- Email -->
                <div class="flex flex-col items-center lg:items-start">
                    <i class="text-[#CEA56C] text-2xl mb-2 fas fa-envelope"></i>
                    <h4 class="font-semibold text-neutral-900">Email</h4>
                    <p>support@rosaryprojects.com</p>
                </div>

                <!-- Phone -->
                <div class="flex flex-col items-center lg:items-start">
                    <i class="text-[#CEA56C] text-2xl mb-2 fas fa-phone"></i>
                    <h4 class="font-semibold text-neutral-900">Phone</h4>
                    <p>+91 91234 56789</p>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- CONTACT FORM -->
<section class="py-12 md:py-16 bg-white">
    <div class="max-w-3xl mx-auto px-4">

        <div class="bg-white shadow-xl rounded-3xl p-6 sm:p-8 md:p-10">

            <h3 class="text-xl sm:text-2xl font-bold text-center text-neutral-900 mb-2">
                Send us a message
            </h3>

            <p class="text-center text-gray-500 text-sm sm:text-base mb-8">
                We’d love to hear from you — share your requirement or ask any questions.
            </p>

            <form>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                    <input type="text" placeholder="Enter your Name"
                        class="border-b-2 border-gray-300 bg-transparent focus:border-[#CEA56C]
                               text-gray-800 w-full py-3 outline-none text-sm sm:text-base">

                    <input type="email" placeholder="Enter a valid Email"
                        class="border-b-2 border-gray-300 bg-transparent focus:border-[#CEA56C]
                               text-gray-800 w-full py-3 outline-none text-sm sm:text-base">
                </div>

                <textarea placeholder="Enter your Message"
                    class="border-b-2 border-gray-300 bg-transparent focus:border-[#CEA56C]
                           text-gray-800 w-full py-3 mt-6 outline-none text-sm sm:text-base"
                    rows="4"></textarea>

                <div class="text-center mt-8">
                    <button type="submit"
                        class="px-8 sm:px-10 py-3 bg-[#CEA56C] text-black font-semibold
                               rounded-full shadow-md hover:bg-[#b9914f]
                               transition duration-300 text-sm sm:text-base">
                        Submit
                    </button>
                </div>
            </form>

        </div>
    </div>
</section>

<!-- MAP SECTION -->
<section class="py-10 bg-[#f6f2eb]">
    <div class="max-w-7xl mx-auto px-6">

        <h3 class="text-2xl font-bold text-neutral-900 text-center mb-4">
            Visit Our <span class="text-[#CEA56C]">Location</span>
        </h3>
        <p class="text-center text-gray-500 mb-6">
            We would love to meet you — feel free to drop by our studio.
        </p>

        <div class="w-full rounded-3xl overflow-hidden shadow-lg">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d21341.992729!2d77.209021!3d28.613940!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd!2zRGVsaGk!5e0!3m2!1sen!2sin!4v1694000000000!5m2!1sen!2sin" 
                width="100%" 
                height="400" 
                style="border:0;"
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

    </div>
</section>

@endsection
