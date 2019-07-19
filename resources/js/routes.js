import Home from './components/Home';
import About from './components/About';
import Uses from './components/Uses';
import Skills from './components/Skills';
import Hobbies from './components/Hobbies';
import Companies from './components/Companies';
import Contact from './components/Contact';

export default {

    mode: 'history',
    routes: [
        // { path: '*', component: NotFound },
        { path: '/', component: Home },
        { path: '/about', component: About },
        { path: '/uses', component: Uses },
        { path: '/skills', component: Skills },
        { path: '/hobbies', component: Hobbies },
        { path: '/companies', component: Companies },
        { path: '/contact', component: Contact }
    ]

};
