import Drawer from "./scripts/Drawer"
import FormEvent from "./scripts/FormEvent";
import FormContactUs from "./scripts/FormContactUs";
import QuickHacks from "./scripts/QuickHacks"
import FormNewsletter from "./scripts/FormNewsletter";

document.addEventListener('DOMContentLoaded', function () {
  new Drawer('#drawer', '#drawer-toggle', '#drawer-close')
  new QuickHacks()

  const formEvent = document.querySelector('#event-registration-form');
  if (formEvent) {
    new FormEvent('#event-registration-form');
  }
  
  const contactUsForm = document.querySelector('#contact-us-form');
  if (contactUsForm) {
    new FormContactUs('#contact-us-form');
  }

  const newsletterForm = document.querySelector('#newsletter-form');
  if (newsletterForm) {
    new FormNewsletter('#newsletter-form');
  }
});
