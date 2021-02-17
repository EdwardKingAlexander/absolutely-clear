<div x-data="{open: false}" class="sticky top-0" id="top">
<nav class="bg-blue-500 ">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
  <div class="flex items-center justify-between h-16">
      
    <div class="flex items-center">
        
      <div class="flex-shrink-0">
          <a title="Go to the top of the page" href="#top">
          <img 
          class="block lg:hidden h-16 w-auto" 
          src="/assets/img/logo.webp" 
          alt="Absolutely Clear Window Cleaning Logo">
        </a>

          <a title="Go to the top of the page"
          href="#top">
          <img 
          class="hidden lg:block h-16 w-auto" 
          src="/assets/img/logo.webp" 
          alt="Absolutely Clear Window Cleaning Logo">
          </a>
        </div>

        <div class="hidden sm:block sm:ml-6">
          
            <div class="flex">
                <a title="Navigate to the services section" href="#front-page-5" class="px-3 py-2 rounded-md 
                text-sm md:text-lg 
                font-medium leading-5 text-white 
                hover:text-blue-500 hover:bg-white  
                focus:outline-none focus:text-white focus:bg-gray-700 
                transition duration-150 ease-in-out">
                    Our Services
                </a>

                <a title="Navigate to the areas of service section" href="#front-page-6" class="ml-4 px-3 py-2 rounded-md 
                text-sm md:text-lg 
                font-medium leading-5 text-white 
                hover:text-blue-500 hover:bg-white focus:outline-none focus:text-white focus:bg-gray-700 
                transition duration-150 ease-in-out">
                    Areas We Service
                </a>

                <a title="Navigate to the why us section" href="#front-page-2" class="ml-4 px-3 py-2 rounded-md 
                text-sm md:text-lg 
                font-medium leading-5 text-white 
                hover:text-blue-500 hover:bg-white focus:outline-none focus:text-white focus:bg-gray-700 
                transition duration-150 ease-in-out">
                    Why Us
                </a>

                <a title="Navigate to our contact information" href="#footer" id="contact-nav" class="ml-4 px-3 py-2 rounded-md 
                text-sm md:text-lg 
                font-medium leading-5 text-white 
                hover:text-blue-500 hover:bg-white focus:outline-none focus:text-white focus:bg-gray-700 
                transition duration-150 ease-in-out">
                    Contact
                </a>

                <a title="Navigate to the request a free estimate section" href="#front-page-3" class="ml-4 px-3 py-2 rounded-md 
                text-sm md:text-lg 
                font-medium leading-5 text-white 
                hover:text-blue-500 hover:bg-white focus:outline-none focus:text-white focus:bg-gray-700 
                transition duration-150 ease-in-out">
                    Request Free Estimate
                </a>
            
          </div>
        </div>


      </div>
      
      
      
      <div class="-mr-2 flex sm:hidden">
        

      
        <!-- Mobile menu button -->
        <button @click="open = !open" 
        title="click to open and close the mobile navigation menu"
        class="inline-flex items-center justify-center p-2 rounded-md 
        text-white 
        hover:text-white hover:bg-white hover:text-blue-500 
        focus:outline-none 
        focus:bg-gray-700 focus:text-white 
        transition duration-150 ease-in-out" 
        :aria-expanded="open"
        aria-label="Main menu" 
        aria-expanded="false">
          
        <!-- Icon when menu is closed. -->
          <!--
            Heroicon name: menu

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg 
          class="block h-6 w-6"
          :class="{'hidden': open, 'block': !open }" 
          xmlns="http://www.w3.org/2000/svg" 
          fill="none" 
          viewBox="0 0 24 24" 
          stroke="currentColor">
            <path 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M4 6h16M4 12h16M4 18h16" />
          </svg>
          <!-- Icon when menu is open. -->
          <!--
            Heroicon name: x

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg 
          class="hidden h-6 w-6" 
          :class="{'block': open, 'hidden': !open }"
          xmlns="http://www.w3.org/2000/svg" 
          fill="none" 
          viewBox="0 0 24 24" 
          stroke="currentColor">
            <path 
            stroke-linecap="round" 
            stroke-linejoin="round" 
            stroke-width="2" 
            d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
    </div>
  </div>

  <!--
    Mobile menu, toggle classes based on menu state.

    Menu open: "block", Menu closed: "hidden"
  -->
  <div 
  x-show="open"
  @click.away = "open = false"
  :class="{'block': open, 'hidden': !open}" 
  class="hidden sm:hidden">
    <div class="px-2 pt-2 pb-3">
        <a 
        title="Navigate to the services section"
        href="#front-page-5" 
        class="block px-3 py-2 rounded-md text-base font-medium text-white 
        hover:bg-gray-700 hover:text-white
        focus:outline-none focus:text-white focus:bg-gray-700 
        transition duration-150 ease-in-out">
            Our Services
        </a>
    
        <a href="#front-page-6"
        title="Navigate to the areas of service section" 
        class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white 
        hover:text-white hover:bg-gray-700 
        focus:outline-none focus:text-white focus:bg-gray-700 
        transition duration-150 ease-in-out">
            Areas We Service
        </a>
    
        <a 
        href="#front-page-2" 
        title="Navigate to the why us section"
        class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white 
        hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 
        transition duration-150 ease-in-out">
            Why Us
        </a>

        <a 
        @click="open = false"
        href="#footer" 
        id="mobile-contact-nav"
        title="Navigate to the contact section"
        class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white 
        hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 
        transition duration-150 ease-in-out">
            Contact
        </a>

        <a 
        title="Navigate to the request a free estimate section"
        href="#front-page-3" 
        class="mt-1 block px-3 py-2 rounded-md text-base font-medium text-white 
        hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 
        transition duration-150 ease-in-out">
            Request Free Estimate
        </a>

    </div>
  </div>
</nav>


</div>