import Drawer from "./scripts/Drawer"
import EventForm from "./scripts/EventForm";
import QuickHacks from "./scripts/QuickHacks"

document.addEventListener('DOMContentLoaded', function () {
  new Drawer('#drawer', '#drawer-toggle', '#drawer-close')
  new QuickHacks()

  const eventForm = document.querySelector('#event-registration-form');
  if (eventForm) {
    new EventForm('#event-registration-form');
  }
});
