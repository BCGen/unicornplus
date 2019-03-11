<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

    </head>

    <body>

        <div id="app">

            <div class="formBox">
                <form>
                    @csrf
                    <input id="contact_name" class="col-4 formBG" type="text" placeholder="Name" name="name">
                    <input id="contact_phone" class="col-8 formBG" type="text" placeholder="Phone Number" name="phone">
                    <br>
                    <input id="contact_email" class="col formBG" type="text" placeholder="Email" name="email">
                    <br>
                    <textarea id="contact_main_content" class="col formBG textPart" rows="5" name="main_content"></textarea>
                    <p><input id="send_btn" class="sendBtn" type="submit" value="Send"></p>
                </form>
            </div>

        </div>

        <script src="{{ asset('js/app.js') }}"></script>
        <script>
            document.getElementById('send_btn').onclick = function (event) {
                event.preventDefault();

                axios.post(`/contact_us`, {
                        name: document.getElementById('contact_name').value,
                        email: document.getElementById('contact_email').value,
                        phone: document.getElementById('contact_phone').value,
                        main_content: document.getElementById('contact_main_content').value
                    })
                    .then(respose => {
                        alert('成功');
                    }).catch(error => {
                        alert(error);
                    })
            }
        </script>
    </body>

</html>
