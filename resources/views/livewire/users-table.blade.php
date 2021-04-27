<div>
    <div>
        <h5>Users</h5>
        <div class="mt-2 border-t border-gray-300">
         @foreach ($users as $user)
         <div
         class="px-4 py-6 flex flex-col sm:flex-row items-center justify-between cursor-pointer transition-colors duration-300 ease border-b border-gray-300 hover:bg-gray-200 no-underline"
       >
         <div class="relative rounded-full w-16 h-16">
           <img
             src="https://gustui.s3.amazonaws.com/avatar.png"
             class="absolute left-0 top-0 w-full h-full rounded-full object-cover"
           />
         </div>
         <div class="mt-2 text-center sm:text-left sm:mt-0 sm:ml-4 flex-1">
            <p class="font-medium">{{ $user->name }}</p>
            @foreach ($user->getRoles() as $roles)
                <p class="">{{ $roles }}</p>
            @endforeach
         </div>
         <svg
           aria-hidden="true"
           focusable="false"
           data-prefix="fas"
           data-icon="chevron-right"
           class="w-10 text-blue-400 hidden sm:inline-block"
           role="img"
           xmlns="http://www.w3.org/2000/svg"
           viewBox="0 0 320 512"
         >
           <path
             fill="currentColor"
             d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
           ></path>
         </svg>
       </div>
         @endforeach
        </div>
    </div>
</div>

          {{-- <div
            class="px-4 py-6 flex flex-col sm:flex-row items-center justify-between cursor-pointer transition-colors duration-300 ease border-b border-gray-300 hover:bg-gray-200 no-underline"
          >
            <div class="relative rounded-full w-16 h-16">
              <img
                src="https://gustui.s3.amazonaws.com/avatar.png"
                class="absolute left-0 top-0 w-full h-full rounded-full object-cover"
              />
            </div>
            <div class="mt-2 text-center sm:text-left sm:mt-0 sm:ml-4 flex-1">
              <p class="font-medium">Mark Jacobson</p>
              <p class="">Account Manager</p>
            </div>
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              data-icon="chevron-right"
              class="svg-inline--fa fa-chevron-right fa-w-10 text-blue-400 hidden sm:inline-block"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 320 512"
            >
              <path
                fill="currentColor"
                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
              ></path>
            </svg>
          </div>
          <div
            class="px-4 py-6 flex flex-col sm:flex-row items-center justify-between cursor-pointer transition-colors duration-300 ease border-b border-gray-300 hover:bg-gray-200 no-underline"
          >
            <div class="relative rounded-full w-16 h-16">
              <img
                src="https://gustui.s3.amazonaws.com/avatar.png"
                class="absolute left-0 top-0 w-full h-full rounded-full object-cover"
              />
            </div>
            <div class="mt-2 text-center sm:text-left sm:mt-0 sm:ml-4 flex-1">
              <p class="font-medium">Jack Jackson</p>
              <p class="">Manager of Accounts</p>
            </div>
            <svg
              aria-hidden="true"
              focusable="false"
              data-prefix="fas"
              data-icon="chevron-right"
              class="svg-inline--fa fa-chevron-right fa-w-10 text-blue-400 hidden sm:inline-block"
              role="img"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 320 512"
            >
              <path
                fill="currentColor"
                d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"
              ></path>
            </svg>
          </div> --}}
