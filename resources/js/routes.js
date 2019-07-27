import Home from './views/Home.vue';
import CheckUser from './views/CheckUser.vue';
import Vote from './views/Vote.vue';
import CheckScore from './views/CheckScore.vue';

//test
import Loading from './components/Loading.vue';
import BlockchainImg1 from './components/BlockchainImg1.vue';

export const routes = [
    {
        path: '/',
        component: Home,
        name: 'home'
    },

    {
        path: '/voter',
        component: CheckUser,
        name: 'voter'
    },

    {
        path: '/vote',
        component: Vote,
        name: 'vote'
    },

    {
        path: '/check-score',
        component: CheckScore,
        name: 'check-score'
    },

    //test

    {
        path: '/test-loading',
        component: Loading,
        name: 'test-loading'
    },

    {
        path: '/test-blockchain-img-1',
        component: BlockchainImg1,
        name: 'test-blockchain-img-1'
    },
]