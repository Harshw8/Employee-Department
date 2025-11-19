@extends('frontend.layout.layout')

@section('main_content')
<!-- ...::: About Section Start :::... -->
            <section class="section-about">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container">
                        <!-- Section Block -->
                        <div class="section-block mb-10 md:mb-[60px] xl:mb-20">
                            <div class="grid items-center gap-x-6 gap-y-10 text-center lg:grid-cols-[1fr_minmax(0,0.55fr)] lg:text-start xl:gap-x-[134px]">
                                <h2 class="jos">
                                    We make
                                    <span>
                                        your
                                        <img src="{{asset('frontend/assets/img/elemnts/shape-light-lime-5-arms-star.svg')}}" alt="shape-light-lime-5-arms-star" width="74" height="70" class="relative inline-block h-auto w-8 after:bg-black md:w-10 lg:w-[57px]" />
                                    </span>
                                    business stand out
                                </h2>
                                <p class="jos section-para">
                                    We work closely with our clients to know their objectives,
                                    target audience, unique needs, and practical design
                                    solutions.
                                </p>
                            </div>
                        </div>
                        <!-- Section Block -->

                        <!-- About Area -->
                        <div class="grid grid-cols-1 gap-x-6 gap-y-10 md:grid-cols-2 lg:grid-cols-[0.8fr_0.4fr]">
                            <!-- About Left Block - Video -->
                            <div class="jos relative flex items-center justify-center overflow-hidden rounded-[25px] border-[5px] border-black">
                                <img src="{{asset('frontend/assets/img/images/th-1/about-img.jpg')}}" alt="about-img" width="846" height="476" loading="lazy" class="h-full w-full object-cover" />

                                <div class="absolute inline-block">
                                    <a data-fslightbox="gallery" href="https://www.youtube.com/watch?v=3nQNiWdeH2Q" class="btn-primary relative pr-16" aria-label="video-play">
                                        Play
                                        <span class="rounded-[50% absolute right-[0px] inline-flex items-center justify-center"><img src="{{asset('frontend/assets/img/icons/icon-buttery-white-black-play.svg')}}" alt="icon-buttery-white-black-play" width="50" height="50" /></span>
                                    </a>
                                </div>
                            </div>
                            <!-- About Left Block - Video -->

                            <!-- About Right Block - Counter Up -->
                            <div class="jos rounded-[25px] bg-black p-[30px]">
                                <ul class="divide-y divide-[#333333]">
                                    <li class="py-6 text-center first-of-type:pt-0 last-of-type:pb-0">
                                        <div class="font-syne text-4xl font-bold leading-[1.07] -tracking-[1%] text-colorLightLime md:text-5xl xl:text-[70px]" data-module="countup">
                                            <span class="start-number" data-countup-number="15">15</span>+
                                        </div>
                                        <span class="mt-2 inline-block text-colorButteryWhite">Years of experience</span>
                                    </li>
                                    <li class="py-6 text-center first-of-type:pt-0 last-of-type:pb-0">
                                        <div class="font-syne text-4xl font-bold leading-[1.07] -tracking-[1%] text-colorLightLime md:text-5xl xl:text-[70px]" data-module="countup">
                                            <span class="start-number" data-countup-number="120">120</span>k
                                        </div>
                                        <span class="mt-2 inline-block text-colorButteryWhite">Successful projects</span>
                                    </li>
                                    <li class="py-6 text-center first-of-type:pt-0 last-of-type:pb-0">
                                        <div class="font-syne text-4xl font-bold leading-[1.07] -tracking-[1%] text-colorLightLime md:text-5xl xl:text-[70px]" data-module="countup">
                                            <span class="start-number" data-countup-number="100">100</span>%
                                        </div>
                                        <span class="mt-2 inline-block text-colorButteryWhite">Client satisfaction rate</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- About Right Block - Counter Up -->
                        </div>
                        <!-- About Area -->
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- ...::: About Section End :::... -->
             <!-- ...::: About Gallery Section Start :::... -->
            <section class="section-about-gallery">
                <!-- Section Space -->
                <div class="section-space">
                    <!-- Section Container -->
                    <div class="container">
                        <!-- Section Block -->
                        <div class="section-block mb-10 md:mb-[60px] xl:mb-20">
                            <h2 class="jos mx-auto max-w-[966px] text-center">
                                We think our story is
                                <span>
                                    <img src="{{asset('frontend/assets/img/elemnts/shape-light-lime-5-arms-star.svg')}}" alt="shape-light-lime-5-arms-star" width="74" height="70" class="relative inline-block h-auto w-8 after:bg-black md:w-10 lg:w-[57px]" /> </span>worth sharing with you
                            </h2>
                            <div class="mx-auto mt-6 max-w-[813px] text-center">
                                <p class="jos section-para">
                                    Established in 2008, we began as a small but ambitious team.
                                    We understood the importance of creative and tech-savvy
                                    solutions to help businesses succeed in the ever-changing
                                    digital landscape.
                                </p>
                            </div>
                        </div>
                        <!-- Section Block -->

                        <!-- About Gallery Image List -->
                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                            <!-- About Galley Image Item -->
                            <a href="{{asset('frontend/assets/img/images/th-1/about-gallery-img-1.jpg')}}" data-fslightbox="gallery" class="group block cursor-pointer overflow-hidden rounded-[25px] border-2 border-black md:col-span-1 lg:col-span-2">
                                <img src="{{asset('frontend/assets/img/images/th-1/about-gallery-img-1.jpg')}}" alt="about-gallery-img-1" width="846" height="392" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110" />
                            </a>
                            <!-- About Galley Image Item -->
                            <!-- About Galley Image Item -->
                            <a href="{{asset('frontend/assets/img/images/th-1/about-gallery-img-2.jpg')}}" data-fslightbox="gallery" class="group col-span-1 block cursor-pointer overflow-hidden rounded-[25px] border-2 border-black">
                                <img src="{{asset('frontend/assets/img/images/th-1/about-gallery-img-2.jpg')}}" alt="about-gallery-img-2" width="408" height="392" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110" />
                            </a>
                            <!-- About Galley Image Item -->
                            <!-- About Galley Image Item -->
                            <a href="{{asset('frontend/assets/img/images/th-1/about-gallery-img-3.jpg')}}" data-fslightbox="gallery" class="group col-span-1 block cursor-pointer overflow-hidden rounded-[25px] border-2 border-black">
                                <img src="{{asset('frontend/assets/img/images/th-1/about-gallery-img-3.jpg')}}" alt="about-gallery-img-3" width="408" height="392" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110" />
                            </a>
                            <!-- About Galley Image Item -->
                            <!-- About Galley Image Item -->
                            <a href="{{asset('frontend/assets/img/images/th-1/about-gallery-img-4.jpg')}}" data-fslightbox="gallery" class="group block cursor-pointer overflow-hidden rounded-[25px] border-2 border-black md:col-span-1 lg:col-span-2">
                                <img src="{{asset('frontend/assets/img/images/th-1/about-gallery-img-4.jpg')}}" alt="about-gallery-img-4" width="846" height="392" class="h-full w-full object-cover transition-all duration-300 group-hover:scale-110" />
                            </a>
                            <!-- About Galley Image Item -->
                        </div>
                        <!-- About Gallery Image List -->

                        <div class="mt-10 grid grid-cols-1 gap-x-5 gap-y-10 lg:grid-cols-2">
                            <div class="rich-text">
                                <h4 class="mb-4">Our core vision</h4>
                                <p>
                                    Empowering businesses to create impactful and visually
                                    stunning brand experiences that captivate audiences and
                                    drive success in the digital age.
                                </p>

                                <p>
                                    Our team consists of experienced designers, developers. We
                                    have a wide variety of skills and backgrounds, allowing us
                                    to tackle projects of all sizes and complexities. We believe
                                    in the power of imagination and innovation.
                                </p>
                            </div>
                            <div class="rich-text">
                                <h4 class="mb-4">Our main mission</h4>
                                <p>
                                    Our mission is to collaborate with businesses of all sizes,
                                    from startups to established brands, to provide innovative
                                    and creative design solutions.
                                </p>

                                <p>
                                    We are committed to creating designs that inspire, connect &
                                    our clients in the marketplace. Our focus is on
                                    understanding. Our clients' unique needs and delivery
                                    designs that not only meet but exceed their expectations.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Section Container -->
                </div>
                <!-- Section Space -->
            </section>
            <!-- ...::: About Gallery Section End :::... -->
@endsection