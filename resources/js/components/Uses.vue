<template>
    <div class="limit-width center pb-100 monokai-pink-links jetbrains-mono uses-page">

        <p class="pb-20 mt-10" style="color: #69676C;">
            /**<br>
            &nbsp;* Uses<br>
            &nbsp;* <em>@description:</em> Things I use day-to-day<br>
            &nbsp;*/
        </p>

        <!-- <h2>Office</h2>
        <p class="pb-20">Here's a couple (older, I will take new ones soon) photos of my home office.  I live in a one bedroom brick and timber loft with my girlfriend Karina, 3 guinea pigs (Spaghetti, Fettuccine and Lasagna) and a betta fish named Cheeto. Located between Little Village and Pilsen in Chicago, Illinois.</p>
        <div class="text-center pb-20">
            <picture>
                <source type="image/webp" :srcset="loft1_webp" />
                <img class="responsive" :src="loft1_jpg" alt="Loft 1" />
            </picture>
        </div>
        <div class="text-center pb-20">
            <picture>
                <source type="image/webp" :srcset="loft2_webp" />
                <img class="responsive" :src="loft2_jpg" alt="Loft 2" />
            </picture>
        </div> -->

        <UsesHardware />
        <UsesSoftware />

    </div>
</template>

<script>
import UsesHardware from './UsesHardware';
import UsesSoftware from './UsesSoftware';

export default {
    props: ['dark'],
    data() {
        return {
            loft1_jpg: '/img/jpg/loft1.jpg',
            loft2_jpg: '/img/jpg/loft2.jpg',
            loft1_webp: '/img/webp/loft1.webp',
            loft2_webp: '/img/webp/loft2.webp',
        }
    },
    components: {
        UsesHardware,
        UsesSoftware
    },
    mounted() {
        //Scrolls to top when view is displayed
        document.getElementById('sandbox').scrollTop = 0;
    }
}
</script>

<style lang="scss">

.jetbrains-mono * {
    font-family: JetBrainsMonoMedium;
}

.monokai-pink-links a {
    color: #cc0788 !important;

    &:hover {
        color: #ff06a9 !important;
    }
}

// Pseudo-scoped to allow subcomponents access
.uses-page {

    .little {
        font-size: 16px;
        color: grey;
    }

    em {
        font-family: JetBrainsMonoMediumItalic;
    }

    ul {
        list-style: none;
    }

}

#sandbox.theme--dark .uses-page {

    .monokai-bg {
        color: #222222;
    }

    .monokai-text {
        color: #F7F1FF;
    }

    .monokai-pink {
        color: #FC618D;
    }

    .monokai-green {
        color: #7BD88F;
    }

    .monokai-blue,
    h2 {
        color: #5AD4E6;
        font-size: 22px;
    }

    .monokai-yellow,
    h1 {
        color: #FCE566;
    }

    .monokai-orange {
        color: #FD9353;
    }

    .monokai-purple {
        color: #948AE3;
    }

    .monokai-pink-links a {
        color: #FC618D !important;

        &:hover {
            color: #948AE3 !important;
        }
    }
}

</style>
