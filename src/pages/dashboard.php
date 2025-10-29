<div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
  <header class="sticky top-0 z-10 flex h-16 items-center justify-between border-b border-border-light bg-surface-light/80 px-10 backdrop-blur-sm dark:border-border-dark dark:bg-surface-dark/80">
    <div class="flex items-center gap-4">
      <i class="pi pi-prime text-2xl text-primary-500"></i>
      <h2 class="text-lg font-bold">Tech Emporium</h2>
    </div>
    <nav class="hidden items-center gap-8 md:flex">
      <a class="text-sm font-medium text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-500" href="#">Featured</a>
      <a class="text-sm font-medium text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-500" href="#">New Arrivals</a>
      <a class="text-sm font-medium text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-500" href="#">Sale</a>
      <a class="text-sm font-medium text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-500" href="#">Tech</a>
      <a class="text-sm font-medium text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-500" href="#">Accessories</a>
    </nav>
    <div class="flex items-center gap-4">
      <button class="rounded-full bg-surface-light p-2 text-text-light hover:bg-primary-50 dark:bg-surface-dark dark:text-text-dark dark:hover:bg-primary-950">
        <i class="pi pi-moon"></i>
      </button>
      <button class="rounded-full bg-surface-light p-2 text-text-light hover:bg-primary-50 dark:bg-surface-dark dark:text-text-dark dark:hover:bg-primary-950">
        <i class="pi pi-search"></i>
      </button>
      <button class="rounded-full bg-surface-light p-2 text-text-light hover:bg-primary-50 dark:bg-surface-dark dark:text-text-dark dark:hover:bg-primary-950">
        <i class="pi pi-shopping-cart"></i>
      </button>
      <div class="aspect-square size-10 rounded-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCf84cCv2sWBdRa-o9FGjrJosHhDyU18UwiJJOTrHI4WLrVHCNf_7-mEyr5N2_inQ7aKP_smVrqMkfADSnUl8EozMn2_WQ3OzCVtmno1VsPmvhzsLU07g-_451gC8QyntKFNJzSS4g3BJt_ezm5teLlfLF5YSLPTuhucZ5pn_-rALaTjjfAcbWsSmDVs30ynbU_37ThwWVs7YiU_LR1h7eFRc6voDfXoMVIIiccKffveqptrzLGqKDYVxv4hrikEWbUJVggG2CPJCY");'></div>
    </div>
  </header>
  <main class="container mx-auto flex-1 px-4 py-8 sm:px-6 lg:px-10">
    <div class="mx-auto max-w-5xl">
      <div class="mb-8">
        <h1 class="text-3xl font-bold tracking-tight">My Account</h1>
      </div>
      <div class="flex flex-col gap-12">
        <div class="border-b border-border-light dark:border-border-dark">
          <nav aria-label="Tabs" class="-mb-px flex space-x-8">
            <a class="border-b-2 border-primary-500 px-1 py-4 text-sm font-medium text-primary-500" href="#"> Orders </a>
            <a class="border-b-2 border-transparent px-1 py-4 text-sm font-medium text-subtext-light hover:border-border-light hover:text-text-light dark:text-subtext-dark dark:hover:border-border-dark dark:hover:text-text-dark" href="#"> Addresses </a>
            <a class="border-b-2 border-transparent px-1 py-4 text-sm font-medium text-subtext-light hover:border-border-light hover:text-text-light dark:text-subtext-dark dark:hover:border-border-dark dark:hover:text-text-dark" href="#"> Payment Methods </a>
            <a class="border-b-2 border-transparent px-1 py-4 text-sm font-medium text-subtext-light hover:border-border-light hover:text-text-light dark:text-subtext-dark dark:hover:border-border-dark dark:hover:text-text-dark" href="#"> Wishlists </a>
          </nav>
        </div>
        <section>
          <h2 class="mb-4 text-2xl font-bold">Order History</h2>
          <div class="overflow-hidden rounded-lg border border-border-light bg-surface-light shadow-sm dark:border-border-dark dark:bg-surface-dark">
            <div class="overflow-x-auto">
              <table class="min-w-full divide-y divide-border-light dark:divide-border-dark">
                <thead class="bg-surface-light dark:bg-surface-dark">
                  <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-subtext-light dark:text-subtext-dark" scope="col">Order</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-subtext-light dark:text-subtext-dark" scope="col">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-subtext-light dark:text-subtext-dark" scope="col">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-subtext-light dark:text-subtext-dark" scope="col">Total</th>
                    <th class="relative px-6 py-3" scope="col"><span class="sr-only">Actions</span></th>
                  </tr>
                </thead>
                <tbody class="divide-y divide-border-light dark:divide-border-dark">
                  <tr>
                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-text-light dark:text-text-dark">#12345</td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm text-subtext-light dark:text-subtext-dark">July 15, 2024</td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm">
                      <span class="inline-flex items-center rounded-full bg-green-100 px-3 py-1 text-xs font-medium text-green-800 dark:bg-green-900 dark:text-green-300">Shipped</span>
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm text-subtext-light dark:text-subtext-dark">$250.00</td>
                    <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                      <button class="rounded-md bg-primary-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">Reorder</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-text-light dark:text-text-dark">#67890</td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm text-subtext-light dark:text-subtext-dark">June 20, 2024</td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm">
                      <span class="inline-flex items-center rounded-full bg-blue-100 px-3 py-1 text-xs font-medium text-blue-800 dark:bg-blue-900 dark:text-blue-300">Delivered</span>
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm text-subtext-light dark:text-subtext-dark">$180.00</td>
                    <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                      <button class="rounded-md bg-primary-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">Reorder</button>
                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-text-light dark:text-text-dark">#11223</td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm text-subtext-light dark:text-subtext-dark">May 5, 2024</td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm">
                      <span class="inline-flex items-center rounded-full bg-red-100 px-3 py-1 text-xs font-medium text-red-800 dark:bg-red-900 dark:text-red-300">Cancelled</span>
                    </td>
                    <td class="whitespace-nowrap px-6 py-4 text-sm text-subtext-light dark:text-subtext-dark">$300.00</td>
                    <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                      <button class="rounded-md bg-primary-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">Reorder</button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </section>
        <section>
          <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold">Saved Addresses</h2>
            <button class="flex items-center gap-2 rounded-md bg-primary-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">
              <i class="pi pi-plus"></i>
              <span>Add New Address</span>
            </button>
          </div>
          <div class="mt-4 grid grid-cols-1 gap-6 md:grid-cols-2">
            <div class="rounded-lg border border-primary-500 bg-primary-50 p-6 shadow-sm dark:bg-primary-950/50">
              <div class="flex items-start justify-between">
                <div>
                  <p class="text-sm font-bold text-primary-700 dark:text-primary-300">Default</p>
                  <p class="mt-1 text-base font-bold text-text-light dark:text-text-dark">Home</p>
                  <p class="mt-2 text-sm text-subtext-light dark:text-subtext-dark">123 Elm Street, Anytown, CA 91234</p>
                </div>
                <button class="text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-400">
                  <i class="pi pi-pencil"></i>
                </button>
              </div>
            </div>
            <div class="rounded-lg border border-border-light bg-surface-light p-6 shadow-sm dark:border-border-dark dark:bg-surface-dark">
              <div class="flex items-start justify-between">
                <div>
                  <p class="mt-1 text-base font-bold text-text-light dark:text-text-dark">Work</p>
                  <p class="mt-2 text-sm text-subtext-light dark:text-subtext-dark">456 Oak Avenue, Anytown, CA 91234</p>
                </div>
                <button class="text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-400">
                  <i class="pi pi-pencil"></i>
                </button>
              </div>
            </div>
          </div>
        </section>
        <section>
          <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold">Payment Methods</h2>
            <button class="flex items-center gap-2 rounded-md bg-primary-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">
              <i class="pi pi-plus"></i>
              <span>Add Payment Method</span>
            </button>
          </div>
          <div class="mt-4 space-y-4">
            <div class="flex items-center justify-between rounded-lg border border-border-light bg-surface-light p-4 shadow-sm dark:border-border-dark dark:bg-surface-dark">
              <div class="flex items-center gap-4">
                <img alt="Visa" class="h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAY-c7Z9latgWYD7l4G9pnbJ3vVthBUosAf-hWWGXzQg8U-HE0CLmwsk490QROprGm0_6_jKDEOtoPjYXY_KlW9YGrnTzilVCr7QRXaGGVEsn-Sx_USEI0qaCSvCOw2RUD92coV6iAGdxwdf4mzpf96-ZMgCpvCsx-TPQ5PVju_IWO-CI-WgT7qrfKY9wQfdeCso2R4F3vbspgeedNH6sC6UxTDOXYCeKUM6BwLtAujpPDQuRt7PSNpuLOEeygjaa7nV1Bo-rO6ReQ" />
                <div>
                  <p class="font-medium text-text-light dark:text-text-dark">Visa ending in 1234</p>
                  <p class="text-sm text-subtext-light dark:text-subtext-dark">Expires 08/25</p>
                </div>
              </div>
              <button class="text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-400">
                <i class="pi pi-pencil"></i>
              </button>
            </div>
            <div class="flex items-center justify-between rounded-lg border border-border-light bg-surface-light p-4 shadow-sm dark:border-border-dark dark:bg-surface-dark">
              <div class="flex items-center gap-4">
                <img alt="Mastercard" class="h-8" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCIVIWCAmA6HxjMaHz1sIFVk1NKs096IAKUIBbUz4RaHhVw4UeOY-cbdkfbrdJY1NlkKPYbg4_0OBx1icjSe45Fk9KGjqDvUg34sHEknjeeRVos9fJ57daw5DWVka_84Lj3xMx_-uMmYc5q61dThM-SP6zWXnjv1RgBJ9w9grWXdoCRx_6AuleSEv-qIp_R0JLMfp8nsM8P5urwbO2ooayWVx040ybShutyDlQskgQchllz2_0uxzlVnRUPrzHg95bh12OF7PQzws0" />
                <div>
                  <p class="font-medium text-text-light dark:text-text-dark">MasterCard ending in 5678</p>
                  <p class="text-sm text-subtext-light dark:text-subtext-dark">Expires 05/24</p>
                </div>
              </div>
              <button class="text-subtext-light hover:text-primary-500 dark:text-subtext-dark dark:hover:text-primary-400">
                <i class="pi pi-pencil"></i>
              </button>
            </div>
          </div>
        </section>
        <section>
          <div class="flex items-center justify-between">
            <h2 class="text-2xl font-bold">Wishlists</h2>
            <button class="flex items-center gap-2 rounded-md bg-primary-500 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-primary-600">
              <i class="pi pi-plus"></i>
              <span>Create New Wishlist</span>
            </button>
          </div>
          <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
            <div class="group relative overflow-hidden rounded-lg shadow-sm">
              <div class="h-48 w-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuA8oYwerwLDZKNzQTr6rCoaupEBQP1vLTYzXZKMcPxfluReM7KTZoUixfhVM7ietRlwlpbk3s7CSInpF10lasEgMjuuSH_OcR27MQWxoQ0eY1Ayu5-nVjEZ52W0DdpypJnYZ-H4vJespuMFRQ_rTWxXvWCyVdu2574jSNMYARAbMeIFXxQfXiXbXuVwfKXgOgkIfhJBEM_f-FCDaxTBucJSy-xk7fTXPS9TgLZH56oGjYCCv7a4t4GfWMp_C3gSpYD16_5qjJXY8Vc");'></div>
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-0 left-0 p-4">
                <h3 class="font-bold text-white">Tech Gadgets</h3>
                <p class="text-sm text-gray-200">25 items</p>
              </div>
            </div>
            <div class="group relative overflow-hidden rounded-lg shadow-sm">
              <div class="h-48 w-full bg-cover bg-center" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAFzueY-bQg2S98t3Pxj-zxAD3DgKfLRuVlwDeKb1PZIE8QQiF8L074GxXOlU4VON7pCgK_9f8WRh2hEQoxBq1NnoKyRsnWH9MRIpvCPcjibKtXFJQcMHARh_MBEKQ0ZNcZrx9Js2taC6cmiNP7tLoEG4SV2h4sQ3ncsEM8AQ6kWqSnVRXOp_bycAgD6l-uDFDyULnkeo__nKF29qIiVqmujxM6KRKYOfrjnu6RxYoi7eOjA1Nj9DfrSn-llkCY5ohrjbReVbHvfXQ");'></div>
              <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
              <div class="absolute bottom-0 left-0 p-4">
                <h3 class="font-bold text-white">Home Office</h3>
                <p class="text-sm text-gray-200">10 items</p>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
</div>