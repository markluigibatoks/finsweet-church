<div class="main-box lg:py-32 py-10">
  <div class="wrapper">
    <h3 class="text-h5">Contact Form:</h3>
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 gap-8">
      <form action="POST" id="contact-us-form" class="w-full">
        <div class="flex flex-col gap-3">
          <label>
            <input name="full_name" placeholder="Your full name" class="w-full p-5 bg-white rounded" />
          </label>
          <label>
            <input name="email" placeholder="Your Email" class="w-full p-5 bg-white rounded" />
          </label>
          <label>
            <textarea rows="4" name="message" placeholder="Message" class="w-full p-5 bg-white rounded" ></textarea>
          </label>
          <button type="submit" class="button-nav cursor-pointer uppercase">Send Message</button>
        </div>
      </form>

      <div class="md:mx-auto">
        <span class="text-label-3 opacity-70">Address</span>
        <address class="mt-2 mb-8 text-h5 uppercase not-italic">
          NH 234 Public Square <span class="block">San Francisco  65368</span>
        </address>

        <span class="text-label-3 opacity-70">Contact Details</span>
        <a href="tel:+14805550103" class="block max-w-max text-h5 mt-2">(480) 555-0103</a>
        <a href="mailto:finsweet@example.com" class="block max-w-max text-h5 mt-2">finsweet@example.com</a>
      </div>
    </div>
  </div>
</div>