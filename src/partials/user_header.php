<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mi Proyecto PHP</title>
  <link rel="stylesheet" href="/output.css">
</head>

<body>
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