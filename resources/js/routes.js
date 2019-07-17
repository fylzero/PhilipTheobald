import Home from './components/Home';
import Contact from './components/Contact';

export default {

    mode: 'history',
    routes: [
        // {
        //     path: '*',
        //     component: NotFound
        // },
        {
            path: '/',
            component: Home
        },
        {
            path: '/contact',
            component: Contact
        }
    ]

};
