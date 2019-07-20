<template>
    <div>

        <h2>Companies That I've Started</h2>

        <br /><br />

        <!-- <picture>
            <source type="image/webp" srcset={props.darkmode ? deskninjadark_webp : deskninjalight_webp} />
            <img src={props.darkmode ? deskninjadark_png : deskninjalight_png} alt="DeskNinja" />
        </picture> -->
        <div>In 2009 I was working for a company specializing in grocery store point-of-sale register systems.  Back when I started working for them, they did not have a CRM system in place.  So, for my own sanity, I built one and it eventually was adopted company-wide as their system of choice for managing support calls.  I have since been working on building this out into a commercial system and have branded this system as DeskNinja LLC.</div>

        <br /><br />

        <!-- <picture>
            <source type="image/webp" srcset={props.darkmode ? razorkodedark_webp : razorkodelight_webp} />
            <img src={props.darkmode ? razorkodedark_png : razorkodelight_png} alt="RazorKode" />
        </picture> -->
        <div>I think most web developers tend to do side-projects.  I do a lot of small side projects, mostly Wordpress/Divi builds for professionals and small businesses looking to build their presence online.  RazorKode LLC is a digital marketing agency I created for the side projects I do.</div>

        <br /><br />

        <!-- <picture>
            <source type="image/webp" srcset={props.darkmode ? razorvpsdark_webp : razorvpslight_webp} />
            <img src={props.darkmode ? razorvpsdark_png : razorvpslight_png} alt="RazorVPS" />
        </picture> -->
        <div>I manage quite a bit of hosting both for RazorKode and other various projects.  RazorVPS is a DBA business under RazorKode that I use to offer VPS hosting services to my clients.</div>

    </div>
</template>

<script>
export default {
    props: ['dark']
}
</script>
