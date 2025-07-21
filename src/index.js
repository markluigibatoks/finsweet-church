import Drawer from "./scripts/Drawer"
import FormEvent from "./scripts/FormEvent";
import QuickHacks from "./scripts/QuickHacks"

document.addEventListener('DOMContentLoaded', function () {
  new Drawer('#drawer', '#drawer-toggle', '#drawer-close')
  new QuickHacks()

  const formEvent = document.querySelector('#event-registration-form');
  if (formEvent) {
    new FormEvent('#event-registration-form');
  }
});
