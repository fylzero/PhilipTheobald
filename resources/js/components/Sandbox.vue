<template>
    <v-app id="sandbox" :dark="dark">


        <v-navigation-drawer
            v-model="primaryDrawer.model"
            :permanent="primaryDrawer.type === 'permanent'"
            :temporary="primaryDrawer.type === 'temporary'"
            :clipped="primaryDrawer.clipped"
            :floating="primaryDrawer.floating"
            :mini-variant="primaryDrawer.mini"
            absolute
            overflow
            app
        >
            <v-list>
                <v-list-tile v-ripple :to="'/'">
                    <v-list-tile-action><v-icon>home</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Home</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/about'">
                    <v-list-tile-action><v-icon>face</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>About</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/uses'">
                    <v-list-tile-action><v-icon>computer</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Uses</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/skills'">
                    <v-list-tile-action><v-icon>build</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Skills</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/hobbies'">
                    <v-list-tile-action><v-icon>directions_bike</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Hobbies</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/companies'">
                    <v-list-tile-action><v-icon>domain</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Companies</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple :to="'/contact'">
                    <v-list-tile-action><v-icon>email</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Contact</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
                <v-list-tile v-ripple @click="toggleMini">
                    <v-list-tile-action><v-icon>menu</v-icon></v-list-tile-action>
                    <v-list-tile-content><v-list-tile-title>Mini Menu</v-list-tile-title></v-list-tile-content>
                </v-list-tile>
            </v-list>

        </v-navigation-drawer>



        <v-toolbar :clipped-left="primaryDrawer.clipped" app absolute>
            <v-toolbar-side-icon
                v-if="primaryDrawer.type !== 'permanent'"
                @click.stop="primaryDrawer.model = !primaryDrawer.model"
            ></v-toolbar-side-icon>
            <v-toolbar-title>
                <router-link :to="'/'" tag="button">
                    Philip Theobald
                </router-link>
            </v-toolbar-title>

            <v-spacer></v-spacer>

            <div>
                <v-switch v-model="dark" label="Dark Mode"  color="primary" hide-details></v-switch>
            </div>
        </v-toolbar>


        <v-content>
            <v-container fluid>
                <v-layout align-center justify-center>
                    <v-flex xs10>

                        <router-view></router-view>

                    </v-flex>
                </v-layout>
            </v-container>
        </v-content>


        <v-footer :inset="footer.inset" app>
            <span class="px-3">
                &copy; {{ new Date().getFullYear() }} <span style="color: #ff00a7; font-weight: bold; font-size: 16px;">Philip Theobald</span> &bull;
                All Rights Reserved
            </span>
            <span style="position: absolute; right: 20px;">
                Built with <span style="color: #F05340; font-weight: bold; font-size: 16px;">Laravel</span> & <span style="color: #41B883; font-weight: bold; font-size: 16px;">Vue.js</span>
            </span>
        </v-footer>


    </v-app>
</template>

<script>
export default {
    data: () => ({
        dark: true,
        drawers: ["Default (no property)"],
        primaryDrawer: {
            model: null,
            type: "default (no property)",
            clipped: true,
            floating: true,
            mini: false
        },
        footer: {
            inset: true
        }
    }),
    methods: {
        toggleMini() {
            this.primaryDrawer.mini = !this.primaryDrawer.mini;
        }
    }
};
</script>
