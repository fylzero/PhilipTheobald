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
            <v-list dense>
                <v-list-tile :to="'/'">
                    <v-list-tile-action>
                        <v-icon>home</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Home</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile :to="'/contact'">
                    <v-list-tile-action>
                        <v-icon>contact_mail</v-icon>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Contact</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
                <v-list-tile>
                    <v-list-tile-action>
                        <v-switch v-model="primaryDrawer.mini" label="" color="primary" hide-details></v-switch>
                    </v-list-tile-action>
                    <v-list-tile-content>
                        <v-list-tile-title>Mini Menu</v-list-tile-title>
                    </v-list-tile-content>
                </v-list-tile>
            </v-list>

        </v-navigation-drawer>



        <v-toolbar :clipped-left="primaryDrawer.clipped" app absolute>
            <v-toolbar-side-icon
                v-if="primaryDrawer.type !== 'permanent'"
                @click.stop="primaryDrawer.model = !primaryDrawer.model"
            ></v-toolbar-side-icon>
            <v-toolbar-title>
                <router-link :to="'/'">
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
            <span class="px-3">Philip Theobald &copy; {{ new Date().getFullYear() }}</span>
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
    })
};
</script>
