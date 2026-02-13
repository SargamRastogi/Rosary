<footer class="bg-[#0e0e0e] text-white pt-14 pb-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 
              grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 
              gap-10">

    <!-- Logo + Description -->
    <div class="text-center sm:text-left">
      <img src="<?php echo e(asset('images/logo.jpeg')); ?>" 
           alt="Rosary Projects" 
           class="w-36 mx-auto sm:mx-0 mb-4 opacity-90">

      <p class="text-neutral-400 leading-relaxed text-sm">
        Transforming spaces with quality design and 
        engineering excellence.
      </p>

      <!-- Social Icons -->
      <div class="flex justify-center sm:justify-start gap-5 mt-5">
        <a href="https://facebook.com" target="_blank" class="hover:text-[#d4a362] transition text-lg">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="https://instagram.com" target="_blank" class="hover:text-[#d4a362] transition text-lg">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" class="hover:text-[#d4a362] transition text-lg">
          <i class="fab fa-linkedin-in"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="hover:text-[#d4a362] transition text-lg">
          <i class="fab fa-x-twitter"></i>
        </a>
      </div>
    </div>

    <!-- Quick Links -->
    <div class="text-center sm:text-left">
      <h3 class="text-lg font-semibold mb-4 text-[#d4a362]">Quick Links</h3>
      <ul class="space-y-2 text-neutral-400 text-sm">
        <li><a href="<?php echo e(route('home')); ?>" class="hover:text-white">Home</a></li>
        <li><a href="<?php echo e(route('residential')); ?>" class="hover:text-white">Residential</a></li>
        <li><a href="<?php echo e(route('commercial')); ?>" class="hover:text-white">Commercial</a></li>
        <li><a href="<?php echo e(route('products')); ?>" class="hover:text-white">Products</a></li>
        <li><a href="<?php echo e(route('contact')); ?>" class="hover:text-white">Contact</a></li>
      </ul>
    </div>

    <!-- Projects -->
    <div class="text-center sm:text-left">
      <h3 class="text-lg font-semibold mb-4 text-[#d4a362]">Projects</h3>
      <ul class="space-y-2 text-neutral-400 text-sm">
        <li><a href="<?php echo e(route('projects.factories')); ?>" class="hover:text-white">Factories</a></li>
        <li><a href="<?php echo e(route('projects.workspace')); ?>" class="hover:text-white">Workspace</a></li>
        <li><a href="<?php echo e(route('projects.showroom')); ?>" class="hover:text-white">Showrooms</a></li>
        <li><a href="<?php echo e(route('projects.homes')); ?>" class="hover:text-white">Homes</a></li>
      </ul>
    </div>

    <!-- Contact -->
    <div class="text-center sm:text-left">
      <h3 class="text-lg font-semibold mb-4 text-[#d4a362]">Contact</h3>

      <p class="text-neutral-400 text-sm">Delhi NCR, India</p>
      <p class="text-neutral-400 text-sm mt-1">+91 91234 56789</p>
      <p class="text-neutral-400 text-sm mt-1">info@rosaryprojects.com</p>
    </div>

  </div>

  <!-- Bottom strip -->
  <div class="border-t border-neutral-700 mt-10 pt-6 px-4 sm:px-6 
              text-neutral-500 text-sm">

    <div class="flex flex-col md:flex-row 
                items-center justify-between 
                gap-4 max-w-7xl mx-auto">

      <p class="text-center md:text-left">
        © 2026 Rosary Projects. All Rights Reserved.
      </p>

      <div class="flex gap-4">
        <a href="#" class="hover:text-white">
          Privacy Policy
        </a>
        <span>|</span>
        <a href="#" class="hover:text-white">
          Terms & Conditions
        </a>
      </div>

    </div>

  </div>
</footer><?php /**PATH E:\rosary\resources\views/layouts/footer.blade.php ENDPATH**/ ?>