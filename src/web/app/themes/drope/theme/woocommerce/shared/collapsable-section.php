<div data-controller="collapsable-section" data-collapsable-section-collapsed-value="<?php echo $collapsed ?>">
  <h3>
    <button type="button"
      data-action="click->collapsable-section#toggle"
      class="group relative flex w-full items-center justify-between py-6 text-left"
      aria-controls="disclosure-1"
      aria-expanded="false">
      <span class="text-indigo-600 text-sm font-medium button-title"><?php echo $heading; ?></span>
      <span class="ml-6 flex items-center">
        <svg class="hidden h-6 w-6 text-gray-400 group-hover:text-gray-500 icon plus" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
        </svg>
        <svg class="block h-6 w-6 text-indigo-400 group-hover:text-indigo-500 icon minus" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
        </svg>
      </span>
    </button>
  </h3>
  <div class="prose prose-sm pb-6">
    <?php echo $content; ?>
  </div>
</div>
