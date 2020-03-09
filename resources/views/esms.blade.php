<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>

<body>
    <section>
        <div id="app">
            <input type="text" v-model="phone" class="form-control" placeholder="phone">
            <input type="text" v-model="content" class="form-control" placeholder="content">
            <button type="submit" v-on:click="submitEsms" class="btn btn-primary">SUBMIT</button>
            <textarea class="form-control" name="" id="" cols="30" rows="10" class=></textarea>
        </div>
    </section>


    <script src="{{ asset('js/axios.min.js') }}"></script>
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/vue.js') }}"></script>

    <script>
        new Vue({
            el: "#app",
            data: {
                phone: null,
                content: null,
                apiKey: '3671D2FEE631B629A1B010C4665BE7',
                secretKey: '3280CCA333D527CA83B2A7D7FB8D1B',
                isUnicode: false,
                brandName: null,
                smsType: 7,
                url: 'http://rest.esms.vn/MainService.svc/json/SendMultipleMessage_V4_get?'
            },
            methods: {
                submitEsms: function() {
                    let url = this.url +
                        "Phone=" + this.phone + "&Content=" + this.content + "&ApiKey=" + this.apiKey +
                        "&SecretKey=" + this.secretKey + "&IsUnicode=" + this.isUnicode + "&SmsType=" + this.smsType;

                    let content = {
                    };

                    axios
                        .get(url)
                        .then(response => {
                            console.log(response);
                        })
                        .catch(function(error) {
                            console.log(error);
                        });
                }
            }
        })
    </script>
</body>

</html>