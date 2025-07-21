class EventForm {
    constructor(formSelector) {
        this.form = document.querySelector(formSelector);

        this.events();
    }

    events() {
        this.form.addEventListener('submit', async (e) => {
            e.preventDefault();

            const formData = new FormData(this.form);

            try {
                const response = await fetch(siteData.root_url + '/wp-json/wp/v1/event-registration', {
                    method: 'POST',
                    headers: {
                        'X-WP-Nonce': siteData.nonce,
                    },
                    body: formData
                });

                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }

                const data = await response.json();
                console.log('Success:', data);
            } catch (error) {
                console.error('Error submitting testimonial:', error);
            }
        });

        this.form.addEventListener('reset', () => {
            const ratingField = document.querySelector('#testimonial-rating-field');

            if (ratingField) {
                ratingField.value = '5';
                ratingField.dispatchEvent(new Event('change'));
            }
        })
    }
}

export default EventForm