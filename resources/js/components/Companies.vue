<template>
    <div class="limit-width center text-center pb-100">

        <h2>Companies That I've Started</h2>

        <br /><br />

        <picture>
            <source type="image/webp" :srcset="dark ? deskninjadark_webp : deskninjalight_webp" />
            <img :src="dark ? deskninjadark_png : deskninjalight_png" alt="DeskNinja" />
        </picture>
        <div>In 2009 I was working for a company specializing in grocery store point-of-sale register systems.  Back when I started working for them, they did not have a CRM system in place.  So, for my own sanity, I built one and it eventually was adopted company-wide as their system of choice for managing support calls.  I have since been working on building this out into a commercial system and have branded this system as DeskNinja LLC.</div>

        <br /><br />

        <picture>
            <source type="image/webp" :srcset="dark ? razorkodedark_webp : razorkodelight_webp" />
            <img :src="dark ? razorkodedark_png : razorkodelight_png" alt="RazorKode" />
        </picture>
        <div>I think most web developers tend to do side-projects.  I do a lot of small side projects, mostly Wordpress/Divi builds for professionals and small businesses looking to build their presence online.  RazorKode LLC is a digital marketing agency I created for the side projects I do.</div>

        <br /><br />

        <picture>
            <source type="image/webp" :srcset="dark ? razorvpsdark_webp : razorvpslight_webp" />
            <img :src="dark ? razorvpsdark_png : razorvpslight_png" alt="RazorVPS" />
        </picture>
        <div>I manage quite a bit of hosting both for RazorKode and other various projects.  RazorVPS is a DBA business under RazorKode that I use to offer VPS hosting services to my clients.</div>

    </div>
</template>

<script>
export default {
    props: ['dark'],
    data() {
        return {
            deskninjalight_png: '/img/png/light/deskninja.png',
            deskninjadark_png: '/img/png/dark/deskninja.png',
            razorkodelight_png: '/img/png/light/razorkode.png',
            razorkodedark_png: '/img/png/dark/razorkode.png',
            razorvpslight_png: '/img/png/light/razorvps.png',
            razorvpsdark_png: '/img/png/dark/razorvps.png',
            deskninjalight_webp: '/img/webp/light/deskninja.webp',
            deskninjadark_webp: '/img/webp/dark/deskninja.webp',
            razorkodelight_webp: '/img/webp/light/razorkode.webp',
            razorkodedark_webp: '/img/webp/dark/razorkode.webp',
            razorvpslight_webp: '/img/webp/light/razorvps.webp',
            razorvpsdark_webp: '/img/webp/dark/razorvps.webp',
        }
    }
}
</script>
