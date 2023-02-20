/**
 * The JavaScript code you place here will be processed by esbuild, and the
 * output file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

import { Application } from "@hotwired/stimulus";

import CollapsableSectionController from "./stimulus/collapsable_section_controller";
import TabsController from "./stimulus/tabs_controller";
import VariationsController from "./stimulus/variations_controller";
import AttributeController from "./stimulus/attribute_controller";
import PriceDisplayController from "./stimulus/price_display_controller";

window.Stimulus = Application.start();
Stimulus.register("collapsable-section", CollapsableSectionController);
Stimulus.register("tabs", TabsController);
Stimulus.register("variations", VariationsController);
Stimulus.register("attribute", AttributeController);
Stimulus.register("price-display", PriceDisplayController);
