<section class="section-primary p-y-50">
    <div class="container">
        <div class="row">
            <div class="col-4">
                <x-aboutUs-card label='Visit Our Location' info='5th Street, 21st Floor, New York, USA'
                    icon='images/location-icon.png' />
            </div>
            <div class="col-4">
                <x-aboutUs-card label='Send Us Email' info='yehia.webcraft@gmail.com' icon='images/email-icon.png' />

            </div>
            <div class="col-4">
                <x-aboutUs-card label='Call Us Now' info='+972526699004' icon='images/phone-icon.png' />
            </div>
        </div>
        <div class="row element-spacing">
            <form class="contactUs-form col-12">

                <div class="row">
                    <div class="col-6">
                        <input class="contactUs-form-input" type="text" placeholder="Name">
                    </div>

                    <div class="col-6">
                        <input class="contactUs-form-input" type="text" placeholder="Phone">
                    </div>
                </div>

                <div class="row element-spacing">
                    <div class="col-6 ">
                        <input class="contactUs-form-input " type="email" placeholder="Email">
                    </div>

                    <div class="col-6">
                        <input class="contactUs-form-input" type="text" placeholder="Subject">
                    </div>
                </div>

                <div class="row element-spacing">
                    <div class="col-12">
                        <textarea class="contactUs-form-input" placeholder="Message"></textarea>
                    </div>
                </div>

                <div class="row element-spacing">
                    <div class="col-12">
                        <button type="submit" class="secondary-btn">
                            Submit
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</section>
