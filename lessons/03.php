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

            <form action="done.html" @submit.prevent="handleIt">

                <button type="submit">
                    Submit Me!
                </button>

            </form>

            <button type="submit" @click="updateCount">
                Increment Counter: {{ count }}
            </button>

            <button type="submit" @click="count += 1">
                Increment Counter: {{ count }}
            </button>

        </div>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.1/vue.min.js"></script>

        <script>
            new Vue({
                el: '#app',
                data: {
                    count: 0
                },
                methods: {
                    handleIt: function() {
                        alert('Handled');
                    },
                    updateCount: function() {
                        this.count += 1;
                    }
                }
            });
        </script>
    </body>
</html>