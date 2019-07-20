<template>
    <v-app id="sandbox" :dark="dark">


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
                <v-list-tile v-ripple :to="'/'" @click="primaryDrawer.model = false">
                    <v-list-tile-action><v-icon>home</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Home</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/about'" @click="primaryDrawer.model = false">
                    <v-list-tile-action><v-icon>face</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>About</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/uses'" @click="primaryDrawer.model = false">
                    <v-list-tile-action><v-icon>computer</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Uses</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/skills'" @click="primaryDrawer.model = false">
                    <v-list-tile-action><v-icon>build</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Skills</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/hobbies'" @click="primaryDrawer.model = false">
                    <v-list-tile-action><v-icon>directions_bike</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Hobbies</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/companies'" @click="primaryDrawer.model = false">
                    <v-list-tile-action><v-icon>domain</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Companies</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/contact'" @click="primaryDrawer.model = false">
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

                        <router-view :dark="dark"></router-view>

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
    }
}
</script>
