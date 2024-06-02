<div>


    <section class=" w-full pb-6">
        <div class="max-w-7xl mx-auto p-4 sm:p-6 lg:p-8">
            <div class="container mx-auto px-6 p-6 ">


                <div class="mb-16 text-center">
                    <h4 class="text-base text-indigo-600 font-semibold tracking-wide uppercase">Features</h4>
                    <p class="mt-2 text-5xl lg:text-7xl font-bold tracking-tight text-white">How we change the game

                    </p>
                </div>


                <div class="flex flex-wrap my-12">


                    @foreach (range(1,6) as $item)

                    <div class="w-full border border-neutral-900 border-l-0 border-b-0 md:w-1/2 md:border-r lg:w-1/3 p-8">
                        <div class="flex items-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="20" height="20"
                                fill="currentColor" class="h-6 w-6 text-indigo-500">
                                <path
                                    d="M16 3C8.8 3 3 8.8 3 16s5.8 13 13 13 13-5.8 13-13c0-1.398-.188-2.793-.688-4.094L26.688 13.5c.2.8.313 1.602.313 2.5 0 6.102-4.898 11-11 11S5 22.102 5 16 9.898 5 16 5c3 0 5.695 1.195 7.594 3.094L25 6.688C22.7 4.386 19.5 3 16 3zm11.281 4.281L16 18.563l-4.281-4.282-1.438 1.438 5 5 .719.687.719-.687 12-12z">
                                </path>
                            </svg>
                            <div class="ml-4 text-xl text-white">Increase sales</div>
                        </div>
                        <p class="leading-loose text-gray-500">Consectetur pariatur irure exercitation sit amet id
                            consectetur consecteturmagna et Lorem labore qui velit.
                        </p>
                    </div>

                    @endforeach




                </div>
            </div>
        </div>
    </section>



</div>
