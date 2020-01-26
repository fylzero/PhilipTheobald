<template>
    <v-app id="sandbox" :dark="dark" :class="{ 'uses-page-colors': uses }">


        <v-navigation-drawer
            v-model="primaryDrawer.model"
            :permanent="primaryDrawer.type === 'permanent'"
            :temporary="primaryDrawer.type === 'temporary'"
            :clipped="primaryDrawer.clipped"
            :floating="primaryDrawer.floating"
            :mini-variant="primaryDrawer.mini"
            fixed
            overflow
            app
        >
            <v-list>
                <v-list-tile v-ripple :to="'/'" @click="primaryDrawer.model = (viewWidth < 600) ? false : true">
                    <v-list-tile-action><v-icon>home</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Home</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/about'" @click="primaryDrawer.model = (viewWidth < 600) ? false : true">
                    <v-list-tile-action><v-icon>face</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>About</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/uses'" @click="primaryDrawer.model = (viewWidth < 600) ? false : true">
                    <v-list-tile-action><v-icon>computer</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Uses</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/skills'" @click="primaryDrawer.model = (viewWidth < 600) ? false : true">
                    <v-list-tile-action><v-icon>build</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Skills</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/hobbies'" @click="primaryDrawer.model = (viewWidth < 600) ? false : true">
                    <v-list-tile-action><v-icon>directions_bike</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Hobbies</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/companies'" @click="primaryDrawer.model = (viewWidth < 600) ? false : true">
                    <v-list-tile-action><v-icon>domain</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Companies</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/contact'" @click="primaryDrawer.model = (viewWidth < 600) ? false : true">
                    <v-list-tile-action><v-icon>email</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Contact</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple @click="toggleMini">
                    <v-list-tile-action><v-icon>menu</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Mini Menu</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
            </v-list>

        </v-navigation-drawer>



        <v-toolbar :clipped-left="primaryDrawer.clipped" app fixed>
            <v-toolbar-side-icon
                v-if="primaryDrawer.type !== 'permanent'"
                @click.stop="primaryDrawer.model = !primaryDrawer.model"
            ></v-toolbar-side-icon>
            <v-toolbar-title @click="primaryDrawer.model = false">
                <router-link :to="'/'" tag="button">
                    Philip Theobald
                </router-link>
            </v-toolbar-title>

            <v-spacer></v-spacer>

            <div>
                <button @click="toggleMode" v-ripple v-if="dark" class="dynamicButtonSize">
                    <font-awesome-icon icon="lightbulb" style="color: #ffffb0;" /> <span class="dynamicTextSize">Light Mode</span>
                </button>
                <button @click="toggleMode" v-ripple v-else class="dynamicButtonSize">
                    <font-awesome-icon icon="moon" style="color: #1e1e74;" /> <span class="dynamicTextSize">Dark Mode</span>
                </button>
            </div>
        </v-toolbar>


        <v-content>
            <v-container fluid>
                <v-layout align-center justify-center>
                    <v-flex xs10>

                        <transition
                            name="fade"
                            mode="out-in"
                        >
                            <router-view :dark="dark"></router-view>
                        </transition>

                        <div class="thing">
                            <div class="other">

                            </div>
                        </div>

                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>


        <v-footer :inset="footer.inset" app>

            <v-layout row wrap class="footer-pad">
                <v-flex lg6 class="low-center">
                    &copy; {{ new Date().getFullYear() }} <span style="color: #ff00a7; font-weight: bold; font-size: 16px;">Philip Theobald</span> &bull;
                    All Rights Reserved
                </v-flex>
                <v-flex lg6 class="low-center-right">
                    Built with <span style="color: #F05340; font-weight: bold; font-size: 16px;">Laravel</span> & <span style="color: #41B883; font-weight: bold; font-size: 16px;">Vue.js</span>
                </v-flex>
            </v-layout>
        </v-footer>


    </v-app>
</template>

<script>
export default {
    data() {
        return {
            viewWidth: window.innerWidth,
            dark: true,
            drawers: ["Default (no property)"],
            primaryDrawer: {
                model: false,
                type: "default (no property)",
                clipped: true,
                floating: true,
                mini: false
            },
            footer: {
                inset: true
            }
        }
    },
    methods: {
        toggleMini() {
            this.primaryDrawer.mini = !this.primaryDrawer.mini;
        },
        toggleMode() {
            this.dark = !this.dark;
        },
        closeMenu() {

        }
    },
    computed: {
        uses() {
            return this.$route.path == '/uses' ? true : false;
        }
    }
}
</script>

<style lang="scss">

.fade-enter-active,
.fade-leave-active {
  transition-duration: 0.3s;
  transition-property: opacity;
  transition-timing-function: ease;
}

.fade-enter,
.fade-leave-active {
  opacity: 0
}

.theme--dark.application.uses-page-colors {
    color: #F7F1FF;
    background-color: #222222;
}

.limit-width {
    max-width: 800px;
}

.center {
    margin: 0 auto;
}

.text-center {
    text-align: center;
}

.pb-20 {
    padding-bottom: 20px;
}

.pb-100 {
    padding-bottom: 100px;
}

p {
    margin: 0px;
    padding: 0px;
}

</style>
