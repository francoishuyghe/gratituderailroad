// Use the Affinity API to signup people to the newsletter

class AffinityUtils {
    loading = false

    constructor(form){
        this.form = form
        this.textInput = form.querySelector('input')
        this.placeholder = this.textInput.placeholder

        form.addEventListener('submit', (e) => {
            e.preventDefault()
            const data = new FormData(this.form)
            const email = data.get('email')
            
            if(email) this.ADD_PERSON(email)
        })
    }

    LOADING_TOGGLE(){
        this.loading = !this.loading
        this.textInput.readOnly = this.loading
        if(this.loading){
            this.textInput.classList.add('disabled')
        } else {
            this.textInput.classList.remove('disabled')
        }
    }

    async ADD_PERSON(email){
        if(!this.loading) this.LOADING_TOGGLE()
      
        $.ajax({
          type: 'POST',
          context: this,
          url: ajax_object.ajax_url,
          data: {
            action: 'add_email_to_newsletter',
            email: email,
            nonce: ajax_object.ajax_nonce,
          },
          success: function (res) {
            console.log('Success ', res)
            this.textInput.value = ""
            this.textInput.placeholder = "Saved!"
            setTimeout(() => {
                this.textInput.placeholder = this.placeholder
            }, 1000)

            if(res.data){
              
            }
          },
          error: (e) => {
            console.log(e.responseText);
            this.textInput.value = ""
            this.textInput.placeholder = "Error saving!"
            setTimeout(() => {
                this.textInput.placeholder = this.placeholder
            }, 1000)
          }
        });
    }
}

const newsletterSignupForms = document.querySelectorAll('.newsletter__form')

newsletterSignupForms.forEach(newsletterSignupForm => {
    const affinityHelper = new AffinityUtils(newsletterSignupForm)
})

