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
        <h1>Skill: {{ skill }}</h1>
        <input type="text" v-model="points">

        <h1>{{ fullName }}</h1>
        <input type="text" v-model="first" placeholder="First Name">
        <input type="text" v-model="last" placeholder="Last Name">

        <script src="http://cdnjs.cloudflare.com/ajax/libs/vue/1.0.4/vue.js"></script>

        <script>
            new Vue({
                el: 'body',

                data: {
                    points: 50,
                    first: 'Jeffrey',
                    last: 'Way',
                    fullName: 'Jeffrey Way',
                },

                computed: {
                    skill: function() {
                        if (this.points <= 100) {
                            return 'Beginner';
                        }

                        return 'Advanced';
                    },
                    // fullName: function() {
                    //     return this.first + ' ' + this.last;
                    // }
                },

                watch: {
                    first: function(first) {
                        this.fullName = first + ' ' + this.last;
                    },

                    last: function(last) {
                        this.fullName = this.first + ' ' + last;
                    }

                }
            });
        </script>
    </body>
</html>