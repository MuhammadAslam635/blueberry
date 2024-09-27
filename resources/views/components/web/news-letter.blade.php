<div>
    <div class="bb-popnews-bg fixed left-[0] top-[0] w-full h-full bg-[#00000080] hidden z-[25] "></div>
    <div
        class="bb-popnews-box w-full max-w-[600px] p-[24px] fixed left-[50%] top-[50%] bg-[#fff] hidden z-[25] text-center rounded-[15px] overflow-hidden max-[767px]:w-[90%]">
        <div class="bb-popnews-close transition-all duration-[0.3s] ease-in-out w-[16px] h-[20px] absolute top-[-5px] right-[27px] bg-[#e04e4eb3] rounded-[10px] cursor-pointer hover:bg-[#e04e4e]"
            title="Close"></div>
        <div class="flex flex-wrap mx-[-12px]">
            <div class="min-[768px]:w-[50%] w-full px-[12px]">
                <img src="{{ asset('assets/img/newsletter/newsletter.jpg') }}" alt="newsletter"
                    class="w-full rounded-[15px] max-[767px]:hidden">
            </div>
            <div class="min-[768px]:w-[50%] w-full px-[12px]">
                <div class="flex flex-col items-center justify-center h-full bb-popnews-box-content">
                    <h2
                        class="font-quicksand text-[#3d4750] block text-[22px] leading-[33px] font-semibold mt-[0] mx-[auto] mb-[10px] tracking-[0] capitalize">
                        {{ $news->title }}.</h2>
                    <p
                        class="font-Poppins font-light tracking-[0.03rem] mb-[8px] text-[14px] leading-[22px] text-[#686e7d]">
                        {{ $news->description }}</p>
                    @livewire('web.section.header.news-letter-component')
                </div>
            </div>
        </div>
    </div>
</div>
