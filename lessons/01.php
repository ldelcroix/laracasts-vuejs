<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>vuejs</title>
        <style>
                /* latin-ext */
                @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 100;
                src: local('Lato Hairline'), local('Lato-Hairline'), url(//fonts.gstatic.com/s/lato/v11/eFRpvGLEW31oiexbYNx7Y_esZW2xOQ-xsNqO47m55DA.woff2) format('woff2');
                unicode-range: U+0100-024F, U+1E00-1EFF, U+20A0-20AB, U+20AD-20CF, U+2C60-2C7F, U+A720-A7FF;
                }
                /* latin */
                @font-face {
                font-family: 'Lato';
                font-style: normal;
                font-weight: 100;
                src: local('Lato Hairline'), local('Lato-Hairline'), url(//fonts.gstatic.com/s/lato/v11/GtRkRNTnri0g82CjKnEB0Q.woff2) format('woff2');
                unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02C6,U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2212, U+2215, U+E0FF, U+EFFD, U+F000;
                }
                html, body {
                height: 100%;
                }
                body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
                }
                .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
                }
                .content {
                text-align: center;
                display: inline-block;
                }
                .title {
                font-size: 96px;
                margin-bottom: 40px;
                }
                .quote {
                font-size: 24px;
                }
        </style>
    </head>
    <body>
        <div id="app">
            <h1>{{ message }}</h1>
            <input v-model="message">
            <pre>
                
                {{ $data | json }}
            </pre>

        </div>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.1/vue.min.js"></script>

        <script>
            new Vue({
                el: '#app',
                data : {
                    message : 'Hello World'
                }
            });
        </script>
    </body>
</html>