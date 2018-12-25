import Terms from './shell/terms.vue';
import Welcome from './shell/welcome.vue';
import HelloWorld from './components/HelloWorld.vue';

const routes = [
  {path: '/', name: 'welcome', component: Welcome},
  {path: '/terms', name: 'terms', component: Terms},
  {path: '/hello', name: 'hello', component: HelloWorld}
]

export {
  routes
}
