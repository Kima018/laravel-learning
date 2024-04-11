@extends('layout')
@section('title','Contact us')

@section('contactSection')

    <section class="w-full py-10">
        <div class="container w-full flex flex-wrap md:flex-nowrap mx-auto">
            <div class="w-1/2 flex flex-col justify-center">
                <h1 class="text-4xl font-semibold underline underline-offset-4 mb-5">Contact us</h1>
                <p class="w-[80%]">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. At blanditiis cumque, deleniti
                    dignissimos, enim, esse fuga fugiat incidunt iste iusto labore minima minus natus non obcaecati
                    officiis repellat reprehenderit voluptatum?
                </p>
            </div>
            <div class="w-1/2 flex items-center justify-center ">
                <div class="mx-auto w-full max-w-[550px]">
                    @if($errors->any())
                        <h2> {{$errors}}</h2>
                    @endif
                    <form action="/admin/send-contact" method="POST" >
                        {{csrf_field()}}
                        <div class="mb-5">
                            <label
                                for="email"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Email Address
                            </label>
                            <input
                                type="email"
                                name="email"
                                id="email"
                                placeholder="example@domain.com"
                                value="{{old("email")}}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>

                        <div class="mb-5">
                            <label
                                for="subject"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Subject
                            </label>
                            <input
                                type="text"
                                name="subject"
                                id="subject"
                                placeholder="Enter your subject"
                                value="{{old("subject")}}"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            />
                        </div>

                        <div class="mb-5">
                            <label
                                for="message"
                                class="mb-3 block text-base font-medium text-[#07074D]"
                            >
                                Message
                            </label>
                            <textarea
                                rows="4"
                                name="message"
                                id="message"
                                placeholder="Type your message"
                                class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                            ></textarea>
                        </div>

                        <div>
                            <button
                                type="submit"
                                class=" rounded-md bg-green-400 py-3 px-8 text-base font-semibold text-white outline-none"
                            >
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="relative w-full h-96">
        <iframe class="absolute top-0 left-0 w-full h-full"
                src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=9%20bridade%20nis+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed">
            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
        </iframe>
    </div>
@endsection
