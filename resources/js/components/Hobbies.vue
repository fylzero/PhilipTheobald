<template>
    <div class="limit-width center pb-100 pink-links">
        <h2>Software Engineering</h2>
            <p>I started writing software as a hobby and to solve problems at various jobs I've had over the years.  I've since turned this hobby into my career path and have never looked back.  I love what I do and always look to the future to learn as much as I can and develop my skill set.</p>

            <h2>Learning</h2>
            <p>Suffice it to say, I never thrived a classroom learning environment.  In fact I struggled for a very long time before discovering my learning style.  Once I learned how I learn, I became obsessed with learning as much as I could about everything I was interested in.  Ranging from photography to audio engineering to programming.  I am a huge fan of Udemy courses, Laracasts, LinkedIn Learning (formerly Lynda.com), FrontEnd Masters, Masterclass, etc.</p>

            <h2>Watching Movies & TV Series</h2>
            <p>
                I love movies.  Obviously, I'm a huge fan of anything tech-related...  The Social Network, Hackers, The Net, Silicon Valley, Mr. Robot, etc.  Just like my music tastes, I find enjoyment in just about every genre of film.  I'm a big fan of acting, actors, film making, Hollywood, etc. and there's just nothing better than unwinding to a good movie or binge-watching a series sometimes.
            </p>

            <h2>Playing Guitar</h2>
            <p>I started learning to play guitar when I was 13 years old after my parents bought me a red Fender Squier Stratocaster with a white pickguard and a 20 watt Gorilla amplifier for Christmas.  In my early 20s I worked as a department manager for Sam Ash Music and later Guitar Center.  I've also had the privilege of playing guitar for an amazing band in Chicago called <a href="https://open.spotify.com/artist/4Mzg0FspaHq1D6cjirG3bx" target="blank">The Circle View</a> (formerly Satellite Hero).</p>
            <br />
            <p>Below is a video of me covering A Favor House Atlantic by Coheed & Cambria.  I have some more guitar cover videos up on my <a href="https://www.youtube.com/channel/UCzRZf_LXBkxjOUTUrA6zZxA?view_as=subscriber" target="blank">YouTube Channel</a>.</p>
            <br />
            <div class="embed-responsive embed-responsive-16by9">
                <iframe title="A Favor House Atlantic" src="https://www.youtube.com/embed/Xo5Zit-m8Pc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <h2>Listening To Music</h2>
            <p>I use Spotify for music streaming, and primarily listen to EDM, pop, metal and rap and country and classical and hipster music...  basically everything. If you want to get a feel for what I might be listening to on any given workday, check out these playlists:</p>
            <br /><a href="https://open.spotify.com/user/ptheofyl/playlist/448gLnZMvvYNwfuGm0Bpbo?si=X0R77E4WQuW8SD1xRwPW3Q" target="blank">Drinks By The Pool</a><br />
            <br /><a href="https://open.spotify.com/user/ptheofyl/playlist/7AfjqgRHZL3mZRCDbNLf3V?si=o2PV_aTbSuu8WhnDlOGycQ" target="blank">Q101</a><br />
            <br /><a href="https://open.spotify.com/user/ptheofyl/playlist/3m8A4YDWMi6hhWgAcMehqf?si=AbNt-3YKSlqZgazGvoOzEQ" target="blank">Grimey</a><br />
            <br />

            <h2>Riding Motorcycles</h2>
            <br />
            <p>My first motorcycle was a 1981 Yamaha XS650 Chopper/Bobber 650cc.</p>
            <div className='center'>
                <picture>
                    <source type="image/webp" :srcset="bike1_webp" />
                    <img class="responsive" :src="bike1_jpg" alt="Motorcycle 1" />
                </picture>
            </div>
            <br />
            <p>My second motorcycle was a 2013 Triumph Speed Triple R 1050cc.</p>
            <div className='center'>
                <picture>
                    <source type="image/webp" :srcset="bike2_webp" />
                    <img class="responsive" :src="bike2_jpg" alt="Motorcycle 2" />
                </picture>
            </div>
            <br />
            <p>My third motorcycle was a 2015 Triumph America 899cc.</p>
            <div className='center'>
                <picture>
                    <source type="image/webp" :srcset="bike3_webp" />
                    <img class="responsive" :src="bike3_jpg" alt="Motorcycle 3" />
                </picture>
            </div>

            <h2>Biking</h2>
            <p>I currently own a Trek Shift 3 bicycle which I use to communte to work on as often as I can.</p>

            <h2>Sleeping</h2>
            <p>I have been battling with severe sleep apnea for years so I take my rest very seriously.</p>

            <h2>Eating</h2>
            <p>I love food.  A little too much.</p>

            <h2>Improving Processes</h2>
            <p>I love organization.  There is nothing more satisfying than creating lists and checking things off.  I very much enjoy doing email organization consulting and helping others figure out how to sift through fifty thousand emails and filter and label them and clear out the white noise.  Reducing stress and gaining clarity through automation is likely why I enjoy software engineering as much as I do.</p>
    </div>
</template>

<script>
export default {
    props: ['dark'],
    data() {
        return {
            bike1_jpg: '/img/jpg/bikes/bike1.jpg',
            bike2_jpg: '/img/jpg/bikes/bike2.jpg',
            bike3_jpg: '/img/jpg/bikes/bike3.jpg',
            radmini_jpg: '/img/jpg/bikes/radmini.jpg',
            bike1_webp: '/img/webp/bikes/bike1.webp',
            bike2_webp: '/img/webp/bikes/bike2.webp',
            bike3_webp: '/img/webp/bikes/bike3.webp',
            radmini_webp: '/img/webp/bikes/radmini.webp',
        }
    },
    mounted() {
        //Scrolls to top when view is displayed
        document.getElementById('sandbox').scrollTop = 0;
    }
}
</script>
