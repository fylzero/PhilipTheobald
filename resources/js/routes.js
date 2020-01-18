import Home from "./components/Home";
import About from "./components/About";
import Uses from "./components/Uses";
import Skills from "./components/Skills";
import Hobbies from "./components/Hobbies";
import Companies from "./components/Companies";
import Contact from "./components/Contact";

export default {
    mode: 'history',
    routes: [
        // { path: '*', component: NotFound },
        { path: "/", component: Home, meta: { title: 'Philip Theobald' } },
        { path: "/about", component: About, meta: { title: 'About | Philip Theobald' } },
        { path: "/uses", component: Uses, meta: { title: 'Uses | Philip Theobald' } },
        { path: "/skills", component: Skills, meta: { title: 'Skills | Philip Theobald' } },
        { path: "/hobbies", component: Hobbies, meta: { title: 'Hobbies | Philip Theobald' } },
        { path: "/companies", component: Companies, meta: { title: 'Companies | Philip Theobald' } },
        { path: "/contact", component: Contact, meta: { title: 'Contact | Philip Theobald' } }
    ]
};
