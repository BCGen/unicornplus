<div class="page6BG">
    <div class="container">
        <div class="row no-gutters">
            <div id="formPhone" class="col">
                <div>
                    <h1 class="pb-2">Contact Us</h1>
                </div>
                <div>
                    <form>
                        @csrf
                        <input id="contact_name_m" class="col-5 formBG" type="text" placeholder="Name" /><input id="contact_phone_m" class="col-7 formBG" type="text" placeholder="Phone Number" /><br />
                        <input id="contact_email_m" class="col formBG" type="text" placeholder="Email" /><br />
                        <textarea id="contact_main_content_m" class="col formBG textPart" rows="5" placeholder="Content"></textarea>
                        <p class="send1">
                            <input id="contact_us_send_btn_m" class="sendBtn" type="submit" value="Send" />
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="row justify-content-center">
                            <a href="https://www.facebook.com/unicornkidstokyo/" id="Fb" class="icons"></a>
                            <div id="Line" class="icons"></div>
                            <div id="Tw" class="icons"></div>
                            <a href="https://www.instagram.com/ukidstokyo/" id="Ig" class="icons"></a>
                        </div>
                        <div id="gooMapTable" class="col-xl-12 col-lg-12"></div>

                    </div>
                    <span class="line"></span>
                    <div id="formTable" class="col-xl-5 col-lg-5">
                        <div>
                            <h1 class="pb-2">Contact Us</h1>
                        </div>
                        <div>
                            <form>
                                @csrf
                                <input id="contact_name" class="col-4 formBG" type="text" placeholder="Name" name="name" /><input id="contact_phone" class="col-8 formBG" type="text" placeholder="Phone Number" name="phone" />
                                <br>
                                <input id="contact_email" class="col formBG" type="text" placeholder="Email" name="email" />
                                <br>
                                <textarea id="contact_main_content" class="col formBG textPart" rows="5" name="main_content"></textarea>
                                <p class="send2">
                                    <input id="contact_us_send_btn" class="sendBtn" type="submit" value="Send" />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <a href="#page1">
                    <div class="backToTop"></div>
                </a>
                <div class="clearFloat"></div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content text-center">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Message Sent</h5>
                    </div>
                    <div class="modal-body">
                        Thank you for your time.<br>
                        We will respond as soon as possible.
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary okBtn" data-dismiss="modal">OK</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- **************************modal********************** -->
    </div>
    <div id="gooMapPhone"></div>
    <div class="blankpad"></div>
</div>

@push('js')
    <script>
        const name = document.getElementById('contact_name')
        const email = document.getElementById('contact_email')
        const phone = document.getElementById('contact_phone')
        const mainContent = document.getElementById('contact_main_content')

        const nameM = document.getElementById('contact_name_m')
        const emailM = document.getElementById('contact_email_m')
        const phoneM = document.getElementById('contact_phone_m')
        const mainContentM = document.getElementById('contact_main_content_m')

        document.getElementById('contact_us_send_btn').onclick = function (event) {
            event.preventDefault();

            axios.post(`/contact_us`, {
                    name: name.value,
                    email: email.value,
                    phone: phone.value,
                    main_content: mainContent.value
                })
                .then(respose => {
                    name.value = ''
                    email.value = ''
                    phone.value = ''
                    mainContent.value = ''
                    $('#formModal').modal('show')
                }).catch(error => {
                    alert(error);
                })
        }

        document.getElementById('contact_us_send_btn_m').onclick = function (event) {
            event.preventDefault();

            axios.post(`/contact_us`, {
                    name: nameM.value,
                    email: emailM.value,
                    phone: phoneM.value,
                    main_content: mainContentM.value
                })
                .then(respose => {
                    nameM.value = ''
                    emailM.value = ''
                    phoneM.value = ''
                    mainContentM.value = ''
                    console.log('success')
                    $('#formModal').modal('show')
                }).catch(error => {
                    console.log('error')
                    alert(error);
                })
        }
  </script>
@endpush
