<header class="flex justify-between gap-5">
    <button class="navbar-toggler md:hidden text-white">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
    </button>
    <div class="search-box relative max-w-xs w-full">
        <input type="search" name="" class="py-3 px-6 text-xs border border-[#5f5f5f]/60 rounded-xl w-full bg-transparent placeholder:text-white/40 text-white focus:outline-0 focus:shadow-none focus:ring-0 focus:border-primary" placeholder="Search here" id="">
        <button class="absolute top-1/2 -translate-y-1/2 right-6">
            <svg width="13" height="13" viewBox="0 0 13 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.8359 10.8828L9.49219 8.53906C9.375 8.44531 9.23438 8.375 9.09375 8.375H8.71875C9.35156 7.55469 9.75 6.52344 9.75 5.375C9.75 2.70312 7.54688 0.5 4.875 0.5C2.17969 0.5 0 2.70312 0 5.375C0 8.07031 2.17969 10.25 4.875 10.25C6 10.25 7.03125 9.875 7.875 9.21875V9.61719C7.875 9.75781 7.92188 9.89844 8.03906 10.0156L10.3594 12.3359C10.5938 12.5703 10.9453 12.5703 11.1562 12.3359L11.8125 11.6797C12.0469 11.4688 12.0469 11.1172 11.8359 10.8828ZM4.875 8.375C3.21094 8.375 1.875 7.03906 1.875 5.375C1.875 3.73438 3.21094 2.375 4.875 2.375C6.51562 2.375 7.875 3.73438 7.875 5.375C7.875 7.03906 6.51562 8.375 4.875 8.375Z" fill="white"/>
            </svg>
        </button>
    </div>
    <div class="header-profile-box flex items-center gap-2.5 md:-mt-4">
        <div class="relative">
            <a href="javascript:void(0);" class="user-box flex items-center gap-2" data-menu='true' data-menu-name="#profile-menu">
                <div class="user-avatar w-8 h-8 rounded-full overflow-hidden">
                    <img src="images/general/avatar-img.png" class="w-full h-full object-cover object-center" alt="">
                </div>
                <div class="text-sm text-white max-md:hidden">Name Surname</div>
                <div class="icon-box w-5 h-5 flex items-center justify-center">
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.75977 5.68554C4.95312 5.8789 5.27539 5.8789 5.46875 5.68554L9.6582 1.51757C9.85156 1.30273 9.85156 0.980463 9.6582 0.787103L9.16406 0.292963C8.9707 0.0996034 8.64844 0.0996034 8.43359 0.292963L5.125 3.60156L1.79492 0.292962C1.58008 0.0996031 1.25781 0.0996031 1.06445 0.292962L0.570312 0.787103C0.376953 0.980462 0.376953 1.30273 0.570312 1.51757L4.75977 5.68554Z" fill="#F2F3F5"/>
                    </svg>
                </div>
            </a>
            <div class="profile-sidebar submenu p-4 md:p-6 rounded-xl fixed top-16 right-6 backdrop-blur-xl max-md:max-w-xs w-full md:max-w-[350px] h-full translate-y-1 overflow-y-auto hidden z-10" id="profile-menu">
                <button class="close-profile-sidebar text-[#B58CFF] absolute top-6 right-6">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
                <!-- <ul class="divide-y divide-white/10">
                    <li class="py-2 first:pt-0 last:pb-0">
                        <a href="javascript:void(0);" class="block text-sm text-white hover:text-black transition-all duration-500">Profile</a>
                    </li>
                    <li class="py-2 first:pt-0 last:pb-0">
                        <a href="javascript:void(0);" class="block text-sm text-white hover:text-black transition-all duration-500">Settings</a>
                    </li>
                    <li class="py-2 first:pt-0 last:pb-0">
                        <a href="javascript:void(0);" class="block text-sm text-white hover:text-black transition-all duration-500">Notifications</a>
                    </li>
                    <li class="py-2 first:pt-0 last:pb-0">
                        <a href="javascript:void(0);" class="block text-sm text-white hover:text-black transition-all duration-500">Logout</a>
                    </li>
                </ul> -->
                <div class="user-box flex items-center gap-2 md:gap-5 open" data-menu="true" data-menu-name="#profile-menu">
                    <div class="user-avatar w-10 h-10 md:h-24 md:w-24 rounded-full overflow-hidden">
                        <img src="images/general/avatar-large-img.png" class="w-full h-full object-cover object-center" alt="">
                    </div>
                    <div class="text-xl md:text-2xl text-white font-semibold">Name Surname</div>
                </div>
                <div class="grid grid-cols-3 gap-3 my-8">
                    <div class="col-span-1 text-center">
                        <div class="w-10 md:w-14 h-10 md:h-14 rounded-full bg-[#05001A]/60 border border-[#72C6DF] mx-auto mb-2.5 flex items-center justify-center text-sm md:text-base leading-none text-white">120</div>
                        <h4 class="text-[10px] text-black">Completed courses</h4>
                    </div>
                    <div class="col-span-1 text-center">
                        <div class="w-10 md:w-14 h-10 md:h-14 rounded-full bg-[#05001A]/60 border border-[#72C6DF] mx-auto mb-2.5 flex items-center justify-center text-sm md:text-base leading-none text-white">120</div>
                        <h4 class="text-[10px] text-black">Learning hours</h4>
                    </div>
                    <div class="col-span-1 text-center">
                        <div class="w-10 md:w-14 h-10 md:h-14 rounded-full bg-[#05001A]/60 border border-[#72C6DF] mx-auto mb-2.5 flex items-center justify-center text-sm md:text-base leading-none text-white">120</div>
                        <h4 class="text-[10px] text-black">Teachers met</h4>
                    </div>
                </div>
                <div class="inout-box mb-6">
                    <label for="type-something" class="block text-base text-black font-medium mb-2.5 leading-none">Title of something</label>
                    <input type="text" name="type-something" id="type-something" class="w-full h-14 border border-[#72C6DF] bg-[#05001A]/60 p-4 text-sm text-white rounded focus:outline-none focus:ring-0">
                </div>
                <div class="chart-box mb-6">
                    <div class="flex items-center justify-between gap-3 mb-3">
                        <h4 class="text-base text-black font-medium mb-2.5 leading-none">Title of something</h4>
                        <select name="" id="" class="text-xs text-black bg-transparent border-0 focus:outline-none focus:ring-0">
                            <option value="">Filter</option>
                            <option value="">Filter 1</option>
                            <option value="">Filter 2</option>
                            <option value="">Filter 3</option>
                        </select>
                    </div>
                    <div class="border border-[#72C6DF] bg-[#05001A]/60 p-4">
                        <div id="chart-container"></div>
                    </div>
                </div>
                <div class="achive-box">
                    <h4 class="text-base text-black font-medium mb-4 leading-none">My Achievements</h4>
                    <div class="space-y-4">
                        <div class="py-2 px-4 bg-[#CC5EA7] rounded flex items-center gap-2.5">
                            <div class="icon-box">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.77901 0C7.60221 0 7.42541 0.08 7.33702 0.16L6.09945 1.2L4.68508 0.96C4.24309 0.88 3.9779 1.12 3.8895 1.44L3.62431 2.88L2.12155 3.52C1.76796 3.68 1.67956 4 1.85635 4.32L2.56354 5.6L1.85635 6.88C1.67956 7.2 1.85635 7.52 2.12155 7.68L3.62431 8.32L3.8895 9.76C3.9779 10.08 4.33149 10.32 4.68508 10.24L6.36464 10L7.60221 11.04C7.8674 11.28 8.30939 11.28 8.57458 11.04L9.81215 10L11.4917 10.24C11.8453 10.32 12.1989 10.08 12.2873 9.76L12.5525 8.32L14.0552 7.68C14.4088 7.52 14.4972 7.2 14.3204 6.88L13.3481 5.6L14.0552 4.32C14.232 4 14.1436 3.68 13.7901 3.52L12.2873 2.88L12.0221 1.44C11.9337 1.12 11.5801 0.88 11.2265 0.96L9.54696 1.2L8.30939 0.16C8.22099 3.57628e-08 7.9558 0 7.77901 0ZM2.74033 8.88L0 13.84L3.18232 13.44L4.77348 16L7.07182 11.76L6.89503 11.6L6.01105 10.88L4.77348 11.04C3.9779 11.12 3.18232 10.64 3.00552 9.92L2.74033 8.88ZM13.1713 8.88L12.9061 9.92C12.7293 10.56 12.1105 11.04 11.4033 11.04H11.2265L9.98895 10.88L9.10497 11.6L8.92818 11.76L11.2265 16L12.8177 13.52L16 13.92L13.1713 8.88Z" fill="#FFF964"/>
                                </svg>
                            </div>
                            <h4 class="text-xs text-white leading-5">Some text and information</h4>
                        </div>
                        <div class="py-2 px-4 bg-[#72C6DF] rounded flex items-center gap-2.5">
                            <div class="icon-box">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.77901 0C7.60221 0 7.42541 0.08 7.33702 0.16L6.09945 1.2L4.68508 0.96C4.24309 0.88 3.9779 1.12 3.8895 1.44L3.62431 2.88L2.12155 3.52C1.76796 3.68 1.67956 4 1.85635 4.32L2.56354 5.6L1.85635 6.88C1.67956 7.2 1.85635 7.52 2.12155 7.68L3.62431 8.32L3.8895 9.76C3.9779 10.08 4.33149 10.32 4.68508 10.24L6.36464 10L7.60221 11.04C7.8674 11.28 8.30939 11.28 8.57458 11.04L9.81215 10L11.4917 10.24C11.8453 10.32 12.1989 10.08 12.2873 9.76L12.5525 8.32L14.0552 7.68C14.4088 7.52 14.4972 7.2 14.3204 6.88L13.3481 5.6L14.0552 4.32C14.232 4 14.1436 3.68 13.7901 3.52L12.2873 2.88L12.0221 1.44C11.9337 1.12 11.5801 0.88 11.2265 0.96L9.54696 1.2L8.30939 0.16C8.22099 3.57628e-08 7.9558 0 7.77901 0ZM2.74033 8.88L0 13.84L3.18232 13.44L4.77348 16L7.07182 11.76L6.89503 11.6L6.01105 10.88L4.77348 11.04C3.9779 11.12 3.18232 10.64 3.00552 9.92L2.74033 8.88ZM13.1713 8.88L12.9061 9.92C12.7293 10.56 12.1105 11.04 11.4033 11.04H11.2265L9.98895 10.88L9.10497 11.6L8.92818 11.76L11.2265 16L12.8177 13.52L16 13.92L13.1713 8.88Z" fill="#FFF964"/>
                                </svg>
                            </div>
                            <h4 class="text-xs text-white leading-5">Some text and information</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="notification-box">
            <a href="javascript:void(0);" class="icon-box relative">
                <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="relative z-10">
                    <path d="M8 16C9.09375 16 9.96875 15.125 9.96875 14H6C6 15.125 6.875 16 8 16ZM14.7188 11.3438C14.125 10.6875 12.9688 9.71875 12.9688 6.5C12.9688 4.09375 11.2812 2.15625 8.96875 1.65625V1C8.96875 0.46875 8.53125 0 8 0C7.4375 0 7 0.46875 7 1V1.65625C4.6875 2.15625 3 4.09375 3 6.5C3 9.71875 1.84375 10.6875 1.25 11.3438C1.0625 11.5312 0.96875 11.7812 1 12C1 12.5312 1.375 13 2 13H13.9688C14.5938 13 14.9688 12.5312 15 12C15 11.7812 14.9062 11.5312 14.7188 11.3438Z" fill="white"/>
                </svg>
                <div class="badge px-1.5 py-1 bg-[#ED5B87] rounded-full text-xs absolute -top-2.5 -right-2.5 leading-none text-white">5</div>
            </a>
        </div>
    </div>
</header>
<div class="content-box mt-5">