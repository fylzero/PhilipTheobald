<template>
    <div class="text-center pb-100">

        <span style="font-size: 50px;">Hi, I'm Phil</span>

        <br><br>

        <picture>
            <source type="image/webp" :srcset="me_webp" />
            <img :src="me_jpg" alt="Philip Theobald" class="responsive" style="border-radius: 10px;" />
        </picture>

        <br><br>

        <span style="font-size: 22px;">A software engineer, entreprenuer, guitarist and self-proclaimed nerd.</span>

        <br><br>

        <picture>
            <source type="image/webp" :srcset="dark ? laraveldark_webp : laravellight_webp" />
            <img :src="dark ? laraveldark_png : laravellight_png" alt="Laravel" class="skill-badge" />
        </picture>

        <picture>
            <source type="image/webp" :srcset="dark ? vuedark_webp : vuelight_webp" />
            <img :src="dark ? vuedark_png : vuelight_png" alt="Vue.js" class="skill-badge" />
        </picture>

        <picture>
            <source type="image/webp" :srcset="dark ? html5dark_webp : html5light_webp" />
            <img :src="dark ? html5dark_png : html5light_png" alt="HTML5" class="skill-badge" />
        </picture>

        <picture>
            <source type="image/webp" :srcset="dark ? css3dark_webp : css3light_webp" />
            <img :src="dark ? css3dark_png : css3light_png" alt="CSS3" class="skill-badge" />
        </picture>

        <picture>
            <source type="image/webp" :srcset="dark ? jsdark_webp : jslight_webp" />
            <img :src="dark ? jsdark_png : jslight_png" alt="JavaScript" class="skill-badge" />
        </picture>

        <picture>
            <source type="image/webp" :srcset="dark ? phpdark_webp : phplight_webp" />
            <img :src="dark ? phpdark_png : phplight_png" alt="PHP" class="skill-badge" />
        </picture>

        <picture>
            <source type="image/webp" :srcset="dark ? mysqldark_webp : mysqllight_webp" />
            <img :src="dark ? mysqldark_png : mysqllight_png" alt="MySQL" class="skill-badge" />
        </picture>

        <!-- <picture>
            <source type="image/webp" :srcset="react_webp" />
            <img :src="react_png" alt="React" class="skill-badge" />
        </picture> -->

    </div>
</template>

<script>
export default {
    props: ['dark'],
    data() {
        return {
            me_jpg: '/img/jpg/phil.jpg',
            html5light_png: '/img/png/light/html5.png',
            html5dark_png: '/img/png/dark/html5.png',
            css3light_png: '/img/png/light/css3.png',
            css3dark_png: '/img/png/dark/css3.png',
            jslight_png: '/img/png/light/js.png',
            jsdark_png: '/img/png/dark/js.png',
            react_png: '/img/png/react.png',
            vuelight_png: '/img/png/light/vue.png',
            vuedark_png: '/img/png/dark/vue.png',
            phplight_png: '/img/png/light/php.png',
            phpdark_png: '/img/png/dark/php.png',
            laravellight_png: '/img/png/light/laravel.png',
            laraveldark_png: '/img/png/dark/laravel.png',
            mysqllight_png: '/img/png/light/mysql.png',
            mysqldark_png: '/img/png/dark/mysql.png',

            me_webp: '/img/webp/phil.webp',
            html5light_webp: '/img/webp/light/html5.webp',
            html5dark_webp: '/img/webp/dark/html5.webp',
            css3light_webp: '/img/webp/light/css3.webp',
            css3dark_webp: '/img/webp/dark/css3.webp',
            jslight_webp: '/img/webp/light/js.webp',
            jsdark_webp: '/img/webp/dark/js.webp',
            react_webp: '/img/webp/react.webp',
            vuelight_webp: '/img/webp/light/vue.webp',
            vuedark_webp: '/img/webp/dark/vue.webp',
            phplight_webp: '/img/webp/light/php.webp',
            phpdark_webp: '/img/webp/dark/php.webp',
            laravellight_webp: '/img/webp/light/laravel.webp',
            laraveldark_webp: '/img/webp/dark/laravel.webp',
            mysqllight_webp: '/img/webp/light/mysql.webp',
            mysqldark_webp: '/img/webp/dark/mysql.webp',
        }
    },
    mounted() {
        //Scrolls to top when view is displayed
        document.getElementById('sandbox').scrollTop = 0;
    }
}
</script>
