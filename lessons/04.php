<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>vuejs</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    </head>
    <body>
        <div id="app">
            <counter subject="Likes"></counter>
            <counter subject="Dislikes"></counter>
        </div>

        <template id="counter-template">
            <h1>{{ subject }}</h1>
            <button @click="count += 1">{{ count }}</button>
        </template>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.1/vue.js"></script>

        <script>
            Vue.component('counter', {
                template: '#counter-template',

                props: ['subject'],

                data: function() {
                    return { count: 0 };
                }
            });

            new Vue({
                el: '#app'
            });
        </script>
    </body>
</html>