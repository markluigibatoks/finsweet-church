import SweetAlert from "./SweetAlert";

class FormEvent {
    constructor(formSelector) {
        this.form = document.querySelector(formSelector);

        this.events();
        this.swal = new SweetAlert()
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

                const data = await response.json();

                if (!response.ok) {
                    const errorMessage = data.message || response.statusText || `HTTP error! status: ${response.status}`;
                    throw new Error(errorMessage);
                }
                
                this.swal.success({
                    title: 'Registration Successful!',
                    text: 'You have successfully registered for the event.'
                })

                this.form.reset()
            } catch (error) {
                this.swal.error({
                    title: 'Oops!',
                    text: error.message
                })
            }
        });
    }
}

export default FormEvent