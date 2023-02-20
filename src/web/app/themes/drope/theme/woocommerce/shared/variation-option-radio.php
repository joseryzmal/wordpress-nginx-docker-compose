<?php
$element_id = "{$name}_{$value}";
?>
<span class="group relative">
  <input type="radio"
    id="<?php echo $element_id ?>"
    name="<?php echo $name ?>"
    value="<?php echo $value ?>"
    data-action="input->variations#change"
    class="sr-only variant-option-radio"
    aria-labelledby="<?php echo $element_id ?>-label">
  <label class="border rounded-md py-3 px-4 flex items-center justify-center text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 bg-white shadow-sm text-gray-900 cursor-pointer"
    data-attribute-target="label"
    id="<?php echo $element_id ?>-label"
    for="<?php echo $element_id ?>"><?php echo $text ?></label>
  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
</span>
